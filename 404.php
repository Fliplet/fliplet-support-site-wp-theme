<?php get_header();?>

<div class="error-404 not-found">
  <header class="page-header">
    <h1 class="page-title"><?php _e( 'Oops! The page can&rsquo;t be found.', 'flipletsupport' ); ?></h1>
  </header>

  <div class="page-content">
    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'flipletsupport' ); ?></p>
    <?php get_search_form(); ?>
  </div>
</div>

<?php get_footer();?>