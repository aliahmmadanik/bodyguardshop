<?php
/**
 * Front Page Template (front-page.php)
 * Bodyguard Shop — Custom High-Converting Homepage
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$shop_url = function_exists('wc_get_page_id') ? esc_url(get_permalink(wc_get_page_id('shop'))) : '#all-products';
?>

<!-- ==========================================================================
     1. HERO: BODYGUARD SHOP SALES & AWARENESS SECTION
     ========================================================================== -->
<section class="bgs-hero-section" id="bgs-hero">
  <div class="container bgs-hero-container">

    <!-- 1st line h1 -->
    <h1 class="bgs-headline-h1">
      নিরাপত্তা শুধু প্রয়োজনের সময় মনে করার বিষয় নয়
    </h1>

    <!-- 2nd line h2 -->
    <h2 class="bgs-headline-h2">
      এটি আগে থেকেই নিশ্চিত করার বিষয়।
    </h2>

    <!-- 3rd line h3 -->
    <h3 class="bgs-highlight-banner bgs-headline-h3">
      আপনার পরিবারের নিরাপত্তা কোনো বিলাসিতা নয়, এটি আপনার দায়িত্ব।
    </h3>

    <!-- Sales Video Container -->
    <div class="bgs-video-frame">
      <?php
      $hero_video = get_option('bgs_hero_video_url', 'https://www.youtube.com/embed/4NrRuGW7q7Q');
      if ( empty($hero_video) ) {
          $hero_video = 'https://www.youtube.com/embed/4NrRuGW7q7Q';
      }
      // Convert youtu.be or watch?v= to embed URL
      if ( strpos($hero_video, 'youtu.be/') !== false ) {
          $vid_id = trim(substr($hero_video, strrpos($hero_video, '/') + 1));
          $hero_video = 'https://www.youtube.com/embed/' . $vid_id;
      } elseif ( strpos($hero_video, 'watch?v=') !== false ) {
          parse_str(parse_url($hero_video, PHP_URL_QUERY), $qp);
          if ( !empty($qp['v']) ) {
              $hero_video = 'https://www.youtube.com/embed/' . $qp['v'];
          }
      }
      $embed_src = $hero_video . (strpos($hero_video, '?') === false ? '?rel=0&modestbranding=1&playsinline=1' : '&rel=0&modestbranding=1&playsinline=1');
      ?>
      <iframe src="<?php echo esc_url($embed_src); ?>" title="Bodyguard Shop Sales Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
    </div>


    <!-- Shop Now CTA Button -->
    <div class="bgs-cta-wrap">
      <a href="<?php echo esc_url($shop_url); ?>" class="bgs-shop-now-btn">
        Shop now
      </a>
    </div>

  </div>
</section>


<!-- ==========================================================================
     2. SECURITY FOR EVERY SITUATION (CATEGORY / USE-CASE GRID)
     ========================================================================== -->
<section class="bgs-situations-section" id="situations">
  <div class="container">
    <div class="bgs-section-header">
      <h2 class="bgs-section-title">Security For Every Situation</h2>
      <p class="bgs-section-sub">প্রতিটি পরিস্থিতির জন্য সঠিক প্রস্তুতি—এক জায়গায়।</p>
      <div class="bgs-gold-divider"></div>
    </div>

    <div class="bgs-situations-grid">
      <!-- 1. Personal Protection -->
      <div class="bgs-situation-card">
        <div class="bgs-sit-icon">🛡️</div>
        <h3>Personal Protection</h3>
        <p>দৈনন্দিন personal safety-এর জন্য</p>
      </div>

      <!-- 2. Home Security -->
      <div class="bgs-situation-card">
        <div class="bgs-sit-icon">🏠</div>
        <h3>Home Security</h3>
        <p>বাড়ির নিরাপত্তার জন্য</p>
      </div>

      <!-- 3. Travel Safety -->
      <div class="bgs-situation-card">
        <div class="bgs-sit-icon">🚗</div>
        <h3>Travel Safety</h3>
        <p>ভ্রমণ ও চলাচলের সময়</p>
      </div>

      <!-- 4. Emergency Preparedness -->
      <div class="bgs-situation-card">
        <div class="bgs-sit-icon">🚨</div>
        <h3>Emergency Preparedness</h3>
        <p>জরুরি পরিস্থিতির জন্য</p>
      </div>
    </div>

    <div class="bgs-center-btn-wrap">
      <a href="<?php echo esc_url($shop_url); ?>" class="bgs-explore-btn">
        Explore All Safety Products &rarr;
      </a>
    </div>
  </div>
</section>


<!-- ==========================================================================
     3. BEST SELLING PRODUCTS (2 SIDE-BY-SIDE CARDS)
     ========================================================================== -->
<section class="bgs-bestsellers-section" id="all-products">
  <div class="container">
    <div class="bgs-section-header">
      <h2 class="bgs-section-title">সবচেয়ে বেশি পছন্দ করা ও ব্যবহৃত safety products।</h2>
      <p class="bgs-section-sub">আমাদের টপ-রেটেড ও গ্রাহকদের সর্বাধিক বিশ্বস্ত সেলফ-ডিফেন্স গ্যাজেট</p>
      <div class="bgs-gold-divider"></div>
    </div>

    <div class="bgs-bestseller-grid">
      <?php
      $best_query = new WP_Query([
          'post_type'      => 'product',
          'posts_per_page' => 8,
          'orderby'        => 'menu_order',
          'order'          => 'ASC',
      ]);


      if ( $best_query->have_posts() ) :
          while ( $best_query->have_posts() ) : $best_query->the_post();
              $p_id      = get_the_ID();
              $product   = wc_get_product($p_id);
              $price     = $product ? $product->get_price() : '0';
              $reg_price = $product ? $product->get_regular_price() : '0';
              $is_sale   = $product && $product->is_on_sale();
              $perm      = get_permalink($p_id);
              $thumb_url = get_the_post_thumbnail_url($p_id, 'medium_large');
              if ( ! $thumb_url ) {
                  $slug = $product ? $product->get_slug() : get_post_field('post_name', $p_id);
                  if ( strpos($slug, 'cut-proof') !== false ) {
                      $thumb_url = get_template_directory_uri() . '/assets/images/products/cut-proof-t-shirt.jpg';
                  } elseif ( strpos($slug, 'combo') !== false ) {
                      $thumb_url = get_template_directory_uri() . '/assets/images/products/bodygard-combo.jpg';
                  } elseif ( strpos($slug, 'pepper') !== false ) {
                      $thumb_url = get_template_directory_uri() . '/assets/images/products/pepper-spray.png';
                  } elseif ( strpos($slug, 'baseball') !== false ) {
                      $thumb_url = get_template_directory_uri() . '/assets/images/products/baseball-bat.jpg';
                  } elseif ( strpos($slug, 'stun') !== false ) {
                      $thumb_url = get_template_directory_uri() . '/assets/images/products/stun-gun.jpg';
                  }
              }
      ?>
        <div class="bgs-product-card">
          <div class="bgs-card-badge">✦ Best Selling Product</div>
          
          <a href="<?php echo esc_url($perm); ?>" class="bgs-card-img-wrap">
            <?php if ($thumb_url) : ?>
              <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
            <?php else : ?>
              <div class="bgs-card-no-img">🛡️ Bodyguard Shop</div>
            <?php endif; ?>
          </a>

          <div class="bgs-card-content">
            <h3 class="bgs-card-title"><a href="<?php echo esc_url($perm); ?>"><?php the_title(); ?></a></h3>
            
            <div class="bgs-card-rating">
              <span class="stars">★★★★★</span>
              <span class="rating-text">5.0 (Customer Favorite)</span>
            </div>

            <div class="bgs-card-price-box">
              <span class="bgs-cur-price">৳<?php echo number_format((float)$price, 0); ?></span>
              <?php if ($is_sale && (float)$reg_price > 0) : ?>
                <del class="bgs-old-price">৳<?php echo number_format((float)$reg_price, 0); ?></del>
              <?php endif; ?>
            </div>

            <div class="bgs-card-actions">
              <a href="<?php echo esc_url($perm); ?>" class="bgs-order-now-btn">
                Order Now
              </a>
            </div>
          </div>
        </div>
      <?php
          endwhile;
          wp_reset_postdata();
      else :
          echo '<p style="text-align:center; color:#888; grid-column:1/-1;">শীঘ্রই প্রোডাক্ট যুক্ত হবে।</p>';
      endif;
      ?>
    </div>
  </div>
</section>


<!-- ==========================================================================
     4. MISSION / AWARENESS SECTION ("BodyGard-এর লক্ষ্য")
     ========================================================================== -->
<section class="bgs-mission-section" id="mission">
  <div class="container">
    <div class="bgs-mission-box">
      <span class="bgs-badge-gold">OUR MISSION</span>
      <h2 class="bgs-mission-title">BodyGard-এর লক্ষ্য</h2>
      
      <p class="bgs-mission-lead">
        চুরি, ছিনতাই, ডাকাতি, অপহরণসহ অপরাধ কমিয়ে একটি নিরাপদ বাংলাদেশ গড়ে তোলা
      </p>

      <div class="bgs-quotes-grid">
        <div class="bgs-quote-card">
          <div class="bgs-quote-icon">🛡️</div>
          <p class="bgs-quote-text">
            “সবসময় নিরাপদ থাকা সম্ভব নয়। কিন্তু সবসময় প্রস্তুত থাকা সম্ভব।”
          </p>
        </div>

        <div class="bgs-quote-card">
          <div class="bgs-quote-icon">⚠️</div>
          <p class="bgs-quote-text">
            “বিপদ কখন আসবে, তা আমরা জানি না কিন্তু তার আগে প্রস্তুত থাকা আমাদের হাতে।”
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ==========================================================================
     5. CUSTOMER REVIEWS (REELS VIDEO SHOWCASE)
     ========================================================================== -->
<section class="bgs-reels-section" id="reviews">
  <div class="container">
    <div class="bgs-section-header">
      <h2 class="bgs-section-title">Customer review</h2>
      <div class="bgs-gold-divider"></div>
    </div>

    <?php
    $review_1 = get_option('bgs_review_video_1', 'https://www.youtube.com/embed/RyqHKNnoW-Y');
    $review_2 = get_option('bgs_review_video_2', 'https://www.youtube.com/embed/T7x7RT7ynxQ');
    $review_3 = get_option('bgs_review_video_3', 'https://www.youtube.com/watch?v=Id4CSc8QS1Y');

    if ( ! function_exists('bgs_clean_yt_embed') ) {
        function bgs_clean_yt_embed($url, $default_id) {
            if ( empty($url) ) return 'https://www.youtube.com/embed/' . $default_id . '?rel=0&modestbranding=1&playsinline=1';
            if ( strpos($url, '/shorts/') !== false ) {
                $parts = explode('/shorts/', $url);
                $id = explode('?', $parts[1])[0];
                return 'https://www.youtube.com/embed/' . trim($id, '/') . '?rel=0&modestbranding=1&playsinline=1';
            }
            if ( strpos($url, 'youtu.be/') !== false ) {
                $id = trim(substr($url, strrpos($url, '/') + 1));
                return 'https://www.youtube.com/embed/' . $id . '?rel=0&modestbranding=1&playsinline=1';
            }
            if ( strpos($url, 'watch?v=') !== false ) {
                parse_str(parse_url($url, PHP_URL_QUERY), $qp);
                if ( !empty($qp['v']) ) return 'https://www.youtube.com/embed/' . $qp['v'] . '?rel=0&modestbranding=1&playsinline=1';
            }
            if ( strpos($url, 'embed/') !== false ) {
                return $url . (strpos($url, '?') === false ? '?rel=0&modestbranding=1&playsinline=1' : '');
            }
            return 'https://www.youtube.com/embed/' . trim($url) . '?rel=0&modestbranding=1&playsinline=1';
        }
    }

    $embed_1 = bgs_clean_yt_embed($review_1, 'RyqHKNnoW-Y');
    $embed_2 = bgs_clean_yt_embed($review_2, 'T7x7RT7ynxQ');
    $embed_3 = bgs_clean_yt_embed($review_3, 'Id4CSc8QS1Y');
    ?>

    <div class="bgs-reels-grid">
      <!-- Reel 1: Customer Review 1 -->
      <div class="bgs-reel-card">
        <div class="bgs-reel-frame">
          <iframe 
            src="<?php echo esc_url($embed_1); ?>" 
            title="Customer Review 1 — Bodyguard Shop" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen 
            loading="lazy">
          </iframe>
        </div>
      </div>

      <!-- Reel 2: Customer Review 2 -->
      <div class="bgs-reel-card">
        <div class="bgs-reel-frame">
          <iframe 
            src="<?php echo esc_url($embed_2); ?>" 
            title="Customer Review 2 — Bodyguard Shop" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen 
            loading="lazy">
          </iframe>
        </div>
      </div>

      <!-- Reel 3: Customer Review 3 -->
      <div class="bgs-reel-card">
        <div class="bgs-reel-frame">
          <iframe 
            src="<?php echo esc_url($embed_3); ?>" 
            title="Customer Review 3 — Bodyguard Shop" 
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
          <h4>সারা দেশে দ্রুত ডেলিভারি</h4>
          <p>ঢাকায় ২৪-৪৮ ঘন্টায়, সারা বাংলাদেশে ১–৩ দিনে ডেলিভারি</p>
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
     INLINE STYLES FOR BODYGUARD SHOP HOMEPAGE
     ========================================================================== -->
<style>
/* Base Theme Colors */
:root {
  --bgs-gold: #C9A96E;
  --bgs-gold-light: #dfc288;
  --bgs-dark: #0A0A0A;
  --bgs-dark-surface: #141414;
  --bgs-card-bg: #181818;
  --bgs-border: rgba(201, 169, 110, 0.25);
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
.bgs-headline,
.bgs-headline-h1 {
  font-size: clamp(1.25rem, 2.6vw, 2.15rem);
  font-weight: 700;
  line-height: 1.35;
  color: var(--bgs-text, #FFFFFF);
  margin: 0 auto 12px;
  max-width: 980px;
  text-wrap: balance;
}
@media (min-width: 880px) {
  .bgs-headline-h1 {
    white-space: nowrap;
  }
}
.bgs-headline-h2 {
  font-size: clamp(1.15rem, 2.3vw, 1.75rem);
  font-weight: 700;
  line-height: 1.35;
  color: var(--bgs-gold, #C9A96E);
  margin: 0 auto 24px;
}
.bgs-highlight-banner,
.bgs-headline-h3 {
  display: inline-block;
  background: #FFE500;
  color: #B71C1C;
  font-size: clamp(0.92rem, 2vw, 1.25rem);
  font-weight: 800;
  padding: 8px 24px;
  border-radius: 4px;
  margin: 0 auto 36px;
  box-shadow: 0 4px 15px rgba(255, 229, 0, 0.3);
  line-height: 1.5;
}
.bgs-video-frame {
  width: 100%;
  max-width: 760px;
  aspect-ratio: 16 / 9;
  margin: 0 auto 36px;
  background: #141c24;
  border: 1.5px solid var(--bgs-border);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 16px 48px rgba(0, 0, 0, 0.6);
  display: flex;
  align-items: center;
  justify-content: center;
}
.bgs-video-frame iframe {
  width: 100%;
  height: 100%;
  border: none;
}
.bgs-video-placeholder {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 14px;
  color: #C9D6DF;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, #1b2631, #0f171e);
  cursor: pointer;
  transition: background 0.3s;
}
.bgs-video-placeholder:hover {
  background: linear-gradient(135deg, #22313f, #141f28);
}
.bgs-play-badge {
  width: 68px;
  height: 68px;
  border-radius: 50%;
  background: rgba(201, 169, 110, 0.2);
  border: 2px solid var(--bgs-gold);
  color: var(--bgs-gold);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.6rem;
  padding-left: 5px;
  box-shadow: 0 0 25px rgba(201, 169, 110, 0.4);
}
.bgs-video-text {
  font-size: 1.25rem;
  font-weight: 600;
}
.bgs-shop-now-btn {
  display: inline-block;
  background: linear-gradient(135deg, var(--bgs-gold) 0%, #A88742 100%);
  color: #0A0A0A !important;
  font-size: 1.2rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  padding: 16px 54px;
  border-radius: 50px;
  text-decoration: none !important;
  box-shadow: 0 8px 24px rgba(201, 169, 110, 0.35);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}
.bgs-shop-now-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 32px rgba(201, 169, 110, 0.55);
}

/* Headers */
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
  padding: 70px 20px;
  background: var(--bgs-dark-surface);
}
.bgs-situations-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
  max-width: 1100px;
  margin: 0 auto 40px;
}
.bgs-situation-card {
  background: var(--bgs-card-bg);
  border: 1px solid var(--bgs-border);
  border-radius: 12px;
  padding: 30px 20px;
  text-align: center;
  transition: transform 0.25s ease, border-color 0.25s ease;
}
.bgs-situation-card:hover {
  transform: translateY(-5px);
  border-color: var(--bgs-gold);
}
.bgs-sit-icon {
  font-size: 2.5rem;
  margin-bottom: 16px;
}
.bgs-situation-card h3 {
  font-size: 1.15rem;
  font-weight: 700;
  color: var(--bgs-gold);
  margin-bottom: 8px;
}
.bgs-situation-card p {
  font-size: 0.92rem;
  color: var(--bgs-muted);
  line-height: 1.5;
  margin: 0;
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
.bgs-bestseller-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  max-width: 1080px;
  margin: 0 auto;
}

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
.bgs-card-badge {
  position: absolute;
  top: 14px;
  left: 14px;
  z-index: 2;
  background: rgba(201, 169, 110, 0.95);
  color: #0A0A0A;
  font-size: 0.78rem;
  font-weight: 800;
  padding: 4px 12px;
  border-radius: 50px;
  letter-spacing: 0.5px;
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

/* 4. Mission Section */
.bgs-mission-section {
  padding: 80px 20px;
  background: var(--bgs-dark-surface);
}
.bgs-mission-box {
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
}
.bgs-badge-gold {
  display: inline-block;
  background: rgba(201, 169, 110, 0.15);
  color: var(--bgs-gold);
  border: 1px solid var(--bgs-gold);
  font-size: 0.8rem;
  font-weight: 800;
  padding: 4px 16px;
  border-radius: 50px;
  letter-spacing: 1px;
  margin-bottom: 16px;
}
.bgs-mission-title {
  font-size: clamp(1.8rem, 3.5vw, 2.5rem);
  font-weight: 800;
  color: var(--bgs-text);
  margin-bottom: 16px;
}
.bgs-mission-lead {
  font-size: clamp(1.15rem, 2.5vw, 1.45rem);
  font-weight: 700;
  color: var(--bgs-gold);
  line-height: 1.5;
  margin: 0 auto 40px;
  max-width: 780px;
}
.bgs-quotes-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 24px;
}
.bgs-quote-card {
  background: var(--bgs-card-bg);
  border: 1px solid var(--bgs-border);
  border-radius: 12px;
  padding: 30px 24px;
  text-align: center;
}
.bgs-quote-icon {
  font-size: 2.2rem;
  margin-bottom: 14px;
}
.bgs-quote-text {
  font-size: 1.05rem;
  font-weight: 600;
  line-height: 1.6;
  color: #E0E0E0;
  margin: 0;
}

/* 5. Reels Section */
.bgs-reels-section {
  padding: 75px 20px;
  background: var(--bgs-dark);
}
.bgs-reels-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 25px;
  max-width: 960px;
  margin: 0 auto;
}

.bgs-reel-card {
  background: var(--bgs-card-bg);
  border: 1px solid var(--bgs-border);
  border-radius: 16px;
  overflow: hidden;
  text-align: center;
}
.bgs-reel-frame {
  width: 100%;
  aspect-ratio: 9 / 16;
  background: #111;
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
.bgs-reel-placeholder {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 12px;
  color: #C9D6DF;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, #1b2631, #0f171e);
  cursor: pointer;
}
.bgs-reel-play {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: rgba(201, 169, 110, 0.2);
  border: 2px solid var(--bgs-gold);
  color: var(--bgs-gold);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.4rem;
  padding-left: 4px;
  box-shadow: 0 0 20px rgba(201, 169, 110, 0.4);
}
.bgs-reel-label {
  font-size: 1.15rem;
  font-weight: 600;
  text-transform: capitalize;
}
.bgs-reel-info {
  padding: 18px 16px;
}
.bgs-reel-stars {
  color: #FFB800;
  font-size: 0.95rem;
  margin-bottom: 6px;
}
.bgs-reel-info h4 {
  font-size: 1rem;
  font-weight: 700;
  color: var(--bgs-text);
  margin-bottom: 4px;
}
.bgs-reel-info span {
  font-size: 0.82rem;
  color: var(--bgs-gold);
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

/* Responsive Breakpoints */
@media (max-width: 900px) {
  .bgs-situations-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .bgs-trust-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 650px) {
  .bgs-hero-section {
    padding: 35px 14px 28px;
  }
  .bgs-headline,
  .bgs-headline-h1 {
    font-size: clamp(1.1rem, 4.4vw, 1.45rem);
    line-height: 1.4;
    white-space: normal;
    text-wrap: balance;
    margin: 0 auto 10px;
    color: var(--bgs-text, #FFFFFF);
  }
  .bgs-headline-h2 {
    font-size: clamp(0.95rem, 3.8vw, 1.25rem);
    line-height: 1.4;
    color: var(--bgs-gold, #C9A96E);
    margin: 0 auto 16px;
  }
  .bgs-highlight-banner,
  .bgs-headline-h3 {
    font-size: clamp(0.8rem, 3.2vw, 0.98rem);
    font-weight: 800;
    padding: 8px 14px;
    line-height: 1.45;
    display: inline-block;
    border-radius: 4px;
    margin: 0 auto 28px;
    background: #FFE500;
    color: #B71C1C;
  }
  .bgs-shop-now-btn {
    padding: 14px 40px;
    font-size: 1.05rem;
    width: 100%;
    max-width: 320px;
  }
  .bgs-situations-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }
  .bgs-bestseller-grid {
    grid-template-columns: 1fr;
    gap: 24px;
  }
  .bgs-quotes-grid {
    grid-template-columns: 1fr;
    gap: 16px;
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
  .bgs-reel-card {
    border-radius: 12px;
  }
  .bgs-reel-info {
    padding: 10px 8px;
  }
  .bgs-reel-stars {
    font-size: 0.82rem;
    margin-bottom: 3px;
  }
  .bgs-reel-info h4 {
    font-size: 0.85rem;
    line-height: 1.3;
    margin-bottom: 3px;
  }
  .bgs-reel-info span {
    font-size: 0.72rem;
  }
  .bgs-trust-grid {
    grid-template-columns: 1fr;
    gap: 14px;
  }
}

/* Tablet viewports (651px - 992px) */
@media (min-width: 651px) and (max-width: 992px) {
  .bgs-situations-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }
  .bgs-bestseller-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }
  .bgs-reels-grid {
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
  }
  .bgs-trust-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
  }
}

/* Small mobile devices (<= 480px) */
@media (max-width: 480px) {
  .bgs-hero-section {
    padding: 28px 10px 24px;
  }
  .bgs-headline-h1 {
    font-size: clamp(1.05rem, 4.8vw, 1.35rem) !important;
  }
  .bgs-headline-h2 {
    font-size: clamp(0.92rem, 4vw, 1.15rem) !important;
  }
  .bgs-highlight-banner,
  .bgs-headline-h3 {
    font-size: clamp(0.78rem, 3.4vw, 0.92rem) !important;
    padding: 7px 10px !important;
  }
  .bgs-video-frame {
    margin-bottom: 24px;
    border-radius: 8px;
  }
  .bgs-reels-grid {
    grid-template-columns: 1fr !important;
  }
}
</style>

<?php get_footer(); ?>
