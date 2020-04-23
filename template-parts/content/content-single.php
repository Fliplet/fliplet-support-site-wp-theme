<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

?>

<?php if (has_post_thumbnail()) : ?>
<div class="post-hero" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
  <div class="hero-screen"></div>
  <div class="hero-content <?php echo is_full_width_template() ? 'container-fluid' : 'container'; ?>">
    <span class="post-categories"><?php the_category();?></span>
    <h1><?php the_title(); ?></h1>
    <?php if (has_excerpt()) : ?>
    <p class="title-subtitle"><?php echo get_post_meta( get_the_ID(), 'Description', true ); ?></p>
    <?php endif; ?>
  </div>
</div>
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( is_full_width_template() ? 'container-fluid' : 'container' ); ?>>

<?php if (!has_post_thumbnail()) : ?>
<span class="post-categories"><?php the_category();?></span>
<h1><?php the_title(); ?></h1>
<?php if (has_excerpt()) : ?>
<p class="title-subtitle"><?php echo get_post_meta( get_the_ID(), 'Description', true ); ?></p>
<?php endif; ?>
<?php endif; ?>

<div class="post-content">
<?php the_content(); ?>
</div>

<footer class="entry-footer">
  <?php flipletsupport_entry_footer(); ?>
</footer>

</article>