<?php
/**
 * A custom Class to render a custom menu.
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

/* Custom navigation menu */
class Nav_Menu_Walker_Bootstrap extends Walker_Nav_Menu {
  public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    $class_names = $value = 'nav-item';
    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $category_id;
    $isHelpLibrary;
    $isCodeLibrary;

    if (is_category()) {
      $cat = get_query_var('cat');
      $this_category = get_category($cat);
      $category_id = $this_category->category_parent;
    }

    if ($category_id == get_help_library_category_id()) {
      $isHelpLibrary = $item->object_id == get_page_by_title( 'Help Center' )->ID;
    } else if ($category_id == get_code_library_category_id()) {
      $isCodeLibrary = $item->object_id == get_page_by_title( 'Code library' )->ID;
    }

    $class_names = in_array("current_page_item", $item->classes) || $isHelpLibrary || $isCodeLibrary ? ' active' : '';

    $output .= '<li id="menu-item-' . $item->ID . '" class="' . $value . $class_names . '">';
    $attributes = '';

    !empty($item->attr_title)
    // Avoid redundant titles
    and $item->attr_title !== $item->title
    and $attributes .= ' title="' . esc_attr($item->attr_title) . '"';

    !empty($item->url)
    and $attributes .= ' href="' . esc_attr($item->url) . '"';

    !empty($item->target)
    and $attributes .= ' target="' . esc_attr($item->target) . '"';

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