<?php get_header(); ?>

<?php get_search_form(); ?>

<?php if (have_posts()) : ?>
  <h1>
    <?php _e( 'Search results for: ', 'flipletsupport' ); ?>
    <span><?php echo get_search_query(); ?></span>
  </h1>

  <?php
    while (have_posts()) :
      the_post();
  ?>

    <h3><?php the_title(); ?></h3>

    <?php if (has_post_thumbnail()) : ?>
      <img src="<?php the_post_thumbnail_url('medium'); ?>">
    <?php endif; ?>

    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>">See more</a>

  <?php endwhile; ?>
<?php else : ?>
  <h1>
    <?php _e( 'Nothing Found', 'flipletsupport' ); ?>
  </h1>
<?php endif; ?>

<?php get_footer(); ?>