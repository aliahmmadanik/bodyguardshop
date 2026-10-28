<?php
/**
 * WooCommerce Single Product Page Template
 * Bodyguard Shop — High-Converting Dark Luxury Defense Landing Page
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

if ( have_posts() ) { the_post(); }

$pid     = get_the_ID();
$product = wc_get_product( $pid );
if ( ! $product ) { get_footer(); exit; }

// Route to dedicated template for Bodyguard Combo
$product_slug = $product->get_slug();
if ( $product_slug === 'bodygard-combo' || $product_slug === 'bodyguard-combo' ) {
    include get_template_directory() . '/woocommerce/single-product-bodygard-combo.php';
    get_footer();
    return;
}

// Route to dedicated template for Pepper Spray
if ( in_array( $product_slug, ['pepper-spray', 'bodyguard-pepper-spray', 'bodygard-pepper-spray'] ) ) {
    include get_template_directory() . '/woocommerce/single-product-pepper-spray.php';
    get_footer();
    return;
}

// Route all other products (except Cut-Proof Vest) to the professional Standard Product template
if ( ! in_array( $product_slug, ['cut-proof-t-shirt', 'cut-proof-vest', 'bodyguard-cut-proof-vest'], true ) ) {
    include get_template_directory() . '/woocommerce/single-product-standard.php';
    get_footer();
    return;
}

// Product Details (Default / Cut-Proof Vest)
$product_title = get_the_title( $pid );
$lvl1_name     = 'Level 1 Cut-Proof T-Shirt';
$lvl1_reg      = 14500;
$lvl1_off      = '38% OFF';
$lvl1_price    = 8990;
$lvl1_img      = get_post_meta($pid, '_bgs_lvl1_image', true) ?: (get_template_directory_uri() . '/assets/images/cut-proof/cut-proof-tshirt-level-1.jpg');

$lvl2_name     = 'Level 2 Cut-Proof Vest';
$lvl2_reg      = 33316;
$lvl2_off      = '43% OFF';
$lvl2_price    = 18990;
$lvl2_img      = get_post_meta($pid, '_bgs_lvl2_image', true) ?: (get_template_directory_uri() . '/assets/images/cut-proof/cut-proof-tshirt-level-2.png');

$lvl3_name     = 'Level 3 Bullet-Proof Armor';
$lvl3_reg      = 113930;
$lvl3_off      = '57% OFF';
$lvl3_price    = 48990;
$lvl3_img      = get_post_meta($pid, '_bgs_lvl3_image', true) ?: (get_template_directory_uri() . '/assets/images/cut-proof/bullet-proof-vest-level-3.jpg');

$price         = $lvl1_price;
$reg_price     = $lvl1_reg;
$discount_pct  = 38;
$save_amount   = $lvl1_reg - $lvl1_price;
$thumb_url     = get_the_post_thumbnail_url( $pid, 'large' ) ?: $lvl1_img;

// Sales Video URL: https://youtu.be/tswsvWbGuHY
$video_embed_url = 'https://www.youtube.com/embed/tswsvWbGuHY?rel=0&modestbranding=1&playsinline=1';
?>

<main id="bgs-product-landing" class="bgs-single-landing">

  <!-- ==========================================================================
       1. TOP 3-LINE HERO HEADLINE (STRICTLY 1 LINE EACH ON DESKTOP & MOBILE = 3 LINES)
       ========================================================================== -->
  <section class="bgs-hook-section">
    <div class="container bgs-hero-headline-container">

      <h1 class="bgs-hook-title bgs-hook-h1">
        আপনার জীবনের মূল্য কি 9 হাজার টাকার চেয়েও কম?
      </h1>

      <h2 class="bgs-hook-h2">
        যে জীবন দিয়ে আপনি লাখ টাকা উপার্জন করেন,
      </h2>

      <h3 class="bgs-hook-h3">
        সেই জীবনকে সুরক্ষিত রাখতে 9 হাজার টাকা কি সত্যিই বেশি?
      </h3>

    </div>
  </section>

  <!-- ==========================================================================
       2. VIDEO SECTION (https://youtu.be/tswsvWbGuHY)
       ========================================================================== -->
  <section class="bgs-video-section">
    <div class="container bgs-narrow-container">
      <div class="bgs-video-outer-frame">
        <div class="bgs-video-corner bgs-vc-tl"></div>
        <div class="bgs-video-corner bgs-vc-tr"></div>
        <div class="bgs-video-corner bgs-vc-bl"></div>
        <div class="bgs-video-corner bgs-vc-br"></div>

        <div class="bgs-video-aspect-box">
          <iframe
            src="<?php echo esc_url( $video_embed_url ); ?>"
            title="<?php echo esc_attr( $product_title ); ?> — Video"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================================================
       3. ORDER NOW BUTTON
       ========================================================================== -->
  <section class="bgs-cta-block bgs-cta-block-top">
    <div class="container text-center">
      <a href="#bgs-order-form" class="bgs-order-btn bgs-pulse-glow">
        <span class="bgs-btn-text">Order now</span>
      </a>
    </div>
  </section>

  <!-- ==========================================================================
       4. 3 LEVELS SPECIFICATION BLOCK (EXACT MATCH TO IMAGE 2)
       ========================================================================== -->
  <section class="bgs-levels-info-section">
    <div class="container bgs-narrow-container">
      <div class="bgs-levels-spec-card">

        <!-- Level 1 Block -->
        <div class="bgs-spec-tier-block">
          <h3 class="bgs-spec-tier-heading">BodyGard Level 1 — Cut-Resistant T-Shirt</h3>
          <ul class="bgs-spec-tier-list">
            <li>ব্লেড ও ধারালো বস্তুর কাটের ঝুঁকি কমাতে সহায়ক।</li>
            <li>ছিনতাইয়ের সময় ধারালো অস্ত্রের সংস্পর্শে অতিরিক্ত কাট-প্রতিরোধী সুরক্ষা।</li>
            <li>ধারালো ধাতব প্রান্ত ও কাচের টুকরার কারণে কাটের ঝুঁকি কমাতে সহায়ক।</li>
          </ul>
        </div>

        <!-- Level 2 Block -->
        <div class="bgs-spec-tier-block">
          <h3 class="bgs-spec-tier-heading">BodyGard Level 2 — Cut-Resistant full body Protective Vest</h3>
          <ul class="bgs-spec-tier-list">
            <li>২ স্তরের Cut-Resistant Fiber Fabric দিয়ে তৈরি।</li>
            <li>ফুল-হাতা ডিজাইন, যা গলা, বুক, পেট ও বাহুর সুরক্ষিত অংশগুলোকে আচ্ছাদিত করে।</li>
            <li>ছুরি, দা, ধারালো ব্লেড ও করাতের মতো বস্তুর বিরুদ্ধে কাট-প্রতিরোধী সুরক্ষা দিতে ডিজাইন করা।</li>
          </ul>
        </div>

        <!-- Level 3 Block -->
        <div class="bgs-spec-tier-block">
          <h3 class="bgs-spec-tier-heading">BodyGard Level 3 — Bullet-proof Armor</h3>
          <ul class="bgs-spec-tier-list">
            <li>৫ স্তরের Ballistic Protective Construction।</li>
            <li>9mm বুলেট প্রতিরোধে সক্ষম।</li>
            <li>ছুরি, দা, তলোয়ার ও বেসবল ব্যাটের আঘাতের বিরুদ্ধে সুরক্ষার জন্য ডিজাইন করা।</li>
            <li>ব্যালিস্টিক প্রোটেকশনের মাধ্যমে শরীরের গুরুত্বপূর্ণ অঙ্গগুলোকে সুরক্ষিত রাখতে সহায়ক।</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       5. EMOTIONAL REFLECTION & PREPAREDNESS SECTION (EXACT MATCH TO IMAGE 3)
       ========================================================================== -->
  <section class="bgs-reflection-section">
    <div class="container bgs-narrow-container">
      <div class="bgs-reflection-card">

        <h2 class="bgs-reflection-heading">
          আপনার উপার্জন, পরিবার, ভবিষ্যৎ—সবকিছুর ভিত্তি একটাই আপনি নিজে।
        </h2>

        <div class="bgs-reflection-lines">
          <p>আপনি আপনার টাকা সুরক্ষিত রাখেন।</p>
          <p>গাড়ি সুরক্ষিত রাখেন।</p>
          <p>ব্যবসা সুরক্ষিত রাখেন।</p>
          <p class="bgs-reflection-question">কিন্তু নিজের জীবন?</p>
        </div>

        <div class="bgs-reflection-decision">
          <p>বিপদ আসবে কি না, আমরা জানি না।</p>
          <p class="bgs-reflection-strong">কিন্তু প্রস্তুত থাকব কি না—সেটা আমাদের সিদ্ধান্ত।</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       6. LEVEL SELECT + CHECKOUT BOX
       ========================================================================== -->
  <section class="bgs-checkout-section" id="bgs-order-form">
    <div class="container">

      <!-- Level Select (Above Checkout Box) -->
      <div class="bgs-level-selection-section">
        <div class="bgs-level-sec-header">
          <span class="bgs-level-super-badge">🛡️ আপনার পছন্দের সুরক্ষা লেভেল সিলেক্ট করুন</span>
          <h3 class="bgs-level-main-title">Select Your Protection Level</h3>
        </div>

        <div class="bgs-level-grid">
          <!-- Level 1 Card -->
          <div class="bgs-level-card active"
               data-level="1"
               data-level-name="<?php echo esc_attr($lvl1_name); ?>"
               data-price="<?php echo esc_attr($lvl1_price); ?>"
               data-reg="<?php echo esc_attr($lvl1_reg); ?>"
               data-off="<?php echo esc_attr($lvl1_off); ?>"
               data-image="<?php echo esc_url($lvl1_img); ?>">
            <div class="bgs-lvl-radio-indicator">
              <span class="bgs-radio-dot"></span>
            </div>
            <div class="bgs-lvl-img-wrap">
              <img src="<?php echo esc_url($lvl1_img); ?>" alt="<?php echo esc_attr($lvl1_name); ?>">
            </div>
            <div class="bgs-lvl-content">
              <h4 class="bgs-lvl-title"><?php echo esc_html($lvl1_name); ?></h4>
              <div class="bgs-lvl-pricing-stack">
                <del class="bgs-lvl-old-price">৳<?php echo number_format($lvl1_reg); ?></del>
                <span class="bgs-lvl-off-badge"><?php echo esc_html($lvl1_off); ?></span>
                <div class="bgs-lvl-cur-price">৳<?php echo number_format($lvl1_price); ?></div>
              </div>
              <button type="button" class="bgs-lvl-select-btn">সিলেক্ট করা হয়েছে ✓</button>
            </div>
          </div>

          <!-- Level 2 Card -->
          <div class="bgs-level-card"
               data-level="2"
               data-level-name="<?php echo esc_attr($lvl2_name); ?>"
               data-price="<?php echo esc_attr($lvl2_price); ?>"
               data-reg="<?php echo esc_attr($lvl2_reg); ?>"
               data-off="<?php echo esc_attr($lvl2_off); ?>"
               data-image="<?php echo esc_url($lvl2_img); ?>">
            <div class="bgs-lvl-radio-indicator">
              <span class="bgs-radio-dot"></span>
            </div>
            <div class="bgs-lvl-img-wrap">
              <img src="<?php echo esc_url($lvl2_img); ?>" alt="<?php echo esc_attr($lvl2_name); ?>">
            </div>
            <div class="bgs-lvl-content">
              <h4 class="bgs-lvl-title"><?php echo esc_html($lvl2_name); ?></h4>
              <div class="bgs-lvl-pricing-stack">
                <del class="bgs-lvl-old-price">৳<?php echo number_format($lvl2_reg); ?></del>
                <span class="bgs-lvl-off-badge"><?php echo esc_html($lvl2_off); ?></span>
                <div class="bgs-lvl-cur-price">৳<?php echo number_format($lvl2_price); ?></div>
              </div>
              <button type="button" class="bgs-lvl-select-btn">সিলেক্ট করুন</button>
            </div>
          </div>

          <!-- Level 3 Card -->
          <div class="bgs-level-card"
               data-level="3"
               data-level-name="<?php echo esc_attr($lvl3_name); ?>"
               data-price="<?php echo esc_attr($lvl3_price); ?>"
               data-reg="<?php echo esc_attr($lvl3_reg); ?>"
               data-off="<?php echo esc_attr($lvl3_off); ?>"
               data-image="<?php echo esc_url($lvl3_img); ?>">
            <div class="bgs-lvl-radio-indicator">
              <span class="bgs-radio-dot"></span>
            </div>
            <div class="bgs-lvl-img-wrap">
              <img src="<?php echo esc_url($lvl3_img); ?>" alt="<?php echo esc_attr($lvl3_name); ?>">
            </div>
            <div class="bgs-lvl-content">
              <h4 class="bgs-lvl-title"><?php echo esc_html($lvl3_name); ?></h4>
              <div class="bgs-lvl-pricing-stack">
                <del class="bgs-lvl-old-price">৳<?php echo number_format($lvl3_reg); ?></del>
                <span class="bgs-lvl-off-badge"><?php echo esc_html($lvl3_off); ?></span>
                <div class="bgs-lvl-cur-price">৳<?php echo number_format($lvl3_price); ?></div>
              </div>
              <button type="button" class="bgs-lvl-select-btn">সিলেক্ট করুন</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Checkout Box -->
      <div class="bgs-order-layout">

        <!-- LEFT COLUMN: Selected Level Overview -->
        <div class="bgs-order-summary-col">
          <div class="bgs-prod-summary-card">

            <div class="bgs-prod-badge-top">✦ 100% Authentic Product</div>

            <div class="bgs-summary-img-box">
              <img src="<?php echo esc_url( $lvl1_img ); ?>" alt="<?php echo esc_attr( $lvl1_name ); ?>" class="bgs-summary-img">
              <div class="bgs-discount-tag" id="bgs-summary-off-tag"><?php echo esc_html( $lvl1_off ); ?></div>
            </div>

            <h3 class="bgs-summary-title"><?php echo esc_html( $lvl1_name ); ?></h3>

            <!-- Price display -->
            <div class="bgs-price-wrapper">
              <div class="bgs-current-price">
                ৳<span id="bgs-unit-price"><?php echo number_format( $lvl1_price ); ?></span>
              </div>
              <del class="bgs-regular-price" id="bgs-summary-reg-price">৳<?php echo number_format( $lvl1_reg ); ?></del>
              <span class="bgs-saved-chip" id="bgs-summary-off-chip"><?php echo esc_html( $lvl1_off ); ?></span>
            </div>

            <!-- Guarantee Box -->
            <div class="bgs-guarantee-box">
              <div class="bgs-gb-item">
                <span class="bgs-gb-icon">🚚</span>
                <div>
                  <strong>ফ্রি হোম ডেলিভারি (সারা বাংলাদেশ)</strong>
                  <p>ঢাকায় ২৪-৪৮ ঘণ্টা, সারা দেশে ২-৪ দিন</p>
                </div>
              </div>
              <div class="bgs-gb-item">
                <span class="bgs-gb-icon">💵</span>
                <div>
                  <strong>ক্যাশ অন ডেলিভারি</strong>
                  <p>পণ্য হাতে পেয়ে চেক করে পেমেন্ট করুন</p>
                </div>
              </div>
              <div class="bgs-gb-item">
                <span class="bgs-gb-icon">🔄</span>
                <div>
                  <strong>রিপ্লেসমেন্ট গ্যারান্টি</strong>
                  <p>ত্রুটিপূর্ণ পণ্যে ১০০% রিপ্লেসমেন্ট সুবিধা</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- RIGHT COLUMN: Cash on Delivery Checkout Form -->
        <div class="bgs-order-form-col">
          <div class="bgs-checkout-form-card">

            <div class="bgs-form-header">
              <h3>ক্যাশ অন ডেলিভারি অর্ডার ফরম</h3>
              <p>সঠিক তথ্য দিয়ে নিচের ফরমটি পূরণ করুন</p>
            </div>

            <form id="bgs-direct-order-form" method="POST" action="">
              <input type="hidden" name="action" value="bgs_process_direct_order">
              <input type="hidden" name="product_id" value="<?php echo esc_attr( $pid ); ?>">
              <input type="hidden" id="bgs-selected-level-input" name="selected_level" value="<?php echo esc_attr( $lvl1_name ); ?>">
              <input type="hidden" id="bgs-level-price-input" name="level_price" value="<?php echo esc_attr( $lvl1_price ); ?>">

              <!-- Quantity Selector (At the Top of the Form) -->
              <div class="bgs-input-group">
                <label>পরিমাণ (Quantity)</label>
                <div class="bgs-qty-controller">
                  <button type="button" class="bgs-qty-btn" id="bgs-qty-minus">−</button>
                  <input type="number" id="bgs-order-qty" name="qty" value="1" min="1" max="20" readonly>
                  <button type="button" class="bgs-qty-btn" id="bgs-qty-plus">+</button>
                </div>
              </div>

              <!-- Customer Name -->
              <div class="bgs-input-group">
                <label for="bgs_customer_name">আপনার নাম <span class="bgs-req">*</span></label>
                <div class="bgs-field-wrap">
                  <span class="bgs-input-icon">👤</span>
                  <input
                    type="text"
                    id="bgs_customer_name"
                    name="customer_name"
                    placeholder="আপনার পুরো নাম লিখুন"
                    required
                  >
                </div>
              </div>

              <!-- Customer Phone -->
              <div class="bgs-input-group">
                <label for="bgs_customer_phone">মোবাইল নম্বর <span class="bgs-req">*</span></label>
                <div class="bgs-field-wrap">
                  <span class="bgs-input-icon">📞</span>
                  <input
                    type="tel"
                    id="bgs_customer_phone"
                    name="customer_phone"
                    placeholder="01XXXXXXXXX"
                    pattern="[0-9]{11}"
                    maxlength="11"
                    required
                  >
                </div>
                <small class="bgs-field-hint">অর্ডার কনফার্মেশনের জন্য সচল নম্বর দিন (১১ ডিজিট)</small>
              </div>

              <!-- Customer Address -->
              <div class="bgs-input-group">
                <label for="bgs_customer_address">সম্পূর্ণ ঠিকানা <span class="bgs-req">*</span></label>
                <div class="bgs-field-wrap">
                  <span class="bgs-input-icon">📍</span>
                  <textarea
                    id="bgs_customer_address"
                    name="customer_address"
                    rows="3"
                    placeholder="বাসা নম্বর, রোড নম্বর, এলাকা, থানা এবং জেলা"
                    required
                  ></textarea>
                </div>
              </div>

              <!-- Delivery Zone Selection -->
              <div class="bgs-input-group">
                <label>ডেলিভারি চার্জ</label>
                <div class="bgs-delivery-options">
                  <label class="bgs-zone-label active" data-cost="0" style="grid-column: 1 / -1;">
                    <input type="radio" name="delivery_zone" value="free_shipping" checked>
                    <span class="bgs-zone-title">🚚 ফ্রি হোম ডেলিভারি (সারা বাংলাদেশ)</span>
                    <span class="bgs-zone-cost" style="color: #22C55E; font-weight: 800;">৳ ০ (ফ্রি)</span>
                  </label>
                </div>
              </div>

              <!-- Live Cost Calculation Table -->
              <div class="bgs-order-calc-table">
                <div class="bgs-calc-row">
                  <span>প্রোডাক্ট মূল্য:</span>
                  <span>৳<span id="bgs-subtotal-val"><?php echo number_format( $lvl1_price ); ?></span></span>
                </div>
                <div class="bgs-calc-row">
                  <span>ডেলিভারি চার্জ:</span>
                  <span style="color: #22C55E; font-weight: 700;">৳<span id="bgs-shipping-val">0</span> (ফ্রি)</span>
                </div>
                <div class="bgs-calc-divider"></div>
                <div class="bgs-calc-row bgs-total-row">
                  <strong>সর্বমোট প্রদেয়:</strong>
                  <strong>৳<span id="bgs-total-val"><?php echo number_format( $lvl1_price ); ?></span></strong>
                </div>
              </div>

              <!-- Payment Method Notice -->
              <div class="bgs-cod-method-badge">
                <span class="bgs-cod-icon">💵</span>
                <div>
                  <strong>ক্যাশ অন ডেলিভারি (Cash on Delivery)</strong>
                  <span>পণ্য ডেলিভারি হওয়ার পর মূল্য পরিশোধ করবেন। অগ্রিম কোনো টাকা দিতে হবে না।</span>
                </div>
              </div>

              <!-- Error Box -->
              <div id="bgs-form-error" class="bgs-form-error" style="display:none;"></div>

              <!-- Submit Button -->
              <button type="submit" id="bgs-submit-order-btn" class="bgs-submit-btn">
                <span class="bgs-submit-icon">🛒</span>
                <span class="bgs-submit-text">অর্ডার নিশ্চিত করুন (৳<span id="bgs-btn-total-calc"><?php echo number_format( $lvl1_price ); ?></span>)</span>
              </button>

              <div class="bgs-secure-note">
                <span>🔒 SSL 256-Bit সুরক্ষিত চেকআউট • আপনার তথ্য সুরক্ষিত</span>
              </div>

            </form>

          </div>
        </div>

      </div>

    </div>
  </section>

</main>

<!-- ==========================================================================
     INLINE STYLES FOR CUT-PROOF VEST LANDING PAGE
     ========================================================================== -->
<style>
:root {
  --bgs-gold: #C9A96E;
  --bgs-gold-hover: #DFBF82;
  --bgs-gold-dark: #A88742;
  --bgs-dark: #0A0A0E;
  --bgs-dark-surface: #14141C;
  --bgs-card-bg: #181824;
  --bgs-card-border: rgba(201, 169, 110, 0.25);
  --bgs-text: #FFFFFF;
  --bgs-muted: #A8A8B8;
  --bgs-red-alert: #EF4444;
  --bgs-green: #10B981;
}

.bgs-single-landing {
  background-color: var(--bgs-dark);
  color: var(--bgs-text);
  font-family: 'Hind Siliguri', 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
  overflow-x: hidden;
  padding-bottom: 50px;
}

.bgs-hero-headline-container {
  max-width: 1120px;
  margin: 0 auto;
  padding: 0 12px;
}

.bgs-narrow-container {
  max-width: 860px;
  margin: 0 auto;
  padding: 0 16px;
}

/* 1. Top 3-Line Hero Headline — Strictly 1 line each on BOTH Desktop & Mobile */
.bgs-hook-section {
  padding: 55px 12px 30px;
  text-align: center;
}
.bgs-hook-title,
.bgs-hook-h1 {
  font-size: clamp(11px, 3.6vw, 2.2rem);
  font-weight: 800;
  line-height: 1.4;
  color: #FFFFFF;
  margin: 0 auto 12px;
  white-space: nowrap !important;
}
.bgs-hook-h2 {
  font-size: clamp(10.5px, 3.3vw, 1.65rem);
  font-weight: 700;
  line-height: 1.4;
  color: #E5E7EB;
  margin: 0 auto 12px;
  white-space: nowrap !important;
}
.bgs-hook-h3 {
  font-size: clamp(10px, 3.1vw, 1.45rem);
  font-weight: 700;
  line-height: 1.4;
  color: var(--bgs-gold, #C9A96E);
  margin: 0 auto;
  white-space: nowrap !important;
}

/* 2. Sales Video Section */
.bgs-video-section {
  padding: 15px 16px 25px;
}
.bgs-video-outer-frame {
  position: relative;
  background: #121218;
  border: 2px solid var(--bgs-gold);
  border-radius: 16px;
  padding: 8px;
  box-shadow: 0 16px 50px rgba(0, 0, 0, 0.8), 0 0 35px rgba(201, 169, 110, 0.22);
  max-width: 820px;
  margin: 0 auto;
}
.bgs-video-corner {
  position: absolute;
  width: 16px;
  height: 16px;
  border-style: solid;
  pointer-events: none;
}
.bgs-vc-tl { top: -2px; left: -2px; border-width: 3px 0 0 3px; border-color: var(--bgs-gold); }
.bgs-vc-tr { top: -2px; right: -2px; border-width: 3px 3px 0 0; border-color: var(--bgs-gold); }
.bgs-vc-bl { bottom: -2px; left: -2px; border-width: 0 0 3px 3px; border-color: var(--bgs-gold); }
.bgs-vc-br { bottom: -2px; right: -2px; border-width: 0 3px 3px 0; border-color: var(--bgs-gold); }

.bgs-video-aspect-box {
  position: relative;
  width: 100%;
  aspect-ratio: 16 / 9;
  border-radius: 10px;
  overflow: hidden;
  background: #000000;
}
.bgs-video-aspect-box iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

/* 3. Order Now CTA Button */
.bgs-cta-block {
  padding: 20px 20px 40px;
  text-align: center;
}
.bgs-order-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  background: linear-gradient(135deg, #C9A96E 0%, #E5C384 50%, #A88742 100%);
  color: #0A0A0A !important;
  font-size: 1.35rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  padding: 16px 54px;
  border-radius: 50px;
  text-decoration: none !important;
  box-shadow: 0 10px 30px rgba(201, 169, 110, 0.4);
  transition: transform 0.25s ease, box-shadow 0.25s ease;
  cursor: pointer;
}
.bgs-order-btn:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 16px 40px rgba(201, 169, 110, 0.6);
  color: #000000 !important;
}
.bgs-pulse-glow {
  animation: bgsPulseGlow 2.2s infinite;
}
@keyframes bgsPulseGlow {
  0% { box-shadow: 0 0 0 0 rgba(201, 169, 110, 0.6); }
  70% { box-shadow: 0 0 0 18px rgba(201, 169, 110, 0); }
  100% { box-shadow: 0 0 0 0 rgba(201, 169, 110, 0); }
}

/* 4. 3 Levels Specification Block (Image 2) */
.bgs-levels-info-section {
  padding: 20px 0 40px;
}
.bgs-levels-spec-card {
  background: #14141C;
  border: 1px solid rgba(201, 169, 110, 0.28);
  border-radius: 18px;
  padding: 36px 34px;
  box-shadow: 0 16px 45px rgba(0, 0, 0, 0.5);
  display: flex;
  flex-direction: column;
  gap: 28px;
}
.bgs-spec-tier-block {
  padding-bottom: 24px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
.bgs-spec-tier-block:last-child {
  padding-bottom: 0;
  border-bottom: none;
}
.bgs-spec-tier-heading {
  font-size: clamp(1.2rem, 2.3vw, 1.5rem);
  font-weight: 800;
  color: #C9A96E;
  margin: 0 0 14px;
  line-height: 1.35;
}
.bgs-spec-tier-list {
  margin: 0;
  padding-left: 22px;
  color: #F0F0F5;
  font-size: clamp(0.98rem, 1.8vw, 1.1rem);
  line-height: 1.85;
}
.bgs-spec-tier-list li {
  margin-bottom: 6px;
}
.bgs-spec-tier-list li::marker {
  color: #C9A96E;
}

/* 5. Emotional Reflection & Preparedness Section (Image 3) */
.bgs-reflection-section {
  padding: 10px 0 45px;
}
.bgs-reflection-card {
  background: linear-gradient(145deg, #161620 0%, #101016 100%);
  border: 1.5px solid rgba(201, 169, 110, 0.35);
  border-radius: 18px;
  padding: 40px 36px;
  box-shadow: 0 16px 45px rgba(0, 0, 0, 0.55);
}
.bgs-reflection-heading {
  font-size: clamp(1.25rem, 2.5vw, 1.7rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 24px;
  line-height: 1.45;
}
.bgs-reflection-lines p {
  font-size: clamp(1.05rem, 2vw, 1.22rem);
  color: #E2E2EA;
  margin: 0 0 14px;
  line-height: 1.6;
}
.bgs-reflection-question {
  font-size: clamp(1.2rem, 2.3vw, 1.45rem) !important;
  font-weight: 800;
  color: #C9A96E !important;
  margin-top: 18px !important;
  margin-bottom: 22px !important;
}
.bgs-reflection-decision {
  padding-top: 18px;
  border-top: 1px solid rgba(201, 169, 110, 0.22);
}
.bgs-reflection-decision p {
  font-size: clamp(1.05rem, 2vw, 1.25rem);
  color: #E2E2EA;
  margin: 0 0 6px;
  line-height: 1.65;
}
.bgs-reflection-strong {
  font-weight: 800;
  color: #FFFFFF !important;
}

/* 6. Multi-Tier Protection Level Selector + Checkout Section */
.bgs-checkout-section {
  padding: 50px 16px 65px;
  background: #0C0C12;
  border-top: 1px solid rgba(201, 169, 110, 0.2);
}
.bgs-level-selection-section {
  max-width: 1050px;
  margin: 0 auto 42px;
}
.bgs-level-sec-header {
  text-align: center;
  margin-bottom: 26px;
}
.bgs-level-super-badge {
  display: inline-block;
  background: rgba(201, 169, 110, 0.15);
  color: var(--bgs-gold);
  border: 1px solid var(--bgs-gold);
  font-size: 0.88rem;
  font-weight: 700;
  padding: 5px 18px;
  border-radius: 30px;
  margin-bottom: 10px;
}
.bgs-level-main-title {
  font-size: clamp(1.4rem, 2.6vw, 1.95rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0;
}
.bgs-level-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 22px;
}
.bgs-level-card {
  position: relative;
  background: #14141C;
  border: 1.5px solid rgba(255, 255, 255, 0.12);
  border-radius: 16px;
  padding: 22px 18px;
  cursor: pointer;
  transition: all 0.25s ease;
  display: flex;
  flex-direction: column;
}
.bgs-level-card:hover {
  border-color: rgba(201, 169, 110, 0.55);
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
}
.bgs-level-card.active {
  border-color: var(--bgs-gold);
  background: linear-gradient(180deg, #1E1912 0%, #14141C 100%);
  box-shadow: 0 0 28px rgba(201, 169, 110, 0.35);
}
.bgs-lvl-radio-indicator {
  position: absolute;
  top: 16px;
  right: 16px;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  border: 2px solid rgba(255, 255, 255, 0.35);
  background: rgba(10, 10, 14, 0.75);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
}
.bgs-level-card.active .bgs-lvl-radio-indicator {
  border-color: var(--bgs-gold);
  background: rgba(201, 169, 110, 0.25);
}
.bgs-radio-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: transparent;
}
.bgs-level-card.active .bgs-radio-dot {
  background: var(--bgs-gold);
}
.bgs-lvl-img-wrap {
  width: 100%;
  height: 200px;
  border-radius: 12px;
  overflow: hidden;
  background: #0A0A0E;
  margin-bottom: 16px;
  border: 1px solid rgba(201, 169, 110, 0.18);
}
.bgs-lvl-img-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}
.bgs-level-card:hover .bgs-lvl-img-wrap img {
  transform: scale(1.04);
}
.bgs-lvl-content {
  display: flex;
  flex-direction: column;
  flex: 1;
  text-align: center;
}
.bgs-lvl-title {
  font-size: 1.15rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 12px;
  line-height: 1.35;
}
.bgs-lvl-pricing-stack {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 6px;
  margin-bottom: 16px;
  padding-bottom: 14px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
.bgs-lvl-old-price {
  font-size: 1rem;
  color: #9CA3AF;
  text-decoration: line-through;
  font-weight: 600;
}
.bgs-lvl-off-badge {
  display: inline-block;
  font-size: 0.8rem;
  font-weight: 800;
  color: #FFFFFF;
  background: linear-gradient(135deg, #EF4444, #B91C1C);
  padding: 3px 12px;
  border-radius: 20px;
  letter-spacing: 0.5px;
}
.bgs-lvl-cur-price {
  font-size: 1.65rem;
  font-weight: 800;
  color: var(--bgs-gold);
  line-height: 1.2;
}
.bgs-lvl-select-btn {
  margin-top: auto;
  width: 100%;
  padding: 12px 14px;
  background: rgba(255, 255, 255, 0.07);
  border: 1px solid rgba(255, 255, 255, 0.16);
  color: #FFFFFF;
  font-size: 0.92rem;
  font-weight: 700;
  border-radius: 10px;
  cursor: pointer;
  transition: all 0.2s ease;
}
.bgs-level-card.active .bgs-lvl-select-btn {
  background: linear-gradient(135deg, #C9A96E 0%, #E5C384 50%, #A88742 100%);
  color: #0A0A0A;
  border-color: var(--bgs-gold);
  font-weight: 800;
  box-shadow: 0 4px 15px rgba(201, 169, 110, 0.4);
}

/* Checkout Layout */
.bgs-order-layout {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 36px;
  max-width: 1050px;
  margin: 0 auto;
  align-items: start;
}

/* Left: Product Summary Card */
.bgs-prod-summary-card {
  background: var(--bgs-card-bg);
  border: 1px solid var(--bgs-card-border);
  border-radius: 16px;
  padding: 24px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}
.bgs-prod-badge-top {
  display: inline-block;
  background: rgba(201, 169, 110, 0.15);
  color: var(--bgs-gold);
  font-size: 0.75rem;
  font-weight: 700;
  padding: 4px 12px;
  border-radius: 20px;
  margin-bottom: 16px;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.bgs-summary-img-box {
  position: relative;
  width: 100%;
  height: 250px;
  background: #111111;
  border-radius: 12px;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
  border: 1px solid rgba(255, 255, 255, 0.08);
}
.bgs-summary-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.bgs-discount-tag {
  position: absolute;
  top: 12px;
  left: 12px;
  background: var(--bgs-red-alert);
  color: #FFFFFF;
  font-size: 0.85rem;
  font-weight: 800;
  padding: 4px 10px;
  border-radius: 6px;
}
.bgs-summary-title {
  font-size: 1.25rem;
  font-weight: 700;
  color: #FFFFFF;
  margin: 0 0 14px;
  line-height: 1.4;
}
.bgs-price-wrapper {
  display: flex;
  align-items: baseline;
  gap: 12px;
  margin-bottom: 20px;
  flex-wrap: wrap;
}
.bgs-current-price {
  font-size: 1.9rem;
  font-weight: 800;
  color: var(--bgs-gold);
}
.bgs-regular-price {
  font-size: 1.15rem;
  color: #9CA3AF;
}
.bgs-saved-chip {
  background: rgba(239, 68, 68, 0.18);
  color: #FCA5A5;
  border: 1px solid rgba(239, 68, 68, 0.35);
  font-size: 0.8rem;
  font-weight: 700;
  padding: 3px 10px;
  border-radius: 20px;
}
.bgs-guarantee-box {
  background: #111118;
  border: 1px solid var(--bgs-card-border);
  border-radius: 10px;
  padding: 16px;
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.bgs-gb-item {
  display: flex;
  align-items: center;
  gap: 12px;
}
.bgs-gb-icon {
  font-size: 1.3rem;
}
.bgs-gb-item strong {
  display: block;
  font-size: 0.88rem;
  color: #FFFFFF;
}
.bgs-gb-item p {
  font-size: 0.78rem;
  color: var(--bgs-muted);
  margin: 0;
}

/* Right: Form Card */
.bgs-checkout-form-card {
  background: var(--bgs-card-bg);
  border: 1.5px solid var(--bgs-gold);
  border-radius: 16px;
  padding: 30px;
  box-shadow: 0 16px 45px rgba(0, 0, 0, 0.7), 0 0 25px rgba(201, 169, 110, 0.15);
}
.bgs-form-header {
  text-align: center;
  margin-bottom: 24px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  padding-bottom: 16px;
}
.bgs-form-header h3 {
  font-size: 1.35rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 6px;
}
.bgs-form-header p {
  font-size: 0.88rem;
  color: var(--bgs-muted);
  margin: 0;
}
.bgs-input-group {
  margin-bottom: 18px;
}
.bgs-input-group label {
  display: block;
  font-size: 0.9rem;
  font-weight: 600;
  color: #E5E7EB;
  margin-bottom: 8px;
}
.bgs-req {
  color: var(--bgs-red-alert);
}
.bgs-field-wrap {
  position: relative;
  display: flex;
  align-items: center;
}
.bgs-input-icon {
  position: absolute;
  left: 14px;
  font-size: 1rem;
  color: var(--bgs-muted);
  pointer-events: none;
}
.bgs-field-wrap input,
.bgs-field-wrap textarea {
  width: 100%;
  background: #0E0E14 !important;
  border: 1.5px solid rgba(255, 255, 255, 0.14) !important;
  color: #FFFFFF !important;
  padding: 13px 14px 13px 42px !important;
  border-radius: 8px !important;
  font-size: 0.95rem !important;
  transition: all 0.25s ease !important;
  box-sizing: border-box !important;
  font-family: inherit !important;
}
.bgs-field-wrap textarea {
  padding-top: 12px !important;
  line-height: 1.5 !important;
}
.bgs-field-wrap input:focus,
.bgs-field-wrap textarea:focus {
  border-color: var(--bgs-gold) !important;
  outline: none !important;
  box-shadow: 0 0 0 3px rgba(201, 169, 110, 0.25) !important;
  background: #14141C !important;
}
.bgs-field-hint {
  display: block;
  font-size: 0.78rem;
  color: var(--bgs-muted);
  margin-top: 5px;
}
.bgs-delivery-options {
  display: grid;
  grid-template-columns: 1fr;
  gap: 12px;
}
.bgs-zone-label {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #0E0E14;
  border: 1.5px solid rgba(201, 169, 110, 0.4);
  padding: 12px 14px;
  border-radius: 8px;
  cursor: pointer;
}
.bgs-zone-label input[type="radio"] {
  margin-right: 8px;
  accent-color: var(--bgs-gold);
}
.bgs-zone-title {
  font-size: 0.88rem;
  color: #FFFFFF;
  font-weight: 500;
}
.bgs-qty-controller {
  display: inline-flex;
  align-items: center;
  background: #0E0E14;
  border: 1.5px solid rgba(255, 255, 255, 0.14);
  border-radius: 8px;
  overflow: hidden;
}
.bgs-qty-btn {
  background: transparent;
  border: none;
  color: var(--bgs-gold);
  font-size: 1.3rem;
  font-weight: 700;
  width: 44px;
  height: 44px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}
.bgs-qty-controller input {
  width: 50px;
  background: transparent;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 1.1rem;
  font-weight: 700;
  outline: none;
}
.bgs-order-calc-table {
  background: #111118;
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 8px;
  padding: 14px 18px;
  margin: 20px 0;
}
.bgs-calc-row {
  display: flex;
  justify-content: space-between;
  font-size: 0.9rem;
  color: #D1D5DB;
  margin-bottom: 8px;
}
.bgs-calc-divider {
  height: 1px;
  background: rgba(255, 255, 255, 0.1);
  margin: 10px 0;
}
.bgs-total-row {
  font-size: 1.15rem;
  color: #FFFFFF;
  margin-bottom: 0;
}
.bgs-total-row strong:last-child {
  color: var(--bgs-gold);
  font-size: 1.3rem;
}
.bgs-cod-method-badge {
  background: rgba(16, 185, 129, 0.08);
  border: 1px solid rgba(16, 185, 129, 0.3);
  padding: 12px 14px;
  border-radius: 8px;
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 22px;
}
.bgs-cod-icon {
  font-size: 1.4rem;
}
.bgs-cod-method-badge strong {
  display: block;
  font-size: 0.88rem;
  color: var(--bgs-green);
}
.bgs-cod-method-badge span {
  font-size: 0.78rem;
  color: #9CA3AF;
}
.bgs-form-error {
  background: rgba(239, 68, 68, 0.12);
  border: 1px solid var(--bgs-red-alert);
  color: #FCA5A5;
  padding: 12px 14px;
  border-radius: 8px;
  font-size: 0.88rem;
  margin-bottom: 16px;
  text-align: center;
}
.bgs-submit-btn {
  width: 100%;
  background: linear-gradient(135deg, #C9A96E 0%, #E5C384 50%, #A88742 100%);
  color: #0A0A0A;
  border: none;
  border-radius: 50px;
  padding: 18px 24px;
  font-size: 1.15rem;
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  cursor: pointer;
  box-shadow: 0 8px 25px rgba(201, 169, 110, 0.4);
  transition: all 0.25s ease;
}
.bgs-submit-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 35px rgba(201, 169, 110, 0.6);
}
.bgs-secure-note {
  text-align: center;
  font-size: 0.78rem;
  color: var(--bgs-muted);
  margin-top: 14px;
}

/* ==========================================================================
   RESPONSIVE DESIGN (MOBILE 3-LINE GUARANTEE & STACKING)
   ========================================================================== */
@media (max-width: 900px) {
  .bgs-level-grid {
    grid-template-columns: 1fr;
    max-width: 460px;
    margin: 0 auto;
  }
  .bgs-order-layout {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 768px) {
  .bgs-hook-section {
    padding: 28px 6px 18px;
  }
  .bgs-hero-headline-container {
    padding: 0 4px !important;
  }
  .bgs-hook-title,
  .bgs-hook-h1 {
    font-size: clamp(10.5px, 3.65vw, 17px) !important;
    white-space: nowrap !important;
    margin: 0 auto 8px !important;
  }
  .bgs-hook-h2 {
    font-size: clamp(10px, 3.4vw, 15.5px) !important;
    white-space: nowrap !important;
    margin: 0 auto 8px !important;
  }
  .bgs-hook-h3 {
    font-size: clamp(9.5px, 3.15vw, 14.5px) !important;
    white-space: nowrap !important;
    margin: 0 auto !important;
  }
  .bgs-levels-spec-card,
  .bgs-reflection-card {
    padding: 26px 20px;
  }
  .bgs-checkout-form-card {
    padding: 22px 16px;
  }
}
</style>

<!-- ==========================================================================
     INLINE JAVASCRIPT: DYNAMIC LEVEL SELECTION & DIRECT CHECKOUT
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  let currentUnitPrice = <?php echo floatval( $lvl1_price ); ?>;
  let currentQty = 1;
  let deliveryCost = 0;

  const qtyInput           = document.getElementById('bgs-order-qty');
  const qtyMinus           = document.getElementById('bgs-qty-minus');
  const qtyPlus            = document.getElementById('bgs-qty-plus');
  const subtotalVal        = document.getElementById('bgs-subtotal-val');
  const shippingVal        = document.getElementById('bgs-shipping-val');
  const totalVal           = document.getElementById('bgs-total-val');
  const btnTotalCalc       = document.getElementById('bgs-btn-total-calc');
  const form               = document.getElementById('bgs-direct-order-form');
  const errorBox           = document.getElementById('bgs-form-error');
  const submitBtn          = document.getElementById('bgs-submit-order-btn');
  const unitPriceEl        = document.getElementById('bgs-unit-price');
  const summaryRegEl       = document.getElementById('bgs-summary-reg-price');
  const summaryOffTag      = document.getElementById('bgs-summary-off-tag');
  const summaryOffChip     = document.getElementById('bgs-summary-off-chip');
  const selectedLevelInput = document.getElementById('bgs-selected-level-input');
  const levelPriceInput    = document.getElementById('bgs-level-price-input');
  const summaryImgEl       = document.querySelector('.bgs-summary-img');
  const summaryTitleEl     = document.querySelector('.bgs-summary-title');
  const levelCards         = document.querySelectorAll('.bgs-level-card');

  function updateOrderTotals() {
    const subtotal = Math.round(currentUnitPrice * currentQty);
    const total = subtotal + deliveryCost;

    if (subtotalVal) subtotalVal.textContent = subtotal.toLocaleString();
    if (shippingVal) shippingVal.textContent = deliveryCost;
    if (totalVal) totalVal.textContent = total.toLocaleString();
    if (btnTotalCalc) btnTotalCalc.textContent = total.toLocaleString();
  }

  // Level Selection Click Handler
  if (levelCards.length > 0) {
    levelCards.forEach(function(card) {
      card.addEventListener('click', function() {
        levelCards.forEach(function(c) {
          c.classList.remove('active');
          const btn = c.querySelector('.bgs-lvl-select-btn');
          if (btn) btn.textContent = 'সিলেক্ট করুন';
        });

        card.classList.add('active');
        const activeBtn = card.querySelector('.bgs-lvl-select-btn');
        if (activeBtn) activeBtn.textContent = 'সিলেক্ট করা হয়েছে ✓';

        const lvlName  = card.getAttribute('data-level-name');
        const lvlPrice = parseFloat(card.getAttribute('data-price')) || currentUnitPrice;
        const lvlReg   = parseFloat(card.getAttribute('data-reg')) || 0;
        const lvlOff   = card.getAttribute('data-off') || '';
        const lvlImg   = card.getAttribute('data-image');

        currentUnitPrice = lvlPrice;
        if (selectedLevelInput) selectedLevelInput.value = lvlName;
        if (levelPriceInput) levelPriceInput.value = lvlPrice;
        if (unitPriceEl) unitPriceEl.textContent = lvlPrice.toLocaleString();
        if (summaryRegEl && lvlReg > 0) summaryRegEl.textContent = '৳' + lvlReg.toLocaleString();
        if (summaryOffTag && lvlOff) summaryOffTag.textContent = lvlOff;
        if (summaryOffChip && lvlOff) summaryOffChip.textContent = lvlOff;
        if (summaryTitleEl) summaryTitleEl.textContent = lvlName;
        if (summaryImgEl && lvlImg) summaryImgEl.src = lvlImg;

        updateOrderTotals();
      });
    });
  }

  // Quantity Handlers
  if (qtyMinus && qtyPlus && qtyInput) {
    qtyMinus.addEventListener('click', function() {
      if (currentQty > 1) {
        currentQty--;
        qtyInput.value = currentQty;
        updateOrderTotals();
      }
    });

    qtyPlus.addEventListener('click', function() {
      if (currentQty < 20) {
        currentQty++;
        qtyInput.value = currentQty;
        updateOrderTotals();
      }
    });
  }

  // Smooth scroll for Order Now button
  document.querySelectorAll('a[href="#bgs-order-form"]').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.getElementById('bgs-order-form');
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // AJAX Checkout Form Submission
  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      if (errorBox) errorBox.style.display = 'none';

      const nameVal = document.getElementById('bgs_customer_name').value.trim();
      const phoneVal = document.getElementById('bgs_customer_phone').value.trim();
      const addrVal = document.getElementById('bgs_customer_address').value.trim();

      if (!nameVal || !phoneVal || !addrVal) {
        if (errorBox) {
          errorBox.textContent = 'অনুগ্রহ করে নাম, মোবাইল নম্বর এবং ঠিকানা সঠিকভাবে পূরণ করুন।';
          errorBox.style.display = 'block';
        }
        return;
      }

      const phoneClean = phoneVal.replace(/[^0-9]/g, '');
      if (phoneClean.length !== 11 || !phoneClean.startsWith('01')) {
        if (errorBox) {
          errorBox.textContent = 'অনুগ্রহ করে সঠিক ১১ ডিজিটের মোবাইল নম্বর দিন (যেমন: 01XXXXXXXXX)।';
          errorBox.style.display = 'block';
        }
        return;
      }

      submitBtn.disabled = true;
      const originalBtnHTML = submitBtn.innerHTML;
      submitBtn.innerHTML = '⏳ অর্ডার প্রস্তুত হচ্ছে... অপেক্ষা করুন';

      const formData = new FormData(form);
      const ajaxUrl = '<?php echo esc_url( admin_url("admin-ajax.php") ); ?>';

      fetch(ajaxUrl, {
        method: 'POST',
        body: formData
      })
      .then(function(res) { return res.json(); })
      .then(function(data) {
        if (data.success && data.data && data.data.redirect_url) {
          submitBtn.innerHTML = '✓ অর্ডার সফল হয়েছে! রিডাইরেক্ট হচ্ছে...';
          window.location.href = data.data.redirect_url;
        } else {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnHTML;
          if (errorBox) {
            errorBox.textContent = (data.data && data.data.message) ? data.data.message : 'অর্ডার করতে সমস্যা হয়েছে, আবার চেষ্টা করুন।';
            errorBox.style.display = 'block';
          }
        }
      })
      .catch(function() {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnHTML;
        if (errorBox) {
          errorBox.textContent = 'নেটওয়ার্ক সমস্যা হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন।';
          errorBox.style.display = 'block';
        }
      });
    });
  }
});
</script>

<?php get_footer(); ?>
