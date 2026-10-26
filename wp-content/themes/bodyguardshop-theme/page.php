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

<main id="main-content" style="padding: 45px 0 75px; min-height: 70vh; background: #0A0A0E; color: #FFFFFF;">
  <div class="container" style="max-width: 1180px; margin: 0 auto; padding: 0 20px;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php if (!is_cart() && !is_checkout()) : ?>
        <h1 style="font-family: var(--font-heading, 'Hind Siliguri', sans-serif); font-size: clamp(1.8rem, 3.5vw, 2.4rem); font-weight: 800; margin-bottom: 10px; color: #FFFFFF;">
          <?php the_title(); ?>
        </h1>
        <div style="width: 50px; height: 3px; background: linear-gradient(90deg, #C9A96E, #E5C384); margin-bottom: 25px; border-radius: 2px;"></div>
      <?php endif; ?>
      <div class="entry-content" style="color: #E2E2EA; line-height: 1.8; font-size: 15px;">
        <?php
        if ( function_exists('is_cart') && is_cart() ) {
            echo do_shortcode('[woocommerce_cart]');
        } else {
            the_content();
        }
        ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
