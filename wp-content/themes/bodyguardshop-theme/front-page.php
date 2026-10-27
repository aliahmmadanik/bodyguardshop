<?php

/**

 * Front Page Template (front-page.php)

 * Bodyguard Shop — Custom High-Converting Homepage

 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();



$shop_url = esc_url( home_url('/shop/') );

?>



<!-- ==========================================================================

     1. HERO: BODYGUARD SHOP SALES & AWARENESS SECTION

     ========================================================================== -->

<section class="bgs-hero-section" id="bgs-hero">

  <div class="container bgs-hero-container">



    <!-- 3-Line Headings (Strictly 1 Line on All Devices) -->

    <div class="bgs-hero-headings-wrap">

      <h1 class="bgs-headline-h1">

        নিরাপত্তা বিলাসিতা নয়—এটা আপনার অধিকার

      </h1>

      <h2 class="bgs-headline-h2">

        সবসময় নিরাপদ থাকা সম্ভব নয়—কিন্তু সবসময় প্রস্তুত থাকা সম্ভব।

      </h2>

      <h3 class="bgs-headline-h3 bgs-headline-red">

        আপনার সবচেয়ে মূল্যবান সম্পদ—আপনার জীবন।

      </h3>

    </div>



    <!-- Ultra-Premium Sales Video Showcase -->

    <div class="bgs-video-showcase">

      <div class="bgs-video-glow"></div>

      <div class="bgs-video-bezel">

        <div class="bgs-video-frame">

          <iframe src="https://www.youtube.com/embed/76R7VC9NpR8?rel=0&modestbranding=1&playsinline=1" title="Bodyguard Shop Official Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>

        </div>

      </div>

    </div>



    <!-- Ultra-Premium CTA Button After Video -->

    <div class="bgs-cta-wrap">

      <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="bgs-shop-now-btn">

        <span class="bgs-cta-label">নিজের নিরাপত্তা নিশ্চিত করুন</span>

      </a>

    </div>



  </div>

</section>





<!-- ==========================================================================

     2. SECURITY FOR EVERY SITUATION (4 SEQUENTIAL CATEGORY SECTIONS)

     ========================================================================== -->

<section class="bgs-situations-section" id="situations">

  <div class="container">

    <!-- Main Section Heading (Strictly 1 Line on All Devices) -->

    <div class="bgs-section-header bgs-sit-header">

      <h2 class="bgs-section-title bgs-sit-main-title">Security For Every Situation</h2>

      <p class="bgs-section-sub bgs-sit-main-sub">প্রতিটি পরিস্থিতির জন্য সঠিক প্রস্তুতি—এক জায়গায়।</p>

      <div class="bgs-gold-divider"></div>

    </div>



    <?php

    $situation_categories = [

        [

            'name'     => 'Personal Protection',

            'slug'     => 'personal-protection',

            'subtitle' => 'দৈনন্দিন personal safety-এর জন্য',

        ],

        [

            'name'     => 'Home Security',

            'slug'     => 'home-security',

            'subtitle' => 'বাড়ির নিরাপত্তার জন্য',

        ],

        [

            'name'     => 'Travel Safety',

            'slug'     => 'travel-safety',

            'subtitle' => 'ভ্রমণ ও চলাচলের সময়',

        ],

        [

            'name'     => 'Emergency Preparedness',

            'slug'     => 'emergency-preparedness',

            'subtitle' => 'জরুরি পরিস্থিতির জন্য',

        ],

    ];

    ?>



    <div class="bgs-category-sections-wrap">

      <?php foreach ( $situation_categories as $cat_item ) :

          // Find WooCommerce category term by slug or name

          $cat_term = get_term_by( 'slug', $cat_item['slug'], 'product_cat' );

          if ( ! $cat_term ) {

              $cat_term = get_term_by( 'name', $cat_item['name'], 'product_cat' );

          }



          $cat_query = null;

          if ( $cat_term && ! is_wp_error( $cat_term ) ) {

              $cat_query = new WP_Query([

                  'post_type'      => 'product',

                  'post_status'    => 'publish',

                  'posts_per_page' => 4,

                  'orderby'        => 'menu_order',

                  'order'          => 'ASC',

                  'tax_query'      => [

                      [

                          'taxonomy' => 'product_cat',

                          'field'    => 'term_id',

                          'terms'    => $cat_term->term_id,

                      ],

                  ],

              ]);

          }

      ?>

      <!-- Single Category Block: Clean Editorial E-Commerce Category Header + Product Grid -->

      <div class="bgs-category-block" id="cat-<?php echo esc_attr( $cat_item['slug'] ); ?>">

        <div class="bgs-cat-block-header">

          <div class="bgs-cat-title-group">

            <h3 class="bgs-cat-block-title"><?php echo esc_html( $cat_item['name'] ); ?></h3>

            <p class="bgs-cat-block-sub"><?php echo esc_html( $cat_item['subtitle'] ); ?></p>

          </div>

          <a href="<?php echo esc_url( home_url( '/shop/?cat=' . $cat_item['slug'] ) ); ?>" class="bgs-cat-view-link">

            সব দেখুন &rarr;

          </a>

        </div>



        <?php if ( $cat_query && $cat_query->have_posts() ) : ?>

          <div class="bgs-bestseller-grid bgs-cat-products-grid">

            <?php while ( $cat_query->have_posts() ) : $cat_query->the_post();

                global $product;

                if ( ! is_a( $product, 'WC_Product' ) ) {

                    $product = wc_get_product( get_the_ID() );

                }

                $pid       = get_the_ID();

                $slug      = get_post_field( 'post_name', $pid );

                $perm      = get_permalink( $pid );

                $thumb_url = function_exists( 'bgs_get_product_card_image_url' ) ? bgs_get_product_card_image_url( $pid, $slug ) : get_the_post_thumbnail_url( $pid, 'medium_large' );

                $price     = $product ? (float) $product->get_price() : 0;

                $reg_price = $product ? (float) $product->get_regular_price() : 0;

                if ( ! $reg_price || $reg_price <= $price ) {

                    $reg_price = round( $price * 1.35 );

                }



                $save = max( 0, $reg_price - $price );

                $pct  = $reg_price > 0 ? round( ( $save / $reg_price ) * 100 ) : 0;



                $rating_val = '4.9';

                $reviews_ct = '184';

            ?>

              <div class="bgs-product-card">

                <?php if ( $save > 0 ) : ?>

                  <div class="bgs-card-discount-btn">🔥 ৳<?php echo number_format( $save ); ?> ছাড় (<?php echo $pct; ?>% OFF)</div>

                <?php else : ?>

                  <div class="bgs-card-discount-btn bgs-badge-hot">⚡ হট অফার</div>

                <?php endif; ?>



                <a href="<?php echo esc_url( $perm ); ?>" class="bgs-card-img-wrap">

                  <?php if ( $thumb_url ) : ?>

                    <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">

                  <?php else : ?>

                    <div class="bgs-card-no-img">🛡️ Bodygard Shop</div>

                  <?php endif; ?>

                </a>



                <div class="bgs-card-content">

                  <h3 class="bgs-card-title"><a href="<?php echo esc_url( $perm ); ?>"><?php the_title(); ?></a></h3>



                  <div class="bgs-card-rating">

                    <span class="stars">★★★★★</span>

                    <span class="rating-text"><strong><?php echo esc_html( $rating_val ); ?></strong> (<?php echo esc_html( $reviews_ct ); ?>+ রিভিউ)</span>

                  </div>



                  <div class="bgs-card-price-box">

                    <span class="bgs-cur-price">৳<?php echo number_format( $price, 0 ); ?></span>

                    <?php if ( $save > 0 ) : ?>

                      <del class="bgs-old-price">৳<?php echo number_format( $reg_price, 0 ); ?></del>

                    <?php endif; ?>

                  </div>



                  <div class="bgs-card-delivery-tag">

                    <span class="del-ic">🚚</span> ফ্রি হোম ডেলিভারি (ক্যাশ অন ডেলিভারি)

                  </div>



                  <div class="bgs-card-actions">

                    <a href="<?php echo esc_url( $perm ); ?>" class="bgs-order-now-btn">

                      অর্ডার করুন (Order Now) &rarr;

                    </a>

                  </div>

                </div>

              </div>

            <?php endwhile; wp_reset_postdata(); ?>

          </div>

        <?php endif; ?>

      </div>

      <?php endforeach; ?>

    </div>



    <!-- Explore all safety products button -->

    <div class="bgs-center-btn-wrap">

      <a href="<?php echo esc_url( home_url('/shop/') ); ?>" class="bgs-explore-btn">

        Explore All Safety Products &rarr;

      </a>

    </div>

  </div>

</section>





<!-- ==========================================================================

     3. BEST SELLING PRODUCTS (STRICTLY 2 PRODUCTS: CUT-PROOF VEST & BODYGARD COMBO)

     ========================================================================== -->

<section class="bgs-bestsellers-section" id="all-products">

  <div class="container">

    <div class="bgs-section-header bgs-best-header">

      <h2 class="bgs-section-title bgs-best-main-title">সবচেয়ে বেশি পছন্দ করা ও ব্যবহৃত safety products</h2>

      <div class="bgs-gold-divider"></div>

    </div>



    <div class="bgs-bestseller-grid bgs-two-products-grid">

      <?php

      $featured_two = [

          [

              'match_slugs' => [ 'cut-proof-t-shirt', 'cut-proof-vest', 'cut-proof' ],

              'title'       => 'Cut-Proof Vest',

              'slug'        => 'cut-proof-t-shirt',

              'price'       => 8990,

              'reg'         => 14500,

              'rating'      => '4.8',

              'rev'         => '218',

              'img'         => get_template_directory_uri() . '/assets/images/products/cut-proof-t-shirt.jpg',

          ],

          [

              'match_slugs' => [ 'bodygard-combo', 'bodyguard-combo', 'combo' ],

              'title'       => 'BodyGard Combo — ৭-ইন-১ সেলফ ডিফেন্স কিট',

              'slug'        => 'bodygard-combo',

              'price'       => 2990,

              'reg'         => 6953,

              'rating'      => '4.9',

              'rev'         => '345',

              'img'         => get_template_directory_uri() . '/assets/images/products/bodygard-combo.jpg',

          ],

      ];



      foreach ( $featured_two as $item ) :

          $found_post = null;

          foreach ( $item['match_slugs'] as $ms ) {

              $p_obj = get_page_by_path( $ms, OBJECT, 'product' );

              if ( $p_obj && $p_obj->post_status === 'publish' ) {

                  $found_post = $p_obj;

                  break;

              }

          }



          if ( $found_post ) {

              $p_id      = $found_post->ID;

              $product   = function_exists('wc_get_product') ? wc_get_product( $p_id ) : null;

              $title     = get_the_title( $p_id );

              $perm      = get_permalink( $p_id );

              $price     = $product && (float) $product->get_price() > 0 ? (float) $product->get_price() : $item['price'];

              $reg_price = $product && (float) $product->get_regular_price() > 0 ? (float) $product->get_regular_price() : $item['reg'];

              $thumb_url = get_the_post_thumbnail_url( $p_id, 'medium_large' ) ?: $item['img'];

          } else {

              $title     = $item['title'];

              $perm      = home_url( '/product/' . $item['slug'] . '/' );

              $price     = $item['price'];

              $reg_price = $item['reg'];

              $thumb_url = $item['img'];

          }



          $save = max( 0, $reg_price - $price );

          $pct  = $reg_price > 0 ? round( ( $save / $reg_price ) * 100 ) : 0;

      ?>

        <div class="bgs-product-card">

          <?php if ( $save > 0 ) : ?>

            <div class="bgs-card-discount-btn">🔥 ৳<?php echo number_format( $save ); ?> ছাড় (<?php echo $pct; ?>% OFF)</div>

          <?php else : ?>

            <div class="bgs-card-discount-btn bgs-badge-hot">⚡ হট অফার</div>

          <?php endif; ?>



          <a href="<?php echo esc_url( $perm ); ?>" class="bgs-card-img-wrap">

            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy">

          </a>



          <div class="bgs-card-content">

            <h3 class="bgs-card-title"><a href="<?php echo esc_url( $perm ); ?>"><?php echo esc_html( $title ); ?></a></h3>



            <div class="bgs-card-rating">

              <span class="stars">★★★★★</span>

              <span class="rating-text"><strong><?php echo esc_html( $item['rating'] ); ?></strong> (<?php echo esc_html( $item['rev'] ); ?>+ রিভিউ)</span>

            </div>



            <div class="bgs-card-price-box">

              <span class="bgs-cur-price">৳<?php echo number_format( $price, 0 ); ?></span>

              <?php if ( $save > 0 ) : ?>

                <del class="bgs-old-price">৳<?php echo number_format( $reg_price, 0 ); ?></del>

              <?php endif; ?>

            </div>



            <div class="bgs-card-delivery-tag">

              <span class="del-ic">🚚</span> ফ্রি হোম ডেলিভারি (ক্যাশ অন ডেলিভারি)

            </div>



            <div class="bgs-card-actions">

              <a href="<?php echo esc_url( $perm ); ?>" class="bgs-order-now-btn">

                অর্ডার করুন (Order Now) &rarr;

              </a>

            </div>

          </div>

        </div>

      <?php endforeach; ?>

    </div>

  </div>

</section>





<!-- ==========================================================================

     4. MISSION & WHY BODYGARD SHOP SECTION (EXACT USER SPECIFIED CONTENT ONLY)

     ========================================================================== -->

<section class="bgs-mission-section" id="mission">

  <div class="container bgs-mission-container">



    <!-- Part 1: BodyGard-এর লক্ষ্য -->

    <div class="bgs-mission-block">

      <h2 class="bgs-mission-title">BodyGard-এর লক্ষ্য</h2>

      <div class="bgs-gold-divider bgs-mission-divider"></div>

      <p class="bgs-mission-line-1">চুরি, ছিনতাই, ডাকাতি, অপহরণসহ অপরাধ কমিয়ে একটি নিরাপদ বাংলাদেশ গড়ে তোলা</p>

      <p class="bgs-mission-line-2">বিপদ কখন আসবে, তা আমরা জানি না কিন্তু তার আগে প্রস্তুত থাকা আমাদের হাতে।</p>

    </div>



    <!-- Part 2: কেন Bodygard shop? -->

    <div class="bgs-why-block">

      <h3 class="bgs-why-title">কেন <span>Bodygard shop?</span></h3>

      <div class="bgs-gold-divider bgs-why-divider"></div>



      <div class="bgs-why-grid">

        <!-- 1. Bangladesh's No. 1 Self-Defense Brand -->

        <div class="bgs-why-card">

          <div class="bgs-why-icon-box">🛡️</div>

          <span class="bgs-why-text">Bangladesh’s No. 1 Self-Defense Brand</span>

        </div>



        <!-- 2. World-Class Safety Products -->

        <div class="bgs-why-card">

          <div class="bgs-why-icon-box">🌍</div>

          <span class="bgs-why-text">World-Class Safety Products</span>

        </div>



        <!-- 3. 7-Day Money-Back Guarantee -->

        <div class="bgs-why-card">

          <div class="bgs-why-icon-box">💰</div>

          <span class="bgs-why-text">7-Day Money-Back Guarantee</span>

        </div>



        <!-- 4. 15-Day Replacement Guarantee -->

        <div class="bgs-why-card">

          <div class="bgs-why-icon-box">🔄</div>

          <span class="bgs-why-text">15-Day Replacement Guarantee</span>

        </div>



        <!-- 5. 24/7 Customer Support -->

        <div class="bgs-why-card">

          <div class="bgs-why-icon-box">📞</div>

          <span class="bgs-why-text">24/7 Customer Support</span>

        </div>



        <!-- 6. Free Home Delivery -->

        <div class="bgs-why-card">

          <div class="bgs-why-icon-box">🚚</div>

          <span class="bgs-why-text">Free Home Delivery</span>

        </div>

      </div>

    </div>



  </div>

</section>





<!-- ==========================================================================
     5. CUSTOMER REVIEWS (REELS VIDEO SHOWCASE - 2 VIDEOS)
     ========================================================================== -->
<section class="bgs-reels-section" id="reviews">
  <div class="container">
    <div class="bgs-section-header">
      <h2 class="bgs-section-title">Customer review</h2>
      <div class="bgs-gold-divider"></div>
    </div>

    <div class="bgs-reels-grid bgs-two-reels-grid">
      <!-- 1st Review -->
      <div class="bgs-reel-card">
        <div class="bgs-reel-frame">
          <iframe 
            src="https://www.youtube.com/embed/RyqHKNnoW-Y?rel=0&amp;modestbranding=1&amp;playsinline=1" 
            title="Customer Review 1 — Bodyguard Shop" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen 
            loading="lazy">
          </iframe>
        </div>
      </div>

      <!-- 2nd Review -->
      <div class="bgs-reel-card">
        <div class="bgs-reel-frame">
          <iframe 
            src="https://www.youtube.com/embed/T7x7RT7ynxQ?rel=0&amp;modestbranding=1&amp;playsinline=1" 
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
     6. FEATURES & TRUST BAR

     ========================================================================== -->

<section class="bgs-trust-bar">

  <div class="container">

    <div class="bgs-trust-grid">

      <div class="bgs-trust-card">

        <div class="bgs-trust-icon">🚚</div>

        <div class="bgs-trust-info">

          <h4>সারা দেশে ফ্রি হোম ডেলিভারি</h4>

          <p>সব প্রোডাক্টে ডেলিভারি চার্জ সম্পূর্ণ ফ্রি — ক্যাশ অন ডেলিভারি</p>

        </div>

      </div>



      <div class="bgs-trust-card">

        <div class="bgs-trust-icon">🛡️</div>

        <div class="bgs-trust-info">

          <h4>১০০% Authentic</h4>

          <p>আসল ও পরীক্ষিত অথেন্টিক সিকিউরিটি ডিভাইস</p>

        </div>

      </div>



      <div class="bgs-trust-card">

        <div class="bgs-trust-icon">💵</div>

        <div class="bgs-trust-info">

          <h4>ক্যাশ অন ডেলিভারি</h4>

          <p>পণ্য হাতে পেয়ে চেক করে মূল্য পরিশোধ করুন</p>

        </div>

      </div>



      <div class="bgs-trust-card">

        <div class="bgs-trust-icon">🔄</div>

        <div class="bgs-trust-info">

          <h4>রিপ্লেসমেন্ট গ্যারান্টি</h4>

          <p>যেকোনো ত্রুটিতে দ্রুততম সময়ে এক্সচেঞ্জ সাপোর্ট</p>

        </div>

      </div>

    </div>

  </div>

</section>





<!-- ==========================================================================

     INLINE STYLES FOR BODYGUARD SHOP HOMEPAGE (DARK LUXURY THEME)

     ========================================================================== -->

<style>

/* Base Theme Colors */

:root {

  --bgs-gold: #C9A96E;

  --bgs-gold-light: #dfc288;

  --bgs-dark: #0A0A0E;

  --bgs-dark-surface: #121218;

  --bgs-card-bg: #14141C;

  --bgs-border: rgba(201, 169, 110, 0.22);

  --bgs-text: #FFFFFF;

  --bgs-muted: #A0A0A0;

}



/* 1. Hero Section */

.bgs-hero-section {

  padding: 65px 20px 55px;

  background: var(--bgs-dark);

  text-align: center;

}

.bgs-hero-container {

  max-width: 1040px;

  margin: 0 auto;

}



/* Hero 3-Line Headings (Strictly 1 Line on All Devices) */

/* Hero 3-Line Headings (Executive Dark Luxury Typography) */
.bgs-hero-headings-wrap {
  text-align: center;
  width: 100%;
  max-width: 1050px;
  margin: 0 auto 30px;
  padding: 0 2px;
}
.bgs-headline-h1,
h1.bgs-headline-h1 {
  display: block !important;
  font-family: inherit;
  font-weight: 800 !important;
  color: #FFFFFF !important;
  text-shadow: 0 2px 14px rgba(0, 0, 0, 0.7);
  white-space: nowrap !important;
  text-align: center !important;
  line-height: 1.25 !important;
  margin: 0 auto 12px !important;
  padding: 0 !important;
  border: none !important;
  background: transparent !important;
  font-size: clamp(1.65rem, 3.2vw, 2.45rem) !important;
  letter-spacing: -0.2px;
}
.bgs-headline-h2,
h2.bgs-headline-h2 {
  display: block !important;
  font-family: inherit;
  font-weight: 600 !important;
  color: #D1D5DB !important;
  white-space: nowrap !important;
  text-align: center !important;
  line-height: 1.3 !important;
  margin: 0 auto 14px !important;
  padding: 0 !important;
  border: none !important;
  background: transparent !important;
  font-size: clamp(1.05rem, 2.0vw, 1.4rem) !important;
  letter-spacing: 0.3px;
}
.bgs-headline-h3,
h3.bgs-headline-h3,
.bgs-headline-red {
  display: block !important;
  font-family: inherit;
  font-weight: 800 !important;
  color: #FF2E2E !important;
  filter: drop-shadow(0 2px 12px rgba(255, 46, 46, 0.45));
  white-space: nowrap !important;
  text-align: center !important;
  line-height: 1.3 !important;
  margin: 0 auto 30px !important;
  padding: 0 !important;
  background: transparent !important;
  border: none !important;
  box-shadow: none !important;
  font-size: clamp(1.35rem, 2.6vw, 1.95rem) !important;
  letter-spacing: -0.2px;
}



/* Ultra-Premium Video Showcase */

.bgs-video-showcase {

  position: relative;

  width: 100%;

  max-width: 800px;

  margin: 0 auto 34px;

  z-index: 1;

}

.bgs-video-glow {

  position: absolute;

  inset: -16px;

  background: radial-gradient(ellipse at center, rgba(201, 169, 110, 0.24) 0%, rgba(201, 169, 110, 0.06) 48%, transparent 72%);

  border-radius: 28px;

  filter: blur(18px);

  z-index: -1;

  pointer-events: none;

}

.bgs-video-bezel {

  padding: 5px;

  border-radius: 20px;

  background: linear-gradient(135deg, rgba(255, 240, 200, 0.55) 0%, rgba(201, 169, 110, 0.85) 30%, rgba(60, 45, 20, 0.8) 60%, rgba(201, 169, 110, 0.7) 100%);

  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.8), 0 0 35px rgba(201, 169, 110, 0.28), inset 0 1px 2px rgba(255, 255, 255, 0.6);

}

.bgs-video-frame {

  position: relative;

  width: 100%;

  aspect-ratio: 16 / 9;

  background: #000;

  border-radius: 16px;

  overflow: hidden;

  box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.9);

}

.bgs-video-frame iframe {

  width: 100%;

  height: 100%;

  border: none;

  display: block;

}



/* CTA Wrap & Metallic Gold Button */

.bgs-cta-wrap {

  text-align: center;

  margin-top: 10px;

}

.bgs-shop-now-btn {

  position: relative;

  display: inline-flex !important;

  align-items: center !important;

  justify-content: center !important;

  background: linear-gradient(135deg, #F5E3B8 0%, #DFC082 28%, #C9A96E 62%, #A37E3B 100%) !important;

  color: #08080C !important;

  font-size: clamp(0.98rem, 2.5vw, 1.22rem) !important;

  font-weight: 800 !important;

  letter-spacing: 0.3px !important;

  line-height: 1.2 !important;

  white-space: nowrap !important;

  padding: 16px 46px !important;

  width: auto !important;

  max-width: 96vw !important;

  border-radius: 12px !important;

  border: 1px solid rgba(255, 245, 220, 0.85) !important;

  text-decoration: none !important;

  box-shadow: 0 12px 32px rgba(201, 169, 110, 0.38), 0 4px 12px rgba(0, 0, 0, 0.75), inset 0 1.5px 1px rgba(255, 255, 255, 0.78), inset 0 -2px 4px rgba(110, 80, 25, 0.35) !important;

  overflow: hidden !important;

  transition: transform 0.25s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.25s ease, filter 0.25s ease !important;

}

.bgs-shop-now-btn:hover {

  transform: translateY(-3px) !important;

  box-shadow: 0 16px 40px rgba(201, 169, 110, 0.55), 0 6px 16px rgba(0, 0, 0, 0.8), inset 0 1.5px 2px rgba(255, 255, 255, 0.9) !important;

  filter: brightness(1.05);

  color: #050508 !important;

}

.bgs-cta-label {

  position: relative;

  z-index: 1;

  color: #08080C !important;

  font-weight: 800 !important;

  white-space: nowrap !important;

}



/* Global Section Headers */

.bgs-section-header {

  text-align: center;

  margin-bottom: 40px;

}

.bgs-section-title {

  font-size: clamp(1.5rem, 3vw, 2.2rem);

  font-weight: 700;

  color: var(--bgs-text);

  margin-bottom: 10px;

}

.bgs-section-sub {

  font-size: 1.05rem;

  color: var(--bgs-muted);

  margin-bottom: 16px;

}

.bgs-gold-divider {

  width: 60px;

  height: 3px;

  background: var(--bgs-gold);

  margin: 0 auto;

  border-radius: 2px;

}



/* 2. Situations Section */

.bgs-situations-section {

  padding: 65px 16px;

  background: var(--bgs-dark-surface);

}

.bgs-sit-header {

  text-align: center;

  max-width: 100%;

  margin: 0 auto 38px;

  padding: 0 4px;

}

.bgs-sit-main-title,

h2.bgs-sit-main-title {

  display: block !important;

  font-weight: 800 !important;

  color: #FFFFFF !important;

  white-space: nowrap !important;

  text-align: center !important;

  line-height: 1.25 !important;

  margin: 0 auto 8px !important;

  font-size: clamp(1.18rem, 4.5vw, 2.3rem) !important;

}

.bgs-sit-main-sub,

p.bgs-sit-main-sub {

  display: block !important;

  font-weight: 600 !important;

  color: #D1D5DB !important;

  white-space: nowrap !important;

  text-align: center !important;

  line-height: 1.35 !important;

  margin: 0 auto 16px !important;

  font-size: clamp(0.76rem, 3.2vw, 1.15rem) !important;

}



/* Sequential Category Blocks */

.bgs-category-sections-wrap {

  max-width: 1140px;

  margin: 10px auto 40px;

  display: flex;

  flex-direction: column;

  gap: 44px;

}

.bgs-category-block {

  width: 100%;

}

.bgs-cat-block-header {

  display: flex;

  align-items: flex-end;

  justify-content: space-between;

  gap: 16px;

  padding: 0 0 14px 0;

  margin-bottom: 24px;

  background: transparent !important;

  border: none !important;

  border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;

  border-radius: 0 !important;

  position: relative;

  text-align: left;

}

.bgs-cat-block-header::after {

  content: "";

  position: absolute;

  left: 0;

  bottom: -1px;

  width: 72px;

  height: 2px;

  background: #C9A96E;

}

.bgs-cat-title-group {

  padding-left: 14px;

  border-left: 3.5px solid #C9A96E;

  text-align: left;

}

.bgs-cat-block-title,

h3.bgs-cat-block-title {

  font-size: clamp(1.12rem, 3vw, 1.5rem) !important;

  font-weight: 800 !important;

  color: #FFFFFF !important;

  margin: 0 0 4px 0 !important;

  line-height: 1.25 !important;

  white-space: nowrap !important;

  text-align: left !important;

  letter-spacing: 0.2px !important;

}

.bgs-cat-block-sub,

p.bgs-cat-block-sub {

  font-size: clamp(0.84rem, 2.4vw, 1rem) !important;

  font-weight: 500 !important;

  color: #C9A96E !important;

  margin: 0 !important;

  line-height: 1.35 !important;

  white-space: nowrap !important;

  text-align: left !important;

}

.bgs-cat-view-link {

  display: inline-flex;

  align-items: center;

  gap: 4px;

  color: #D1D5DB !important;

  font-size: 0.85rem;

  font-weight: 600;

  text-decoration: none !important;

  padding: 6px 14px;

  border: 1px solid rgba(201, 169, 110, 0.3);

  border-radius: 6px;

  background: rgba(201, 169, 110, 0.06);

  white-space: nowrap;

  flex-shrink: 0;

  transition: all 0.2s ease;

}

.bgs-cat-view-link:hover {

  background: #C9A96E;

  color: #08080C !important;

  border-color: #C9A96E;

}

.bgs-center-btn-wrap {

  text-align: center;

}

.bgs-explore-btn {

  display: inline-block;

  color: var(--bgs-gold);

  border: 1.5px solid var(--bgs-gold);

  padding: 12px 34px;

  border-radius: 50px;

  font-weight: 700;

  font-size: 1rem;

  text-decoration: none !important;

  transition: all 0.2s ease;

}

.bgs-explore-btn:hover {

  background: var(--bgs-gold);

  color: #0A0A0A !important;

}



/* 3. Best Sellers Section */

.bgs-bestsellers-section {

  padding: 75px 20px;

  background: var(--bgs-dark);

}

.bgs-best-header {

  text-align: center;

  max-width: 100%;

  margin: 0 auto 34px;

  padding: 0 4px;

}

.bgs-best-main-title,

h2.bgs-best-main-title {

  display: block !important;

  font-family: inherit !important;

  font-weight: 800 !important;

  color: #FFFFFF !important;

  white-space: nowrap !important;

  text-align: center !important;

  line-height: 1.3 !important;

  margin: 0 auto 12px !important;

  padding: 0 !important;

  font-size: clamp(10.5px, 2.65vw, 1.85rem) !important;

}

.bgs-two-products-grid {

  display: grid !important;

  grid-template-columns: repeat(2, 1fr) !important;

  gap: 30px !important;

  max-width: 780px !important;

  margin: 0 auto !important;

}

.bgs-bestseller-grid {

  display: grid;

  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));

  gap: 30px;

  max-width: 1080px;

  margin: 0 auto;

}



/* Product Cards */

.bgs-product-card {

  background: var(--bgs-card-bg);

  border: 1px solid var(--bgs-border);

  border-radius: 14px;

  overflow: hidden;

  position: relative;

  display: flex;

  flex-direction: column;

  transition: transform 0.25s ease, box-shadow 0.25s ease;

}

.bgs-product-card:hover {

  transform: translateY(-4px);

  box-shadow: 0 12px 32px rgba(0, 0, 0, 0.5);

  border-color: var(--bgs-gold);

}

.bgs-card-discount-btn {

  position: absolute;

  top: 12px;

  left: 12px;

  z-index: 2;

  background: linear-gradient(135deg, #FF3838 0%, #D32F2F 100%);

  color: #FFFFFF;

  font-size: 0.76rem;

  font-weight: 800;

  padding: 4px 11px;

  border-radius: 6px;

  box-shadow: 0 4px 10px rgba(255, 56, 56, 0.4);

}

.bgs-badge-hot {

  background: linear-gradient(135deg, #FFB800 0%, #E65100 100%);

}

.bgs-card-img-wrap {

  width: 100%;

  aspect-ratio: 16 / 10;

  display: flex;

  align-items: center;

  justify-content: center;

  background: #111;

  overflow: hidden;

}

.bgs-card-img-wrap img {

  width: 100%;

  height: 100%;

  object-fit: cover;

  transition: transform 0.3s ease;

}

.bgs-product-card:hover .bgs-card-img-wrap img {

  transform: scale(1.04);

}

.bgs-card-no-img {

  color: var(--bgs-gold);

  font-size: 1.2rem;

  font-weight: 700;

}

.bgs-card-content {

  padding: 24px;

  display: flex;

  flex-direction: column;

  flex-grow: 1;

}

.bgs-card-title {

  font-size: 1.2rem;

  font-weight: 700;

  margin-bottom: 10px;

  line-height: 1.4;

}

.bgs-card-title a {

  color: var(--bgs-text);

  text-decoration: none;

}

.bgs-card-title a:hover {

  color: var(--bgs-gold);

}

.bgs-card-rating {

  display: flex;

  align-items: center;

  gap: 8px;

  margin-bottom: 14px;

}

.bgs-card-rating .stars {

  color: #FFB800;

  font-size: 0.95rem;

}

.bgs-card-rating .rating-text {

  font-size: 0.82rem;

  color: var(--bgs-muted);

}

.bgs-card-price-box {

  margin-bottom: 20px;

  display: flex;

  align-items: baseline;

  gap: 10px;

}

.bgs-cur-price {

  font-size: 1.6rem;

  font-weight: 800;

  color: var(--bgs-gold);

}

.bgs-old-price {

  color: #777;

  font-size: 1.05rem;

}

.bgs-card-delivery-tag {

  font-size: 0.82rem;

  color: #9CA3AF;

  margin-bottom: 14px;

}

.bgs-card-actions {

  margin-top: auto;

}

.bgs-order-now-btn {

  display: block;

  width: 100%;

  text-align: center;

  background: var(--bgs-gold);

  color: #0A0A0A !important;

  font-weight: 800;

  font-size: 1.05rem;

  padding: 13px 20px;

  border-radius: 8px;

  text-decoration: none !important;

  transition: background 0.2s;

}

.bgs-order-now-btn:hover {

  background: var(--bgs-gold-light);

}



/* ==========================================================================

   4. MISSION & WHY BODYGARD SHOP (PURE SOLID DARK LUXURY - NO WHITE GLARE)

   ========================================================================== */

.bgs-mission-section {

  padding: 65px 16px 60px;

  background: #0A0A0E !important; /* Pure Solid Matte Dark Luxury */

  border-top: 1px solid rgba(201, 169, 110, 0.15);

  border-bottom: 1px solid rgba(201, 169, 110, 0.15);

  position: relative;

}

.bgs-mission-container {

  max-width: 1040px;

  margin: 0 auto;

}



/* Part 1: BodyGard-এর লক্ষ্য */

.bgs-mission-block {

  text-align: center;

  max-width: 860px;

  margin: 0 auto 52px;

}

.bgs-mission-title,

h2.bgs-mission-title {

  font-size: clamp(1.4rem, 3.5vw, 2.2rem) !important;

  font-weight: 800 !important;

  color: #FFFFFF !important;

  margin: 0 auto 12px !important;

  line-height: 1.25 !important;

  text-align: center !important;

}

.bgs-mission-divider {

  margin-bottom: 22px !important;

}

.bgs-mission-line-1,

p.bgs-mission-line-1 {

  font-size: clamp(0.95rem, 2.3vw, 1.25rem) !important;

  font-weight: 700 !important;

  color: #C9A96E !important;

  line-height: 1.6 !important;

  margin: 0 auto 10px !important;

  text-align: center !important;

  max-width: 780px;

}

.bgs-mission-line-2,

p.bgs-mission-line-2 {

  font-size: clamp(0.88rem, 2.1vw, 1.12rem) !important;

  font-weight: 500 !important;

  color: #E5E7EB !important;

  line-height: 1.6 !important;

  margin: 0 auto !important;

  text-align: center !important;

  max-width: 780px;

}



/* Part 2: কেন Bodygard shop? */

.bgs-why-block {

  max-width: 1040px;

  margin: 0 auto;

  text-align: center;

}

.bgs-why-title,

h3.bgs-why-title {

  font-size: clamp(1.3rem, 3.5vw, 2.1rem) !important;

  font-weight: 800 !important;

  color: #FFFFFF !important;

  margin: 0 auto 12px !important;

  line-height: 1.25 !important;

  text-align: center !important;

}

.bgs-why-title span {

  color: #C9A96E !important;

}

.bgs-why-divider {

  margin-bottom: 30px !important;

}

.bgs-why-grid {

  display: grid;

  grid-template-columns: repeat(3, 1fr);

  gap: 18px;

}

.bgs-why-card {

  display: flex;

  align-items: center;

  gap: 14px;

  padding: 16px 20px;

  background: #121218 !important; /* Pure solid dark surface */

  border: 1px solid rgba(201, 169, 110, 0.22);

  border-radius: 12px;

  box-shadow: 0 8px 22px rgba(0, 0, 0, 0.45);

  transition: transform 0.25s ease, border-color 0.25s ease;

}

.bgs-why-card:hover {

  transform: translateY(-3px);

  border-color: #C9A96E;

  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.65), 0 0 16px rgba(201, 169, 110, 0.15);

}

.bgs-why-icon-box {

  width: 44px;

  height: 44px;

  border-radius: 10px;

  background: rgba(201, 169, 110, 0.1);

  border: 1px solid rgba(201, 169, 110, 0.35);

  display: flex;

  align-items: center;

  justify-content: center;

  font-size: 1.35rem;

  flex-shrink: 0;

}

.bgs-why-text {

  font-size: 0.96rem;

  font-weight: 700;

  color: #FFFFFF;

  line-height: 1.35;

  text-align: left;

}



/* 5. Reels Section (2 Videos Perfectly Centered) */
.bgs-reels-section {
  padding: 75px 20px;
  background: var(--bgs-dark);
}
.bgs-two-reels-grid,
.bgs-reels-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr) !important;
  gap: 28px !important;
  max-width: 680px !important;
  margin: 0 auto !important;
}
.bgs-reel-card {
  background: #14141C;
  border: 1px solid rgba(201, 169, 110, 0.25);
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 14px 34px rgba(0, 0, 0, 0.6);
  transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
}
.bgs-reel-card:hover {
  transform: translateY(-4px);
  border-color: #C9A96E;
  box-shadow: 0 18px 42px rgba(0, 0, 0, 0.8), 0 0 20px rgba(201, 169, 110, 0.2);
}
.bgs-reel-frame {
  width: 100%;
  aspect-ratio: 9 / 16;
  background: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
}
.bgs-reel-frame iframe {
  width: 100%;
  height: 100%;
  border: none;
  display: block;
}



/* 6. Trust Bar */

.bgs-trust-bar {

  padding: 55px 20px;

  background: var(--bgs-dark-surface);

  border-top: 1px solid var(--bgs-border);

}

.bgs-trust-grid {

  display: grid;

  grid-template-columns: repeat(4, 1fr);

  gap: 24px;

  max-width: 1100px;

  margin: 0 auto;

}

.bgs-trust-card {

  display: flex;

  align-items: center;

  gap: 16px;

  background: var(--bgs-card-bg);

  padding: 20px;

  border-radius: 12px;

  border: 1px solid var(--bgs-border);

}

.bgs-trust-icon {

  font-size: 2.2rem;

  flex-shrink: 0;

}

.bgs-trust-info h4 {

  font-size: 0.98rem;

  font-weight: 700;

  color: var(--bgs-text);

  margin-bottom: 4px;

}

.bgs-trust-info p {

  font-size: 0.82rem;

  color: var(--bgs-muted);

  line-height: 1.4;

  margin: 0;

}



/* Responsive Media Queries */

@media (max-width: 900px) {

  .bgs-situations-grid {

    grid-template-columns: repeat(2, 1fr);

  }

  .bgs-trust-grid {

    grid-template-columns: repeat(2, 1fr);

  }

  .bgs-why-grid {

    grid-template-columns: repeat(2, 1fr);

    gap: 14px;

  }

}

@media (max-width: 650px) {
  .bgs-hero-section {
    padding: 24px 6px 20px !important;
  }
  .bgs-hero-container {
    padding-left: 2px !important;
    padding-right: 2px !important;
    max-width: 100% !important;
  }
  .bgs-hero-headings-wrap {
    margin-bottom: 20px !important;
    padding: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
    overflow: hidden !important;
  }
  .bgs-headline-h1,
  h1.bgs-headline-h1 {
    font-size: clamp(11px, 3.4vw, 16px) !important;
    margin-bottom: 6px !important;
    white-space: nowrap !important;
    line-height: 1.25 !important;
    letter-spacing: -0.2px !important;
  }
  .bgs-headline-h2,
  h2.bgs-headline-h2 {
    font-size: clamp(8.8px, 2.7vw, 12px) !important;
    margin-bottom: 8px !important;
    white-space: nowrap !important;
    line-height: 1.3 !important;
    letter-spacing: -0.25px !important;
  }
  .bgs-headline-h3,
  h3.bgs-headline-h3,
  .bgs-headline-red {
    font-size: clamp(10.5px, 3.2vw, 15px) !important;
    margin-bottom: 20px !important;
    white-space: nowrap !important;
    color: #FF2424 !important;
    line-height: 1.3 !important;
    letter-spacing: -0.2px !important;
  }

  .bgs-video-showcase {

    margin-bottom: 24px !important;

  }

  .bgs-video-bezel {

    padding: 3px !important;

    border-radius: 14px !important;

  }

  .bgs-video-frame {

    border-radius: 11px !important;

  }

  .bgs-shop-now-btn {

    padding: 14px 30px !important;

    font-size: clamp(0.92rem, 4.1vw, 1.08rem) !important;

    width: auto !important;

    max-width: 94vw !important;

    white-space: nowrap !important;

    border-radius: 10px !important;

  }

  .bgs-situations-grid {

    grid-template-columns: 1fr;

    gap: 16px;

  }

  .bgs-bestseller-grid {

    grid-template-columns: 1fr;

    gap: 24px;

  }

  .bgs-bestsellers-section {

    padding: 38px 8px 36px !important;

  }

  .bgs-best-header {

    margin-bottom: 20px !important;

    padding: 0 2px !important;

  }

  .bgs-best-main-title,

  h2.bgs-best-main-title {

    font-size: clamp(9.2px, 2.75vw, 13.5px) !important;

    white-space: nowrap !important;

    margin-bottom: 8px !important;

    letter-spacing: -0.2px !important;

  }

  .bgs-two-products-grid {

    grid-template-columns: 1fr !important;

    gap: 20px !important;

    max-width: 420px !important;

  }

  .bgs-mission-section {

    padding: 42px 10px 38px !important;

  }

  .bgs-mission-block {

    margin-bottom: 38px;

  }

  .bgs-mission-line-1,

  p.bgs-mission-line-1 {

    font-size: 0.95rem !important;

    line-height: 1.55 !important;

  }

  .bgs-mission-line-2,

  p.bgs-mission-line-2 {

    font-size: 0.88rem !important;

    line-height: 1.55 !important;

  }

  .bgs-why-grid {

    grid-template-columns: 1fr;

    gap: 10px;

  }

  .bgs-why-card {

    padding: 13px 15px;

    border-radius: 10px;

  }

  .bgs-why-icon-box {

    width: 38px;

    height: 38px;

    font-size: 1.2rem;

  }

  .bgs-why-text {

    font-size: 0.91rem;

  }

  .bgs-reels-section {

    padding: 45px 12px;

  }

  .bgs-reels-grid {

    grid-template-columns: 1fr;

    gap: 20px;

    max-width: 420px;

    margin: 0 auto;

  }

  .bgs-trust-grid {

    grid-template-columns: 1fr;

    gap: 14px;

  }

}



@media (max-width: 480px) {
  .bgs-hero-section {
    padding: 22px 6px 18px !important;
  }
  .bgs-hero-container {
    padding-left: 2px !important;
    padding-right: 2px !important;
  }
  .bgs-hero-headings-wrap {
    overflow: hidden !important;
    padding: 0 !important;
  }
  .bgs-headline-h1,
  h1.bgs-headline-h1 {
    font-size: clamp(11px, 3.3vw, 14.5px) !important;
    white-space: nowrap !important;
    margin-bottom: 5px !important;
    letter-spacing: -0.25px !important;
  }
  .bgs-headline-h2,
  h2.bgs-headline-h2 {
    font-size: clamp(8.8px, 2.65vw, 11px) !important;
    white-space: nowrap !important;
    margin-bottom: 7px !important;
    letter-spacing: -0.25px !important;
  }
  .bgs-headline-h3,
  h3.bgs-headline-h3,
  .bgs-headline-red {
    font-size: clamp(10.5px, 3.15vw, 13.5px) !important;
    white-space: nowrap !important;
    color: #FF2424 !important;
    margin-bottom: 18px !important;
    letter-spacing: -0.25px !important;
  }
  .bgs-sit-main-title,
  h2.bgs-sit-main-title {
    font-size: clamp(1.08rem, 5.1vw, 1.45rem) !important;
    white-space: nowrap !important;
  }
  .bgs-sit-main-sub,
  p.bgs-sit-main-sub {
    font-size: clamp(0.72rem, 3.45vw, 0.95rem) !important;
    white-space: nowrap !important;
  }
  .bgs-category-sections-wrap {
    gap: 32px;
  }
  .bgs-cat-block-header {
    padding-bottom: 10px;
    margin-bottom: 16px;
  }
  .bgs-cat-title-group {
    padding-left: 10px;
    border-left-width: 3px;
  }
  .bgs-cat-view-link {
    font-size: 0.76rem;
    padding: 5px 10px;
  }
  .bgs-reels-grid {
    grid-template-columns: 1fr !important;
  }
}

@media (max-width: 390px) {
  .bgs-headline-h1,
  h1.bgs-headline-h1 {
    font-size: 11.5px !important;
    letter-spacing: -0.25px !important;
  }
  .bgs-headline-h2,
  h2.bgs-headline-h2 {
    font-size: 9.6px !important;
    letter-spacing: -0.25px !important;
  }
  .bgs-headline-h3,
  h3.bgs-headline-h3,
  .bgs-headline-red {
    font-size: 11px !important;
    letter-spacing: -0.25px !important;
  }
}

@media (max-width: 375px) {
  .bgs-headline-h1,
  h1.bgs-headline-h1 {
    font-size: 11.8px !important;
    letter-spacing: -0.25px !important;
  }
  .bgs-headline-h2,
  h2.bgs-headline-h2 {
    font-size: 9.4px !important;
    letter-spacing: -0.25px !important;
  }
  .bgs-headline-h3,
  h3.bgs-headline-h3,
  .bgs-headline-red {
    font-size: 11.2px !important;
    letter-spacing: -0.25px !important;
  }
  .bgs-best-main-title,
  h2.bgs-best-main-title {
    font-size: 10px !important;
    letter-spacing: -0.3px !important;
  }
}

@media (max-width: 360px) {
  .bgs-headline-h1,
  h1.bgs-headline-h1 {
    font-size: 11.2px !important;
    letter-spacing: -0.3px !important;
    white-space: nowrap !important;
  }
  .bgs-headline-h2,
  h2.bgs-headline-h2 {
    font-size: 9px !important;
    letter-spacing: -0.3px !important;
    white-space: nowrap !important;
  }
  .bgs-headline-h3,
  h3.bgs-headline-h3,
  .bgs-headline-red {
    font-size: 10.6px !important;
    letter-spacing: -0.3px !important;
    white-space: nowrap !important;
  }
  .bgs-sit-main-title,
  h2.bgs-sit-main-title {
    font-size: 16.5px !important;
    white-space: nowrap !important;
  }
  .bgs-sit-main-sub,
  p.bgs-sit-main-sub {
    font-size: 11.2px !important;
    white-space: nowrap !important;
  }
}

@media (max-width: 330px) {
  .bgs-headline-h1,
  h1.bgs-headline-h1 {
    font-size: 10px !important;
  }
  .bgs-headline-h2,
  h2.bgs-headline-h2 {
    font-size: 8.2px !important;
  }
  .bgs-headline-h3,
  h3.bgs-headline-h3,
  .bgs-headline-red {
    font-size: 9.6px !important;
    letter-spacing: -0.35px !important;
  }
  .bgs-best-main-title,
  h2.bgs-best-main-title {
    font-size: 8.8px !important;
  }
}

</style>



<?php get_footer(); ?>

