<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'container' ); ?>>

<?php if (!is_front_page()) : ?>
<h1><?php the_title();?></h1>
<?php endif; ?>

<div class="post-content">
<?php the_content(); ?>
</div>

<footer class="entry-footer">
  <?php flipletsupport_entry_footer(); ?>
</footer>

</article>