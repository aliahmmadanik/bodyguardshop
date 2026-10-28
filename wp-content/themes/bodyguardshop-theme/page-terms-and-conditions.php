<?php
/**
 * Template Name: Terms & Conditions Page
 * Description: Dedicated Dark Luxury Terms & Conditions Page for Bodyguard Shop
 */
defined( 'ABSPATH' ) || exit;

get_header();
?>

<main id="main-content" class="bodyguard-terms-page">

  <!-- Page Hero -->
  <div class="terms-hero" id="terms-hero">
    <div class="container">
      <span class="gold-badge">Legal &amp; Policy</span>
      <h1 class="terms-hero-title">Terms &amp; Conditions</h1>
      <div class="terms-meta">
        <span>🛡️ Bodyguard Shop</span>
        <span>•</span>
        <span>১০০% গ্রাহক সন্তুষ্টি ও গ্যারান্টি নীতিমালা</span>
      </div>
    </div>
  </div>

  <!-- Dedicated Terms Content -->
  <section class="terms-section" id="terms-section">
    <div class="container">
      <div class="bgs-dedicated-terms-wrap">

        <!-- Point 1: 7 Days Money Back Guarantee -->
        <div class="bgs-term-card">
          <div class="bgs-term-star">★</div>
          <div class="bgs-term-text-wrap">
            <p class="bgs-term-main-text">
              সম্মানিত গ্রাহক আপনি আমাদের সকল পণ্যের জন্য <strong>৭ দিনের Money Back Guarantee</strong> পাচ্ছেন।
              <span class="bgs-term-sub-note">(আমরা যা বলছি তার সাথে Product এর মিল না পেলে)</span>
            </p>
          </div>
        </div>

        <!-- Point 2: 72 Hours Replacement on Damage or Defect -->
        <div class="bgs-term-card">
          <div class="bgs-term-star">★</div>
          <div class="bgs-term-text-wrap">
            <p class="bgs-term-main-text">
              আপনার প্রোডাক্ট <strong>Damage</strong> অথবা <strong>Defect</strong> হলে <strong>৭২ ঘন্টার মধ্যে</strong> নতুন প্রোডাক্ট পাঠানো হবে।
            </p>
          </div>
        </div>

        <!-- Bottom Action -->
        <div class="bgs-terms-cta">
          <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="bgs-terms-shop-btn">
            <span>শপ ভিজিট করুন (Shop Now) &rarr;</span>
          </a>
        </div>

      </div>
    </div>
  </section>

</main>

<style>
.bodyguard-terms-page {
  background: #0A0A0E;
  color: #FFFFFF;
  min-height: 78vh;
  font-family: 'Hind Siliguri', 'Outfit', sans-serif;
}

.terms-hero {
  background: linear-gradient(135deg, rgba(201, 169, 110, 0.08), rgba(10, 10, 14, 0.96)), #14141C;
  padding: 56px 20px 44px;
  text-align: center;
  border-bottom: 1px solid rgba(201, 169, 110, 0.22);
}

.gold-badge {
  display: inline-block;
  padding: 6px 18px;
  background: rgba(201, 169, 110, 0.14);
  border: 1px solid rgba(201, 169, 110, 0.35);
  border-radius: 30px;
  color: #C9A96E;
  font-weight: 700;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  margin-bottom: 10px;
}

.terms-hero-title {
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 800;
  background: linear-gradient(135deg, #FFFFFF 0%, #E5C384 60%, #C9A96E 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin: 10px 0 14px;
}

.terms-meta {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 10px;
  color: #C9A96E;
  font-weight: 600;
  font-size: 0.95rem;
}

.terms-section {
  padding: 55px 20px 90px;
}

.bgs-dedicated-terms-wrap {
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.bgs-term-card {
  display: flex;
  align-items: flex-start;
  gap: 18px;
  background: linear-gradient(145deg, #151520 0%, #101018 100%);
  border: 1.5px solid rgba(201, 169, 110, 0.35);
  border-radius: 18px;
  padding: 30px 28px;
  box-shadow: 0 16px 40px rgba(0, 0, 0, 0.55);
  transition: transform 0.25s ease, border-color 0.25s ease;
}

.bgs-term-card:hover {
  transform: translateY(-2px);
  border-color: #C9A96E;
}

.bgs-term-star {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: rgba(201, 169, 110, 0.15);
  border: 1px solid rgba(201, 169, 110, 0.45);
  color: #C9A96E;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  font-weight: 800;
  flex-shrink: 0;
  margin-top: 2px;
}

.bgs-term-main-text {
  margin: 0;
  font-size: clamp(1.15rem, 2.2vw, 1.4rem);
  line-height: 1.75;
  color: #FFFFFF;
  font-weight: 600;
}

.bgs-term-main-text strong {
  color: #E5C384;
  font-weight: 800;
}

.bgs-term-sub-note {
  display: block;
  margin-top: 6px;
  color: #D4D4E0;
  font-size: 0.95em;
}

.bgs-terms-cta {
  text-align: center;
  margin-top: 16px;
}

.bgs-terms-shop-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 14px 34px;
  background: linear-gradient(135deg, #C9A96E 0%, #E5C384 50%, #A07840 100%);
  color: #0A0A0E !important;
  font-weight: 800;
  font-size: 1rem;
  border-radius: 50px;
  text-decoration: none !important;
  box-shadow: 0 8px 24px rgba(201, 169, 110, 0.35);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.bgs-terms-shop-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(201, 169, 110, 0.5);
}

@media (max-width: 600px) {
  .bgs-term-card {
    padding: 22px 18px;
    gap: 14px;
  }
  .bgs-term-star {
    width: 36px;
    height: 36px;
    font-size: 16px;
  }
}
</style>

<?php
get_footer();
