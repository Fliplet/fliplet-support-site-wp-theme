<?php get_header(); ?>

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

<?php get_footer(); ?>