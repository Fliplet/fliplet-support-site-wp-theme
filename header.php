<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php body_class();?>>
<?php get_template_part( 'template-parts/header/head', 'tag' ); ?>

<body <?php body_class();?>>

  <?php get_template_part( 'template-parts/header/top', 'navbar' ); ?>
  <?php get_template_part( 'template-parts/header/slide', 'nav' ); ?>

  <div id="page" class="<?php echo is_full_width_template() ? 'container-fluid' : 'container';?>">