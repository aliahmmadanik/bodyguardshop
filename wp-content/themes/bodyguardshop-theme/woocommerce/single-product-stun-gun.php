<?php
/**
 * WooCommerce Single Product Template: Bodyguard 928 Type Heavy-Duty Stun Gun (90k Volt)
 * Bodyguard Shop — Dark Luxury Self-Defense Landing Page
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$pid     = get_the_ID();
$product = wc_get_product( $pid );

$product_title = $product ? $product->get_name() : 'Bodyguard 928 Type Heavy-Duty Stun Gun (90k Volt)';
$price         = $product ? floatval( $product->get_price() ) : 1690;
$reg_price     = $product ? floatval( $product->get_regular_price() ) : 2690;
if ( $reg_price <= $price ) { $reg_price = 2690; }

$discount_pct  = round( ( ( $reg_price - $price ) / $reg_price ) * 100 );
$save_amount   = $reg_price - $price;

$thumb_url = get_the_post_thumbnail_url( $pid, 'large' );
if ( ! $thumb_url ) {
    $thumb_url = get_template_directory_uri() . '/assets/images/products/stun-gun.jpg';
}

$shop_phone    = get_option( 'bgs_phone', '01409710012' );
$shop_whatsapp = get_option( 'bgs_whatsapp', '8801409710012' );
?>

<main id="bgs-stun-gun-landing" class="bgs-stun-page">

  <div class="bgs-stun-container">

    <!-- ==========================================================================
         1. HERO PSYCHOLOGICAL HOOK & INTRO
         ========================================================================== -->
    <header class="bgs-stun-hero-header">
      <div class="bgs-stun-badge-pill">⚡ 90,000V ULTRA-HIGH VOLTAGE • RECHARGEABLE DEFENSE</div>
      <h1 class="bgs-stun-main-title">আক্রমণকারীকে ৩–৫ সেকেন্ডের মধ্যেই সম্পূর্ণ নিস্তেজ ও অক্ষম করে তুলুন</h1>
      <h2 class="bgs-stun-sub-title">উচ্চ ভোল্টেজ ইলেকট্রিক শক ও বিকট স্পার্ক সাউন্ড—ব্যক্তিগত ও পারিবারিক সুরক্ষার চূড়ান্ত ডিভাইস</h2>
      <div class="bgs-stun-gold-divider"></div>
      <p class="bgs-stun-lead-desc">
        কোনো লাইসেন্স ঝামেলা ছাড়াই সম্পূর্ণ আইনি ও নিরাপদ সেলফ-ডিফেন্স গ্যাজেট। কাপড়ের ওপর দিয়েও তীব্র কার্যকর শক ট্রান্সফার এবং বিকট শব্দের ভীতিতে যেকোনো আক্রমণকারী মুহূর্তে পালিয়ে যেতে বাধ্য।
      </p>
    </header>


    <!-- ==========================================================================
         2. PRODUCT SHOWCASE GRID (VISUAL + SPECS & INSTANT CTA)
         ========================================================================== -->
    <section class="bgs-stun-showcase-section">
      <div class="bgs-stun-showcase-grid">

        <!-- Left: Product Image Showcase -->
        <div class="bgs-stun-visual-box">
          <div class="bgs-stun-img-frame">
            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="Bodyguard 928 Type Heavy-Duty Stun Gun" class="bgs-stun-product-img">
            <span class="bgs-stun-floating-badge">⚡ 90,000V ULTRA SHOCK</span>
            <span class="bgs-stun-kit-tag">📦 COMPLETE 3-PIECE KIT</span>
          </div>

          <div class="bgs-stun-feature-chips">
            <span class="bgs-stun-chip">⚡ ডুয়াল ইলেকট্রিক প্রং</span>
            <span class="bgs-stun-chip">🔦 হাই-লুমেন টর্চলাইট</span>
            <span class="bgs-stun-chip">🔒 ডুয়াল সেফটি লক</span>
            <span class="bgs-stun-chip">🔋 ইউএসবি রিচার্জেবল</span>
          </div>
        </div>

        <!-- Right: Pricing, Highlights & Quick Action -->
        <div class="bgs-stun-details-card">
          <div class="bgs-stun-rating-row">
            <span class="bgs-stun-stars">★★★★★</span>
            <span class="bgs-stun-rating-text">5.0 (টপ-রেটেড ইলেকট্রিক সেলফ-ডিফেন্স ডিভাইস)</span>
          </div>

          <h3 class="bgs-stun-card-name"><?php echo esc_html( $product_title ); ?></h3>
          <p class="bgs-stun-card-sub">মডেল: 928 Type Heavy-Duty Stun Gun • ফুল কমপ্লিট সেট</p>

          <!-- Price & Savings -->
          <div class="bgs-stun-price-box">
            <div class="bgs-stun-price-main">
              <span class="bgs-stun-cur-price">৳ <?php echo number_format( $price ); ?></span>
              <del class="bgs-stun-reg-price">৳ <?php echo number_format( $reg_price ); ?></del>
            </div>
            <span class="bgs-stun-save-badge">🔥 <?php echo esc_html( $discount_pct ); ?>% অফারে সাশ্রয় ৳ <?php echo number_format( $save_amount ); ?></span>
          </div>

          <div class="bgs-stun-stock-status">
            <span class="bgs-stun-stock-dot"></span>
            <span>ইন-স্টক (সীমিত স্টক বাকি — দ্রুত শেষ হয়ে যাচ্ছে)</span>
          </div>

          <!-- Feature Bullets -->
          <ul class="bgs-stun-highlights-list">
            <li>
              <span class="bgs-stun-bullet-icon">✓</span>
              <span><strong>৯০,০০০ ভোল্ট আল্ট্রা-হাই শক:</strong> স্পর্শ করলেই নার্ভাস সিস্টেম ও পেশিতে তাৎক্ষণিক খিঁচুনি তৈরি করে আক্রমণকারীকে সম্পূর্ণ নিষ্ক্রিয় করে ফেলে।</span>
            </li>
            <li>
              <span class="bgs-stun-bullet-icon">✓</span>
              <span><strong>মোটা কাপড়ের ওপর দিয়েও কার্যকর:</strong> শীতের মোটা জ্যাকেট বা যেকোনো পোশাকের ওপর স্পর্শ করলেও সমান তীব্রতায় শক প্রবাহিত হয়।</span>
            </li>
            <li>
              <span class="bgs-stun-bullet-icon">✓</span>
              <span><strong>বিকট স্পার্ক সাউন্ড ও লাইট:</strong> বাতাসে ফায়ার করলেই বিকট ইলেকট্রিক ক্র্যাকিং শব্দ ও আলোর ঝলকানিতে যেকোনো অপরাধী দূর থেকেই আতঙ্কিত হয়ে পালায়।</span>
            </li>
            <li>
              <span class="bgs-stun-bullet-icon">✓</span>
              <span><strong>ইনবিল্ট রিচার্জেবল ব্যাটারি:</strong> কোনো আলাদা ব্যাটারি কেনার ঝামেলা বা অতিরিক্ত খরচ নেই, ইউএসবি কেবলের মাধ্যমে সহজে রিচার্জ করা যায়।</span>
            </li>
            <li>
              <span class="bgs-stun-bullet-icon">✓</span>
              <span><strong>ডুয়াল সেফটি লক মেকানিজম:</strong> মেইন পাওয়ার সেফটি সুইচ + পুশ ট্রিগার থাকায় অসাবধানতাবশত নিজের শরীরে শক লাগার কোনো ঝুঁকি নেই।</span>
            </li>
          </ul>

          <!-- Direct Order Scroll Button -->
          <div class="bgs-stun-action-area">
            <a href="#order" class="bgs-stun-btn-cta">
              <span>⚡ এখনই অর্ডার করুন (ক্যাশ অন ডেলিভারি)</span>
              <small>পণ্য হাতে পেয়ে চেক করে টাকা দিন</small>
            </a>
          </div>

        </div>

      </div>
    </section>


    <!-- ==========================================================================
         3. WHAT'S IN THE BOX (3-PIECE KIT SHOWCASE)
         ========================================================================== -->
    <section class="bgs-stun-kit-section">
      <div class="bgs-stun-section-heading">
        <span class="bgs-stun-badge-pill">PACKAGE INCLUDES</span>
        <h2>কমপ্লিট সেলফ-ডিফেন্স কিটে যা যা পাচ্ছেন</h2>
        <p>আলাদা কিছু কেনার প্রয়োজন নেই—একটি প্যাকেজেই সার্বক্ষণিক পূর্ণাঙ্গ সুরক্ষা</p>
        <div class="bgs-stun-gold-divider"></div>
      </div>

      <div class="bgs-stun-kit-grid">
        <div class="bgs-stun-kit-card">
          <div class="bgs-stun-kit-icon">⚡</div>
          <h3>৯২৮ টাইপ হেভি-ডিউটি স্টান গান</h3>
          <p>হাই-ভোল্টেজ শক ডিসচার্জার, ডুয়াল প্রং ইলেকট্রোড, অ্যান্টি-স্লিপ গ্রিপ ও ইনবিল্ট ব্রাইট ট্যাকটিক্যাল টর্চলাইট।</p>
        </div>

        <div class="bgs-stun-kit-card">
          <div class="bgs-stun-kit-icon">🛡️</div>
          <h3>মিলিটারি-গ্রেড নাইলন বেল্ট পাউচ</h3>
          <p>শক্ত বেল্ট লুপ ও ভেলক্রো লক ফ্ল্যাপ সহ প্রিমিয়াম ওয়াটার-রেজিস্ট্যান্ট হোলস্টার কেস—সহজে কোমরে বা ব্যাগে বহনযোগ্য।</p>
        </div>

        <div class="bgs-stun-kit-card">
          <div class="bgs-stun-kit-icon">🔌</div>
          <h3>ফাস্ট ইউএসবি রিচার্জিং কেবল</h3>
          <p>যেকোনো মোবাইল অ্যাডাপ্টার, ল্যাপটপ বা পাওয়ার ব্যাংকের সাথে কানেক্ট করে দ্রুত ও সহজে ডিভাইসটি রিচার্জ করার সুবিধা।</p>
        </div>
      </div>
    </section>


    <!-- ==========================================================================
         4. HOW IT WORKS & LEVELS OF EFFECT (সাইকোলজিক্যাল প্রুফ)
         ========================================================================== -->
    <section class="bgs-stun-effect-section">
      <div class="bgs-stun-section-heading">
        <span class="bgs-stun-badge-pill">HOW IT DEFENDS YOU</span>
        <h2>কীভাবে এই ডিভাইস আক্রমণকারীকে পরাস্ত করে?</h2>
        <p>স্পর্শের কয়েক সেকেন্ডেই আক্রমণকারীকে সম্পূর্ণ নিষ্ক্রিয় করে আপনাকে নিরাপদে সরে যাওয়ার সময় দেয়</p>
        <div class="bgs-stun-gold-divider"></div>
      </div>

      <div class="bgs-stun-effect-grid">
        <div class="bgs-stun-effect-card">
          <div class="bgs-stun-level-badge">লেভেল ১ (০.৫ সেকেন্ড)</div>
          <h3>প্রাথমিক শক ও ভীতি</h3>
          <p>আক্রমণকারীর গায়ে হালকা স্পর্শেই তীব্র ঝাঁকুনি অনুভূত হবে। বিকট স্পার্ক ও শকের ভয়ে আক্রমণকারী তৎক্ষণাৎ পিছু হটবে।</p>
        </div>

        <div class="bgs-stun-effect-card">
          <div class="bgs-stun-level-badge">লেভেল ২ (১–২ সেকেন্ড)</div>
          <h3>পেশি খিঁচুনি ও দিকভ্রান্তি</h3>
          <p>শরীরের মাংসপেশিতে তীব্র খিঁচুনি ও শারীরিক নিয়ন্ত্রণ হারিয়ে আক্রমণকারী মানসিকভাবে হতবিহ্বল ও দুর্বল হয়ে পড়বে।</p>
        </div>

        <div class="bgs-stun-effect-card highlight-card">
          <div class="bgs-stun-level-badge highlight-badge">লেভেল ৩ (৩–৫ সেকেন্ড)</div>
          <h3>সম্পূর্ণ নিস্তেজ ও সাময়িক অক্ষম</h3>
          <p>নার্ভাস সিস্টেমে সাময়িক ব্যাঘাত ঘটে আক্রমণকারী মাটিতে লুটিয়ে পড়বে এবং ১০–১৫ মিনিট পর্যন্ত নিস্তেজ থাকবে (কোনো স্থায়ী ক্ষতি ছাড়াই)।</p>
        </div>
      </div>
    </section>


    <!-- ==========================================================================
         5. CORE USE CASES (৪টি মূল ব্যবহারের ক্ষেত্র)
         ========================================================================== -->
    <section class="bgs-stun-situations-section">
      <div class="bgs-stun-section-heading">
        <span class="bgs-stun-badge-pill">SECURITY FOR EVERY SITUATION</span>
        <h2>কোন কোন পরিস্থিতিতে এটি আপনার জীবন রক্ষা করবে?</h2>
        <p>প্রতিদিনের পথচলা থেকে শুরু করে জরুরি রাতের ভ্রমণ—সবখানেই এটি আপনার আত্মরক্ষার ঢাল</p>
        <div class="bgs-stun-gold-divider"></div>
      </div>

      <div class="bgs-stun-situations-grid">
        <!-- 1. Night Commute -->
        <div class="bgs-stun-situation-card">
          <div class="bgs-stun-sit-icon">🚶‍♂️</div>
          <h3>রাতে একা চলাফেরা</h3>
          <p>অফিস, টিউশনি বা বাজার শেষে রাতে নির্জন রাস্তা দিয়ে ফেরার সময় হাতে রাখুন। স্পার্কের শব্দ ও শকের মাধ্যমে ছিনতাইকারী থেকে সুরক্ষিত থাকুন।</p>
        </div>

        <!-- 2. Anti-Mugging -->
        <div class="bgs-stun-situation-card">
          <div class="bgs-stun-sit-icon">🚨</div>
          <h3>ছিনতাই ও ডাকাতি প্রতিরোধ</h3>
          <p>ধারালো অস্ত্রধারী বা ছিনতাইকারীর মুখোমুখি হলে চোখের পলকে আত্মরক্ষামূলক কাউন্টার অ্যাটাক করে নিজের প্রাণ ও সম্পদ রক্ষা করুন।</p>
        </div>

        <!-- 3. Transit Safety -->
        <div class="bgs-stun-situation-card">
          <div class="bgs-stun-sit-icon">🚗</div>
          <h3>গাড়ি, বাইক বা সিএনজিতে যাত্রা</h3>
          <p>হাইওয়ে বা সিগন্যালে যেকোনো অনাকাঙ্ক্ষিত আক্রমণ, ব্ল্যাকমেইল বা হুমকির মুহূর্তে দ্রুত প্রতিহত করার জন্য পারফেক্ট সাইজ।</p>
        </div>

        <!-- 4. Home Security -->
        <div class="bgs-stun-situation-card">
          <div class="bgs-stun-sit-icon">🏠</div>
          <h3>বাসা-বাড়ি ও অফিস সিকিউরিটি</h3>
          <p>রাতে দরজার বাইরে অচেনা বা সন্দেহজনক আওয়াজ পেলে বা অনাকাঙ্ক্ষিত চোর-ডাকাতের প্রবেশ মুহূর্তে পরিবারের নিরাপত্তায় অব্যর্থ হাতিয়ার।</p>
        </div>
      </div>
    </section>


    <!-- ==========================================================================
         6. TECHNICAL SPECIFICATIONS TABLE
         ========================================================================== -->
    <section class="bgs-stun-specs-section">
      <div class="bgs-stun-section-heading">
        <span class="bgs-stun-badge-pill">SPECIFICATIONS</span>
        <h2>টেকনিক্যাল স্পেসিফিকেশন ও বিবরণ</h2>
        <p>আন্তর্জাতিক কোয়ালিটি স্ট্যান্ডার্ডে নির্মিত আল্ট্রা-হাই ভোল্টেজ সেলফ-ডিফেন্স ইকুইপমেন্ট</p>
        <div class="bgs-stun-gold-divider"></div>
      </div>

      <div class="bgs-stun-specs-card">
        <table class="bgs-stun-table">
          <tbody>
            <tr>
              <th>মডেল</th>
              <td>928 Type Heavy-Duty Stun Gun &amp; Tactical Flashlight</td>
            </tr>
            <tr>
              <th>ডিসচার্জ ভোল্টেজ</th>
              <td><strong>৯০,০০০ ভোল্ট+ (90k Volt Ultra-High Voltage)</strong></td>
            </tr>
            <tr>
              <th>পাওয়ার আউটপুট</th>
              <td>980,000W Peak DC Voltage Output</td>
            </tr>
            <tr>
              <th>ব্যাটারি টাইপ</th>
              <td>ইনবিল্ট হাই-ক্যাপাসিটি রিচার্জেবল লিথিয়াম সেল</td>
            </tr>
            <tr>
              <th>চার্জিং ইন্টারফেস</th>
              <td>ইউএসবি চার্জিং কেবল (USB Cable Included)</td>
            </tr>
            <tr>
              <th>টর্চলাইট ফাংশন</th>
              <td>হাই-ইনটেনসিটি এলইডি ট্যাকটিক্যাল লাইট</td>
            </tr>
            <tr>
              <th>নিরাপত্তা ব্যবস্থা</th>
              <td>ডুয়াল সেফটি মেকানিজম (Master Switch + Trigger Button)</td>
            </tr>
            <tr>
              <th>বডি উপাদান</th>
              <td>হেভি-ডিউটি রিইনফোর্সড শকপ্রুফ ABS ট্যাকটিক্যাল বডি</td>
            </tr>
            <tr>
              <th>আনুষঙ্গিক সামগ্রী</th>
              <td>৯২৮ টাইপ স্টান গান + হেভি-ডিউটি নাইলন বেল্ট কেস + ইউএসবি চার্জিং কেবল</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>


    <!-- ==========================================================================
         7. TRUST GUARANTEES & INSTANT SUPPORT
         ========================================================================== -->
    <section class="bgs-stun-guarantee-section">
      <div class="bgs-stun-guarantee-grid">
        <div class="bgs-stun-guarantee-box">
          <div class="bgs-stun-g-icon">🛡️</div>
          <h4>১০০% অরিজিনাল টেস্টেড</h4>
          <p>প্রতিটি ডিভাইস টেস্ট ও ভেরিফাই করে ডেলিভারি দেওয়া হয়।</p>
        </div>
        <div class="bgs-stun-guarantee-box">
          <div class="bgs-stun-g-icon">🚚</div>
          <h4>সারা দেশে হোম ডেলিভারি</h4>
          <p>ঢাকা সিটিতে ২৪-৪৮ ঘণ্টা এবং বাইরে ২-৩ দিনে পৌঁছে যাবে।</p>
        </div>
        <div class="bgs-stun-guarantee-box">
          <div class="bgs-stun-g-icon">💵</div>
          <h4>ক্যাশ অন ডেলিভারি</h4>
          <p>পণ্য হাতে পেয়ে চেক করে নিশ্চিত হয়ে মূল্য পরিশোধ করুন।</p>
        </div>
      </div>

      <!-- Support Buttons -->
      <div class="bgs-stun-support-actions">
        <a href="tel:<?php echo esc_attr( $shop_phone ); ?>" class="bgs-stun-support-btn btn-call">
          📞 প্রয়োজনে কল করুন: <?php echo esc_html( $shop_phone ); ?>
        </a>
        <a href="https://wa.me/<?php echo esc_attr( $shop_whatsapp ); ?>?text=Hello%20Bodyguard%20Shop,%20I%20want%20to%20know%20about%20928%20Type%20Stun%20Gun" target="_blank" rel="noopener" class="bgs-stun-support-btn btn-whatsapp">
          💬 WhatsApp মেসেজ করুন
        </a>
      </div>
    </section>


    <!-- ==========================================================================
         8. EXPRESS 1-CLICK COD CHECKOUT FORM
         ========================================================================== -->
    <section class="bgs-stun-order-section" id="order">
      <div class="bgs-stun-form-wrapper">

        <div class="bgs-stun-form-header">
          <span class="bgs-stun-form-badge">⚡ EXPRESS CHECKOUT</span>
          <h2>অর্ডার কনফার্ম করতে নিচের ফর্মটি পূরণ করুন</h2>
          <p>কোনো অগ্রিম পেমেন্ট লাগবে না। পণ্য হাতে পেয়ে মূল্য পরিশোধ করুন।</p>
          <div class="bgs-stun-gold-divider"></div>
        </div>

        <form id="bgs-stun-checkout-form" class="bgs-stun-checkout-form" method="post">
          <input type="hidden" name="action" value="bgs_process_direct_order">
          <input type="hidden" name="product_id" value="<?php echo esc_attr( $pid ); ?>">
          <input type="hidden" name="product_price" id="stun_unit_price" value="<?php echo esc_attr( $price ); ?>">
          <input type="hidden" name="quantity" id="stun_order_qty" value="1">

          <!-- 1. Product Summary Card inside Form -->
          <div class="bgs-stun-form-product-box">
            <div class="bgs-stun-form-prod-img">
              <img src="<?php echo esc_url( $thumb_url ); ?>" alt="928 Type Stun Gun">
            </div>
            <div class="bgs-stun-form-prod-info">
              <div class="bgs-stun-form-prod-title"><?php echo esc_html( $product_title ); ?></div>
              <div class="bgs-stun-form-prod-sub">৯২৮ টাইপ কমপ্লিট কিট (ডিভাইস + বেল্ট কেস + চার্জার কেবল)</div>
              <div class="bgs-stun-form-prod-price">
                <span class="bgs-stun-form-curr">৳ <?php echo number_format( $price ); ?></span>
                <del class="bgs-stun-form-old">৳ <?php echo number_format( $reg_price ); ?></del>
              </div>
            </div>

            <div class="bgs-stun-form-qty-control">
              <label>পরিমাণ:</label>
              <div class="bgs-stun-qty-picker">
                <button type="button" class="bgs-stun-qty-btn" id="stun-qty-minus">−</button>
                <span id="stun-qty-val" class="bgs-stun-qty-display">1</span>
                <button type="button" class="bgs-stun-qty-btn" id="stun-qty-plus">+</button>
              </div>
            </div>
          </div>

          <!-- 2. Delivery Zone Selection -->
          <div class="bgs-stun-form-group">
            <label class="bgs-stun-field-label">📍 ডেলিভারি এলাকা সিলেক্ট করুন <span class="req">*</span></label>
            <div class="bgs-stun-zone-cards">
              <label class="bgs-stun-zone-card selected">
                <input type="radio" name="delivery_zone" value="inside_dhaka" checked>
                <div class="bgs-stun-zone-title">ঢাকা সিটির ভিতরে</div>
                <div class="bgs-stun-zone-cost">৳ ৬০</div>
              </label>

              <label class="bgs-stun-zone-card">
                <input type="radio" name="delivery_zone" value="outside_dhaka">
                <div class="bgs-stun-zone-title">ঢাকা সিটির বাইরে (সারা বাংলাদেশ)</div>
                <div class="bgs-stun-zone-cost">৳ ১২০</div>
              </label>
            </div>
          </div>

          <!-- 3. Customer Info Fields -->
          <div class="bgs-stun-form-group">
            <label class="bgs-stun-field-label" for="stun_billing_name">আপনার পুরো নাম <span class="req">*</span></label>
            <input type="text" id="stun_billing_name" name="billing_first_name" class="bgs-stun-input" placeholder="যেমন: মোঃ আরিফুল ইসলাম" required>
          </div>

          <div class="bgs-stun-form-group">
            <label class="bgs-stun-field-label" for="stun_billing_phone">মোবাইল নম্বর <span class="req">*</span></label>
            <input type="tel" id="stun_billing_phone" name="billing_phone" class="bgs-stun-input" placeholder="যেমন: 017XXXXXXXX" pattern="01[0-9]{9}" required>
            <small class="bgs-stun-input-hint">ডেলিভারির জন্য আপনার সচল ১১ ডিজিটের মোবাইল নম্বর দিন</small>
          </div>

          <div class="bgs-stun-form-group">
            <label class="bgs-stun-field-label" for="stun_billing_address">পূর্ণ ঠিকানা (বাসা/রোড/থানা/জেলা) <span class="req">*</span></label>
            <textarea id="stun_billing_address" name="billing_address_1" class="bgs-stun-textarea" rows="2" placeholder="যেমন: বাসা নং ১২, রোড নং ৫, ধানমন্ডি, ঢাকা" required></textarea>
          </div>

          <!-- 4. Dynamic Order Summary -->
          <div class="bgs-stun-order-summary-card">
            <h4>অর্ডার সামারি</h4>
            <div class="bgs-stun-sum-row">
              <span>প্রোডাক্ট সাব-টোটাল (<span id="stun-sum-qty">1</span> টি)</span>
              <span id="stun-sum-subtotal">৳ <?php echo number_format( $price ); ?></span>
            </div>
            <div class="bgs-stun-sum-row">
              <span>ডেলিভারি চার্জ</span>
              <span id="stun-sum-shipping">৳ ৬০</span>
            </div>
            <div class="bgs-stun-sum-divider"></div>
            <div class="bgs-stun-sum-row bgs-stun-sum-total">
              <span>সর্বমোট প্রদেয় টাকা</span>
              <span id="stun-sum-grandtotal">৳ <?php echo number_format( $price + 60 ); ?></span>
            </div>
            <div class="bgs-stun-payment-badge">
              <span>💵 পেমেন্ট মেথড: ক্যাশ অন ডেলিভারি (পণ্য হাতে পেয়ে মূল্য পরিশোধ)</span>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="bgs-stun-submit-wrap">
            <button type="submit" id="bgs-stun-submit-btn" class="bgs-stun-btn-submit">
              <span class="btn-text">🔒 অর্ডার কনফার্ম করুন ৳ <span id="stun-btn-total"><?php echo number_format( $price + 60 ); ?></span></span>
              <span class="btn-subtext">ক্যাশ অন ডেলিভারিতে সম্পূর্ণ নিশ্চিন্তে অর্ডার করুন</span>
            </button>
            <div id="bgs-stun-form-msg" class="bgs-stun-form-message"></div>
          </div>

        </form>

      </div>
    </section>

  </div>

  <!-- ==========================================================================
       9. MOBILE PERSISTENT BOTTOM STICKY BAR
       ========================================================================== -->
  <aside class="bgs-stun-mobile-bar" id="bgs-stun-mobile-sticky">
    <div class="bgs-stun-mob-left">
      <img src="<?php echo esc_url( $thumb_url ); ?>" alt="928 Type Stun Gun" class="bgs-stun-mob-thumb">
      <div class="bgs-stun-mob-text">
        <span class="bgs-stun-mob-title">928 Type Stun Gun</span>
        <span class="bgs-stun-mob-price">৳ <?php echo number_format( $price ); ?> <del>৳ <?php echo number_format( $reg_price ); ?></del></span>
      </div>
    </div>
    <div class="bgs-stun-mob-right">
      <a href="#order" class="bgs-stun-mob-order-btn">অর্ডার করুন ⚡</a>
    </div>
  </aside>

</main>


<!-- ==========================================================================
     CSS STYLES FOR STUN GUN LANDING PAGE
     ========================================================================== -->
<style>
/* Page Scope Variables */
.bgs-stun-page {
  --bgs-dark: #000000;
  --bgs-dark-card: #0E0E0E;
  --bgs-dark-card-hover: #161616;
  --bgs-border: rgba(255, 255, 255, 0.1);
  --bgs-border-gold: rgba(201, 169, 110, 0.4);
  --bgs-gold: #C9A96E;
  --bgs-gold-light: #DFCA9B;
  --bgs-orange: #f16334;
  --bgs-orange-hover: #ff7747;
  --bgs-electric: #00e5ff;
  --bgs-electric-glow: rgba(0, 229, 255, 0.25);
  --bgs-text: #EAEAEA;
  --bgs-text-muted: #A0A0A0;
  
  background-color: var(--bgs-dark);
  color: var(--bgs-text);
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  line-height: 1.6;
  padding-bottom: 90px;
}

.bgs-stun-container {
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Badge Pill */
.bgs-stun-badge-pill {
  display: inline-block;
  background: rgba(0, 229, 255, 0.1);
  border: 1px solid var(--bgs-electric);
  color: var(--bgs-electric);
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 1px;
  padding: 6px 16px;
  border-radius: 50px;
  text-transform: uppercase;
  margin-bottom: 15px;
  box-shadow: 0 0 16px var(--bgs-electric-glow);
}

/* Gold Divider */
.bgs-stun-gold-divider {
  width: 60px;
  height: 3px;
  background: linear-gradient(90deg, var(--bgs-electric), var(--bgs-gold));
  margin: 15px auto 20px;
  border-radius: 2px;
}

/* 1. Hero Header */
.bgs-stun-hero-header {
  text-align: center;
  padding: 50px 10px 30px;
}
.bgs-stun-main-title {
  font-size: clamp(26px, 4vw, 42px);
  font-weight: 800;
  color: #FFFFFF;
  line-height: 1.25;
  margin: 10px 0;
  text-shadow: 0 2px 10px rgba(0,0,0,0.7);
}
.bgs-stun-sub-title {
  font-size: clamp(16px, 2.5vw, 22px);
  font-weight: 600;
  color: var(--bgs-gold-light);
  margin-bottom: 10px;
}
.bgs-stun-lead-desc {
  font-size: clamp(14px, 1.8vw, 17px);
  color: var(--bgs-text-muted);
  max-width: 820px;
  margin: 0 auto;
}

/* 2. Showcase Grid */
.bgs-stun-showcase-section {
  padding: 20px 0 40px;
}
.bgs-stun-showcase-grid {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: 40px;
  align-items: start;
}
@media (max-width: 860px) {
  .bgs-stun-showcase-grid {
    grid-template-columns: 1fr;
    gap: 30px;
  }
}

.bgs-stun-visual-box {
  background: var(--bgs-dark-card);
  border: 1px solid var(--bgs-border);
  border-radius: 16px;
  padding: 24px;
  text-align: center;
}
.bgs-stun-img-frame {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  background: radial-gradient(circle at center, #1c1c1c 0%, #080808 100%);
  border: 1px solid rgba(255, 255, 255, 0.05);
}
.bgs-stun-product-img {
  width: 100%;
  max-height: 480px;
  object-fit: cover;
  display: block;
  transition: transform 0.3s ease;
}
.bgs-stun-product-img:hover {
  transform: scale(1.02);
}
.bgs-stun-floating-badge {
  position: absolute;
  top: 15px;
  left: 15px;
  background: rgba(0, 0, 0, 0.85);
  border: 1px solid var(--bgs-electric);
  color: var(--bgs-electric);
  font-size: 11px;
  font-weight: 800;
  padding: 5px 12px;
  border-radius: 20px;
  letter-spacing: 0.5px;
  box-shadow: 0 0 10px var(--bgs-electric-glow);
}
.bgs-stun-kit-tag {
  position: absolute;
  bottom: 15px;
  right: 15px;
  background: rgba(201, 169, 110, 0.95);
  color: #000;
  font-size: 11px;
  font-weight: 800;
  padding: 4px 10px;
  border-radius: 6px;
  letter-spacing: 0.5px;
}

.bgs-stun-feature-chips {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  justify-content: center;
  margin-top: 20px;
}
.bgs-stun-chip {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.12);
  color: var(--bgs-text);
  font-size: 12px;
  font-weight: 600;
  padding: 6px 14px;
  border-radius: 20px;
}

.bgs-stun-details-card {
  background: var(--bgs-dark-card);
  border: 1px solid var(--bgs-border);
  border-radius: 16px;
  padding: 30px;
}
.bgs-stun-rating-row {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 12px;
}
.bgs-stun-stars {
  color: #ffb800;
  font-size: 16px;
  letter-spacing: 2px;
}
.bgs-stun-rating-text {
  font-size: 13px;
  color: var(--bgs-text-muted);
}
.bgs-stun-card-name {
  font-size: clamp(20px, 2.5vw, 28px);
  font-weight: 800;
  color: #FFF;
  line-height: 1.3;
  margin: 0 0 6px;
}
.bgs-stun-card-sub {
  font-size: 14px;
  color: var(--bgs-gold);
  margin-bottom: 20px;
}

/* Pricing Box */
.bgs-stun-price-box {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 12px;
  padding: 16px 20px;
  margin-bottom: 18px;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
}
.bgs-stun-price-main {
  display: flex;
  align-items: baseline;
  gap: 14px;
}
.bgs-stun-cur-price {
  font-size: clamp(28px, 3.5vw, 36px);
  font-weight: 900;
  color: var(--bgs-orange);
}
.bgs-stun-reg-price {
  font-size: 18px;
  color: #777;
  text-decoration: line-through;
}
.bgs-stun-save-badge {
  background: rgba(241, 99, 52, 0.15);
  border: 1px solid var(--bgs-orange);
  color: #ff7747;
  font-size: 12px;
  font-weight: 800;
  padding: 5px 12px;
  border-radius: 20px;
}

/* Stock status */
.bgs-stun-stock-status {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 13px;
  color: #4ade80;
  font-weight: 600;
  margin-bottom: 20px;
}
.bgs-stun-stock-dot {
  width: 8px;
  height: 8px;
  background-color: #4ade80;
  border-radius: 50%;
  box-shadow: 0 0 8px #4ade80;
  animation: pulse-dot 1.8s infinite;
}
@keyframes pulse-dot {
  0% { transform: scale(0.9); opacity: 0.7; }
  50% { transform: scale(1.3); opacity: 1; }
  100% { transform: scale(0.9); opacity: 0.7; }
}

/* Highlights List */
.bgs-stun-highlights-list {
  list-style: none;
  padding: 0;
  margin: 0 0 25px;
}
.bgs-stun-highlights-list li {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  margin-bottom: 14px;
  font-size: 14px;
  line-height: 1.55;
  color: var(--bgs-text);
}
.bgs-stun-bullet-icon {
  background: rgba(0, 229, 255, 0.15);
  color: var(--bgs-electric);
  font-weight: 800;
  font-size: 12px;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  margin-top: 2px;
}

/* Action Area */
.bgs-stun-action-area {
  margin-top: 20px;
}
.bgs-stun-btn-cta {
  display: block;
  background: linear-gradient(135deg, var(--bgs-orange) 0%, #d84315 100%);
  color: #FFFFFF !important;
  text-decoration: none;
  text-align: center;
  padding: 16px 24px;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(241, 99, 52, 0.4);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.bgs-stun-btn-cta:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(241, 99, 52, 0.6);
}
.bgs-stun-btn-cta span {
  display: block;
  font-size: clamp(16px, 2vw, 19px);
  font-weight: 800;
}
.bgs-stun-btn-cta small {
  display: block;
  font-size: 12px;
  opacity: 0.9;
  margin-top: 3px;
}

/* 3. Package Kit Section */
.bgs-stun-kit-section {
  padding: 50px 0;
  border-top: 1px solid var(--bgs-border);
}
.bgs-stun-section-heading {
  text-align: center;
  max-width: 800px;
  margin: 0 auto 35px;
}
.bgs-stun-section-heading h2 {
  font-size: clamp(22px, 3.2vw, 32px);
  font-weight: 800;
  color: #FFF;
  margin: 10px 0 8px;
}
.bgs-stun-section-heading p {
  color: var(--bgs-text-muted);
  font-size: 15px;
}

.bgs-stun-kit-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
}
.bgs-stun-kit-card {
  background: var(--bgs-dark-card);
  border: 1px solid var(--bgs-border);
  border-radius: 14px;
  padding: 28px 22px;
  text-align: center;
  transition: transform 0.25s ease, border-color 0.25s ease;
}
.bgs-stun-kit-card:hover {
  transform: translateY(-4px);
  border-color: var(--bgs-electric);
  box-shadow: 0 8px 25px rgba(0, 229, 255, 0.15);
}
.bgs-stun-kit-icon {
  font-size: 36px;
  margin-bottom: 14px;
}
.bgs-stun-kit-card h3 {
  font-size: 18px;
  font-weight: 700;
  color: #FFF;
  margin-bottom: 10px;
}
.bgs-stun-kit-card p {
  font-size: 14px;
  color: var(--bgs-text-muted);
  line-height: 1.5;
  margin: 0;
}

/* 4. How It Works Section */
.bgs-stun-effect-section {
  padding: 50px 0;
  background: rgba(255, 255, 255, 0.02);
  border-top: 1px solid var(--bgs-border);
  border-bottom: 1px solid var(--bgs-border);
  border-radius: 16px;
  margin: 20px 0;
}
.bgs-stun-effect-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 25px;
}
.bgs-stun-effect-card {
  background: var(--bgs-dark-card);
  border: 1px solid var(--bgs-border);
  border-radius: 14px;
  padding: 26px 20px;
  position: relative;
  transition: transform 0.25s ease;
}
.bgs-stun-effect-card:hover {
  transform: translateY(-3px);
}
.bgs-stun-level-badge {
  display: inline-block;
  background: rgba(255, 255, 255, 0.08);
  color: var(--bgs-gold);
  font-size: 12px;
  font-weight: 700;
  padding: 4px 12px;
  border-radius: 20px;
  margin-bottom: 12px;
}
.highlight-card {
  border-color: var(--bgs-electric);
  box-shadow: 0 0 20px rgba(0, 229, 255, 0.15);
}
.highlight-badge {
  background: rgba(0, 229, 255, 0.2);
  color: var(--bgs-electric);
}
.bgs-stun-effect-card h3 {
  font-size: 17px;
  font-weight: 700;
  color: #FFF;
  margin-bottom: 8px;
}
.bgs-stun-effect-card p {
  font-size: 14px;
  color: var(--bgs-text-muted);
  line-height: 1.55;
  margin: 0;
}

/* 5. Core Situations Grid */
.bgs-stun-situations-section {
  padding: 50px 0;
}
.bgs-stun-situations-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 20px;
}
.bgs-stun-situation-card {
  background: var(--bgs-dark-card);
  border: 1px solid var(--bgs-border);
  border-radius: 14px;
  padding: 24px 20px;
  transition: transform 0.25s ease, border-color 0.25s ease;
}
.bgs-stun-situation-card:hover {
  transform: translateY(-4px);
  border-color: var(--bgs-gold);
}
.bgs-stun-sit-icon {
  font-size: 32px;
  margin-bottom: 12px;
}
.bgs-stun-situation-card h3 {
  font-size: 17px;
  font-weight: 700;
  color: #FFF;
  margin-bottom: 8px;
}
.bgs-stun-situation-card p {
  font-size: 13.5px;
  color: var(--bgs-text-muted);
  line-height: 1.5;
  margin: 0;
}

/* 6. Technical Specifications Table */
.bgs-stun-specs-section {
  padding: 50px 0;
  border-top: 1px solid var(--bgs-border);
}
.bgs-stun-specs-card {
  background: var(--bgs-dark-card);
  border: 1px solid var(--bgs-border);
  border-radius: 14px;
  overflow: hidden;
  max-width: 860px;
  margin: 0 auto;
}
.bgs-stun-table {
  width: 100%;
  border-collapse: collapse;
}
.bgs-stun-table th,
.bgs-stun-table td {
  padding: 14px 20px;
  font-size: 14px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.06);
  text-align: left;
}
.bgs-stun-table th {
  width: 35%;
  color: var(--bgs-gold);
  font-weight: 600;
  background: rgba(255, 255, 255, 0.02);
}
.bgs-stun-table td {
  color: var(--bgs-text);
}
.bgs-stun-table tr:last-child th,
.bgs-stun-table tr:last-child td {
  border-bottom: none;
}

/* 7. Guarantees & Support */
.bgs-stun-guarantee-section {
  padding: 40px 0;
  border-top: 1px solid var(--bgs-border);
}
.bgs-stun-guarantee-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 20px;
  margin-bottom: 30px;
}
.bgs-stun-guarantee-box {
  background: var(--bgs-dark-card);
  border: 1px solid var(--bgs-border);
  border-radius: 12px;
  padding: 22px 18px;
  text-align: center;
}
.bgs-stun-g-icon {
  font-size: 30px;
  margin-bottom: 8px;
}
.bgs-stun-guarantee-box h4 {
  font-size: 16px;
  font-weight: 700;
  color: #FFF;
  margin-bottom: 6px;
}
.bgs-stun-guarantee-box p {
  font-size: 13px;
  color: var(--bgs-text-muted);
  margin: 0;
}
.bgs-stun-support-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  justify-content: center;
}
.bgs-stun-support-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 24px;
  border-radius: 8px;
  text-decoration: none;
  font-size: 14px;
  font-weight: 700;
  transition: transform 0.2s ease, opacity 0.2s ease;
}
.bgs-stun-support-btn:hover {
  transform: translateY(-2px);
  opacity: 0.9;
}
.bgs-stun-support-btn.btn-call {
  background: rgba(255, 255, 255, 0.08);
  color: #FFF;
  border: 1px solid rgba(255, 255, 255, 0.2);
}
.bgs-stun-support-btn.btn-whatsapp {
  background: #25D366;
  color: #FFF;
}

/* 8. Express Checkout Section */
.bgs-stun-order-section {
  padding: 60px 0 40px;
  border-top: 1px solid var(--bgs-border-gold);
}
.bgs-stun-form-wrapper {
  max-width: 680px;
  margin: 0 auto;
  background: var(--bgs-dark-card);
  border: 1px solid var(--bgs-border-gold);
  border-radius: 18px;
  padding: clamp(20px, 4vw, 36px);
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.6);
}
.bgs-stun-form-header {
  text-align: center;
  margin-bottom: 25px;
}
.bgs-stun-form-badge {
  display: inline-block;
  background: rgba(241, 99, 52, 0.15);
  border: 1px solid var(--bgs-orange);
  color: var(--bgs-orange);
  font-size: 12px;
  font-weight: 800;
  padding: 4px 14px;
  border-radius: 20px;
  margin-bottom: 10px;
}
.bgs-stun-form-header h2 {
  font-size: clamp(20px, 3vw, 26px);
  font-weight: 800;
  color: #FFF;
  margin: 6px 0 4px;
}
.bgs-stun-form-header p {
  font-size: 14px;
  color: var(--bgs-text-muted);
}

/* Form product box */
.bgs-stun-form-product-box {
  display: flex;
  align-items: center;
  gap: 16px;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 12px;
  padding: 14px 16px;
  margin-bottom: 22px;
}
.bgs-stun-form-prod-img img {
  width: 64px;
  height: 64px;
  object-fit: cover;
  border-radius: 8px;
  border: 1px solid var(--bgs-border);
}
.bgs-stun-form-prod-info {
  flex: 1;
}
.bgs-stun-form-prod-title {
  font-size: 15px;
  font-weight: 700;
  color: #FFF;
}
.bgs-stun-form-prod-sub {
  font-size: 12px;
  color: var(--bgs-gold);
}
.bgs-stun-form-prod-price {
  margin-top: 3px;
}
.bgs-stun-form-curr {
  font-size: 16px;
  font-weight: 800;
  color: var(--bgs-orange);
}
.bgs-stun-form-old {
  font-size: 13px;
  color: #777;
  text-decoration: line-through;
  margin-left: 6px;
}
.bgs-stun-form-qty-control {
  text-align: right;
}
.bgs-stun-form-qty-control label {
  display: block;
  font-size: 12px;
  color: var(--bgs-text-muted);
  margin-bottom: 4px;
}
.bgs-stun-qty-picker {
  display: inline-flex;
  align-items: center;
  background: #000;
  border: 1px solid rgba(255, 255, 255, 0.2);
  border-radius: 6px;
  overflow: hidden;
}
.bgs-stun-qty-btn {
  background: transparent;
  color: #FFF;
  border: none;
  width: 28px;
  height: 28px;
  font-size: 16px;
  font-weight: 700;
  cursor: pointer;
}
.bgs-stun-qty-btn:hover {
  background: rgba(255, 255, 255, 0.15);
}
.bgs-stun-qty-display {
  display: inline-block;
  min-width: 26px;
  text-align: center;
  font-size: 14px;
  font-weight: 700;
  color: #FFF;
}

/* Form inputs */
.bgs-stun-form-group {
  margin-bottom: 18px;
}
.bgs-stun-field-label {
  display: block;
  font-size: 13.5px;
  font-weight: 600;
  color: #E0E0E0;
  margin-bottom: 6px;
}
.bgs-stun-field-label .req {
  color: var(--bgs-orange);
}
.bgs-stun-input,
.bgs-stun-textarea {
  width: 100%;
  background: #000;
  border: 1px solid rgba(255, 255, 255, 0.16);
  border-radius: 8px;
  padding: 12px 14px;
  color: #FFF;
  font-size: 14px;
  box-sizing: border-box;
  outline: none;
  transition: border-color 0.2s ease, box-shadow 0.2s ease;
}
.bgs-stun-input:focus,
.bgs-stun-textarea:focus {
  border-color: var(--bgs-gold);
  box-shadow: 0 0 10px rgba(201, 169, 110, 0.3);
}
.bgs-stun-input-hint {
  display: block;
  font-size: 12px;
  color: #888;
  margin-top: 4px;
}

/* Zone selection cards */
.bgs-stun-zone-cards {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px;
}
@media (max-width: 480px) {
  .bgs-stun-zone-cards {
    grid-template-columns: 1fr;
  }
}
.bgs-stun-zone-card {
  position: relative;
  background: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 10px;
  padding: 12px;
  cursor: pointer;
  transition: all 0.2s ease;
}
.bgs-stun-zone-card input[type="radio"] {
  position: absolute;
  opacity: 0;
}
.bgs-stun-zone-card.selected {
  background: rgba(201, 169, 110, 0.1);
  border-color: var(--bgs-gold);
  box-shadow: 0 0 12px rgba(201, 169, 110, 0.2);
}
.bgs-stun-zone-title {
  font-size: 13px;
  font-weight: 600;
  color: #FFF;
}
.bgs-stun-zone-cost {
  font-size: 15px;
  font-weight: 800;
  color: var(--bgs-gold);
  margin-top: 3px;
}

/* Order Summary */
.bgs-stun-order-summary-card {
  background: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 12px;
  padding: 16px;
  margin: 22px 0;
}
.bgs-stun-order-summary-card h4 {
  font-size: 14px;
  font-weight: 700;
  color: #FFF;
  margin: 0 0 10px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
.bgs-stun-sum-row {
  display: flex;
  justify-content: space-between;
  font-size: 14px;
  color: var(--bgs-text-muted);
  margin-bottom: 6px;
}
.bgs-stun-sum-divider {
  height: 1px;
  background: rgba(255, 255, 255, 0.1);
  margin: 10px 0;
}
.bgs-stun-sum-total {
  font-size: 16px;
  font-weight: 800;
  color: #FFF;
}
#stun-sum-grandtotal {
  color: var(--bgs-orange);
  font-size: 18px;
}
.bgs-stun-payment-badge {
  background: rgba(46, 125, 50, 0.15);
  border: 1px solid rgba(74, 222, 128, 0.3);
  border-radius: 6px;
  padding: 8px 12px;
  font-size: 12.5px;
  color: #86efac;
  margin-top: 10px;
  text-align: center;
}

/* Submit Button */
.bgs-stun-btn-submit {
  width: 100%;
  background: linear-gradient(135deg, var(--bgs-orange) 0%, #d84315 100%);
  color: #FFF;
  border: none;
  border-radius: 12px;
  padding: 16px 20px;
  cursor: pointer;
  box-shadow: 0 8px 24px rgba(241, 99, 52, 0.45);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.bgs-stun-btn-submit:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(241, 99, 52, 0.65);
}
.bgs-stun-btn-submit:disabled {
  opacity: 0.6;
  cursor: not-allowed;
  transform: none;
}
.bgs-stun-btn-submit .btn-text {
  display: block;
  font-size: clamp(17px, 2.2vw, 20px);
  font-weight: 800;
}
.bgs-stun-btn-submit .btn-subtext {
  display: block;
  font-size: 12px;
  opacity: 0.9;
  margin-top: 3px;
}
.bgs-stun-form-message {
  margin-top: 14px;
  font-size: 14px;
  text-align: center;
  display: none;
}
.bgs-stun-form-message.success {
  display: block;
  color: #4ade80;
  background: rgba(74, 222, 128, 0.1);
  padding: 10px;
  border-radius: 6px;
}
.bgs-stun-form-message.error {
  display: block;
  color: #f87171;
  background: rgba(248, 113, 113, 0.1);
  padding: 10px;
  border-radius: 6px;
}

/* 9. Mobile Sticky Bar */
.bgs-stun-mobile-bar {
  display: none;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(14, 14, 14, 0.96);
  backdrop-filter: blur(10px);
  border-top: 1px solid var(--bgs-border-gold);
  padding: 10px 16px;
  z-index: 999;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0 -6px 20px rgba(0, 0, 0, 0.6);
}
@media (max-width: 768px) {
  .bgs-stun-mobile-bar {
    display: flex;
  }
}
.bgs-stun-mob-left {
  display: flex;
  align-items: center;
  gap: 10px;
}
.bgs-stun-mob-thumb {
  width: 44px;
  height: 44px;
  border-radius: 6px;
  object-fit: cover;
  border: 1px solid var(--bgs-border);
}
.bgs-stun-mob-text {
  display: flex;
  flex-direction: column;
}
.bgs-stun-mob-title {
  font-size: 13px;
  font-weight: 700;
  color: #FFF;
  line-height: 1.2;
}
.bgs-stun-mob-price {
  font-size: 14px;
  font-weight: 800;
  color: var(--bgs-orange);
}
.bgs-stun-mob-price del {
  font-size: 11px;
  color: #777;
  font-weight: normal;
  margin-left: 4px;
}
.bgs-stun-mob-order-btn {
  background: var(--bgs-orange);
  color: #FFF !important;
  text-decoration: none;
  font-size: 14px;
  font-weight: 800;
  padding: 10px 18px;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(241, 99, 52, 0.4);
}

@media (max-width: 560px) {
  .bgs-stun-table,
  .bgs-stun-table tbody,
  .bgs-stun-table tr,
  .bgs-stun-table th,
  .bgs-stun-table td {
    display: block;
    width: 100% !important;
  }
  .bgs-stun-table th {
    padding: 10px 14px 4px;
    background: rgba(201, 169, 110, 0.1);
    border-bottom: none;
  }
  .bgs-stun-table td {
    padding: 4px 14px 12px;
  }
  .bgs-stun-hero-header {
    padding: 30px 10px 20px;
  }
  .bgs-stun-details-card {
    padding: 20px 14px;
  }
  .bgs-stun-form-wrapper {
    padding: 20px 14px;
  }
  .bgs-stun-kit-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }
  .bgs-stun-effect-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }
  .bgs-stun-situations-grid {
    grid-template-columns: 1fr;
    gap: 14px;
  }
  .bgs-stun-support-actions {
    flex-direction: column;
    align-items: stretch;
  }
  .bgs-stun-support-btn {
    text-align: center;
    justify-content: center;
  }
}
</style>


<!-- ==========================================================================
     JAVASCRIPT: LIVE CALCULATIONS & AJAX ORDER PLACEMENT
     ========================================================================== -->
<script>
(function() {
  'use strict';

  var unitPrice = <?php echo floatval( $price ); ?>;
  var currentQty = 1;
  var shippingCost = 60; // default inside_dhaka

  var qtyValEl = document.getElementById('stun-qty-val');
  var qtyInput = document.getElementById('stun_order_qty');
  var sumQtyEl = document.getElementById('stun-sum-qty');
  var sumSubtotalEl = document.getElementById('stun-sum-subtotal');
  var sumShippingEl = document.getElementById('stun-sum-shipping');
  var sumGrandTotalEl = document.getElementById('stun-sum-grandtotal');
  var btnTotalEl = document.getElementById('stun-btn-total');

  function updateTotals() {
    var subtotal = unitPrice * currentQty;
    var grandTotal = subtotal + shippingCost;

    if (qtyValEl) qtyValEl.textContent = currentQty;
    if (qtyInput) qtyInput.value = currentQty;
    if (sumQtyEl) sumQtyEl.textContent = currentQty;
    if (sumSubtotalEl) sumSubtotalEl.textContent = '৳ ' + subtotal.toLocaleString();
    if (sumShippingEl) sumShippingEl.textContent = '৳ ' + shippingCost.toLocaleString();
    if (sumGrandTotalEl) sumGrandTotalEl.textContent = '৳ ' + grandTotal.toLocaleString();
    if (btnTotalEl) btnTotalEl.textContent = grandTotal.toLocaleString();
  }

  // Quantity + / - buttons
  var plusBtn = document.getElementById('stun-qty-plus');
  var minusBtn = document.getElementById('stun-qty-minus');

  if (plusBtn) {
    plusBtn.addEventListener('click', function() {
      currentQty++;
      updateTotals();
    });
  }
  if (minusBtn) {
    minusBtn.addEventListener('click', function() {
      if (currentQty > 1) {
        currentQty--;
        updateTotals();
      }
    });
  }

  // Delivery zone radio buttons
  var zoneCards = document.querySelectorAll('.bgs-stun-zone-card');
  zoneCards.forEach(function(card) {
    card.addEventListener('click', function() {
      zoneCards.forEach(function(c) { c.classList.remove('selected'); });
      card.classList.add('selected');
      var radio = card.querySelector('input[type="radio"]');
      if (radio) {
        radio.checked = true;
        shippingCost = (radio.value === 'outside_dhaka') ? 120 : 60;
        updateTotals();
      }
    });
  });

  // AJAX Checkout Form Submission
  var checkoutForm = document.getElementById('bgs-stun-checkout-form');
  var submitBtn = document.getElementById('bgs-stun-submit-btn');
  var msgBox = document.getElementById('bgs-stun-form-msg');

  if (checkoutForm) {
    checkoutForm.addEventListener('submit', function(e) {
      e.preventDefault();

      var phoneInput = document.getElementById('stun_billing_phone');
      var phoneVal = phoneInput ? phoneInput.value.trim() : '';

      // Validate 11-digit Bangladesh phone number
      if (!/^01[3-9]\d{8}$/.test(phoneVal)) {
        if (msgBox) {
          msgBox.className = 'bgs-stun-form-message error';
          msgBox.textContent = 'দয়া করে একটি সঠিক ১১ ডিজিটের মোবাইল নম্বর দিন (যেমন: 017XXXXXXXX)';
        }
        if (phoneInput) phoneInput.focus();
        return;
      }

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.querySelector('.btn-text').textContent = 'অর্ডার প্রসেস হচ্ছে... অনুগ্রহ করে অপেক্ষা করুন';
      }
      if (msgBox) {
        msgBox.className = 'bgs-stun-form-message';
        msgBox.textContent = '';
      }

      var formData = new FormData(checkoutForm);

      fetch('<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>', {
        method: 'POST',
        body: formData
      })
      .then(function(res) { return res.json(); })
      .then(function(data) {
        if (data.success && data.data && data.data.redirect_url) {
          if (msgBox) {
            msgBox.className = 'bgs-stun-form-message success';
            msgBox.textContent = 'আপনার অর্ডারটি সফল হয়েছে! রিডাইরেক্ট করা হচ্ছে...';
          }
          window.location.href = data.data.redirect_url;
        } else {
          throw new Error((data.data && data.data.message) ? data.data.message : 'অর্ডার প্রক্রিয়াকরণে সমস্যা হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন।');
        }
      })
      .catch(function(err) {
        if (msgBox) {
          msgBox.className = 'bgs-stun-form-message error';
          msgBox.textContent = err.message || 'নেটওয়ার্ক সমস্যা। আবার চেষ্টা করুন অথবা সরাসরি কল করুন।';
        }
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.querySelector('.btn-text').textContent = '🔒 অর্ডার কনফার্ম করুন ৳ ' + (unitPrice * currentQty + shippingCost).toLocaleString();
        }
      });
    });
  }

})();
</script>
