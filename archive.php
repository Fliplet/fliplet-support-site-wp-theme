<?php get_header();?>

<h1><?php single_cat_title();?></h1>

<?php if (have_posts()): while (have_posts()): the_post();?>

  <h3><?php the_title();?></h3>
  <?php if (has_post_thumbnail()): ?>
    <img src="<?php the_post_thumbnail_url('medium');?>">
  <?php endif;?>
  <p><?php the_excerpt();?></p>
  <a href="<?php the_permalink();?>">See more</a>

<?php endwhile;endif;?>

<?php get_footer();?>