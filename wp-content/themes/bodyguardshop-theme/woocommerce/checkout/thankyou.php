<?php
/**
 * Bodyguard Shop - Dark Luxury Thank You / Order Confirmation Template
 * woocommerce/checkout/thankyou.php
 * Strictly adheres to Item 13: Only Order Details, 'See More Products' button, and Social Media Icons.
 */

defined( 'ABSPATH' ) || exit;

$facebook_url = get_option( 'bgs_facebook', 'https://www.facebook.com/share/1EJkyvjkhP/' );
$youtube_url  = get_option( 'bgs_youtube', 'https://youtube.com/@bodygardshop?si=136tfZviJHAAZU05' );
$whatsapp_num = get_option( 'bgs_whatsapp', '8801409710012' );
$phone_num    = get_option( 'bgs_phone', '01409710012' );
?>

<div class="bgs-thankyou-wrapper">
  <div class="bgs-thankyou-container">

    <?php if ( $order ) : ?>

      <?php if ( $order->has_status( 'failed' ) ) : ?>

        <div class="bgs-thankyou-card bgs-ty-error">
          <div class="bgs-ty-icon bgs-ty-icon-fail">⚠️</div>
          <h1 class="bgs-ty-title">দুঃখিত, অর্ডারটি সফল হয়নি!</h1>
          <p class="bgs-ty-desc">
            অর্ডারটি প্রসেস করতে সাময়িক সমস্যা হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন অথবা আমাদের হটলাইনে সরাসরি ফোন করে অর্ডার নিশ্চিত করুন।
          </p>
          <div class="bgs-ty-actions">
            <a href="<?php echo esc_url( home_url('/#all-products') ); ?>" class="bgs-ty-btn-gold">
              আরও প্রোডাক্ট দেখুন &rarr;
            </a>
            <a href="tel:<?php echo esc_attr( $phone_num ); ?>" class="bgs-ty-btn-outline">
              📞 হটলাইনে কল করুন
            </a>
          </div>
        </div>

      <?php else : ?>

        <div class="bgs-thankyou-card">
          
          <!-- Top Success Header -->
          <div class="bgs-ty-header">
            <div class="bgs-ty-badge-wrap">
              <span class="bgs-ty-check">✓</span>
            </div>
            <span class="bgs-ty-pill">🛡️ ORDER RECEIVED SUCCESSFULLY</span>
            <h1 class="bgs-ty-title">ধন্যবাদ! আপনার অর্ডারটি সফলভাবে গ্রহণ করা হয়েছে</h1>
            <p class="bgs-ty-lead">
              আমাদের কাস্টমার কেয়ার প্রতিনিধি খুব শীঘ্রই আপনার নম্বরে কল করে অর্ডারটি কনফার্ম করবেন এবং ১–৩ কার্যদিবসের মধ্যে পণ্য আপনার ঠিকানায় পৌঁছে দেওয়া হবে।
            </p>
          </div>

          <div class="bgs-ty-divider"></div>

          <!-- Order Overview Badges -->
          <div class="bgs-ty-quick-info">
            <div class="bgs-ty-qbox">
              <span class="bgs-ty-qlabel">অর্ডার নম্বর</span>
              <span class="bgs-ty-qval">#<?php echo esc_html( $order->get_order_number() ); ?></span>
            </div>
            <div class="bgs-ty-qbox">
              <span class="bgs-ty-qlabel">তারিখ</span>
              <span class="bgs-ty-qval"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></span>
            </div>
            <div class="bgs-ty-qbox">
              <span class="bgs-ty-qlabel">মোট প্রদেয় টাকা</span>
              <span class="bgs-ty-qval bgs-ty-gold"><?php echo wp_kses_post( $order->get_formatted_order_total() ); ?></span>
            </div>
            <div class="bgs-ty-qbox">
              <span class="bgs-ty-qlabel">পেমেন্ট মেথড</span>
              <span class="bgs-ty-qval">ক্যাশ অন ডেলিভারি (COD)</span>
            </div>
          </div>

          <!-- Detailed Items Table -->
          <div class="bgs-ty-details-box">
            <h3 class="bgs-ty-sectitle">📦 অর্ডারকৃত পণ্যের বিবরণ</h3>
            
            <div class="bgs-ty-items-list">
              <?php foreach ( $order->get_items() as $item_id => $item ) : ?>
                <div class="bgs-ty-item-row">
                  <div class="bgs-ty-item-main">
                    <span class="bgs-ty-item-name"><?php echo esc_html( $item->get_name() ); ?></span>
                    <span class="bgs-ty-item-qty">পরিমাণ: × <?php echo esc_html( $item->get_quantity() ); ?></span>
                    <?php
                    // Display item meta (e.g. selected package)
                    $meta_data = $item->get_formatted_meta_data( '' );
                    if ( ! empty( $meta_data ) ) :
                      echo '<div class="bgs-ty-item-meta">';
                      foreach ( $meta_data as $meta_id => $meta ) :
                        echo '<span>' . esc_html( $meta->display_key ) . ': ' . wp_kses_post( $meta->display_value ) . '</span> ';
                      endforeach;
                      echo '</div>';
                    endif;
                    ?>
                  </div>
                  <div class="bgs-ty-item-price">
                    ৳ <?php echo number_format( $item->get_total(), 0 ); ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>

            <!-- Cost Totals -->
            <div class="bgs-ty-totals-table">
              <div class="bgs-ty-total-line">
                <span>সাব-টোটাল:</span>
                <span>৳ <?php echo number_format( $order->get_subtotal(), 0 ); ?></span>
              </div>
              <div class="bgs-ty-total-line">
                <span>ডেলিভারি চার্জ:</span>
                <span class="bgs-ty-free-tag">ফ্রি (৳ ০ সারা বাংলাদেশ)</span>
              </div>
              <div class="bgs-ty-total-line bgs-ty-grand-total">
                <strong>সর্বমোট প্রদেয় টাকা:</strong>
                <strong class="bgs-ty-gold"><?php echo wp_kses_post( $order->get_formatted_order_total() ); ?></strong>
              </div>
            </div>
          </div>

          <!-- Customer & Delivery Info -->
          <div class="bgs-ty-shipping-box">
            <h3 class="bgs-ty-sectitle">📍 ডেলিভারি তথ্য</h3>
            <div class="bgs-ty-shipping-grid">
              <div>
                <span class="bgs-ty-info-label">গ্রাহকের নাম:</span>
                <span class="bgs-ty-info-val"><?php echo esc_html( $order->get_billing_first_name() . ' ' . $order->get_billing_last_name() ); ?></span>
              </div>
              <div>
                <span class="bgs-ty-info-label">মোবাইল নম্বর:</span>
                <span class="bgs-ty-info-val"><?php echo esc_html( $order->get_billing_phone() ); ?></span>
              </div>
              <div style="grid-column: 1 / -1;">
                <span class="bgs-ty-info-label">ডেলিভারি ঠিকানা:</span>
                <span class="bgs-ty-info-val"><?php echo esc_html( $order->get_billing_address_1() ); ?></span>
              </div>
            </div>
          </div>

          <!-- Action Button: See More Products -->
          <div class="bgs-ty-cta-section">
            <a href="<?php echo esc_url( home_url('/#all-products') ); ?>" class="bgs-ty-btn-gold">
              আরও প্রোডাক্ট দেখুন &rarr;
            </a>
          </div>

          <!-- Social Media Icons Section -->
          <div class="bgs-ty-socials-section">
            <p class="bgs-ty-socials-title">আমাদের সাথে সোশ্যাল মিডিয়ায় যুক্ত থাকুন ও আপডেট পান:</p>
            <div class="bgs-ty-social-icons">
              <a href="<?php echo esc_url( $facebook_url ); ?>" target="_blank" rel="noopener" class="bgs-ty-social-btn" title="Facebook Page" aria-label="Facebook">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                <span>Facebook</span>
              </a>
              <a href="<?php echo esc_url( $youtube_url ); ?>" target="_blank" rel="noopener" class="bgs-ty-social-btn" title="YouTube Channel" aria-label="YouTube">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                <span>YouTube</span>
              </a>
              <a href="https://wa.me/<?php echo esc_attr( $whatsapp_num ); ?>" target="_blank" rel="noopener" class="bgs-ty-social-btn" title="WhatsApp Support" aria-label="WhatsApp">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <span>WhatsApp</span>
              </a>
              <a href="tel:<?php echo esc_attr( $phone_num ); ?>" class="bgs-ty-social-btn" title="Call Hotline" aria-label="Call">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <span>হটলাইন কল</span>
              </a>
            </div>
          </div>

        </div>

      <?php endif; ?>

    <?php else : ?>

      <div class="bgs-thankyou-card">
        <div class="bgs-ty-header">
          <div class="bgs-ty-badge-wrap">
            <span class="bgs-ty-check">✓</span>
          </div>
          <h1 class="bgs-ty-title">ধন্যবাদ! আপনার অর্ডারটি গ্রহণ করা হয়েছে</h1>
          <p class="bgs-ty-lead">
            আমাদের কাস্টমার সাপোর্ট খুব শীঘ্রই আপনার সাথে যোগাযোগ করবে।
          </p>
        </div>
        <div class="bgs-ty-cta-section" style="margin-top: 30px;">
          <a href="<?php echo esc_url( home_url('/#all-products') ); ?>" class="bgs-ty-btn-gold">
            আরও প্রোডাক্ট দেখুন &rarr;
          </a>
        </div>
      </div>

    <?php endif; ?>

  </div>
</div>

<style>
/* Dark Luxury Thank You Page Styling */
.bgs-thankyou-wrapper {
  background: #060608 !important;
  color: #E5E7EB !important;
  padding: 60px 20px 90px !important;
  min-height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: inherit;
}
.bgs-thankyou-container {
  width: 100%;
  max-width: 780px;
  margin: 0 auto;
}
.bgs-thankyou-card {
  background: #0E0E14 !important;
  border: 1px solid rgba(201, 169, 110, 0.35) !important;
  border-radius: 16px;
  padding: 45px 35px;
  box-shadow: 0 15px 45px rgba(0, 0, 0, 0.7);
  position: relative;
}
.bgs-ty-header {
  text-align: center;
}
.bgs-ty-badge-wrap {
  width: 76px;
  height: 76px;
  border-radius: 50%;
  background: linear-gradient(135deg, #22C55E 0%, #15803D 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
  box-shadow: 0 8px 25px rgba(34, 197, 94, 0.35);
}
.bgs-ty-check {
  color: #FFFFFF;
  font-size: 2.4rem;
  font-weight: 900;
  line-height: 1;
}
.bgs-ty-pill {
  display: inline-block;
  background: rgba(201, 169, 110, 0.15);
  border: 1px solid rgba(201, 169, 110, 0.4);
  color: #C9A96E;
  font-size: 0.8rem;
  font-weight: 800;
  padding: 6px 14px;
  border-radius: 30px;
  letter-spacing: 0.8px;
  margin-bottom: 15px;
}
.bgs-ty-title {
  color: #FFFFFF !important;
  font-size: 1.75rem !important;
  font-weight: 800 !important;
  line-height: 1.35 !important;
  margin-bottom: 12px !important;
}
.bgs-ty-lead {
  color: #9CA3AF !important;
  font-size: 0.98rem;
  line-height: 1.6;
  max-width: 620px;
  margin: 0 auto;
}
.bgs-ty-divider {
  height: 1px;
  background: linear-gradient(90deg, transparent, rgba(201, 169, 110, 0.35), transparent);
  margin: 30px 0;
}
.bgs-ty-quick-info {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 12px;
  margin-bottom: 30px;
}
.bgs-ty-qbox {
  background: #14141E;
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 10px;
  padding: 14px 10px;
  text-align: center;
}
.bgs-ty-qlabel {
  display: block;
  color: #9CA3AF;
  font-size: 0.78rem;
  margin-bottom: 5px;
}
.bgs-ty-qval {
  display: block;
  color: #FFFFFF;
  font-size: 0.95rem;
  font-weight: 700;
}
.bgs-ty-gold {
  color: #C9A96E !important;
}
.bgs-ty-details-box,
.bgs-ty-shipping-box {
  background: #14141E;
  border: 1px solid rgba(201, 169, 110, 0.2);
  border-radius: 12px;
  padding: 22px;
  margin-bottom: 24px;
}
.bgs-ty-sectitle {
  color: #C9A96E !important;
  font-size: 1.05rem !important;
  font-weight: 700 !important;
  margin-bottom: 16px !important;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  padding-bottom: 10px;
}
.bgs-ty-items-list {
  display: flex;
  flex-direction: column;
  gap: 12px;
  margin-bottom: 18px;
}
.bgs-ty-item-row {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding-bottom: 12px;
  border-bottom: 1px dashed rgba(255, 255, 255, 0.08);
}
.bgs-ty-item-name {
  display: block;
  color: #FFFFFF;
  font-weight: 700;
  font-size: 0.95rem;
  margin-bottom: 4px;
}
.bgs-ty-item-qty {
  display: block;
  color: #9CA3AF;
  font-size: 0.85rem;
}
.bgs-ty-item-meta {
  color: #C9A96E;
  font-size: 0.82rem;
  margin-top: 3px;
}
.bgs-ty-item-price {
  color: #FFFFFF;
  font-weight: 700;
  font-size: 1rem;
  white-space: nowrap;
}
.bgs-ty-totals-table {
  display: flex;
  flex-direction: column;
  gap: 8px;
  padding-top: 10px;
}
.bgs-ty-total-line {
  display: flex;
  justify-content: space-between;
  font-size: 0.92rem;
  color: #9CA3AF;
}
.bgs-ty-free-tag {
  color: #22C55E;
  font-weight: 700;
}
.bgs-ty-grand-total {
  border-top: 1px solid rgba(255, 255, 255, 0.12);
  padding-top: 12px;
  font-size: 1.15rem;
  color: #FFFFFF;
}
.bgs-ty-shipping-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 14px;
}
.bgs-ty-info-label {
  display: block;
  color: #9CA3AF;
  font-size: 0.82rem;
  margin-bottom: 4px;
}
.bgs-ty-info-val {
  display: block;
  color: #FFFFFF;
  font-weight: 600;
  font-size: 0.94rem;
}
.bgs-ty-cta-section {
  text-align: center;
  margin: 35px 0 25px;
}
.bgs-ty-btn-gold {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  background: linear-gradient(135deg, #C9A96E 0%, #B8924B 100%) !important;
  color: #0E0E14 !important;
  font-size: 1.05rem;
  font-weight: 800;
  padding: 16px 36px;
  border-radius: 50px;
  text-decoration: none !important;
  box-shadow: 0 8px 25px rgba(201, 169, 110, 0.4);
  transition: all 0.3s ease;
}
.bgs-ty-btn-gold:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(201, 169, 110, 0.6);
  color: #000000 !important;
}
.bgs-ty-socials-section {
  text-align: center;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
  padding-top: 25px;
  margin-top: 25px;
}
.bgs-ty-socials-title {
  color: #9CA3AF;
  font-size: 0.88rem;
  margin-bottom: 15px;
}
.bgs-ty-social-icons {
  display: flex;
  justify-content: center;
  gap: 12px;
  flex-wrap: wrap;
}
.bgs-ty-social-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #181824;
  border: 1px solid rgba(201, 169, 110, 0.25);
  color: #D1D5DB !important;
  padding: 8px 16px;
  border-radius: 30px;
  font-size: 0.85rem;
  font-weight: 600;
  text-decoration: none !important;
  transition: all 0.25s ease;
}
.bgs-ty-social-btn:hover {
  border-color: #C9A96E;
  color: #C9A96E !important;
  background: rgba(201, 169, 110, 0.12);
  transform: translateY(-2px);
}

@media (max-width: 640px) {
  .bgs-thankyou-card {
    padding: 30px 18px;
  }
  .bgs-ty-title {
    font-size: 1.4rem !important;
  }
  .bgs-ty-quick-info {
    grid-template-columns: 1fr 1fr;
    gap: 10px;
  }
  .bgs-ty-shipping-grid {
    grid-template-columns: 1fr;
  }
  .bgs-ty-btn-gold {
    width: 100%;
    padding: 14px 20px;
  }
}
</style>
