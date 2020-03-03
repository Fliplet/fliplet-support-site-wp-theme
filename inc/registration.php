<?php
/**
 * Functions that adds functionality to the WrodPress site.
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

/* Registers menu locations */
register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
  )
);

/* Automatically crop images into the following sizes */
add_image_size('small', '300', '300', true);
add_image_size('medium', '500', '500', true);
add_image_size('large', '800', '800', true);


function is_full_width_template() {
  $full_width_templates = array(
    'page-full-width.php'
  );

  $template_slug = get_page_template_slug();

  return in_array($template_slug, $full_width_templates);
}

function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {

	if ( null === $wp_query ) {
		global $wp_query;
	}

	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 1,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( '« Prev' ),
			'next_text'    => __( 'Next »' ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);

	if ( is_array( $pages ) ) {
		$pagination = '<div class="pagination-holder"><ul class="pagination">';

		foreach ($pages as $page) {
      $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
    }

		$pagination .= '</ul></div>';

		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}

	return null;
}