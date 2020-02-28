<!DOCTYPE html>
<html <?php body_class();?>>
<head>
  <meta name="description" content="<?php bloginfo('description');?>">
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-sclae=1">
  <?php wp_head();?>
</head>

<body <?php body_class();?>>

  <?php get_template_part( 'template-parts/header/top', 'navbar' ); ?>
  <?php get_template_part( 'template-parts/header/slide', 'nav' ); ?>

  <div id="page" class="container">