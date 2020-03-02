<?php
/**
 * Template part for displaying the top menu.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

wp_nav_menu(
  array(
    'theme_location' => 'top-menu',
    'menu_class' => 'navbar-nav',
    'container' => 'div',
    'container_class' => 'collapse',
    'container_id' => 'navbar-mobile',
    'walker' => new Nav_Menu_Walker_Bootstrap(),
  )
);
?>