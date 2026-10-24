<?php
/**
 * WooCommerce Single Product Template: Bodyguard Pepper Spray
 * Cloned & Inspired directly from https://bodygard.shop/
 * With Bodyguard Shop Dark Luxury Styling & 1-Click COD Checkout
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$pid     = get_the_ID();
$product = wc_get_product( $pid );

$product_title = $product ? $product->get_name() : 'Bodyguard Self-Defense Pepper Spray';
$thumb_url     = get_the_post_thumbnail_url( $pid, 'large' );
if ( ! $thumb_url ) {
    $thumb_url = get_template_directory_uri() . '/assets/images/products/pepper-spray.png';
}

$shop_phone    = get_option( 'bgs_phone', '01409710012' );
$shop_whatsapp = get_option( 'bgs_whatsapp', '8801409710012' );
?>

<main id="bgs-pepper-spray-landing" class="bgs-ps-page">

  <div class="bgs-ps-container">

    <!-- ==========================================================================
         1. BANGLADESH CRIME STATISTICS & MAIN SALES VIDEO
         ========================================================================== -->
    <section class="bgs-ps-section bgs-ps-stats-sec">
      <h2 class="bgs-ps-heading bgs-ps-red-glow">বাংলাদেশে প্রতিদিন</h2>

      <div class="bgs-ps-icon-list-card">
        <ul class="bgs-ps-icon-list">
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-check">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
            </span>
            <span class="bgs-ps-item-text">৭০–১০০ টি ছিনতাই</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-check">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
            </span>
            <span class="bgs-ps-item-text">৮–১৫টি ডাকাতি</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-check">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
            </span>
            <span class="bgs-ps-item-text">২৫০–৩০০টি চুরি</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-check">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
            </span>
            <span class="bgs-ps-item-text">১-৩ টি ধর্ষণ</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-check">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
            </span>
            <span class="bgs-ps-item-text">৫ –৭ টি নারী অপহরণ</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-check">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
            </span>
            <span class="bgs-ps-item-text">১২০০–১৫০০ বার নারী হয়রানি</span>
          </li>
        </ul>
      </div>

      <div class="bgs-ps-warning-box">
        <p>এগুলো শুধু রিপোর্ট হওয়া অপরাধ বাস্তব সংখ্যা ২–৩ গুণ বেশি। সতর্ক না থাকলে, যেকোনো সময় আপনিই হতে পারেন পরবর্তী শিকার।</p>
      </div>

      <!-- Main Video Frame -->
      <div class="bgs-ps-video-card">
        <div class="bgs-ps-video-wrapper">
          <iframe 
            src="https://www.youtube.com/embed/4NrRuGW7q7Q?rel=0&modestbranding=1&playsinline=1" 
            title="Bodyguard Pepper Spray Main Video" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
        </div>
      </div>
    </section>


    <!-- ==========================================================================
         2. HOW IT SAVES YOU ("এটি কীভাবে আপনাকে বাঁচাবে?")
         ========================================================================== -->
    <section class="bgs-ps-section">
      <h2 class="bgs-ps-heading">এটি কীভাবে আপনাকে বাঁচাবে?</h2>

      <div class="bgs-ps-benefits-card">
        <ul class="bgs-ps-icon-list bgs-ps-double-check-list">
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-double">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M505 174.8l-39.6-39.6c-9.4-9.4-24.6-9.4-33.9 0L192 374.7 80.6 263.2c-9.4-9.4-24.6-9.4-33.9 0L7 302.9c-9.4 9.4-9.4 24.6 0 34L175 505c9.4 9.4 24.6 9.4 33.9 0l296-296.2c9.4-9.5 9.4-24.7.1-34zm-324.3 106c6.2 6.3 16.4 6.3 22.6 0l208-208.2c6.2-6.3 6.2-16.4 0-22.6L366.1 4.7c-6.2-6.3-16.4-6.3-22.6 0L192 156.2l-55.4-55.5c-6.2-6.3-16.4-6.3-22.6 0L68.7 146c-6.2 6.3-6.2 16.4 0 22.6l112 112.2z"/></svg>
            </span>
            <span class="bgs-ps-item-text">চোখে তীব্র জ্বালা ১৫ মিনিট পর্যন্ত।</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-double">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M505 174.8l-39.6-39.6c-9.4-9.4-24.6-9.4-33.9 0L192 374.7 80.6 263.2c-9.4-9.4-24.6-9.4-33.9 0L7 302.9c-9.4 9.4-9.4 24.6 0 34L175 505c9.4 9.4 24.6 9.4 33.9 0l296-296.2c9.4-9.5 9.4-24.7.1-34zm-324.3 106c6.2 6.3 16.4 6.3 22.6 0l208-208.2c6.2-6.3 6.2-16.4 0-22.6L366.1 4.7c-6.2-6.3-16.4-6.3-22.6 0L192 156.2l-55.4-55.5c-6.2-6.3-16.4-6.3-22.6 0L68.7 146c-6.2 6.3-6.2 16.4 0 22.6l112 112.2z"/></svg>
            </span>
            <span class="bgs-ps-item-text">সাময়িক অন্ধত্ব ৭–১০ মিনিট।</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-double">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M505 174.8l-39.6-39.6c-9.4-9.4-24.6-9.4-33.9 0L192 374.7 80.6 263.2c-9.4-9.4-24.6-9.4-33.9 0L7 302.9c-9.4 9.4-9.4 24.6 0 34L175 505c9.4 9.4 24.6 9.4 33.9 0l296-296.2c9.4-9.5 9.4-24.7.1-34zm-324.3 106c6.2 6.3 16.4 6.3 22.6 0l208-208.2c6.2-6.3 6.2-16.4 0-22.6L366.1 4.7c-6.2-6.3-16.4-6.3-22.6 0L192 156.2l-55.4-55.5c-6.2-6.3-16.4-6.3-22.6 0L68.7 146c-6.2 6.3-6.2 16.4 0 22.6l112 112.2z"/></svg>
            </span>
            <span class="bgs-ps-item-text">শ্বাস নিতে কষ্ট, কাশি, শক্তি হারানো ১৫ মিনিট।</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-double">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M505 174.8l-39.6-39.6c-9.4-9.4-24.6-9.4-33.9 0L192 374.7 80.6 263.2c-9.4-9.4-24.6-9.4-33.9 0L7 302.9c-9.4 9.4-9.4 24.6 0 34L175 505c9.4 9.4 24.6 9.4 33.9 0l296-296.2c9.4-9.5 9.4-24.7.1-34zm-324.3 106c6.2 6.3 16.4 6.3 22.6 0l208-208.2c6.2-6.3 6.2-16.4 0-22.6L366.1 4.7c-6.2-6.3-16.4-6.3-22.6 0L192 156.2l-55.4-55.5c-6.2-6.3-16.4-6.3-22.6 0L68.7 146c-6.2 6.3-6.2 16.4 0 22.6l112 112.2z"/></svg>
            </span>
            <span class="bgs-ps-item-text">আক্রমণ করার সামর্থ্য সম্পূর্ণ নষ্ট।</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-double">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M505 174.8l-39.6-39.6c-9.4-9.4-24.6-9.4-33.9 0L192 374.7 80.6 263.2c-9.4-9.4-24.6-9.4-33.9 0L7 302.9c-9.4 9.4-9.4 24.6 0 34L175 505c9.4 9.4 24.6 9.4 33.9 0l296-296.2c9.4-9.5 9.4-24.7.1-34zm-324.3 106c6.2 6.3 16.4 6.3 22.6 0l208-208.2c6.2-6.3 6.2-16.4 0-22.6L366.1 4.7c-6.2-6.3-16.4-6.3-22.6 0L192 156.2l-55.4-55.5c-6.2-6.3-16.4-6.3-22.6 0L68.7 146c-6.2 6.3-6.2 16.4 0 22.6l112 112.2z"/></svg>
            </span>
            <span class="bgs-ps-item-text">মাত্র ৩–৫ সেকেন্ডেই আক্রমণকারী পুরোপুরি অক্ষম।</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-double">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M505 174.8l-39.6-39.6c-9.4-9.4-24.6-9.4-33.9 0L192 374.7 80.6 263.2c-9.4-9.4-24.6-9.4-33.9 0L7 302.9c-9.4 9.4-9.4 24.6 0 34L175 505c9.4 9.4 24.6 9.4 33.9 0l296-296.2c9.4-9.5 9.4-24.7.1-34zm-324.3 106c6.2 6.3 16.4 6.3 22.6 0l208-208.2c6.2-6.3 6.2-16.4 0-22.6L366.1 4.7c-6.2-6.3-16.4-6.3-22.6 0L192 156.2l-55.4-55.5c-6.2-6.3-16.4-6.3-22.6 0L68.7 146c-6.2 6.3-6.2 16.4 0 22.6l112 112.2z"/></svg>
            </span>
            <span class="bgs-ps-item-text">আক্রমণকারীকে ১২ ফুট দূর থেকেই থামাতে পারবেন।</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-double">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M505 174.8l-39.6-39.6c-9.4-9.4-24.6-9.4-33.9 0L192 374.7 80.6 263.2c-9.4-9.4-24.6-9.4-33.9 0L7 302.9c-9.4 9.4-9.4 24.6 0 34L175 505c9.4 9.4 24.6 9.4 33.9 0l296-296.2c9.4-9.5 9.4-24.7.1-34zm-324.3 106c6.2 6.3 16.4 6.3 22.6 0l208-208.2c6.2-6.3 6.2-16.4 0-22.6L366.1 4.7c-6.2-6.3-16.4-6.3-22.6 0L192 156.2l-55.4-55.5c-6.2-6.3-16.4-6.3-22.6 0L68.7 146c-6.2 6.3-6.2 16.4 0 22.6l112 112.2z"/></svg>
            </span>
            <span class="bgs-ps-item-text">আপনার আত্মবিশ্বাস কয়েক গুণ বেড়ে যাবে।</span>
          </li>
        </ul>
      </div>
    </section>


    <!-- ==========================================================================
         3. SIZES & PROTECTION CAPACITIES
         ========================================================================== -->
    <section class="bgs-ps-section">
      <div class="bgs-ps-capacity-card">

        <!-- Authentic Product Image Showcase -->
        <div class="bgs-ps-product-visual-box">
          <div class="bgs-ps-visual-img-wrap">
            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="Bodyguard Pepper Spray Canister (PS 007-60)" class="bgs-ps-showcase-img" loading="lazy">
            <span class="bgs-ps-floating-tag">🇺🇸 MADE IN USA • PS 007-60</span>
          </div>
          <div class="bgs-ps-visual-badge-row">
            <span class="bgs-ps-vbadge">🛡️ ১০০% আসল আমেরিকান সেলফ-ডিফেন্স স্প্রে</span>
            <span class="bgs-ps-vbadge">⚡ ১২ ফুট দূরপাল্লার লং-রেঞ্জ স্ট্রিম</span>
          </div>
        </div>

        <ul class="bgs-ps-icon-list">
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-check">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
            </span>
            <span class="bgs-ps-item-text"><strong>20ml</strong> ৪-৫ জন থেকে বাঁচাবে।</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-check">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
            </span>
            <span class="bgs-ps-item-text"><strong>60ml</strong> ১০-১৫ জন থেকে বাঁচাবে।</span>
          </li>
          <li class="bgs-ps-icon-item">
            <span class="bgs-ps-icon-check">
              <svg viewBox="0 0 512 512" fill="currentColor"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/></svg>
            </span>
            <span class="bgs-ps-item-text"><strong>110ml</strong> ২০-২৫ জন থেকে বাঁচাবে।</span>
          </li>
        </ul>

        <div class="bgs-ps-cta-wrap">
          <a href="#order" class="bgs-ps-btn-cta">এখনই অর্ডার করুন</a>
        </div>
      </div>
    </section>



    <!-- ==========================================================================
         4. CUSTOMER REVIEWS (3 VIDEOS)
         ========================================================================== -->
    <section class="bgs-ps-section">
      <h2 class="bgs-ps-heading">কাস্টমার রিভিউ</h2>

      <div class="bgs-ps-reviews-grid">
        <!-- Review 1: Shorts -->
        <div class="bgs-ps-review-card">
          <div class="bgs-ps-video-wrapper bgs-ps-shorts-ratio">
            <iframe 
              src="https://www.youtube.com/embed/RyqHKNnoW-Y?rel=0&modestbranding=1&playsinline=1" 
              title="Customer Review 1" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen>
            </iframe>
          </div>
        </div>

        <!-- Review 2: Shorts -->
        <div class="bgs-ps-review-card">
          <div class="bgs-ps-video-wrapper bgs-ps-shorts-ratio">
            <iframe 
              src="https://www.youtube.com/embed/T7x7RT7ynxQ?rel=0&modestbranding=1&playsinline=1" 
              title="Customer Review 2" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen>
            </iframe>
          </div>
        </div>

        <!-- Review 3: Video -->
        <div class="bgs-ps-review-card">
          <div class="bgs-ps-video-wrapper bgs-ps-shorts-ratio">
            <iframe 
              src="https://www.youtube.com/embed/Id4CSc8QS1Y?rel=0&modestbranding=1&playsinline=1" 
              title="Customer Review 3" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>

      <div class="bgs-ps-cta-wrap">
        <a href="#order" class="bgs-ps-btn-cta">এখনই অর্ডার করুন</a>
      </div>
    </section>


    <!-- ==========================================================================
         5. THREAT CONSEQUENCE VIDEO
         ========================================================================== -->
    <section class="bgs-ps-section">
      <h2 class="bgs-ps-heading">বডিগার্ড স্প্রে আপনার সাথে না থাকলে কী হতে পারে?</h2>

      <div class="bgs-ps-video-card">
        <div class="bgs-ps-video-wrapper bgs-ps-shorts-single">
          <iframe 
            src="https://www.youtube.com/embed/oATq7LSmEy8?rel=0&modestbranding=1&playsinline=1" 
            title="বডিগার্ড স্প্রে আপনার সাথে না থাকলে কী হতে পারে?" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
        </div>
      </div>
    </section>


    <!-- ==========================================================================
         6. COUNTDOWN TIMER & PRICE CARDS
         ========================================================================== -->
    <section class="bgs-ps-section bgs-ps-offer-sec">
      <h2 class="bgs-ps-heading">ডিস্কাউন্ট অফার শেষ হতে আর বাকি</h2>

      <!-- Countdown Timer -->
      <div class="bgs-ps-countdown-wrap" id="bgsCountdownWrap">
        <div class="bgs-ps-cd-box">
          <span class="bgs-ps-cd-digit" id="bgsDays">01</span>
          <span class="bgs-ps-cd-label">Days</span>
        </div>
        <div class="bgs-ps-cd-box">
          <span class="bgs-ps-cd-digit" id="bgsHours">03</span>
          <span class="bgs-ps-cd-label">Hours</span>
        </div>
        <div class="bgs-ps-cd-box">
          <span class="bgs-ps-cd-digit" id="bgsMinutes">59</span>
          <span class="bgs-ps-cd-label">Minutes</span>
        </div>
        <div class="bgs-ps-cd-box">
          <span class="bgs-ps-cd-digit" id="bgsSeconds">42</span>
          <span class="bgs-ps-cd-label">Seconds</span>
        </div>
      </div>

      <!-- Animated Price Cards -->
      <div class="bgs-ps-price-cards-stack">
        <!-- 20ml -->
        <div class="bgs-ps-price-badge-row">
          <div class="bgs-ps-pb-label">২০ মি:লি:</div>
          <div class="bgs-ps-pb-strike"><del>২৭৯০</del> টাকা</div>
          <div class="bgs-ps-pb-offer">৫৭% অফারে <span class="bgs-ps-pb-highlight">১১৯০</span> টাকা</div>
        </div>

        <!-- 60ml -->
        <div class="bgs-ps-price-badge-row">
          <div class="bgs-ps-pb-label">৬০ মি:লি:</div>
          <div class="bgs-ps-pb-strike"><del>৩৪৯০</del> টাকা</div>
          <div class="bgs-ps-pb-offer">৫৭% অফারে <span class="bgs-ps-pb-highlight">১৪৯০</span> টাকা</div>
        </div>

        <!-- 110ml -->
        <div class="bgs-ps-price-badge-row">
          <div class="bgs-ps-pb-label">১১০ মি:লি:</div>
          <div class="bgs-ps-pb-strike"><del>৩৯৯০</del> টাকা</div>
          <div class="bgs-ps-pb-offer">৫০% অফারে <span class="bgs-ps-pb-highlight">১৯৯০</span> টাকা</div>
        </div>
      </div>
    </section>


    <!-- ==========================================================================
         7. QUICK CONTACT BUTTONS
         ========================================================================== -->
    <section class="bgs-ps-section bgs-ps-contact-sec">
      <div class="bgs-ps-contact-grid">
        <a href="tel:<?php echo esc_attr( $shop_phone ); ?>" class="bgs-ps-btn-call">
          <span class="bgs-ps-btn-icon">📞</span>
          <span>প্রয়োজনে কল করুন</span>
        </a>
        <a href="https://wa.me/<?php echo esc_attr( $shop_whatsapp ); ?>" target="_blank" rel="noopener" class="bgs-ps-btn-whatsapp">
          <span class="bgs-ps-btn-icon">💬</span>
          <span>Whatsapp মেসেজ করুন</span>
        </a>
      </div>
    </section>


    <!-- ==========================================================================
         8. EXPRESS CHECKOUT FORM (#order)
         ========================================================================== -->
    <section class="bgs-ps-section bgs-ps-order-sec" id="order">
      <h2 class="bgs-ps-heading">অর্ডার করতে নিচের ফর্মটি পূরন করুন</h2>

      <div class="bgs-ps-checkout-card">
        <form id="bgs-ps-checkout-form" class="bgs-ps-form" novalidate>
          <input type="hidden" name="action" value="bgs_process_direct_order">
          <input type="hidden" name="product_id" value="<?php echo esc_attr( $pid ); ?>">
          <input type="hidden" id="bgs-selected-package" name="selected_level" value="Paper Spray 20ml">
          <input type="hidden" id="bgs-level-price" name="level_price" value="1190">
          <input type="hidden" name="delivery_zone" value="free">

          <!-- Selected Product Live Preview Card -->
          <div class="bgs-ps-form-summary-card">
            <div class="bgs-ps-fsc-thumb">
              <img src="<?php echo esc_url( $thumb_url ); ?>" alt="Bodyguard Pepper Spray" id="bgs-form-prod-thumb">
            </div>
            <div class="bgs-ps-fsc-info">
              <span class="bgs-ps-fsc-badge">🔥 LIMITED STOCK — ৫৭% অফার</span>
              <h4 class="bgs-ps-fsc-title" id="bgs-fsc-title">Paper Spray 20ml</h4>
              <div class="bgs-ps-fsc-price-row">
                <span class="bgs-ps-fsc-sale">৳ <span id="bgs-fsc-price">1,190</span></span>
                <span class="bgs-ps-fsc-reg">৳ <span id="bgs-fsc-reg">2,790</span></span>
                <span class="bgs-ps-fsc-save">সাশ্রয় ৳ <span id="bgs-fsc-save">1,600</span></span>
              </div>
              <p class="bgs-ps-fsc-desc">🇺🇸 আসল আমেরিকান ফর্মুলা • ১২ ফুট দূর থেকেই আক্রমণকারী নিস্তেজ</p>
            </div>
          </div>

          <!-- 1. Customer Billing Details -->
          <div class="bgs-ps-group">

            <label for="bgs_name" class="bgs-ps-label">আপনার নাম লিখুন <span class="bgs-ps-req">*</span></label>
            <input type="text" id="bgs_name" name="billing_first_name" class="bgs-ps-input" placeholder="আপনার পুরো নাম লিখুন" required>
          </div>

          <div class="bgs-ps-group">
            <label for="bgs_address" class="bgs-ps-label">ডেলিভারির ঠিকানা লিখুন <span class="bgs-ps-req">*</span></label>
            <textarea id="bgs_address" name="billing_address_1" class="bgs-ps-input bgs-ps-textarea" rows="3" placeholder="সম্পূর্ণ ঠিকানা (বাসা/রোড/থানা/জেলা)" required></textarea>
          </div>

          <div class="bgs-ps-group">
            <label for="bgs_phone" class="bgs-ps-label">ফোন নাম্বার লিখুন <span class="bgs-ps-req">*</span></label>
            <input type="tel" id="bgs_phone" name="billing_phone" class="bgs-ps-input" placeholder="০১XXXXXXXXX" required pattern="[0-9]{11}">
          </div>

          <!-- 2. Shipping method (Free Delivery per bodygard.shop) -->
          <div class="bgs-ps-shipping-box">
            <h4 class="bgs-ps-box-title">Shipping</h4>
            <div class="bgs-ps-ship-option">
              <span class="bgs-ps-ship-badge">✓</span>
              <span class="bgs-ps-ship-text">ডেলিভারি চার্জ ফ্রি</span>
              <span class="bgs-ps-ship-price">৳ 0</span>
            </div>
          </div>

          <!-- 3. Your Products (Package Selectors) -->
          <div class="bgs-ps-products-box">
            <h4 class="bgs-ps-box-title">Your Products</h4>

            <!-- Package 1: 20ml -->
            <label class="bgs-ps-product-row active" data-pkg="Paper Spray 20ml" data-price="1190">
              <div class="bgs-ps-row-left">
                <input type="radio" name="package_select" value="20ml" checked class="bgs-ps-radio">
                <div class="bgs-ps-item-info">
                  <span class="bgs-ps-item-title">Paper Spray 20ml</span>
                  <span class="bgs-ps-item-sub">চাবির রিং সহ, ৪-৫ জন থেকে বাঁচাবে</span>
                </div>
              </div>
              <div class="bgs-ps-row-right">
                <div class="bgs-ps-qty-wrap">
                  <button type="button" class="bgs-ps-qty-btn bgs-ps-minus" data-target="qty-20ml">−</button>
                  <input type="number" id="qty-20ml" class="bgs-ps-qty-input" value="1" min="1" max="20" readonly>
                  <button type="button" class="bgs-ps-qty-btn bgs-ps-plus" data-target="qty-20ml">+</button>
                </div>
                <div class="bgs-ps-price-cell">
                  <span class="bgs-ps-amount">1,190</span><span class="bgs-ps-currency">৳</span>
                </div>
              </div>
            </label>

            <!-- Package 2: 60ml -->
            <label class="bgs-ps-product-row" data-pkg="Paper Spray 60ml" data-price="1490">
              <div class="bgs-ps-row-left">
                <input type="radio" name="package_select" value="60ml" class="bgs-ps-radio">
                <div class="bgs-ps-item-info">
                  <span class="bgs-ps-item-title">Paper Spray 60ml</span>
                  <span class="bgs-ps-item-sub">ফ্যামিলি সাইজ, ১০-১৫ জন থেকে বাঁচাবে</span>
                </div>
              </div>
              <div class="bgs-ps-row-right">
                <div class="bgs-ps-qty-wrap">
                  <button type="button" class="bgs-ps-qty-btn bgs-ps-minus" data-target="qty-60ml">−</button>
                  <input type="number" id="qty-60ml" class="bgs-ps-qty-input" value="1" min="1" max="20" readonly>
                  <button type="button" class="bgs-ps-qty-btn bgs-ps-plus" data-target="qty-60ml">+</button>
                </div>
                <div class="bgs-ps-price-cell">
                  <span class="bgs-ps-amount">1,490</span><span class="bgs-ps-currency">৳</span>
                </div>
              </div>
            </label>

            <!-- Package 3: 110ml -->
            <label class="bgs-ps-product-row" data-pkg="Paper Spray 110ml" data-price="1990">
              <div class="bgs-ps-row-left">
                <input type="radio" name="package_select" value="110ml" class="bgs-ps-radio">
                <div class="bgs-ps-item-info">
                  <span class="bgs-ps-item-title">Paper Spray 110ml</span>
                  <span class="bgs-ps-item-sub">জাম্বো সাইজ, ২০-২৫ জন থেকে বাঁচাবে</span>
                </div>
              </div>
              <div class="bgs-ps-row-right">
                <div class="bgs-ps-qty-wrap">
                  <button type="button" class="bgs-ps-qty-btn bgs-ps-minus" data-target="qty-110ml">−</button>
                  <input type="number" id="qty-110ml" class="bgs-ps-qty-input" value="1" min="1" max="20" readonly>
                  <button type="button" class="bgs-ps-qty-btn bgs-ps-plus" data-target="qty-110ml">+</button>
                </div>
                <div class="bgs-ps-price-cell">
                  <span class="bgs-ps-amount">1,990</span><span class="bgs-ps-currency">৳</span>
                </div>
              </div>
            </label>
          </div>

          <!-- 4. Your Order Summary Table -->
          <div class="bgs-ps-order-table-card">
            <h4 class="bgs-ps-box-title">Your order</h4>
            <table class="bgs-ps-table">
              <thead>
                <tr>
                  <th>Product</th>
                  <th class="bgs-ps-text-right">Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <span id="bgs-summary-prod-name">Paper Spray 20ml</span> 
                    <strong>× <span id="bgs-summary-qty">1</span></strong>
                  </td>
                  <td class="bgs-ps-text-right">
                    <span id="bgs-summary-subtotal">1,190</span> ৳
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Subtotal</th>
                  <td class="bgs-ps-text-right"><span id="bgs-summary-subtotal-foot">1,190</span> ৳</td>
                </tr>
                <tr>
                  <th>Shipment</th>
                  <td class="bgs-ps-text-right"><span class="bgs-ps-free-tag">ডেলিভারি চার্জ ফ্রি</span></td>
                </tr>
                <tr class="bgs-ps-total-row">
                  <th>Total</th>
                  <td class="bgs-ps-text-right">
                    <strong><span id="bgs-summary-total">1,190</span> ৳</strong>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>

          <!-- 5. Payment Method & Place Order -->
          <div class="bgs-ps-payment-box">
            <div class="bgs-ps-payment-method">
              <input type="radio" id="cod" name="payment_method" value="cod" checked>
              <label for="cod">Cash on delivery (ক্যাশ অন ডেলিভারি)</label>
            </div>
            <p class="bgs-ps-payment-hint">পণ্য হাতে পেয়ে ডেলিভারিম্যানের কাছে মূল্য পরিশোধ করুন।</p>

            <button type="submit" id="bgs-place-order-btn" class="bgs-ps-submit-btn">
              <span class="bgs-ps-btn-label">Place Order &nbsp;&nbsp;<span id="bgs-btn-price-display">1,190</span> ৳</span>
              <span class="bgs-ps-btn-loader" style="display:none;">অর্ডার প্রসেস হচ্ছে...</span>
            </button>

            <div id="bgs-order-feedback" class="bgs-ps-feedback" style="display:none;"></div>
          </div>
        </form>
      </div>
    </section>

  </div><!-- /.bgs-ps-container -->


  <!-- ==========================================================================
       9. MOBILE STICKY FLOATING ORDER BAR
       ========================================================================== -->
  <div class="bgs-ps-mobile-bar">
    <div class="bgs-ps-mb-inner">
      <div class="bgs-ps-mb-product">
        <img src="<?php echo esc_url( $thumb_url ); ?>" alt="Pepper Spray" class="bgs-ps-mb-thumb">
        <div class="bgs-ps-mb-info">
          <span class="bgs-ps-mb-title" id="bgs-mb-title">Paper Spray 20ml</span>
          <span class="bgs-ps-mb-price">৳ <span id="bgs-mb-price">1,190</span></span>
        </div>
      </div>
      <a href="#order" class="bgs-ps-mb-btn">এখনই অর্ডার করুন</a>
    </div>
  </div>


</main>


<!-- ==========================================================================
     CSS STYLING (MATCHING bodygard.shop & BODYGUARD SHOP BRAND)
     ========================================================================== -->
<style>
:root {
  --ps-primary: #f16334;
  --ps-primary-hover: #ff7448;
  --ps-dark: #000000;
  --ps-surface: #0f0f0f;
  --ps-card: #141414;
  --ps-border: #242424;
  --ps-text: #ffffff;
  --ps-text-sub: #b3b3b3;
  --ps-green: #01D100;
  --ps-gold: #C9A96E;
  --ps-red: #cf2e2e;
}

body {
  background-color: var(--ps-dark);
  color: var(--ps-text);
  font-family: 'Hind Siliguri', 'Roboto', -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
  line-height: 1.5;
  margin: 0;
  padding: 0;
}

.bgs-ps-page {
  background-color: var(--ps-dark);
  padding-bottom: 80px;
}

.bgs-ps-container {
  max-width: 720px;
  margin: 0 auto;
  padding: 20px 16px;
}

.bgs-ps-section {
  margin-bottom: 35px;
}

.bgs-ps-heading {
  font-size: clamp(22px, 4vw, 30px);
  font-weight: 700;
  color: #ffffff;
  text-align: center;
  margin: 0 0 20px 0;
  line-height: 1.3;
}

.bgs-ps-red-glow {
  color: #ff3333;
  text-shadow: 0 0 15px rgba(255, 51, 51, 0.4);
}

/* 1. Icon list */
.bgs-ps-icon-list-card,
.bgs-ps-benefits-card,
.bgs-ps-capacity-card {
  background: var(--ps-surface);
  border: 1px solid var(--ps-border);
  border-radius: 14px;
  padding: 22px 24px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.5);
}

.bgs-ps-icon-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.bgs-ps-icon-item {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 9px 0;
  font-size: 18px;
  font-weight: 500;
  color: #ffffff;
  border-bottom: 1px dashed rgba(255, 255, 255, 0.08);
}
.bgs-ps-icon-item:last-child {
  border-bottom: none;
}

.bgs-ps-icon-check svg,
.bgs-ps-icon-double svg {
  width: 22px;
  height: 22px;
  color: var(--ps-green);
  flex-shrink: 0;
  vertical-align: middle;
}

.bgs-ps-warning-box {
  background: rgba(207, 46, 46, 0.12);
  border: 1px solid rgba(207, 46, 46, 0.4);
  border-radius: 12px;
  padding: 16px 20px;
  margin: 20px 0;
  text-align: center;
}
.bgs-ps-warning-box p {
  color: #ffb3b3;
  font-size: 17px;
  font-weight: 500;
  line-height: 1.6;
  margin: 0;
}

/* Video Wrapper */
.bgs-ps-video-card {
  border-radius: 14px;
  overflow: hidden;
  border: 2px solid var(--ps-border);
  background: #000;
  box-shadow: 0 12px 35px rgba(0,0,0,0.6);
}

.bgs-ps-video-wrapper {
  position: relative;
  width: 100%;
  padding-bottom: 56.25%; /* 16:9 */
  height: 0;
}
.bgs-ps-video-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
}

.bgs-ps-shorts-ratio {
  padding-bottom: 177.77%; /* 9:16 vertical shorts */
}
.bgs-ps-shorts-single {
  padding-bottom: 120%; /* Comfortable mobile & desktop single shorts ratio */
  max-width: 480px;
  margin: 0 auto;
}

/* Reviews Grid */
.bgs-ps-reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 14px;
  margin-bottom: 20px;
}
@media (max-width: 680px) {
  .bgs-ps-reviews-grid {
    grid-template-columns: 1fr;
    gap: 18px;
  }
}
.bgs-ps-review-card {
  background: #000;
  border: 1px solid var(--ps-border);
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 8px 25px rgba(0,0,0,0.4);
}

/* CTA Buttons */
.bgs-ps-cta-wrap {
  text-align: center;
  margin-top: 22px;
}
.bgs-ps-btn-cta {
  display: inline-block;
  background: var(--ps-primary);
  color: #ffffff !important;
  font-size: 19px;
  font-weight: 700;
  padding: 14px 42px;
  border-radius: 30px;
  text-decoration: none;
  box-shadow: 0 6px 20px rgba(241, 99, 52, 0.45);
  transition: all 0.25s ease;
  animation: pulse-cta 2s infinite;
}
.bgs-ps-btn-cta:hover {
  background: var(--ps-primary-hover);
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(241, 99, 52, 0.6);
}

@keyframes pulse-cta {
  0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(241, 99, 52, 0.6); }
  70% { transform: scale(1.02); box-shadow: 0 0 0 14px rgba(241, 99, 52, 0); }
  100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(241, 99, 52, 0); }
}

/* 6. Offer Section & Countdown */
.bgs-ps-offer-sec {
  background: linear-gradient(180deg, #18120d 0%, #0d0d0d 100%);
  border: 1px solid rgba(241, 99, 52, 0.3);
  border-radius: 16px;
  padding: 28px 20px;
}

.bgs-ps-countdown-wrap {
  display: flex;
  justify-content: center;
  gap: 12px;
  margin: 20px 0 28px;
}
.bgs-ps-cd-box {
  background: #000000;
  border: 1px solid #333333;
  border-radius: 10px;
  padding: 10px 14px;
  min-width: 65px;
  text-align: center;
}
.bgs-ps-cd-digit {
  display: block;
  font-size: 24px;
  font-weight: 800;
  color: #ffb703;
  line-height: 1;
  font-family: monospace;
}
.bgs-ps-cd-label {
  display: block;
  font-size: 11px;
  text-transform: uppercase;
  color: var(--ps-text-sub);
  margin-top: 4px;
  letter-spacing: 0.5px;
}

.bgs-ps-price-cards-stack {
  display: flex;
  flex-direction: column;
  gap: 14px;
}
.bgs-ps-price-badge-row {
  background: #000000;
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 12px;
  padding: 14px 18px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 8px;
}
.bgs-ps-pb-label {
  font-size: 18px;
  font-weight: 700;
  color: #ffffff;
}
.bgs-ps-pb-strike {
  font-size: 16px;
  color: #888888;
}
.bgs-ps-pb-strike del {
  color: #ff5555;
}
.bgs-ps-pb-offer {
  font-size: 17px;
  font-weight: 600;
  color: #ffffff;
}
.bgs-ps-pb-highlight {
  font-size: 22px;
  font-weight: 800;
  color: #ff3333;
  background: rgba(255, 51, 51, 0.15);
  padding: 2px 8px;
  border-radius: 6px;
  border: 1px solid rgba(255, 51, 51, 0.4);
}

/* 7. Contact Buttons */
.bgs-ps-contact-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 14px;
}
@media (max-width: 480px) {
  .bgs-ps-contact-grid {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 360px) {
  .bgs-ps-countdown-wrap {
    gap: 6px;
  }
  .bgs-ps-cd-box {
    min-width: 52px;
    padding: 8px 4px;
  }
  .bgs-ps-cd-digit {
    font-size: 18px;
  }
  .bgs-ps-cd-label {
    font-size: 9px;
  }
}
.bgs-ps-btn-call,
.bgs-ps-btn-whatsapp {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 13px 18px;
  border-radius: 10px;
  font-size: 16px;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.2s ease;
}
.bgs-ps-btn-call {
  background: #1e3a8a;
  color: #ffffff !important;
  border: 1px solid #3b82f6;
}
.bgs-ps-btn-call:hover {
  background: #2563eb;
}
.bgs-ps-btn-whatsapp {
  background: #065f46;
  color: #ffffff !important;
  border: 1px solid #10b981;
}
.bgs-ps-btn-whatsapp:hover {
  background: #059669;
}

/* 8. Checkout Form Section */
.bgs-ps-checkout-card {
  background: var(--ps-surface);
  border: 1px solid var(--ps-border);
  border-radius: 16px;
  padding: 26px 22px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.6);
}

.bgs-ps-group {
  margin-bottom: 18px;
}
.bgs-ps-label {
  display: block;
  font-size: 16px;
  font-weight: 600;
  color: #ffffff;
  margin-bottom: 7px;
}
.bgs-ps-req {
  color: #ff4444;
}
.bgs-ps-input {
  width: 100%;
  box-sizing: border-box;
  background: #000000;
  border: 1px solid #333333;
  color: #ffffff;
  padding: 13px 15px;
  border-radius: 8px;
  font-size: 16px;
  font-family: inherit;
  outline: none;
  transition: border-color 0.2s ease;
}
.bgs-ps-input:focus {
  border-color: var(--ps-primary);
  box-shadow: 0 0 0 2px rgba(241, 99, 52, 0.25);
}
.bgs-ps-textarea {
  resize: vertical;
}

/* Shipping Method */
.bgs-ps-shipping-box {
  background: #000000;
  border: 1px solid var(--ps-border);
  border-radius: 10px;
  padding: 16px;
  margin: 22px 0;
}
.bgs-ps-box-title {
  font-size: 17px;
  font-weight: 700;
  color: #ffffff;
  margin: 0 0 12px 0;
  border-bottom: 1px solid #222222;
  padding-bottom: 8px;
}
.bgs-ps-ship-option {
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 16px;
  font-weight: 600;
  color: #ffffff;
}
.bgs-ps-ship-badge {
  background: var(--ps-green);
  color: #000;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-weight: 800;
  margin-right: 8px;
  font-size: 13px;
}
.bgs-ps-ship-price {
  color: var(--ps-green);
  font-weight: 700;
}

/* Products selector */
.bgs-ps-products-box {
  background: #000000;
  border: 1px solid var(--ps-border);
  border-radius: 10px;
  padding: 16px;
  margin-bottom: 22px;
}
.bgs-ps-product-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 12px 14px;
  border: 1px solid #2a2a2a;
  border-radius: 8px;
  margin-bottom: 10px;
  cursor: pointer;
  background: #0a0a0a;
  transition: all 0.2s ease;
  flex-wrap: wrap;
  gap: 10px;
}
.bgs-ps-product-row:last-child {
  margin-bottom: 0;
}
.bgs-ps-product-row.active {
  border-color: var(--ps-primary);
  background: rgba(241, 99, 52, 0.08);
}
.bgs-ps-row-left {
  display: flex;
  align-items: center;
  gap: 12px;
  flex: 1;
}
.bgs-ps-radio {
  accent-color: var(--ps-primary);
  width: 18px;
  height: 18px;
  cursor: pointer;
}
.bgs-ps-item-title {
  display: block;
  font-size: 16px;
  font-weight: 700;
  color: #ffffff;
}
.bgs-ps-item-sub {
  display: block;
  font-size: 13px;
  color: var(--ps-text-sub);
}
.bgs-ps-row-right {
  display: flex;
  align-items: center;
  gap: 14px;
}
.bgs-ps-qty-wrap {
  display: flex;
  align-items: center;
  border: 1px solid #333333;
  border-radius: 6px;
  overflow: hidden;
}
.bgs-ps-qty-btn {
  background: #1c1c1c;
  color: #ffffff;
  border: none;
  width: 28px;
  height: 28px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
}
.bgs-ps-qty-btn:hover {
  background: var(--ps-primary);
}
.bgs-ps-qty-input {
  width: 32px;
  height: 28px;
  background: #000;
  border: none;
  color: #fff;
  text-align: center;
  font-size: 14px;
  font-weight: bold;
}
.bgs-ps-price-cell {
  font-size: 17px;
  font-weight: 800;
  color: #ffffff;
  min-width: 65px;
  text-align: right;
}

/* Order Summary Table */
.bgs-ps-order-table-card {
  background: #000000;
  border: 1px solid var(--ps-border);
  border-radius: 10px;
  padding: 16px;
  margin-bottom: 22px;
}
.bgs-ps-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 15px;
}
.bgs-ps-table th,
.bgs-ps-table td {
  padding: 10px 4px;
  border-bottom: 1px solid #222222;
  color: #dddddd;
}
.bgs-ps-table tfoot th,
.bgs-ps-table tfoot td {
  border-bottom: 1px solid #222222;
}
.bgs-ps-text-right {
  text-align: right;
}
.bgs-ps-free-tag {
  color: var(--ps-green);
  font-weight: 600;
}
.bgs-ps-total-row th,
.bgs-ps-total-row td {
  font-size: 18px;
  color: #ffffff;
  font-weight: 800;
  border-bottom: none;
  padding-top: 14px;
}

/* Payment & Submit Button */
.bgs-ps-payment-box {
  margin-top: 20px;
}
.bgs-ps-payment-method {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 16px;
  font-weight: 600;
  color: #ffffff;
}
.bgs-ps-payment-method input {
  accent-color: var(--ps-primary);
  width: 18px;
  height: 18px;
}
.bgs-ps-payment-hint {
  font-size: 14px;
  color: var(--ps-text-sub);
  margin: 6px 0 20px 28px;
}
.bgs-ps-submit-btn {
  width: 100%;
  background: var(--ps-primary);
  color: #ffffff;
  border: none;
  border-radius: 10px;
  padding: 16px 20px;
  font-size: 20px;
  font-weight: 800;
  cursor: pointer;
  box-shadow: 0 8px 25px rgba(241, 99, 52, 0.4);
  transition: all 0.25s ease;
}
.bgs-ps-submit-btn:hover {
  background: var(--ps-primary-hover);
  transform: translateY(-2px);
  box-shadow: 0 10px 30px rgba(241, 99, 52, 0.6);
}

.bgs-ps-feedback {
  margin-top: 16px;
  padding: 14px;
  border-radius: 8px;
  font-size: 15px;
  text-align: center;
}
.bgs-ps-feedback.error {
  background: rgba(220, 38, 38, 0.2);
  border: 1px solid #dc2626;
  color: #fca5a5;
}
.bgs-ps-feedback.success {
  background: rgba(16, 185, 129, 0.2);
  border: 1px solid #10b981;
  color: #6ee7b7;
}

/* 9. Mobile Floating Sticky Bar */
.bgs-ps-mobile-bar {
  display: none;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(15, 15, 15, 0.95);
  backdrop-filter: blur(10px);
  border-top: 1px solid rgba(255, 255, 255, 0.12);
  padding: 10px 16px;
  z-index: 9999;
  box-shadow: 0 -6px 25px rgba(0,0,0,0.7);
}
@media (max-width: 768px) {
  .bgs-ps-mobile-bar {
    display: block;
  }
}
.bgs-ps-mb-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 720px;
  margin: 0 auto;
}
.bgs-ps-mb-title {
  display: block;
  font-size: 13px;
  color: var(--ps-text-sub);
}
.bgs-ps-mb-price {
  display: block;
  font-size: 18px;
  font-weight: 800;
  color: #ffffff;
}
.bgs-ps-mb-btn {
  background: var(--ps-primary);
  color: #ffffff !important;
  font-size: 15px;
  font-weight: 700;
  padding: 10px 22px;
  border-radius: 24px;
  text-decoration: none;
  box-shadow: 0 4px 15px rgba(241, 99, 52, 0.5);
}

/* Product Visual Showcase Box (Section 3) */
.bgs-ps-product-visual-box {
  text-align: center;
  margin-bottom: 22px;
  background: #000000;
  border: 1px solid var(--ps-border);
  border-radius: 14px;
  padding: 18px 14px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.6);
}
.bgs-ps-visual-img-wrap {
  position: relative;
  display: inline-block;
  max-width: 340px;
  width: 100%;
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid #2a2a2a;
}
.bgs-ps-showcase-img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 12px;
  transition: transform 0.35s ease;
}
.bgs-ps-showcase-img:hover {
  transform: scale(1.03);
}
.bgs-ps-floating-tag {
  position: absolute;
  bottom: 12px;
  left: 50%;
  transform: translateX(-50%);
  background: rgba(0, 0, 0, 0.88);
  border: 1px solid rgba(241, 99, 52, 0.7);
  color: #ffffff;
  font-size: 12px;
  font-weight: 800;
  padding: 5px 14px;
  border-radius: 20px;
  white-space: nowrap;
  letter-spacing: 0.5px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.7);
}
.bgs-ps-visual-badge-row {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-top: 14px;
  flex-wrap: wrap;
}
.bgs-ps-vbadge {
  background: #111111;
  border: 1px solid #2a2a2a;
  color: #e5e5e5;
  font-size: 13px;
  font-weight: 600;
  padding: 5px 12px;
  border-radius: 16px;
}

/* Selected Product Summary Card in Checkout Form (Section 8) */
.bgs-ps-form-summary-card {
  display: flex;
  align-items: center;
  gap: 16px;
  background: #000000;
  border: 1px solid var(--ps-border);
  border-radius: 12px;
  padding: 14px 16px;
  margin-bottom: 22px;
}
.bgs-ps-fsc-thumb img {
  width: 76px;
  height: 76px;
  object-fit: cover;
  border-radius: 8px;
  border: 1px solid #333333;
}
.bgs-ps-fsc-info {
  flex: 1;
}
.bgs-ps-fsc-badge {
  display: inline-block;
  background: rgba(241, 99, 52, 0.15);
  border: 1px solid rgba(241, 99, 52, 0.4);
  color: var(--ps-primary);
  font-size: 11px;
  font-weight: 800;
  padding: 2px 7px;
  border-radius: 4px;
  margin-bottom: 3px;
}
.bgs-ps-fsc-title {
  margin: 0 0 4px 0;
  font-size: 16px;
  font-weight: 700;
  color: #ffffff;
}
.bgs-ps-fsc-price-row {
  display: flex;
  align-items: baseline;
  gap: 8px;
  margin-bottom: 3px;
  flex-wrap: wrap;
}
.bgs-ps-fsc-sale {
  color: var(--ps-primary);
  font-size: 18px;
  font-weight: 800;
}
.bgs-ps-fsc-reg {
  color: #777777;
  text-decoration: line-through;
  font-size: 13px;
}
.bgs-ps-fsc-save {
  background: rgba(16, 185, 129, 0.15);
  border: 1px solid rgba(16, 185, 129, 0.4);
  color: #10b981;
  font-size: 11px;
  font-weight: 700;
  padding: 2px 6px;
  border-radius: 4px;
}
.bgs-ps-fsc-desc {
  margin: 0;
  font-size: 12px;
  color: var(--ps-text-sub);
}

/* Mobile Sticky Bar Product Section (Section 9) */
.bgs-ps-mb-product {
  display: flex;
  align-items: center;
  gap: 10px;
}
.bgs-ps-mb-thumb {
  width: 44px;
  height: 44px;
  object-fit: cover;
  border-radius: 6px;
  border: 1px solid #333333;
}
</style>


<!-- ==========================================================================
     CLIENT JAVASCRIPT: INTERACTIVE SELECTION, COUNTDOWN & AJAX CHECKOUT
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {

  // 1. Evergreen Countdown Timer
  var totalSeconds = 100740; // ~27 hours
  var daysEl    = document.getElementById('bgsDays');
  var hoursEl   = document.getElementById('bgsHours');
  var minutesEl = document.getElementById('bgsMinutes');
  var secondsEl = document.getElementById('bgsSeconds');

  function updateCountdown() {
    if (totalSeconds <= 0) {
      totalSeconds = 86400; // Reset evergreen
    }
    var d = Math.floor(totalSeconds / (3600 * 24));
    var h = Math.floor((totalSeconds % (3600 * 24)) / 3600);
    var m = Math.floor((totalSeconds % 3600) / 60);
    var s = Math.floor(totalSeconds % 60);

    if (daysEl) daysEl.textContent = (d < 10 ? '0' : '') + d;
    if (hoursEl) hoursEl.textContent = (h < 10 ? '0' : '') + h;
    if (minutesEl) minutesEl.textContent = (m < 10 ? '0' : '') + m;
    if (secondsEl) secondsEl.textContent = (s < 10 ? '0' : '') + s;

    totalSeconds--;
  }
  updateCountdown();
  setInterval(updateCountdown, 1000);

  // 2. Package Selector & Live Calculations
  var currentPkgName = 'Paper Spray 20ml';
  var currentPrice   = 1190;
  var currentRegPrice = 2790;
  var currentQty     = 1;

  var pkgRows = document.querySelectorAll('.bgs-ps-product-row');
  var hiddenPkgInput   = document.getElementById('bgs-selected-package');
  var hiddenPriceInput = document.getElementById('bgs-level-price');

  var sumProdName = document.getElementById('bgs-summary-prod-name');
  var sumQty      = document.getElementById('bgs-summary-qty');
  var sumSubtotal = document.getElementById('bgs-summary-subtotal');
  var sumSubFoot  = document.getElementById('bgs-summary-subtotal-foot');
  var sumTotal    = document.getElementById('bgs-summary-total');
  var btnPrice    = document.getElementById('bgs-btn-price-display');

  var mbTitle     = document.getElementById('bgs-mb-title');
  var mbPrice     = document.getElementById('bgs-mb-price');

  // Form preview card elements
  var fscTitle = document.getElementById('bgs-fsc-title');
  var fscPrice = document.getElementById('bgs-fsc-price');
  var fscReg   = document.getElementById('bgs-fsc-reg');
  var fscSave  = document.getElementById('bgs-fsc-save');

  function formatMoney(num) {
    return num.toLocaleString('en-US');
  }

  function recalculate() {
    var total = currentPrice * currentQty;
    var save  = (currentRegPrice - currentPrice) * currentQty;

    if (sumProdName) sumProdName.textContent = currentPkgName;
    if (sumQty) sumQty.textContent = currentQty;
    if (sumSubtotal) sumSubtotal.textContent = formatMoney(total);
    if (sumSubFoot) sumSubFoot.textContent = formatMoney(total);
    if (sumTotal) sumTotal.textContent = formatMoney(total);
    if (btnPrice) btnPrice.textContent = formatMoney(total);

    if (mbTitle) mbTitle.textContent = currentPkgName;
    if (mbPrice) mbPrice.textContent = formatMoney(total);

    if (fscTitle) fscTitle.textContent = currentPkgName;
    if (fscPrice) fscPrice.textContent = formatMoney(total);
    if (fscReg)   fscReg.textContent   = formatMoney(currentRegPrice * currentQty);
    if (fscSave)  fscSave.textContent  = formatMoney(Math.max(0, save));

    if (hiddenPkgInput) hiddenPkgInput.value = currentPkgName;
    if (hiddenPriceInput) hiddenPriceInput.value = currentPrice;
  }


  // Row selection handler
  pkgRows.forEach(function(row) {
    row.addEventListener('click', function(e) {
      if (e.target.classList.contains('bgs-ps-qty-btn') || e.target.classList.contains('bgs-ps-qty-input')) {
        return; // Don't trigger radio swap when clicking qty
      }
      pkgRows.forEach(function(r) { r.classList.remove('active'); });
      row.classList.add('active');

      var radio = row.querySelector('.bgs-ps-radio');
      if (radio) radio.checked = true;

      currentPkgName = row.getAttribute('data-pkg');
      currentPrice   = parseInt(row.getAttribute('data-price'), 10) || 1190;
      if (currentPrice === 1190) {
        currentRegPrice = 2790;
      } else if (currentPrice === 1490) {
        currentRegPrice = 3490;
      } else if (currentPrice === 1990) {
        currentRegPrice = 3990;
      }


      // sync qty from that row's qty input
      var qtyInput = row.querySelector('.bgs-ps-qty-input');
      if (qtyInput) {
        currentQty = parseInt(qtyInput.value, 10) || 1;
      }

      recalculate();
    });
  });

  // Quantity + / - buttons
  document.querySelectorAll('.bgs-ps-qty-btn').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
      e.stopPropagation();
      var targetId = this.getAttribute('data-target');
      var input = document.getElementById(targetId);
      if (!input) return;

      var val = parseInt(input.value, 10) || 1;
      if (this.classList.contains('bgs-ps-plus')) {
        val = Math.min(20, val + 1);
      } else if (this.classList.contains('bgs-ps-minus')) {
        val = Math.max(1, val - 1);
      }
      input.value = val;

      // Update row's price cell display
      var row = input.closest('.bgs-ps-product-row');
      if (row) {
        var basePrice = parseInt(row.getAttribute('data-price'), 10) || 1190;
        var amountEl = row.querySelector('.bgs-ps-amount');
        if (amountEl) {
          amountEl.textContent = formatMoney(basePrice * val);
        }

        // If this row is active, update active qty
        if (row.classList.contains('active')) {
          currentQty = val;
          recalculate();
        } else {
          // auto-activate this row
          row.click();
        }
      }
    });
  });

  // 3. AJAX Form Submission
  var checkoutForm = document.getElementById('bgs-ps-checkout-form');
  var submitBtn    = document.getElementById('bgs-place-order-btn');
  var feedbackEl   = document.getElementById('bgs-order-feedback');
  var btnLabel     = submitBtn ? submitBtn.querySelector('.bgs-ps-btn-label') : null;
  var btnLoader    = submitBtn ? submitBtn.querySelector('.bgs-ps-btn-loader') : null;

  if (checkoutForm) {
    checkoutForm.addEventListener('submit', function(e) {
      e.preventDefault();

      var nameInput    = document.getElementById('bgs_name');
      var addressInput = document.getElementById('bgs_address');
      var phoneInput   = document.getElementById('bgs_phone');

      var name    = nameInput ? nameInput.value.trim() : '';
      var address = addressInput ? addressInput.value.trim() : '';
      var phone   = phoneInput ? phoneInput.value.trim() : '';

      if (!name) {
        showFeedback('অনুগ্রহ করে আপনার পুরো নাম লিখুন।', 'error');
        if (nameInput) nameInput.focus();
        return;
      }
      if (!address) {
        showFeedback('অনুগ্রহ করে সম্পূর্ণ ডেলিভারির ঠিকানা লিখুন।', 'error');
        if (addressInput) addressInput.focus();
        return;
      }
      if (!phone || phone.length < 11) {
        showFeedback('অনুগ্রহ করে সঠিক ১১ ডিজিটের মোবাইল নম্বর প্রদান করুন।', 'error');
        if (phoneInput) phoneInput.focus();
        return;
      }

      // Prepare form data
      var formData = new FormData(checkoutForm);
      formData.set('qty', currentQty);
      formData.set('quantity', currentQty);
      formData.set('selected_level', currentPkgName);
      formData.set('level_price', currentPrice);
      formData.set('customer_name', name);
      formData.set('customer_phone', phone);
      formData.set('customer_address', address);
      formData.set('delivery_zone', 'free');

      // UI Loading state
      if (submitBtn) submitBtn.disabled = true;
      if (btnLabel) btnLabel.style.display = 'none';
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
          showFeedback('আপনার অর্ডার সফলভাবে গৃহীত হয়েছে! রিডাইরেক্ট করা হচ্ছে...', 'success');
          setTimeout(function() {
            window.location.href = data.data.redirect_url;
          }, 600);
        } else {
          var msg = (data.data && data.data.message) ? data.data.message : 'অর্ডার করতে সমস্যা হয়েছে। অনুগ্রহ করে আবার চেষ্টা করুন।';
          showFeedback(msg, 'error');
          resetSubmitBtn();
        }
      })
      .catch(function(err) {
        showFeedback('সার্ভার সংযোগে সমস্যা হয়েছে। অনুগ্রহ করে কল বা হোয়াটসঅ্যাপে যোগাযোগ করুন।', 'error');
        resetSubmitBtn();
      });

    });
  }

  function resetSubmitBtn() {
    if (submitBtn) submitBtn.disabled = false;
    if (btnLabel) btnLabel.style.display = 'inline-block';
    if (btnLoader) btnLoader.style.display = 'none';
  }

  function showFeedback(msg, type) {
    if (!feedbackEl) return;
    feedbackEl.textContent = msg;
    feedbackEl.className = 'bgs-ps-feedback ' + type;
    feedbackEl.style.display = 'block';
  }

  function hideFeedback() {
    if (!feedbackEl) return;
    feedbackEl.style.display = 'none';
  }

});
</script>
