<?php

add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('custom-logo', array(
  'height' => 480,
  'width' => 720,
  'flex-height' => true,
  'flex-width' => true,
));
add_theme_support('post-thumbnails');

function load_bootstrap_css() {
  wp_register_style('bootstrap_css', get_template_directory_uri() . '/styles/vendor/bootstrap/bootstrap.min.css', array(), false, 'all');

  wp_enqueue_style('bootstrap_css');
}

function load_theme_styles() {
  wp_register_style('theme_style', get_template_directory_uri() . '/style.css', array(), false, 'all');

  wp_enqueue_style('theme_style');
}

add_action('wp_enqueue_scripts', 'load_bootstrap_css');
add_action('wp_enqueue_scripts', 'load_theme_styles');

function load_jquery() {
  wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery/jquery-3.4.1.min.js', '', false, false);

  wp_enqueue_script('jquery');
}

function load_bootstrap_js() {
  wp_register_script('bootstrap_js', get_template_directory_uri() . '/js/vendor/bootstrap/bootstrap.min.js', '', false, false);

  wp_enqueue_script('bootstrap_js');
}

function load_theme_js() {
  wp_register_script('theme_js', get_template_directory_uri() . '/js/scripts.js', '', 1, false);

  wp_enqueue_script('theme_js');
}

add_action('wp_enqueue_scripts', 'load_jquery');
add_action('wp_enqueue_scripts', 'load_bootstrap_js');
add_action('wp_enqueue_scripts', 'load_theme_js');

register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
  )
);

add_image_size('small', '300', '300', true);
add_image_size('medium', '500', '500', true);
add_image_size('large', '800', '800', true);

class Nav_Menu_Walker_Bootstrap extends Walker_Nav_Menu {
  public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $class_names = $value = 'nav-item';
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $class_names = in_array("current_page_item", $item->classes) ? ' active' : '';

    $output .= '<li id="menu-item-' . $item->ID . '" class="' . $value . $class_names . '">';
    $attributes = '';

    !empty($item->attr_title)
    // Avoid redundant titles
     and $item->attr_title !== $item->title
    and $attributes .= ' title="' . esc_attr($item->attr_title) . '"';

    !empty($item->url)
    and $attributes .= ' href="' . esc_attr($item->url) . '"';

    $attributes = trim($attributes);
    $title = apply_filters('the_title', $item->title, $item->ID);
    $item_output = "$args->before<a class='nav-link' $attributes>$args->link_before $title</a>" . "$args->link_after $args->after";

    // Since $output is called by reference we don't need to return anything.
    $output .= apply_filters(
      'walker_nav_menu_start_el',
      $item_output,
      $item,
      $depth,
      $args
    );
  }

  public function start_lvl(&$output, $depth = 0, $args = null) {
    $output .= '<ul class="sub-menu">';
  }

  public function end_lvl(&$output, $depth = 0, $args = null) {
    $output .= '</ul>';
  }

  public function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $output .= '</li>';
  }
}
