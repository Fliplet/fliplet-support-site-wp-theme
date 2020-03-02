<?php
/**
 * Functions that adds functionality to the WrodPress site.
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

/* Registers menu locations */
register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
  )
);

/* Automatically crop images into the following sizes */
add_image_size('small', '300', '300', true);
add_image_size('medium', '500', '500', true);
add_image_size('large', '800', '800', true);


function is_full_width_template() {
  $full_width_templates = array(
    'page-full-width.php'
  );

  $template_slug = get_page_template_slug();

  return in_array($template_slug, $full_width_templates);
}
?>