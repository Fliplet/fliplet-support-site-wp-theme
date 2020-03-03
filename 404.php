<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

get_header();
?>

<div class="error-404 not-found">
  <header class="page-header">
    <h1 class="page-title"><?php _e( 'Not found', 'flipletsupport' ); ?></h1>
  </header>

  <div class="page-content">
    <img src="<?php echo get_template_directory_uri() . '/images/404-image.png'; ?>" title="Not found">
    <a class="btn btn-secondary" href="<?php echo get_home_url(); ?>">Go to homepage</a>
  </div>
</div>

<?php get_footer();?>