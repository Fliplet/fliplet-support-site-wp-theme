<?php
/**
 * Template part for displaying the top navigation bar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */
?>

<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
    <?php
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    ?>

    <img src="<?php echo $image[0]; ?>" alt="">
    <!-- Comment out site name and description
    <?php echo get_bloginfo('name'); ?>
    <?php echo get_bloginfo('description'); ?>
    -->
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile" aria-controls="navbar-mobile" aria-expanded="false">
    <div class="navbar-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </button>

  <?php
  wp_nav_menu(
    array(
      'theme_location' => 'top-menu',
      'menu_class' => 'navbar-nav',
      'container' => 'div',
      'container_class' => 'navbar-collapse',
      'walker' => new Nav_Menu_Walker_Bootstrap(),
    )
  );
  ?>
</nav>