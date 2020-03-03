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

		// Hide author, post date, category and tag text for pages.
		if ( get_post_type() === 'post' ) {
			// TODO: end of article info
		}

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