<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

?>

<div class="col-md-4 article-card">
  <div class="card">
    <div class="card-body">
      <?php the_category();?>
      <h3 class="card-title"><?php the_title();?></h3>
      <?php the_excerpt();?>
      <a href="<?php the_permalink();?>" class="btn btn-primary">Read more</a>
    </div>
  </div>
</div>