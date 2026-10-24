<?php
/**
 * page.php - Generic Page Template
 * Redirects front page to front-page.php logic
 */

// If this is the front page, load front-page content
if (is_front_page()) {
    include(get_template_directory() . '/front-page.php');
    exit;
}

get_header(); ?>

<main id="main-content" style="padding: 40px 0 60px; min-height: 65vh; background: #ffffff;">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1 style="font-family: var(--font-heading); font-size: 2.2rem; font-weight: 800; margin-bottom: 20px; color: var(--sob-dark, #1c1c26);">
        <?php the_title(); ?>
      </h1>
      <div style="color: var(--sob-text, #2d2d3a); line-height: 1.8; font-size: 15px;">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
