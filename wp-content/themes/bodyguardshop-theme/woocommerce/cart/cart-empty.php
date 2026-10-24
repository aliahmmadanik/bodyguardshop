<?php
/**
 * Empty cart page template
 *
 * @package SaleOnBeauty
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
do_action( 'woocommerce_cart_is_empty' );

if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
    <div class="sob-cart-empty-box" style="text-align:center; padding: 60px 20px; background: var(--dark-card, #141414); border-radius: 16px; border: 1px solid rgba(201,169,110,0.2); max-width: 600px; margin: 40px auto;">
        <div style="font-size: 3.5rem; margin-bottom: 16px;">🛍️</div>
        <h2 style="color: var(--gold, #C9A96E); font-family: var(--font-heading); font-size: 1.8rem; margin-bottom: 12px;">আপনার কার্ট বর্তমানে খালি!</h2>
        <p style="color: var(--text-muted, #888); font-size: 1rem; margin-bottom: 28px;">আমাদের সেরা বিউটি প্রোডাক্টগুলো দেখতে শপ ব্রাউজ করুন।</p>
        <a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" style="display:inline-block; padding: 14px 36px; background: linear-gradient(135deg, var(--gold, #C9A96E), var(--gold-dark, #A07840)); color: #0A0A0A; font-weight: 700; border-radius: 50px; text-decoration: none; box-shadow: 0 8px 24px rgba(201,169,110,0.3);">
            <?php esc_html_e( 'Return to shop', 'woocommerce' ); ?> →
        </a>
    </div>
<?php endif; ?>
