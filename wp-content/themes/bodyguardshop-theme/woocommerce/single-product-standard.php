<?php
/**
 * Standard Dark Luxury Product Details & Direct Checkout Template
 * Bodyguard Shop — Used for Home Security & Standard Products (e.g., Torch Light, etc.)
 */

if ( ! defined( 'ABSPATH' ) ) exit;

global $product;
$pid = get_the_ID();
if ( ! $product || ! is_a( $product, 'WC_Product' ) ) {
    $product = wc_get_product( $pid );
}
if ( ! $product ) return;

$slug      = $product->get_slug();
$theme_uri = get_template_directory_uri();

/**
 * Built-in catalog definitions for standard products (plus dynamic fallback via post meta)
 */
$bgs_standard_catalog = array(
    'torch-light' => array(
        'title'         => 'Torch Light',
        'category_name' => 'Home Security',
        'reg_price'     => 1140,
        'sale_price'    => 490,
        'discount_text' => '57% OFF',
        'images'        => array(
            $theme_uri . '/assets/images/torch-light/torch-light-main.jpg',
            $theme_uri . '/assets/images/torch-light/torch-light-slide-1.jpg',
            $theme_uri . '/assets/images/torch-light/torch-light-slide-2.jpg',
            $theme_uri . '/assets/images/torch-light/torch-light-slide-3.jpg',
        ),
        'specs_heading' => 'Specifications & Features',
        'specs'         => array(
            'Battery Life: দীর্ঘক্ষণ ব্যবহারের জন্য ৪ ঘণ্টার ব্যাটারি ব্যাকআপ দেয়।',
            'Long Beam: ৫০০ মিটার দূর পর্যন্ত আলো দেয় এই টর্চটি।',
            'Side Light: এতে ডুয়াল-টোন প্রফেশনাল লাইট রয়েছে।',
            'Fast Charge: টাইপ-সি পোর্ট দিয়ে খুব সহজে চার্জ করা যায়।',
            'Strong Grip: শক্ত মেটালিক বডি ও গ্রিপ হাত থেকে পড়ে না।',
            'Portable: পকেটে বা ব্যাগে সহজে ঝুলিয়ে নেওয়া যায়।',
        ),
    ),
    'panic-alarm-130db' => array(
        'title'         => 'Panic Alarm (130DB)',
        'category_name' => 'Home Security',
        'reg_price'     => 1413,
        'sale_price'    => 890,
        'discount_text' => '37% OFF',
        'images'        => array(
            $theme_uri . '/assets/images/panic-alarm/panic-alarm-main.jpg',
            $theme_uri . '/assets/images/panic-alarm/panic-alarm-slide-1.jpg',
            $theme_uri . '/assets/images/panic-alarm/panic-alarm-slide-2.jpg',
            $theme_uri . '/assets/images/panic-alarm/panic-alarm-slide-3.jpg',
        ),
        'specs_heading' => 'Specifications & Features',
        'specs'         => array(
            '1. High Siren: ১৩০ ডেসিবেল শক্তিশালী সাইরেন বিপদের সময় দ্রুত সংকেত দেয়।',
            '2. Long Sound Range: ২০০ মিটার দূর পর্যন্ত এর জোরালো অ্যালার্মের শব্দ পৌঁছায়।',
            '3. Fast Pull-Pin: বিপদে পিন টানলেই মুহূর্তের মধ্যে সাইরেন চালু হয়ে যায়।',
            '4. Dog Protection: হিংস্র কুকুর বা প্রাণীর আক্রমণ থেকে নিজেকে রক্ষা করে।',
            '5. Strong Chain: শক্ত মেটাল চেইন দিয়ে সহজে চাবি বা ব্যাগে আটকানো যায়।',
            '6. Non-Slip Grip: উন্নত টেক্সচার্ড বডি তাই জরুরি মুহূর্তে হাত থেকে পিছলে যায় না।',
        ),
    ),
    'multifunctional-tool' => array(
        'title'         => 'Multifunctional Tool',
        'category_name' => '',
        'reg_price'     => 2156,
        'sale_price'    => 690,
        'discount_text' => '68% OFF',
        'images'        => array(
            $theme_uri . '/assets/images/multifunctional-tool/multifunctional-tool-main.jpg',
            $theme_uri . '/assets/images/multifunctional-tool/multifunctional-tool-slide-1.jpg',
            $theme_uri . '/assets/images/multifunctional-tool/multifunctional-tool-slide-2.jpg',
            $theme_uri . '/assets/images/multifunctional-tool/multifunctional-tool-slide-3.jpg',
        ),
        'specs_heading' => '🛠️ Multi-Tool: 11 Features & Functions',
        'specs'         => array(
            '1. Large Blade: দড়ি, কাপড় বা যেকোনো শক্ত জিনিস সহজে কাটার জন্য ব্যবহার করা হয়।',
            '2. Precision Blade: সূক্ষ্ম বা ছোটখাটো জিনিস নিখুঁতভাবে কাটার জন্য উপযোগী।',
            '3. Phillips Driver: মেশিনের বা ইলেকট্রনিক্সের ক্রস (Plus/+) স্ক্রু খোলা ও লাগানোর জন্য।',
            '4. Flat Head Screwdriver: সাধারণ ফ্ল্যাট (Minus/-) হেক্স বা রেগুলার স্ক্রু খোলার কাজে ব্যবহৃত হয়।',
            '5. Precision Bit: ছোট সাইজের স্ক্রু বা ঘড়ি ও চশমার মতো বারিক স্ক্রু টাইট দেওয়ার জন্য।',
            '6. Wood Saw: গাছের ছোট ডালপালা বা শক্ত কাঠ দ্রুত কাটার জন্য ধারালো স\' ব্লেড।',
            '7. Corkscrew: ওয়াইন বা যেকোনো বোতলের কাঠের ছিপি (Cork) খোলার জন্য।',
            '8. Multi-Hook / Cap Lifter: যেকোনো ড্রিংকস বা মেটাল বোতলের ক্যাপ অনায়াসে খোলার ওপেনার।',
            '9. Nail File: নখ সুন্দর শেপে ফিলিং করা বা মেটালের খাঁজ সমান করার জন্য।',
            '10. Scissors: ছোট ব্লেডের কাঁচি দিয়ে কাগজ, সুতা বা পাতলা প্যাক কাটিং করা যায়।',
            '11. Key Ring: পকেটে, ব্যাগে বা চাবির সাথে টুলটি সহজে আটকে রাখার জন্য।',
        ),
    ),
    'glass-breaker' => array(
        'title'         => 'Glass Breaker',
        'category_name' => '',
        'reg_price'     => 341,
        'sale_price'    => 249,
        'discount_text' => '27% OFF',
        'images'        => array(
            $theme_uri . '/assets/images/glass-breaker/glass-breaker-main.jpg',
            $theme_uri . '/assets/images/glass-breaker/glass-breaker-slide-1.jpg',
            $theme_uri . '/assets/images/glass-breaker/glass-breaker-slide-2.jpg',
        ),
        'specs_heading' => '3-in-1 Emergency Safety Tool: Key Features',
        'specs'         => array(
            '1. Glass Breaker: হার্ডেনড মেটাল টিপ দিয়ে বিপদের সময় গাড়ির গ্লাস দ্রুত ভেঙে বের হওয়া যায়।',
            '2. Seat Belt Cutter: শার্প ব্লেড দিয়ে জ্যাম হয়ে যাওয়া সিটবেল্ট এক টানে কেটে ফেলা যায়।',
            '3. Emergency Whistle: অত্যন্ত জোরালো হুইসেল বা বাঁশি যা দ্রুত মানুষের দৃষ্টি আকর্ষণ করে সাহায্য চাইতে সাহায্য করে।',
            '4. Compact & Portable: সাইজে ছোট ও হালকা হওয়ায় পকেটে বা ব্যাগে সবসময় সাথে রাখা যায়।',
            '5. Keychain Ready: শক্ত কি-রিং থাকায় গাড়ির চাবি বা ব্যাগের সাথে অনায়াসে ঝুলিয়ে রাখা সম্ভব।',
        ),
    ),
    'wire-saw' => array(
        'title'         => 'Wire Saw',
        'category_name' => '',
        'reg_price'     => 321,
        'sale_price'    => 199,
        'discount_text' => '38% OFF',
        'images'        => array(
            $theme_uri . '/assets/images/wire-saw/wire-saw-main.jpg',
            $theme_uri . '/assets/images/wire-saw/wire-saw-slide-1.jpg',
            $theme_uri . '/assets/images/wire-saw/wire-saw-slide-2.jpg',
        ),
        'specs_heading' => 'Key Features & Benefits',
        'specs'         => array(
            '1. Glass Breaker: হার্ডেনড মেটাল টিপ দিয়ে বিপদের সময় গাড়ির কাঁচ ভেঙে বের হওয়া যায়।',
            '2. Seat Belt Cutter: শার্প ব্লেড দিয়ে আটকে যাওয়া সিটবেল্ট দ্রুত কেটে ফেলা যায়।',
            '3. Emergency Whistle: জোরালো হুইসেল বাজিয়ে বিপদের সময় দ্রুত সাহায্য চাওয়া যায়।',
            '4. Compact & Portable: অত্যন্ত ছোট ও হালকা, পকেটে বা ব্যাগে সহজে রাখা যায়।',
            '5. Keychain Ready: শক্ত কি-রিং থাকায় গাড়ির চাবিতে সবসময় সাথে রাখা সম্ভব।',
        ),
    ),
    'baseball-bat' => array(
        'title'         => 'Baseball Bat',
        'category_name' => 'Home Security',
        'reg_price'     => 3491,
        'sale_price'    => 1990,
        'discount_text' => '43% OFF',
        'images'        => array(
            $theme_uri . '/assets/images/baseball-bat/baseball-bat-main.jpg',
            $theme_uri . '/assets/images/baseball-bat/baseball-bat-slide-1.jpg',
            $theme_uri . '/assets/images/baseball-bat/baseball-bat-slide-2.jpg',
        ),
        'specs_heading' => 'Heavy-Duty Metal Tactical Bat',
        'specs'         => array(
            '1. 32-Inch Perfect Size: পারফেক্ট সাইজ ও ওজন, যা সহজে কন্ট্রোল করে সর্বোচ্চ ইমপ্যাক্ট দেয়।',
            '2. Ultra-Durable Body: শক্ত মেটাল বডি; গাড়ি বা কংক্রিটের আঘাতেও বাঁকা হয় না।',
            '3. Non-Slip Grip: অ্যান্টি-স্লিপ হ্যান্ডেল গ্রিপ, তাই জরুরি মুহূর্তে হাত থেকে ছিটকে যায় না।',
            '4. Home & Car Protection: বাসা বা গাড়িতে আত্মরক্ষা ও জরুরি নিরাপত্তার জন্য সেরা ব্যাকআপ।',
            '5. Emergency Glass Breaker: যেকোনো ইমার্জেন্সিতে গাড়ির শক্ত কাঁচ ভাঙতে ব্যবহার করা যায়।',
            '6. Rust-Proof Finish: অল-ওয়েদার কোটিং, তাই দীর্ঘ ব্যবহারে জং পড়ে না।',
        ),
    ),
    'pen-knife' => array(
        'title'         => 'Pen Knife',
        'category_name' => '',
        'reg_price'     => 860,
        'sale_price'    => 490,
        'discount_text' => '43% OFF',
        'images'        => array(
            $theme_uri . '/assets/images/pen-knife/pen-knife-main.jpg',
            $theme_uri . '/assets/images/pen-knife/pen-knife-slide-1.jpg',
            $theme_uri . '/assets/images/pen-knife/pen-knife-slide-2.jpg',
        ),
        'specs_heading' => 'Tactical Pen-Knife',
        'specs'         => array(
            '1. Stealth Self-Defense: সাধারণ কলমের মতো দেখতে হলেও ভেতরে ধারালো হিডেন ব্লেড থাকায় আত্মরক্ষায় দারুণ কার্যকরী।',
            '2. Smooth Writing Pen: প্রফেশনাল ব্যবহারের জন্য এটি দিয়ে রেগুলার কলমের মতো স্মুথভাবে লেখা যায়।',
            '3. Aircraft Grade Body: শক্ত মেটাল বডি হওয়ায় অত্যন্ত টেকসই এবং সহজে ভাঙবে না।',
            '4. Everyday Utility: পার্সেল খোলা, সুতা কাটিং বা যেকোনো ইমার্জেন্সি কাজে ব্লেডটি দ্রুত ব্যবহার করা যায়।',
            '5. Pocket & EDC Friendly: শার্টের পকেটে বা ব্যাগে সহজে বহনযোগ্য, যা সিকিউরিটির চোখে সাধারণ কলম মনে হবে।',
        ),
    ),
);
$bgs_standard_catalog['panic-alarm'] = $bgs_standard_catalog['panic-alarm-130db'];

if ( isset( $bgs_standard_catalog[ $slug ] ) ) {
    $cfg           = $bgs_standard_catalog[ $slug ];
    $prod_title    = $cfg['title'];
    $cat_name      = $cfg['category_name'];
    $reg_price     = (int) $cfg['reg_price'];
    $sale_price    = (int) $cfg['sale_price'];
    $discount_text = $cfg['discount_text'];
    $gallery_imgs  = $cfg['images'];
    $specs_heading = $cfg['specs_heading'];
    $specs_list    = $cfg['specs'];
} else {
    $prod_title = $product->get_name();
    $reg_price  = (int) $product->get_regular_price();
    $sale_price = (int) $product->get_price();
    if ( ! $reg_price || $reg_price <= $sale_price ) {
        $reg_price = $sale_price;
    }
    $discount_pct  = ( $reg_price > $sale_price && $reg_price > 0 ) ? round( ( ( $reg_price - $sale_price ) / $reg_price ) * 100 ) : 0;
    $discount_text = get_post_meta( $pid, '_bgs_discount_text', true );
    if ( ! $discount_text && $discount_pct > 0 ) {
        $discount_text = $discount_pct . '% OFF';
    }

    // Category
    $cat_name = '';
    $terms    = get_the_terms( $pid, 'product_cat' );
    if ( $terms && ! is_wp_error( $terms ) ) {
        foreach ( $terms as $t ) {
            if ( $t->slug !== 'uncategorized' ) {
                $cat_name = $t->name;
                break;
            }
        }
    }

    // Gallery images from meta or WC product
    $meta_imgs = get_post_meta( $pid, '_bgs_gallery_images', true );
    if ( is_array( $meta_imgs ) && ! empty( $meta_imgs ) ) {
        $gallery_imgs = array_map( function( $rel ) use ( $theme_uri ) {
            return ( strpos( $rel, 'http' ) === 0 ) ? $rel : $theme_uri . '/' . ltrim( $rel, '/' );
        }, $meta_imgs );
    } else {
        $gallery_imgs = array();
        $thumb_id     = $product->get_image_id();
        if ( $thumb_id ) {
            $u = wp_get_attachment_image_url( $thumb_id, 'full' );
            if ( $u ) $gallery_imgs[] = $u;
        }
        foreach ( $product->get_gallery_image_ids() as $gid ) {
            $u = wp_get_attachment_image_url( $gid, 'full' );
            if ( $u ) $gallery_imgs[] = $u;
        }
        if ( empty( $gallery_imgs ) ) {
            $gallery_imgs[] = wc_placeholder_img_src( 'full' );
        }
    }

    $specs_heading = get_post_meta( $pid, '_bgs_specs_heading', true );
    if ( ! $specs_heading ) {
        $specs_heading = 'Specifications & Features';
    }
    $specs_list = get_post_meta( $pid, '_bgs_specs_list', true );
    if ( ! is_array( $specs_list ) ) {
        $specs_list = array();
    }
}

$main_img    = ! empty( $gallery_imgs[0] ) ? $gallery_imgs[0] : '';
$total_imgs  = count( $gallery_imgs );
$save_amount = max( 0, $reg_price - $sale_price );
?>

<div class="bgs-std-page">
  <div class="bgs-std-container">

    <!-- ==========================================================================
         1. PRODUCT SHOWCASE (GALLERY SLIDER + DETAILS & SPECIFICATIONS)
         ========================================================================== -->
    <section class="bgs-std-showcase">
      <div class="bgs-std-grid">

        <!-- Left Column: Interactive Main Image + Slider Gallery -->
        <div class="bgs-std-gallery-col">
          <div class="bgs-std-main-stage" id="bgs-std-stage">
            <?php if ( ! empty( $discount_text ) ) : ?>
              <span class="bgs-std-stage-badge"><?php echo esc_html( $discount_text ); ?></span>
            <?php endif; ?>

            <img src="<?php echo esc_url( $main_img ); ?>"
                 alt="<?php echo esc_attr( $prod_title ); ?>"
                 id="bgs-std-main-img"
                 class="bgs-std-main-img">

            <?php if ( $total_imgs > 1 ) : ?>
              <button type="button" class="bgs-std-nav-btn bgs-std-prev" id="bgs-std-prev" aria-label="Previous image">&#10094;</button>
              <button type="button" class="bgs-std-nav-btn bgs-std-next" id="bgs-std-next" aria-label="Next image">&#10095;</button>
              <div class="bgs-std-slide-counter">
                <span id="bgs-std-cur-idx">1</span> / <?php echo intval( $total_imgs ); ?>
              </div>
            <?php endif; ?>
          </div>

          <?php if ( $total_imgs > 1 ) : ?>
            <div class="bgs-std-thumbs" id="bgs-std-thumbs">
              <?php foreach ( $gallery_imgs as $idx => $img_url ) : ?>
                <button type="button"
                        class="bgs-std-thumb-btn <?php echo $idx === 0 ? 'active' : ''; ?>"
                        data-index="<?php echo intval( $idx ); ?>"
                        data-src="<?php echo esc_url( $img_url ); ?>">
                  <img src="<?php echo esc_url( $img_url ); ?>"
                       alt="<?php echo esc_attr( $prod_title . ' - Image ' . ( $idx + 1 ) ); ?>">
                </button>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- Right Column: Product Title, Pricing & Specifications -->
        <div class="bgs-std-info-col">
          <?php if ( ! empty( $cat_name ) ) : ?>
            <div class="bgs-std-cat-row">
              <span class="bgs-std-cat-badge"><?php echo esc_html( $cat_name ); ?></span>
            </div>
          <?php endif; ?>

          <h1 class="bgs-std-title"><?php echo esc_html( $prod_title ); ?></h1>

          <!-- Price Block -->
          <div class="bgs-std-price-card">
            <?php if ( $reg_price > $sale_price ) : ?>
              <div class="bgs-std-reg-line">
                <span class="bgs-std-old-price">৳<?php echo number_format( $reg_price ); ?></span>
                <?php if ( ! empty( $discount_text ) ) : ?>
                  <span class="bgs-std-off-pill"><?php echo esc_html( $discount_text ); ?></span>
                <?php endif; ?>
              </div>
            <?php endif; ?>
            <div class="bgs-std-sale-line">
              <span class="bgs-std-sale-price">৳<?php echo number_format( $sale_price ); ?></span>
            </div>
          </div>

          <!-- Specifications & Features -->
          <?php if ( ! empty( $specs_list ) ) : ?>
            <div class="bgs-std-specs-card">
              <h2 class="bgs-std-specs-title"><?php echo esc_html( $specs_heading ); ?></h2>
              <ul class="bgs-std-specs-list">
                <?php foreach ( $specs_list as $spec_line ) :
                    $parts = explode( ':', $spec_line, 2 );
                ?>
                  <li class="bgs-std-spec-item">
                    <span class="bgs-std-spec-bullet">✔</span>
                    <span class="bgs-std-spec-text">
                      <?php if ( count( $parts ) === 2 ) : ?>
                        <strong><?php echo esc_html( trim( $parts[0] ) ); ?>:</strong> <?php echo esc_html( trim( $parts[1] ) ); ?>
                      <?php else : ?>
                        <?php echo esc_html( $spec_line ); ?>
                      <?php endif; ?>
                    </span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>

          <!-- Order Now CTA -->
          <div class="bgs-std-cta-wrap">
            <a href="#order" class="bgs-std-order-btn">
              Order Now — ৳<?php echo number_format( $sale_price ); ?> &darr;
            </a>
          </div>
        </div>

      </div>
    </section>

    <!-- ==========================================================================
         2. DIRECT CASH ON DELIVERY CHECKOUT BOX
         ========================================================================== -->
    <section class="bgs-std-order-section" id="order">
      <h2 class="bgs-std-order-heading">অর্ডার করতে নিচের ফর্মটি পূরণ করুন</h2>

      <div class="bgs-std-checkout-card">
        <form id="bgs-std-checkout-form" class="bgs-std-form" novalidate>
          <input type="hidden" name="action" value="bgs_process_direct_order">
          <input type="hidden" name="product_id" value="<?php echo esc_attr( $pid ); ?>">
          <input type="hidden" id="bgs-selected-package" name="selected_level" value="<?php echo esc_attr( $prod_title ); ?>">
          <input type="hidden" id="bgs-level-price" name="level_price" value="<?php echo esc_attr( $sale_price ); ?>">
          <input type="hidden" name="delivery_zone" value="free">

          <!-- Product Preview & Quantity Row -->
          <div class="bgs-std-summary-banner">
            <div class="bgs-std-sb-left">
              <img src="<?php echo esc_url( $main_img ); ?>" alt="<?php echo esc_attr( $prod_title ); ?>" class="bgs-std-sb-thumb">
              <div class="bgs-std-sb-info">
                <?php if ( ! empty( $discount_text ) ) : ?>
                  <span class="bgs-std-sb-badge"><?php echo esc_html( $discount_text ); ?></span>
                <?php endif; ?>
                <h4 class="bgs-std-sb-title"><?php echo esc_html( $prod_title ); ?></h4>
                <div class="bgs-std-sb-prices">
                  <?php if ( $reg_price > $sale_price ) : ?>
                    <del class="bgs-std-sb-old">৳<?php echo number_format( $reg_price ); ?></del>
                  <?php endif; ?>
                  <strong class="bgs-std-sb-sale">৳<?php echo number_format( $sale_price ); ?></strong>
                </div>
              </div>
            </div>

            <div class="bgs-std-sb-right">
              <span class="bgs-std-qty-label">পরিমাণ:</span>
              <div class="bgs-std-qty-box">
                <button type="button" class="bgs-std-qty-btn" id="bgs-std-qty-minus">−</button>
                <input type="number" id="bgs-std-qty-input" value="1" min="1" max="20" readonly>
                <button type="button" class="bgs-std-qty-btn" id="bgs-std-qty-plus">+</button>
              </div>
            </div>
          </div>

          <!-- Customer Billing Fields -->
          <div class="bgs-std-field-group">
            <label for="bgs_name" class="bgs-std-label">আপনার নাম লিখুন <span class="bgs-std-req">*</span></label>
            <input type="text" id="bgs_name" name="billing_first_name" class="bgs-std-input" placeholder="আপনার পুরো নাম লিখুন" required>
          </div>

          <div class="bgs-std-field-group">
            <label for="bgs_phone" class="bgs-std-label">আপনার মোবাইল নাম্বার লিখুন <span class="bgs-std-req">*</span></label>
            <input type="tel" id="bgs_phone" name="billing_phone" class="bgs-std-input" placeholder="১১ ডিজিটের মোবাইল নম্বর দিন (যেমন: 017xxxxxxxx)" pattern="[0-9]{11}" required>
          </div>

          <div class="bgs-std-field-group">
            <label for="bgs_address" class="bgs-std-label">আপনার সম্পূর্ণ ঠিকানা লিখুন <span class="bgs-std-req">*</span></label>
            <textarea id="bgs_address" name="billing_address_1" class="bgs-std-textarea" rows="2" placeholder="বাসা নম্বর, রোড নম্বর, এলাকা, থানা ও জেলা উল্লেখ করুন" required></textarea>
          </div>

          <!-- Order Summary Table -->
          <div class="bgs-std-order-table-wrap">
            <h4 class="bgs-std-box-subtitle">Your order</h4>
            <table class="bgs-std-table">
              <thead>
                <tr>
                  <th>Product</th>
                  <th class="bgs-std-text-right">Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <span><?php echo esc_html( $prod_title ); ?></span>
                    <strong>× <span id="bgs-std-summary-qty">1</span></strong>
                  </td>
                  <td class="bgs-std-text-right">৳<span id="bgs-std-summary-sub"><?php echo number_format( $sale_price ); ?></span></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Subtotal</th>
                  <td class="bgs-std-text-right">৳<span id="bgs-std-summary-sub-foot"><?php echo number_format( $sale_price ); ?></span></td>
                </tr>
                <tr>
                  <th>Shipment</th>
                  <td class="bgs-std-text-right"><span class="bgs-std-free-tag">ডেলিভারি চার্জ ফ্রি (৳ ০)</span></td>
                </tr>
                <tr class="bgs-std-total-row">
                  <th>Total</th>
                  <td class="bgs-std-text-right"><strong>৳<span id="bgs-std-summary-total"><?php echo number_format( $sale_price ); ?></span></strong></td>
                </tr>
              </tfoot>
            </table>
          </div>

          <!-- Payment Method & Submit -->
          <div class="bgs-std-payment-box">
            <div class="bgs-std-cod-row">
              <input type="radio" id="std_cod" name="payment_method" value="cod" checked>
              <label for="std_cod">Cash on delivery (পণ্য হাতে পেয়ে মূল্য পরিশোধ করুন)</label>
            </div>

            <button type="submit" id="bgs-std-submit-btn" class="bgs-std-submit-btn">
              <span class="bgs-std-btn-label">Place Order — ৳<span id="bgs-std-btn-price"><?php echo number_format( $sale_price ); ?></span></span>
              <span class="bgs-std-btn-loader" style="display:none;">অর্ডার প্রসেস হচ্ছে...</span>
            </button>

            <div id="bgs-std-feedback" class="bgs-std-feedback" style="display:none;"></div>
          </div>
        </form>
      </div>
    </section>

  </div>
</div>

<style>
.bgs-std-page {
  background: #0D0D0F;
  color: #F0EDE8;
  font-family: 'Hind Siliguri', 'Inter', sans-serif;
  padding: 40px 0 80px;
}
.bgs-std-container {
  max-width: 1120px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Showcase Grid */
.bgs-std-showcase {
  margin-bottom: 56px;
}
.bgs-std-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  align-items: start;
}

/* Left Column: Gallery */
.bgs-std-gallery-col {
  background: #141418;
  border: 1px solid rgba(201, 169, 110, 0.22);
  border-radius: 16px;
  padding: 18px;
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.45);
}
.bgs-std-main-stage {
  position: relative;
  width: 100%;
  aspect-ratio: 1 / 1;
  background: #09090B;
  border-radius: 12px;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid rgba(255, 255, 255, 0.06);
}
.bgs-std-main-img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  transition: opacity 0.25s ease;
}
.bgs-std-stage-badge {
  position: absolute;
  top: 14px;
  left: 14px;
  background: linear-gradient(135deg, #E63946, #B81D2A);
  color: #FFFFFF;
  font-size: 13px;
  font-weight: 700;
  padding: 5px 12px;
  border-radius: 999px;
  z-index: 3;
  letter-spacing: 0.4px;
  box-shadow: 0 4px 12px rgba(230, 57, 70, 0.4);
}
.bgs-std-nav-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: rgba(13, 13, 15, 0.82);
  border: 1px solid rgba(201, 169, 110, 0.45);
  color: #C9A96E;
  font-size: 18px;
  cursor: pointer;
  z-index: 3;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.2s ease;
}
.bgs-std-nav-btn:hover {
  background: #C9A96E;
  color: #0D0D0F;
}
.bgs-std-prev { left: 12px; }
.bgs-std-next { right: 12px; }
.bgs-std-slide-counter {
  position: absolute;
  bottom: 12px;
  right: 12px;
  background: rgba(13, 13, 15, 0.82);
  border: 1px solid rgba(201, 169, 110, 0.35);
  color: #F0EDE8;
  font-size: 12px;
  font-weight: 600;
  padding: 4px 10px;
  border-radius: 999px;
  z-index: 3;
}
.bgs-std-thumbs {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px;
  margin-top: 14px;
}
.bgs-std-thumb-btn {
  background: #09090B;
  border: 2px solid rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  padding: 4px;
  aspect-ratio: 1 / 1;
  cursor: pointer;
  overflow: hidden;
  transition: all 0.2s ease;
}
.bgs-std-thumb-btn img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 6px;
}
.bgs-std-thumb-btn.active,
.bgs-std-thumb-btn:hover {
  border-color: #C9A96E;
  box-shadow: 0 0 12px rgba(201, 169, 110, 0.35);
}

/* Right Column: Info & Specs */
.bgs-std-info-col {
  display: flex;
  flex-direction: column;
  gap: 18px;
}
.bgs-std-cat-badge {
  display: inline-block;
  background: rgba(201, 169, 110, 0.14);
  border: 1px solid rgba(201, 169, 110, 0.4);
  color: #C9A96E;
  font-size: 13px;
  font-weight: 600;
  padding: 5px 14px;
  border-radius: 999px;
  letter-spacing: 0.5px;
}
.bgs-std-title {
  font-size: 34px;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0;
  line-height: 1.2;
}
.bgs-std-price-card {
  background: #141418;
  border: 1px solid rgba(201, 169, 110, 0.28);
  border-radius: 14px;
  padding: 18px 22px;
  display: flex;
  flex-direction: column;
  gap: 6px;
}
.bgs-std-reg-line {
  display: flex;
  align-items: center;
  gap: 12px;
}
.bgs-std-old-price {
  color: #9A98A0;
  font-size: 20px;
  text-decoration: line-through;
  font-weight: 600;
}
.bgs-std-off-pill {
  background: rgba(230, 57, 70, 0.18);
  border: 1px solid #E63946;
  color: #FF6B76;
  font-size: 13px;
  font-weight: 700;
  padding: 3px 10px;
  border-radius: 6px;
}
.bgs-std-sale-price {
  font-size: 36px;
  font-weight: 800;
  color: #C9A96E;
  line-height: 1.1;
}

/* Specifications & Features Card */
.bgs-std-specs-card {
  background: #141418;
  border: 1px solid rgba(255, 255, 255, 0.09);
  border-radius: 14px;
  padding: 22px;
}
.bgs-std-specs-title {
  font-size: 20px;
  font-weight: 700;
  color: #C9A96E;
  margin: 0 0 16px;
  padding-bottom: 10px;
  border-bottom: 1px solid rgba(201, 169, 110, 0.2);
}
.bgs-std-specs-list {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.bgs-std-spec-item {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  font-size: 16px;
  line-height: 1.6;
  color: #EAE6DF;
}
.bgs-std-spec-bullet {
  color: #C9A96E;
  font-weight: 700;
  flex-shrink: 0;
  margin-top: 2px;
}
.bgs-std-spec-text strong {
  color: #FFFFFF;
}

.bgs-std-order-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  background: linear-gradient(135deg, #C9A96E, #A88445);
  color: #0D0D0F;
  font-size: 18px;
  font-weight: 800;
  padding: 16px 28px;
  border-radius: 12px;
  text-decoration: none;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
  box-shadow: 0 10px 24px rgba(201, 169, 110, 0.3);
}
.bgs-std-order-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 14px 30px rgba(201, 169, 110, 0.45);
  color: #0D0D0F;
}

/* Checkout Section */
.bgs-std-order-section {
  max-width: 760px;
  margin: 0 auto;
}
.bgs-std-order-heading {
  text-align: center;
  font-size: 28px;
  font-weight: 800;
  color: #C9A96E;
  margin: 0 0 24px;
}
.bgs-std-checkout-card {
  background: #141418;
  border: 1px solid rgba(201, 169, 110, 0.3);
  border-radius: 16px;
  padding: 28px;
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.5);
}
.bgs-std-summary-banner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  background: #0D0D0F;
  border: 1px solid rgba(201, 169, 110, 0.25);
  border-radius: 12px;
  padding: 14px 18px;
  margin-bottom: 22px;
  flex-wrap: wrap;
}
.bgs-std-sb-left {
  display: flex;
  align-items: center;
  gap: 14px;
}
.bgs-std-sb-thumb {
  width: 68px;
  height: 68px;
  object-fit: cover;
  border-radius: 10px;
  border: 1px solid rgba(201, 169, 110, 0.35);
}
.bgs-std-sb-badge {
  display: inline-block;
  background: rgba(230, 57, 70, 0.2);
  color: #FF6B76;
  font-size: 11px;
  font-weight: 700;
  padding: 2px 8px;
  border-radius: 4px;
  margin-bottom: 4px;
}
.bgs-std-sb-title {
  margin: 0 0 4px;
  font-size: 18px;
  color: #FFFFFF;
}
.bgs-std-sb-prices {
  display: flex;
  align-items: center;
  gap: 8px;
}
.bgs-std-sb-old {
  color: #8E8C94;
  font-size: 14px;
}
.bgs-std-sb-sale {
  color: #C9A96E;
  font-size: 18px;
}
.bgs-std-sb-right {
  display: flex;
  align-items: center;
  gap: 10px;
}
.bgs-std-qty-label {
  font-size: 14px;
  color: #CFCBC4;
}
.bgs-std-qty-box {
  display: flex;
  align-items: center;
  background: #141418;
  border: 1px solid rgba(201, 169, 110, 0.35);
  border-radius: 8px;
  overflow: hidden;
}
.bgs-std-qty-btn {
  width: 34px;
  height: 34px;
  background: transparent;
  border: none;
  color: #C9A96E;
  font-size: 18px;
  font-weight: 700;
  cursor: pointer;
}
#bgs-std-qty-input {
  width: 40px;
  text-align: center;
  background: transparent;
  border: none;
  color: #FFFFFF;
  font-size: 15px;
  font-weight: 700;
}

.bgs-std-field-group {
  margin-bottom: 16px;
}
.bgs-std-label {
  display: block;
  font-size: 15px;
  font-weight: 600;
  margin-bottom: 6px;
  color: #F0EDE8;
}
.bgs-std-req { color: #E63946; }
.bgs-std-input,
.bgs-std-textarea {
  width: 100%;
  background: #0D0D0F;
  border: 1px solid rgba(255, 255, 255, 0.16);
  border-radius: 10px;
  padding: 12px 14px;
  color: #FFFFFF;
  font-size: 15px;
  font-family: inherit;
}
.bgs-std-input:focus,
.bgs-std-textarea:focus {
  outline: none;
  border-color: #C9A96E;
}

.bgs-std-order-table-wrap {
  background: #0D0D0F;
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 12px;
  padding: 18px;
  margin: 20px 0;
}
.bgs-std-box-subtitle {
  margin: 0 0 12px;
  font-size: 17px;
  color: #C9A96E;
}
.bgs-std-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 15px;
}
.bgs-std-table th,
.bgs-std-table td {
  padding: 10px 0;
  border-bottom: 1px solid rgba(255, 255, 255, 0.07);
  text-align: left;
}
.bgs-std-table .bgs-std-text-right {
  text-align: right;
}
.bgs-std-free-tag {
  color: #4CD964;
  font-weight: 600;
}
.bgs-std-total-row th,
.bgs-std-total-row td {
  border-bottom: none;
  font-size: 18px;
  color: #C9A96E;
  padding-top: 14px;
}

.bgs-std-cod-row {
  display: flex;
  align-items: center;
  gap: 10px;
  background: rgba(201, 169, 110, 0.1);
  border: 1px solid rgba(201, 169, 110, 0.3);
  padding: 12px 16px;
  border-radius: 10px;
  margin-bottom: 18px;
  font-weight: 600;
}
.bgs-std-submit-btn {
  width: 100%;
  background: linear-gradient(135deg, #C9A96E, #A88445);
  color: #0D0D0F;
  border: none;
  border-radius: 12px;
  padding: 16px 24px;
  font-size: 18px;
  font-weight: 800;
  cursor: pointer;
  transition: all 0.2s ease;
}
.bgs-std-submit-btn:hover {
  transform: translateY(-1px);
  box-shadow: 0 10px 24px rgba(201, 169, 110, 0.35);
}
.bgs-std-feedback {
  margin-top: 14px;
  padding: 12px 16px;
  border-radius: 8px;
  font-size: 15px;
  font-weight: 600;
  text-align: center;
}
.bgs-std-feedback.error {
  background: rgba(230, 57, 70, 0.18);
  border: 1px solid #E63946;
  color: #FF858F;
}
.bgs-std-feedback.success {
  background: rgba(76, 217, 100, 0.18);
  border: 1px solid #4CD964;
  color: #72F288;
}

@media (max-width: 860px) {
  .bgs-std-grid {
    grid-template-columns: 1fr;
    gap: 28px;
  }
  .bgs-std-title {
    font-size: 26px;
  }
  .bgs-std-sale-price {
    font-size: 30px;
  }
  .bgs-std-checkout-card {
    padding: 20px 16px;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // 1. Image Slider Gallery
  var mainImg   = document.getElementById('bgs-std-main-img');
  var curIdxEl  = document.getElementById('bgs-std-cur-idx');
  var thumbBtns = Array.prototype.slice.call(document.querySelectorAll('.bgs-std-thumb-btn'));
  var prevBtn   = document.getElementById('bgs-std-prev');
  var nextBtn   = document.getElementById('bgs-std-next');
  var curIndex  = 0;

  function showSlide(idx) {
    if (!thumbBtns.length || !mainImg) return;
    if (idx < 0) idx = thumbBtns.length - 1;
    if (idx >= thumbBtns.length) idx = 0;
    curIndex = idx;
    var targetSrc = thumbBtns[curIndex].getAttribute('data-src');
    mainImg.style.opacity = '0.35';
    setTimeout(function() {
      mainImg.src = targetSrc;
      mainImg.style.opacity = '1';
    }, 100);
    thumbBtns.forEach(function(btn, i) {
      btn.classList.toggle('active', i === curIndex);
    });
    if (curIdxEl) curIdxEl.textContent = (curIndex + 1);
  }

  thumbBtns.forEach(function(btn, idx) {
    btn.addEventListener('click', function() {
      showSlide(idx);
    });
  });
  if (prevBtn) {
    prevBtn.addEventListener('click', function() { showSlide(curIndex - 1); });
  }
  if (nextBtn) {
    nextBtn.addEventListener('click', function() { showSlide(curIndex + 1); });
  }

  // 2. Quantity & Live Order Total Calculation
  var unitPrice   = <?php echo intval( $sale_price ); ?>;
  var prodTitle   = <?php echo wp_json_encode( $prod_title ); ?>;
  var qtyInput    = document.getElementById('bgs-std-qty-input');
  var minusBtn    = document.getElementById('bgs-std-qty-minus');
  var plusBtn     = document.getElementById('bgs-std-qty-plus');
  var sumQtyEl    = document.getElementById('bgs-std-summary-qty');
  var sumSubEl    = document.getElementById('bgs-std-summary-sub');
  var sumFootEl   = document.getElementById('bgs-std-summary-sub-foot');
  var sumTotalEl  = document.getElementById('bgs-std-summary-total');
  var btnPriceEl  = document.getElementById('bgs-std-btn-price');
  var currentQty  = 1;

  function formatNumber(n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  }

  function updateTotals(q) {
    currentQty = Math.max(1, Math.min(20, parseInt(q, 10) || 1));
    if (qtyInput) qtyInput.value = currentQty;
    var total = unitPrice * currentQty;
    var formatted = formatNumber(total);
    if (sumQtyEl) sumQtyEl.textContent = currentQty;
    if (sumSubEl) sumSubEl.textContent = formatted;
    if (sumFootEl) sumFootEl.textContent = formatted;
    if (sumTotalEl) sumTotalEl.textContent = formatted;
    if (btnPriceEl) btnPriceEl.textContent = formatted;
  }

  if (minusBtn) {
    minusBtn.addEventListener('click', function() { updateTotals(currentQty - 1); });
  }
  if (plusBtn) {
    plusBtn.addEventListener('click', function() { updateTotals(currentQty + 1); });
  }

  // 3. Direct COD Order Submission
  var checkoutForm = document.getElementById('bgs-std-checkout-form');
  var submitBtn    = document.getElementById('bgs-std-submit-btn');
  var feedbackEl   = document.getElementById('bgs-std-feedback');
  var btnLabel     = submitBtn ? submitBtn.querySelector('.bgs-std-btn-label') : null;
  var btnLoader    = submitBtn ? submitBtn.querySelector('.bgs-std-btn-loader') : null;

  function showFeedback(msg, type) {
    if (!feedbackEl) return;
    feedbackEl.textContent = msg;
    feedbackEl.className = 'bgs-std-feedback ' + type;
    feedbackEl.style.display = 'block';
  }

  function resetBtn() {
    if (submitBtn) submitBtn.disabled = false;
    if (btnLabel) btnLabel.style.display = 'inline';
    if (btnLoader) btnLoader.style.display = 'none';
  }

  if (checkoutForm) {
    checkoutForm.addEventListener('submit', function(e) {
      e.preventDefault();
      var nameEl  = document.getElementById('bgs_name');
      var phoneEl = document.getElementById('bgs_phone');
      var addrEl  = document.getElementById('bgs_address');

      var name  = nameEl ? nameEl.value.trim() : '';
      var phone = phoneEl ? phoneEl.value.trim() : '';
      var addr  = addrEl ? addrEl.value.trim() : '';

      if (!name) {
        showFeedback('অনুগ্রহ করে আপনার পুরো নাম লিখুন।', 'error');
        if (nameEl) nameEl.focus();
        return;
      }
      if (!phone || phone.length < 11) {
        showFeedback('অনুগ্রহ করে সঠিক ১১ ডিজিটের মোবাইল নম্বর দিন।', 'error');
        if (phoneEl) phoneEl.focus();
        return;
      }
      if (!addr) {
        showFeedback('অনুগ্রহ করে আপনার সম্পূর্ণ ঠিকানা লিখুন।', 'error');
        if (addrEl) addrEl.focus();
        return;
      }

      var formData = new FormData(checkoutForm);
      formData.set('qty', currentQty);
      formData.set('quantity', currentQty);
      formData.set('selected_level', prodTitle);
      formData.set('level_price', unitPrice);
      formData.set('customer_name', name);
      formData.set('customer_phone', phone);
      formData.set('customer_address', addr);
      formData.set('delivery_zone', 'free');

      if (submitBtn) submitBtn.disabled = true;
      if (btnLabel) btnLabel.style.display = 'none';
      if (btnLoader) btnLoader.style.display = 'inline';
      if (feedbackEl) feedbackEl.style.display = 'none';

      fetch('<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>', {
        method: 'POST',
        body: formData
      })
      .then(function(r) { return r.json(); })
      .then(function(data) {
        if (data.success && data.data && data.data.redirect_url) {
          showFeedback('আপনার অর্ডার সফলভাবে গৃহীত হয়েছে! রিডাইরেক্ট করা হচ্ছে...', 'success');
          setTimeout(function() {
            window.location.href = data.data.redirect_url;
          }, 500);
        } else {
          var msg = (data.data && data.data.message) ? data.data.message : 'অর্ডার করতে সমস্যা হয়েছে। আবার চেষ্টা করুন।';
          showFeedback(msg, 'error');
          resetBtn();
        }
      })
      .catch(function() {
        showFeedback('সার্ভার সংযোগে সমস্যা হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন।', 'error');
        resetBtn();
      });
    });
  }
});
</script>
