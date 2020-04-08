<?php
/**
 * Template Name: Code library
 * 
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */

get_header();
?>

<?php
if (have_posts()):
  while (have_posts()):
    the_post();
    get_template_part('template-parts/content/content', 'alt-page');
  endwhile;
endif;
?>

<?php get_footer();?>