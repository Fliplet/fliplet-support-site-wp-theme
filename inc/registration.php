<?php
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
?>