<?php
/**
 * Template Name: Customer Reviews Page Template
 * Description: Dedicated Dark Luxury Customer Reviews Page for Bodyguard Shop
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

$review_1 = get_option( 'bgs_review_video_1', 'https://www.youtube.com/shorts/RyqHKNnoW-Y' );
$review_2 = get_option( 'bgs_review_video_2', 'https://www.youtube.com/shorts/T7x7RT7ynxQ' );
$review_3 = get_option( 'bgs_review_video_3', 'https://www.youtube.com/watch?v=Id4CSc8QS1Y' );

if ( ! function_exists( 'bgs_format_review_embed_url' ) ) {
    function bgs_format_review_embed_url( $url, $default_id ) {
        $video_id = $default_id;
        if ( ! empty( $url ) ) {
            if ( strpos( $url, '/shorts/' ) !== false ) {
                $parts    = explode( '/shorts/', $url );
                $video_id = trim( explode( '?', $parts[1] )[0], '/' );
            } elseif ( strpos( $url, 'youtu.be/' ) !== false ) {
                $parts    = explode( 'youtu.be/', $url );
                $video_id = trim( explode( '?', $parts[1] )[0], '/' );
            } elseif ( strpos( $url, 'watch?v=' ) !== false ) {
                parse_str( (string) parse_url( $url, PHP_URL_QUERY ), $qp );
                if ( ! empty( $qp['v'] ) ) {
                    $video_id = trim( $qp['v'] );
                }
            } elseif ( strpos( $url, '/embed/' ) !== false ) {
                $parts    = explode( '/embed/', $url );
                $video_id = trim( explode( '?', $parts[1] )[0], '/' );
            }
        }
        return 'https://www.youtube.com/embed/' . esc_attr( $video_id ) . '?rel=0&modestbranding=1&playsinline=1';
    }
}

$embed_1 = bgs_format_review_embed_url( $review_1, 'RyqHKNnoW-Y' );
$embed_2 = bgs_format_review_embed_url( $review_2, 'T7x7RT7ynxQ' );
$embed_3 = bgs_format_review_embed_url( $review_3, 'Id4CSc8QS1Y' );

$video_reviews = [
    [
        'num'      => '01',
        'title'    => 'Customer Review 1',
        'subtitle' => 'ভেরিফাইড কাস্টমার রিভিউ ও আনবক্সিং অভিজ্ঞতা',
        'embed'    => $embed_1,
        'yt_url'   => 'https://www.youtube.com/shorts/RyqHKNnoW-Y',
        'rating'   => '5.0',
    ],
    [
        'num'      => '02',
        'title'    => 'Customer Review 2',
        'subtitle' => 'প্রোডাক্টের কোয়ালিটি ও কার্যকারিতা সম্পর্কে মতামত',
        'embed'    => $embed_2,
        'yt_url'   => 'https://www.youtube.com/shorts/T7x7RT7ynxQ',
        'rating'   => '5.0',
    ],
    [
        'num'      => '03',
        'title'    => 'Customer Review 3',
        'subtitle' => 'বাস্তব ব্যবহারের অভিজ্ঞতা ও কাস্টমার ফিডব্যাক',
        'embed'    => $embed_3,
        'yt_url'   => 'https://www.youtube.com/watch?v=Id4CSc8QS1Y',
        'rating'   => '5.0',
    ],
];
?>

<main class="bgs-reviews-page-main" id="bgs-reviews-page">
  <div class="container bgs-reviews-container">

    <!-- Page Header Banner -->
    <div class="bgs-reviews-hero-header">
      <div class="bgs-reviews-trust-pill">
        <span class="bgs-pill-stars">★★★★★</span>
        <span>৪.৯/৫.০ রেটিং • ১০০% ভেরিফাইড কাস্টমার রিভিউ</span>
      </div>
      <h1 class="bgs-reviews-page-title">Customer Reviews</h1>
      <div class="bgs-reviews-gold-divider"></div>
      <p class="bgs-reviews-page-subtitle">
        আমাদের সম্মানিত গ্রাহকদের পাঠানো ভিডিও রিভিউ এবং প্রোডাক্টের গুণগত মানের বাস্তব প্রমাণ নিচে দেখুন।
      </p>
    </div>

    <!-- 3 Video Reviews Grid -->
    <div class="bgs-reviews-video-grid">
      <?php foreach ( $video_reviews as $item ) : ?>
        <div class="bgs-review-video-card">
          <div class="bgs-review-card-top">
            <span class="bgs-review-badge">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#C9A96E" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
              <?php echo esc_html( $item['title'] ); ?>
            </span>
            <span class="bgs-review-stars">★★★★★ <strong><?php echo esc_html( $item['rating'] ); ?></strong></span>
          </div>

          <div class="bgs-review-video-frame">
            <iframe
              src="<?php echo esc_url( $item['embed'] ); ?>"
              title="<?php echo esc_attr( $item['title'] . ' — Bodyguard Shop' ); ?>"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
              loading="lazy">
            </iframe>
          </div>

          <div class="bgs-review-card-bottom">
            <div class="bgs-review-meta-info">
              <span class="bgs-verified-tag">✔ Verified Buyer</span>
              <p class="bgs-review-caption"><?php echo esc_html( $item['subtitle'] ); ?></p>
            </div>
            <a href="<?php echo esc_url( $item['yt_url'] ); ?>" target="_blank" rel="noopener" class="bgs-yt-direct-btn" title="Watch on YouTube">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="#FF0000"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
              <span>YouTube</span>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Bottom CTA Box -->
    <div class="bgs-reviews-bottom-cta">
      <div class="bgs-cta-content">
        <h3>আপনার ও আপনার পরিবারের সুরক্ষা নিশ্চিত করতে আজই অর্ডার করুন</h3>
        <p>সারা বাংলাদেশে ১–৩ দিনে ক্যাশ অন ডেলিভারি সুবিধা। প্রোডাক্ট হাতে পেয়ে চেক করে পেমেন্ট করার সুযোগ।</p>
      </div>
      <div class="bgs-cta-buttons">
        <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="bgs-cta-shop-btn">
          সবগুলো প্রোডাক্ট দেখুন &rarr;
        </a>
        <a href="https://wa.me/<?php echo esc_attr( get_option( 'bgs_whatsapp', '8801409710012' ) ); ?>" target="_blank" rel="noopener" class="bgs-cta-wa-btn">
          WhatsApp সাপোর্ট
        </a>
      </div>
    </div>

  </div>
</main>

<style>
.bgs-reviews-page-main {
  background: #0A0A0E;
  color: #FFFFFF;
  min-height: 80vh;
  padding: 50px 0 90px;
}

.bgs-reviews-container {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Header */
.bgs-reviews-hero-header {
  text-align: center;
  margin-bottom: 48px;
}

.bgs-reviews-trust-pill {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(201, 169, 110, 0.12);
  border: 1px solid rgba(201, 169, 110, 0.35);
  color: #E5C384;
  padding: 7px 18px;
  border-radius: 50px;
  font-size: 0.85rem;
  font-weight: 600;
  margin-bottom: 16px;
}

.bgs-pill-stars {
  color: #F59E0B;
  letter-spacing: 1px;
}

.bgs-reviews-page-title {
  font-family: 'Poppins', 'Hind Siliguri', sans-serif;
  font-size: clamp(1.85rem, 3.8vw, 2.75rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 14px;
  line-height: 1.2;
}

.bgs-reviews-gold-divider {
  width: 70px;
  height: 3px;
  background: linear-gradient(90deg, #C9A96E, #E5C384);
  margin: 0 auto 16px;
  border-radius: 2px;
}

.bgs-reviews-page-subtitle {
  color: #B8B8C8;
  font-size: clamp(0.95rem, 2vw, 1.1rem);
  max-width: 660px;
  margin: 0 auto;
  line-height: 1.65;
}

/* 3 Video Grid */
.bgs-reviews-video-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
  margin-bottom: 60px;
}

.bgs-review-video-card {
  background: #14141C;
  border: 1px solid rgba(201, 169, 110, 0.28);
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.65);
  transition: transform 0.28s ease, border-color 0.28s ease, box-shadow 0.28s ease;
  display: flex;
  flex-direction: column;
}

.bgs-review-video-card:hover {
  transform: translateY(-5px);
  border-color: #C9A96E;
  box-shadow: 0 20px 48px rgba(0, 0, 0, 0.85), 0 0 24px rgba(201, 169, 110, 0.22);
}

.bgs-review-card-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 14px 18px;
  background: rgba(255, 255, 255, 0.02);
  border-bottom: 1px solid rgba(201, 169, 110, 0.16);
}

.bgs-review-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 0.88rem;
  font-weight: 700;
  color: #FFFFFF;
}

.bgs-review-stars {
  color: #F59E0B;
  font-size: 0.85rem;
  letter-spacing: 0.5px;
}

.bgs-review-stars strong {
  color: #E5C384;
  margin-left: 3px;
}

.bgs-review-video-frame {
  width: 100%;
  aspect-ratio: 9 / 16;
  background: #000000;
  position: relative;
  overflow: hidden;
}

.bgs-review-video-frame iframe {
  width: 100%;
  height: 100%;
  border: none;
  display: block;
}

.bgs-review-card-bottom {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  padding: 15px 18px;
  background: #101017;
  border-top: 1px solid rgba(255, 255, 255, 0.06);
  margin-top: auto;
}

.bgs-verified-tag {
  display: inline-block;
  font-size: 0.76rem;
  font-weight: 700;
  color: #10B981;
  background: rgba(16, 185, 129, 0.12);
  padding: 3px 9px;
  border-radius: 20px;
  margin-bottom: 5px;
}

.bgs-review-caption {
  margin: 0;
  font-size: 0.85rem;
  color: #D1D5DB;
  line-height: 1.4;
}

.bgs-yt-direct-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.14);
  color: #FFFFFF !important;
  text-decoration: none !important;
  font-size: 0.78rem;
  font-weight: 600;
  padding: 7px 12px;
  border-radius: 8px;
  white-space: nowrap;
  transition: all 0.2s ease;
}

.bgs-yt-direct-btn:hover {
  background: rgba(255, 0, 0, 0.15);
  border-color: rgba(255, 0, 0, 0.45);
}

/* Bottom CTA */
.bgs-reviews-bottom-cta {
  background: linear-gradient(135deg, #151520 0%, #101018 100%);
  border: 1px solid rgba(201, 169, 110, 0.3);
  border-radius: 20px;
  padding: 36px 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 24px;
  box-shadow: 0 18px 45px rgba(0, 0, 0, 0.5);
}

.bgs-cta-content h3 {
  font-size: clamp(1.2rem, 2.4vw, 1.55rem);
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 8px;
}

.bgs-cta-content p {
  margin: 0;
  color: #B8B8C8;
  font-size: 0.95rem;
}

.bgs-cta-buttons {
  display: flex;
  align-items: center;
  gap: 14px;
  flex-wrap: wrap;
}

.bgs-cta-shop-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #C9A96E 0%, #E5C384 100%);
  color: #0A0A0E !important;
  font-weight: 800;
  font-size: 0.95rem;
  padding: 13px 26px;
  border-radius: 50px;
  text-decoration: none !important;
  box-shadow: 0 8px 22px rgba(201, 169, 110, 0.35);
  transition: all 0.25s ease;
}

.bgs-cta-shop-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 28px rgba(201, 169, 110, 0.5);
}

.bgs-cta-wa-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: rgba(37, 211, 102, 0.14);
  border: 1.5px solid #25D366;
  color: #25D366 !important;
  font-weight: 700;
  font-size: 0.95rem;
  padding: 12px 24px;
  border-radius: 50px;
  text-decoration: none !important;
  transition: all 0.25s ease;
}

.bgs-cta-wa-btn:hover {
  background: #25D366;
  color: #0A0A0E !important;
}

/* Responsive */
@media (max-width: 991px) {
  .bgs-reviews-video-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 22px;
  }
}

@media (max-width: 650px) {
  .bgs-reviews-page-main {
    padding: 32px 0 65px;
  }
  .bgs-reviews-container {
    padding: 0 14px;
  }
  .bgs-reviews-hero-header {
    margin-bottom: 32px;
  }
  .bgs-reviews-video-grid {
    grid-template-columns: 1fr;
    max-width: 380px;
    margin: 0 auto 44px;
    gap: 24px;
  }
  .bgs-reviews-bottom-cta {
    padding: 26px 20px;
    text-align: center;
    justify-content: center;
  }
  .bgs-cta-buttons {
    width: 100%;
    justify-content: center;
  }
  .bgs-cta-shop-btn,
  .bgs-cta-wa-btn {
    width: 100%;
  }
}
</style>

<?php get_footer(); ?>
