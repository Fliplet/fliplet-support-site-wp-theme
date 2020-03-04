<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

get_header();
?>

<article class="<?php echo is_full_width_template() ? 'container-fluid' : 'container-lg' ?>">

<?php get_template_part('template-parts/search/search', 'header'); ?>

  <div class="search-result-list">
  <?php if (have_posts()) : ?>
    <?php
    while (have_posts()) :
      the_post();

      get_template_part('template-parts/search/search', 'excerpt');
    endwhile;
    ?>
  <?php else : ?>
    <h1>
      <?php _e( 'Nothing Found', 'flipletsupport' ); ?>
    </h1>
  <?php endif; ?>
  </div>

</article>

<?php get_footer(); ?>