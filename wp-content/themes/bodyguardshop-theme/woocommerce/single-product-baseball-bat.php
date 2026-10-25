<?php

/**

 * WooCommerce Single Product Template: Bodyguard Heavy-Duty Metal Baseball Bat (32 Inch)

 * Bodyguard Shop — Dark Luxury Self-Defense Landing Page

 */



if ( ! defined( 'ABSPATH' ) ) exit;



$pid     = get_the_ID();

$product = wc_get_product( $pid );



$product_title = $product ? $product->get_name() : 'Bodyguard Heavy-Duty Metal Baseball Bat (32 Inch)';

$price         = $product ? floatval( $product->get_price() ) : 1890;

$reg_price     = $product ? floatval( $product->get_regular_price() ) : 2890;

if ( $reg_price <= $price ) { $reg_price = 2890; }



$discount_pct  = round( ( ( $reg_price - $price ) / $reg_price ) * 100 );

$save_amount   = $reg_price - $price;



$thumb_url = get_the_post_thumbnail_url( $pid, 'large' );

if ( ! $thumb_url ) {

    $thumb_url = get_template_directory_uri() . '/assets/images/products/baseball-bat.jpg';

}



$shop_phone    = get_option( 'bgs_phone', '01409710012' );

$shop_whatsapp = get_option( 'bgs_whatsapp', '8801409710012' );

?>



<main id="bgs-baseball-bat-landing" class="bgs-bat-page">



  <div class="bgs-bat-container">



    <!-- ==========================================================================

         1. HERO PSYCHOLOGICAL HOOK & INTRO

         ========================================================================== -->

    <header class="bgs-bat-hero-header">

      <div class="bgs-bat-badge-pill">🛡️ HEAVY-DUTY PERSONAL & HOME DEFENSE TOOL</div>

      <h1 class="bgs-bat-main-title">নিরাপত্তা নিশ্চিত করুন যেকোনো অনাকাঙ্ক্ষিত মুহূর্তে</h1>

      <h2 class="bgs-bat-sub-title">বাড়ি ও গাড়ির বিশ্বস্ত সুরক্ষায় ৩২ ইঞ্চি হেভি-ডিউটি মেটাল বেসবল ব্যাট</h2>

      <div class="bgs-bat-gold-divider"></div>

      <p class="bgs-bat-lead-desc">

        আনব্রেকেবল অ্যারোস্পেস অ্যালয় মেটাল ও অ্যান্টি-স্লিপ এরগোনোমিক গ্রিপ — চোর, ডাকাত বা আক্রমণকারীকে নিরাপদ দূরত্ব থেকেই প্রতিহত করার সবচেয়ে শক্তিশালী ও বৈধ নিরাপত্তা গ্যাজেট।

      </p>

    </header>





    <!-- ==========================================================================

         2. PRODUCT SHOWCASE GRID (VISUAL + SPECS & INSTANT CTA)

         ========================================================================== -->

    <section class="bgs-bat-showcase-section">

      <div class="bgs-bat-showcase-grid">



        <!-- Left: Product Image Showcase -->

        <div class="bgs-bat-visual-box">

          <div class="bgs-bat-img-frame">

            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="Bodyguard Metal Baseball Bat 32 Inch" class="bgs-bat-product-img">

            <span class="bgs-bat-floating-badge">💪 UNBREAKABLE ALLOY METAL</span>

            <span class="bgs-bat-length-tag">📏 32 INCHES (81 CM)</span>

          </div>



          <div class="bgs-bat-feature-chips">

            <span class="bgs-bat-chip">⚡ অ্যান্টি-স্লিপ গ্রিপ</span>

            <span class="bgs-bat-chip">🛡️ ম্যাট ব্ল্যাক কোটিং</span>

            <span class="bgs-bat-chip">🔨 গ্লাস ব্রেকিং ক্যাপাসিটি</span>

          </div>

        </div>



        <!-- Right: Pricing, Highlights & Quick Action -->

        <div class="bgs-bat-details-card">

          <div class="bgs-bat-rating-row">

            <span class="bgs-bat-stars">★★★★★</span>

            <span class="bgs-bat-rating-text">4.9 (১৬৪+ ভেরিফাইড কাস্টমার রিভিউ)</span>

          </div>



          <h3 class="bgs-bat-card-name"><?php echo esc_html( $product_title ); ?></h3>

          <p class="bgs-bat-card-sub">মডেল: Heavy-Duty Pro Defense Bat • ফুল মেটাল কনস্ট্রাকশন</p>



          <!-- Price & Savings -->

          <div class="bgs-bat-price-box">

            <div class="bgs-bat-price-main">

              <span class="bgs-bat-cur-price">৳ <?php echo number_format( $price ); ?></span>

              <del class="bgs-bat-reg-price">৳ <?php echo number_format( $reg_price ); ?></del>

            </div>

            <span class="bgs-bat-save-badge">🔥 <?php echo esc_html( $discount_pct ); ?>% অফারে সাশ্রয় ৳ <?php echo number_format( $save_amount ); ?></span>

          </div>



          <div class="bgs-bat-stock-status">

            <span class="bgs-bat-stock-dot"></span>

            <span>ইন-স্টক (সীমিত স্টক বাকি — দ্রুত শেষ হয়ে যাচ্ছে)</span>

          </div>



          <!-- Feature Bullets -->

          <ul class="bgs-bat-highlights-list">

            <li>

              <span class="bgs-bat-bullet-icon">✓</span>

              <span><strong>৩২ ইঞ্চি সম্পূর্ণ মেটাল বডি:</strong> নিখুঁত ব্যালান্স ও দূরপাল্লার রিচে আক্রমণকারীকে কাছে আসতে না দেওয়ার সুবিধা।</span>

            </li>

            <li>

              <span class="bgs-bat-bullet-icon">✓</span>

              <span><strong>হাই-গ্রেড থিক-ওয়াল অ্যালুমিনিয়াম অ্যালয়:</strong> অত্যন্ত শক্তিশালী, কখনও ভাঙবে না বা বাঁকা হবে না।</span>

            </li>

            <li>

              <span class="bgs-bat-bullet-icon">✓</span>

              <span><strong>নন-স্লিপ এরগোনোমিক থ্রেডেড গ্রিপ:</strong> হাত ঘেমে গেলেও শক্তভাবে আঁকড়ে ধরা যায়, পিছলে যাওয়ার সুযোগ নেই।</span>

            </li>

            <li>

              <span class="bgs-bat-bullet-icon">✓</span>

              <span><strong>ইমার্জেন্সি উদ্ধার ও গাড়ির সুরক্ষা:</strong> দুর্ঘটনায় শক্ত গ্লাস ভেঙে বের হওয়া বা ছিনতাইকারী তাড়াতে মোক্ষম।</span>

            </li>

            <li>

              <span class="bgs-bat-bullet-icon">✓</span>

              <span><strong>১০০% বৈধ ও নিরাপদ:</strong> কোনো লাইসেন্স বা জটিলতা ছাড়াই পরিবারের নিরাপত্তার জন্য ঘরে ও গাড়িতে রাখার উপযুক্ত।</span>

            </li>

          </ul>



          <!-- Action CTA -->

          <div class="bgs-bat-action-row">

            <a href="#order" class="bgs-bat-order-btn bgs-bat-pulse">

              অর্ডার করতে ফর্ম পূরণ করুন ⚡

            </a>

          </div>



          <!-- Trust micro-badges -->

          <div class="bgs-bat-micro-trust">

            <span>📦 পণ্য হাতে পেয়ে টাকা পরিশোধ</span>

            <span>🚚 সারা দেশে দ্রুত ডেলিভারি</span>

            <span>🛡️ ১০০% প্রিমিয়াম মেটাল</span>

          </div>

        </div>



      </div>

    </section>
    <section class="bgs-bat-checkout-section" id="order">

      <div class="bgs-bat-sec-title-wrap">

        <span class="bgs-bat-pill-label">CASH ON DELIVERY</span>

        <h2 class="bgs-bat-sec-title">অর্ডার করতে নিচের ফর্মটি পূরণ করুন</h2>

        <p class="bgs-bat-sec-sub">কোনো অগ্রিম টাকা দিতে হবে না, পণ্য হাতে পেয়ে মূল্য পরিশোধ করবেন।</p>

        <div class="bgs-bat-gold-divider"></div>

      </div>



      <div class="bgs-bat-checkout-card">



        <!-- Selected Product Preview Summary -->

        <div class="bgs-bat-summary-preview">

          <div class="bgs-bat-sp-thumb">

            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="32 inch Metal Baseball Bat">

          </div>

          <div class="bgs-bat-sp-info">

            <span class="bgs-bat-sp-badge">🔥 LIMITED STOCK — ৩৫% অফার</span>

            <h4 class="bgs-bat-sp-title">Bodyguard Metal Baseball Bat (32 Inch)</h4>

            <div class="bgs-bat-sp-price-line">

              <span class="bgs-bat-sp-sale">৳ <span id="bgs-sp-unit-price"><?php echo number_format( $price ); ?></span></span>

              <del class="bgs-bat-sp-reg">৳ <?php echo number_format( $reg_price ); ?></del>

              <span class="bgs-bat-sp-save">সাশ্রয় ৳ <?php echo number_format( $save_amount ); ?></span>

            </div>

            <p class="bgs-bat-sp-meta">ম্যাট ব্ল্যাক অ্যালুমিনিয়াম অ্যালয় • নন-স্লিপ গ্রিপ • আনব্রেকেবল মেটাল</p>

          </div>

        </div>



        <!-- Checkout Form Form -->

        <form id="bgs-bat-order-form" class="bgs-bat-form" novalidate>

          <input type="hidden" name="action" value="bgs_process_direct_order">

          <input type="hidden" name="product_id" value="<?php echo esc_attr( $pid ); ?>">

          <input type="hidden" name="selected_level" value="Metal Baseball Bat (32 Inch)">

          <input type="hidden" id="bgs-bat-unit-price" name="level_price" value="<?php echo esc_attr( $price ); ?>">



          <!-- 1. Quantity Selection -->

          <div class="bgs-bat-form-row">

            <label class="bgs-bat-form-label">

              পরিমাণ (Quantity):

            </label>

            <div class="bgs-bat-qty-picker">

              <button type="button" class="bgs-bat-qty-btn" id="bgs-qty-minus" aria-label="Decrease quantity">−</button>

              <input type="number" id="bgs-bat-qty" name="quantity" value="1" min="1" max="10" readonly>

              <button type="button" class="bgs-bat-qty-btn" id="bgs-qty-plus" aria-label="Increase quantity">+</button>

            </div>

          </div>



          <!-- 2. Delivery Zone Selection (Item 10: Free Delivery) -->

          <div class="bgs-bat-form-row">

            <label class="bgs-bat-form-label">

              ডেলিভারি চার্জ:

            </label>

            <div class="bgs-bat-delivery-grid">

              <label class="bgs-bat-del-option active" style="grid-column: 1 / -1;">

                <input type="radio" name="delivery_zone" value="free_shipping" checked class="bgs-bat-del-radio">

                <div class="bgs-bat-del-content">

                  <span class="bgs-bat-del-name">🚚 ফ্রি হোম ডেলিভারি (সারা বাংলাদেশ)</span>

                  <span class="bgs-bat-del-cost" style="color: #22C55E; font-weight: 800;">৳ ০ (ফ্রি)</span>

                </div>

              </label>

            </div>

          </div>



          <!-- 3. Price Breakdown Summary (Item 10: Free Delivery) -->

          <div class="bgs-bat-breakdown-card">

            <div class="bgs-bat-bd-row">

              <span>প্রোডাক্ট প্রাইস:</span>

              <span>৳ <span id="bgs-bd-subtotal"><?php echo number_format( $price ); ?></span></span>

            </div>

            <div class="bgs-bat-bd-row">

              <span>ডেলিভারি চার্জ:</span>

              <span style="color: #22C55E; font-weight: 700;">৳ <span id="bgs-bd-shipping">0</span> (ফ্রি)</span>

            </div>

            <div class="bgs-bat-bd-divider"></div>

            <div class="bgs-bat-bd-row bgs-bat-bd-total">

              <strong>সর্বমোট প্রদেয়:</strong>

              <strong class="bgs-bat-gold-sum">৳ <span id="bgs-bd-total"><?php echo number_format( $price ); ?></span></strong>

            </div>

          </div>



          <!-- 4. Customer Billing Details -->

          <div class="bgs-bat-group">

            <label for="bgs_billing_name" class="bgs-bat-label">

              আপনার পুরো নাম <span class="bgs-bat-req">*</span>

            </label>

            <input 

              type="text" 

              id="bgs_billing_name" 

              name="billing_first_name" 

              class="bgs-bat-input" 

              placeholder="আপনার পূর্ণ নাম লিখুন" 

              required

            >

          </div>



          <div class="bgs-bat-group">

            <label for="bgs_billing_phone" class="bgs-bat-label">

              মোবাইল নাম্বার <span class="bgs-bat-req">*</span>

            </label>

            <input 

              type="tel" 

              id="bgs_billing_phone" 

              name="billing_phone" 

              class="bgs-bat-input" 

              placeholder="১১ ডিজিটের সচল মোবাইল নাম্বার (যেমন: 018XXXXXXXX)" 

              pattern="[0-9]{11}" 

              required

            >

            <small class="bgs-bat-hint">অর্ডার কনফার্মেশনের জন্য এই নম্বরে কল দেওয়া হবে।</small>

          </div>



          <div class="bgs-bat-group">

            <label for="bgs_billing_address" class="bgs-bat-label">

              সম্পূর্ণ ঠিকানা <span class="bgs-bat-req">*</span>

            </label>

            <textarea 

              id="bgs_billing_address" 

              name="billing_address_1" 

              class="bgs-bat-input bgs-bat-textarea" 

              rows="3" 

              placeholder="বাসা নং, রোড নং, এলাকা, থানা ও জেলার নাম বিস্তারিত লিখুন" 

              required

            ></textarea>

          </div>



          <!-- 5. Payment method note -->

          <div class="bgs-bat-payment-note">

            <span class="bgs-bat-pn-icon">💵</span>

            <div>

              <strong>ক্যাশ অন ডেলিভারি (Cash on delivery)</strong>

              <p>পণ্য হাতে পেয়ে ডেলিভারিম্যানের সামনে দেখে মূল্য পরিশোধ করবেন।</p>

            </div>

          </div>



          <!-- 6. Submit Button -->

          <div class="bgs-bat-form-action">

            <button type="submit" id="bgs-submit-bat-btn" class="bgs-bat-submit-btn">

              <span class="bgs-bat-btn-text">

                অর্ডার কনফার্ম করুন — ৳ <span id="bgs-btn-total"><?php echo number_format( $price + 60 ); ?></span> (ক্যাশ অন ডেলিভারি) ⚡

              </span>

              <span class="bgs-bat-btn-loader" style="display:none;">⏳ অর্ডার প্রসেস হচ্ছে...</span>

            </button>

          </div>



          <!-- Feedback message -->

          <div id="bgs-bat-feedback" class="bgs-bat-feedback" style="display:none;"></div>



          <!-- Trust Badges -->

          <div class="bgs-bat-form-trust">

            <div class="bgs-bat-ft-item">🛡️ ১০০% অরিজিনাল মেটাল ব্যাট</div>

            <div class="bgs-bat-ft-item">📦 পণ্য দেখে মূল্য পরিশোধ</div>

            <div class="bgs-bat-ft-item">⚡ সারা দেশে দ্রুত হোম ডেলিভারি</div>

          </div>



        </form>



      </div>

    </section>





    <!-- ==========================================================================

         3. CORE USE-CASES (WHY IT IS ESSENTIAL FOR EVERY HOME & CAR)

         ========================================================================== -->

    <section class="bgs-bat-usecases-section">

      <div class="bgs-bat-sec-title-wrap">

        <h2 class="bgs-bat-sec-title">কেন প্রতিটি বাড়ি ও গাড়িতে একটি মেটাল বেসবল ব্যাট থাকা প্রয়োজন?</h2>

        <p class="bgs-bat-sec-sub">বিপদ আসার কোনো সময় নেই, কিন্তু প্রস্তুত থাকা আপনার হাতে।</p>

        <div class="bgs-bat-gold-divider"></div>

      </div>



      <div class="bgs-bat-situations-grid">

        <!-- 1. Home Defense -->

        <div class="bgs-bat-situation-card">

          <div class="bgs-bat-sit-icon">🏠</div>

          <h4 class="bgs-bat-sit-title">বাসাবাড়ির তাৎক্ষণিক নিরাপত্তা</h4>

          <p class="bgs-bat-sit-desc">

            গভীর রাতে ঘরের ভেতর চোর, ডাকাত বা অনধিকার প্রবেশকারী সামনে এলে কোনো দ্বিধা ছাড়াই বিছানার পাশে রাখা এই ব্যাট দিয়ে মুহূর্তে প্রতিহত করতে পারবেন।

          </p>

        </div>



        <!-- 2. Car Defense -->

        <div class="bgs-bat-situation-card">

          <div class="bgs-bat-sit-icon">🚗</div>

          <h4 class="bgs-bat-sit-title">গাড়ি ও দূরযাত্রার নিরাপত্তা</h4>

          <p class="bgs-bat-sit-desc">

            হাইওয়েতে, যানজটে কিংবা নির্জন রাস্তায় ছিনতাইকারী বা গ্যাং হামলা থেকে নিজের গাড়ি, পরিবার ও মূল্যবান জিনিসপত্র নিরাপদ রাখতে ড্যাশবোর্ড বা সিটের পাশে রাখুন।

          </p>

        </div>



        <!-- 3. Emergency Escape -->

        <div class="bgs-bat-situation-card">

          <div class="bgs-bat-sit-icon">🔨</div>

          <h4 class="bgs-bat-sit-title">জরুরি মুহূর্তে গ্লাস ব্রেকার</h4>

          <p class="bgs-bat-sit-desc">

            দুর্ঘটনায় গাড়ির সেন্ট্রাল লক আটকে গেলে বা জরুরি ইমার্জেন্সিতে শক্ত কাচ সেকেন্ডের মধ্যে ভেঙে আরোহীদের নিরাপদে উদ্ধারে এটি অতুলনীয় সাহায্য করে।

          </p>

        </div>



        <!-- 4. Legal & Non-Lethal -->

        <div class="bgs-bat-situation-card">

          <div class="bgs-bat-sit-icon">⚖️</div>

          <h4 class="bgs-bat-sit-title">আইনসম্মত ও কার্যকর শারীরিক আত্মরক্ষা</h4>

          <p class="bgs-bat-sit-desc">

            আগ্নেয়াস্ত্রের ঝামেলা ছাড়া পরিবারের যে কেউ—নারী ও পুরুষ নির্বিশেষে—সহজে নিয়ন্ত্রণ ও আত্মরক্ষার কাজে এটি ব্যবহার করতে পারে।

          </p>

        </div>

      </div>

    </section>





    <!-- ==========================================================================

         4. TECHNICAL SPECIFICATIONS TABLE

         ========================================================================== -->

    <section class="bgs-bat-specs-section">

      <div class="bgs-bat-sec-title-wrap">

        <h2 class="bgs-bat-sec-title">টেকনিক্যাল স্পেসিফিকেশন ও নির্মাণ বৈশিষ্ট্য</h2>

        <div class="bgs-bat-gold-divider"></div>

      </div>



      <div class="bgs-bat-specs-card">

        <table class="bgs-bat-specs-table">

          <tbody>

            <tr>

              <th scope="row">প্রোডাক্ট মডেল</th>

              <td>Bodyguard Heavy-Duty Metal Baseball Bat (32")</td>

            </tr>

            <tr>

              <th scope="row">দৈর্ঘ্য (Length)</th>

              <td>৩২ ইঞ্চি (প্রায় ৮১.৩ সেন্টিমিটার / 32 Inches)</td>

            </tr>

            <tr>

              <th scope="row">উপাদান (Material)</th>

              <td>প্রিমিয়াম থিক-ওয়াল অ্যারোস্পেস অ্যালুমিনিয়াম অ্যালয় মেটাল</td>

            </tr>

            <tr>

              <th scope="row">সারফেস ফিনিশ</th>

              <td>ম্যাট ব্ল্যাক ইলেক্ট্রোস্ট্যাটিক অ্যান্টি-রাস্ট ও অ্যান্টি-স্ক্র্যাচ কোটিং</td>

            </tr>

            <tr>

              <th scope="row">হ্যান্ডেল গ্রিপ</th>

              <td>নন-স্লিপ এরগোনোমিক থ্রেডেড কুশনড রাবার গ্রিপ</td>

            </tr>

            <tr>

              <th scope="row">ব্যারেল হেড ডায়ামিটার</th>

              <td>২ ইঞ্চি (5.08 cm) হেভি ইমপ্যাক্ট স্ট্রাইকিং হেড</td>

            </tr>

            <tr>

              <th scope="row">ওজন ব্যালান্স</th>

              <td>দ্রুত সুইং ও সর্বোচ্চ মোমেন্টাম ট্রান্সফারের জন্য প্রিসিশন ব্যালান্সড</td>

            </tr>

            <tr>

              <th scope="row">ব্যবহারের উপযুক্ততা</th>

              <td>বাড়ি, গাড়ি, দোকান, অফিস, খামার ও পার্সোনাল সেলফ-ডিফেন্স</td>

            </tr>

          </tbody>

        </table>

      </div>

    </section>





    <!-- ==========================================================================

         5. TRUST GUARANTEES & CONTACT

         ========================================================================== -->

    <section class="bgs-bat-guarantee-section">

      <div class="bgs-bat-guarantee-grid">

        <div class="bgs-bat-gcard">

          <div class="bgs-bat-gicon">🚚</div>

          <h4>দ্রুত ক্যাশ অন ডেলিভারি</h4>

          <p>পণ্য হাতে পেয়ে দেখে ডেলিভারিম্যানকে মূল্য পরিশোধ করুন। কোনো অগ্রিম পেমেন্টের ঝুঁকি নেই।</p>

        </div>

        <div class="bgs-bat-gcard">

          <div class="bgs-bat-gicon">🛡️</div>

          <h4>১০০% আসল ও সলিড মেটাল</h4>

          <p>বডিগার্ড শপ থেকে শতভাগ পরীক্ষিত, শক্তিশালী এবং আনব্রেকেবল অরিজিনাল কোয়ালিটি নিশ্চয়তা।</p>

        </div>

        <div class="bgs-bat-gcard">

          <div class="bgs-bat-gicon">📞</div>

          <h4>সার্বক্ষণিক কাস্টমার সাপোর্ট</h4>

          <p>পণ্য সংক্রান্ত যেকোনো তথ্যে আমাদের কল করুন অথবা সরাসরি হোয়াটসঅ্যাপে মেসেজ দিন।</p>

        </div>

      </div>



      <!-- Quick Contact Buttons -->

      <div class="bgs-bat-contact-row">

        <a href="tel:<?php echo esc_attr( $shop_phone ); ?>" class="bgs-bat-btn-call">

          <span>📞 প্রয়োজনে কল করুন: <?php echo esc_html( $shop_phone ); ?></span>

        </a>

        <a href="https://wa.me/<?php echo esc_attr( $shop_whatsapp ); ?>" target="_blank" rel="noopener" class="bgs-bat-btn-whatsapp">

          <span>💬 Whatsapp মেসেজ করুন</span>

        </a>

      </div>

    </section>





    <!-- ==========================================================================

         6. EXPRESS 1-CLICK CASH ON DELIVERY CHECKOUT FORM (#order)

         ========================================================================== -->




  </div><!-- /.bgs-bat-container -->





  <!-- ==========================================================================

       7. MOBILE STICKY FLOATING ORDER BAR

       ========================================================================== -->

  <div class="bgs-bat-mobile-bar">

    <div class="bgs-bat-mb-inner">

      <div class="bgs-bat-mb-prod">

        <img src="<?php echo esc_url( $thumb_url ); ?>" alt="Baseball Bat" class="bgs-bat-mb-thumb">

        <div class="bgs-bat-mb-info">

          <span class="bgs-bat-mb-name">Metal Baseball Bat (32")</span>

          <span class="bgs-bat-mb-price">৳ <span id="bgs-mb-price-val"><?php echo number_format( $price ); ?></span></span>

        </div>

      </div>

      <a href="#order" class="bgs-bat-mb-btn">এখনই অর্ডার করুন</a>

    </div>

  </div>



</main>





<!-- ==========================================================================

     CSS STYLING FOR METAL BASEBALL BAT PAGE

     ========================================================================== -->

<style>

:root {

  --bat-gold: #C9A96E;

  --bat-gold-hover: #DFBF82;

  --bat-dark: #000000;

  --bat-surface: #0E0E0E;

  --bat-card: #151515;

  --bat-border: #262626;

  --bat-text: #FFFFFF;

  --bat-text-sub: #A3A3A3;

  --bat-primary: #f16334;

  --bat-green: #10B981;

}



body {

  background-color: var(--bat-dark);

  color: var(--bat-text);

  font-family: 'Hind Siliguri', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;

  line-height: 1.5;

  margin: 0;

  padding: 0;

}



.bgs-bat-page {

  background-color: var(--bat-dark);

  padding: 30px 0 90px;

}



.bgs-bat-container {

  max-width: 980px;

  margin: 0 auto;

  padding: 0 16px;

}



/* 1. Hero Header */

.bgs-bat-hero-header {

  text-align: center;

  margin-bottom: 35px;

}

.bgs-bat-badge-pill {

  display: inline-block;

  background: rgba(201, 169, 110, 0.12);

  border: 1px solid var(--bat-gold);

  color: var(--bat-gold);

  font-size: 13px;

  font-weight: 800;

  padding: 4px 16px;

  border-radius: 20px;

  letter-spacing: 0.5px;

  margin-bottom: 14px;

}

.bgs-bat-main-title {

  font-size: clamp(24px, 4.2vw, 36px);

  font-weight: 800;

  color: #FFFFFF;

  margin: 0 0 10px 0;

  line-height: 1.25;

}

.bgs-bat-sub-title {

  font-size: clamp(17px, 2.5vw, 22px);

  font-weight: 600;

  color: #E2E8F0;

  margin: 0 0 16px 0;

}

.bgs-bat-gold-divider {

  width: 70px;

  height: 3px;

  background: var(--bat-gold);

  margin: 14px auto;

  border-radius: 2px;

}

.bgs-bat-lead-desc {

  max-width: 720px;

  margin: 0 auto;

  font-size: 16px;

  color: var(--bat-text-sub);

  line-height: 1.6;

}



/* 2. Showcase Grid */

.bgs-bat-showcase-section {

  margin-bottom: 50px;

}

.bgs-bat-showcase-grid {

  display: grid;

  grid-template-columns: 1fr 1.15fr;

  gap: 32px;

  background: var(--bat-surface);

  border: 1px solid var(--bat-border);

  border-radius: 18px;

  padding: 28px;

  box-shadow: 0 15px 45px rgba(0,0,0,0.6);

}

@media (max-width: 768px) {

  .bgs-bat-showcase-grid {

    grid-template-columns: 1fr;

    padding: 20px 16px;

    gap: 24px;

  }

}



.bgs-bat-visual-box {

  display: flex;

  flex-direction: column;

  align-items: center;

}

.bgs-bat-img-frame {

  position: relative;

  width: 100%;

  max-width: 400px;

  background: #000000;

  border: 1px solid #2d2d2d;

  border-radius: 14px;

  overflow: hidden;

  box-shadow: 0 10px 30px rgba(0,0,0,0.7);

}

.bgs-bat-product-img {

  width: 100%;

  height: auto;

  display: block;

  border-radius: 14px;

  transition: transform 0.3s ease;

}

.bgs-bat-product-img:hover {

  transform: scale(1.02);

}

.bgs-bat-floating-badge {

  position: absolute;

  top: 14px;

  left: 14px;

  background: rgba(0, 0, 0, 0.85);

  border: 1px solid var(--bat-gold);

  color: var(--bat-gold);

  font-size: 11px;

  font-weight: 800;

  padding: 4px 10px;

  border-radius: 14px;

  letter-spacing: 0.5px;

}

.bgs-bat-length-tag {

  position: absolute;

  bottom: 14px;

  right: 14px;

  background: rgba(241, 99, 52, 0.9);

  color: #fff;

  font-size: 11px;

  font-weight: 800;

  padding: 4px 10px;

  border-radius: 14px;

  letter-spacing: 0.5px;

}

.bgs-bat-feature-chips {

  display: flex;

  gap: 8px;

  margin-top: 14px;

  flex-wrap: wrap;

  justify-content: center;

}

.bgs-bat-chip {

  background: #181818;

  border: 1px solid #303030;

  color: #d1d5db;

  font-size: 12px;

  font-weight: 600;

  padding: 4px 10px;

  border-radius: 12px;

}



/* Details Card */

.bgs-bat-details-card {

  display: flex;

  flex-direction: column;

}

.bgs-bat-rating-row {

  display: flex;

  align-items: center;

  gap: 8px;

  margin-bottom: 8px;

}

.bgs-bat-stars {

  color: #F59E0B;

  font-size: 16px;

}

.bgs-bat-rating-text {

  font-size: 13px;

  color: var(--bat-text-sub);

}

.bgs-bat-card-name {

  font-size: clamp(20px, 2.5vw, 26px);

  font-weight: 800;

  color: #ffffff;

  margin: 0 0 6px 0;

  line-height: 1.3;

}

.bgs-bat-card-sub {

  font-size: 14px;

  color: var(--bat-gold);

  margin: 0 0 16px 0;

  font-weight: 600;

}



.bgs-bat-price-box {

  background: #000000;

  border: 1px solid var(--bat-border);

  border-radius: 12px;

  padding: 14px 18px;

  margin-bottom: 16px;

  display: flex;

  align-items: center;

  justify-content: space-between;

  flex-wrap: wrap;

  gap: 10px;

}

.bgs-bat-price-main {

  display: flex;

  align-items: baseline;

  gap: 12px;

}

.bgs-bat-cur-price {

  font-size: 28px;

  font-weight: 800;

  color: var(--bat-gold);

}

.bgs-bat-reg-price {

  font-size: 18px;

  color: #737373;

}

.bgs-bat-save-badge {

  background: rgba(16, 185, 129, 0.15);

  border: 1px solid rgba(16, 185, 129, 0.4);

  color: var(--bat-green);

  font-size: 13px;

  font-weight: 700;

  padding: 4px 10px;

  border-radius: 6px;

}



.bgs-bat-stock-status {

  display: flex;

  align-items: center;

  gap: 8px;

  font-size: 13px;

  font-weight: 600;

  color: #10B981;

  margin-bottom: 18px;

}

.bgs-bat-stock-dot {

  width: 8px;

  height: 8px;

  border-radius: 50%;

  background: #10B981;

  box-shadow: 0 0 8px #10B981;

}



.bgs-bat-highlights-list {

  list-style: none;

  padding: 0;

  margin: 0 0 24px 0;

}

.bgs-bat-highlights-list li {

  display: flex;

  align-items: flex-start;

  gap: 10px;

  font-size: 15px;

  color: #E2E8F0;

  margin-bottom: 10px;

  line-height: 1.5;

}

.bgs-bat-bullet-icon {

  background: rgba(201, 169, 110, 0.15);

  color: var(--bat-gold);

  width: 20px;

  height: 20px;

  border-radius: 50%;

  display: inline-flex;

  align-items: center;

  justify-content: center;

  font-weight: 800;

  font-size: 12px;

  flex-shrink: 0;

  margin-top: 2px;

}



.bgs-bat-action-row {

  margin-bottom: 16px;

}

.bgs-bat-order-btn {

  display: block;

  width: 100%;

  box-sizing: border-box;

  text-align: center;

  background: var(--bat-primary);

  color: #ffffff !important;

  font-size: 18px;

  font-weight: 800;

  padding: 15px 24px;

  border-radius: 12px;

  text-decoration: none;

  box-shadow: 0 8px 25px rgba(241, 99, 52, 0.45);

  transition: all 0.25s ease;

}

.bgs-bat-order-btn:hover {

  background: #ff7448;

  transform: translateY(-2px);

  box-shadow: 0 10px 30px rgba(241, 99, 52, 0.6);

}



.bgs-bat-pulse {

  animation: bat-pulse 2s infinite;

}

@keyframes bat-pulse {

  0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(241, 99, 52, 0.6); }

  70% { transform: scale(1.02); box-shadow: 0 0 0 14px rgba(241, 99, 52, 0); }

  100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(241, 99, 52, 0); }

}



.bgs-bat-micro-trust {

  display: flex;

  justify-content: space-between;

  font-size: 12px;

  color: var(--bat-text-sub);

  flex-wrap: wrap;

  gap: 8px;

  border-top: 1px dashed rgba(255, 255, 255, 0.1);

  padding-top: 12px;

}



/* 3. Situations / Use cases */

.bgs-bat-usecases-section {

  margin-bottom: 50px;

}

.bgs-bat-sec-title-wrap {

  text-align: center;

  margin-bottom: 28px;

}

.bgs-bat-pill-label {

  display: inline-block;

  background: rgba(201, 169, 110, 0.1);

  border: 1px solid var(--bat-gold);

  color: var(--bat-gold);

  font-size: 12px;

  font-weight: 800;

  padding: 3px 14px;

  border-radius: 20px;

  margin-bottom: 8px;

}

.bgs-bat-sec-title {

  font-size: clamp(22px, 3.2vw, 28px);

  font-weight: 800;

  color: #ffffff;

  margin: 0 0 8px 0;

}

.bgs-bat-sec-sub {

  font-size: 15px;

  color: var(--bat-text-sub);

  margin: 0;

}



.bgs-bat-situations-grid {

  display: grid;

  grid-template-columns: repeat(2, 1fr);

  gap: 20px;

}

@media (max-width: 640px) {

  .bgs-bat-situations-grid {

    grid-template-columns: 1fr;

  }

}

.bgs-bat-situation-card {

  background: var(--bat-surface);

  border: 1px solid var(--bat-border);

  border-radius: 14px;

  padding: 22px 20px;

  transition: transform 0.25s ease, border-color 0.25s ease;

}

.bgs-bat-situation-card:hover {

  transform: translateY(-4px);

  border-color: var(--bat-gold);

}

.bgs-bat-sit-icon {

  font-size: 32px;

  margin-bottom: 10px;

}

.bgs-bat-sit-title {

  font-size: 18px;

  font-weight: 700;

  color: #ffffff;

  margin: 0 0 8px 0;

}

.bgs-bat-sit-desc {

  font-size: 14px;

  color: var(--bat-text-sub);

  line-height: 1.6;

  margin: 0;

}



/* 4. Specs Section */

.bgs-bat-specs-section {

  margin-bottom: 50px;

}

.bgs-bat-specs-card {

  background: var(--bat-surface);

  border: 1px solid var(--bat-border);

  border-radius: 14px;

  overflow: hidden;

  box-shadow: 0 10px 30px rgba(0,0,0,0.5);

}

.bgs-bat-specs-table {

  width: 100%;

  border-collapse: collapse;

}

.bgs-bat-specs-table th,

.bgs-bat-specs-table td {

  padding: 14px 18px;

  border-bottom: 1px solid rgba(255, 255, 255, 0.08);

  font-size: 15px;

}

.bgs-bat-specs-table tr:last-child th,

.bgs-bat-specs-table tr:last-child td {

  border-bottom: none;

}

.bgs-bat-specs-table th {

  width: 32%;

  color: var(--bat-gold);

  font-weight: 700;

  background: rgba(0, 0, 0, 0.4);

}

.bgs-bat-specs-table td {

  color: #E2E8F0;

}

@media (max-width: 600px) {

  .bgs-bat-specs-table th {

    width: 40%;

    font-size: 14px;

  }

  .bgs-bat-specs-table td {

    font-size: 14px;

  }

}



@media (max-width: 480px) {

  .bgs-bat-specs-table,

  .bgs-bat-specs-table tbody,

  .bgs-bat-specs-table tr,

  .bgs-bat-specs-table th,

  .bgs-bat-specs-table td {

    display: block;

    width: 100% !important;

  }

  .bgs-bat-specs-table th {

    background: rgba(201, 169, 110, 0.15);

    padding: 10px 14px 6px;

    border-bottom: none;

  }

  .bgs-bat-specs-table td {

    padding: 4px 14px 12px;

  }

  .bgs-bat-hero-header {

    padding: 30px 10px 20px;

  }

  .bgs-bat-details-card {

    padding: 20px 14px;

  }

  .bgs-bat-form-wrapper {

    padding: 20px 14px;

  }

  .bgs-bat-situations-grid {

    grid-template-columns: 1fr;

    gap: 14px;

  }

}



/* 5. Guarantees & Contact */

.bgs-bat-guarantee-section {

  margin-bottom: 50px;

}

.bgs-bat-guarantee-grid {

  display: grid;

  grid-template-columns: repeat(3, 1fr);

  gap: 18px;

  margin-bottom: 24px;

}

@media (max-width: 768px) {

  .bgs-bat-guarantee-grid {

    grid-template-columns: 1fr;

  }

}

.bgs-bat-gcard {

  background: var(--bat-surface);

  border: 1px solid var(--bat-border);

  border-radius: 12px;

  padding: 20px;

  text-align: center;

}

.bgs-bat-gicon {

  font-size: 28px;

  margin-bottom: 8px;

}

.bgs-bat-gcard h4 {

  font-size: 16px;

  font-weight: 700;

  color: #fff;

  margin: 0 0 6px 0;

}

.bgs-bat-gcard p {

  font-size: 13px;

  color: var(--bat-text-sub);

  margin: 0;

  line-height: 1.5;

}



.bgs-bat-contact-row {

  display: grid;

  grid-template-columns: 1fr 1fr;

  gap: 16px;

}

@media (max-width: 520px) {

  .bgs-bat-contact-row {

    grid-template-columns: 1fr;

  }

}

.bgs-bat-btn-call,

.bgs-bat-btn-whatsapp {

  display: flex;

  align-items: center;

  justify-content: center;

  padding: 13px 20px;

  border-radius: 10px;

  font-size: 15px;

  font-weight: 700;

  text-decoration: none;

  transition: all 0.2s ease;

}

.bgs-bat-btn-call {

  background: #1e3a8a;

  color: #ffffff !important;

  border: 1px solid #3b82f6;

}

.bgs-bat-btn-call:hover {

  background: #2563eb;

}

.bgs-bat-btn-whatsapp {

  background: #065f46;

  color: #ffffff !important;

  border: 1px solid #10b981;

}

.bgs-bat-btn-whatsapp:hover {

  background: #059669;

}



/* 6. Checkout Section */

.bgs-bat-checkout-section {

  max-width: 720px;

  margin: 0 auto 50px;

}

.bgs-bat-checkout-card {

  background: var(--bat-surface);

  border: 1px solid var(--bat-border);

  border-radius: 16px;

  padding: 26px 22px;

  box-shadow: 0 15px 45px rgba(0,0,0,0.6);

}



/* Product Preview Summary in Checkout */

.bgs-bat-summary-preview {

  display: flex;

  align-items: center;

  gap: 16px;

  background: #000000;

  border: 1px solid var(--bat-border);

  border-radius: 12px;

  padding: 14px 16px;

  margin-bottom: 22px;

}

.bgs-bat-sp-thumb img {

  width: 76px;

  height: 76px;

  object-fit: cover;

  border-radius: 8px;

  border: 1px solid #333333;

}

.bgs-bat-sp-info {

  flex: 1;

}

.bgs-bat-sp-badge {

  display: inline-block;

  background: rgba(241, 99, 52, 0.15);

  border: 1px solid rgba(241, 99, 52, 0.4);

  color: var(--bat-primary);

  font-size: 11px;

  font-weight: 800;

  padding: 2px 7px;

  border-radius: 4px;

  margin-bottom: 3px;

}

.bgs-bat-sp-title {

  margin: 0 0 4px 0;

  font-size: 16px;

  font-weight: 700;

  color: #ffffff;

}

.bgs-bat-sp-price-line {

  display: flex;

  align-items: baseline;

  gap: 8px;

  margin-bottom: 3px;

  flex-wrap: wrap;

}

.bgs-bat-sp-sale {

  color: var(--bat-gold);

  font-size: 18px;

  font-weight: 800;

}

.bgs-bat-sp-reg {

  color: #777777;

  text-decoration: line-through;

  font-size: 13px;

}

.bgs-bat-sp-save {

  background: rgba(16, 185, 129, 0.15);

  border: 1px solid rgba(16, 185, 129, 0.4);

  color: #10b981;

  font-size: 11px;

  font-weight: 700;

  padding: 2px 6px;

  border-radius: 4px;

}

.bgs-bat-sp-meta {

  margin: 0;

  font-size: 12px;

  color: var(--bat-text-sub);

}



/* Form Fields */

.bgs-bat-form-row {

  margin-bottom: 20px;

}

.bgs-bat-form-label {

  display: block;

  font-size: 15px;

  font-weight: 700;

  color: #ffffff;

  margin-bottom: 8px;

}



/* Quantity Picker */

.bgs-bat-qty-picker {

  display: inline-flex;

  align-items: center;

  border: 1px solid #333333;

  border-radius: 8px;

  overflow: hidden;

  background: #000000;

}

.bgs-bat-qty-btn {

  background: #1c1c1c;

  color: #ffffff;

  border: none;

  width: 38px;

  height: 38px;

  font-size: 18px;

  font-weight: bold;

  cursor: pointer;

  transition: background 0.2s;

}

.bgs-bat-qty-btn:hover {

  background: var(--bat-gold);

  color: #000;

}

.bgs-bat-qty-picker input {

  width: 50px;

  height: 38px;

  background: transparent;

  border: none;

  color: #ffffff;

  text-align: center;

  font-size: 16px;

  font-weight: 800;

}



/* Delivery zone grid */

.bgs-bat-delivery-grid {

  display: grid;

  grid-template-columns: 1fr 1fr;

  gap: 12px;

}

@media (max-width: 480px) {

  .bgs-bat-delivery-grid {

    grid-template-columns: 1fr;

  }

}

.bgs-bat-del-option {

  display: flex;

  align-items: center;

  gap: 10px;

  background: #000000;

  border: 1px solid #2d2d2d;

  border-radius: 10px;

  padding: 12px 14px;

  cursor: pointer;

  transition: all 0.2s ease;

}

.bgs-bat-del-option.active {

  border-color: var(--bat-gold);

  background: rgba(201, 169, 110, 0.08);

}

.bgs-bat-del-radio {

  accent-color: var(--bat-gold);

  width: 18px;

  height: 18px;

}

.bgs-bat-del-content {

  display: flex;

  justify-content: space-between;

  width: 100%;

  font-size: 15px;

  font-weight: 600;

}

.bgs-bat-del-cost {

  color: var(--bat-gold);

  font-weight: 700;

}



/* Breakdown Card */

.bgs-bat-breakdown-card {

  background: #000000;

  border: 1px solid var(--bat-border);

  border-radius: 10px;

  padding: 16px;

  margin-bottom: 22px;

}

.bgs-bat-bd-row {

  display: flex;

  justify-content: space-between;

  font-size: 15px;

  color: #d1d5db;

  padding: 6px 0;

}

.bgs-bat-bd-divider {

  height: 1px;

  background: #282828;

  margin: 8px 0;

}

.bgs-bat-bd-total {

  font-size: 17px;

  color: #ffffff;

  padding-top: 6px;

}

.bgs-bat-gold-sum {

  color: var(--bat-gold);

  font-size: 20px;

}



/* Inputs */

.bgs-bat-group {

  margin-bottom: 18px;

}

.bgs-bat-label {

  display: block;

  font-size: 15px;

  font-weight: 600;

  color: #ffffff;

  margin-bottom: 6px;

}

.bgs-bat-req {

  color: #ef4444;

}

.bgs-bat-input {

  width: 100%;

  box-sizing: border-box;

  background: #000000;

  border: 1px solid #333333;

  color: #ffffff;

  padding: 13px 15px;

  border-radius: 8px;

  font-size: 15px;

  font-family: inherit;

  outline: none;

  transition: border-color 0.2s ease;

}

.bgs-bat-input:focus {

  border-color: var(--bat-gold);

  box-shadow: 0 0 0 2px rgba(201, 169, 110, 0.25);

}

.bgs-bat-textarea {

  resize: vertical;

}

.bgs-bat-hint {

  font-size: 12px;

  color: var(--bat-text-sub);

  margin-top: 4px;

  display: block;

}



/* Payment note */

.bgs-bat-payment-note {

  display: flex;

  align-items: center;

  gap: 12px;

  background: rgba(201, 169, 110, 0.08);

  border: 1px solid rgba(201, 169, 110, 0.3);

  border-radius: 10px;

  padding: 12px 16px;

  margin-bottom: 22px;

}

.bgs-bat-pn-icon {

  font-size: 24px;

  flex-shrink: 0;

}

.bgs-bat-payment-note strong {

  display: block;

  font-size: 15px;

  color: var(--bat-gold);

}

.bgs-bat-payment-note p {

  margin: 2px 0 0 0;

  font-size: 13px;

  color: #d1d5db;

}



/* Submit Button */

.bgs-bat-form-action {

  margin-bottom: 16px;

}

.bgs-bat-submit-btn {

  width: 100%;

  background: var(--bat-gold);

  color: #000000;

  border: none;

  border-radius: 12px;

  padding: 16px 20px;

  font-size: 18px;

  font-weight: 800;

  cursor: pointer;

  box-shadow: 0 8px 25px rgba(201, 169, 110, 0.35);

  transition: all 0.25s ease;

}

.bgs-bat-submit-btn:hover {

  background: var(--bat-gold-hover);

  transform: translateY(-2px);

  box-shadow: 0 10px 30px rgba(201, 169, 110, 0.5);

}



.bgs-bat-feedback {

  margin-bottom: 16px;

  padding: 14px;

  border-radius: 8px;

  font-size: 15px;

  text-align: center;

}

.bgs-bat-feedback.error {

  background: rgba(220, 38, 38, 0.2);

  border: 1px solid #dc2626;

  color: #fca5a5;

}

.bgs-bat-feedback.success {

  background: rgba(16, 185, 129, 0.2);

  border: 1px solid #10b981;

  color: #6ee7b7;

}



.bgs-bat-form-trust {

  display: flex;

  justify-content: space-between;

  font-size: 12px;

  color: var(--bat-text-sub);

  flex-wrap: wrap;

  gap: 8px;

  border-top: 1px dashed rgba(255, 255, 255, 0.1);

  padding-top: 12px;

}



/* 7. Mobile Sticky Bar */

.bgs-bat-mobile-bar {

  display: none;

  position: fixed;

  bottom: 0;

  left: 0;

  right: 0;

  background: rgba(14, 14, 14, 0.95);

  backdrop-filter: blur(10px);

  border-top: 1px solid rgba(255, 255, 255, 0.12);

  padding: 10px 16px;

  z-index: 9999;

  box-shadow: 0 -6px 25px rgba(0,0,0,0.7);

}

@media (max-width: 768px) {

  .bgs-bat-mobile-bar {

    display: block;

  }

}

.bgs-bat-mb-inner {

  display: flex;

  align-items: center;

  justify-content: space-between;

  max-width: 980px;

  margin: 0 auto;

}

.bgs-bat-mb-prod {

  display: flex;

  align-items: center;

  gap: 10px;

}

.bgs-bat-mb-thumb {

  width: 44px;

  height: 44px;

  object-fit: cover;

  border-radius: 6px;

  border: 1px solid #333333;

}

.bgs-bat-mb-info {

  display: flex;

  flex-direction: column;

}

.bgs-bat-mb-name {

  font-size: 13px;

  color: var(--bat-text-sub);

}

.bgs-bat-mb-price {

  font-size: 17px;

  font-weight: 800;

  color: var(--bat-gold);

}

.bgs-bat-mb-btn {

  background: var(--bat-gold);

  color: #000000 !important;

  font-size: 15px;

  font-weight: 800;

  padding: 10px 20px;

  border-radius: 24px;

  text-decoration: none;

  box-shadow: 0 4px 15px rgba(201, 169, 110, 0.4);

}

</style>





<!-- ==========================================================================

     CLIENT JAVASCRIPT: QUANTITY & LIVE DELIVERY CALCULATION & AJAX SUBMIT

     ========================================================================== -->

<script>

document.addEventListener('DOMContentLoaded', function() {



  var unitPrice   = <?php echo floatval( $price ); ?>;

  var currentQty  = 1;

  var deliveryFee = 0;



  var qtyInput    = document.getElementById('bgs-bat-qty');

  var minusBtn    = document.getElementById('bgs-qty-minus');

  var plusBtn     = document.getElementById('bgs-qty-plus');



  var bdSubtotal  = document.getElementById('bgs-bd-subtotal');

  var bdShipping  = document.getElementById('bgs-bd-shipping');

  var bdTotal     = document.getElementById('bgs-bd-total');

  var btnTotal    = document.getElementById('bgs-btn-total');

  var mbPriceVal  = document.getElementById('bgs-mb-price-val');



  var delOptions  = document.querySelectorAll('.bgs-bat-del-option');

  var orderForm   = document.getElementById('bgs-bat-order-form');

  var submitBtn   = document.getElementById('bgs-submit-bat-btn');

  var btnText     = submitBtn ? submitBtn.querySelector('.bgs-bat-btn-text') : null;

  var btnLoader   = submitBtn ? submitBtn.querySelector('.bgs-bat-btn-loader') : null;

  var feedbackEl  = document.getElementById('bgs-bat-feedback');



  function formatMoney(num) {

    return num.toLocaleString('en-US');

  }



  function recalculate() {

    var subtotal = unitPrice * currentQty;

    var total    = subtotal + deliveryFee;



    if (bdSubtotal) bdSubtotal.textContent = formatMoney(subtotal);

    if (bdShipping) bdShipping.textContent = formatMoney(deliveryFee);

    if (bdTotal)    bdTotal.textContent    = formatMoney(total);

    if (btnTotal)   btnTotal.textContent   = formatMoney(total);

    if (mbPriceVal) mbPriceVal.textContent = formatMoney(total);

  }



  // Quantity + / -

  if (minusBtn) {

    minusBtn.addEventListener('click', function() {

      if (currentQty > 1) {

        currentQty--;

        if (qtyInput) qtyInput.value = currentQty;

        recalculate();

      }

    });

  }



  if (plusBtn) {

    plusBtn.addEventListener('click', function() {

      if (currentQty < 10) {

        currentQty++;

        if (qtyInput) qtyInput.value = currentQty;

        recalculate();

      }

    });

  }



  // Delivery Zone Change

  delOptions.forEach(function(opt) {

    opt.addEventListener('click', function() {

      delOptions.forEach(function(o) { o.classList.remove('active'); });

      opt.classList.add('active');



      var radio = opt.querySelector('.bgs-bat-del-radio');

      if (radio) {

        radio.checked = true;

        deliveryFee = 0;

        recalculate();

      }

    });

  });



  // AJAX Checkout Submit

  if (orderForm) {

    orderForm.addEventListener('submit', function(e) {

      e.preventDefault();



      var nameInput    = document.getElementById('bgs_billing_name');

      var phoneInput   = document.getElementById('bgs_billing_phone');

      var addressInput = document.getElementById('bgs_billing_address');



      var name    = nameInput ? nameInput.value.trim() : '';

      var phone   = phoneInput ? phoneInput.value.trim() : '';

      var address = addressInput ? addressInput.value.trim() : '';



      if (!name) {

        showFeedback('অনুগ্রহ করে আপনার পুরো নাম লিখুন।', 'error');

        if (nameInput) nameInput.focus();

        return;

      }

      if (!phone || phone.length < 11) {

        showFeedback('অনুগ্রহ করে সঠিক ১১ ডিজিটের মোবাইল নম্বর প্রদান করুন।', 'error');

        if (phoneInput) phoneInput.focus();

        return;

      }

      if (!address) {

        showFeedback('অনুগ্রহ করে ডেলিভারির সম্পূর্ণ ঠিকানা লিখুন।', 'error');

        if (addressInput) addressInput.focus();

        return;

      }



      var formData = new FormData(orderForm);

      formData.set('qty', currentQty);

      formData.set('quantity', currentQty);

      formData.set('customer_name', name);

      formData.set('customer_phone', phone);

      formData.set('customer_address', address);

      formData.set('level_price', unitPrice);



      var selRadio = document.querySelector('input[name="delivery_zone"]:checked');

      var zone = selRadio ? selRadio.value : 'inside_dhaka';

      formData.set('delivery_zone', zone);



      // Loading state

      if (submitBtn) submitBtn.disabled = true;

      if (btnText) btnText.style.display = 'none';

      if (btnLoader) btnLoader.style.display = 'inline-block';

      hideFeedback();



      var ajaxUrl = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';



      fetch(ajaxUrl, {

        method: 'POST',

        body: formData

      })

      .then(function(res) { return res.json(); })

      .then(function(data) {

        if (data.success && data.data && data.data.redirect_url) {

          showFeedback('আপনার অর্ডার সফলভাবে সম্পন্ন হয়েছে! রিডাইরেক্ট করা হচ্ছে...', 'success');

          setTimeout(function() {

            window.location.href = data.data.redirect_url;

          }, 600);

        } else {

          var msg = (data.data && data.data.message) ? data.data.message : 'অর্ডার করতে সমস্যা হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন।';

          showFeedback(msg, 'error');

          resetSubmitBtn();

        }

      })

      .catch(function() {

        showFeedback('সার্ভার সংযোগে সমস্যা হয়েছে। অনুগ্রহ করে সরাসরি কল বা হোয়াটসঅ্যাপে যোগাযোগ করুন।', 'error');

        resetSubmitBtn();

      });



    });

  }



  function resetSubmitBtn() {

    if (submitBtn) submitBtn.disabled = false;

    if (btnText) btnText.style.display = 'inline-block';

    if (btnLoader) btnLoader.style.display = 'none';

  }



  function showFeedback(msg, type) {

    if (!feedbackEl) return;

    feedbackEl.textContent = msg;

    feedbackEl.className = 'bgs-bat-feedback ' + type;

    feedbackEl.style.display = 'block';

  }



  function hideFeedback() {

    if (!feedbackEl) return;

    feedbackEl.style.display = 'none';

  }



});

</script>

