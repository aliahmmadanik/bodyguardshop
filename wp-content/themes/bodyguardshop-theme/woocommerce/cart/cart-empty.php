<?php
/**
 * Empty cart page template
 *
 * @package BodyguardShop
 */

defined( 'ABSPATH' ) || exit;

if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
    <div class="bodyguard-cart-empty-box" style="text-align: center; padding: 60px 28px; background: #14141C; border-radius: 20px; border: 1px solid rgba(201,169,110,0.28); max-width: 660px; margin: 30px auto 50px; box-shadow: 0 20px 50px rgba(0,0,0,0.55);">
        <!-- Luxury Gold Cart Shield Icon -->
        <div style="width: 84px; height: 84px; margin: 0 auto 24px; background: rgba(201,169,110,0.12); border: 2px solid rgba(201,169,110,0.35); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 30px rgba(201,169,110,0.18);">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#C9A96E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg>
        </div>

        <h2 style="color: #FFFFFF; font-family: 'Hind Siliguri', 'Outfit', sans-serif; font-size: clamp(1.5rem, 2.8vw, 2rem); font-weight: 800; margin-bottom: 12px; line-height: 1.3;">
            আপনার শপিং কার্ট বর্তমানে খালি আছে!
        </h2>
        <p style="color: #B8B8C8; font-size: 15.5px; margin-bottom: 32px; line-height: 1.65; max-width: 500px; margin-left: auto; margin-right: auto;">
            আপনার ব্যক্তিগত ও পারিবারিক নিরাপত্তার জন্য ১০০% অথেন্টিক সেলফ-ডিফেন্স ও সিকিউরিটি গ্যাজেট দেখতে এখনই আমাদের শপ ভিজিট করুন।
        </p>

        <a class="button wc-backward bodyguard-btn-gold" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" style="display: inline-flex; align-items: center; justify-content: center; gap: 10px; padding: 16px 38px; background: linear-gradient(135deg, #C9A96E 0%, #E5C384 50%, #A07840 100%); color: #0A0A0E !important; font-weight: 800; font-size: 15.5px; border-radius: 50px; text-decoration: none; box-shadow: 0 8px 24px rgba(201,169,110,0.35); text-transform: uppercase; letter-spacing: 0.5px; transition: all 0.3s ease;">
            <span>শপ ভিজিট করুন (Browse Shop)</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0A0A0E" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>

        <!-- Trust Badges Under Button -->
        <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 20px; margin-top: 36px; padding-top: 24px; border-top: 1px solid rgba(255,255,255,0.08);">
            <div style="display: flex; align-items: center; gap: 7px; font-size: 13px; color: #C9A96E; font-weight: 600;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                <span>ফ্রি হোম ডেলিভারি</span>
            </div>
            <div style="display: flex; align-items: center; gap: 7px; font-size: 13px; color: #C9A96E; font-weight: 600;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                <span>১০০% আসল ও টেস্টেড</span>
            </div>
            <div style="display: flex; align-items: center; gap: 7px; font-size: 13px; color: #C9A96E; font-weight: 600;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                <span>ক্যাশ অন ডেলিভারি</span>
            </div>
        </div>
    </div>
<?php endif; ?>
