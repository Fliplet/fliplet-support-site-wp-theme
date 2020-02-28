<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if (!is_front_page()) : ?>
<h1><?php the_title();?></h1>
<?php endif; ?>

<?php
  the_content();
?>
</article>