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

<?php if (have_posts()) : ?>
<h1>
  <?php _e( 'Search results for: ', 'flipletsupport' ); ?>
  <span><?php echo get_search_query(); ?></span>
</h1>

<div class="row post-list">
  <?php
  while (have_posts()) :
    the_post();

    get_template_part('template-parts/content/content', 'excerpt');
  endwhile;
  ?>
</div>
<?php else : ?>
  <h1>
    <?php _e( 'Nothing Found', 'flipletsupport' ); ?>
  </h1>
<?php endif; ?>

</article>

<?php get_footer(); ?>