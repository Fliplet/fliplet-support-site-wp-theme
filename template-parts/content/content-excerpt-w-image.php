<?php
/**
 * Template part for displaying post archives and search results with images
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
  <?php if (has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url('large');?>">
  <?php endif;?>
    <div class="card-body">
      <?php the_category();?>
      <a class="pseudo-link" href="<?php the_permalink();?>">
        <h3 class="card-title"><?php the_title();?></h3>
        <?php the_excerpt();?>
      </a>
      <a href="<?php the_permalink();?>" class="btn btn-default">Keep reading</a>
    </div>
  </div>
</div>