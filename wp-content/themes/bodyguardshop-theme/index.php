<?php get_header(); ?>
<main id="main-content" style="padding-top: 72px; min-height: 60vh;">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article><?php the_content(); ?></article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
