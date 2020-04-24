<?php
/**
 * Template part for displaying post archives
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
      <div class="card-inner-body">
        <?php the_category();?>
        <a class="pseudo-link" href="<?php the_permalink();?>">
          <h3 class="card-title"><?php the_title();?></h3>
          <?php the_excerpt();?>
        </a>
      </div>
      <div class="card-inner-footer">
        <a href="<?php the_permalink();?>" class="btn btn-default">Keep reading</a>
      </div>
    </div>
  </div>
</div>