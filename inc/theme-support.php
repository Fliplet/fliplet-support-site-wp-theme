<?php
/**
 * Functions that adds support to new features in the backend.
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

/* Extends theme support */
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('custom-logo', array(
  'flex-height' => true,
  'flex-width' => true,
));
add_theme_support('post-thumbnails');
?>