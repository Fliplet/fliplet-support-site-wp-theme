<?php
/**
 * Template part for displaying search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

?>

<?php
$category_id;

if (has_category()) {
  $this_categories = get_the_category();
  $category_id = $this_categories[0]->category_parent;
}
?>

<div class="result-details">
  <h3 class="search-result-title">
    <a href="<?php the_permalink();?>"><?php the_title();?></a>
  </h3>
  <div class="search-result-from">
    <span>From:</span>
    <?php if ($category_id == get_help_library_category_id()) : ?>
      <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Help Center' ) ) ); ?>">Help Center</a>
    <?php else : ?>
      <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php echo get_the_title( get_option('page_for_posts', true) ); ?></a>
    <?php endif; ?>
  </div>

  <?php if (has_category()) : ?>
  <div class="search-result-categories">
    <span>Categories:</span>
    <?php the_category();?>
  </div>
  <?php 
  endif;

  the_excerpt();
  ?>
</div>

