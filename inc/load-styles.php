<?php
/* Enqueues the styles */
function load_bootstrap_css() {
  wp_register_style('bootstrap_css', get_template_directory_uri() . '/styles/vendor/bootstrap/bootstrap.min.css', array(), '4.4.1', 'all');

  wp_enqueue_style('bootstrap_css');
}

function load_theme_styles() {
  wp_register_style('theme_style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');

  wp_enqueue_style('theme_style');
}

add_action('wp_enqueue_scripts', 'load_bootstrap_css');
add_action('wp_enqueue_scripts', 'load_theme_styles');
?>