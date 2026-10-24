<?php
/**
 * content-product.php
 * WooCommerce product card — Glowria / Woodmart style
 * Theme: SaleOnBeauty
 */
global $product;
if ( ! $product || ! is_a( $product, 'WC_Product' ) ) {
    $product = wc_get_product( get_the_ID() );
}
if ( ! $product ) return;

$pid        = $product->get_id();
$permalink  = get_permalink( $pid );
$title      = get_the_title();
$price_num  = floatval( $product->get_price() );
$reg_num    = floatval( $product->get_regular_price() );
$is_on_sale = $product->is_on_sale();
$in_stock   = $product->is_in_stock();
$discount   = ( $is_on_sale && $reg_num > 0 )
              ? round( ( ( $reg_num - $price_num ) / $reg_num ) * 100 )
              : 0;

// Direct-to-checkout URL
$checkout_url = function_exists('wc_get_checkout_url')
    ? add_query_arg( 'add-to-cart', $pid, wc_get_checkout_url() )
    : home_url( '/checkout/?add-to-cart=' . $pid );
?>

<div class="wd-product product-grid-item wd-with-labels wd-hover-quick<?php echo !$in_stock ? ' outofstock' : ''; ?>" data-id="<?php echo $pid; ?>">
<div class="product-wrapper">

  <!-- ===== TOP: Image Area ===== -->
  <div class="product-element-top wd-quick-shop">

    <!-- Image link -->
    <a href="<?php echo esc_url( $permalink ); ?>" class="product-image-link">

      <!-- Sale / Hot Labels -->
      <?php if ( $is_on_sale || ! $in_stock ) : ?>
        <div class="product-labels labels-rounded">
          <?php if ( $is_on_sale && $discount > 0 ) : ?>
            <span class="onsale product-label">-<?php echo $discount; ?>%</span>
          <?php elseif ( $is_on_sale ) : ?>
            <span class="onsale product-label">Sale</span>
          <?php endif; ?>
          <?php if ( $product->is_featured() ) : ?>
            <span class="featured product-label">Hot</span>
          <?php endif; ?>
          <?php if ( ! $in_stock ) : ?>
            <span class="outofstock product-label">Stock Out</span>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <!-- Product Image -->
      <?php if ( has_post_thumbnail( $pid ) ) : ?>
        <?php echo get_the_post_thumbnail( $pid, 'woocommerce_thumbnail', [ 'class' => 'attachment-full size-full' ] ); ?>
      <?php else : ?>
        <div class="wd-no-img">
          <?php echo wc_placeholder_img( 'woocommerce_thumbnail' ); ?>
        </div>
      <?php endif; ?>

    </a>

    <!-- Hover Action Buttons (top-right) -->
    <div class="wd-buttons wd-pos-r-t">
      <!-- Quick View -->
      <div class="quick-view wd-action-btn wd-style-icon wd-quick-view-icon">
        <a href="<?php echo esc_url( $permalink ); ?>" class="quick-view-button" rel="nofollow">
          <span>Quick view</span>
        </a>
      </div>
      <!-- Wishlist -->
      <div class="wd-wishlist-btn wd-action-btn wd-style-icon wd-wishlist-icon">
        <a href="<?php echo home_url('/wishlist/'); ?>" rel="nofollow">
          <span>Add to wishlist</span>
        </a>
      </div>
    </div>

    <!-- Add to Cart replace-button (shown on image hover at bottom) -->
    <div class="wd-add-btn wd-add-btn-replace">
      <?php if ( $in_stock ) : ?>
        <a href="<?php echo esc_url( $checkout_url ); ?>"
           class="button wd-btn-add-to-cart add-to-cart-loop"
           data-product_id="<?php echo $pid; ?>"
           rel="nofollow">
          <span>Order Now</span>
        </a>
      <?php else : ?>
        <a href="<?php echo esc_url( $permalink ); ?>" class="button wd-btn-add-to-cart disabled">
          <span>বিস্তারিত</span>
        </a>
      <?php endif; ?>
    </div>

  </div><!-- /.product-element-top -->

  <!-- ===== BOTTOM: Title + Price ===== -->
  <h3 class="wd-entities-title">
    <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
  </h3>

  <span class="price">
    <?php if ( $is_on_sale && $reg_num > 0 ) : ?>
      <del aria-hidden="true">
        <span class="woocommerce-Price-amount amount">
          <bdi><span class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span><?php echo number_format( $reg_num, 2 ); ?></bdi>
        </span>
      </del>
      <ins aria-hidden="true">
        <span class="woocommerce-Price-amount amount">
          <bdi><span class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span><?php echo number_format( $price_num, 2 ); ?></bdi>
        </span>
      </ins>
    <?php else : ?>
      <span class="woocommerce-Price-amount amount">
        <bdi><span class="woocommerce-Price-currencySymbol">&#2547;&nbsp;</span><?php echo number_format( $price_num, 2 ); ?></bdi>
      </span>
    <?php endif; ?>
  </span>

</div><!-- /.product-wrapper -->
</div><!-- /.wd-product -->
