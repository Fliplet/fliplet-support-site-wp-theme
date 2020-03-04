<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

get_header();
?>

<article class="<?php echo is_full_width_template() ? 'container-fluid' : 'container-lg' ?>">

<?php get_template_part('template-parts/content/article', 'header'); ?>

<hr>

<?php get_template_part('template-parts/content/content', 'categories'); ?>

<?php if (have_posts()) : ?>
<div class="row post-list">
  <?php
  while (have_posts()) :
    the_post();

    get_template_part('template-parts/content/content', 'excerpt');
  endwhile;
  ?>
</div>

<?php echo bootstrap_pagination(); ?>

<?php else :
  get_template_part('template-parts/content/content', 'none');
endif;
?>

</article>

<?php get_footer();?>