<?php
/**
 * Search Results Template
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main class="sob-section container" style="padding: 50px 20px 80px; min-height: 70vh;">
  <div class="sob-section-head">
    <span class="eyebrow">Search Results</span>
    <h2><?php printf( esc_html__( '"%s" এর জন্য ফলাফল', 'saleonbeauty' ), get_search_query() ); ?></h2>
    <div class="sob-divider"></div>
  </div>

  <?php if ( have_posts() ) : ?>
    <div class="sob-product-grid">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
        if ( get_post_type() === 'product' ) {
            get_template_part( 'woocommerce/content', 'product' );
        } else {
        ?>
          <article <?php post_class('product-card'); ?> style="padding: 20px;">
            <h3 class="card-title" style="height: auto; margin-bottom: 10px;">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div style="color: var(--sob-gray); font-size: 13.5px; margin-bottom: 14px;">
              <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn-order-now" style="font-size: 13px; padding: 8px 16px;">বিস্তারিত দেখুন</a>
          </article>
        <?php } ?>
      <?php endwhile; ?>
    </div>
    <div style="margin-top: 40px; text-align: center;">
      <?php the_posts_pagination(); ?>
    </div>
  <?php else : ?>
    <div style="text-align: center; padding: 60px 20px; color: var(--sob-gray);">
      <span style="font-size: 4rem; display: block; margin-bottom: 16px;">🔍</span>
      <h3 style="color: var(--sob-dark); margin-bottom: 8px;">কোনো ফলাফল পাওয়া যায়নি</h3>
      <p style="margin-bottom: 24px;">দুঃখিত, আপনার খোঁজা শব্দের সাথে কোনো প্রোডাক্ট বা পোস্ট মেলেনি। অন্য কিছু লিখে খুঁজে দেখুন।</p>
      <a href="<?php echo function_exists('wc_get_page_id') ? esc_url( get_permalink( wc_get_page_id('shop') ) ) : home_url('/'); ?>" class="btn btn-primary">
        সকল প্রোডাক্ট দেখুন →
      </a>
    </div>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
