<!DOCTYPE html>
<html>
<head>
  <?php wp_head();?>
</head>

<body <?php body_class();?>>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
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

  <?php
wp_nav_menu(
  array(
    'theme_location' => 'top-menu',
    'menu_class' => 'navbar-nav mr-auto',
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse',
    'walker' => new Nav_Menu_Walker_Bootstrap(),
  )
);
?>
</nav>