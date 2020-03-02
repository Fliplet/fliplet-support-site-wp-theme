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

<h1><?php single_cat_title();?></h1>

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
<?php else :
  get_template_part('template-parts/content/content', 'none');
endif;
?>

<?php get_footer();?>