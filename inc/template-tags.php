<?php
/**
 * Custom template tags for this theme
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

if ( ! function_exists( 'flipletsupport_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information of the article.
	 */
	function flipletsupport_entry_footer() {

		printf(
			/* translators: 1: SVG icon. 2: Posted in label, only visible to screen readers. 3: List of categories. */
			'<a href="%1$s" class="btn btn-default flex"><i class="fl-icon-chevron-left-2"></i> %2$s</a>',
			esc_url( get_permalink( get_option( 'page_for_posts' ) ) ),
			__( 'Code library home', 'flipletsupport' )
		); // WPCS: XSS OK.

		printf(
			/* translators: 1: SVG icon. 2: Posted in label, only visible to screen readers. 3: List of categories. */
			'<a href="%1$s" class="btn btn-default need-help">%2$s</a>',
			'mailto:hello@fliplet.com',
			__( 'Need help?', 'flipletsupport' )
		); // WPCS: XSS OK.

		// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'flipletsupport' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
	}
endif;