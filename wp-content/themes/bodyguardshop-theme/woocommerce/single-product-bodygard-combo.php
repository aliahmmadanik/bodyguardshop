<?php
/**
 * WooCommerce Single Product Template: Bodyguard Combo (7-in-1 Defense Kit)
 * Theme: Bodyguard Shop — High-Converting Luxury Defense Landing Page
 * Wireframe Reference: Google Doc 1Ig6GqoyPrR4tyKLjLjKwc57bcDKWv0CxGcJ8IR2FHPo
 * Sales Video: https://youtu.be/olvw4VShX-4
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$pid           = get_the_ID();
$product       = wc_get_product( $pid );
$product_title = $product ? $product->get_title() : 'Bodyguard Combo';
$price         = $product ? floatval( $product->get_price() ) : 2990;
$reg_price     = $product && $product->get_regular_price() ? floatval( $product->get_regular_price() ) : 4500;
if ( $price <= 0 ) $price = 2990;
if ( $reg_price <= 0 ) $reg_price = 4500;
$save_amount   = max( 0, $reg_price - $price );
$discount_pct  = $reg_price > 0 ? round( ( $save_amount / $reg_price ) * 100 ) : 34;

// Video Embed
$video_embed_url = 'https://www.youtube.com/embed/olvw4VShX-4?rel=0&modestbranding=1&playsinline=1';

$upload_base = get_template_directory_uri() . '/assets/images/combo/';
?>

<main id="bgs-product-landing" class="bgs-single-landing bgs-combo-landing">

  <!-- ==========================================================================
       1. HERO HEADLINE & PSYCHOLOGICAL HOOK (FROM GOOGLE DOC)
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
       2. SALES VIDEO SECTION (FROM GOOGLE DOC DRAWING)
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
            title="Bodyguard Combo — Sales Video"
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
          <span class="bgs-vb-text">৭টি প্রয়োজনীয় টুলস একসাথে</span>
        </div>
        <div class="bgs-vbadge">
          <span class="bgs-vb-icon">⚡</span>
          <span class="bgs-vb-text">তাৎক্ষণিক কার্যকর (Instant Action)</span>
        </div>
        <div class="bgs-vbadge">
          <span class="bgs-vb-icon">🔒</span>
          <span class="bgs-vb-text">১০০% আসল ও নির্ভরযোগ্য</span>
        </div>
      </div>

      <!-- Order Now CTA Button under video (From Google Doc) -->
      <div class="bgs-hero-cta-wrap">
        <a href="#bgs-order-form" class="bgs-order-btn bgs-glow-pulse">
          Order now ⚡
        </a>
      </div>

    </div>
  </section>



  <!-- ==========================================================================
       3. 7-IN-1 COMBO PRODUCT & USES IMAGE SLIDER (FROM GOOGLE DOC)
       ========================================================================== -->
  <section class="bgs-slider-section" id="combo-tools">
    <div class="container">

      <div class="bgs-section-header">
        <span class="bgs-sec-pill">ALL-IN-ONE DEFENSE KIT</span>
        <h2 class="bgs-sec-heading">কম্বো কিটের ৭টি শক্তিশালী সেলফ-ডিফেন্স টুলস ও তাদের ব্যবহার</h2>
        <div class="bgs-gold-divider"></div>
        <p class="bgs-sec-desc-lead">যেকোনো মুহূর্তে নিজেকে ও পরিবারকে নিরাপদ রাখতে কমপ্যাক্ট ৭টি গ্যাজেট</p>
      </div>

      <!-- Quick Nav Tabs -->
      <div class="bgs-slider-nav-tabs" id="bgsSliderTabs">
        <button type="button" class="bgs-tab-btn active" data-slide="0">১. পেপার স্প্রে</button>
        <button type="button" class="bgs-tab-btn" data-slide="1">২. ট্যাকটিক্যাল টর্চ</button>
        <button type="button" class="bgs-tab-btn" data-slide="2">৩. সাইরেন অ্যালার্ম</button>
        <button type="button" class="bgs-tab-btn" data-slide="3">৪. পেন নাইফ</button>
        <button type="button" class="bgs-tab-btn" data-slide="4">৫. সুইস নাইফ</button>
        <button type="button" class="bgs-tab-btn" data-slide="5">৬. কার সেফটি টুল</button>
        <button type="button" class="bgs-tab-btn" data-slide="6">৭. ওয়্যার স কাটার</button>
      </div>

      <!-- Slider Wrapper -->
      <div class="bgs-slider-card-box">
        <button type="button" class="bgs-slider-arrow bgs-prev-arrow" id="bgsPrevSlide" aria-label="Previous Slide">‹</button>
        <button type="button" class="bgs-slider-arrow bgs-next-arrow" id="bgsNextSlide" aria-label="Next Slide">›</button>

        <div class="bgs-slides-track" id="bgsSlidesTrack">

          <!-- Slide 1: Pepper Spray -->
          <div class="bgs-slide-item active" data-index="0">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-01-pepper-spray.jpg' ); ?>" alt="Bodyguard Tactical Pepper Spray" loading="lazy">
                <div class="bgs-tool-floating-emblem">🌶️</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০১ / ০৭</span>
                <h3 class="bgs-tool-name">বডিগার্ড ট্যাকটিক্যাল পেপার স্প্রে (Pepper Spray 20ml)</h3>
                <p class="bgs-tool-use">
                  ছিনতাইকারী বা আক্রমণকারীর চোখে-মুখে স্প্রে করলে মুহূর্তের মধ্যে তীব্র জ্বালাপোড়ায় চোখ বন্ধ হয়ে যায় এবং শ্বাসকষ্ট তৈরি হয়। আক্রমণকারী ১৫ থেকে ৩০ মিনিটের জন্য সম্পূর্ণ নিস্তেজ হয়ে পড়ে, ফলে আপনি নিরাপদ স্থানে সরে যাওয়ার পর্যাপ্ত সময় পাবেন।
                </p>
                <div class="bgs-tool-highlights">
                  <div class="bgs-th-point">✓ ১২ ফুট নিরাপদ লং-স্প্রে রেঞ্জ (Safe Distance Range)</div>
                  <div class="bgs-th-point">✓ শক্তিশালী ২০ মিলি ফর্মুলা — ৫ থেকে ৬ জন আক্রমণকারীকে নিস্তেজ করে</div>
                  <div class="bgs-th-point">✓ চোখে তীব্র জ্বালা, কফ ও সাময়িক অন্ধত্ব তৈরি করে আত্মরক্ষার সুযোগ দেয়</div>
                  <div class="bgs-th-point">✓ চাবির রিং সহ যেকোনো সময় পকেটে বা ভ্যানিটি ব্যাগে রাখা যায়</div>
                </div>
                <div class="bgs-use-situation">
                  🛡️ <strong>কখন ব্যবহার করবেন:</strong> রাতে নির্জন রাস্তায় ছিনতাইকারী, ইভটিজার বা দুর্বৃত্ত সামনে এলে।
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2: Tactical Flashlight -->
          <div class="bgs-slide-item" data-index="1">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-02-tactical-flashlight.jpg' ); ?>" alt="High-Beam Tactical Flashlight & COB Work Light" loading="lazy">
                <div class="bgs-tool-floating-emblem">🔦</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০২ / ০৭</span>
                <h3 class="bgs-tool-name">হাই-বিম ট্যাকটিক্যাল ফ্ল্যাশলাইট ও COB ওয়ার্ক লাইট (0.5 KM Beam)</h3>
                <p class="bgs-tool-use">
                  আক্রমণকারীর চোখে সরাসরি এর হাই-পাওয়ার বিম ফেললে সাময়িক অন্ধত্ব (Flash Blindness) তৈরি হয় এবং অপরাধী পথ হারিয়ে ফেলে। দূরপাল্লার পথ দেখার পাশাপাশি সাইডে থাকা ডুয়াল-টোন COB লাইট দিয়ে অন্ধকার ঘরে বা ক্যাম্পিংয়ে উজ্জ্বল আলো পাওয়া যায়।
                </p>
                <div class="bgs-tool-highlights">
                  <div class="bgs-th-point">✓ ৫০০ মিটার (০.৫ কিমি) আল্ট্রা লং-রেঞ্জ প্রিসিশন রিফ্লেক্টর বিম</div>
                  <div class="bgs-th-point">✓ সাইড ডুয়াল-টোন (হোয়াইট ও ইয়েলো) হাই-লুমেন COB লাইট</div>
                  <div class="bgs-th-point">✓ টাইপ-সি (USB-C) ফাস্ট রিচার্জেবল পোর্ট (ব্যাটারির বাড়তি খরচ নেই)</div>
                  <div class="bgs-th-point">✓ এরগোনোমিক নন-স্লিপ গ্রিপ ও মেটাল চাবি রিং ক্লিপ</div>
                </div>
                <div class="bgs-use-situation">
                  🛡️ <strong>কখন ব্যবহার করবেন:</strong> রাতে লোডশেডিংয়ে, নির্জন রাস্তায় আলো ও আক্রমণকারীকে অন্ধ করতে।
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3: Personal Alarm -->
          <div class="bgs-slide-item" data-index="2">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-03-siren-alarm.jpg' ); ?>" alt="Personal Defense Siren Alarm" loading="lazy">
                <div class="bgs-tool-floating-emblem">🚨</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০৩ / ০৭</span>
                <h3 class="bgs-tool-name">১৩০ ডেসিবেল পার্সোনাল সাইরেন অ্যালার্ম সিস্টেম (Panic Siren)</h3>
                <p class="bgs-tool-use">
                  বিপদের মুখে পড়লে শুধু এর পিনটি টেনে বের করলেই সাথে সাথে ১৩০ ডেসিবেলের কানফাটানো ডুয়াল-টোন সাইরেন বাজতে শুরু করবে। এই তীব্র আওয়াজ শত শত ফুট দূর পর্যন্ত ছড়িয়ে পড়ে আশপাশের মানুষের সাহায্য আকর্ষণ করে এবং দুর্বৃত্ত অপ্রস্তুত হয়ে দৌড়ে পালায়।
                </p>
                <div class="bgs-tool-highlights">
                  <div class="bgs-th-point">✓ ১৩০ ডেসিবেল বিকট ডুয়াল-টোন হাই-ফ্রিকোয়েন্সি সাইরেন</div>
                  <div class="bgs-th-point">✓ সহজে পুল-পিন অ্যাক্টিভেশন (বাচ্চা ও নারীদের জন্য ১ সেকেন্ডেই সক্রিয়)</div>
                  <div class="bgs-th-point">✓ অতিরিক্ত পুশ এমার্জেন্সি অ্যাক্টিভেশন বাটন ও নন-স্লিপ টেক্সচার</div>
                  <div class="bgs-th-point">✓ চাবির রিং বা ব্যাগের সাথে সার্বক্ষণিক ঝুলিয়ে রাখা যায়</div>
                </div>
                <div class="bgs-use-situation">
                  🛡️ <strong>কখন ব্যবহার করবেন:</strong> অপহরণের চেষ্টা, রাস্তায় ধাওয়া বা বিপদে মানুষের মনোযোগ আকর্ষণে।
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 4: Tactical Pen Knife -->
          <div class="bgs-slide-item" data-index="3">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-04-tactical-pen-knife.jpg' ); ?>" alt="Stainless Steel Concealed Tactical Pen Knife" loading="lazy">
                <div class="bgs-tool-floating-emblem">🖊️</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০৪ / ০৭</span>
                <h3 class="bgs-tool-name">স্টেইনলেস স্টিল কনসিলড ট্যাকটিক্যাল পেন নাইফ (Pen Knife)</h3>
                <p class="bgs-tool-use">
                  বাইরে থেকে মার্জিত এক্সিকিউটিভ অফিস বলপেনের মতো দেখতে হলেও এটি প্রিমিয়াম স্টেইনলেস স্টিল দিয়ে তৈরি। এর ভেতরে লুকানো রয়েছে অত্যন্ত ধারালো স্টিল ব্লেড। আক্রমণকারীর হাত ছাড়াতে বা প্রেশার পয়েন্টে আঘাত করার জন্য এটি অত্যন্ত কার্যকর।
                </p>
                <div class="bgs-tool-highlights">
                  <div class="bgs-th-point">✓ প্রিমিয়াম মরিচারোধী সলিড স্টেইনলেস স্টিল বডি</div>
                  <div class="bgs-th-point">✓ এক্সিকিউটিভ কলমের ভেতরে সম্পূর্ণ গোপন ধারালো নাইফ</div>
                  <div class="bgs-th-point">✓ ক্লোজ-কোয়ার্টার সেলফ ডিফেন্সে আত্মরক্ষার সুযোগ</div>
                  <div class="bgs-th-point">✓ পকেট বা শার্টের কলমদানিতে সাধারণ বলপেনের মতো বহনযোগ্য</div>
                </div>
                <div class="bgs-use-situation">
                  🛡️ <strong>কখন ব্যবহার করবেন:</strong> হঠাৎ কেউ চেপে ধরলে বা ক্লোজ-রেঞ্জ আত্মরক্ষার চরম মুহূর্তে।
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 5: Swiss Knife -->
          <div class="bgs-slide-item" data-index="4">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-05-swiss-knife.jpg' ); ?>" alt="Multi-Tool Swiss Style Folding Knife" loading="lazy">
                <div class="bgs-tool-floating-emblem">🔪</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০৫ / ০৭</span>
                <h3 class="bgs-tool-name">মাল্টি-ফাংশন রেড সুইস-স্টাইল ফোল্ডিং নাইফ (Multi-Tool)</h3>
                <p class="bgs-tool-use">
                  স্টেইনলেস স্টিল দিয়ে তৈরি এই কমপ্যাক্ট মাল্টি-টুল ফোল্ডিং নাইফে রয়েছে বড় ব্লেড, ছোট ব্লেড, কাঠ কাটার করাত (Wood Saw), কাঁচি, ক্যান ও বোতল ওপেনার এবং স্লটেড স্ক্রু-ড্রাইভার। বিপদাপদ ছাড়াও দৈনন্দিন জীবন ও ভ্রমণে এটি একটি অপরিহার্য পকেট ইউটিলিটি।
                </p>
                <div class="bgs-tool-highlights">
                  <div class="bgs-th-point">✓ স্মল ব্লেড ও লার্জ ব্লেড — কাটিং ও আত্মরক্ষায়</div>
                  <div class="bgs-th-point">✓ ফোল্ডিং উড স (Wood Saw) ও ধারালো কাঁচি (Scissors)</div>
                  <div class="bgs-th-point">✓ স্ক্রু-ড্রাইভার ও ক্যান/বোতল ওপেনার সহ মাল্টি-ইউটিলিটি</div>
                  <div class="bgs-th-point">✓ স্টেইনলেস স্টিল ও মজবুত কি-রিং অ্যাটাচমেন্ট</div>
                </div>
                <div class="bgs-use-situation">
                  🛡️ <strong>কখন ব্যবহার করবেন:</strong> রশি, কাপড় বা কোনো বাধা কাটা এবং জরুরি সার্ভাইভাল প্রয়োজনে।
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 6: Car Emergency Tool -->
          <div class="bgs-slide-item" data-index="5">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-06-emergency-cutter-breaker.jpg' ); ?>" alt="3-in-1 Emergency Glass Breaker & Seatbelt Cutter" loading="lazy">
                <div class="bgs-tool-floating-emblem">🔨</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০৬ / ০৭</span>
                <h3 class="bgs-tool-name">৩-ইন-১ ইমার্জেন্সি সেফটি টুল (Glass Breaker & Cutter)</h3>
                <p class="bgs-tool-use">
                  গাড়ি দুর্ঘটনার শিকার হলে, লক আটকে গেলে বা পানিতে পড়ার মতো ভয়াবহ পরিস্থিতিতে সিটবেল্ট কেটে ফেলা এবং মাত্র ১ ক্লিকে মেটাল হেড দিয়ে গাড়ির শক্ত কাঁচ গুঁড়ো করে অক্ষত অবস্থায় পরিবারসহ বের হয়ে আসার জন্য বিশ্বের অন্যতম নির্ভরযোগ্য লাইফ-সেভার।
                </p>
                <div class="bgs-tool-highlights">
                  <div class="bgs-th-point">✓ ১. হার্ডেন্ড মেটাল গ্লাস ব্রেকার (Glass Breaker) — গাড়ির জানালার শক্ত কাঁচ ভাঙতে</div>
                  <div class="bgs-th-point">✓ ২. রেজর-শার্প সিটবেল্ট কাটার (Seatbelt Cutter) — জ্যাম হওয়া বেল্ট এক টানে কাটতে</div>
                  <div class="bgs-th-point">✓ ৩. লাউড এমার্জেন্সি হুইসেল (Whistle) — সাহায্য ডাকার জন্য উচ্চ শব্দের বাঁশি</div>
                  <div class="bgs-th-point">✓ গাড়ির চাবির রিংয়ে সবসময় সাথে রাখার মতো কমপ্যাক্ট লাইফ সেভার</div>
                </div>
                <div class="bgs-use-situation">
                  🛡️ <strong>কখন ব্যবহার করবেন:</strong> গাড়িতে অগ্নিকাণ্ড, অ্যাক্সিডেন্ট বা জ্যামে ডোর লক হয়ে আটকা পড়লে।
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 7: Wire Saw Keychain -->
          <div class="bgs-slide-item" data-index="6">
            <div class="bgs-slide-grid">
              <div class="bgs-slide-visual">
                <img src="<?php echo esc_url( $upload_base . 'combo-tool-07-wire-saw-keychain.jpg' ); ?>" alt="Emergency & Outdoor Wire Saw Keychain" loading="lazy">
                <div class="bgs-tool-floating-emblem">⛓️</div>
              </div>
              <div class="bgs-slide-content">
                <span class="bgs-tool-seq">টুল ০৭ / ০৭</span>
                <h3 class="bgs-tool-name">মিলিটারি গ্রেড ওয়্যার স চাবির রিং (Wire Saw Keychain)</h3>
                <p class="bgs-tool-use">
                  মাল্টি-স্ট্র্যান্ড টুইস্টেড স্টেইনলেস স্টিল দিয়ে তৈরি এই ওয়্যার স দিয়ে কাঠ, প্লাস্টিক, দড়ি বা বাধা মুহূর্তেই কেটে ফেলা যায়। দুই প্রান্তের শক্ত কি-রিং আঙুলে বা যেকোনো শক্ত হ্যান্ডেলে আটকে সহজে অপারেট করা যায়। জরুরি ইমার্জেন্সি এসকেপ ও সার্ভাইভাল প্রয়োজনে এটি একটি অনন্য টুল।
                </p>
                <div class="bgs-tool-highlights">
                  <div class="bgs-th-point">✓ মাল্টি-লেয়ার ব্রেডেড প্রিমিয়াম স্টেইনলেস স্টিল ওয়্যার</div>
                  <div class="bgs-th-point">✓ কাঠ, মেটাল, প্লাস্টিক ও দড়ি কাটার সার্ভাইভাল ক্ষমতা</div>
                  <div class="bgs-th-point">✓ লাইটওয়েট ও ফ্লেক্সিবল — যেকোনো চাবির রিংয়ে সবসময় সাথে রাখা যায়</div>
                  <div class="bgs-th-point">✓ ক্যাম্পিং, ট্রাভেল ও ইমার্জেন্সি এসকেপ সিচুয়েশনে অপরিহার্য</div>
                </div>
                <div class="bgs-use-situation">
                  🛡️ <strong>কখন ব্যবহার করবেন:</strong> জরুরি মুহূর্তে বাধা কাটা, আউটডোর সার্ভাইভাল ও ইমার্জেন্সি এসকেপে।
                </div>
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
       4. EMOTIONAL PERSUASION & THREAT AWARENESS (FROM GOOGLE DOC)
       ========================================================================== -->
  <section class="bgs-awareness-section">
    <div class="container bgs-narrow-container">

      <!-- Emotional Lead Text (Exact copy from Google Doc) -->
      <div class="bgs-awareness-intro-box">
        <h3 class="bgs-intro-lead">
          আজ ২,৯৯০ টাকা খরচ করতে হয়তো একটু বেশি মনে হতে পারে।
        </h3>
        <p class="bgs-intro-sub">
          কিন্তু ভাবুন তো—
        </p>
      </div>

      <!-- 5 Threat Situations Grid (From Google Doc) -->
      <div class="bgs-threat-grid">
        <div class="bgs-threat-card">
          <div class="bgs-tc-icon">🚨</div>
          <div class="bgs-tc-text">হঠাৎ ছিনতাই।</div>
        </div>

        <div class="bgs-threat-card">
          <div class="bgs-tc-icon">⚔️</div>
          <div class="bgs-tc-text">রাস্তায় হামলা।</div>
        </div>

        <div class="bgs-threat-card">
          <div class="bgs-tc-icon">🚗</div>
          <div class="bgs-tc-text">জোর করে গাড়িতে তুলে নেওয়ার চেষ্টা।</div>
        </div>

        <div class="bgs-threat-card">
          <div class="bgs-tc-icon">🏠</div>
          <div class="bgs-tc-text">বাড়িতে ডাকাতের আক্রমণ।</div>
        </div>

        <div class="bgs-threat-card bgs-threat-card-highlight">
          <div class="bgs-tc-icon">💔</div>
          <div class="bgs-tc-text">অথবা আপনার প্রিয় মানুষটি বিপদে পড়েছে—আর আপনি কিছুই করতে পারছেন না।</div>
        </div>
      </div>

      <!-- Concluding Persuasion (Exact copy from Google Doc) -->
      <div class="bgs-awareness-conclusion-card">
        <p class="bgs-concl-p1">
          বিপদ কখন, কোথা থেকে আসবে—কেউ জানে না।
        </p>
        <p class="bgs-concl-p2">
          তাই বিপদ আসার পর নয়, বিপদ আসার আগেই প্রস্তুত থাকুন।
        </p>
        <div class="bgs-gold-accent-line"></div>
        <h4 class="bgs-concl-highlight">
          মাত্র ২,৯৯০ টাকায় একসাথে একাধিক প্রয়োজনীয় Self-Defense Safety Tools।
        </h4>

        <div class="bgs-cta-mid-wrap">
          <a href="#bgs-order-form" class="bgs-order-btn bgs-glow-pulse">
            Order now ⚡
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- ==========================================================================
       5. DIRECT CASH ON DELIVERY CHECKOUT FORM
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
            <img src="<?php echo esc_url( $upload_base . 'bodyguard-combo-7in1-kit.jpg' ); ?>" alt="Bodyguard Combo Kit">
          </div>
          <div class="bgs-sp-info">
            <span class="bgs-sp-badge">🔥 LIMITED OFFER — <?php echo esc_html( $discount_pct ); ?>% OFF</span>
            <h4 class="bgs-sp-title"><?php echo esc_html( $product_title ); ?></h4>
            <div class="bgs-sp-price-row">
              <span class="bgs-sp-sale-price">৳ <span id="bgs-unit-price-display"><?php echo number_format( $price ); ?></span></span>
              <span class="bgs-sp-reg-price">৳ <span id="bgs-unit-reg-display"><?php echo number_format( $reg_price ); ?></span></span>
              <span class="bgs-sp-save-tag">সাশ্রয় ৳ <?php echo number_format( $save_amount ); ?></span>
            </div>
            <p class="bgs-sp-desc">৭টি শক্তিশালী সেলফ-ডিফেন্স সেফটি টুলস একসাথে সম্পূর্ণ কিট।</p>
          </div>
        </div>

        <!-- Order Form Form -->
        <form id="bgs-direct-order-form" class="bgs-order-form" novalidate>
          <input type="hidden" name="action" value="bgs_direct_checkout">
          <input type="hidden" name="product_id" value="<?php echo esc_attr( $pid ); ?>">
          <input type="hidden" id="bgs-selected-level-input" name="selected_level" value="Bodyguard Combo (7-in-1)">

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

          <!-- Delivery Location Radio -->
          <div class="bgs-form-row">
            <label class="bgs-form-label">
              ডেলিভারি লোকেশন সিলেক্ট করুন:
            </label>
            <div class="bgs-delivery-options">
              <label class="bgs-del-option active">
                <input type="radio" name="delivery_location" value="inside_dhaka" checked>
                <div class="bgs-del-content">
                  <span class="bgs-del-title">ঢাকার ভিতরে</span>
                  <span class="bgs-del-fee">৳ ৬০</span>
                </div>
              </label>
              <label class="bgs-del-option">
                <input type="radio" name="delivery_location" value="outside_dhaka">
                <div class="bgs-del-content">
                  <span class="bgs-del-title">ঢাকার বাইরে</span>
                  <span class="bgs-del-fee">৳ ১২০</span>
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
              <span>৳ <span id="bgs-delivery-display">60</span></span>
            </div>
            <div class="bgs-pb-divider"></div>
            <div class="bgs-pb-row bgs-pb-total">
              <strong>সর্বমোট প্রদেয়:</strong>
              <strong class="bgs-gold-total">৳ <span id="bgs-total-display"><?php echo number_format( $price + 60 ); ?></span></strong>
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
                অর্ডার কনফার্ম করুন — ৳ <span id="bgs-btn-total-display"><?php echo number_format( $price + 60 ); ?></span> (ক্যাশ অন ডেলিভারি) ⚡
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


  <!-- ==========================================================================
       6. MOBILE FLOATING STICKY ORDER BAR
       ========================================================================== -->
  <div class="bgs-mobile-sticky-bar">
    <div class="bgs-sticky-inner">
      <div class="bgs-sticky-product-box">
        <img src="<?php echo esc_url( $upload_base . 'bodyguard-combo-7in1-kit.jpg' ); ?>" alt="Bodyguard Combo" class="bgs-sticky-thumb">
        <div class="bgs-sticky-info">
          <span class="bgs-sticky-name">Bodyguard Combo</span>
          <span class="bgs-sticky-price">৳ <?php echo number_format( $price ); ?></span>
        </div>
      </div>
      <a href="#bgs-order-form" class="bgs-sticky-btn">
        Order now ⚡
      </a>
    </div>
  </div>

</main>


<!-- ==========================================================================
     INLINE STYLES FOR BODYGUARD COMBO LANDING PAGE
     ========================================================================== -->
<style>
:root {
  --bgs-gold: #C9A96E;
  --bgs-gold-hover: #DFBF82;
  --bgs-gold-dark: #A88742;
  --bgs-dark: #0A0A0A;
  --bgs-dark-surface: #141414;
  --bgs-card-bg: #111111;
  --bgs-card-border: #222222;
  --bgs-text: #FFFFFF;
  --bgs-muted: #9CA3AF;
  --bgs-red: #DC2626;
  --bgs-green: #10B981;
}

body {
  background: var(--bgs-dark);
  color: var(--bgs-text);
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  overflow-x: hidden;
}

.bgs-single-landing {
  background: var(--bgs-dark);
  color: var(--bgs-text);
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
  padding: 0 16px;
}

/* 1. Hero Headline */
.bgs-hook-section {
  padding: 65px 20px 35px;
  text-align: center;
}
.bgs-hook-title,
.bgs-hook-h1 {
  font-size: clamp(1.35rem, 2.7vw, 2.35rem);
  font-weight: 800;
  line-height: 1.35;
  color: #FFFFFF;
  margin: 0 auto 14px;
  text-wrap: balance;
}
.bgs-hook-h2 {
  font-size: clamp(1.1rem, 2.1vw, 1.65rem);
  font-weight: 700;
  line-height: 1.4;
  color: var(--bgs-gold);
  margin: 0 auto;
  text-wrap: balance;
}
@media (min-width: 880px) {
  .bgs-hook-h1,
  .bgs-hook-h2 {
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

.bgs-video-badges-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
  max-width: 820px;
  margin: 0 auto 30px;
}
.bgs-vbadge {
  background: var(--bgs-dark-surface);
  border: 1px solid var(--bgs-card-border);
  padding: 12px 14px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  font-size: 0.92rem;
  color: #E5E7EB;
}
.bgs-vb-icon {
  font-size: 1.25rem;
}

.bgs-hero-cta-wrap {
  text-align: center;
  margin: 20px 0 10px;
}
.bgs-order-btn {
  display: inline-block;
  background: linear-gradient(135deg, var(--bgs-gold) 0%, var(--bgs-gold-dark) 100%);
  color: #000000 !important;
  font-weight: 800;
  font-size: 1.35rem;
  padding: 18px 46px;
  border-radius: 50px;
  text-decoration: none !important;
  text-transform: uppercase;
  letter-spacing: 1px;
  box-shadow: 0 10px 30px rgba(201, 169, 110, 0.4);
  transition: all 0.3s ease;
}
.bgs-order-btn:hover {
  background: linear-gradient(135deg, var(--bgs-gold-hover) 0%, var(--bgs-gold) 100%);
  transform: translateY(-3px);
  box-shadow: 0 16px 40px rgba(201, 169, 110, 0.6);
}
.bgs-glow-pulse {
  animation: bgsPulse 2.4s infinite;
}
@keyframes bgsPulse {
  0% { box-shadow: 0 0 0 0 rgba(201, 169, 110, 0.6); }
  70% { box-shadow: 0 0 0 18px rgba(201, 169, 110, 0); }
  100% { box-shadow: 0 0 0 0 rgba(201, 169, 110, 0); }
}

/* 3. 7-in-1 Combo Slider */
.bgs-slider-section {
  padding: 60px 20px;
  background: #0D0D0D;
  border-top: 1px solid rgba(201, 169, 110, 0.15);
  border-bottom: 1px solid rgba(201, 169, 110, 0.15);
}
.bgs-section-header {
  text-align: center;
  margin-bottom: 35px;
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
  margin-bottom: 14px;
}
.bgs-sec-heading {
  font-size: clamp(1.5rem, 3vw, 2.3rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 12px;
}
.bgs-gold-divider {
  width: 60px;
  height: 3px;
  background: var(--bgs-gold);
  margin: 0 auto 16px;
  border-radius: 2px;
}
.bgs-sec-desc-lead {
  color: var(--bgs-muted);
  font-size: 1.05rem;
  margin: 0;
}

.bgs-slider-nav-tabs {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 8px;
  max-width: 960px;
  margin: 0 auto 30px;
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
  background: rgba(0, 0, 0, 0.7);
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
  min-height: 400px;
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
  gap: 36px;
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
  font-size: clamp(1.25rem, 2.2vw, 1.7rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 14px;
  line-height: 1.35;
}
.bgs-tool-use {
  font-size: 0.98rem;
  color: #D1D5DB;
  line-height: 1.65;
  margin-bottom: 18px;
}
.bgs-tool-highlights {
  display: flex;
  flex-direction: column;
  gap: 8px;
  margin-bottom: 20px;
}
.bgs-th-point {
  font-size: 0.9rem;
  color: #E5E7EB;
  font-weight: 600;
}
.bgs-use-situation {
  background: rgba(220, 38, 38, 0.12);
  border-left: 3px solid var(--bgs-red);
  padding: 10px 14px;
  border-radius: 4px;
  font-size: 0.88rem;
  color: #FCA5A5;
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

/* 4. Threat Awareness & Persuasion Section */
.bgs-awareness-section {
  padding: 70px 20px;
  background: var(--bgs-dark);
}
.bgs-awareness-intro-box {
  text-align: center;
  margin-bottom: 40px;
}
.bgs-intro-lead {
  font-size: clamp(1.4rem, 2.6vw, 2.1rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 12px;
  line-height: 1.4;
}
.bgs-intro-sub {
  font-size: clamp(1.2rem, 2vw, 1.55rem);
  color: var(--bgs-gold);
  font-weight: 700;
  margin: 0;
}

.bgs-threat-grid {
  display: flex;
  flex-direction: column;
  gap: 14px;
  max-width: 760px;
  margin: 0 auto 40px;
}
.bgs-threat-card {
  background: var(--bgs-card-bg);
  border: 1px solid var(--bgs-card-border);
  border-radius: 12px;
  padding: 16px 20px;
  display: flex;
  align-items: center;
  gap: 16px;
  transition: transform 0.25s ease, border-color 0.25s ease;
}
.bgs-threat-card:hover {
  transform: translateX(4px);
  border-color: rgba(220, 38, 38, 0.5);
}
.bgs-threat-card-highlight {
  background: linear-gradient(135deg, rgba(220, 38, 38, 0.15) 0%, rgba(185, 28, 28, 0.05) 100%);
  border-color: rgba(220, 38, 38, 0.4);
}
.bgs-tc-icon {
  font-size: 1.6rem;
  flex-shrink: 0;
}
.bgs-tc-text {
  font-size: 1.08rem;
  font-weight: 600;
  color: #F3F4F6;
  line-height: 1.5;
}

.bgs-awareness-conclusion-card {
  background: linear-gradient(135deg, #1C150C 0%, #151109 100%);
  border: 1.5px solid var(--bgs-gold);
  border-radius: 16px;
  padding: 40px 30px;
  text-align: center;
  max-width: 760px;
  margin: 0 auto;
  box-shadow: 0 16px 50px rgba(0, 0, 0, 0.6);
}
.bgs-concl-p1 {
  font-size: clamp(1.2rem, 2.3vw, 1.6rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 10px;
}
.bgs-concl-p2 {
  font-size: clamp(1.05rem, 2vw, 1.35rem);
  color: #E5E7EB;
  margin: 0 0 20px;
}
.bgs-gold-accent-line {
  width: 60px;
  height: 3px;
  background: var(--bgs-gold);
  margin: 0 auto 20px;
  border-radius: 2px;
}
.bgs-concl-highlight {
  font-size: clamp(1.15rem, 2.2vw, 1.5rem);
  font-weight: 800;
  color: var(--bgs-gold);
  margin: 0 0 26px;
  line-height: 1.4;
}
.bgs-cta-mid-wrap {
  margin-top: 10px;
}

/* 5. Checkout Form */
.bgs-checkout-section {
  padding: 60px 20px 80px;
  background: #0E0E0E;
}
.bgs-checkout-form-card {
  background: var(--bgs-card-bg);
  border: 1.5px solid var(--bgs-gold);
  border-radius: 20px;
  padding: 36px 30px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.8), 0 0 35px rgba(201, 169, 110, 0.15);
}

.bgs-selected-package-box {
  display: flex;
  gap: 20px;
  background: var(--bgs-dark-surface);
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
  font-size: 1.15rem;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 6px;
}
.bgs-sp-price-row {
  display: flex;
  align-items: baseline;
  gap: 10px;
  margin-bottom: 4px;
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
  background: var(--bgs-dark-surface);
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
  grid-template-columns: 1fr 1fr;
  gap: 14px;
}
.bgs-del-option {
  position: relative;
  background: var(--bgs-dark-surface);
  border: 1.5px solid var(--bgs-card-border);
  border-radius: 10px;
  padding: 14px;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 12px;
  transition: all 0.25s ease;
}
.bgs-del-option input[type="radio"] {
  accent-color: var(--bgs-gold);
  width: 18px;
  height: 18px;
}
.bgs-del-option.active {
  border-color: var(--bgs-gold);
  background: rgba(201, 169, 110, 0.1);
}
.bgs-del-content {
  display: flex;
  justify-content: space-between;
  width: 100%;
  font-size: 0.95rem;
  font-weight: 600;
  color: #FFFFFF;
}
.bgs-del-fee {
  color: var(--bgs-gold);
  font-weight: 800;
}

.bgs-price-breakdown {
  background: var(--bgs-dark-surface);
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
  background: var(--bgs-dark-surface);
  border: 1.5px solid #2A2A2A;
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
  background: #181818;
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
  font-size: 1.25rem;
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
  box-shadow: 0 14px 40px rgba(201, 169, 110, 0.6);
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

/* 6. Mobile Sticky Bar */
.bgs-mobile-sticky-bar {
  display: none;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(15, 15, 15, 0.95);
  backdrop-filter: blur(10px);
  border-top: 1.5px solid var(--bgs-gold);
  padding: 10px 16px;
  z-index: 9999;
  box-shadow: 0 -8px 24px rgba(0, 0, 0, 0.7);
}
.bgs-sticky-inner {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 600px;
  margin: 0 auto;
}
.bgs-sticky-product-box {
  display: flex;
  align-items: center;
  gap: 10px;
}
.bgs-sticky-thumb {
  width: 44px;
  height: 44px;
  border-radius: 8px;
  object-fit: cover;
  border: 1px solid var(--bgs-gold);
}
.bgs-sticky-info {
  display: flex;
  flex-direction: column;
}
.bgs-sticky-name {
  font-size: 0.85rem;
  color: #D1D5DB;
  font-weight: 600;
}
.bgs-sticky-price {
  font-size: 1.25rem;
  color: var(--bgs-gold);
  font-weight: 800;
}
.bgs-sticky-btn {
  background: linear-gradient(135deg, var(--bgs-gold) 0%, var(--bgs-gold-dark) 100%);
  color: #000000 !important;
  font-weight: 800;
  padding: 10px 22px;
  border-radius: 30px;
  text-decoration: none !important;
  font-size: 0.95rem;
  box-shadow: 0 4px 15px rgba(201, 169, 110, 0.4);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .bgs-mobile-sticky-bar {
    display: block;
  }
  .bgs-hook-section {
    padding: 35px 16px 20px;
  }
  .bgs-hook-h1 {
    font-size: clamp(1.2rem, 5vw, 1.55rem);
    white-space: normal;
  }
  .bgs-hook-h2 {
    font-size: clamp(1rem, 3.8vw, 1.25rem);
    white-space: normal;
  }
  .bgs-video-badges-grid {
    grid-template-columns: 1fr;
    gap: 8px;
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
  .bgs-delivery-options {
    grid-template-columns: 1fr;
  }
  .bgs-form-trust-badges {
    flex-direction: column;
    gap: 8px;
  }
  .bgs-order-btn {
    padding: 14px 28px;
    font-size: 1.1rem;
  }
  .bgs-submit-btn {
    font-size: 1.05rem;
    padding: 16px;
  }
}

@media (max-width: 480px) {
  .bgs-hook-section {
    padding: 24px 10px 16px;
  }
  .bgs-hook-h1 {
    font-size: clamp(1.1rem, 4.8vw, 1.35rem) !important;
  }
  .bgs-hook-h2 {
    font-size: clamp(0.95rem, 4vw, 1.15rem) !important;
  }
  .bgs-video-outer-frame {
    padding: 4px;
    border-radius: 12px;
  }
  .bgs-slider-card-box {
    padding: 16px 10px;
  }
  .bgs-checkout-section {
    padding: 30px 10px;
  }
  .bgs-checkout-form-card {
    padding: 16px 12px;
  }
  .bgs-order-btn {
    font-size: 1rem !important;
    padding: 12px 20px !important;
  }
}
</style>


<!-- ==========================================================================
     INTERACTIVE JAVASCRIPT: 7-IN-1 SLIDER & DIRECT CHECKOUT
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {

  // --- 1. 7-in-1 Combo Slider Functionality ---
  const slides = document.querySelectorAll('.bgs-slide-item');
  const tabs   = document.querySelectorAll('.bgs-tab-btn');
  const dots   = document.querySelectorAll('.bgs-dot');
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
      if (touchEndX < touchStartX - 40) showSlide(currentSlide + 1); // Swipe left
      if (touchEndX > touchStartX + 40) showSlide(currentSlide - 1); // Swipe right
    }, {passive: true});
  }


  // --- 2. Live Price & Checkout Calculation ---
  const unitPrice = <?php echo floatval( $price ); ?>;
  let currentQty = 1;
  let deliveryFee = 60; // default inside dhaka

  const qtyInput           = document.getElementById('bgs-order-qty');
  const qtyMinus           = document.getElementById('bgs-qty-minus');
  const qtyPlus            = document.getElementById('bgs-qty-plus');
  const subtotalDisplay    = document.getElementById('bgs-subtotal-display');
  const deliveryDisplay    = document.getElementById('bgs-delivery-display');
  const totalDisplay       = document.getElementById('bgs-total-display');
  const btnTotalDisplay    = document.getElementById('bgs-btn-total-display');
  const deliveryRadios     = document.querySelectorAll('input[name="delivery_location"]');

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

  deliveryRadios.forEach(radio => {
    radio.addEventListener('change', function() {
      document.querySelectorAll('.bgs-del-option').forEach(l => l.classList.remove('active'));
      this.closest('.bgs-del-option').classList.add('active');
      deliveryFee = this.value === 'outside_dhaka' ? 120 : 60;
      updateOrderTotals();
    });
  });


  // --- 3. AJAX Direct Order Submission ---
  const orderForm = document.getElementById('bgs-direct-order-form');
  const submitBtn = document.getElementById('bgs-submit-order-btn');
  const responseBox = document.getElementById('bgs-order-response');

  if (orderForm) {
    orderForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const name = document.getElementById('bgs_billing_name').value.trim();
      const phone = document.getElementById('bgs_billing_phone').value.trim();
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

      // Disable button & show spinner
      submitBtn.disabled = true;
      submitBtn.querySelector('.bgs-btn-text').style.display = 'none';
      submitBtn.querySelector('.bgs-btn-spinner').style.display = 'inline';

      const formData = new FormData(orderForm);
      const ajaxUrl = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';

      fetch(ajaxUrl, {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        submitBtn.disabled = false;
        submitBtn.querySelector('.bgs-btn-text').style.display = 'inline';
        submitBtn.querySelector('.bgs-btn-spinner').style.display = 'none';

        if (data.success) {
          orderForm.reset();
          currentQty = 1;
          updateOrderTotals();

          const orderId = data.data && data.data.order_id ? data.data.order_id : '';
          showResponse('success', '🎉 আপনার অর্ডারটি সফলভাবে গ্রহণ করা হয়েছে!' + (orderId ? ' অর্ডার আইডি: #' + orderId : '') + '<br>আমাদের প্রতিনিধি শীঘ্রই আপনার নাম্বারে কল করে অর্ডারটি কনফার্ম করবেন। ধন্যবাদ!');
        } else {
          showResponse('error', data.data && data.data.message ? data.data.message : 'অর্ডার প্রক্রিয়াকরণে সমস্যা হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন বা সরাসরি কল করুন।');
        }
      })
      .catch(err => {
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
