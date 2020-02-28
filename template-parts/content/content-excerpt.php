<div class="col-md-4">
  <div class="card">
  <?php if (has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url('large');?>">
  <?php endif;?>
    <div class="card-body">
      <?php the_category();?>
      <h3 class="card-title"><?php the_title();?></h3>
      <?php the_excerpt();?>
      <a href="<?php the_permalink();?>" class="btn btn-primary">Read more</a>
    </div>
  </div>
</div>