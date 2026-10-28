<?php
/**
 * Template Name: Track Order Page Template
 * Description: Dedicated Dark Luxury Order Tracking Page for Bodyguard Shop (Order ID, Phone, Customer Name)
 */

defined( 'ABSPATH' ) || exit;

$tracked_order = null;
$track_error   = '';
$submitted     = false;

$input_order_id      = isset( $_REQUEST['bgs_order_id'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['bgs_order_id'] ) ) : '';
$input_phone         = isset( $_REQUEST['bgs_phone'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['bgs_phone'] ) ) : '';
$input_customer_name = isset( $_REQUEST['bgs_customer_name'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['bgs_customer_name'] ) ) : '';

if ( isset( $_REQUEST['bgs_track_submit'] ) || ( $input_order_id !== '' && $input_phone !== '' ) ) {
    $submitted = true;

    $clean_order_id = absint( preg_replace( '/[^0-9]/', '', $input_order_id ) );
    $clean_phone    = preg_replace( '/[^0-9]/', '', $input_phone );
    $clean_name     = trim( $input_customer_name );

    if ( ! $clean_order_id || empty( $clean_phone ) || empty( $clean_name ) ) {
        $track_error = 'অনুগ্রহ করে Order ID, Phone এবং Customer Name সঠিকভাবে পূরণ করুন।';
    } elseif ( ! function_exists( 'wc_get_order' ) ) {
        $track_error = 'অর্ডার ট্র্যাকিং সিস্টেম বর্তমানে সক্রিয় নেই।';
    } else {
        $order = wc_get_order( $clean_order_id );

        if ( ! $order ) {
            $track_error = 'দুঃখিত! প্রদত্ত Order ID (#' . esc_html( $clean_order_id ) . ') দিয়ে কোনো অর্ডার খুঁজে পাওয়া যায়নি।';
        } else {
            // Normalize phone (compare last 10 digits for BD numbers e.g. 17xxxxxxxx)
            $order_phone_digits = preg_replace( '/[^0-9]/', '', (string) $order->get_billing_phone() );
            $sub_phone_tail     = strlen( $clean_phone ) >= 10 ? substr( $clean_phone, -10 ) : $clean_phone;
            $ord_phone_tail     = strlen( $order_phone_digits ) >= 10 ? substr( $order_phone_digits, -10 ) : $order_phone_digits;

            $phone_matches = ( ! empty( $sub_phone_tail ) && $sub_phone_tail === $ord_phone_tail );

            // Check Customer Name (case-insensitive partial or full match)
            $order_full_name = trim( $order->get_billing_first_name() . ' ' . $order->get_billing_last_name() );
            $name_matches    = false;
            if ( ! empty( $clean_name ) && ! empty( $order_full_name ) ) {
                $norm_sub_name = mb_strtolower( preg_replace( '/\s+/', ' ', $clean_name ) );
                $norm_ord_name = mb_strtolower( preg_replace( '/\s+/', ' ', $order_full_name ) );
                if (
                    $norm_sub_name === $norm_ord_name ||
                    mb_strpos( $norm_ord_name, $norm_sub_name ) !== false ||
                    mb_strpos( $norm_sub_name, $norm_ord_name ) !== false
                ) {
                    $name_matches = true;
                }
            }

            if ( ! $phone_matches ) {
                $track_error = 'দুঃখিত! প্রদত্ত Phone নম্বরটি এই Order ID-এর সাথে মিলছে না।';
            } elseif ( ! $name_matches ) {
                $track_error = 'দুঃখিত! প্রদত্ত Customer Name এই Order ID-এর সাথে মিলছে না।';
            } else {
                $tracked_order = $order;
            }
        }
    }
}

get_header();
?>

<main id="main-content" class="bodyguard-track-order-page">
  <div class="container bgs-track-container">

    <!-- Top Header Banner -->
    <div class="track-header-banner">
      <div class="track-header-inner">
        <div>
          <span class="track-kicker">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#C9A96E" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
            Order Dispatch &amp; Live Logistics
          </span>
          <h1 class="track-page-title">
            অর্ডার ট্র্যাক করুন <span class="track-title-en">/ Track Your Order</span>
          </h1>
        </div>

        <div class="track-trust-pill">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          <span>১০০% নিরাপদ ডেলিভারি ও রিয়েল-টাইম ট্র্যাকিং</span>
        </div>
      </div>
    </div>

    <!-- Centered Luxury Track Order Card -->
    <div class="bodyguard-track-card">

      <!-- Card Header -->
      <div class="track-card-head">
        <div class="track-icon-circle">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#C9A96E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
          </svg>
        </div>
        <h2 class="track-card-title">আপনার অর্ডারের বর্তমান অবস্থা জানুন</h2>
        <p class="track-card-sub">
          আপনার অর্ডারের <strong style="color:#C9A96E;">Order ID</strong>, <strong style="color:#C9A96E;">Phone</strong> এবং <strong style="color:#C9A96E;">Customer Name</strong> নিচের ফর্মে লিখে ট্র্যাক বাটনে ক্লিক করুন।
        </p>
      </div>

      <!-- Custom Track Order Form (Order ID, Phone, Customer Name) -->
      <form method="post" action="<?php echo esc_url( home_url( '/track-order/' ) ); ?>" class="bgs-custom-track-form">
        <div class="bgs-track-field">
          <label for="bgs_order_id">Order ID <span class="req">*</span></label>
          <input
            type="text"
            id="bgs_order_id"
            name="bgs_order_id"
            value="<?php echo esc_attr( $input_order_id ); ?>"
            placeholder="আপনার Order ID লিখুন (যেমন: 1024)"
            required
          >
        </div>

        <div class="bgs-track-field">
          <label for="bgs_phone">Phone <span class="req">*</span></label>
          <input
            type="tel"
            id="bgs_phone"
            name="bgs_phone"
            value="<?php echo esc_attr( $input_phone ); ?>"
            placeholder="অর্ডার করার সময় ব্যবহৃত মোবাইল নম্বর (যেমন: 017xxxxxxxx)"
            required
          >
        </div>

        <div class="bgs-track-field">
          <label for="bgs_customer_name">Customer Name <span class="req">*</span></label>
          <input
            type="text"
            id="bgs_customer_name"
            name="bgs_customer_name"
            value="<?php echo esc_attr( $input_customer_name ); ?>"
            placeholder="আপনার নাম লিখুন (Customer Name)"
            required
          >
        </div>

        <button type="submit" name="bgs_track_submit" value="1" class="bgs-track-submit-btn">
          <span>অর্ডার ট্র্যাক করুন (Track Order)</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </button>
      </form>

      <?php if ( $submitted && ! empty( $track_error ) ) : ?>
        <div class="bgs-track-alert bgs-track-alert-error">
          ⚠️ <?php echo esc_html( $track_error ); ?>
        </div>
      <?php endif; ?>

      <?php if ( $tracked_order ) :
          $status_slug = $tracked_order->get_status();
          $status_map  = [
              'pending'    => [ 'label' => 'অর্ডার পেন্ডিং (Pending)',        'step' => 1, 'color' => '#F59E0B' ],
              'on-hold'    => [ 'label' => 'অর্ডার যাচাই চলছে (On Hold)',      'step' => 1, 'color' => '#F59E0B' ],
              'processing' => [ 'label' => 'অর্ডার প্রসেসিং হচ্ছে (Processing)', 'step' => 2, 'color' => '#3B82F6' ],
              'completed'  => [ 'label' => 'ডেলিভারি সম্পন্ন (Completed)',    'step' => 4, 'color' => '#10B981' ],
              'cancelled'  => [ 'label' => 'অর্ডার বাতিল (Cancelled)',        'step' => 0, 'color' => '#EF4444' ],
              'refunded'   => [ 'label' => 'রিফান্ড সম্পন্ন (Refunded)',      'step' => 0, 'color' => '#EF4444' ],
              'failed'     => [ 'label' => 'অর্ডার ব্যর্থ (Failed)',          'step' => 0, 'color' => '#EF4444' ],
          ];
          $status_info = isset( $status_map[ $status_slug ] )
              ? $status_map[ $status_slug ]
              : [ 'label' => wc_get_order_status_name( $status_slug ), 'step' => 2, 'color' => '#C9A96E' ];

          $date_created = $tracked_order->get_date_created();
          $date_str     = $date_created ? $date_created->date_i18n( 'd M Y, h:i A' ) : '';
      ?>
        <div class="bgs-track-result-box">
          <div class="bgs-track-result-header">
            <div>
              <span class="bgs-res-order-no">Order #<?php echo esc_html( $tracked_order->get_order_number() ); ?></span>
              <?php if ( $date_str ) : ?>
                <span class="bgs-res-date">📅 <?php echo esc_html( $date_str ); ?></span>
              <?php endif; ?>
            </div>
            <span class="bgs-res-status-badge" style="border-color:<?php echo esc_attr( $status_info['color'] ); ?>;color:<?php echo esc_attr( $status_info['color'] ); ?>;">
              ● <?php echo esc_html( $status_info['label'] ); ?>
            </span>
          </div>

          <?php if ( $status_info['step'] > 0 ) : ?>
            <div class="bgs-track-steps">
              <div class="bgs-step <?php echo $status_info['step'] >= 1 ? 'done' : ''; ?>">
                <div class="bgs-step-dot">1</div>
                <span>অর্ডার গৃহীত</span>
              </div>
              <div class="bgs-step <?php echo $status_info['step'] >= 2 ? 'done' : ''; ?>">
                <div class="bgs-step-dot">2</div>
                <span>প্রসেসিং</span>
              </div>
              <div class="bgs-step <?php echo $status_info['step'] >= 3 ? 'done' : ''; ?>">
                <div class="bgs-step-dot">3</div>
                <span>ডেলিভারির পথে</span>
              </div>
              <div class="bgs-step <?php echo $status_info['step'] >= 4 ? 'done' : ''; ?>">
                <div class="bgs-step-dot">4</div>
                <span>ডেলিভারি সম্পন্ন</span>
              </div>
            </div>
          <?php endif; ?>

          <div class="bgs-track-meta-grid">
            <div class="bgs-meta-item">
              <span class="bgs-meta-lbl">Customer Name</span>
              <strong class="bgs-meta-val"><?php echo esc_html( trim( $tracked_order->get_billing_first_name() . ' ' . $tracked_order->get_billing_last_name() ) ); ?></strong>
            </div>
            <div class="bgs-meta-item">
              <span class="bgs-meta-lbl">Phone</span>
              <strong class="bgs-meta-val"><?php echo esc_html( $tracked_order->get_billing_phone() ); ?></strong>
            </div>
            <div class="bgs-meta-item">
              <span class="bgs-meta-lbl">Delivery Address</span>
              <strong class="bgs-meta-val"><?php echo esc_html( $tracked_order->get_billing_address_1() ); ?></strong>
            </div>
            <div class="bgs-meta-item">
              <span class="bgs-meta-lbl">Total Amount</span>
              <strong class="bgs-meta-val" style="color:#C9A96E;">৳<?php echo number_format( (float) $tracked_order->get_total() ); ?></strong>
            </div>
          </div>

          <div class="bgs-track-items-wrap">
            <h4>অর্ডারকৃত প্রোডাক্ট</h4>
            <ul class="bgs-track-items-list">
              <?php foreach ( $tracked_order->get_items() as $item_id => $item ) : ?>
                <li>
                  <span><?php echo esc_html( $item->get_name() ); ?> <strong>× <?php echo intval( $item->get_quantity() ); ?></strong></span>
                  <strong>৳<?php echo number_format( (float) $item->get_total() ); ?></strong>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      <?php endif; ?>

      <!-- Bottom Trust Features Strip -->
      <div class="track-footer-strip">
        <div class="track-foot-item">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
          <span>স্টেপ-বাই-স্টেপ স্ট্যাটাস আপডেট</span>
        </div>
        <div class="track-foot-item">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
          <span>সারা বাংলাদেশে দ্রুত হোম ডেলিভারি</span>
        </div>
        <div class="track-foot-item">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
          <span>প্রয়োজনে সরাসরি WhatsApp সাপোর্ট</span>
        </div>
      </div>

    </div>

  </div>
</main>

<style>
.bodyguard-track-order-page {
  background: #0A0A0E;
  color: #FFFFFF;
  min-height: 78vh;
  padding: 40px 0 90px;
}
.bgs-track-container {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 20px;
}
.track-header-banner {
  margin-bottom: 40px;
  text-align: left;
  border-bottom: 1px solid rgba(201, 169, 110, 0.18);
  padding-bottom: 20px;
}
.track-header-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 15px;
}
.track-kicker {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 13px;
  font-weight: 700;
  color: #C9A96E;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  margin-bottom: 6px;
}
.track-page-title {
  font-family: 'Hind Siliguri', 'Outfit', sans-serif;
  font-size: clamp(1.8rem, 3.2vw, 2.4rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0;
  line-height: 1.2;
}
.track-title-en {
  font-size: 0.65em;
  font-weight: 600;
  color: #9A9AA6;
}
.track-trust-pill {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: rgba(20, 20, 28, 0.9);
  border: 1px solid rgba(201, 169, 110, 0.25);
  border-radius: 30px;
  padding: 8px 18px;
  font-size: 13px;
  color: #C9A96E;
}
.track-trust-pill span {
  font-weight: 600;
  color: #FFFFFF;
}
.bodyguard-track-card {
  max-width: 680px;
  margin: 10px auto 0;
  background: #14141C;
  border: 1px solid rgba(201, 169, 110, 0.28);
  border-radius: 20px;
  padding: 44px 36px;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.55);
}
.track-card-head {
  text-align: center;
  margin-bottom: 30px;
}
.track-icon-circle {
  width: 72px;
  height: 72px;
  margin: 0 auto 18px;
  background: rgba(201, 169, 110, 0.12);
  border: 2px solid rgba(201, 169, 110, 0.35);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 28px rgba(201, 169, 110, 0.18);
}
.track-card-title {
  color: #FFFFFF;
  font-family: 'Hind Siliguri', 'Outfit', sans-serif;
  font-size: clamp(1.4rem, 2.5vw, 1.85rem);
  font-weight: 800;
  margin: 0 0 10px;
  line-height: 1.3;
}
.track-card-sub {
  color: #B8B8C8;
  font-size: 15px;
  line-height: 1.65;
  max-width: 540px;
  margin: 0 auto;
}
.bgs-custom-track-form {
  display: flex;
  flex-direction: column;
  gap: 18px;
}
.bgs-track-field {
  display: flex;
  flex-direction: column;
  gap: 7px;
}
.bgs-track-field label {
  font-size: 15px;
  font-weight: 700;
  color: #EAEAF0;
  letter-spacing: 0.2px;
}
.bgs-track-field label .req {
  color: #EF4444;
}
.bgs-track-field input {
  width: 100%;
  background: #0D0D14;
  border: 1px solid rgba(201, 169, 110, 0.28);
  border-radius: 12px;
  padding: 14px 16px;
  color: #FFFFFF;
  font-size: 15px;
  font-family: inherit;
  outline: none;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
  box-sizing: border-box;
}
.bgs-track-field input:focus {
  border-color: #C9A96E;
  box-shadow: 0 0 0 3px rgba(201, 169, 110, 0.16);
}
.bgs-track-submit-btn {
  margin-top: 6px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  width: 100%;
  padding: 15px 24px;
  border: none;
  border-radius: 12px;
  background: linear-gradient(135deg, #D4B475 0%, #B89146 100%);
  color: #0A0A0E;
  font-size: 16px;
  font-weight: 800;
  font-family: inherit;
  cursor: pointer;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
  box-shadow: 0 10px 24px rgba(201, 169, 110, 0.28);
}
.bgs-track-submit-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 14px 30px rgba(201, 169, 110, 0.4);
}
.bgs-track-alert-error {
  margin-top: 20px;
  padding: 14px 18px;
  border-radius: 12px;
  background: rgba(239, 68, 68, 0.12);
  border: 1px solid rgba(239, 68, 68, 0.4);
  color: #FCA5A5;
  font-size: 14.5px;
  font-weight: 600;
  text-align: center;
}
.bgs-track-result-box {
  margin-top: 28px;
  padding: 24px;
  background: #0D0D14;
  border: 1px solid rgba(201, 169, 110, 0.35);
  border-radius: 16px;
}
.bgs-track-result-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 12px;
  padding-bottom: 16px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
.bgs-res-order-no {
  font-size: 18px;
  font-weight: 800;
  color: #C9A96E;
  display: block;
}
.bgs-res-date {
  font-size: 13px;
  color: #9A9AA6;
}
.bgs-res-status-badge {
  display: inline-block;
  padding: 6px 14px;
  border-radius: 999px;
  border: 1px solid #C9A96E;
  font-size: 13px;
  font-weight: 700;
  background: rgba(201, 169, 110, 0.08);
}
.bgs-track-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px;
  margin: 22px 0;
  text-align: center;
}
.bgs-step {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 6px;
  font-size: 12.5px;
  color: #777788;
}
.bgs-step-dot {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: #1A1A24;
  border: 2px solid #2E2E3E;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 800;
  color: #777788;
}
.bgs-step.done {
  color: #EAEAF0;
  font-weight: 700;
}
.bgs-step.done .bgs-step-dot {
  background: rgba(16, 185, 129, 0.18);
  border-color: #10B981;
  color: #10B981;
}
.bgs-track-meta-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 14px;
  margin-bottom: 18px;
}
.bgs-meta-item {
  background: #14141C;
  border: 1px solid rgba(255, 255, 255, 0.06);
  border-radius: 10px;
  padding: 12px 14px;
}
.bgs-meta-lbl {
  display: block;
  font-size: 12px;
  color: #9A9AA6;
  margin-bottom: 4px;
}
.bgs-meta-val {
  font-size: 14.5px;
  color: #FFFFFF;
}
.bgs-track-items-wrap h4 {
  margin: 0 0 10px;
  font-size: 14px;
  color: #C9A96E;
}
.bgs-track-items-list {
  list-style: none;
  margin: 0;
  padding: 0;
}
.bgs-track-items-list li {
  display: flex;
  justify-content: space-between;
  padding: 10px 0;
  border-top: 1px dashed rgba(255, 255, 255, 0.08);
  font-size: 14px;
}
.track-footer-strip {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 34px;
  padding-top: 22px;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
}
.track-foot-item {
  display: flex;
  align-items: center;
  gap: 7px;
  font-size: 13px;
  color: #C9A96E;
  font-weight: 600;
}
@media (max-width: 600px) {
  .bodyguard-track-card {
    padding: 28px 18px;
  }
  .bgs-track-meta-grid {
    grid-template-columns: 1fr;
  }
  .bgs-track-steps {
    grid-template-columns: repeat(2, 1fr);
  }
}
</style>

<?php
get_footer();
