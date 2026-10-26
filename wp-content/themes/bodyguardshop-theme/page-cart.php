<?php
/**
 * Template Name: Cart Page Template
 * Description: Dedicated Dark Luxury WooCommerce Cart Page for Bodyguard Shop
 */

defined('ABSPATH') || exit;

get_header();
?>
<main id="main-content" class="bodyguard-cart-page" style="background: #0A0A0E; color: #FFFFFF; min-height: 75vh; padding: 40px 0 80px;">
  <div class="container" style="max-width: 1180px; margin: 0 auto; padding: 0 20px;">
    
    <!-- Breadcrumb / Header Banner -->
    <div class="cart-header-banner" style="margin-bottom: 35px; text-align: left; border-bottom: 1px solid rgba(201, 169, 110, 0.18); padding-bottom: 20px;">
      <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 15px;">
        <div>
          <span style="display: inline-flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 700; color: #C9A96E; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 6px;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#C9A96E" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            Security Checkout Flow
          </span>
          <h1 style="font-family: 'Hind Siliguri', 'Outfit', sans-serif; font-size: clamp(1.8rem, 3.2vw, 2.4rem); font-weight: 800; color: #FFFFFF; margin: 0; line-height: 1.2;">
            শপিং কার্ট <span style="font-size: 0.65em; font-weight: 600; color: #9A9AA6;">/ Shopping Cart</span>
          </h1>
        </div>
        
        <!-- Trust badge indicator -->
        <div style="display: inline-flex; align-items: center; gap: 10px; background: rgba(20, 20, 28, 0.9); border: 1px solid rgba(201, 169, 110, 0.25); border-radius: 30px; padding: 8px 18px; font-size: 13px; color: #C9A96E;">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          <span style="font-weight: 600; color: #FFFFFF;">১০০% নিরাপদ ডেলিভারি ও যাচাইকৃত পণ্য</span>
        </div>
      </div>
    </div>

    <!-- Main Cart Content (Always use classic WooCommerce cart shortcode to avoid Gutenberg block distortion) -->
    <div class="cart-content-wrapper">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          echo do_shortcode('[woocommerce_cart]');
        endwhile;
      else :
        echo do_shortcode('[woocommerce_cart]');
      endif;
      ?>
    </div>

  </div>
</main>
<?php
get_footer();
