<?php
/**
 * Template part for displaying the title of the help library.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */
?>

<div class="article-header">
  <h1>Help center</h1>
  <p>View our articles and videos to become an expert in using Fliplet Studio to build, test, and publish apps.</p>
  <?php
  wp_nav_menu(
    array(
      'theme_location' => 'help-center-menu',
      'menu_class' => 'help-center-menu'
    )
  );
  ?>
</div>