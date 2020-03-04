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

<div class="result-details">
  <h3 class="search-result-title">
    <a href="<?php the_permalink();?>"><?php the_title();?></a>
  </h3>
  <p class="search-result-slug">
    <a href="<?php the_permalink();?>"><?php the_permalink();?></a>
  </p>
  <div class="search-result-categories">
    <span>Categories:</span>
    <?php the_category();?>
  </div>
  <?php the_excerpt();?>
</div>

