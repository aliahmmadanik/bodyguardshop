<?php
/**
 * WooCommerce Single Product Template: BodyGard Combo (7-in-1 Defense Kit)
 * Theme: Bodyguard Shop — High-Converting Dark Luxury Defense Landing Page
 * Sales Video: https://youtu.be/olvw4VShX-4
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$pid           = get_the_ID();
$product       = wc_get_product( $pid );
$product_title = $product ? $product->get_title() : 'BodyGard Combo';
$price         = $product ? floatval( $product->get_price() ) : 2990;
$reg_price     = 6953;
$price         = 2990;
$save_amount   = $reg_price - $price;
$discount_pct  = 57;

// Video Embed: https://youtu.be/olvw4VShX-4
$video_embed_url = 'https://www.youtube.com/embed/olvw4VShX-4?rel=0&modestbranding=1&playsinline=1';

$upload_base = get_template_directory_uri() . '/assets/images/combo/';
?>

<main id="bgs-product-landing" class="bgs-single-landing bgs-combo-landing">

  <!-- ==========================================================================
       1. TOP 2-LINE HERO HEADLINE (STRICTLY 1 LINE EACH ON DESKTOP & MOBILE = 2 LINES)
       ========================================================================== -->
  <section class="bgs-hook-section">
    <div class="container bgs-hero-headline-container">

      <!-- 1st line h1 -->
      <h1 class="bgs-hook-title bgs-hook-h1">
        মাত্র ২,৯৯০ টাকায় নিজেকে নিরাপদ রাখুন
      </h1>

      <!-- 2nd line h2 -->
      <h2 class="bgs-hook-h2">
        ছিনতাই, ডাকাতি, অপহরণ, ধর্ষণের মতো মারাত্মক আক্রমণের ঝুঁকি থেকে।
      </h2>

    </div>
  </section>

  <!-- ==========================================================================
       2. VIDEO SECTION (https://youtu.be/olvw4VShX-4)
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
            title="BodyGard Combo — Video"
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
  <section class="bgs-cta-block">
    <div class="container text-center">
      <a href="#bgs-order-form" class="bgs-order-btn bgs-glow-pulse">
        Order Now
      </a>
    </div>
  </section>

  <!-- ==========================================================================
       4. 7-IN-1 COMBO PICTURE SLIDER SECTION
       ========================================================================== -->
  <section class="bgs-slider-section" id="combo-tools">
    <div class="container">

      <div class="bgs-section-header">
        <span class="bgs-sec-pill">ALL-IN-ONE DEFENSE KIT</span>
        <h2 class="bgs-sec-heading">কম্বো কিটের ৭টি শক্তিশালী সেলফ-ডিফেন্স টুলস</h2>
        <div class="bgs-gold-divider"></div>
      </div>

      <!-- Quick Nav Tabs -->
      <div class="bgs-slider-nav-tabs" id="bgsSliderTabs">
        <button type="button" class="bgs-tab-btn active" data-slide="0">১. পেপার স্প্রে</button>
        <button type="button" class="bgs-tab-btn" data-slide="1">২. পকেট নাইফ</button>
        <button type="button" class="bgs-tab-btn" data-slide="2">৩. পেন-নাইফ</button>
        <button type="button" class="bgs-tab-btn" data-slide="3">৪. ট্যাকটিক্যাল টর্চ</button>
        <button type="button" class="bgs-tab-btn" data-slide="4">৫. গ্লাস ব্রেকার</button>
        <button type="button" class="bgs-tab-btn" data-slide="5">৬. পার্সোনাল অ্যালার্ম সাইরেন</button>
        <button type="button" class="bgs-tab-btn" data-slide="6">৭. ইমার্জেন্সি ওয়্যার স</button>
      </div>

      <!-- Slider Wrapper -->
      <div class="bgs-slider-card-box">
        <button type="button" class="bgs-slider-arrow bgs-prev-arrow" id="bgsPrevSlide" aria-label="Previous Slide">‹</button>
        <button type="button" class="bgs-slider-arrow bgs-next-arrow" id="bgsNextSlide" aria-label="Next Slide">›</button>

        <div class="bgs-slides-track" id="bgsSlidesTrack">

          <!-- Slide 1: Pepper Spray Keychain -->
          <div class="bgs-slide-item active" data-index="0">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-01-pepper-spray.jpg' ); ?>" alt="Pepper Spray Keychain" loading="lazy">
                <div class="bgs-tool-floating-emblem">🌶️</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০১ / ০৭</span>
                <h3 class="bgs-tool-name">১. Pepper Spray Keychain (পেপার স্প্রে)</h3>
                <p class="bgs-tool-use">
                  <strong>সুবিধা:</strong> এটি অপরাধীর চোখে স্প্রে করলে প্রচণ্ড জ্বালা-পোড়া তৈরি করে তাকে সাময়িকভাবে একদম অক্ষম করে ফেলে। নিরাপদ দূরত্ব বজায় রেখে আক্রমণ ঠেকানো এবং সহজে নিরাপদ স্থানে পালিয়ে যাওয়া সম্ভব হয়।
                </p>
              </div>
            </div>
          </div>

          <!-- Slide 2: Swiss Army Pocket Knife -->
          <div class="bgs-slide-item" data-index="1">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-05-swiss-knife.jpg' ); ?>" alt="Swiss Army Pocket Knife" loading="lazy">
                <div class="bgs-tool-floating-emblem">🔪</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০২ / ০৭</span>
                <h3 class="bgs-tool-name">২. Swiss Army Pocket Knife (পকেট নাইফ)</h3>
                <p class="bgs-tool-use">
                  <strong>সুবিধা:</strong> আচমকা আক্রমণের শিকার হলে এর ধারালো ব্লেড দিয়ে সরাসরি আত্মরক্ষা করা সম্ভব। অপহরিত বা আটকে পড়া অবস্থায় হাত-পায়ের দড়ি বা বাঁধন কেটে দ্রুত পালিয়ে যেতে এটি দারুণ কাজ করে।
                </p>
              </div>
            </div>
          </div>

          <!-- Slide 3: Tactical Pen-Knife -->
          <div class="bgs-slide-item" data-index="2">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-04-tactical-pen-knife.jpg' ); ?>" alt="Tactical Pen-Knife" loading="lazy">
                <div class="bgs-tool-floating-emblem">🖊️</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০৩ / ০৭</span>
                <h3 class="bgs-tool-name">৩. Tactical Pen-Knife (পেন-নাইফ)</h3>
                <p class="bgs-tool-use">
                  <strong>সুবিধা:</strong> কলমের ছদ্মবেশে থাকা এই গোপন ছুড়িটির উপস্থিতি অপরাধী কখনোই আগে থেকে টের পায় না। বিপদের মুহূর্তে আচমকা এটি ব্যবহার করে অপরাধীকে কাবু করা ও নিজেকে আত্মরক্ষা করা যায়।
                </p>
              </div>
            </div>
          </div>

          <!-- Slide 4: High-Power Tactical Flashlight -->
          <div class="bgs-slide-item" data-index="3">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-02-tactical-flashlight.jpg' ); ?>" alt="High-Power Tactical Flashlight" loading="lazy">
                <div class="bgs-tool-floating-emblem">🔦</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০৪ / ০৭</span>
                <h3 class="bgs-tool-name">৪. High-Power Tactical Flashlight (ট্যাকটিক্যাল টর্চ)</h3>
                <p class="bgs-tool-use">
                  <strong>সুবিধা:</strong> অন্ধকার রাতে দূর থেকেই সম্ভাব্য বিপদ চিহ্নিত করা এবং জরুরী প্রয়োজনে স্ট্রব সিগন্যাল দেওয়া যায়। এর তীব্র আলো সরাসরি অপরাধীর চোখে ফেললে সে সাময়িকভাবে দৃষ্টিহীন হয়ে পড়ে।
                </p>
              </div>
            </div>
          </div>

          <!-- Slide 5: Glass Breaker & Seatbelt Cutter -->
          <div class="bgs-slide-item" data-index="4">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-06-emergency-cutter-breaker.jpg' ); ?>" alt="Glass Breaker & Seatbelt Cutter" loading="lazy">
                <div class="bgs-tool-floating-emblem">🔨</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০৫ / ০৭</span>
                <h3 class="bgs-tool-name">৫. Glass Breaker & Seatbelt Cutter (গ্লাস ব্রেকার)</h3>
                <p class="bgs-tool-use">
                  <strong>সুবিধা:</strong> অপহরিত বা গাড়িতে বন্দি অবস্থায় এটি দিয়ে নিমেষেই জানালা ভেঙে বা সিটবেল্ট কেটে বের হওয়া যায়। এর শক্ত মেটাল হেড অপরাধীর বিরুদ্ধে হাতাহাতি আত্মরক্ষার হাতিয়ার হিসেবেও ব্যবহার করা সম্ভব।
                </p>
              </div>
            </div>
          </div>

          <!-- Slide 6: Personal Safety Alarm -->
          <div class="bgs-slide-item" data-index="5">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-03-siren-alarm.jpg' ); ?>" alt="Personal Safety Alarm" loading="lazy">
                <div class="bgs-tool-floating-emblem">🚨</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০৬ / ০৭</span>
                <h3 class="bgs-tool-name">৬. Personal Safety Alarm (পার্সোনাল অ্যালার্ম সাইরেন)</h3>
                <p class="bgs-tool-use">
                  <strong>সুবিধা:</strong> এর বিকট শব্দের সাইরেন চালু করলে আসেপাশের মানুষের দৃষ্টি আকর্ষণ করে দ্রুত সাহায্য পাওয়া যায়। এটি ছিনতাইকারী বা অপহরণকারীকে চমকে দিয়ে নিজেকে রক্ষা করার মূল্যবান সময় তৈরি করে দেয়।
                </p>
              </div>
            </div>
          </div>

          <!-- Slide 7: Wire Saw / Emergency Cable -->
          <div class="bgs-slide-item" data-index="6">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-07-wire-saw-keychain.jpg' ); ?>" alt="Wire Saw / Emergency Cable" loading="lazy">
                <div class="bgs-tool-floating-emblem">⛓️</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০৭ / ০৭</span>
                <h3 class="bgs-tool-name">৭. Wire Saw / Emergency Cable (ইমার্জেন্সি ওয়্যার স)</h3>
                <p class="bgs-tool-use">
                  <strong>সুবিধা:</strong> অপহরণের পর কোনো ঘরে বা জায়গায় শক্ত দড়ি, প্লাস্টিক বা কাঠে আটকে রাখলে এটি দিয়ে কেটে বের হওয়া যায়। অত্যন্ত হালকা ও সহজে লুকিয়ে রাখা যায় বলে বিপদে পথ তৈরির জন্য এটি অত্যন্ত কার্যকর।
                </p>
              </div>
            </div>
          </div>

        </div>

        <!-- Slider Pagination Dots -->
        <div class="bgs-slider-dots" id="bgsSliderDots">
          <span class="bgs-dot active" data-slide="0"></span>
          <span class="bgs-dot" data-slide="1"></span>
          <span class="bgs-dot" data-slide="2"></span>
          <span class="bgs-dot" data-slide="3"></span>
          <span class="bgs-dot" data-slide="4"></span>
          <span class="bgs-dot" data-slide="5"></span>
          <span class="bgs-dot" data-slide="6"></span>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       5. 7 TOOLS DETAILS & BENEFITS LIST SECTION
       ========================================================================== -->
  <section class="bgs-combo-tools-info-section">
    <div class="container bgs-narrow-container">
      <div class="bgs-combo-tools-card">

        <div class="bgs-combo-tool-row">
          <h3 class="bgs-ct-heading">১. Pepper Spray Keychain (পেপার স্প্রে)</h3>
          <p class="bgs-ct-benefit"><strong>সুবিধা:</strong> এটি অপরাধীর চোখে স্প্রে করলে প্রচণ্ড জ্বালা-পোড়া তৈরি করে তাকে সাময়িকভাবে একদম অক্ষম করে ফেলে। নিরাপদ দূরত্ব বজায় রেখে আক্রমণ ঠেকানো এবং সহজে নিরাপদ স্থানে পালিয়ে যাওয়া সম্ভব হয়।</p>
        </div>

        <div class="bgs-combo-tool-row">
          <h3 class="bgs-ct-heading">২. Swiss Army Pocket Knife (পকেট নাইফ)</h3>
          <p class="bgs-ct-benefit"><strong>সুবিধা:</strong> আচমকা আক্রমণের শিকার হলে এর ধারালো ব্লেড দিয়ে সরাসরি আত্মরক্ষা করা সম্ভব। অপহরিত বা আটকে পড়া অবস্থায় হাত-পায়ের দড়ি বা বাঁধন কেটে দ্রুত পালিয়ে যেতে এটি দারুণ কাজ করে।</p>
        </div>

        <div class="bgs-combo-tool-row">
          <h3 class="bgs-ct-heading">৩. Tactical Pen-Knife (পেন-নাইফ)</h3>
          <p class="bgs-ct-benefit"><strong>সুবিধা:</strong> কলমের ছদ্মবেশে থাকা এই গোপন ছুড়িটির উপস্থিতি অপরাধী কখনোই আগে থেকে টের পায় না। বিপদের মুহূর্তে আচমকা এটি ব্যবহার করে অপরাধীকে কাবু করা ও নিজেকে আত্মরক্ষা করা যায়।</p>
        </div>

        <div class="bgs-combo-tool-row">
          <h3 class="bgs-ct-heading">৪. High-Power Tactical Flashlight (ট্যাকটিক্যাল টর্চ)</h3>
          <p class="bgs-ct-benefit"><strong>সুবিধা:</strong> অন্ধকার রাতে দূর থেকেই সম্ভাব্য বিপদ চিহ্নিত করা এবং জরুরী প্রয়োজনে স্ট্রব সিগন্যাল দেওয়া যায়। এর তীব্র আলো সরাসরি অপরাধীর চোখে ফেললে সে সাময়িকভাবে দৃষ্টিহীন হয়ে পড়ে।</p>
        </div>

        <div class="bgs-combo-tool-row">
          <h3 class="bgs-ct-heading">৫. Glass Breaker &amp; Seatbelt Cutter (গ্লাস ব্রেকার)</h3>
          <p class="bgs-ct-benefit"><strong>সুবিধা:</strong> অপহরিত বা গাড়িতে বন্দি অবস্থায় এটি দিয়ে নিমেষেই জানালা ভেঙে বা সিটবেল্ট কেটে বের হওয়া যায়। এর শক্ত মেটাল হেড অপরাধীর বিরুদ্ধে হাতাহাতি আত্মরক্ষার হাতিয়ার হিসেবেও ব্যবহার করা সম্ভব।</p>
        </div>

        <div class="bgs-combo-tool-row">
          <h3 class="bgs-ct-heading">৬. Personal Safety Alarm (পার্সোনাল অ্যালার্ম সাইরেন)</h3>
          <p class="bgs-ct-benefit"><strong>সুবিধা:</strong> এর বিকট শব্দের সাইরেন চালু করলে আসেপাশের মানুষের দৃষ্টি আকর্ষণ করে দ্রুত সাহায্য পাওয়া যায়। এটি ছিনতাইকারী বা অপহরণকারীকে চমকে দিয়ে নিজেকে রক্ষা করার মূল্যবান সময় তৈরি করে দেয়।</p>
        </div>

        <div class="bgs-combo-tool-row">
          <h3 class="bgs-ct-heading">৭. Wire Saw / Emergency Cable (ইমার্জেন্সি ওয়্যার স)</h3>
          <p class="bgs-ct-benefit"><strong>সুবিধা:</strong> অপহরণের পর কোনো ঘরে বা জায়গায় শক্ত দড়ি, প্লাস্টিক বা কাঠে আটকে রাখলে এটি দিয়ে কেটে বের হওয়া যায়। অত্যন্ত হালকা ও সহজে লুকিয়ে রাখা যায় বলে বিপদে পথ তৈরির জন্য এটি অত্যন্ত কার্যকর।</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       6. EMOTIONAL REFLECTION & PREPAREDNESS SECTION (1-LINE HEADING + 8 LINES)
       ========================================================================== -->
  <section class="bgs-awareness-section">
    <div class="container bgs-narrow-container">
      <div class="bgs-reflection-card">

        <!-- Section Heading: Strictly 1 Line on ALL Devices -->
        <h2 class="bgs-reflection-one-line-heading">
          আজ ২,৯৯০ টাকা খরচ করতে হয়তো একটু বেশি মনে হতে পারে
        </h2>

        <!-- Exact 8 Lines -->
        <div class="bgs-reflection-eight-lines">
          <p class="bgs-ref-line bgs-ref-lead">কিন্তু ভাবুন তো—</p>
          <p class="bgs-ref-line">হঠাৎ ছিনতাই।</p>
          <p class="bgs-ref-line">রাস্তায় হামলা।</p>
          <p class="bgs-ref-line">জোর করে গাড়িতে তুলে নেওয়ার চেষ্টা।</p>
          <p class="bgs-ref-line">বাড়িতে ডাকাতের আক্রমণ।</p>
          <p class="bgs-ref-line bgs-ref-highlight">অথবা আপনার প্রিয় মানুষটি বিপদে পড়েছে—আর আপনি কিছুই করতে পারছেন না।</p>
          <p class="bgs-ref-line bgs-ref-sub">বিপদ কখন, কোথা থেকে আসবে—কেউ জানে না।</p>
          <p class="bgs-ref-line bgs-ref-strong">তাই বিপদ আসার পর নয়, বিপদ আসার আগেই প্রস্তুত থাকুন।</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       7. ORDER NOW CHECKOUT FORM (AT THE VERY END)
       ========================================================================== -->
  <section class="bgs-checkout-section" id="bgs-order-form">
    <div class="container bgs-narrow-container">

      <div class="bgs-section-header">
        <span class="bgs-sec-pill">CASH ON DELIVERY</span>
        <h2 class="bgs-sec-heading">অর্ডার করতে নিচের ফর্মটি পূরণ করুন</h2>
        <div class="bgs-gold-divider"></div>
        <p class="bgs-sec-subheading">কোনো অগ্রিম টাকা দিতে হবে না, পণ্য হাতে পেয়ে মূল্য পরিশোধ করুন।</p>
      </div>

      <div class="bgs-checkout-form-card">

        <!-- Package Summary -->
        <div class="bgs-selected-package-box">
          <div class="bgs-sp-thumb">
            <img src="<?php echo esc_url( $upload_base . 'bodyguard-combo-7in1-kit.jpg' ); ?>" alt="BodyGard Combo">
          </div>
          <div class="bgs-sp-info">
            <span class="bgs-sp-badge">🔥 LIMITED OFFER — <?php echo esc_html( $discount_pct ); ?>% OFF</span>
            <h4 class="bgs-sp-title">BodyGard Combo</h4>
            <div class="bgs-sp-price-row">
              <span class="bgs-sp-sale-price">৳ <span id="bgs-unit-price-display"><?php echo number_format( $price ); ?></span></span>
              <span class="bgs-sp-reg-price">৳ <span id="bgs-unit-reg-display"><?php echo number_format( $reg_price ); ?></span></span>
              <span class="bgs-sp-save-tag">সাশ্রয় ৳ <?php echo number_format( $save_amount ); ?></span>
            </div>
            <p class="bgs-sp-desc">৭টি শক্তিশালী সেলফ-ডিফেন্স সেফটি টুলস একসাথে সম্পূর্ণ কিট।</p>
          </div>
        </div>

        <!-- Order Form -->
        <form id="bgs-direct-order-form" class="bgs-order-form" novalidate>
          <input type="hidden" name="action" value="bgs_process_direct_order">
          <input type="hidden" name="product_id" value="<?php echo esc_attr( $pid ); ?>">
          <input type="hidden" id="bgs-selected-level-input" name="selected_level" value="BodyGard Combo (7-in-1)">
          <input type="hidden" id="bgs-level-price-input" name="level_price" value="<?php echo esc_attr( $price ); ?>">

          <!-- Quantity Picker -->
          <div class="bgs-form-row">
            <label class="bgs-form-label">
              পরিমাণ (Quantity):
            </label>
            <div class="bgs-qty-picker">
              <button type="button" class="bgs-qty-btn" id="bgs-qty-minus" aria-label="Decrease quantity">−</button>
              <input type="number" id="bgs-order-qty" name="quantity" value="1" min="1" max="10" readonly>
              <button type="button" class="bgs-qty-btn" id="bgs-qty-plus" aria-label="Increase quantity">+</button>
            </div>
          </div>

          <!-- Delivery Location (Free Delivery) -->
          <div class="bgs-form-row">
            <label class="bgs-form-label">
              ডেলিভারি চার্জ:
            </label>
            <div class="bgs-delivery-options">
              <label class="bgs-del-option active" style="grid-column: 1 / -1;">
                <input type="radio" name="delivery_location" value="free_shipping" checked>
                <div class="bgs-del-content">
                  <span class="bgs-del-title">🚚 ফ্রি হোম ডেলিভারি (সারা বাংলাদেশ)</span>
                  <span class="bgs-del-fee" style="color: #22C55E; font-weight: 800;">৳ ০ (ফ্রি)</span>
                </div>
              </label>
            </div>
          </div>

          <!-- Live Price Summary Table -->
          <div class="bgs-price-breakdown">
            <div class="bgs-pb-row">
              <span>প্রডাক্ট প্রাইস:</span>
              <span>৳ <span id="bgs-subtotal-display"><?php echo number_format( $price ); ?></span></span>
            </div>
            <div class="bgs-pb-row">
              <span>ডেলিভারি চার্জ:</span>
              <span style="color: #22C55E; font-weight: 700;">৳ <span id="bgs-delivery-display">0</span> (ফ্রি)</span>
            </div>
            <div class="bgs-pb-divider"></div>
            <div class="bgs-pb-row bgs-pb-total">
              <strong>সর্বমোট প্রদেয়:</strong>
              <strong class="bgs-gold-total">৳ <span id="bgs-total-display"><?php echo number_format( $price ); ?></span></strong>
            </div>
          </div>

          <!-- Customer Name -->
          <div class="bgs-form-group">
            <label for="bgs_billing_name" class="bgs-input-label">
              আপনার নাম <span class="bgs-req">*</span>
            </label>
            <input 
              type="text" 
              id="bgs_billing_name" 
              name="billing_name" 
              class="bgs-input-field" 
              placeholder="আপনার পুরো নাম লিখুন" 
              required
            >
          </div>

          <!-- Mobile Phone Number -->
          <div class="bgs-form-group">
            <label for="bgs_billing_phone" class="bgs-input-label">
              মোবাইল নাম্বার <span class="bgs-req">*</span>
            </label>
            <input 
              type="tel" 
              id="bgs_billing_phone" 
              name="billing_phone" 
              class="bgs-input-field" 
              placeholder="১১ ডিজিটের সচল মোবাইল নাম্বার দিন" 
              pattern="[0-9]{11}" 
              required
            >
            <small class="bgs-field-hint">অর্ডার কনফার্ম করার জন্য এই নাম্বারে কল দেওয়া হবে।</small>
          </div>

          <!-- Delivery Address -->
          <div class="bgs-form-group">
            <label for="bgs_billing_address" class="bgs-input-label">
              সম্পূর্ণ ঠিকানা <span class="bgs-req">*</span>
            </label>
            <textarea 
              id="bgs_billing_address" 
              name="billing_address" 
              class="bgs-textarea-field" 
              rows="3" 
              placeholder="বাসা নং, রোড নং, এলাকা, থানা ও জেলার নাম লিখুন" 
              required
            ></textarea>
          </div>

          <!-- Submit Order Button -->
          <div class="bgs-form-action">
            <button type="submit" id="bgs-submit-order-btn" class="bgs-submit-btn">
              <span class="bgs-btn-text">
                অর্ডার কনফার্ম করুন — ৳ <span id="bgs-btn-total-display"><?php echo number_format( $price ); ?></span> (ক্যাশ অন ডেলিভারি)
              </span>
              <span class="bgs-btn-spinner" style="display:none;">⏳ অর্ডার প্রসেস হচ্ছে...</span>
            </button>
          </div>

          <!-- Trust Guarantees -->
          <div class="bgs-form-trust-badges">
            <div class="bgs-ftb-item">
              <span class="bgs-ftb-icon">🛡️</span>
              <span>১০০% আসল ও কোয়ালিটি পণ্য</span>
            </div>
            <div class="bgs-ftb-item">
              <span class="bgs-ftb-icon">📦</span>
              <span>পণ্য হাতে পেয়ে মূল্য পরিশোধ</span>
            </div>
            <div class="bgs-ftb-item">
              <span class="bgs-ftb-icon">⚡</span>
              <span>২৪-৪৮ ঘণ্টায় দ্রুত ডেলিভারি</span>
            </div>
          </div>

          <!-- Response Message Box -->
          <div id="bgs-order-response" class="bgs-response-box" style="display: none;"></div>

        </form>

      </div>

    </div>
  </section>

</main>

<!-- ==========================================================================
     INLINE STYLES FOR BODYGARD COMBO LANDING PAGE
     ========================================================================== -->
<style>
:root {
  --bgs-gold: #C9A96E;
  --bgs-gold-hover: #DFBF82;
  --bgs-gold-dark: #A88742;
  --bgs-dark: #0A0A0E;
  --bgs-dark-surface: #14141C;
  --bgs-card-bg: #14141C;
  --bgs-card-border: rgba(201, 169, 110, 0.25);
  --bgs-text: #FFFFFF;
  --bgs-muted: #A8A8B8;
  --bgs-red: #DC2626;
  --bgs-green: #10B981;
}

.bgs-single-landing {
  background: var(--bgs-dark);
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

/* 1. Top 2-Line Hero Headline — Strictly 1 Line Each on Desktop & Mobile (Total 2 Lines) */
.bgs-hook-section {
  padding: 55px 12px 28px;
  text-align: center;
}
.bgs-hook-title,
.bgs-hook-h1 {
  font-size: clamp(12px, 4.1vw, 2.35rem);
  font-weight: 800;
  line-height: 1.4;
  color: #FFFFFF;
  margin: 0 auto 12px;
  white-space: nowrap !important;
}
.bgs-hook-h2 {
  font-size: clamp(9.5px, 2.95vw, 1.55rem);
  font-weight: 700;
  line-height: 1.4;
  color: var(--bgs-gold);
  margin: 0 auto;
  white-space: nowrap !important;
}

/* 2. Sales Video */
.bgs-video-section {
  padding: 15px 16px 25px;
}
.bgs-video-outer-frame {
  position: relative;
  background: #121218;
  border: 2px solid var(--bgs-gold);
  border-radius: 16px;
  padding: 8px;
  box-shadow: 0 16px 50px rgba(0, 0, 0, 0.8), 0 0 35px rgba(201, 169, 110, 0.25);
  max-width: 820px;
  margin: 0 auto;
}
.bgs-video-corner {
  position: absolute;
  width: 16px;
  height: 16px;
  pointer-events: none;
}
.bgs-vc-tl { top: -2px; left: -2px; border-width: 3px 0 0 3px; border-style: solid; border-color: var(--bgs-gold); }
.bgs-vc-tr { top: -2px; right: -2px; border-width: 3px 3px 0 0; border-style: solid; border-color: var(--bgs-gold); }
.bgs-vc-bl { bottom: -2px; left: -2px; border-width: 0 0 3px 3px; border-style: solid; border-color: var(--bgs-gold); }
.bgs-vc-br { bottom: -2px; right: -2px; border-width: 0 3px 3px 0; border-style: solid; border-color: var(--bgs-gold); }

.bgs-video-aspect-box {
  position: relative;
  width: 100%;
  padding-bottom: 56.25%;
  height: 0;
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

/* 3. Order Now Button */
.bgs-cta-block {
  padding: 18px 20px 40px;
  text-align: center;
}
.bgs-order-btn {
  display: inline-block;
  background: linear-gradient(135deg, #C9A96E 0%, #E5C384 50%, #A88742 100%);
  color: #0A0A0A !important;
  font-weight: 800;
  font-size: 1.35rem;
  padding: 16px 52px;
  border-radius: 50px;
  text-decoration: none !important;
  text-transform: uppercase;
  letter-spacing: 1px;
  box-shadow: 0 10px 30px rgba(201, 169, 110, 0.4);
  transition: all 0.3s ease;
}
.bgs-order-btn:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 16px 40px rgba(201, 169, 110, 0.6);
  color: #000000 !important;
}
.bgs-glow-pulse {
  animation: bgsPulse 2.4s infinite;
}
@keyframes bgsPulse {
  0% { box-shadow: 0 0 0 0 rgba(201, 169, 110, 0.6); }
  70% { box-shadow: 0 0 0 18px rgba(201, 169, 110, 0); }
  100% { box-shadow: 0 0 0 0 rgba(201, 169, 110, 0); }
}

/* 4. 7-in-1 Combo Picture Slider */
.bgs-slider-section {
  padding: 50px 20px;
  background: #0D0D12;
  border-top: 1px solid rgba(201, 169, 110, 0.15);
  border-bottom: 1px solid rgba(201, 169, 110, 0.15);
}
.bgs-section-header {
  text-align: center;
  margin-bottom: 30px;
}
.bgs-sec-pill {
  display: inline-block;
  background: rgba(201, 169, 110, 0.15);
  color: var(--bgs-gold);
  border: 1px solid var(--bgs-gold);
  padding: 5px 14px;
  border-radius: 20px;
  font-size: 0.78rem;
  font-weight: 700;
  letter-spacing: 1.5px;
  margin-bottom: 12px;
}
.bgs-sec-heading {
  font-size: clamp(1.35rem, 3vw, 2.15rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 12px;
}
.bgs-sec-subheading {
  color: var(--bgs-muted);
  font-size: 1rem;
  margin: 0;
}
.bgs-gold-divider {
  width: 60px;
  height: 3px;
  background: var(--bgs-gold);
  margin: 0 auto 14px;
  border-radius: 2px;
}

.bgs-slider-nav-tabs {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 8px;
  max-width: 960px;
  margin: 0 auto 26px;
}
.bgs-tab-btn {
  background: var(--bgs-dark-surface);
  color: #D1D5DB;
  border: 1px solid var(--bgs-card-border);
  padding: 8px 16px;
  border-radius: 20px;
  font-size: 0.88rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.25s ease;
}
.bgs-tab-btn:hover {
  border-color: var(--bgs-gold);
  color: #FFFFFF;
}
.bgs-tab-btn.active {
  background: var(--bgs-gold);
  color: #000000;
  border-color: var(--bgs-gold);
  font-weight: 700;
}

.bgs-slider-card-box {
  position: relative;
  max-width: 960px;
  margin: 0 auto;
  background: var(--bgs-card-bg);
  border: 1.5px solid var(--bgs-gold);
  border-radius: 20px;
  padding: 30px;
  box-shadow: 0 16px 50px rgba(0, 0, 0, 0.7);
}
.bgs-slider-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 44px;
  height: 44px;
  background: rgba(0, 0, 0, 0.75);
  border: 1.5px solid var(--bgs-gold);
  color: var(--bgs-gold);
  border-radius: 50%;
  font-size: 1.8rem;
  line-height: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 10;
  transition: all 0.25s ease;
}
.bgs-slider-arrow:hover {
  background: var(--bgs-gold);
  color: #000000;
}
.bgs-prev-arrow { left: -18px; }
.bgs-next-arrow { right: -18px; }

.bgs-slides-track {
  position: relative;
  overflow: hidden;
}
.bgs-slide-item {
  display: none;
  animation: bgsFadeIn 0.35s ease;
}
.bgs-slide-item.active {
  display: block;
}
@keyframes bgsFadeIn {
  from { opacity: 0; transform: scale(0.98); }
  to { opacity: 1; transform: scale(1); }
}

.bgs-slide-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 32px;
  align-items: center;
}
.bgs-slide-visual {
  position: relative;
  border-radius: 14px;
  overflow: hidden;
  border: 1px solid var(--bgs-card-border);
  background: #000000;
}
.bgs-slide-visual img {
  width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
}
.bgs-tool-floating-emblem {
  position: absolute;
  top: 14px;
  right: 14px;
  background: rgba(0, 0, 0, 0.75);
  border: 1px solid var(--bgs-gold);
  border-radius: 50%;
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.6rem;
}

.bgs-tool-seq {
  display: inline-block;
  color: var(--bgs-gold);
  font-size: 0.85rem;
  font-weight: 700;
  letter-spacing: 1px;
  margin-bottom: 8px;
}
.bgs-tool-name {
  font-size: clamp(1.2rem, 2.2vw, 1.6rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 14px;
  line-height: 1.35;
}
.bgs-tool-use {
  font-size: 1.02rem;
  color: #E5E7EB;
  line-height: 1.7;
  margin: 0;
}
.bgs-tool-use strong {
  color: var(--bgs-gold);
}

.bgs-slider-dots {
  display: flex;
  justify-content: center;
  gap: 8px;
  margin-top: 24px;
}
.bgs-dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #374151;
  cursor: pointer;
  transition: all 0.25s ease;
}
.bgs-dot.active {
  background: var(--bgs-gold);
  width: 24px;
  border-radius: 10px;
}

/* 5. 7 Tools Information List Block */
.bgs-combo-tools-info-section {
  padding: 45px 0 30px;
}
.bgs-combo-tools-card {
  background: #14141C;
  border: 1px solid rgba(201, 169, 110, 0.28);
  border-radius: 18px;
  padding: 36px 32px;
  box-shadow: 0 16px 45px rgba(0, 0, 0, 0.55);
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.bgs-combo-tool-row {
  padding-bottom: 20px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
.bgs-combo-tool-row:last-child {
  padding-bottom: 0;
  border-bottom: none;
}
.bgs-ct-heading {
  font-size: clamp(1.1rem, 2.2vw, 1.38rem);
  font-weight: 800;
  color: var(--bgs-gold);
  margin: 0 0 8px;
  line-height: 1.35;
}
.bgs-ct-benefit {
  font-size: clamp(0.96rem, 1.8vw, 1.08rem);
  color: #F3F4F6;
  line-height: 1.7;
  margin: 0;
}
.bgs-ct-benefit strong {
  color: #FFFFFF;
}

/* 6. Emotional Reflection & Preparedness Section (1-Line Heading + 8 Lines) */
.bgs-awareness-section {
  padding: 25px 0 45px;
}
.bgs-reflection-card {
  background: linear-gradient(145deg, #161622 0%, #101018 100%);
  border: 1.5px solid rgba(201, 169, 110, 0.35);
  border-radius: 18px;
  padding: 40px 24px;
  text-align: center;
  box-shadow: 0 18px 50px rgba(0, 0, 0, 0.6);
}
.bgs-reflection-one-line-heading {
  font-size: clamp(10px, 3.2vw, 1.65rem);
  font-weight: 800;
  color: #FFFFFF;
  line-height: 1.4;
  margin: 0 auto 24px;
  white-space: nowrap !important;
}
.bgs-reflection-eight-lines {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 720px;
  margin: 0 auto;
}
.bgs-ref-line {
  font-size: clamp(1rem, 2.1vw, 1.2rem);
  font-weight: 600;
  color: #E5E7EB;
  margin: 0;
  line-height: 1.5;
}
.bgs-ref-lead {
  color: var(--bgs-gold);
  font-weight: 800;
  font-size: clamp(1.08rem, 2.3vw, 1.32rem);
  margin-bottom: 4px;
}
.bgs-ref-highlight {
  color: #FCA5A5;
  font-weight: 700;
  margin-top: 4px;
}
.bgs-ref-sub {
  color: #D1D5DB;
  margin-top: 8px;
}
.bgs-ref-strong {
  color: var(--bgs-gold);
  font-weight: 800;
  font-size: clamp(1.08rem, 2.3vw, 1.35rem);
  margin-top: 4px;
}

/* 7. Checkout Form */
.bgs-checkout-section {
  padding: 30px 16px 70px;
}
.bgs-checkout-form-card {
  background: var(--bgs-card-bg);
  border: 1.5px solid var(--bgs-gold);
  border-radius: 20px;
  padding: 34px 28px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.8), 0 0 35px rgba(201, 169, 110, 0.15);
}

.bgs-selected-package-box {
  display: flex;
  gap: 20px;
  background: #0F0F16;
  border: 1px solid var(--bgs-card-border);
  border-radius: 14px;
  padding: 18px;
  margin-bottom: 28px;
  align-items: center;
}
.bgs-sp-thumb {
  width: 90px;
  height: 90px;
  border-radius: 10px;
  overflow: hidden;
  flex-shrink: 0;
  border: 1px solid var(--bgs-gold);
}
.bgs-sp-thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.bgs-sp-badge {
  display: inline-block;
  background: rgba(220, 38, 38, 0.2);
  color: #F87171;
  border: 1px solid #DC2626;
  font-size: 0.75rem;
  font-weight: 700;
  padding: 3px 8px;
  border-radius: 4px;
  margin-bottom: 6px;
}
.bgs-sp-title {
  font-size: 1.18rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 6px;
}
.bgs-sp-price-row {
  display: flex;
  align-items: baseline;
  gap: 10px;
  margin-bottom: 4px;
  flex-wrap: wrap;
}
.bgs-sp-sale-price {
  font-size: 1.35rem;
  font-weight: 800;
  color: var(--bgs-gold);
}
.bgs-sp-reg-price {
  font-size: 0.95rem;
  color: var(--bgs-muted);
  text-decoration: line-through;
}
.bgs-sp-save-tag {
  background: rgba(16, 185, 129, 0.2);
  color: var(--bgs-green);
  font-size: 0.78rem;
  font-weight: 700;
  padding: 2px 8px;
  border-radius: 4px;
}
.bgs-sp-desc {
  font-size: 0.85rem;
  color: var(--bgs-muted);
  margin: 0;
}

.bgs-form-row {
  margin-bottom: 20px;
}
.bgs-form-label,
.bgs-input-label {
  display: block;
  font-size: 0.95rem;
  font-weight: 700;
  color: #E5E7EB;
  margin-bottom: 10px;
}
.bgs-req {
  color: var(--bgs-red);
}

.bgs-qty-picker {
  display: inline-flex;
  align-items: center;
  background: #0F0F16;
  border: 1.5px solid var(--bgs-gold);
  border-radius: 10px;
  overflow: hidden;
}
.bgs-qty-btn {
  background: transparent;
  color: var(--bgs-gold);
  border: none;
  font-size: 1.5rem;
  width: 44px;
  height: 44px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background 0.2s;
}
.bgs-qty-btn:hover {
  background: rgba(201, 169, 110, 0.2);
}
.bgs-qty-picker input {
  width: 50px;
  text-align: center;
  background: transparent;
  border: none;
  color: #FFFFFF;
  font-size: 1.2rem;
  font-weight: 800;
}

.bgs-delivery-options {
  display: grid;
  grid-template-columns: 1fr;
  gap: 14px;
}
.bgs-del-option {
  position: relative;
  background: #0F0F16;
  border: 1.5px solid var(--bgs-gold);
  border-radius: 10px;
  padding: 14px;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 12px;
}
.bgs-del-option input[type="radio"] {
  accent-color: var(--bgs-gold);
  width: 18px;
  height: 18px;
}
.bgs-del-content {
  display: flex;
  justify-content: space-between;
  width: 100%;
  font-size: 0.95rem;
  font-weight: 600;
  color: #FFFFFF;
}

.bgs-price-breakdown {
  background: #0F0F16;
  border: 1px solid var(--bgs-card-border);
  border-radius: 12px;
  padding: 16px 20px;
  margin: 24px 0;
}
.bgs-pb-row {
  display: flex;
  justify-content: space-between;
  font-size: 0.95rem;
  color: #D1D5DB;
  margin-bottom: 8px;
}
.bgs-pb-divider {
  height: 1px;
  background: var(--bgs-card-border);
  margin: 10px 0;
}
.bgs-pb-total {
  font-size: 1.25rem;
  color: #FFFFFF;
  margin: 0;
}
.bgs-gold-total {
  color: var(--bgs-gold);
  font-weight: 800;
}

.bgs-form-group {
  margin-bottom: 18px;
}
.bgs-input-field,
.bgs-textarea-field {
  width: 100%;
  background: #0F0F16;
  border: 1.5px solid #2A2A38;
  border-radius: 10px;
  padding: 14px 16px;
  color: #FFFFFF;
  font-size: 1rem;
  transition: all 0.25s ease;
  box-sizing: border-box;
}
.bgs-input-field:focus,
.bgs-textarea-field:focus {
  outline: none;
  border-color: var(--bgs-gold);
  box-shadow: 0 0 15px rgba(201, 169, 110, 0.25);
}
.bgs-field-hint {
  display: block;
  font-size: 0.8rem;
  color: var(--bgs-muted);
  margin-top: 6px;
}

.bgs-submit-btn {
  width: 100%;
  background: linear-gradient(135deg, var(--bgs-gold) 0%, var(--bgs-gold-dark) 100%);
  color: #000000;
  font-weight: 800;
  font-size: 1.2rem;
  padding: 18px 24px;
  border-radius: 12px;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 10px 30px rgba(201, 169, 110, 0.4);
}
.bgs-submit-btn:hover {
  background: linear-gradient(135deg, var(--bgs-gold-hover) 0%, var(--bgs-gold) 100%);
  transform: translateY(-2px);
}

.bgs-form-trust-badges {
  display: flex;
  justify-content: space-around;
  margin-top: 24px;
  padding-top: 20px;
  border-top: 1px solid var(--bgs-card-border);
  gap: 12px;
}
.bgs-ftb-item {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.85rem;
  color: #D1D5DB;
}
.bgs-ftb-icon {
  font-size: 1.15rem;
}

.bgs-response-box {
  margin-top: 20px;
  padding: 16px;
  border-radius: 10px;
  text-align: center;
  font-weight: 700;
}
.bgs-res-success {
  background: rgba(16, 185, 129, 0.15);
  border: 1px solid var(--bgs-green);
  color: #34D399;
}
.bgs-res-error {
  background: rgba(220, 38, 38, 0.15);
  border: 1px solid var(--bgs-red);
  color: #F87171;
}

/* Mobile Responsive Adjustments — Keep Hero 2 Lines & Section 6 Heading Strictly 1 Line */
@media (max-width: 768px) {
  .bgs-hook-section {
    padding: 34px 6px 20px;
  }
  .bgs-hero-headline-container {
    padding: 0 4px !important;
  }
  .bgs-hook-title,
  .bgs-hook-h1 {
    font-size: clamp(11.5px, 4.3vw, 19px) !important;
    white-space: nowrap !important;
    margin: 0 auto 8px !important;
  }
  .bgs-hook-h2 {
    font-size: clamp(9px, 3.05vw, 15px) !important;
    white-space: nowrap !important;
    margin: 0 auto !important;
  }
  .bgs-reflection-one-line-heading {
    font-size: clamp(9.5px, 3.2vw, 16px) !important;
    white-space: nowrap !important;
  }
  .bgs-slide-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  .bgs-slider-card-box {
    padding: 20px 14px;
  }
  .bgs-prev-arrow { left: -8px; }
  .bgs-next-arrow { right: -8px; }
  .bgs-combo-tools-card {
    padding: 24px 18px;
  }
  .bgs-reflection-card {
    padding: 28px 12px;
  }
  .bgs-form-trust-badges {
    flex-direction: column;
    gap: 8px;
  }
  .bgs-checkout-form-card {
    padding: 22px 16px;
  }
}
</style>

<!-- ==========================================================================
     INTERACTIVE JAVASCRIPT: 7-IN-1 SLIDER & DIRECT CHECKOUT
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {

  // --- 1. 7-in-1 Combo Slider Functionality ---
  const slides  = document.querySelectorAll('.bgs-slide-item');
  const tabs    = document.querySelectorAll('.bgs-tab-btn');
  const dots    = document.querySelectorAll('.bgs-dot');
  const prevBtn = document.getElementById('bgsPrevSlide');
  const nextBtn = document.getElementById('bgsNextSlide');
  let currentSlide = 0;
  const totalSlides = slides.length;

  function showSlide(index) {
    if (index < 0) index = totalSlides - 1;
    if (index >= totalSlides) index = 0;
    currentSlide = index;

    slides.forEach((s, i) => s.classList.toggle('active', i === currentSlide));
    tabs.forEach((t, i) => t.classList.toggle('active', i === currentSlide));
    dots.forEach((d, i) => d.classList.toggle('active', i === currentSlide));
  }

  if (prevBtn && nextBtn) {
    prevBtn.addEventListener('click', () => showSlide(currentSlide - 1));
    nextBtn.addEventListener('click', () => showSlide(currentSlide + 1));
  }

  tabs.forEach(tab => {
    tab.addEventListener('click', function() {
      const idx = parseInt(this.getAttribute('data-slide'), 10);
      showSlide(idx);
    });
  });

  dots.forEach(dot => {
    dot.addEventListener('click', function() {
      const idx = parseInt(this.getAttribute('data-slide'), 10);
      showSlide(idx);
    });
  });

  // Touch Swipe for mobile
  let touchStartX = 0;
  let touchEndX = 0;
  const track = document.getElementById('bgsSlidesTrack');
  if (track) {
    track.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].screenX; }, {passive: true});
    track.addEventListener('touchend', e => {
      touchEndX = e.changedTouches[0].screenX;
      if (touchEndX < touchStartX - 40) showSlide(currentSlide + 1);
      if (touchEndX > touchStartX + 40) showSlide(currentSlide - 1);
    }, {passive: true});
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

  // --- 2. Live Price & Checkout Calculation ---
  const unitPrice = <?php echo floatval( $price ); ?>;
  let currentQty = 1;
  let deliveryFee = 0;

  const qtyInput        = document.getElementById('bgs-order-qty');
  const qtyMinus        = document.getElementById('bgs-qty-minus');
  const qtyPlus         = document.getElementById('bgs-qty-plus');
  const subtotalDisplay = document.getElementById('bgs-subtotal-display');
  const deliveryDisplay = document.getElementById('bgs-delivery-display');
  const totalDisplay    = document.getElementById('bgs-total-display');
  const btnTotalDisplay = document.getElementById('bgs-btn-total-display');

  function updateOrderTotals() {
    const subtotal = unitPrice * currentQty;
    const grandTotal = subtotal + deliveryFee;

    if (qtyInput) qtyInput.value = currentQty;
    if (subtotalDisplay) subtotalDisplay.textContent = subtotal.toLocaleString('en-US');
    if (deliveryDisplay) deliveryDisplay.textContent = deliveryFee.toString();
    if (totalDisplay) totalDisplay.textContent = grandTotal.toLocaleString('en-US');
    if (btnTotalDisplay) btnTotalDisplay.textContent = grandTotal.toLocaleString('en-US');
  }

  if (qtyMinus) {
    qtyMinus.addEventListener('click', function() {
      if (currentQty > 1) {
        currentQty--;
        updateOrderTotals();
      }
    });
  }

  if (qtyPlus) {
    qtyPlus.addEventListener('click', function() {
      if (currentQty < 10) {
        currentQty++;
        updateOrderTotals();
      }
    });
  }

  // --- 3. AJAX Direct Order Submission ---
  const orderForm   = document.getElementById('bgs-direct-order-form');
  const submitBtn   = document.getElementById('bgs-submit-order-btn');
  const responseBox = document.getElementById('bgs-order-response');

  if (orderForm) {
    orderForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const name    = document.getElementById('bgs_billing_name').value.trim();
      const phone   = document.getElementById('bgs_billing_phone').value.trim();
      const address = document.getElementById('bgs_billing_address').value.trim();

      if (!name || !phone || !address) {
        showResponse('error', 'অনুগ্রহ করে আপনার নাম, মোবাইল নাম্বার এবং সম্পূর্ণ ঠিকানা সঠিকভাবে লিখুন।');
        return;
      }

      const cleanPhone = phone.replace(/[^0-9]/g, '');
      if (cleanPhone.length < 11) {
        showResponse('error', 'অনুগ্রহ করে ১১ ডিজিটের সঠিক মোবাইল নাম্বার প্রদান করুন।');
        return;
      }

      submitBtn.disabled = true;
      submitBtn.querySelector('.bgs-btn-text').style.display = 'none';
      submitBtn.querySelector('.bgs-btn-spinner').style.display = 'inline';

      const formData = new FormData(orderForm);
      const ajaxUrl  = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';

      fetch(ajaxUrl, {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        if (data.success && data.data && data.data.redirect_url) {
          window.location.href = data.data.redirect_url;
          return;
        }
        submitBtn.disabled = false;
        submitBtn.querySelector('.bgs-btn-text').style.display = 'inline';
        submitBtn.querySelector('.bgs-btn-spinner').style.display = 'none';

        if (data.success) {
          orderForm.reset();
          currentQty = 1;
          updateOrderTotals();
          const orderId = data.data && data.data.order_id ? data.data.order_id : '';
          showResponse('success', '🎉 আপনার অর্ডারটি সফলভাবে গ্রহণ করা হয়েছে!' + (orderId ? ' অর্ডার আইডি: #' + orderId : ''));
        } else {
          showResponse('error', data.data && data.data.message ? data.data.message : 'অর্ডার প্রক্রিয়াকরণে সমস্যা হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন।');
        }
      })
      .catch(() => {
        submitBtn.disabled = false;
        submitBtn.querySelector('.bgs-btn-text').style.display = 'inline';
        submitBtn.querySelector('.bgs-btn-spinner').style.display = 'none';
        showResponse('error', 'ইন্টারনেট সংযোগে ত্রুটি হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন।');
      });

    });
  }

  function showResponse(type, message) {
    if (!responseBox) return;
    responseBox.style.display = 'block';
    responseBox.className = 'bgs-response-box ' + (type === 'success' ? 'bgs-res-success' : 'bgs-res-error');
    responseBox.innerHTML = message;
    responseBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

});
</script>
