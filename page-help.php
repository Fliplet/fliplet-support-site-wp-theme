<?php
/**
 * Template Name: Help center
 * 
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

get_header();
?>

<?php
$category_id = get_help_library_category_id();

$args = [
  'tax_query' => array(
    array(
      'taxonomy' => 'category',
      'field'    => 'term_id',
      'terms'    => $category_id,
    ),
  ),
];

$q = new WP_Query( $args );
?>

<article class="<?php echo is_full_width_template() ? 'container-fluid' : 'container-lg' ?>">

<?php get_template_part('template-parts/content/article', 'header-help'); ?>

<hr>

<?php get_template_part('template-parts/content/content', 'categories-help'); ?>

<?php if ($q->have_posts()) : ?>
<div class="row post-list">
  <?php
    while ($q->have_posts()) :
      $q->the_post();

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