<?php
/**
 * WooCommerce Shop Page (archive-product.php)
 */
get_header();
?>

<main id="main-content" style="padding-top: 24px; background: #ffffff; min-height: 80vh;">

<!-- Shop Hero Banner -->
<div class="shop-hero" id="shop-hero">
  <div class="container">
    <h1 class="shop-hero-title">Our Products</h1>
    <div class="shop-hero-sub">
      <span class="sub-line" style="font-size: 1.05rem; font-weight: 600; color: var(--sob-primary, #a11ff1);">100% Authentic / সারা বাংলাদেশে ১–৩ দিনে হোম ডেলিভারি</span>
    </div>
  </div>
</div>

<!-- Shop Content -->
<section class="shop-section" id="shop-section">
  <div class="container">
    <div class="shop-layout">

      <!-- Products -->
      <div class="shop-main" id="shop-main">
        
        <?php
        // Fetch 4 Best Selling Products
        $best_seller_slugs = [
          'beauty-milk',
          'pure-beauty-collagen',
          'madagascar-centella-light',
          'white-aura',
        ];
        $best_seller_ids = [];
        global $wpdb;
        foreach ($best_seller_slugs as $slug_part) {
          // Use LIKE to find the product ID even if the slug has been appended with extra words on live
          $product_id = $wpdb->get_var($wpdb->prepare("SELECT ID FROM {$wpdb->posts} WHERE post_type = 'product' AND post_status = 'publish' AND post_name LIKE %s LIMIT 1", '%' . $wpdb->esc_like($slug_part) . '%'));
          if ($product_id) {
            $best_seller_ids[] = $product_id;
          }
        }
        ?>
        
        <?php if (woocommerce_product_loop()) : ?>
          <div class="products-grid" id="shop-products-grid">
            <?php
            // Output Best Sellers FIRST inside the SAME grid
            if (!is_paged() && !empty($best_seller_ids)) {
               $bs_query = new WP_Query([
                  'post_type' => 'product',
                  'post__in' => $best_seller_ids,
                  'orderby' => 'post__in',
                  'posts_per_page' => 4
               ]);
               while ($bs_query->have_posts()) {
                  $bs_query->the_post();
                  include(get_template_directory() . '/woocommerce/content-product.php');
               }
               wp_reset_postdata();
            }

            // Then output the rest of the main loop
            while (have_posts()) :
              the_post();
              // Skip best sellers in the main loop so they aren't duplicated
              if (in_array(get_the_ID(), $best_seller_ids)) continue;
              
              // Directly include our custom card — bypasses WC's ul/li wrapper
              include(get_template_directory() . '/woocommerce/content-product.php');
            endwhile;
            ?>
          </div>
          <?php woocommerce_pagination(); ?>
        <?php else : ?>
          <div class="no-products" id="no-products">
            <span>🔍</span>
            <h3>কোনো পণ্য পাওয়া যায়নি</h3>
            <p>অন্য category বা search term চেষ্টা করুন।</p>
            <a href="<?php echo get_permalink(wc_get_page_id('shop')); ?>" class="btn-primary">All Products →</a>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

</main>

<style>
.shop-hero {
  background: linear-gradient(120deg, var(--sob-light, #f7f5fb) 0%, #fbeaf7 100%);
  padding: 50px 0 36px;
  border-bottom: 1px solid var(--sob-border, #ececf3);
  text-align: center;
}

.shop-hero-title {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  color: var(--sob-dark, #1c1c26);
  font-weight: 800;
  margin-bottom: 8px;
}

.shop-hero-sub { color: var(--sob-gray, #6b6b76); }

.shop-section { padding: 50px 0 80px; background: #ffffff; }

.shop-layout {
  display: block;
}

.shop-toolbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 24px;
  padding: 14px 18px;
  background: var(--sob-light, #f7f5fb);
  border: 1px solid var(--sob-border, #ececf3);
  border-radius: var(--sob-radius, 12px);
}

.woocommerce-result-count {
  color: var(--sob-gray, #6b6b76);
  font-size: 0.9rem;
  margin: 0;
}

.woocommerce-ordering select {
  background: #ffffff;
  border: 1.5px solid var(--sob-border, #ececf3);
  color: var(--sob-dark, #1c1c26);
  padding: 8px 14px;
  border-radius: 20px;
  font-family: var(--font-body);
  font-size: 13.5px;
  outline: none;
  cursor: pointer;
  transition: var(--transition);
}

.woocommerce-ordering select:focus {
  border-color: var(--sob-primary, #a11ff1);
}

.products-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 22px;
}

@media (max-width: 1024px) {
  .products-grid { grid-template-columns: repeat(3, 1fr); gap: 16px; }
}

@media (max-width: 768px) {
  .products-grid { grid-template-columns: repeat(2, 1fr); gap: 12px; }
  .shop-toolbar { flex-direction: column; gap: 10px; align-items: stretch; text-align: center; }
}

.no-products {
  text-align: center;
  padding: 80px 20px;
  color: var(--sob-gray, #6b6b76);
}

.no-products span { font-size: 4rem; display: block; margin-bottom: 20px; }
.no-products h3 { margin-bottom: 12px; color: var(--sob-dark, #1c1c26); font-weight: 700; }
.no-products p { margin-bottom: 24px; }

/* WooCommerce Pagination */
.woocommerce-pagination {
  margin-top: 48px;
  display: flex;
  justify-content: center;
}

.woocommerce-pagination ul.page-numbers {
  display: flex;
  gap: 8px;
  list-style: none;
  padding: 0;
}

.woocommerce-pagination ul.page-numbers li a,
.woocommerce-pagination ul.page-numbers li span {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  border: 1.5px solid var(--sob-border, #ececf3);
  color: var(--sob-dark, #1c1c26);
  font-weight: 600;
  font-size: 14px;
  text-decoration: none;
  transition: var(--transition);
}

.woocommerce-pagination ul.page-numbers li span.current,
.woocommerce-pagination ul.page-numbers li a:hover {
  background: var(--sob-primary, #a11ff1);
  color: #ffffff;
  border-color: var(--sob-primary, #a11ff1);
}

.no-products span { font-size: 4rem; display: block; margin-bottom: 20px; }
.no-products h3 { margin-bottom: 12px; color: var(--text-primary); }
.no-products p { margin-bottom: 24px; }

/* WooCommerce Pagination */
.woocommerce-pagination {
  margin-top: 48px;
  display: flex;
  justify-content: center;
}

.woocommerce-pagination ul {
  display: flex;
  gap: 8px;
  flex-wrap: wrap;
  justify-content: center;
}

.woocommerce-pagination ul li a,
.woocommerce-pagination ul li span {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  background: var(--dark-card);
  border: 1px solid var(--dark-border);
  border-radius: 8px;
  color: var(--text-secondary);
  font-size: 0.9rem;
  transition: var(--transition);
}

.woocommerce-pagination ul li a:hover,
.woocommerce-pagination ul li span.current {
  background: var(--gold);
  color: var(--dark-bg);
  border-color: var(--gold);
}

/* Products Grid */
.products-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
  gap: 24px;
}

/* Product Card */
.product-card {
  background: var(--dark-card);
  border: 1px solid var(--dark-border);
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.product-card:hover {
  transform: translateY(-6px);
  border-color: rgba(201,169,110,0.35);
  box-shadow: 0 20px 50px rgba(0,0,0,0.5), 0 0 30px rgba(201,169,110,0.08);
}

/* Card Image */
.card-img {
  position: relative;
  display: block;
  overflow: hidden;
  width: 100%;
  aspect-ratio: 3 / 2;
  background: var(--dark-surface);
  flex-shrink: 0;
  padding-top: 16px;
}

.card-thumb {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
  display: block;
}

.product-card:hover .card-thumb { transform: scale(1.05); }

.card-no-img {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 4rem;
  background: linear-gradient(135deg, #111, #0d0d0d);
}

.card-img-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.4) 0%, transparent 50%);
  pointer-events: none;
}

.card-badge-sale {
  position: absolute; top: 10px; left: 10px; z-index: 2;
  background: #e74c3c; color: #fff;
  font-size: 0.72rem; font-weight: 700;
  padding: 3px 10px; border-radius: 50px;
}

.card-badge-oos {
  position: absolute; top: 10px; right: 10px; z-index: 2;
  background: rgba(0,0,0,0.7); color: var(--text-muted);
  font-size: 0.72rem; font-weight: 600;
  padding: 3px 10px; border-radius: 50px;
}

/* Card Body */
.card-body {
  padding: 16px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.card-stars {
  display: flex;
  align-items: center;
  gap: 1px;
  margin-bottom: 8px;
}

.star { font-size: 0.82rem; color: var(--dark-border); }
.star.filled { color: var(--gold); }
.card-rating-count { font-size: 0.72rem; color: var(--text-muted); margin-left: 4px; }

.card-title {
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--text-primary);
  line-height: 1.4;
  margin-bottom: 10px;
}

.card-title a { color: inherit; }
.card-title a:hover { color: var(--gold); }

.card-price {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 14px;
}

.card-old-price {
  color: var(--text-muted);
  font-size: 0.85rem;
}

.card-new-price {
  color: var(--gold);
  font-size: 1.15rem;
  font-weight: 700;
  font-family: var(--font-heading);
}

.card-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  width: 100%;
  padding: 10px;
  background: linear-gradient(135deg, var(--gold), var(--gold-dark));
  color: var(--dark-bg);
  font-weight: 700;
  font-size: 0.88rem;
  border-radius: var(--radius);
  text-decoration: none;
  transition: opacity 0.2s, box-shadow 0.3s;
  margin-top: auto;
  font-family: var(--font-body);
}

.card-btn:hover {
  opacity: 0.9;
  box-shadow: 0 6px 20px rgba(201,169,110,0.35);
  color: var(--dark-bg);
}

/* WooCommerce resets */
.woocommerce ul.products { margin: 0; padding: 0; list-style: none; }

@media (max-width: 900px) {
  .shop-layout { grid-template-columns: 1fr; }
  .shop-sidebar { position: static; }
}

/* ===== MOBILE PRODUCT CARDS ===== */
@media (max-width: 640px) {

  /* 2 column product grid */
  .products-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 12px !important;
  }

  /* Card overall */
  .product-card {
    border-radius: 14px;
  }

  /* Square image on mobile — looks better in 2 col */
  .card-img {
    aspect-ratio: 1 / 1;
    padding-top: 0;
  }

  /* Card body tighter padding */
  .card-body {
    padding: 10px 10px 12px;
  }

  /* Stars smaller */
  .card-stars { margin-bottom: 5px; }
  .star { font-size: 0.72rem; }

  /* Title 2 lines max */
  .card-title {
    font-size: 0.82rem;
    line-height: 1.35;
    margin-bottom: 7px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  /* Price */
  .card-price { gap: 5px; margin-bottom: 10px; }
  .card-old-price { font-size: 0.75rem; }
  .card-new-price { font-size: 1rem; }

  /* Button full width, bigger tap */
  .card-btn {
    width: 100%;
    justify-content: center;
    padding: 10px 8px;
    font-size: 0.82rem;
    border-radius: 10px;
  }

  /* Sale badge smaller */
  .card-badge-sale { font-size: 0.65rem; padding: 2px 8px; top: 7px; left: 7px; }
}

@media (max-width: 380px) {
  .products-grid { gap: 8px !important; }
  .card-body { padding: 8px; }
  .card-title { font-size: 0.76rem; }
  .card-new-price { font-size: 0.9rem; }
  .card-btn { padding: 9px 6px; font-size: 0.75rem; }
}

</style>

<?php get_footer(); ?>
