<?php
/**
 * Footer Template (footer.php)
 * Style: Glowria 4-Column Modern Dark Footer
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<footer class="sob-footer" id="site-footer">
  <div class="container">
    <div class="footer-grid">
      
      <!-- Col 1: Brand & Socials -->
      <div class="sob-footer-col">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="footer-logo">
          Bodyguard<span>Shop</span>
        </a>
        <p>
          Bodyguard Shop — আপনার ও পরিবারের সুরক্ষায় ১০০% আসল ও নির্ভরযোগ্য সেলফ-ডিফেন্স ডিভাইস। বিপদ আসার আগেই প্রস্তুত থাকুন।
        </p>
        <div class="bgs-footer-circle-socials">
          <a href="<?php echo esc_url( get_option('bgs_facebook', 'https://www.facebook.com/share/1EJkyvjkhP/') ); ?>" target="_blank" rel="noopener" class="bgs-circle-btn" title="Facebook" aria-label="Facebook">fb</a>
          <a href="<?php echo esc_url( get_option('bgs_youtube', 'https://youtube.com/@bodygardshop?si=136tfZviJHAAZU05') ); ?>" target="_blank" rel="noopener" class="bgs-circle-btn" title="YouTube" aria-label="YouTube">yt</a>
          <a href="https://wa.me/<?php echo esc_attr( get_option('bgs_whatsapp', '8801409710012') ); ?>" target="_blank" rel="noopener" class="bgs-circle-btn" title="WhatsApp" aria-label="WhatsApp">wa</a>
          <a href="tel:<?php echo esc_attr( get_option('bgs_phone', '01409710012') ); ?>" class="bgs-circle-btn" title="Call Us" aria-label="Call">call</a>
        </div>
      </div>

      <!-- Col 2: Important Links -->
      <div class="sob-footer-col">
        <h4>Important Links</h4>
        <?php
        if ( has_nav_menu( 'footer-1' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'footer-1',
                'container'      => false,
                'menu_class'     => 'sob-footer-links',
            ) );
        } else {
            $shop_url = function_exists('wc_get_page_id') ? get_permalink( wc_get_page_id('shop') ) : home_url('/shop/');
            $cart_url = function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart/');
            $checkout_url = function_exists('wc_get_checkout_url') ? wc_get_checkout_url() : home_url('/checkout/');
            $account_url = function_exists('wc_get_page_id') ? get_permalink( wc_get_page_id('myaccount') ) : home_url('/my-account/');
            ?>
            <ul class="sob-footer-links">
              <li><a href="<?php echo esc_url( home_url('/') ); ?>">Home</a></li>
              <li><a href="<?php echo esc_url( $shop_url ); ?>">Shop</a></li>
              <li><a href="<?php echo esc_url( $cart_url ); ?>">Cart</a></li>
              <li><a href="<?php echo esc_url( $checkout_url ); ?>">Checkout</a></li>
              <li><a href="<?php echo esc_url( $account_url ); ?>">My Account</a></li>
            </ul>
        <?php } ?>
      </div>


      <!-- Col 4: Contact Information -->
      <div class="sob-footer-col">
        <h4>Contact & Support</h4>
        <ul class="sob-footer-contact">
          <li>
            <span>📞</span>
            <div>
              <strong>Hotline:</strong><br>
              <a href="tel:<?php echo esc_attr( get_option('bgs_phone', '01409710012') ); ?>"><?php echo esc_html( get_option('bgs_phone', '01409710012') ); ?></a>
            </div>
          </li>
          <li>
            <span>✉️</span>
            <div>
              <strong>Email:</strong><br>
              <a href="mailto:support@bodyguardshop.com">support@bodyguardshop.com</a>
            </div>
          </li>
          <li>
            <span>🕐</span>
            <div>
              <strong>Support Time:</strong><br>
              24/7 Customer Support
            </div>
          </li>
          <li>
            <span>🚚</span>
            <div>
              <strong>Delivery:</strong><br>
              1–3 Days Delivery All Over Bangladesh
            </div>
          </li>
        </ul>
      </div>

    </div>

    <!-- Bottom Copyright (Matching Google Doc Wireframe) -->
    <div class="sob-footer-bottom">
      <div style="font-size: 0.95rem; font-weight: 500; letter-spacing: 0.3px;">
        &copy; 2026 all rights reserved bodygard
      </div>
      <div class="sob-footer-bottom-links">
        <a href="<?php echo esc_url( home_url('/terms-conditions/') ); ?>">Terms & Conditions</a>
        <a href="<?php echo esc_url( home_url('/privacy-policy/') ); ?>">Privacy Policy</a>
        <a href="<?php echo esc_url( home_url('/refund-policy/') ); ?>">Refund Policy</a>
      </div>
    </div>
  </div>
</footer>

<!-- ===== MOBILE STICKY BOTTOM TOOLBAR ===== -->
<div class="sob-mobile-toolbar" id="sob-mobile-toolbar">
  <div class="toolbar-item">
    <a href="<?php echo function_exists('wc_get_page_id') ? esc_url( get_permalink( wc_get_page_id('shop') ) ) : home_url('/shop/'); ?>">
      <span class="toolbar-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
      </span>
      <span class="toolbar-label">Shop</span>
    </a>
  </div>
  <div class="toolbar-item">
    <a href="<?php echo home_url('/wishlist/'); ?>">
      <span class="toolbar-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
        <span class="toolbar-badge">0</span>
      </span>
      <span class="toolbar-label">Wishlist</span>
    </a>
  </div>
  <div class="toolbar-item">
    <a href="<?php echo function_exists('wc_get_cart_url') ? esc_url( wc_get_cart_url() ) : home_url('/cart/'); ?>" class="toolbar-cart-link">
      <span class="toolbar-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
        <span class="toolbar-badge cart-count"><?php echo function_exists('sob_cart_count') ? sob_cart_count() : 0; ?></span>
      </span>
      <span class="toolbar-label">Cart</span>
    </a>
  </div>
  <div class="toolbar-item">
    <a href="<?php echo function_exists('wc_get_page_id') ? esc_url( get_permalink( wc_get_page_id('myaccount') ) ) : home_url('/my-account/'); ?>">
      <span class="toolbar-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
      </span>
      <span class="toolbar-label">My account</span>
    </a>
  </div>
</div>

<style>
/* Footer Luxury Dark Styling */
.sob-footer {
  background: #0A0A0A !important;
  color: #D1D5DB !important;
  border-top: 1px solid rgba(201, 169, 110, 0.25) !important;
  padding: 60px 0 30px !important;
}
.sob-footer-col h4 {
  color: #FFFFFF !important;
  font-size: 1.15rem !important;
  font-weight: 700 !important;
  margin-bottom: 20px !important;
  position: relative !important;
}
.sob-footer-col h4::after {
  content: "" !important;
  display: block !important;
  width: 35px !important;
  height: 2px !important;
  background: var(--bgs-gold, #C9A96E) !important;
  margin-top: 8px !important;
}
.footer-logo {
  font-size: 1.8rem !important;
  font-weight: 800 !important;
  color: var(--bgs-gold, #C9A96E) !important;
  text-decoration: none !important;
  display: inline-block !important;
  margin-bottom: 14px !important;
}
.footer-logo span {
  color: #FFFFFF !important;
  font-weight: 700 !important;
}
.sob-footer-col p {
  color: #9CA3AF !important;
  font-size: 0.92rem !important;
  line-height: 1.6 !important;
}
.sob-footer-links a,
.sob-footer-contact a {
  color: #D1D5DB !important;
  transition: color 0.2s ease !important;
}
.sob-footer-links a:hover,
.sob-footer-contact a:hover {
  color: var(--bgs-gold, #C9A96E) !important;
}
.sob-footer-bottom {
  border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
  color: #9CA3AF !important;
  padding-top: 24px !important;
  margin-top: 40px !important;
}
.sob-footer-bottom-links a {
  color: #9CA3AF !important;
}
.sob-footer-bottom-links a:hover {
  color: var(--bgs-gold, #C9A96E) !important;
}
.bgs-footer-circle-socials {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-top: 18px;
  flex-wrap: wrap;
}
.bgs-circle-btn {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  border: 1.5px solid var(--bgs-gold, #C9A96E);
  background: rgba(201, 169, 110, 0.1);
  color: var(--bgs-gold, #C9A96E) !important;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 0.92rem;
  font-weight: 700;
  text-transform: lowercase;
  text-decoration: none !important;
  transition: all 0.25s ease;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}
.bgs-circle-btn:hover {
  background: var(--bgs-gold, #C9A96E);
  color: #0A0A0A !important;
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(201, 169, 110, 0.4);
}
/* Mobile Bottom Toolbar Dark */
.sob-mobile-toolbar {
  background: rgba(10, 10, 10, 0.95) !important;
  border-top: 1px solid rgba(201, 169, 110, 0.25) !important;
}
.sob-mobile-toolbar .toolbar-label {
  color: #A3A3A3 !important;
}
.sob-mobile-toolbar .toolbar-item a:hover .toolbar-label,
.sob-mobile-toolbar .toolbar-item.active .toolbar-label {
  color: var(--bgs-gold, #C9A96E) !important;
}
.sob-mobile-toolbar .toolbar-badge {
  background: var(--bgs-gold, #C9A96E) !important;
  color: #0A0A0A !important;
  font-weight: 800 !important;
}

@media (max-width: 600px) {
  .sob-footer {
    padding: 35px 0 20px;
    text-align: center;
  }
  .sob-footer-col {
    margin-bottom: 24px;
    text-align: center;
  }
  .sob-footer-col h4::after {
    left: 50% !important;
    transform: translateX(-50%) !important;
  }
  .bgs-footer-circle-socials {
    justify-content: center !important;
  }
  .sob-footer-contact li {
    justify-content: center !important;
    text-align: center !important;
  }
  .sob-footer-bottom {
    text-align: center !important;
  }
}
</style>

<?php wp_footer(); ?>
</body>
</html>
