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

          <a href="<?php echo esc_url( get_option('bgs_facebook', 'https://www.facebook.com/share/1EJkyvjkhP/') ); ?>" target="_blank" rel="noopener" class="bgs-circle-btn bgs-btn-facebook" title="Facebook" aria-label="Facebook">

            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>

          </a>

          <a href="<?php echo esc_url( get_option('bgs_youtube', 'https://youtube.com/@bodygardshop?si=136tfZviJHAAZU05') ); ?>" target="_blank" rel="noopener" class="bgs-circle-btn bgs-btn-youtube" title="YouTube" aria-label="YouTube">

            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>

          </a>

          <a href="https://wa.me/<?php echo esc_attr( get_option('bgs_whatsapp', '8801409710012') ); ?>" target="_blank" rel="noopener" class="bgs-circle-btn bgs-btn-whatsapp" title="WhatsApp" aria-label="WhatsApp">

            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>

          </a>

          <a href="tel:<?php echo esc_attr( get_option('bgs_phone', '01409710012') ); ?>" class="bgs-circle-btn bgs-btn-call" title="Call Us" aria-label="Call">

            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>

          </a>

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



    </div>

  </div>

</footer>



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



/* Floating WhatsApp Button */

.bgs-floating-whatsapp {

  position: fixed;

  bottom: 28px;

  right: 25px;

  z-index: 99999;

  display: inline-flex;

  align-items: center;

  gap: 10px;

  background: #25D366;

  color: #FFFFFF !important;

  padding: 12px 18px 12px 14px;

  border-radius: 50px;

  box-shadow: 0 8px 25px rgba(37, 211, 102, 0.45), 0 2px 8px rgba(0,0,0,0.3);

  text-decoration: none !important;

  font-family: inherit;

  font-size: 0.95rem;

  font-weight: 700;

  transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);

}

.bgs-floating-whatsapp:hover {

  transform: translateY(-4px) scale(1.04);

  box-shadow: 0 12px 30px rgba(37, 211, 102, 0.6), 0 4px 12px rgba(0,0,0,0.4);

  color: #FFFFFF !important;

}

.bgs-fwa-pulse {

  position: absolute;

  top: -4px;

  left: -4px;

  right: -4px;

  bottom: -4px;

  border-radius: 50px;

  border: 2px solid #25D366;

  opacity: 0.7;

  animation: bgsFwaPulse 2s infinite;

  pointer-events: none;

}

@keyframes bgsFwaPulse {

  0% { transform: scale(1); opacity: 0.8; }

  100% { transform: scale(1.15); opacity: 0; }

}

.bgs-fwa-icon {

  display: flex;

  align-items: center;

  justify-content: center;

}

.bgs-fwa-label {

  letter-spacing: 0.3px;

  white-space: nowrap;

}

@media (max-width: 768px) {

  .bgs-floating-whatsapp {

    bottom: 24px;

    right: 18px;

    padding: 12px;

    border-radius: 50%;

  }

  .bgs-floating-whatsapp .bgs-fwa-label {

    display: none;

  }

}



</style>





<!-- Floating WhatsApp Hover Button (All Over Website) -->

<a href="https://wa.me/<?php echo esc_attr( get_option('bgs_whatsapp', '8801409710012') ); ?>?text=<?php echo rawurlencode('হ্যালো Bodyguard Shop, আমি আপনাদের প্রোডাক্ট সম্পর্কে জানতে চাই।'); ?>" 

   class="bgs-floating-whatsapp" 

   target="_blank" 

   rel="noopener" 

   aria-label="Chat with Bodyguard Shop on WhatsApp"

   title="হোয়াটসঅ্যাপে চ্যাট করুন">

  <span class="bgs-fwa-pulse"></span>

  <span class="bgs-fwa-icon">

    <svg width="32" height="32" viewBox="0 0 24 24" fill="#FFFFFF"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>

  </span>

  <span class="bgs-fwa-label">WhatsApp এ চ্যাট</span>

</a>



<?php wp_footer(); ?>

</body>

</html>

