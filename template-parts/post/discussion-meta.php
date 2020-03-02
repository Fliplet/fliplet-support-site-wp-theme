<?php
/**
 * The template for displaying Current Discussion on posts
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

/* Get data from current discussion on post. */
$discussion    = flipletsupport_get_discussion_data();
$has_responses = $discussion->responses > 0;

if ( $has_responses ) {
	/* translators: %d: Number of comments. */
	$meta_label = sprintf( _n( '%d Comment', '%d Comments', $discussion->responses, 'flipletsupport' ), $discussion->responses );
} else {
	$meta_label = __( 'No comments', 'flipletsupport' );
}
?>

<div class="discussion-meta">
	<?php
	if ( $has_responses ) {
		flipletsupport_discussion_avatars_list( $discussion->authors );
	}
	?>
	<p class="discussion-meta-info">
		<span><?php echo esc_html( $meta_label ); ?></span>
	</p>
</div><!-- .discussion-meta -->
