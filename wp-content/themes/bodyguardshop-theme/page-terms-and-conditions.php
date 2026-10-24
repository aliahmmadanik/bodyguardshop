<?php
/**
 * Template Name: Terms & Conditions Page
 * page-terms.php
 */
get_header();
?>

<main id="main-content" style="padding-top: 72px; background: #0A0A0A; min-height: 100vh;">

<!-- Page Hero -->
<div class="terms-hero" id="terms-hero">
  <div class="container">
    <span class="gold-badge">Legal</span>
    <h1 class="terms-hero-title">Terms & Conditions</h1>
    <div class="terms-hero-sub">
      <span class="sub-line">SaleOnBeauty গ্রাহক সেবা ও ব্যবহারের নীতিমালা,</span>
      <span class="sub-line">অর্ডার করার পূর্বে অনুগ্রহ করে শর্তাবলী জেনে নিন।</span>
    </div>
    <div class="terms-meta">
      <span>📅 সর্বশেষ আপডেট: ২০২৬</span>
      <span>•</span>
      <span>🏢 Salon Beauty</span>
    </div>
  </div>
</div>

<!-- Terms Content -->
<section class="terms-section" id="terms-section">
  <div class="container">
    <div class="terms-layout" id="terms-layout">

      <!-- Sticky Sidebar / Index -->
      <aside class="terms-sidebar" id="terms-sidebar">
        <div class="terms-index">
          <h3 class="index-title">📋 সূচিপত্র</h3>
          <nav class="index-nav" id="terms-index-nav">
            <a href="#term-1" class="index-link active">১. Product Authenticity</a>
            <a href="#term-2" class="index-link">২. Result Guarantee</a>
            <a href="#term-3" class="index-link">৩. Individual Results</a>
            <a href="#term-4" class="index-link">৪. Result Timeline</a>
            <a href="#term-5" class="index-link">৫. Proper Usage</a>
            <a href="#term-6" class="index-link">৬. Consistency</a>
            <a href="#term-7" class="index-link">৭. Product Storage</a>
            <a href="#term-8" class="index-link">৮. Guarantee Eligibility</a>
          </nav>
          <!-- Contact Box -->
          <div class="terms-contact-box">
            <p>প্রশ্ন আছে?</p>
            <a href="https://wa.me/<?php echo esc_attr( get_option('bgs_whatsapp', '8801409710012') ); ?>" class="terms-contact-btn" id="terms-whatsapp" target="_blank" rel="noopener">
              💬 WhatsApp করুন
            </a>
          </div>
        </div>
      </aside>

      <!-- Main Content -->
      <div class="terms-content" id="terms-content">

        <!-- Intro -->
        <div class="terms-intro" id="terms-intro-box">
          <div class="intro-icon">⚖️</div>
          <p>এই Terms & Conditions Salon Beauty এবং তার গ্রাহকদের মধ্যে একটি চুক্তি হিসেবে কাজ করে। আমাদের সেবা ব্যবহার করে আপনি এই শর্তগুলো মেনে নিচ্ছেন।</p>
        </div>

        <!-- Term 1 -->
        <div class="term-item" id="term-1">
          <div class="term-header">
            <div class="term-number">১</div>
            <h2 class="term-title">Product Authenticity</h2>
          </div>
          <div class="term-body">
            <p>Salon Beauty-এর সকল product authentic ও quality-checked product হিসেবে সরবরাহ করা হয়।</p>
            <div class="term-highlight">
              <span>✓</span> প্রতিটি পণ্য সরাসরি অথরাইজড সোর্স থেকে সংগ্রহ করা হয়
            </div>
          </div>
        </div>

        <!-- Term 2 -->
        <div class="term-item" id="term-2">
          <div class="term-header">
            <div class="term-number">২</div>
            <h2 class="term-title">Result Guarantee</h2>
          </div>
          <div class="term-body">
            <p>আমাদের product-এর effectiveness-এর প্রতি আমরা confident এবং নির্ধারিত usage অনুযায়ী ব্যবহারে expected result পাওয়ার জন্য guarantee প্রদান করি।</p>
            <div class="term-highlight featured">
              <span>🛡️</span> ১০০% Money-Back Guarantee — কাজ না করলে সম্পূর্ণ টাকা ফেরত
            </div>
          </div>
        </div>

        <!-- Term 3 -->
        <div class="term-item" id="term-3">
          <div class="term-header">
            <div class="term-number">৩</div>
            <h2 class="term-title">Individual Results May Vary</h2>
          </div>
          <div class="term-body">
            <p>প্রতিটি মানুষের skin type, condition, lifestyle, metabolism এবং অন্যান্য ব্যক্তিগত factors ভিন্ন হওয়ায় result পাওয়ার সময় ও মাত্রা ব্যক্তি অনুযায়ী আলাদা হতে পারে।</p>
            <div class="term-factors-grid">
              <div class="factor-tag">🧬 Skin Type</div>
              <div class="factor-tag">⚡ Metabolism</div>
              <div class="factor-tag">🌿 Lifestyle</div>
              <div class="factor-tag">💊 Condition</div>
            </div>
          </div>
        </div>

        <!-- Term 4 -->
        <div class="term-item" id="term-4">
          <div class="term-header">
            <div class="term-number">৪</div>
            <h2 class="term-title">Result Timeline</h2>
          </div>
          <div class="term-body">
            <p>কারও ক্ষেত্রে তুলনামূলকভাবে দ্রুত result দেখা দিতে পারে, আবার কারও ক্ষেত্রে noticeable result পেতে বেশি সময় লাগতে পারে। তাই সকল customer একই সময়ে একই ধরনের result পাবেন—এমন নিশ্চয়তা দেওয়া হয় না।</p>
            <div class="timeline-bar">
              <div class="tl-item">
                <div class="tl-dot"></div>
                <span>২১ দিন</span>
                <p>প্রাথমিক result</p>
              </div>
              <div class="tl-line"></div>
              <div class="tl-item">
                <div class="tl-dot"></div>
                <span>৩০ দিন</span>
                <p>নিয়মিত result</p>
              </div>
              <div class="tl-line"></div>
              <div class="tl-item">
                <div class="tl-dot"></div>
                <span>৪১ দিন</span>
                <p>সর্বোচ্চ result</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Term 5 -->
        <div class="term-item" id="term-5">
          <div class="term-header">
            <div class="term-number">৫</div>
            <h2 class="term-title">Proper Usage</h2>
          </div>
          <div class="term-body">
            <p>Guarantee valid রাখার জন্য customer-কে product-এর recommended dosage, frequency এবং usage instructions যথাযথভাবে অনুসরণ করতে হবে।</p>
            <div class="term-highlight">
              <span>📖</span> প্রতিটি পণ্যের সাথে usage instruction দেওয়া থাকে
            </div>
          </div>
        </div>

        <!-- Term 6 -->
        <div class="term-item" id="term-6">
          <div class="term-header">
            <div class="term-number">৬</div>
            <h2 class="term-title">Consistency</h2>
          </div>
          <div class="term-body">
            <p>Product নিয়মিত ও নির্দেশনা অনুযায়ী ব্যবহার না করলে expected result নাও পাওয়া যেতে পারে। দীর্ঘমেয়াদি ও consistent usage result-এর জন্য গুরুত্বপূর্ণ।</p>
            <div class="term-highlight">
              <span>🔄</span> প্রতিদিন নিয়মিত ব্যবহার করাই সেরা ফলাফল দেয়
            </div>
          </div>
        </div>

        <!-- Term 7 -->
        <div class="term-item" id="term-7">
          <div class="term-header">
            <div class="term-number">৭</div>
            <h2 class="term-title">Product Storage</h2>
          </div>
          <div class="term-body">
            <p>Product-কে নির্দেশিত পরিবেশে সংরক্ষণ করতে হবে। অতিরিক্ত heat, sunlight, moisture বা improper storage-এর কারণে product-এর quality পরিবর্তিত হলে তার জন্য Salon Beauty দায়ী থাকবে না।</p>
            <div class="storage-rules">
              <div class="storage-rule bad"><span>❌</span> অতিরিক্ত heat</div>
              <div class="storage-rule bad"><span>❌</span> Direct sunlight</div>
              <div class="storage-rule bad"><span>❌</span> অতিরিক্ত moisture</div>
              <div class="storage-rule good"><span>✓</span> ঠান্ডা ও শুকনো জায়গায় রাখুন</div>
            </div>
          </div>
        </div>

        <!-- Term 8 -->
        <div class="term-item" id="term-8">
          <div class="term-header">
            <div class="term-number">৮</div>
            <h2 class="term-title">Guarantee Eligibility</h2>
          </div>
          <div class="term-body">
            <p>Guarantee claim করার ক্ষেত্রে customer-এর valid order information, purchase proof এবং প্রয়োজনীয় supporting information প্রদান করতে হতে পারে।</p>
            <div class="eligibility-list">
              <div class="el-item"><span>✓</span> Valid Order ID</div>
              <div class="el-item"><span>✓</span> Purchase Proof</div>
              <div class="el-item"><span>✓</span> Supporting Information</div>
              <div class="el-item"><span>✓</span> ২১–৪১ দিন ব্যবহারের প্রমাণ</div>
            </div>
          </div>
        </div>

        <!-- Footer Note -->
        <div class="terms-footer-note" id="terms-footer-note">
          <p>এই Terms & Conditions পরিবর্তন করার অধিকার Bodyguard Shop সংরক্ষণ করে। যেকোনো পরিবর্তন এই পেজে আপডেট করা হবে।</p>
          <a href="<?php echo esc_url( sob_shop_url() ); ?>" class="btn-primary" id="terms-shop-btn" style="margin-top: 24px; display: inline-flex;">
            Shop Now →
          </a>
        </div>

      </div><!-- end terms-content -->
    </div><!-- end terms-layout -->
  </div>
</section>

</main>

<style>
/* ===== TERMS PAGE ===== */
.terms-hero {
  background: linear-gradient(135deg, rgba(201,169,110,0.06), transparent),
              var(--dark-surface);
  padding: 80px 0 60px;
  text-align: center;
  border-bottom: 1px solid var(--dark-border);
}

.terms-hero-title {
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  background: linear-gradient(135deg, var(--gold-light), var(--gold));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin: 12px 0;
}

.terms-hero-sub {
  color: var(--text-secondary);
  font-size: 1.1rem;
  margin-bottom: 16px;
}

.terms-meta {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  color: var(--text-muted);
  font-size: 0.88rem;
}

/* Layout */
.terms-section { padding: 60px 0 100px; }

.terms-layout {
  display: grid;
  grid-template-columns: 260px 1fr;
  gap: 48px;
  align-items: start;
}

/* Sidebar */
.terms-sidebar { position: sticky; top: 90px; }

.terms-index {
  background: var(--dark-card);
  border: 1px solid var(--dark-border);
  border-radius: var(--radius-lg);
  overflow: hidden;
}

.index-title {
  font-size: 0.88rem;
  color: var(--gold);
  padding: 20px 20px 12px;
  border-bottom: 1px solid var(--dark-border);
  letter-spacing: 1px;
  text-transform: uppercase;
}

.index-nav {
  padding: 12px 12px;
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.index-link {
  display: block;
  padding: 9px 12px;
  font-size: 0.83rem;
  color: var(--text-muted);
  border-radius: 8px;
  transition: var(--transition);
  border-left: 2px solid transparent;
}

.index-link:hover, .index-link.active {
  color: var(--gold);
  background: rgba(201,169,110,0.08);
  border-left-color: var(--gold);
}

.terms-contact-box {
  padding: 20px;
  border-top: 1px solid var(--dark-border);
  text-align: center;
}

.terms-contact-box p {
  color: var(--text-muted);
  font-size: 0.85rem;
  margin-bottom: 12px;
}

.terms-contact-btn {
  display: inline-block;
  padding: 10px 20px;
  background: linear-gradient(135deg, var(--gold), var(--gold-dark));
  color: var(--dark-bg);
  font-weight: 700;
  font-size: 0.85rem;
  border-radius: 50px;
  transition: var(--transition);
}

.terms-contact-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(201,169,110,0.35);
}

/* Terms Items */
.terms-content { display: flex; flex-direction: column; gap: 0; }

.terms-intro {
  display: flex;
  align-items: flex-start;
  gap: 16px;
  background: linear-gradient(135deg, rgba(201,169,110,0.08), rgba(201,169,110,0.02));
  border: 1px solid rgba(201,169,110,0.2);
  border-radius: var(--radius-lg);
  padding: 24px;
  margin-bottom: 32px;
}

.intro-icon { font-size: 2rem; flex-shrink: 0; }
.terms-intro p { color: var(--text-secondary); line-height: 1.7; }

.term-item {
  padding: 36px 0;
  border-bottom: 1px solid var(--dark-border);
  scroll-margin-top: 100px;
  transition: var(--transition);
}

.term-item:last-child { border-bottom: none; }

.term-item:hover { padding-left: 8px; }

.term-header {
  display: flex;
  align-items: center;
  gap: 16px;
  margin-bottom: 20px;
}

.term-number {
  width: 44px;
  height: 44px;
  background: linear-gradient(135deg, var(--gold), var(--gold-dark));
  color: var(--dark-bg);
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 700;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.term-title {
  font-family: var(--font-heading);
  font-size: 1.4rem;
  color: var(--text-primary);
}

.term-body p {
  color: var(--text-secondary);
  line-height: 1.8;
  margin-bottom: 16px;
}

/* Highlight Box */
.term-highlight {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 14px 18px;
  background: rgba(201,169,110,0.06);
  border: 1px solid rgba(201,169,110,0.15);
  border-left: 3px solid var(--gold);
  border-radius: 0 var(--radius) var(--radius) 0;
  color: var(--text-secondary);
  font-size: 0.92rem;
}

.term-highlight.featured {
  background: rgba(201,169,110,0.1);
  border-left-color: var(--gold);
  color: var(--gold);
  font-weight: 600;
}

.term-highlight span { font-size: 1.2rem; flex-shrink: 0; }

/* Factor Tags */
.term-factors-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 16px;
}

.factor-tag {
  padding: 8px 16px;
  background: var(--dark-surface);
  border: 1px solid var(--dark-border);
  border-radius: 50px;
  font-size: 0.85rem;
  color: var(--text-secondary);
  transition: var(--transition);
}

.factor-tag:hover {
  border-color: var(--gold);
  color: var(--gold);
}

/* Timeline */
.timeline-bar {
  display: flex;
  align-items: center;
  gap: 0;
  margin-top: 24px;
  padding: 20px;
  background: var(--dark-surface);
  border-radius: var(--radius);
  border: 1px solid var(--dark-border);
}

.tl-item { text-align: center; flex-shrink: 0; }

.tl-dot {
  width: 14px;
  height: 14px;
  background: var(--gold);
  border-radius: 50%;
  margin: 0 auto 8px;
  box-shadow: 0 0 10px rgba(201,169,110,0.4);
}

.tl-item span {
  display: block;
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--gold);
  margin-bottom: 4px;
}

.tl-item p {
  font-size: 0.78rem;
  color: var(--text-muted);
  margin: 0 !important;
}

.tl-line {
  flex: 1;
  height: 2px;
  background: linear-gradient(90deg, var(--gold-dark), var(--gold));
  margin-bottom: 16px;
  opacity: 0.4;
}

/* Storage Rules */
.storage-rules {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px;
  margin-top: 16px;
}

.storage-rule {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 10px 14px;
  border-radius: var(--radius);
  font-size: 0.88rem;
}

.storage-rule.bad {
  background: rgba(255,80,80,0.06);
  border: 1px solid rgba(255,80,80,0.15);
  color: #ff8080;
}

.storage-rule.good {
  background: rgba(80,200,120,0.06);
  border: 1px solid rgba(80,200,120,0.15);
  color: #6dcc8a;
  grid-column: span 2;
}

/* Eligibility List */
.eligibility-list {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px;
  margin-top: 16px;
}

.el-item {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 12px 16px;
  background: var(--dark-surface);
  border: 1px solid var(--dark-border);
  border-radius: var(--radius);
  font-size: 0.88rem;
  color: var(--text-secondary);
}

.el-item span { color: var(--gold); font-weight: 700; }

/* Footer Note */
.terms-footer-note {
  margin-top: 48px;
  padding: 32px;
  background: linear-gradient(135deg, rgba(201,169,110,0.08), rgba(201,169,110,0.02));
  border: 1px solid rgba(201,169,110,0.2);
  border-radius: var(--radius-lg);
  text-align: center;
}

.terms-footer-note p {
  color: var(--text-secondary);
  font-size: 0.95rem;
  line-height: 1.7;
}

/* Responsive */
@media (max-width: 900px) {
  .terms-layout { grid-template-columns: 1fr; }
  .terms-sidebar { position: static; }
  .terms-index { display: flex; flex-wrap: wrap; gap: 12px; align-items: start; }
  .index-nav { flex-direction: row; flex-wrap: wrap; padding: 12px; }
  .index-link { white-space: nowrap; }
}

@media (max-width: 600px) {
  .storage-rules { grid-template-columns: 1fr; }
  .storage-rule.good { grid-column: span 1; }
  .eligibility-list { grid-template-columns: 1fr; }
  .timeline-bar { flex-direction: column; gap: 12px; }
  .tl-line { width: 2px; height: 30px; margin: 0 0 0 16px; background: linear-gradient(180deg, var(--gold-dark), var(--gold)); }
}
</style>

<script>
// Sidebar index active link on scroll
const termItems = document.querySelectorAll('.term-item[id]');
const indexLinks = document.querySelectorAll('.index-link');

const termObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      indexLinks.forEach(l => l.classList.remove('active'));
      const active = document.querySelector(`.index-link[href="#${entry.target.id}"]`);
      if (active) active.classList.add('active');
    }
  });
}, { threshold: 0.4, rootMargin: '-80px 0px -60% 0px' });

termItems.forEach(item => termObserver.observe(item));
</script>

<?php get_footer(); ?>
