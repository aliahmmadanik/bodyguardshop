<?php
/**
 * Shop / All Products Page Template (archive-product.php & page-shop.php)
 * Bodyguard Shop — 100% Dark Luxury Self-Defense Store
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main class="bgs-shop-page-main" id="bgs-shop-page">

  <!-- All Products Grid Section -->
  <section class="bgs-shop-catalog-section">
    <div class="container">
      <div class="bgs-shop-products-grid">
        <?php
        $cat_filter = isset($_GET['cat']) ? sanitize_text_field($_GET['cat']) : '';
        if ( empty($cat_filter) && function_exists('is_product_category') && is_product_category() ) {
            $q_obj = get_queried_object();
            if ( $q_obj && ! empty($q_obj->slug) ) {
                $cat_filter = $q_obj->slug;
            }
        }
        $q_args = [
            'post_type'      => 'product',
            'post_status'    => 'publish',
            'posts_per_page' => 24,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ];
        if ( ! empty($cat_filter) ) {
            $q_args['tax_query'] = [
                [
                    'taxonomy' => 'product_cat',
                    'field'    => 'slug',
                    'terms'    => [ $cat_filter ],
                ],
            ];
        }
        $shop_query = new WP_Query($q_args);

        $shown_count = 0;
        if ( $shop_query->have_posts() ) :
            while ( $shop_query->have_posts() ) : $shop_query->the_post();
                $p_id      = get_the_ID();
                $product   = function_exists('wc_get_product') ? wc_get_product($p_id) : null;
                $slug      = $product ? $product->get_slug() : get_post_field('post_name', $p_id);

                // Exclude Stun Gun / Shock Gun (Item 17)
                if ( strpos($slug, 'stun') !== false || strpos($slug, 'shut') !== false ) {
                    continue;
                }

                $price     = $product ? (float)$product->get_price() : 0;
                $reg_price = $product && (float)$product->get_regular_price() > 0 ? (float)$product->get_regular_price() : $price;
                $perm      = get_permalink($p_id);
                $thumb_url = function_exists('bgs_get_product_card_image_url') ? bgs_get_product_card_image_url($p_id, $slug) : get_the_post_thumbnail_url($p_id, 'medium_large');

                // Bundled theme image fallbacks
                if ( ! $thumb_url ) {
                    if ( strpos($slug, 'cut-proof') !== false || strpos($slug, 't-shirt') !== false ) {
                        $thumb_url = get_template_directory_uri() . '/assets/images/products/cut-proof-t-shirt.jpg';
                    } elseif ( strpos($slug, 'combo') !== false ) {
                        $thumb_url = get_template_directory_uri() . '/assets/images/products/bodygard-combo.jpg';
                    } elseif ( strpos($slug, 'pepper') !== false || strpos($slug, 'spray') !== false ) {
                        $thumb_url = get_template_directory_uri() . '/assets/images/products/pepper-spray.png';
                    } elseif ( strpos($slug, 'baseball') !== false || strpos($slug, 'bat') !== false ) {
                        $thumb_url = get_template_directory_uri() . '/assets/images/products/baseball-bat.jpg';
                    }
                }

                $save = max(0, $reg_price - $price);
                $pct  = $reg_price > 0 ? round(($save / $reg_price) * 100) : 0;

                // Product Ratings
                $rating_val = '4.9';
                $reviews_ct = '184';
                if ( strpos($slug, 'cut-proof') !== false || strpos($slug, 't-shirt') !== false ) {
                    $rating_val = '4.8';
                    $reviews_ct = '218';
                } elseif ( strpos($slug, 'combo') !== false ) {
                    $rating_val = '4.9';
                    $reviews_ct = '345';
                } elseif ( strpos($slug, 'pepper') !== false || strpos($slug, 'spray') !== false ) {
                    $rating_val = '5.0';
                    $reviews_ct = '412';
                } elseif ( strpos($slug, 'baseball') !== false || strpos($slug, 'bat') !== false ) {
                    $rating_val = '4.9';
                    $reviews_ct = '165';
                }

                $shown_count++;
        ?>
          <div class="bgs-shop-card">
            <?php if ($save > 0) : ?>
              <div class="bgs-shop-discount-badge">🔥 ৳<?php echo number_format($save); ?> ছাড় (<?php echo $pct; ?>% OFF)</div>
            <?php else : ?>
              <div class="bgs-shop-discount-badge">⚡ হট অফার</div>
            <?php endif; ?>

            <a href="<?php echo esc_url($perm); ?>" class="bgs-shop-card-img">
              <?php if ($thumb_url) : ?>
                <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
              <?php else : ?>
                <div class="bgs-shop-no-img">🛡️ Bodygard Shop</div>
              <?php endif; ?>
            </a>

            <div class="bgs-shop-card-body">
              <h2 class="bgs-shop-card-title">
                <a href="<?php echo esc_url($perm); ?>"><?php the_title(); ?></a>
              </h2>

              <div class="bgs-shop-card-rating">
                <span class="stars">★★★★★</span>
                <span class="rating-txt"><strong><?php echo esc_html($rating_val); ?></strong> (<?php echo esc_html($reviews_ct); ?>+ রিভিউ)</span>
              </div>

              <div class="bgs-shop-card-price">
                <span class="cur-price">৳<?php echo number_format($price, 0); ?></span>
                <?php if ($save > 0) : ?>
                  <del class="old-price">৳<?php echo number_format($reg_price, 0); ?></del>
                <?php endif; ?>
              </div>

              <div class="bgs-shop-delivery-tag">
                <span>🚚 ফ্রি হোম ডেলিভারি (ক্যাশ অন ডেলিভারি)</span>
              </div>

              <div class="bgs-shop-card-cta">
                <a href="<?php echo esc_url($perm); ?>" class="bgs-shop-order-btn">
                  অর্ডার করুন (Order Now) &rarr;
                </a>
              </div>
            </div>
          </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;

        // Built-in Fallback Products if DB has none yet
        if ( $shown_count === 0 ) :
            $fallback_prods = [
                [
                    'title' => 'Cut-Proof Vest',
                    'slug'  => 'cut-proof-t-shirt',
                    'price' => 8990,
                    'reg'   => 14500,
                    'rating'=> '4.8',
                    'rev'   => '218',
                    'img'   => get_template_directory_uri() . '/assets/images/products/cut-proof-t-shirt.jpg',
                ],
                [
                    'title' => 'Pepper Spray',
                    'slug'  => 'pepper-spray',
                    'price' => 1190,
                    'reg'   => 1630,
                    'rating'=> '5.0',
                    'rev'   => '412',
                    'img'   => get_template_directory_uri() . '/assets/images/pepper-spray/pepper-spray-60ml.jpg',
                ],
                [
                    'title' => 'BodyGard Combo',
                    'slug'  => 'bodygard-combo',
                    'price' => 2990,
                    'reg'   => 6953,
                    'rating'=> '4.9',
                    'rev'   => '345',
                    'img'   => get_template_directory_uri() . '/assets/images/combo/bodyguard-combo-7in1-kit.jpg',
                ],
                [
                    'title' => 'Baseball Bat',
                    'slug'  => 'baseball-bat',
                    'price' => 1990,
                    'reg'   => 3491,
                    'rating'=> '4.9',
                    'rev'   => '165',
                    'img'   => get_template_directory_uri() . '/assets/images/baseball-bat/baseball-bat-main.jpg',
                ],
            ];
            foreach ($fallback_prods as $fp) :
                $save  = $fp['reg'] - $fp['price'];
                $pct   = round(($save / $fp['reg']) * 100);
                $p_url = home_url('/product/' . $fp['slug'] . '/');
        ?>
          <div class="bgs-shop-card">
            <div class="bgs-shop-discount-badge">🔥 ৳<?php echo number_format($save); ?> ছাড় (<?php echo $pct; ?>% OFF)</div>

            <a href="<?php echo esc_url($p_url); ?>" class="bgs-shop-card-img">
              <img src="<?php echo esc_url($fp['img']); ?>" alt="<?php echo esc_attr($fp['title']); ?>" loading="lazy">
            </a>

            <div class="bgs-shop-card-body">
              <h2 class="bgs-shop-card-title">
                <a href="<?php echo esc_url($p_url); ?>"><?php echo esc_html($fp['title']); ?></a>
              </h2>

              <div class="bgs-shop-card-rating">
                <span class="stars">★★★★★</span>
                <span class="rating-txt"><strong><?php echo esc_html($fp['rating']); ?></strong> (<?php echo esc_html($fp['rev']); ?>+ রিভিউ)</span>
              </div>

              <div class="bgs-shop-card-price">
                <span class="cur-price">৳<?php echo number_format($fp['price'], 0); ?></span>
                <del class="old-price">৳<?php echo number_format($fp['reg'], 0); ?></del>
              </div>

              <div class="bgs-shop-delivery-tag">
                <span>🚚 ফ্রি হোম ডেলিভারি (ক্যাশ অন ডেলিভারি)</span>
              </div>

              <div class="bgs-shop-card-cta">
                <a href="<?php echo esc_url($p_url); ?>" class="bgs-shop-order-btn">
                  অর্ডার করুন (Order Now) &rarr;
                </a>
              </div>
            </div>
          </div>
        <?php
            endforeach;
        endif;
        ?>
      </div>
    </div>
  </section>

</main>

<style>
.bgs-shop-page-main {
  background: #0A0A0E !important;
  color: #FFFFFF !important;
  min-height: 85vh;
  padding-bottom: 80px;
}

.bgs-shop-hero {
  background: radial-gradient(ellipse at top, rgba(201, 169, 110, 0.14) 0%, #0A0A0E 70%);
  border-bottom: 1px solid rgba(201, 169, 110, 0.2);
  padding: 55px 20px 45px;
  text-align: center;
}

.bgs-shop-hero-inner {
  max-width: 860px;
  margin: 0 auto;
}

.bgs-shop-eyebrow {
  display: inline-block;
  background: rgba(201, 169, 110, 0.12);
  border: 1px solid rgba(201, 169, 110, 0.45);
  color: #C9A96E;
  font-size: 0.78rem;
  font-weight: 800;
  letter-spacing: 1.2px;
  padding: 5px 16px;
  border-radius: 50px;
  margin-bottom: 14px;
}

.bgs-shop-title {
  font-size: clamp(1.5rem, 3.5vw, 2.5rem);
  font-weight: 800;
  color: #FFFFFF !important;
  margin: 0 0 10px;
  line-height: 1.3;
}

.bgs-shop-subtitle {
  font-size: clamp(0.92rem, 2vw, 1.08rem);
  color: #D1D5DB;
  margin: 0 auto 18px;
  max-width: 660px;
}

.bgs-shop-divider {
  width: 65px;
  height: 3px;
  background: linear-gradient(90deg, transparent, #C9A96E, transparent);
  margin: 0 auto;
}

.bgs-shop-catalog-section {
  padding: 50px 20px 20px;
}

.bgs-shop-products-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 28px;
  max-width: 1180px;
  margin: 0 auto;
}

.bgs-shop-card {
  background: #14141C;
  border: 1px solid rgba(201, 169, 110, 0.25);
  border-radius: 16px;
  overflow: hidden;
  position: relative;
  display: flex;
  flex-direction: column;
  transition: transform 0.28s ease, box-shadow 0.28s ease, border-color 0.28s ease;
}

.bgs-shop-card:hover {
  transform: translateY(-5px);
  border-color: #C9A96E;
  box-shadow: 0 18px 45px rgba(0, 0, 0, 0.75), 0 0 25px rgba(201, 169, 110, 0.12);
}

.bgs-shop-discount-badge {
  position: absolute;
  top: 12px;
  left: 12px;
  z-index: 2;
  background: linear-gradient(135deg, #FF3838, #D32F2F);
  color: #FFFFFF;
  font-size: 0.78rem;
  font-weight: 800;
  padding: 5px 12px;
  border-radius: 6px;
  box-shadow: 0 4px 12px rgba(255, 56, 56, 0.45);
}

.bgs-shop-card-img {
  width: 100%;
  aspect-ratio: 16 / 10;
  background: #0D0D12;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.bgs-shop-card-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.35s ease;
}

.bgs-shop-card:hover .bgs-shop-card-img img {
  transform: scale(1.05);
}

.bgs-shop-card-body {
  padding: 22px;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

.bgs-shop-card-title {
  font-size: 1.15rem;
  font-weight: 700;
  line-height: 1.4;
  margin: 0 0 10px;
}

.bgs-shop-card-title a {
  color: #FFFFFF !important;
  text-decoration: none !important;
  transition: color 0.2s ease;
}

.bgs-shop-card-title a:hover {
  color: #C9A96E !important;
}

.bgs-shop-card-rating {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 14px;
}

.bgs-shop-card-rating .stars {
  color: #FFB800;
  font-size: 0.95rem;
}

.bgs-shop-card-rating .rating-txt {
  color: #9CA3AF;
  font-size: 0.82rem;
}

.bgs-shop-card-price {
  display: flex;
  align-items: baseline;
  gap: 10px;
  margin-bottom: 14px;
}

.bgs-shop-card-price .cur-price {
  font-size: 1.55rem;
  font-weight: 800;
  color: #C9A96E;
}

.bgs-shop-card-price .old-price {
  font-size: 1rem;
  color: #6B7280;
}

.bgs-shop-delivery-tag {
  font-size: 0.82rem;
  font-weight: 700;
  color: #10B981;
  background: rgba(16, 185, 129, 0.1);
  border: 1px solid rgba(16, 185, 129, 0.25);
  border-radius: 6px;
  padding: 5px 10px;
  margin-bottom: 18px;
  display: inline-flex;
  align-items: center;
}

.bgs-shop-card-cta {
  margin-top: auto;
}

.bgs-shop-order-btn {
  display: block;
  width: 100%;
  text-align: center;
  background: linear-gradient(135deg, #E5C88D 0%, #C9A96E 50%, #A68242 100%);
  color: #08080C !important;
  font-weight: 800;
  font-size: 1rem;
  padding: 13px 20px;
  border-radius: 8px;
  text-decoration: none !important;
  transition: all 0.25s ease;
  box-shadow: 0 6px 18px rgba(201, 169, 110, 0.28);
}

.bgs-shop-order-btn:hover {
  filter: brightness(1.06);
  transform: translateY(-2px);
  box-shadow: 0 10px 24px rgba(201, 169, 110, 0.45);
  color: #050508 !important;
}

@media (max-width: 650px) {
  .bgs-shop-hero {
    padding: 36px 14px 30px;
  }
  .bgs-shop-catalog-section {
    padding: 30px 12px 20px;
  }
  .bgs-shop-products-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
}
</style>

<?php get_footer(); ?>
