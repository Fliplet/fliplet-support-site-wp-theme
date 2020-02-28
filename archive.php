<?php get_header();?>

<h1><?php single_cat_title();?></h1>

<?php get_template_part('template-parts/content/content', 'categories'); ?>

<?php if (have_posts()) : ?>
<div class="row post-list">
  <?php
  while (have_posts()) :
    the_post();

    get_template_part('template-parts/content/content', 'excerpt');
  endwhile;
  ?>
</div>
<?php else :
  get_template_part('template-parts/content/content', 'none');
endif;
?>

<?php get_footer();?>