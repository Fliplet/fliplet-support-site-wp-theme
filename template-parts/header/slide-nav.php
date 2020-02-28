<?php
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