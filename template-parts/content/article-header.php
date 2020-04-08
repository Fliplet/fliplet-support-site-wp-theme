<?php
/**
 * Template part for displaying the title of the code library.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */
?>

<div class="article-header">
  <h1><?php echo get_the_title( get_option('page_for_posts', true) ); ?></h1>
  <p>You can extend your app by adding in custom code. We've created a reference library of examples to demo common use cases.</p>
  <?php
  wp_nav_menu(
    array(
      'theme_location' => 'code-library-menu',
      'menu_class' => 'code-library-menu'
    )
  );
  ?>
</div>