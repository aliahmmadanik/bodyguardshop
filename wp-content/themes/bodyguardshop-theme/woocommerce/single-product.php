<?php
/**
 * WooCommerce Single Product Page Template
 * Bodyguard Shop — High-Converting Luxury Defense Landing Page
 * Based on Google Doc Wireframe: 1ucKJlxCJCPzwd0Ob0gsOhFOj38eIhDQhoF6OdGVNHyk
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

// Route to dedicated template for Pepper Spray (https://bodygard.shop/ clone)
if ( in_array( $product_slug, ['pepper-spray', 'bodyguard-pepper-spray', 'bodygard-pepper-spray'] ) ) {
    include get_template_directory() . '/woocommerce/single-product-pepper-spray.php';
    get_footer();
    return;
}

// Route to dedicated template for Metal Baseball Bat (32 Inch)
if ( in_array( $product_slug, ['baseball-bat', 'metal-baseball-bat', 'baseball-bat-32-inch', 'bodyguard-baseball-bat'] ) ) {
    include get_template_directory() . '/woocommerce/single-product-baseball-bat.php';
    get_footer();
    return;
}

// Route to dedicated template for Stun Gun (90k Volt / 928 Type)
if ( in_array( $product_slug, ['stun-gun', 'bodyguard-tactical-stun-gun', 'stun-gun-90k-volt', '928-type-stun-gun', 'shut-gun'] ) ) {
    include get_template_directory() . '/woocommerce/single-product-stun-gun.php';
    get_footer();
    return;
}



// Product Details
$product_title = get_the_title( $pid );
$price         = $product->get_price();
$reg_price     = $product->get_regular_price();
$is_on_sale    = $product->is_on_sale();
$price_num     = floatval( $price );
$reg_num       = floatval( $reg_price );
$discount_pct  = ( $is_on_sale && $reg_num > 0 && $price_num > 0 ) ? round( ( ( $reg_num - $price_num ) / $reg_num ) * 100 ) : 0;
$save_amount   = ( $is_on_sale && $reg_num > $price_num ) ? ( $reg_num - $price_num ) : 0;
$thumb_url     = get_the_post_thumbnail_url( $pid, 'large' );

// Product Video resolution (check meta or default to Bodyguard Shop sales video)
$custom_video = get_post_meta( $pid, '_bgs_video_url', true ) ?: get_post_meta( $pid, 'sob_product_video_id', true );
if ( empty( $custom_video ) ) {
    $custom_video = get_option( 'bgs_hero_video_url', 'https://www.youtube.com/embed/76R7VC9NpR8' );
}
if ( strpos( $custom_video, 'youtu.be/' ) !== false ) {
    $vid_id = trim( substr( $custom_video, strrpos( $custom_video, '/' ) + 1 ) );
    $video_embed_url = 'https://www.youtube.com/embed/' . $vid_id;
} elseif ( strpos( $custom_video, 'watch?v=' ) !== false ) {
    parse_str( parse_url( $custom_video, PHP_URL_QUERY ), $qp );
    $video_embed_url = ! empty( $qp['v'] ) ? 'https://www.youtube.com/embed/' . $qp['v'] : 'https://www.youtube.com/embed/76R7VC9NpR8';
} elseif ( strpos( $custom_video, 'embed/' ) !== false ) {
    $video_embed_url = $custom_video;
} else {
    // If just an ID was stored
    $video_embed_url = 'https://www.youtube.com/embed/' . ( $custom_video ?: '76R7VC9NpR8' );
}
$video_embed_url .= ( strpos( $video_embed_url, '?' ) === false ? '?rel=0&modestbranding=1&playsinline=1' : '&rel=0&modestbranding=1&playsinline=1' );
?>

<main id="bgs-product-landing" class="bgs-single-landing">

  <!-- ==========================================================================
       1. HERO HEADLINE & PSYCHOLOGICAL HOOK (FROM GOOGLE DOC)
       ========================================================================== -->
  <section class="bgs-hook-section">
    <div class="container bgs-hero-headline-container">

      <!-- 1st line h1 -->
      <h1 class="bgs-hook-title bgs-hook-h1">
        আপনার জীবনের মূল্য কি 9 হাজার টাকার চেয়েও কম?
      </h1>

      <!-- 2nd line h2 -->
      <h2 class="bgs-hook-h2">
        যে জীবন দিয়ে আপনি লাখ টাকা উপার্জন করেন,
      </h2>

      <!-- 3rd line h3 -->
      <h3 class="bgs-hook-h3">
        সেই জীবনকে সুরক্ষিত রাখতে 9 হাজার টাকা কি সত্যিই বেশি?
      </h3>

    </div>
  </section>


  <!-- ==========================================================================
       2. SALES VIDEO SECTION (FROM GOOGLE DOC DRAWING 1)
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
            title="<?php echo esc_attr( $product_title ); ?> — Sales Video"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
            loading="lazy"
          ></iframe>
        </div>
      </div>

      <!-- Video Key Features Badges -->
      <div class="bgs-video-badges-grid">
        <div class="bgs-vbadge">
          <span class="bgs-vb-icon">🛡️</span>
          <span class="bgs-vb-text">মিলিটারী গ্রেড সুরক্ষা</span>
        </div>
        <div class="bgs-vbadge">
          <span class="bgs-vb-icon">⚡</span>
          <span class="bgs-vb-text">তাৎক্ষণিক কার্যকর (Instant Action)</span>
        </div>
        <div class="bgs-vbadge">
          <span class="bgs-vb-icon">🔒</span>
          <span class="bgs-vb-text">১০০% আসল ও নিরাপদ</span>
        </div>
      </div>

    </div>
  </section>

  <!-- ==========================================================================
       8. DIRECT CASH ON DELIVERY CHECKOUT FORM (ORDER NOW)
       ========================================================================== -->
  <section class="bgs-checkout-section" id="bgs-order-form">
    <div class="container">

      <div class="bgs-section-header">
        <span class="bgs-badge-pill">🔥 স্পেশাল লিমিটেড স্টক অফার</span>
        <h2 class="bgs-sec-heading">অর্ডার করতে নিচের ফর্মটি পূরণ করুন</h2>
        <p class="bgs-sec-subheading">ক্যাশ অন ডেলিভারি — অগ্রিম ১ টাকাও দিতে হবে না, পণ্য পেয়ে চেক করে টাকা দিন</p>
        <div class="bgs-gold-divider"></div>
      </div>

      <?php
      // Multi-Tier Protection Levels (Cut Proof T-Shirt / Body Armor)
      $product_slug = isset($product) ? $product->get_slug() : '';
      $has_levels   = get_post_meta($pid, '_bgs_has_levels', true) === 'yes' || strpos($product_slug, 'cut-proof') !== false;

      if ( $has_levels ) :
          $lvl1_name  = get_post_meta($pid, '_bgs_lvl1_name', true) ?: 'Level 1 — Cut Proof T-Shirt';
          $lvl1_price = get_post_meta($pid, '_bgs_lvl1_price', true) ?: '8990';
          $lvl1_reg   = get_post_meta($pid, '_bgs_lvl1_reg_price', true) ?: '12000';
          $lvl1_badge = get_post_meta($pid, '_bgs_lvl1_badge', true) ?: '🛡️ বেসিক কাট প্রোটেকশন';
          $lvl1_desc  = get_post_meta($pid, '_bgs_lvl1_desc', true) ?: 'ব্লেড ও ছুরির ধারালো কাট প্রতিরোধক';
          $lvl1_img   = get_post_meta($pid, '_bgs_lvl1_image', true) ?: (get_template_directory_uri() . '/assets/images/cut-proof/cut-proof-tshirt-level-1.jpg');

          $lvl2_name  = get_post_meta($pid, '_bgs_lvl2_name', true) ?: 'Level 2 — Cut & Stab Proof T-Shirt';
          $lvl2_price = get_post_meta($pid, '_bgs_lvl2_price', true) ?: '18990';
          $lvl2_reg   = get_post_meta($pid, '_bgs_lvl2_reg_price', true) ?: '24000';
          $lvl2_badge = get_post_meta($pid, '_bgs_lvl2_badge', true) ?: '🔥 সবচেয়ে জনপ্রিয় (Most Popular)';
          $lvl2_desc  = get_post_meta($pid, '_bgs_lvl2_desc', true) ?: 'কাট ও স্ট্যাব (ছোরার গভীর আঘাত) নিরোধক';
          $lvl2_img   = get_post_meta($pid, '_bgs_lvl2_image', true) ?: (get_template_directory_uri() . '/assets/images/cut-proof/cut-proof-tshirt-level-2.png');

          $lvl3_name  = get_post_meta($pid, '_bgs_lvl3_name', true) ?: 'Level 3 — Bullet Proof Vest';
          $lvl3_price = get_post_meta($pid, '_bgs_lvl3_price', true) ?: '38990';
          $lvl3_reg   = get_post_meta($pid, '_bgs_lvl3_reg_price', true) ?: '48000';
          $lvl3_badge = get_post_meta($pid, '_bgs_lvl3_badge', true) ?: '🎖️ আলটিমেট মিলিটারি আর্মার';
          $lvl3_desc  = get_post_meta($pid, '_bgs_lvl3_desc', true) ?: 'স্টিল প্লেট সহ ব্যালিস্টিক বুলেট প্রুফ ভেস্ট';
          $lvl3_img   = get_post_meta($pid, '_bgs_lvl3_image', true) ?: (get_template_directory_uri() . '/assets/images/cut-proof/bullet-proof-vest-level-3.jpg');
      ?>
      <!-- Protection Level Selection Grid -->
      <div class="bgs-level-selection-section">
        <div class="bgs-level-sec-header">
          <span class="bgs-level-super-badge">🛡️ আপনার পছন্দের সুরক্ষা প্যাকেজ সিলেক্ট করুন</span>
          <h3 class="bgs-level-main-title">Protection Levels & Pricing Packages</h3>
          <p class="bgs-level-subtitle">প্যাকেজে ক্লিক করলে নিচের টোটাল মূল্য ও চেকআউট ফর্ম স্বয়ংক্রিয়ভাবে আপডেট হবে</p>
        </div>

        <div class="bgs-level-grid">
          <!-- Level 1 Card -->
          <div class="bgs-level-card active" data-level="1" data-level-name="<?php echo esc_attr($lvl1_name); ?>" data-price="<?php echo esc_attr($lvl1_price); ?>" data-image="<?php echo esc_url($lvl1_img); ?>">
            <div class="bgs-lvl-ribbon"><?php echo esc_html($lvl1_badge); ?></div>
            <div class="bgs-lvl-radio-indicator">
              <span class="bgs-radio-dot"></span>
            </div>
            <div class="bgs-lvl-img-wrap">
              <img src="<?php echo esc_url($lvl1_img); ?>" alt="<?php echo esc_attr($lvl1_name); ?>">
            </div>
            <div class="bgs-lvl-content">
              <h4 class="bgs-lvl-title"><?php echo esc_html($lvl1_name); ?></h4>
              <p class="bgs-lvl-short"><?php echo esc_html($lvl1_desc); ?></p>
              <div class="bgs-lvl-price-box">
                <span class="bgs-lvl-cur-price">৳<?php echo number_format((float)$lvl1_price, 0); ?></span>
                <del class="bgs-lvl-old-price">৳<?php echo number_format((float)$lvl1_reg, 0); ?></del>
                <span class="bgs-lvl-save">সাশ্রয় ৳<?php echo number_format((float)($lvl1_reg - $lvl1_price), 0); ?></span>
              </div>
              <ul class="bgs-lvl-features">
                <li>✓ ব্লেড ও ছুরির ধারালো কাট প্রতিরোধক</li>
                <li>✓ আল্ট্রা-লাইটওয়েট ও প্রতিদিন পরার উপযোগী</li>
                <li>✓ অ্যান্টি-স স্পেশাল উইভ ফেব্রিক</li>
              </ul>
              <button type="button" class="bgs-lvl-select-btn">সিলেক্ট করা হয়েছে ✓</button>
            </div>
          </div>

          <!-- Level 2 Card (Featured / Popular) -->
          <div class="bgs-level-card bgs-lvl-featured" data-level="2" data-level-name="<?php echo esc_attr($lvl2_name); ?>" data-price="<?php echo esc_attr($lvl2_price); ?>" data-image="<?php echo esc_url($lvl2_img); ?>">
            <div class="bgs-lvl-ribbon bgs-ribbon-hot"><?php echo esc_html($lvl2_badge); ?></div>
            <div class="bgs-lvl-radio-indicator">
              <span class="bgs-radio-dot"></span>
            </div>
            <div class="bgs-lvl-img-wrap">
              <img src="<?php echo esc_url($lvl2_img); ?>" alt="<?php echo esc_attr($lvl2_name); ?>">
            </div>
            <div class="bgs-lvl-content">
              <h4 class="bgs-lvl-title"><?php echo esc_html($lvl2_name); ?></h4>
              <p class="bgs-lvl-short"><?php echo esc_html($lvl2_desc); ?></p>
              <div class="bgs-lvl-price-box">
                <span class="bgs-lvl-cur-price">৳<?php echo number_format((float)$lvl2_price, 0); ?></span>
                <del class="bgs-lvl-old-price">৳<?php echo number_format((float)$lvl2_reg, 0); ?></del>
                <span class="bgs-lvl-save">সাশ্রয় ৳<?php echo number_format((float)($lvl2_reg - $lvl2_price), 0); ?></span>
              </div>
              <ul class="bgs-lvl-features">
                <li>✓ ২-লেয়ার ডুয়াল প্রোটেকশন (ফাইবারগ্লাস + কাটপ্রুফ)</li>
                <li>✓ ব্লেড, ছুরি, করাত ও ধারালো অস্ত্রের আঘাত নিরোধক</li>
                <li>✓ ব্রিদেবল কমফোর্ট ও ব্লেজারের নিচে পরার সুবিধা</li>
              </ul>
              <button type="button" class="bgs-lvl-select-btn">সিলেক্ট করুন</button>
            </div>
          </div>

          <!-- Level 3 Card (Ultimate Bullet Proof Vest) -->
          <div class="bgs-level-card" data-level="3" data-level-name="<?php echo esc_attr($lvl3_name); ?>" data-price="<?php echo esc_attr($lvl3_price); ?>" data-image="<?php echo esc_url($lvl3_img); ?>">
            <div class="bgs-lvl-ribbon bgs-ribbon-gold"><?php echo esc_html($lvl3_badge); ?></div>
            <div class="bgs-lvl-radio-indicator">
              <span class="bgs-radio-dot"></span>
            </div>
            <div class="bgs-lvl-img-wrap">
              <img src="<?php echo esc_url($lvl3_img); ?>" alt="<?php echo esc_attr($lvl3_name); ?>">
            </div>
            <div class="bgs-lvl-content">
              <h4 class="bgs-lvl-title"><?php echo esc_html($lvl3_name); ?></h4>
              <p class="bgs-lvl-short"><?php echo esc_html($lvl3_desc); ?></p>
              <div class="bgs-lvl-price-box">
                <span class="bgs-lvl-cur-price">৳<?php echo number_format((float)$lvl3_price, 0); ?></span>
                <del class="bgs-lvl-old-price">৳<?php echo number_format((float)$lvl3_reg, 0); ?></del>
                <span class="bgs-lvl-save">সাশ্রয় ৳<?php echo number_format((float)($lvl3_reg - $lvl3_price), 0); ?></span>
              </div>
              <ul class="bgs-lvl-features">
                <li>✓ ২.৩৭ মিমি স্টিল প্লেট সহ ব্যালিস্টিক প্রটেকশন</li>
                <li>✓ সাধারণ ব্লেজারের মতো লুক কিন্তু বুলেটপ্রুফ ভেস্ট</li>
                <li>✓ সর্বোচ্চ স্তরের সুরক্ষা (ব্লেড, রামদা ও বুলেট প্রটেকশন)</li>
              </ul>
              <button type="button" class="bgs-lvl-select-btn">সিলেক্ট করুন</button>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>

      <div class="bgs-order-layout">

        <!-- LEFT COLUMN: Product Overview & Offer Summary -->
        <div class="bgs-order-summary-col">
          <div class="bgs-prod-summary-card">

            <div class="bgs-prod-badge-top">✦ 100% Authentic Product</div>

            <div class="bgs-summary-img-box">
              <?php if ( $thumb_url ) : ?>
                <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $product_title ); ?>" class="bgs-summary-img">
              <?php else : ?>
                <div class="bgs-summary-no-img">
                  <span class="bgs-no-img-icon">🛡️</span>
                  <strong><?php echo esc_html( $product_title ); ?></strong>
                </div>
              <?php endif; ?>

              <?php if ( $discount_pct > 0 ) : ?>
                <div class="bgs-discount-tag">-<?php echo esc_html( $discount_pct ); ?>% OFF</div>
              <?php endif; ?>
            </div>

            <h3 class="bgs-summary-title"><?php echo esc_html( $product_title ); ?></h3>

            <!-- Price display -->
            <div class="bgs-price-wrapper">
              <div class="bgs-current-price">
                ৳<span id="bgs-unit-price"><?php echo esc_html( $price ); ?></span>
              </div>
              <?php if ( $reg_price && $reg_price > $price ) : ?>
                <del class="bgs-regular-price">৳<?php echo esc_html( $reg_price ); ?></del>
                <span class="bgs-saved-chip">সাশ্রয় ৳<?php echo esc_html( $save_amount ); ?></span>
              <?php endif; ?>
            </div>

            <!-- Defense Product Highlights -->
            <ul class="bgs-summary-specs-list">
              <li><span class="bgs-check-icon">✓</span> <strong>ইনস্ট্যান্ট ডিফেন্স:</strong> আক্রমণকারীকে তাৎক্ষণিক প্রতিহত করে</li>
              <li><span class="bgs-check-icon">✓</span> <strong>নিরাপদ দূরত্ব:</strong> ৮-১০ ফুট দূর থেকেই কার্যকর ব্যবহার</li>
              <li><span class="bgs-check-icon">✓</span> <strong>সেফটি লক সিস্টেম:</strong> ভুলবশত ব্যবহারের কোনো ঝুঁকি নেই</li>
              <li><span class="bgs-check-icon">✓</span> <strong>পকেট সাইজ:</strong> সহজে পকেটে বা লেডিস ব্যাগে বহনযোগ্য</li>
            </ul>

            <!-- Guarantee Box -->
            <div class="bgs-guarantee-box">
              <div class="bgs-gb-item">
                <span class="bgs-gb-icon">🚚</span>
                <div>
                  <strong>সারা দেশে দ্রুত ডেলিভারি</strong>
                  <p>ঢাকায় ২৪-৪৮ ঘণ্টা, সারা দেশে ১-৩ দিন</p>
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

        <!-- RIGHT COLUMN: 1-Click Cash on Delivery Form -->
        <div class="bgs-order-form-col">
          <div class="bgs-checkout-form-card">

            <div class="bgs-form-header">
              <h3>ক্যাশ অন ডেলিভারি অর্ডার ফরম</h3>
              <p>সঠিক তথ্য দিয়ে নিচের ফরমটি পূরণ করুন</p>
            </div>

            <form id="bgs-direct-order-form" method="POST" action="">
              <input type="hidden" name="action" value="bgs_process_direct_order">
              <input type="hidden" name="product_id" value="<?php echo esc_attr( $pid ); ?>">
              <input type="hidden" id="bgs-selected-level-input" name="selected_level" value="<?php echo esc_attr( $has_levels ? $lvl1_name : 'Standard' ); ?>">
              <input type="hidden" id="bgs-level-price-input" name="level_price" value="<?php echo esc_attr( $has_levels ? $lvl1_price : $price ); ?>">

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

              <!-- Delivery Zone Selection (Item 10: Free Delivery) -->
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

              <!-- Quantity Selector -->
              <div class="bgs-input-group">
                <label>পরিমাণ (Quantity)</label>
                <div class="bgs-qty-controller">
                  <button type="button" class="bgs-qty-btn" id="bgs-qty-minus">−</button>
                  <input type="number" id="bgs-order-qty" name="qty" value="1" min="1" max="20" readonly>
                  <button type="button" class="bgs-qty-btn" id="bgs-qty-plus">+</button>
                </div>
              </div>

              <!-- Live Cost Calculation Table (Item 10: Free Delivery) -->
              <div class="bgs-order-calc-table">
                <div class="bgs-calc-row">
                  <span>প্রোডাক্ট মূল্য:</span>
                  <span>৳<span id="bgs-subtotal-val"><?php echo esc_html( $price ); ?></span></span>
                </div>
                <div class="bgs-calc-row">
                  <span>ডেলিভারি চার্জ:</span>
                  <span style="color: #22C55E; font-weight: 700;">৳<span id="bgs-shipping-val">0</span> (ফ্রি)</span>
                </div>
                <div class="bgs-calc-divider"></div>
                <div class="bgs-calc-row bgs-total-row">
                  <strong>সর্বমোট প্রদেয়:</strong>
                  <strong>৳<span id="bgs-total-val"><?php echo esc_html( floatval($price) ); ?></span></strong>
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
                <span class="bgs-submit-text">অর্ডার নিশ্চিত করুন (৳<span id="bgs-btn-total-calc"><?php echo esc_html( floatval($price) + 60 ); ?></span>)</span>
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




  <!-- ==========================================================================
       3. CTA BUTTON 1 (FROM GOOGLE DOC)
       ========================================================================== -->
  <section class="bgs-cta-block bgs-cta-block-top">
    <div class="container text-center">
      <a href="#bgs-order-form" class="bgs-order-btn bgs-pulse-glow">
        <span class="bgs-btn-text">Order now</span>
        <span class="bgs-btn-arrow">⚡</span>
      </a>
      <p class="bgs-cta-subtext">
        <span class="bgs-green-dot">●</span> ক্যাশ অন ডেলিভারি সুবিধা • ডেলিভারির সময় দেখে পেমেন্ট করুন
      </p>
    </div>
  </section>


  <!-- ==========================================================================
       4. AWARENESS / EMOTIONAL IMPACT BLOCK 1 (FROM GOOGLE DOC)
       ========================================================================== -->
  <section class="bgs-awareness-block-1">
    <div class="container bgs-narrow-container">

      <div class="bgs-security-cards-grid">
        <!-- Card 1 -->
        <div class="bgs-sec-card">
          <div class="bgs-sec-icon-wrap">
            <span class="bgs-sec-icon">💳</span>
          </div>
          <div class="bgs-sec-content">
            <h3 class="bgs-sec-title">আপনি আপনার টাকা সুরক্ষিত রাখেন।</h3>
            <p class="bgs-sec-desc">ব্যাংকে বা লকারে কষ্টার্জিত টাকা শতভাগ নিরাপদে রাখেন।</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bgs-sec-card">
          <div class="bgs-sec-icon-wrap">
            <span class="bgs-sec-icon">🚗</span>
          </div>
          <div class="bgs-sec-content">
            <h3 class="bgs-sec-title">গাড়ি সুরক্ষিত রাখেন।</h3>
            <p class="bgs-sec-desc">জিপিএস ট্র্যাকার, লক ও ইনস্যুরেন্স দিয়ে গাড়ি সুরক্ষিত রাখেন।</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bgs-sec-card">
          <div class="bgs-sec-icon-wrap">
            <span class="bgs-sec-icon">🏢</span>
          </div>
          <div class="bgs-sec-content">
            <h3 class="bgs-sec-title">ব্যবসা সুরক্ষিত রাখেন।</h3>
            <p class="bgs-sec-desc">সিসিটিভি ক্যামেরা, সিকিউরিটি গার্ড দিয়ে ব্যবসা সুরক্ষিত রাখেন।</p>
          </div>
        </div>
      </div>

      <!-- Reflection Box: কিন্তু নিজের জীবন? -->
      <div class="bgs-life-question-card">
        <div class="bgs-question-badge">প্রশ্ন</div>
        <h2 class="bgs-life-headline">কিন্তু নিজের জীবন?</h2>
        <div class="bgs-gold-accent-line"></div>
        <p class="bgs-life-quote">
          আপনার উপার্জন, পরিবার, ভবিষ্যৎ—সবকিছুর ভিত্তি একটাই <span class="bgs-glow-text">আপনি নিজে।</span>
        </p>
      </div>

    </div>
  </section>


  <!-- ==========================================================================
       5. CUSTOMER REVIEW / REELS SECTION (FROM GOOGLE DOC DRAWING 2)
       ========================================================================== -->
  <section class="bgs-reviews-section" id="customer-reviews">
    <div class="container">

      <div class="bgs-section-header">
        <h2 class="bgs-sec-heading">Customer review</h2>
        <div class="bgs-gold-divider"></div>
      </div>

      <!-- Vertical Reels Grid (9:16 Aspect Ratio) -->
      <div class="bgs-reels-grid">

        <!-- Reel Card 1 -->
        <div class="bgs-vertical-reel-card">
          <div class="bgs-reel-frame">
            <iframe 
              src="https://www.youtube.com/embed/RyqHKNnoW-Y?rel=0&modestbranding=1&playsinline=1" 
              title="Customer Review 1 — Bodyguard Shop" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
              allowfullscreen 
              loading="lazy">
            </iframe>
          </div>
        </div>

        <!-- Reel Card 2 -->
        <div class="bgs-vertical-reel-card">
          <div class="bgs-reel-frame">
            <iframe 
              src="https://www.youtube.com/embed/T7x7RT7ynxQ?rel=0&modestbranding=1&playsinline=1" 
              title="Customer Review 2 — Bodyguard Shop" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
              allowfullscreen 
              loading="lazy">
            </iframe>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ==========================================================================
       6. AWARENESS / VALUE COMPARISON BLOCK 2 (FROM GOOGLE DOC)
       ========================================================================== -->
  <section class="bgs-comparison-section">
    <div class="container bgs-narrow-container">

      <h2 class="bgs-comp-title">
        আপনি 9 হাজার টাকার কী কী সুরক্ষিত রাখেন?
      </h2>

      <!-- Items Grid -->
      <div class="bgs-comp-items-grid">
        <div class="bgs-comp-item">
          <span class="bgs-ci-icon">🚗</span>
          <span class="bgs-ci-text">গাড়ি।</span>
          <span class="bgs-ci-status">✓ সুরক্ষিত</span>
        </div>

        <div class="bgs-comp-item">
          <span class="bgs-ci-icon">📱</span>
          <span class="bgs-ci-text">মোবাইল।</span>
          <span class="bgs-ci-status">✓ সুরক্ষিত</span>
        </div>

        <div class="bgs-comp-item">
          <span class="bgs-ci-icon">💻</span>
          <span class="bgs-ci-text">ল্যাপটপ।</span>
          <span class="bgs-ci-status">✓ সুরক্ষিত</span>
        </div>

        <div class="bgs-comp-item">
          <span class="bgs-ci-icon">💼</span>
          <span class="bgs-ci-text">ব্যবসার টাকা।</span>
          <span class="bgs-ci-status">✓ সুরক্ষিত</span>
        </div>

        <div class="bgs-comp-item">
          <span class="bgs-ci-icon">💎</span>
          <span class="bgs-ci-text">মূল্যবান সম্পদ।</span>
          <span class="bgs-ci-status">✓ সুরক্ষিত</span>
        </div>
      </div>

      <!-- Impact Punchline Box -->
      <div class="bgs-comp-punchline-box">
        <h3 class="bgs-punchline-heading">
          কিন্তু যে জীবন দিয়ে এগুলো অর্জন করেন?
        </h3>
        <p class="bgs-punchline-strong">
          সেটার নিরাপত্তার মূল্য কত?
        </p>
      </div>

    </div>
  </section>


  <!-- ==========================================================================
       7. PREPAREDNESS & DECISION QUOTE CARD (FROM GOOGLE DOC)
       ========================================================================== -->
  <section class="bgs-quote-section">
    <div class="container bgs-narrow-container">

      <div class="bgs-golden-quote-card">
        <div class="bgs-quote-mark-top">“</div>

        <div class="bgs-quote-body">
          <p class="bgs-qb-line-1">
            বিপদ আসবে কি না, আমরা জানি না।
          </p>
          <p class="bgs-qb-line-2">
            কিন্তু প্রস্তুত থাকব কি না—সেটা আমাদের সিদ্ধান্ত।
          </p>
        </div>

        <div class="bgs-quote-mark-bottom">”</div>

        <div class="bgs-quote-footer-badge">
          🛡️ নিজের ও পরিবারের নিরাপত্তা আগে থেকেই নিশ্চিত করুন
        </div>
      </div>

    </div>
  </section>





  <!-- ==========================================================================
       STICKY BOTTOM ORDER BAR (MOBILE)
       ========================================================================== -->
  <div class="bgs-mobile-sticky-bar" id="bgs-sticky-bar">
    <div class="bgs-sticky-content">
      <div class="bgs-sticky-info">
        <span class="bgs-sticky-title"><?php echo esc_html( $product_title ); ?></span>
        <span class="bgs-sticky-price">৳<?php echo esc_html( $price ); ?></span>
      </div>
      <a href="#bgs-order-form" class="bgs-sticky-btn">
        Order now ⚡
      </a>
    </div>
  </div>

</main>


<!-- ==========================================================================
     INLINE COMPREHENSIVE STYLES FOR LANDING PAGE
     ========================================================================== -->
<style>
/* CSS Variables */
:root {
  --bgs-gold: #C9A96E;
  --bgs-gold-hover: #DFBF82;
  --bgs-gold-dark: #A88742;
  --bgs-dark: #0A0A0A;
  --bgs-dark-surface: #141414;
  --bgs-card-bg: #181818;
  --bgs-card-border: rgba(201, 169, 110, 0.22);
  --bgs-text: #FFFFFF;
  --bgs-muted: #A3A3A3;
  --bgs-red-alert: #EF4444;
  --bgs-green: #10B981;
}

.bgs-single-landing {
  background-color: var(--bgs-dark);
  color: var(--bgs-text);
  font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  overflow-x: hidden;
  padding-bottom: 70px;
}

.bgs-hero-headline-container {
  max-width: 1080px;
  margin: 0 auto;
  padding: 0 16px;
}

.bgs-narrow-container {
  max-width: 860px;
  margin: 0 auto;
}

/* 1. Hero / Headline Section */
.bgs-hook-section {
  padding: 65px 20px 35px;
  text-align: center;
}
.bgs-hook-title,
.bgs-hook-h1 {
  font-size: clamp(1.25rem, 2.5vw, 2.15rem);
  font-weight: 800;
  line-height: 1.35;
  color: #FFFFFF;
  margin: 0 auto 14px;
  text-wrap: balance;
}
.bgs-hook-h2 {
  font-size: clamp(1.1rem, 2.1vw, 1.65rem);
  font-weight: 700;
  line-height: 1.35;
  color: #E5E7EB;
  margin: 0 auto 12px;
  text-wrap: balance;
}
.bgs-hook-h3 {
  font-size: clamp(1.0rem, 1.9vw, 1.45rem);
  font-weight: 600;
  line-height: 1.35;
  color: var(--bgs-gold, #C9A96E);
  margin: 0 auto;
  text-wrap: balance;
}
@media (min-width: 880px) {
  .bgs-hook-h1,
  .bgs-hook-h2,
  .bgs-hook-h3 {
    white-space: nowrap;
  }
}

/* 2. Sales Video */
.bgs-video-section {
  padding: 20px 20px 40px;
}
.bgs-video-outer-frame {
  position: relative;
  background: #121212;
  border: 2px solid var(--bgs-gold);
  border-radius: 16px;
  padding: 8px;
  box-shadow: 0 16px 50px rgba(0, 0, 0, 0.8), 0 0 35px rgba(201, 169, 110, 0.25);
  max-width: 820px;
  margin: 0 auto 30px;
}
.bgs-video-corner {
  position: absolute;
  width: 16px;
  height: 16px;
  border-color: #FFFFFF;
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

.bgs-video-badges-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
  max-width: 820px;
  margin: 0 auto;
}
.bgs-vbadge {
  background: var(--bgs-dark-surface);
  border: 1px solid var(--bgs-card-border);
  padding: 12px 14px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  text-align: center;
  font-size: 0.9rem;
  color: #E5E7EB;
  font-weight: 500;
}
.bgs-vb-icon {
  font-size: 1.2rem;
}

/* 3. CTA Buttons */
.bgs-cta-block {
  padding: 30px 20px 45px;
  text-align: center;
}
.bgs-order-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  background: linear-gradient(135deg, var(--bgs-gold) 0%, #B68C48 100%);
  color: #0A0A0A !important;
  font-size: 1.35rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  padding: 18px 56px;
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
.bgs-cta-subtext {
  margin-top: 14px;
  font-size: 0.95rem;
  color: #D1D5DB;
}
.bgs-green-dot {
  color: var(--bgs-green);
}

/* 4. Awareness Block 1 */
.bgs-awareness-block-1 {
  padding: 50px 20px 40px;
  background: #0F0F0F;
  border-top: 1px solid rgba(201, 169, 110, 0.15);
  border-bottom: 1px solid rgba(201, 169, 110, 0.15);
}
.bgs-security-cards-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-bottom: 35px;
}
.bgs-sec-card {
  background: var(--bgs-card-bg);
  border: 1px solid var(--bgs-card-border);
  border-radius: 12px;
  padding: 24px 20px;
  display: flex;
  flex-direction: column;
  gap: 14px;
  transition: transform 0.3s ease, border-color 0.3s ease;
}
.bgs-sec-card:hover {
  transform: translateY(-4px);
  border-color: var(--bgs-gold);
}
.bgs-sec-icon-wrap {
  width: 48px;
  height: 48px;
  background: rgba(201, 169, 110, 0.12);
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
}
.bgs-sec-title {
  font-size: 1.15rem;
  font-weight: 700;
  color: #FFFFFF;
  margin: 0;
  line-height: 1.4;
}
.bgs-sec-desc {
  font-size: 0.9rem;
  color: var(--bgs-muted);
  line-height: 1.5;
  margin: 0;
}

.bgs-life-question-card {
  background: linear-gradient(135deg, #1C150C 0%, #151109 100%);
  border: 1.5px solid var(--bgs-gold);
  border-radius: 16px;
  padding: 36px 30px;
  text-align: center;
  box-shadow: 0 12px 40px rgba(0, 0, 0, 0.5);
}
.bgs-question-badge {
  display: inline-block;
  background: #B91C1C;
  color: #FFFFFF;
  font-size: 0.8rem;
  font-weight: 700;
  padding: 4px 14px;
  border-radius: 4px;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 12px;
}
.bgs-life-headline {
  font-size: clamp(1.6rem, 3vw, 2.2rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 16px;
}
.bgs-gold-accent-line {
  width: 60px;
  height: 3px;
  background: var(--bgs-gold);
  margin: 0 auto 20px;
  border-radius: 2px;
}
.bgs-life-quote {
  font-size: clamp(1.1rem, 2.4vw, 1.4rem);
  color: #E5E7EB;
  line-height: 1.6;
  margin: 0;
}
.bgs-glow-text {
  color: var(--bgs-gold);
  font-weight: 800;
  text-decoration: underline;
  text-underline-offset: 4px;
}

/* 5. Customer Review / Reels Section */
.bgs-reviews-section {
  padding: 50px 20px 40px;
  background: var(--bgs-dark);
}
.bgs-section-header {
  text-align: center;
  margin-bottom: 30px;
}
.bgs-sec-heading {
  font-size: clamp(1.6rem, 3.2vw, 2.4rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 10px;
}
.bgs-gold-divider {
  width: 60px;
  height: 3px;
  background: var(--bgs-gold);
  margin: 0 auto;
  border-radius: 2px;
}

/* Vertical Reels Grid (Aspect 9:16) */
.bgs-reels-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 24px;
  max-width: 720px;
  margin: 0 auto;
}
.bgs-vertical-reel-card {
  background: #000000;
  border: 1.5px solid var(--bgs-card-border, #262626);
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 14px 40px rgba(0, 0, 0, 0.7);
  transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
}
.bgs-vertical-reel-card:hover {
  transform: translateY(-5px);
  border-color: var(--bgs-gold);
  box-shadow: 0 16px 45px rgba(201, 169, 110, 0.25);
}
.bgs-reel-frame {
  position: relative;
  width: 100%;
  aspect-ratio: 9 / 16;
  background: #000000;
  overflow: hidden;
}
.bgs-reel-frame iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
  display: block;
}

/* 6. Comparison Section */
.bgs-comparison-section {
  padding: 60px 20px;
  background: #0E0E0E;
  border-top: 1px solid rgba(201, 169, 110, 0.15);
  border-bottom: 1px solid rgba(201, 169, 110, 0.15);
}
.bgs-comp-title {
  font-size: clamp(1.45rem, 3vw, 2.1rem);
  font-weight: 800;
  text-align: center;
  color: #FFFFFF;
  margin: 0 0 35px;
}
.bgs-comp-items-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 12px;
  margin-bottom: 35px;
}
.bgs-comp-item {
  background: var(--bgs-card-bg);
  border: 1px solid var(--bgs-card-border);
  border-radius: 12px;
  padding: 20px 10px;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 8px;
}
.bgs-ci-icon {
  font-size: 2rem;
}
.bgs-ci-text {
  font-size: 1rem;
  font-weight: 700;
  color: #FFFFFF;
}
.bgs-ci-status {
  font-size: 0.76rem;
  color: var(--bgs-green);
  font-weight: 600;
}

.bgs-comp-punchline-box {
  background: linear-gradient(135deg, #20170A 0%, #150E05 100%);
  border: 2px solid var(--bgs-gold);
  border-radius: 16px;
  padding: 35px 24px;
  text-align: center;
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.6);
}
.bgs-punchline-heading {
  font-size: clamp(1.3rem, 2.5vw, 1.8rem);
  font-weight: 700;
  color: #FFFFFF;
  margin: 0 0 12px;
}
.bgs-punchline-strong {
  font-size: clamp(1.5rem, 3.2vw, 2.2rem);
  font-weight: 800;
  color: var(--bgs-gold);
  margin: 0;
  text-shadow: 0 0 20px rgba(201, 169, 110, 0.4);
}

/* 7. Decision Quote Section */
.bgs-quote-section {
  padding: 60px 20px;
  background: var(--bgs-dark);
}
.bgs-golden-quote-card {
  position: relative;
  background: linear-gradient(180deg, #171717 0%, #111111 100%);
  border: 2px solid var(--bgs-gold);
  border-radius: 20px;
  padding: 50px 30px;
  text-align: center;
  box-shadow: 0 16px 50px rgba(0, 0, 0, 0.8);
}
.bgs-quote-mark-top,
.bgs-quote-mark-bottom {
  font-size: 5rem;
  line-height: 1;
  color: var(--bgs-gold);
  font-family: Georgia, serif;
  opacity: 0.6;
}
.bgs-quote-mark-top {
  margin-bottom: -20px;
}
.bgs-quote-mark-bottom {
  margin-top: -10px;
}
.bgs-quote-body {
  margin: 10px 0;
}
.bgs-qb-line-1 {
  font-size: clamp(1.25rem, 2.6vw, 1.75rem);
  color: #E5E7EB;
  margin: 0 0 12px;
  font-weight: 500;
}
.bgs-qb-line-2 {
  font-size: clamp(1.4rem, 3vw, 2.1rem);
  color: var(--bgs-gold);
  font-weight: 800;
  margin: 0;
  text-shadow: 0 0 15px rgba(201, 169, 110, 0.35);
}
.bgs-quote-footer-badge {
  display: inline-block;
  margin-top: 25px;
  background: rgba(201, 169, 110, 0.15);
  border: 1px solid var(--bgs-gold);
  color: var(--bgs-gold);
  padding: 8px 24px;
  border-radius: 30px;
  font-size: 0.92rem;
  font-weight: 600;
}

/* Multi-Tier Protection Level Selector */
.bgs-level-selection-section {
  max-width: 1100px;
  margin: 0 auto 40px;
}
.bgs-level-sec-header {
  text-align: center;
  margin-bottom: 25px;
}
.bgs-level-super-badge {
  display: inline-block;
  background: rgba(201, 169, 110, 0.15);
  color: var(--bgs-gold);
  border: 1px solid var(--bgs-gold);
  font-size: 0.85rem;
  font-weight: 700;
  padding: 5px 16px;
  border-radius: 30px;
  margin-bottom: 10px;
}
.bgs-level-main-title {
  font-size: clamp(1.4rem, 2.6vw, 1.9rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 6px;
}
.bgs-level-subtitle {
  font-size: 0.95rem;
  color: var(--bgs-muted);
  margin: 0;
}
.bgs-level-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 22px;
}
.bgs-level-card {
  position: relative;
  background: #141414;
  border: 1.5px solid rgba(255, 255, 255, 0.12);
  border-radius: 16px;
  padding: 22px 18px;
  cursor: pointer;
  transition: all 0.25s ease;
  display: flex;
  flex-direction: column;
}
.bgs-level-card:hover {
  border-color: rgba(201, 169, 110, 0.5);
  transform: translateY(-3px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
}
.bgs-level-card.active {
  border-color: var(--bgs-gold);
  background: linear-gradient(180deg, #1A1610 0%, #121212 100%);
  box-shadow: 0 0 25px rgba(201, 169, 110, 0.35);
}
.bgs-lvl-ribbon {
  display: inline-block;
  background: rgba(201, 169, 110, 0.15);
  color: var(--bgs-gold);
  border: 1px solid var(--bgs-gold);
  font-size: 0.72rem;
  font-weight: 700;
  padding: 3px 10px;
  border-radius: 20px;
  margin-bottom: 12px;
  width: fit-content;
}
.bgs-ribbon-hot {
  background: #B91C1C;
  color: #FFFFFF;
  border-color: #EF4444;
}
.bgs-ribbon-gold {
  background: linear-gradient(135deg, var(--bgs-gold) 0%, #A88742 100%);
  color: #0A0A0A;
  border: none;
  font-weight: 800;
}
.bgs-lvl-radio-indicator {
  position: absolute;
  top: 18px;
  right: 18px;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  border: 2px solid rgba(255, 255, 255, 0.25);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.2s;
}
.bgs-level-card.active .bgs-lvl-radio-indicator {
  border-color: var(--bgs-gold);
  background: rgba(201, 169, 110, 0.2);
}
.bgs-radio-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: transparent;
  transition: background 0.2s;
}
.bgs-level-card.active .bgs-radio-dot {
  background: var(--bgs-gold);
}
.bgs-lvl-img-wrap {
  width: 100%;
  height: 200px;
  border-radius: 10px;
  overflow: hidden;
  background: #0A0A0A;
  margin-bottom: 14px;
}
.bgs-lvl-img-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s;
}
.bgs-level-card:hover .bgs-lvl-img-wrap img {
  transform: scale(1.04);
}
.bgs-lvl-title {
  font-size: 1.05rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 4px;
  line-height: 1.35;
}
.bgs-lvl-short {
  font-size: 0.82rem;
  color: var(--bgs-muted);
  margin: 0 0 12px;
  line-height: 1.4;
}
.bgs-lvl-price-box {
  display: flex;
  align-items: baseline;
  flex-wrap: wrap;
  gap: 8px;
  margin-bottom: 14px;
  padding-bottom: 12px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
.bgs-lvl-cur-price {
  font-size: 1.45rem;
  font-weight: 800;
  color: var(--bgs-gold);
}
.bgs-lvl-old-price {
  font-size: 0.88rem;
  color: #888;
  text-decoration: line-through;
}
.bgs-lvl-save {
  font-size: 0.72rem;
  color: #10B981;
  background: rgba(16, 185, 129, 0.12);
  padding: 2px 8px;
  border-radius: 4px;
  font-weight: 700;
}
.bgs-lvl-features {
  list-style: none;
  padding: 0;
  margin: 0 0 18px;
  font-size: 0.8rem;
  color: #D1D5DB;
  line-height: 1.6;
}
.bgs-lvl-features li {
  margin-bottom: 5px;
}
.bgs-lvl-select-btn {
  margin-top: auto;
  width: 100%;
  padding: 10px 14px;
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.12);
  color: #FFFFFF;
  font-size: 0.88rem;
  font-weight: 700;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.2s;
}
.bgs-level-card.active .bgs-lvl-select-btn {
  background: var(--bgs-gold);
  color: #0A0A0A;
  border-color: var(--bgs-gold);
  box-shadow: 0 4px 15px rgba(201, 169, 110, 0.4);
}
@media (max-width: 880px) {
  .bgs-level-grid {
    grid-template-columns: 1fr;
    gap: 16px;
    max-width: 440px;
    margin: 0 auto;
  }
}

/* 8. Checkout Section */
.bgs-checkout-section {
  padding: 65px 20px;
  background: #0C0C0C;
  border-top: 1px solid rgba(201, 169, 110, 0.2);
}
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
.bgs-summary-no-img {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
  color: var(--bgs-gold);
  text-align: center;
  padding: 20px;
}
.bgs-no-img-icon {
  font-size: 3rem;
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
  color: #6B7280;
}
.bgs-saved-chip {
  background: rgba(16, 185, 129, 0.15);
  color: var(--bgs-green);
  font-size: 0.8rem;
  font-weight: 700;
  padding: 3px 8px;
  border-radius: 4px;
}
.bgs-summary-specs-list {
  list-style: none;
  padding: 0;
  margin: 0 0 24px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.bgs-summary-specs-list li {
  font-size: 0.88rem;
  color: #D1D5DB;
  display: flex;
  align-items: flex-start;
  gap: 8px;
  line-height: 1.4;
}
.bgs-check-icon {
  color: var(--bgs-gold);
  font-weight: 800;
}

.bgs-guarantee-box {
  background: #111111;
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
  background: #0E0E0E !important;
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
  background: #141414 !important;
}
.bgs-field-hint {
  display: block;
  font-size: 0.78rem;
  color: var(--bgs-muted);
  margin-top: 5px;
}

/* Delivery Options */
.bgs-delivery-options {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px;
}
.bgs-zone-label {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #0E0E0E;
  border: 1.5px solid rgba(255, 255, 255, 0.14);
  padding: 12px 14px;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.2s ease;
}
.bgs-zone-label input[type="radio"] {
  margin-right: 8px;
  accent-color: var(--bgs-gold);
}
.bgs-zone-label.active {
  border-color: var(--bgs-gold);
  background: rgba(201, 169, 110, 0.08);
}
.bgs-zone-title {
  font-size: 0.88rem;
  color: #FFFFFF;
  font-weight: 500;
}
.bgs-zone-cost {
  font-size: 0.88rem;
  color: var(--bgs-gold);
  font-weight: 700;
}

/* Quantity */
.bgs-qty-controller {
  display: inline-flex;
  align-items: center;
  background: #0E0E0E;
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
  transition: background 0.2s;
  display: flex;
  align-items: center;
  justify-content: center;
}
.bgs-qty-btn:hover {
  background: rgba(201, 169, 110, 0.15);
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

/* Calculation Table */
.bgs-order-calc-table {
  background: #111111;
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

/* COD Method Badge */
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

/* Form Error */
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

/* Submit Button */
.bgs-submit-btn {
  width: 100%;
  background: linear-gradient(135deg, var(--bgs-gold) 0%, #B68C48 100%);
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
  background: linear-gradient(135deg, #DFBF82 0%, #C9A96E 100%);
}
.bgs-submit-btn:disabled {
  opacity: 0.6;
  cursor: not-allowed;
  transform: none;
}
.bgs-secure-note {
  text-align: center;
  font-size: 0.78rem;
  color: var(--bgs-muted);
  margin-top: 14px;
}

/* Mobile Sticky Bottom Bar */
.bgs-mobile-sticky-bar {
  display: none;
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background: rgba(14, 14, 14, 0.96);
  backdrop-filter: blur(8px);
  border-top: 1.5px solid var(--bgs-gold);
  padding: 10px 16px;
  z-index: 9999;
  box-shadow: 0 -8px 25px rgba(0, 0, 0, 0.6);
}
.bgs-sticky-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  max-width: 500px;
  margin: 0 auto;
}
.bgs-sticky-info {
  display: flex;
  flex-direction: column;
}
.bgs-sticky-title {
  font-size: 0.82rem;
  color: #FFFFFF;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 160px;
}
.bgs-sticky-price {
  font-size: 1.15rem;
  font-weight: 800;
  color: var(--bgs-gold);
}
.bgs-sticky-btn {
  background: linear-gradient(135deg, var(--bgs-gold) 0%, #B68C48 100%);
  color: #0A0A0A !important;
  font-weight: 800;
  font-size: 0.95rem;
  padding: 10px 22px;
  border-radius: 30px;
  text-decoration: none !important;
  box-shadow: 0 4px 15px rgba(201, 169, 110, 0.4);
  white-space: nowrap;
}

/* ==========================================================================
   RESPONSIVE DESIGN
   ========================================================================== */
@media (max-width: 900px) {
  .bgs-order-layout {
    grid-template-columns: 1fr;
  }
  .bgs-security-cards-grid {
    grid-template-columns: 1fr;
  }
  .bgs-comp-items-grid {
    grid-template-columns: repeat(3, 1fr);
  }
  .bgs-trust-counters-row {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }
}

@media (max-width: 768px) {
  .bgs-mobile-sticky-bar {
    display: block;
  }
  .bgs-hook-section {
    padding: 35px 16px 20px;
  }
  .bgs-hook-title,
  .bgs-hook-h1 {
    font-size: clamp(1.15rem, 4.2vw, 1.45rem);
    line-height: 1.4;
    white-space: normal;
    text-wrap: balance;
    margin: 0 auto 10px;
  }
  .bgs-hook-h2 {
    font-size: clamp(0.98rem, 3.6vw, 1.25rem);
    line-height: 1.4;
    white-space: normal;
    text-wrap: balance;
    margin: 0 auto 10px;
  }
  .bgs-hook-h3 {
    font-size: clamp(0.92rem, 3.2vw, 1.15rem);
    line-height: 1.4;
    white-space: normal;
    text-wrap: balance;
    margin: 0 auto;
  }
  .bgs-order-btn {
    width: 100%;
    max-width: 320px;
    padding: 16px 24px;
    font-size: 1.15rem;
  }
  .bgs-video-badges-grid {
    grid-template-columns: 1fr;
    gap: 10px;
  }
  .bgs-reels-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
    max-width: 100%;
  }
  .bgs-comp-items-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .bgs-checkout-form-card {
    padding: 20px 16px;
  }
  .bgs-delivery-options {
    grid-template-columns: 1fr;
  }
}

@media (max-width: 480px) {
  .bgs-comp-items-grid {
    grid-template-columns: 1fr;
  }
  .bgs-announcement-inner {
    font-size: 0.78rem;
    gap: 8px;
  }
  .ann-sep {
    display: none;
  }
  .bgs-hook-section {
    padding: 25px 12px 16px;
  }
  .bgs-checkout-section {
    padding: 30px 10px;
  }
  .bgs-checkout-form-card {
    padding: 16px 12px;
  }
  .bgs-form-title {
    font-size: 1.25rem !important;
  }
  .bgs-order-btn {
    font-size: 1rem !important;
    padding: 14px 18px !important;
  }
  .bgs-submit-btn {
    font-size: 1.05rem !important;
    padding: 15px !important;
  }
}
</style>


<!-- ==========================================================================
     INLINE JAVASCRIPT: DYNAMIC CHECKOUT, QUANTITY & AJAX SUBMISSION
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {

  const basePrice = <?php echo floatval( $price ); ?>;
  let currentUnitPrice = <?php echo floatval( $has_levels ? $lvl1_price : $price ); ?>;
  let currentQty = 1;
  let deliveryCost = 0; // Default Inside Dhaka

  const qtyInput           = document.getElementById('bgs-order-qty');
  const qtyMinus           = document.getElementById('bgs-qty-minus');
  const qtyPlus            = document.getElementById('bgs-qty-plus');
  const subtotalVal        = document.getElementById('bgs-subtotal-val');
  const shippingVal        = document.getElementById('bgs-shipping-val');
  const totalVal           = document.getElementById('bgs-total-val');
  const btnTotalCalc       = document.getElementById('bgs-btn-total-calc');
  const zoneLabels         = document.querySelectorAll('.bgs-zone-label');
  const form               = document.getElementById('bgs-direct-order-form');
  const errorBox           = document.getElementById('bgs-form-error');
  const submitBtn          = document.getElementById('bgs-submit-order-btn');
  const unitPriceEl        = document.getElementById('bgs-unit-price');
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

  // Multi-Tier Level Selection Handlers
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

        const lvlName = card.getAttribute('data-level-name');
        const lvlPrice = parseFloat(card.getAttribute('data-price')) || currentUnitPrice;
        const lvlImg = card.getAttribute('data-image');

        currentUnitPrice = lvlPrice;
        if (selectedLevelInput) selectedLevelInput.value = lvlName;
        if (levelPriceInput) levelPriceInput.value = lvlPrice;
        if (unitPriceEl) unitPriceEl.textContent = lvlPrice.toLocaleString();
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

  // Delivery Zone Change Handlers
  zoneLabels.forEach(function(label) {
    label.addEventListener('click', function() {
      zoneLabels.forEach(function(l) { l.classList.remove('active'); });
      label.classList.add('active');
      const radio = label.querySelector('input[type="radio"]');
      if (radio) radio.checked = true;
      deliveryCost = 0;
      updateOrderTotals();
    });
  });

  // Smooth scroll for Order Now buttons
  document.querySelectorAll('a[href="#bgs-order-form"]').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.getElementById('bgs-order-form');
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        // Focus name field after scroll
        setTimeout(function() {
          const nameField = document.getElementById('bgs_customer_name');
          if (nameField) nameField.focus();
        }, 600);
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

      // Validate 11-digit Bangladesh phone
      const phoneClean = phoneVal.replace(/[^0-9]/g, '');
      if (phoneClean.length !== 11 || !phoneClean.startsWith('01')) {
        if (errorBox) {
          errorBox.textContent = 'অনুগ্রহ করে সঠিক ১১ ডিজিটের মোবাইল নম্বর দিন (যেমন: 01XXXXXXXXX)।';
          errorBox.style.display = 'block';
        }
        return;
      }

      // UI Loading state
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
      .catch(function(err) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnHTML;
        if (errorBox) {
          errorBox.textContent = 'নেটওয়ার্ক সমস্যা হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন বা সরাসরি ফোন করুন।';
          errorBox.style.display = 'block';
        }
      });
    });
  }

  // Sticky Bar Scroll Display
  const stickyBar = document.getElementById('bgs-sticky-bar');
  if (stickyBar) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 400) {
        stickyBar.style.display = 'block';
      } else {
        stickyBar.style.display = 'none';
      }
    });
  }

});
</script>

<?php get_footer(); ?>
