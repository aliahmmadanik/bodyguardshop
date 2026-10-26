<?php
/**
 * Template Name: Track Order Page Template
 * Description: Dedicated Dark Luxury Order Tracking Page for Bodyguard Shop
 */

defined('ABSPATH') || exit;

get_header();
?>
<main id="main-content" class="bodyguard-track-order-page" style="background: #0A0A0E; color: #FFFFFF; min-height: 78vh; padding: 40px 0 90px;">
  <div class="container" style="max-width: 1180px; margin: 0 auto; padding: 0 20px;">
    
    <!-- Top Header Banner -->
    <div class="track-header-banner" style="margin-bottom: 40px; text-align: left; border-bottom: 1px solid rgba(201, 169, 110, 0.18); padding-bottom: 20px;">
      <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 15px;">
        <div>
          <span style="display: inline-flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 700; color: #C9A96E; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 6px;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#C9A96E" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
            Order Dispatch &amp; Live Logistics
          </span>
          <h1 style="font-family: 'Hind Siliguri', 'Outfit', sans-serif; font-size: clamp(1.8rem, 3.2vw, 2.4rem); font-weight: 800; color: #FFFFFF; margin: 0; line-height: 1.2;">
            অর্ডার ট্র্যাক করুন <span style="font-size: 0.65em; font-weight: 600; color: #9A9AA6;">/ Track Your Order</span>
          </h1>
        </div>
        
        <!-- Trust badge indicator -->
        <div style="display: inline-flex; align-items: center; gap: 10px; background: rgba(20, 20, 28, 0.9); border: 1px solid rgba(201, 169, 110, 0.25); border-radius: 30px; padding: 8px 18px; font-size: 13px; color: #C9A96E;">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          <span style="font-weight: 600; color: #FFFFFF;">১০০% নিরাপদ ডেলিভারি ও রিয়েল-টাইম ট্র্যাকিং</span>
        </div>
      </div>
    </div>

    <!-- Centered Luxury Track Order Card -->
    <div class="bodyguard-track-card" style="max-width: 720px; margin: 10px auto 0; background: #14141C; border: 1px solid rgba(201, 169, 110, 0.28); border-radius: 20px; padding: 48px 36px; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.55);">
      
      <!-- Card Header -->
      <div style="text-align: center; margin-bottom: 32px;">
        <div style="width: 76px; height: 76px; margin: 0 auto 20px; background: rgba(201, 169, 110, 0.12); border: 2px solid rgba(201, 169, 110, 0.35); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 28px rgba(201, 169, 110, 0.18);">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#C9A96E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
          </svg>
        </div>
        <h2 style="color: #FFFFFF; font-family: 'Hind Siliguri', 'Outfit', sans-serif; font-size: clamp(1.4rem, 2.5vw, 1.85rem); font-weight: 800; margin-bottom: 10px; line-height: 1.3;">
          আপনার অর্ডারের বর্তমান অবস্থা জানুন
        </h2>
        <p style="color: #B8B8C8; font-size: 15px; line-height: 1.65; max-width: 540px; margin: 0 auto;">
          অর্ডার কনফার্মেশনের পর আপনার রিসিট বা ইমেইলে প্রাপ্ত <strong style="color: #C9A96E;">Order ID</strong> এবং <strong style="color: #C9A96E;">Billing Email</strong> নিচের ঘরে লিখে ট্র্যাক বাটনে ক্লিক করুন।
        </p>
      </div>

      <!-- WooCommerce Track Order Shortcode Output -->
      <div class="bodyguard-track-form-wrap">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
            echo do_shortcode('[woocommerce_order_tracking]');
          endwhile;
        else :
          echo do_shortcode('[woocommerce_order_tracking]');
        endif;
        ?>
      </div>

      <!-- Bottom Trust Features Strip -->
      <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 20px; margin-top: 36px; padding-top: 24px; border-top: 1px solid rgba(255, 255, 255, 0.08);">
        <div style="display: flex; align-items: center; gap: 7px; font-size: 13px; color: #C9A96E; font-weight: 600;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
          <span>স্টেপ-বাই-স্টেপ স্ট্যাটাস আপডেট</span>
        </div>
        <div style="display: flex; align-items: center; gap: 7px; font-size: 13px; color: #C9A96E; font-weight: 600;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
          <span>সারা বাংলাদেশে দ্রুত হোম ডেলিভারি</span>
        </div>
        <div style="display: flex; align-items: center; gap: 7px; font-size: 13px; color: #C9A96E; font-weight: 600;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
          <span>প্রয়োজনে সরাসরি WhatsApp সাপোর্ট</span>
        </div>
      </div>

    </div>

  </div>
</main>
<?php
get_footer();
