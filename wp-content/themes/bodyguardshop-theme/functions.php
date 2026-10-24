<?php
/**
 * SaleOnBeauty Theme Functions
 * Glowria (glowria.com.bd) Style Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Favicon / Site Icon
function saleonbeauty_favicon() {
    $favicon_url = get_template_directory_uri() . '/favicon.png';
    echo '<link rel="icon" type="image/png" href="' . esc_url($favicon_url) . '">' . "\n";
    echo '<link rel="shortcut icon" type="image/png" href="' . esc_url($favicon_url) . '">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url($favicon_url) . '">' . "\n";
}
add_action('wp_head', 'saleonbeauty_favicon', 2);

// ── Checkout Glowria light theme styling ──
function saleonbeauty_checkout_css() {
    if (!is_checkout() && !is_cart() && !is_product()) return;
    echo '<style id="sob-checkout-css">
    /* Glowria-style WooCommerce Checkout */
    .wc-block-components-text-input input,
    .wc-block-components-text-input input[type="text"],
    .wc-block-components-text-input input[type="email"],
    .wc-block-components-text-input input[type="tel"],
    .wc-block-components-text-input input[type="password"],
    .wc-block-components-combobox input,
    .wc-block-components-select select {
        background: #ffffff !important;
        border: 1px solid #ececf3 !important;
        border-radius: 8px !important;
        color: #1c1c26 !important;
        padding: 12px 14px !important;
        font-size: 14px !important;
    }
    .wc-block-components-text-input input:focus,
    .wc-block-components-combobox input:focus {
        border-color: #a11ff1 !important;
        box-shadow: 0 0 0 3px rgba(161,31,241,0.12) !important;
        outline: none !important;
    }
    .wc-block-components-checkout-place-order-button,
    #place_order {
        background: linear-gradient(135deg, #a11ff1, #7c17c2) !important;
        color: #ffffff !important;
        font-weight: 700 !important;
        border-radius: 30px !important;
        border: none !important;
        padding: 16px 28px !important;
        font-size: 1.05rem !important;
        box-shadow: 0 8px 24px rgba(161,31,241,0.3) !important;
        transition: all 0.3s ease !important;
    }
    .wc-block-components-checkout-place-order-button:hover,
    #place_order:hover {
        opacity: 0.95 !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 12px 30px rgba(161,31,241,0.45) !important;
    }
    </style>';
}
add_action('wp_head', 'saleonbeauty_checkout_css', 999);

// Theme Setup
function saleonbeauty_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

    register_nav_menus([
        'primary'       => __('Primary Menu', 'saleonbeauty'),
        'category-menu' => __('Category Dropdown Menu', 'saleonbeauty'),
        'footer-1'      => __('Footer - Important Links', 'saleonbeauty'),
        'footer-2'      => __('Footer - Quick Links', 'saleonbeauty'),
    ]);
}
add_action('after_setup_theme', 'saleonbeauty_setup');

// Enqueue Scripts & Styles
function saleonbeauty_scripts() {
    // Google Fonts: Poppins
    wp_enqueue_style('sob-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap',
        [], null);

    // Main Theme Stylesheet
    wp_enqueue_style('saleonbeauty-style', get_stylesheet_uri(), ['sob-google-fonts'], time());

    // Main JS
    wp_enqueue_script('saleonbeauty-main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], time(), true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    // Localize for AJAX
    wp_localize_script('saleonbeauty-main', 'saleonbeauty', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('saleonbeauty-nonce'),
    ]);
}
add_action('wp_enqueue_scripts', 'saleonbeauty_scripts');

/* ---------- Helper: Cart count & total for Header ---------- */
function sob_cart_count() {
    if ( function_exists( 'WC' ) && WC()->cart ) {
        return WC()->cart->get_cart_contents_count();
    }
    return 0;
}
function sob_cart_total() {
    if ( function_exists( 'WC' ) && WC()->cart ) {
        return WC()->cart->get_cart_total();
    }
    return wc_price( 0 );
}
function sob_shop_url() {
    return function_exists('wc_get_page_id') ? get_permalink( wc_get_page_id('shop') ) : home_url('/shop/');
}

/* ---------- Default Product Sort: menu_order (pinned products first) ---------- */
add_filter( 'woocommerce_default_catalog_orderby', function() { return 'menu_order'; } );
add_filter( 'woocommerce_get_catalog_ordering_args', function( $args ) {
    if ( isset( $args['orderby'] ) && $args['orderby'] === 'menu_order title' ) {
        $args['orderby'] = 'menu_order';
        $args['order']   = 'ASC';
    }
    return $args;
} );

/* ---------- Fallback Menu ---------- */
function sob_fallback_menu() {
    $shop_url = esc_url( function_exists('wc_get_page_id') ? get_permalink( wc_get_page_id( 'shop' ) ) : home_url('/shop/') );
    $cart_url = esc_url( function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart/') );

    echo '<ul class="wd-nav-main">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
    echo '<li><a href="' . $cart_url . '">Cart</a></li>';
    echo '<li><a href="' . $shop_url . '">Products</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/#reviews' ) ) . '">Reviews</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact-us/' ) ) . '">Contact Us</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/track-order/' ) ) . '">Track Order</a></li>';
    echo '</ul>';
}

/* ---------- AJAX Live Search (Glowria Style) ---------- */
add_action('wp_ajax_sob_live_search', 'sob_ajax_live_search');
add_action('wp_ajax_nopriv_sob_live_search', 'sob_ajax_live_search');
add_action('wp_ajax_sob_ajax_live_search', 'sob_ajax_live_search');
add_action('wp_ajax_nopriv_sob_ajax_live_search', 'sob_ajax_live_search');
function sob_ajax_live_search() {
    $term = isset($_GET['term']) ? sanitize_text_field($_GET['term']) : '';
    if (strlen($term) < 2) {
        wp_send_json_success([]);
    }

    $args = [
        'post_type'      => 'product',
        'post_status'    => 'publish',
        'posts_per_page' => 8,
        's'              => $term,
    ];
    $query = new WP_Query($args);
    $results = [];

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $product = wc_get_product(get_the_ID());
            if (!$product) continue;

            $thumb = has_post_thumbnail() 
                ? get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') 
                : wc_placeholder_img_src();

            $results[] = [
                'id'        => get_the_ID(),
                'title'     => get_the_title(),
                'permalink' => get_permalink(),
                'image'     => $thumb,
                'price'     => $product->get_price_html(),
            ];
        }
        wp_reset_postdata();
    }

    wp_send_json_success($results);
}

// WooCommerce product columns
add_filter('loop_shop_columns', function() { return 3; });
add_filter('loop_shop_per_page', function() { return 12; });

// Widget Area
function saleonbeauty_widgets_init() {
    register_sidebar([
        'name' => 'Shop Sidebar',
        'id' => 'shop-sidebar',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'saleonbeauty_widgets_init');

// Remove WooCommerce default styles
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Custom WooCommerce wrapper
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', function() {
    echo '<div class="woo-main-wrapper"><div class="container">';
}, 10);

add_action('woocommerce_after_main_content', function() {
    echo '</div></div>';
}, 10);

// Custom excerpt length
add_filter('excerpt_length', function() { return 20; });

// ===== HERO VIDEO SETTINGS (Admin Page) =====
function sob_add_video_settings_page() {
    add_theme_page(
        'Hero Video Settings',
        '🎬 Hero Video',
        'manage_options',
        'sob-video-settings',
        'sob_video_settings_page'
    );
}
add_action('admin_menu', 'sob_add_video_settings_page');

function sob_video_settings_page() {
    if (isset($_POST['sob_save_video'])) {
        $video_url = sanitize_url($_POST['sob_hero_video_url'] ?? '');
        update_option('sob_hero_video_url', $video_url);
        echo '<div class="notice notice-success"><p>✅ Video URL saved!</p></div>';
    }
    $current_url = get_option('sob_hero_video_url', '');
    ?>
    <div class="wrap">
        <h1>🎬 Hero Video Settings</h1>
        <div style="background:#1a1a1a;border:1px solid #333;border-radius:12px;padding:30px;max-width:700px;margin-top:20px;">
            <form method="post">
                <h2 style="color:#C9A96E;margin-top:0;">Homepage Hero Video</h2>
                <p style="color:#aaa;">Hero section এর right side এ যে video দেখাবে সেটার URL এখানে দিন।</p>

                <table class="form-table">
                    <tr>
                        <th><label for="sob_hero_video_url" style="color:#ddd;">Video URL</label></th>
                        <td>
                            <input
                                type="url"
                                id="sob_hero_video_url"
                                name="sob_hero_video_url"
                                value="<?php echo esc_attr($current_url); ?>"
                                style="width:100%;padding:10px;background:#222;border:1px solid #444;color:#fff;border-radius:8px;font-size:14px;"
                                placeholder="https://example.com/video.mp4 অথবা WordPress media URL">
                            <p style="color:#888;font-size:12px;margin-top:8px;">
                                💡 <strong style="color:#C9A96E;">কীভাবে video upload করবেন:</strong><br>
                                1. <a href="<?php echo admin_url('media-new.php'); ?>" style="color:#C9A96E;">Media → Add New</a> থেকে video upload করুন<br>
                                2. Upload হওয়া video তে click করুন<br>
                                3. "Copy URL to clipboard" করে এখানে paste করুন<br>
                                4. Save করুন ✓
                            </p>
                        </td>
                    </tr>
                </table>

                <?php if ($current_url) : ?>
                <div style="margin:20px 0;padding:16px;background:#0d0d0d;border:1px solid #2a2a2a;border-radius:8px;">
                    <p style="color:#aaa;margin:0 0 10px;">Current video preview:</p>
                    <video src="<?php echo esc_attr($current_url); ?>" controls muted style="max-width:300px;border-radius:8px;"></video>
                </div>
                <?php endif; ?>

                <p>
                    <button type="submit" name="sob_save_video" class="button button-primary" style="background:#C9A96E;border-color:#A07840;padding:8px 24px;font-size:14px;">
                        💾 Save Video
                    </button>
                    <?php if ($current_url) : ?>
                    <button type="submit" name="sob_save_video" value="1" onclick="document.getElementById('sob_hero_video_url').value=''"
                        class="button" style="margin-left:12px;">
                        🗑️ Remove Video
                    </button>
                    <?php endif; ?>
                </p>
            </form>
        </div>
    </div>
    <?php
}

// ===== My Account Nav Icons =====
add_filter('woocommerce_account_menu_items', function($items) {
    $icons = [
        'dashboard'       => '🏠',
        'orders'          => '📦',
        'downloads'       => '⬇️',
        'edit-address'    => '📍',
        'edit-account'    => '👤',
        'customer-logout' => '🚪',
    ];
    $new = [];
    foreach ($items as $key => $label) {
        $icon = $icons[$key] ?? '✦';
        $new[$key] = $icon . ' ' . $label;
    }
    return $new;
}, 20);


// =====================================================
// ===== SALEONBEAUTY � Custom Product Meta Box ========
// =====================================================

add_action('add_meta_boxes', function() {
    add_meta_box(
        'sob_product_extra',
        '✨ SaleOnBeauty — Product Sections',
        'sob_render_meta_box',
        'product',
        'normal',
        'high'
    );
});

function sob_render_meta_box($post) {
    wp_nonce_field('sob_save_meta', 'sob_meta_nonce');
    $fields = [
        'sob_tagline'          => ['label'=>'🏷️ Tagline','type'=>'text','placeholder'=>'যেমন: মাত্র ২১ দিনেই আপনার Skin Tone Upgrade করুন','hint'=>'প্রোডাক্ট hero section এ দেখাবে'],
        'sob_ingredients'      => ['label'=>'🌿 Ingredients (কমা দিয়ে আলাদা করুন)','type'=>'text','placeholder'=>'Glutathione, Collagen, Ashwagandha','hint'=>'সিঙ্গেল পেজে "How It Works" সেকশনে দেখাবে'],
        'sob_result_days'      => ['label'=>'📅 Result Days','type'=>'number','placeholder'=>'21','hint'=>'সিঙ্গেল পেজে Timeline সেকশনে দেখাবে'],
        'sob_guarantee'        => ['label'=>'🛡️ Guarantee Text','type'=>'text','placeholder'=>'১০০% Money-Back Guarantee','hint'=>'রিফান্ড ও গ্যারান্টি নোটিশে দেখাবে'],
        'sob_how_to_use'       => ['label'=>'📝 How to Use (. দিয়ে প্রতিটি ধাপ আলাদা করুন)','type'=>'textarea','placeholder'=>'প্রতিদিন সকালে ১ প্যাকেট নিন। ঠান্ডা পানি বা দুধের সাথে মিশিয়ে নিন। সকালে খালি পেটে পান করুন।','hint'=>'প্রতিটি ধাপের শেষে ফুলস্টপ (.) দিন'],
        'sob_product_video_id' => ['label'=>'🎬 Product YouTube Video ID','type'=>'text','placeholder'=>'যেমন: b9k1-j4YWgY (শুধু ভিডিও ID দিন)','hint'=>'ভিডিও সেকশনে প্রোডাক্টের ভিডিও দেখাবে'],
        'sob_review_video_1'   => ['label'=>'⭐ Customer Review Video 1 (YouTube ID)','type'=>'text','placeholder'=>'যেমন: K9WMAYTg9ac','hint'=>'কাস্টমার রিভিউ সেকশনে দেখাবে'],
        'sob_review_video_2'   => ['label'=>'⭐ Customer Review Video 2 (YouTube ID) — Optional','type'=>'text','placeholder'=>'যেমন: Mh1ggN4ry7o','hint'=>'অতিরিক্ত রিভিউ ভিডিও থাকলে ID দিন'],
    ];
    echo '<div style="font-family:-apple-system,sans-serif;padding:4px 0;">';
    echo '<p style="color:#666;font-size:12px;margin:0 0 16px;padding:10px 12px;background:#fffbf2;border-left:3px solid #C9A96E;border-radius:4px;">
        💡 <strong>যেসব তথ্য পূরণ করবেন কেবল সেই সেকশনগুলোই প্রোডাক্ট পেজে দেখাবে। বাকিগুলো লুকানো থাকবে।</strong>
    </p>';
    foreach ($fields as $key => $f) {
        $val = get_post_meta($post->ID, $key, true);
        echo '<div style="margin-bottom:16px;padding:14px 16px;background:#fff;border:1px solid #ddd;border-radius:6px;">';
        echo '<label style="display:block;font-weight:600;font-size:13px;color:#222;margin-bottom:6px;">'.$f['label'].'</label>';
        if ($f['type']==='textarea') {
            echo '<textarea name="'.esc_attr($key).'" rows="3" style="width:100%;padding:8px 10px;border:1px solid #ccc;border-radius:4px;font-size:13px;resize:vertical;" placeholder="'.esc_attr($f['placeholder']).'">'.esc_textarea($val).'</textarea>';
        } else {
            echo '<input type="'.esc_attr($f['type']).'" name="'.esc_attr($key).'" value="'.esc_attr($val).'" style="width:100%;padding:8px 10px;border:1px solid #ccc;border-radius:4px;font-size:13px;" placeholder="'.esc_attr($f['placeholder']).'">';
        }
        if (!empty($f['hint'])) echo '<p style="margin:5px 0 0;font-size:11px;color:#888;">💡 '.$f['hint'].'</p>';
        echo '</div>';
    }
    echo '</div>';
}

add_action('save_post_product', function($post_id) {
    if (!isset($_POST['sob_meta_nonce'])) return;
    if (!wp_verify_nonce($_POST['sob_meta_nonce'], 'sob_save_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    $keys = ['sob_tagline','sob_ingredients','sob_result_days','sob_guarantee','sob_how_to_use','sob_product_video_id','sob_review_video_1','sob_review_video_2'];
    foreach ($keys as $key) {
        if (isset($_POST[$key]) && $_POST[$key] !== '') {
            $val = ($key === 'sob_tagline')
                ? wp_kses($_POST[$key], ['strong'=>[],'em'=>[],'br'=>[]])
                : sanitize_text_field($_POST[$key]);
            update_post_meta($post_id, $key, $val);
        } else {
            delete_post_meta($post_id, $key);
        }
    }
    wc_delete_product_transients($post_id);
});

add_action('admin_head', function() {
    $screen = get_current_screen();
    if (!$screen || $screen->post_type !== 'product') return;
    echo '<style>
        #sob_product_extra{border-top:3px solid #C9A96E!important;}
        #sob_product_extra .hndle{background:linear-gradient(135deg,#1a1a1a,#111);color:#C9A96E;font-size:13px;}
        #sob_product_extra .handlediv{filter:invert(1);}
    </style>';
});


add_filter('woocommerce_add_to_cart_redirect', function($url) {
    if (isset($_REQUEST['sob_direct_checkout'])) {
        return wc_get_checkout_url();
    }
    return $url;
});

remove_action('woocommerce_checkout_after_order_review', 'woocommerce_checkout_privacy_policy_text', 20);
add_filter('woocommerce_get_privacy_policy_text', '__return_empty_string');

add_action('wp_head', function() {
    if (!is_checkout()) return;
    echo '<style>.woocommerce-privacy-policy-text,.woocommerce-terms-and-conditions-wrapper{display:none!important;}</style>';
});

add_filter('woocommerce_billing_fields', function($fields) {
    $map = [
        'billing_first_name' => 'Your Name',
        'billing_last_name'  => 'Last Name (Optional)',
        'billing_address_1'  => 'Full Address',
        'billing_phone'      => 'Mobile Number (01XXXXXXXXX)',
        'billing_email'      => 'Email (Optional)',
        'billing_city'       => 'City / District',
        'billing_postcode'   => 'Post Code (Optional)',
    ];
    foreach ($map as $key => $ph) {
        if (isset($fields[$key])) {
            $fields[$key]['label'] = '';
            $fields[$key]['placeholder'] = $ph;
        }
    }
    return $fields;
}, 20);

// Auto-add to cart logic removed as per user request to fix the bug where viewing details auto-adds to cart

// Clear cart if requested (for Order Now button)
add_filter( 'woocommerce_add_to_cart_validation', function( $passed, $product_id, $quantity ) {
    if ( isset($_REQUEST['spd_clear_cart']) && function_exists('WC') ) {
        WC()->cart->empty_cart();
    }
    return $passed;
}, 10, 3 );

// Enqueue checkout scripts & cart fragments
add_action( 'wp_enqueue_scripts', function() {
    if ( function_exists('WC') ) {
        if ( is_product() ) {
            wp_enqueue_script( 'wc-checkout' );
        }
        wp_enqueue_script( 'wc-cart-fragments' );
    }
}, 50 );

// Real-time Cart Count Fragments for Cache-Proof Navbar
add_filter( 'woocommerce_add_to_cart_fragments', 'sob_cart_count_fragments' );
function sob_cart_count_fragments( $fragments ) {
    $count = ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 0;
    $fragments['span.cart-count'] = '<span class="cart-count" id="cart-count">' . esc_html($count) . '</span>';
    $fragments['span.cart-count-text'] = '<span class="cart-count-text">' . esc_html($count) . '</span>';
    return $fragments;
}

// AJAX endpoint to get real-time cart count (cache-proof)
add_action( 'wp_ajax_sob_get_cart_count', 'sob_ajax_get_cart_count' );
add_action( 'wp_ajax_nopriv_sob_get_cart_count', 'sob_ajax_get_cart_count' );
function sob_ajax_get_cart_count() {
    $count = ( function_exists('WC') && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 0;
    wp_send_json_success( ['count' => $count] );
}

// --- Add Quantity +/- and Remove buttons to Checkout ---
add_filter( 'woocommerce_checkout_cart_item_quantity', 'sob_checkout_item_quantity_controls', 10, 3 );
function sob_checkout_item_quantity_controls( $quantity_html, $cart_item, $cart_item_key ) {
    $qty = $cart_item['quantity'];
    
    // Create the +/- buttons and the remove button with clean classes
    $controls = '<div class="sob-checkout-item-actions">';
    
    // Quantity Box
    $controls .= '<div class="sob-checkout-qty">';
    $controls .= '<span class="sob-qty-btn sob-qty-minus" data-key="' . esc_attr($cart_item_key) . '">-</span>';
    $controls .= '<span class="sob-qty-val">' . $qty . '</span>';
    $controls .= '<span class="sob-qty-btn sob-qty-plus" data-key="' . esc_attr($cart_item_key) . '">+</span>';
    $controls .= '</div>';
    
    // Remove link
    $controls .= '<a href="#" class="sob-checkout-remove" data-key="' . esc_attr($cart_item_key) . '">Remove</a>';
    
    $controls .= '</div>';
    
    return $controls;
}

// AJAX endpoint to update cart from checkout
add_action('wp_ajax_sob_update_checkout_cart', 'sob_update_checkout_cart');
add_action('wp_ajax_nopriv_sob_update_checkout_cart', 'sob_update_checkout_cart');
function sob_update_checkout_cart() {
    if (!isset($_POST['cart_key']) || !isset($_POST['new_qty'])) {
        wp_send_json_error(['message' => 'Missing parameters']);
    }
    
    $cart_key = sanitize_text_field($_POST['cart_key']);
    $new_qty = (int) $_POST['new_qty'];
    
    if ( function_exists('WC') && WC()->cart ) {
        if ($new_qty > 0) {
            WC()->cart->set_quantity($cart_key, $new_qty, true);
        } else {
            WC()->cart->remove_cart_item($cart_key);
        }
        WC()->cart->calculate_totals();
        wp_send_json_success();
    }
    wp_send_json_error();
}

// Force Free Shipping everywhere on checkout
add_filter( 'woocommerce_package_rates', function( $rates, $package ) {
    if ( empty($rates) ) return $rates;
    foreach ( $rates as $rate_key => $rate ) {
        $rates[$rate_key]->cost = 0;
        $rates[$rate_key]->label = 'Free shipping';
        if ( isset($rates[$rate_key]->taxes) && is_array($rates[$rate_key]->taxes) ) {
            $rates[$rate_key]->taxes = array();
        }
    }
    return $rates;
}, 100, 2 );

// Rename "Shipping" to "Shipment" in order review
add_filter('woocommerce_shipping_package_name', function($name) {
    return 'Shipment';
});

// Force clean Free shipping label
add_filter( 'woocommerce_cart_shipping_method_full_label', function( $label, $method ) {
    return 'Free shipping';
}, 100, 2 );


/* ============================================================
   SLIDER SETTINGS — WordPress Admin Page
   Appearance → Slider Images
   ============================================================ */

// Register admin menu
add_action('admin_menu', function() {
    add_theme_page(
        'Slider Images',
        '🖼 Slider Images',
        'manage_options',
        'sob-slider-settings',
        'sob_slider_settings_page'
    );
});

// Enqueue media uploader scripts on our settings page
add_action('admin_enqueue_scripts', function($hook) {
    if ($hook !== 'appearance_page_sob-slider-settings') return;
    wp_enqueue_media();
    wp_enqueue_script('jquery');
});

// Inject JS via admin_footer so wp.media is definitely loaded
add_action('admin_footer', function() {
    $screen = get_current_screen();
    if (!$screen || $screen->id !== 'appearance_page_sob-slider-settings') return;
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        function sobOpenMediaFrame(btnId, inputId, previewId) {
            var frame = wp.media({
                title: 'Select Slider Image',
                button: { text: 'Use this image' },
                multiple: false,
                library: { type: 'image' }
            });
            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                $('#' + inputId).val(attachment.id);
                var imgUrl = attachment.sizes && attachment.sizes.medium
                    ? attachment.sizes.medium.url
                    : attachment.url;
                $('#' + previewId).attr('src', imgUrl).show();
                // Update button text
                $('#' + btnId).text('Change Image');
            });
            frame.open();
        }

        // Attach to all select buttons
        $(document).on('click', '.sob-select-btn', function(e) {
            e.preventDefault();
            var inputId  = $(this).data('input');
            var previewId = $(this).data('preview');
            var btnId    = $(this).attr('id');
            sobOpenMediaFrame(btnId, inputId, previewId);
        });

        // Remove button
        $(document).on('click', '.sob-remove-btn', function(e) {
            e.preventDefault();
            var inputId  = $(this).data('input');
            var previewId = $(this).data('preview');
            $('#' + inputId).val('');
            $('#' + previewId).hide();
            $(this).hide();
        });
    });
    </script>
    <?php
});

// Save handler
add_action('admin_init', function() {
    if (
        isset($_POST['sob_slider_nonce']) &&
        wp_verify_nonce($_POST['sob_slider_nonce'], 'sob_slider_save') &&
        current_user_can('manage_options')
    ) {
        $ids = [];
        for ($i = 1; $i <= 8; $i++) {
            $key = 'sob_slide_' . $i;
            if (!empty($_POST[$key])) {
                $ids[] = (int) $_POST[$key];
            }
        }
        update_option('sob_slider_image_ids', $ids);
        wp_redirect(add_query_arg(['page' => 'sob-slider-settings', 'saved' => '1'], admin_url('themes.php')));
        exit;
    }
});

// Settings page HTML
function sob_slider_settings_page() {
    $saved_ids = get_option('sob_slider_image_ids', []);
    // Pad to 8 slots
    while (count($saved_ids) < 8) $saved_ids[] = 0;
    ?>
    <div class="wrap">
        <h1>🖼 Slider Images Settings</h1>
        <?php if (isset($_GET['saved'])): ?>
            <div class="notice notice-success"><p><strong>Saved!</strong> Slider images updated.</p></div>
        <?php endif; ?>
        <p style="color:#555;">Select up to 8 images for the homepage slider. Upload images via <a href="<?php echo admin_url('media-new.php'); ?>">Media → Add New</a> first, then select here.</p>
        <form method="post">
            <?php wp_nonce_field('sob_slider_save', 'sob_slider_nonce'); ?>
            <table class="widefat" style="margin-top:20px;max-width:900px;">
                <thead>
                    <tr>
                        <th>Slide #</th>
                        <th>Preview</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php for ($i = 1; $i <= 8; $i++):
                    $att_id  = $saved_ids[$i - 1] ?? 0;
                    $img_src = $att_id ? wp_get_attachment_image_url($att_id, 'medium') : '';
                    $input_id   = 'sob_slide_' . $i;
                    $btn_id     = 'sob_btn_'   . $i;
                    $prev_id    = 'sob_prev_'  . $i;
                    $clear_id   = 'sob_clear_' . $i;
                ?>
                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:12px;width:80px;"><strong>Slide <?php echo $i; ?></strong></td>
                    <td style="padding:12px;width:200px;">
                        <img id="<?php echo $prev_id; ?>"
                             src="<?php echo esc_url($img_src); ?>"
                             style="max-width:180px;max-height:100px;display:<?php echo $img_src ? 'block' : 'none'; ?>;border-radius:6px;border:1px solid #ddd;"
                        >
                        <?php if (!$img_src): ?>
                        <span style="color:#aaa;font-size:12px;">No image selected</span>
                        <?php endif; ?>
                    </td>
                    <td style="padding:12px;">
                        <input type="hidden"
                               id="<?php echo $input_id; ?>"
                               name="<?php echo $input_id; ?>"
                               value="<?php echo esc_attr($att_id ?: ''); ?>"
                        >
                        <button type="button"
                                id="<?php echo $btn_id; ?>"
                                class="button button-primary sob-select-btn"
                                data-input="<?php echo $input_id; ?>"
                                data-preview="<?php echo $prev_id; ?>">
                            <?php echo $img_src ? 'Change Image' : '📷 Select Image'; ?>
                        </button>
                        <?php if ($att_id): ?>
                        &nbsp;
                        <button type="button"
                                class="button sob-remove-btn"
                                data-input="<?php echo $input_id; ?>"
                                data-preview="<?php echo $prev_id; ?>">✕ Remove</button>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endfor; ?>
                </tbody>
            </table>
            <p style="margin-top:20px;">
                <button type="submit" class="button button-primary button-hero">💾 Save Slider Images</button>
            </p>
        </form>
    </div>
    <?php
}

/* ==========================================================================
   BODYGUARD SHOP: DIRECT ONE-CLICK COD ORDER HANDLER (AJAX & POST)
   ========================================================================== */
add_action('wp_ajax_bgs_process_direct_order', 'bgs_process_direct_order_handler');
add_action('wp_ajax_nopriv_bgs_process_direct_order', 'bgs_process_direct_order_handler');

function bgs_process_direct_order_handler() {
    if ( ! function_exists('wc_create_order') ) {
        wp_send_json_error(['message' => 'WooCommerce is not active.']);
    }

    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    $qty        = isset($_POST['qty']) ? max(1, intval($_POST['qty'])) : (isset($_POST['quantity']) ? max(1, intval($_POST['quantity'])) : 1);
    $name       = isset($_POST['customer_name']) ? sanitize_text_field($_POST['customer_name']) : (isset($_POST['billing_name']) ? sanitize_text_field($_POST['billing_name']) : (isset($_POST['billing_first_name']) ? sanitize_text_field($_POST['billing_first_name']) : ''));
    $phone      = isset($_POST['customer_phone']) ? sanitize_text_field($_POST['customer_phone']) : (isset($_POST['billing_phone']) ? sanitize_text_field($_POST['billing_phone']) : '');
    $address    = isset($_POST['customer_address']) ? sanitize_textarea_field($_POST['customer_address']) : (isset($_POST['billing_address']) ? sanitize_textarea_field($_POST['billing_address']) : (isset($_POST['billing_address_1']) ? sanitize_textarea_field($_POST['billing_address_1']) : ''));
    $zone       = isset($_POST['delivery_zone']) ? sanitize_text_field($_POST['delivery_zone']) : (isset($_POST['delivery_location']) ? sanitize_text_field($_POST['delivery_location']) : 'inside_dhaka');

    if ( empty($name) || empty($phone) || empty($address) || ! $product_id ) {
        wp_send_json_error(['message' => 'অনুগ্রহ করে নাম, মোবাইল নম্বর এবং সম্পূর্ণ ঠিকানা সঠিকভাবে পূরণ করুন।']);
    }

    $product = wc_get_product($product_id);
    if ( ! $product ) {
        wp_send_json_error(['message' => 'প্রোডাক্টটি খুঁজে পাওয়া যায়নি।']);
    }

    if ( $zone === 'free' || $zone === 'free_shipping' ) {
        $shipping_cost  = 0;
        $shipping_title = 'ডেলিভারি চার্জ ফ্রি';
    } elseif ( $zone === 'outside_dhaka' ) {
        $shipping_cost  = 130;
        $shipping_title = 'ঢাকার বাইরে ডেলিভারি';
    } else {
        $shipping_cost  = 60;
        $shipping_title = 'ঢাকার ভিতরে ডেলিভারি';
    }

    $selected_level = isset($_POST['selected_level']) ? sanitize_text_field($_POST['selected_level']) : (isset($_POST['selected_package']) ? sanitize_text_field($_POST['selected_package']) : '');
    $level_price    = isset($_POST['level_price']) ? floatval($_POST['level_price']) : 0;


    try {
        $order = wc_create_order();
        
        $item_args = [];
        if ( $level_price > 0 ) {
            $item_args['subtotal'] = $level_price * $qty;
            $item_args['total']    = $level_price * $qty;
        }
        $item_id = $order->add_product($product, $qty, $item_args);
        if ( $item_id ) {
            $item = $order->get_item($item_id);
            if ( $item ) {
                if ( ! empty($selected_level) ) {
                    $item->add_meta_data('সুরক্ষা লেভেল (Protection Level)', $selected_level, true);
                }
                if ( $level_price > 0 ) {
                    $item->set_subtotal($level_price * $qty);
                    $item->set_total($level_price * $qty);
                }
                $item->save();
            }
        }

        $address_data = [
            'first_name' => $name,
            'last_name'  => '',
            'company'    => '',
            'email'      => 'order_' . time() . '@bodyguardshop.com',
            'phone'      => $phone,
            'address_1'  => $address,
            'address_2'  => '',
            'city'       => ( $zone === 'outside_dhaka' ) ? 'Outside Dhaka' : 'Dhaka',
            'state'      => '',
            'postcode'   => '',
            'country'    => 'BD',
        ];

        $order->set_address($address_data, 'billing');
        $order->set_address($address_data, 'shipping');

        // Shipping item
        $shipping_item = new WC_Order_Item_Shipping();
        $shipping_item->set_method_title($shipping_title);
        $shipping_item->set_method_id('flat_rate');
        $shipping_item->set_total($shipping_cost);
        $order->add_item($shipping_item);

        // Payment method COD
        $order->set_payment_method('cod');
        $order->set_payment_method_title('Cash on delivery (ক্যাশ অন ডেলিভারি)');

        $order->calculate_totals();
        $order->update_status('processing', 'Direct 1-Click Order from Bodyguard Shop Landing Page.');

        if ( function_exists('WC') && WC()->cart ) {
            WC()->cart->empty_cart();
        }

        $redirect_url = $order->get_checkout_order_received_url();

        wp_send_json_success([
            'order_id'     => $order->get_id(),
            'redirect_url' => $redirect_url,
        ]);
    } catch ( Exception $e ) {
        wp_send_json_error(['message' => 'অর্ডার করতে সমস্যা হয়েছে: ' . $e->getMessage()]);
    }
}

/* ==========================================================================
   BODYGUARD SHOP AUTOMATIC SETUP & STORE SEEDER (PLUG & PLAY DEPLOYMENT)
   ========================================================================== */

/**
 * Force front-page.php for homepage regardless of page builders or static page settings
 */
add_filter( 'template_include', function( $template ) {
    if ( is_front_page() ) {
        $custom_front = get_template_directory() . '/front-page.php';
        if ( file_exists( $custom_front ) ) {
            return $custom_front;
        }
    }
    return $template;
}, 9999 );

/**
 * Ensure single product template routes properly through woocommerce/single-product.php
 */
add_filter( 'woocommerce_locate_template', function( $template, $template_name, $template_path ) {
    if ( $template_name === 'single-product.php' ) {
        $theme_template = get_template_directory() . '/woocommerce/single-product.php';
        if ( file_exists( $theme_template ) ) {
            return $theme_template;
        }
    }
    return $template;
}, 9999, 3 );

/**
 * Helper: Attach theme bundled image to WordPress media library and set as product thumbnail
 */
function bgs_attach_theme_image_to_product( $product_id, $theme_relative_path, $title = '' ) {
    $file_path = get_template_directory() . '/' . ltrim( $theme_relative_path, '/' );
    if ( ! file_exists( $file_path ) ) {
        return 0;
    }

    $upload_dir = wp_upload_dir();
    $filename   = basename( $file_path );
    
    // Check if attachment with this filename already exists
    global $wpdb;
    $existing = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_type = 'attachment' AND guid LIKE %s LIMIT 1", '%' . $wpdb->esc_like( $filename ) ) );
    if ( $existing ) {
        set_post_thumbnail( $product_id, (int) $existing );
        return (int) $existing;
    }

    if ( wp_mkdir_p( $upload_dir['path'] ) ) {
        $target_file = $upload_dir['path'] . '/' . $filename;
    } else {
        $target_file = $upload_dir['basedir'] . '/' . $filename;
    }

    @copy( $file_path, $target_file );

    $filetype = wp_check_filetype( $filename, null );
    $attachment = [
        'post_mime_type' => $filetype['type'] ?: 'image/jpeg',
        'post_title'     => sanitize_text_field( $title ?: sanitize_file_name( $filename ) ),
        'post_content'   => '',
        'post_status'    => 'inherit'
    ];

    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    $attach_id = wp_insert_attachment( $attachment, $target_file, $product_id );
    if ( ! is_wp_error( $attach_id ) && $attach_id > 0 ) {
        $attach_data = wp_generate_attachment_metadata( $attach_id, $target_file );
        wp_update_attachment_metadata( $attach_id, $attach_data );
        set_post_thumbnail( $product_id, $attach_id );
        return $attach_id;
    }
    return 0;
}

/**
 * Auto-Setup Store Data (WooCommerce Products, Contacts, & Configuration)
 */
function bgs_auto_setup_store_data( $force = false ) {
    // 1. Update Theme Options (Phone, WhatsApp, Facebook, YouTube, Videos)
    update_option( 'bgs_phone', '01409710012' );
    update_option( 'bgs_whatsapp', '8801409710012' );
    update_option( 'bgs_facebook', 'https://www.facebook.com/share/1EJkyvjkhP/' );
    update_option( 'bgs_youtube', 'https://youtube.com/@bodygardshop?si=136tfZviJHAAZU05' );
    update_option( 'bgs_hero_video_url', 'https://www.youtube.com/watch?v=4NrRuGW7q7Q' );
    update_option( 'bgs_review_video_1', 'https://www.youtube.com/shorts/RyqHKNnoW-Y' );
    update_option( 'bgs_review_video_2', 'https://www.youtube.com/shorts/T7x7RT7ynxQ' );
    update_option( 'bgs_review_video_3', 'https://www.youtube.com/watch?v=Id4CSc8QS1Y' );

    // 2. Ensure currency is BDT
    update_option( 'woocommerce_currency', 'BDT' );
    update_option( 'woocommerce_currency_pos', 'left' );

    // 3. Ensure WordPress uses front-page.php
    update_option( 'show_on_front', 'posts' );

    if ( ! class_exists( 'WooCommerce' ) ) {
        return;
    }

    // 4. Products Specification
    $products_data = [
        'cut-proof-t-shirt' => [
            'title'       => 'Bodyguard Cut Proof T-Shirt & Body Armor — মিলিটারি-গ্রেড সেলফ ডিফেন্স',
            'price'       => '8990',
            'reg_price'   => '12000',
            'desc'        => 'ব্লেড, ছুরি ও ধারালো অস্ত্রের আক্রমণ থেকে আপনার জীবন রক্ষা করতে আলটিমেট বডি আর্মার টি-শার্ট।',
            'image'       => 'assets/images/products/cut-proof-t-shirt.jpg',
            'menu_order'  => 1,
            'meta'        => [
                '_bgs_has_levels'     => 'yes',
                '_bgs_lvl1_name'      => 'Level 1 — Cut Proof T-Shirt',
                '_bgs_lvl1_price'     => '8990',
                '_bgs_lvl1_reg_price' => '12000',
                '_bgs_lvl1_badge'     => '🛡️ বেসিক কাট প্রোটেকশন',
                '_bgs_lvl1_desc'      => 'ব্লেড ও ছুরির ধারালো কাট প্রতিরোধক',
                '_bgs_lvl2_name'      => 'Level 2 — Cut & Stab Proof T-Shirt',
                '_bgs_lvl2_price'     => '18990',
                '_bgs_lvl2_reg_price' => '24000',
                '_bgs_lvl2_badge'     => '🔥 সবচেয়ে জনপ্রিয় (Most Popular)',
                '_bgs_lvl2_desc'      => 'কাট ও স্ট্যাব (ছোরার গভীর আঘাত) নিরোধক',
                '_bgs_lvl3_name'      => 'Level 3 — Bullet Proof Vest',
                '_bgs_lvl3_price'     => '38990',
                '_bgs_lvl3_reg_price' => '48000',
                '_bgs_lvl3_badge'     => '🎖️ আলটিমেট মিলিটারি আর্মার',
                '_bgs_lvl3_desc'      => 'স্টিল প্লেট সহ ব্যালিস্টিক বুলেট প্রুফ ভেস্ট',
            ],
        ],
        'bodygard-combo' => [
            'title'      => 'Bodyguard Combo — ৭-ইন-১ আলটিমেট সেলফ ডিফেন্স সেফটি কিট',
            'price'      => '1590',
            'reg_price'  => '2990',
            'desc'       => 'মাত্র ১৫৯০ টাকায় নিজেকে ও পরিবারকে নিরাপদ রাখুন ছিনতাই, ডাকাতি ও মারাত্মক আক্রমণ থেকে।',
            'image'      => 'assets/images/products/bodygard-combo.jpg',
            'menu_order' => 2,
            'meta'       => [],
        ],
        'pepper-spray' => [
            'title'      => 'Bodyguard Self-Defense Pepper Spray — আলটিমেট পার্সোনাল সিকিউরিটি',
            'price'      => '1190',
            'reg_price'  => '1590',
            'desc'       => 'আক্রমণকারীকে ৩-৫ সেকেন্ডের মধ্যে কাবু করার জন্য ২০ ফুট রেঞ্জের শক্তিশালী আমেরিকান ফর্মুলা পিপার স্প্রে।',
            'image'      => 'assets/images/products/pepper-spray.png',
            'menu_order' => 3,
            'meta'       => [],
        ],
        'baseball-bat' => [
            'title'      => 'Bodyguard Heavy-Duty Metal Baseball Bat (32 Inch) — সেলফ ডিফেন্স ও সিকিউরিটি',
            'price'      => '1890',
            'reg_price'  => '2890',
            'desc'       => 'বাড়ি ও গাড়ির বিশ্বস্ত সুরক্ষায় ৩২ ইঞ্চি আনব্রেকেবল অ্যারোস্পেস অ্যালয় মেটাল বেসবল ব্যাট।',
            'image'      => 'assets/images/products/baseball-bat.jpg',
            'menu_order' => 4,
            'meta'       => [],
        ],
        'stun-gun' => [
            'title'      => 'Bodyguard 928 Type Heavy-Duty Stun Gun (90k Volt) — রিচার্জেবল সেলফ ডিফেন্স ইলেকট্রিক শক ডিভাইস',
            'price'      => '1690',
            'reg_price'  => '2690',
            'desc'       => 'উচ্চ ভোল্টেজ ৯০০০০ ভোল্ট ইলেকট্রিক শক ও বিকট স্পার্ক সাউন্ড—ব্যক্তিগত ও পারিবারিক সুরক্ষার চূড়ান্ত ডিভাইস।',
            'image'      => 'assets/images/products/stun-gun.jpg',
            'menu_order' => 5,
            'meta'       => [],
        ],
    ];

    foreach ( $products_data as $slug => $data ) {
        $existing_id = 0;
        $post = get_page_by_path( $slug, OBJECT, 'product' );
        if ( $post ) {
            $existing_id = $post->ID;
        } else {
            global $wpdb;
            $existing_id = (int) $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type = 'product' LIMIT 1", $slug ) );
        }
        $product_id  = 0;

        if ( ! $existing_id ) {
            // Create new simple product
            $p = new WC_Product_Simple();
            $p->set_name( $data['title'] );
            $p->set_slug( $slug );
            $p->set_status( 'publish' );
            $p->set_short_description( $data['desc'] );
            $p->set_regular_price( $data['reg_price'] );
            $p->set_price( $data['price'] );
            $p->set_sale_price( $data['price'] );
            $p->set_manage_stock( false );
            $p->set_stock_status( 'instock' );
            $p->set_menu_order( $data['menu_order'] );
            $product_id = $p->save();
        } else {
            $product_id = $existing_id;
            if ( $force ) {
                $p = wc_get_product( $product_id );
                if ( $p ) {
                    $p->set_name( $data['title'] );
                    $p->set_regular_price( $data['reg_price'] );
                    $p->set_sale_price( $data['price'] );
                    $p->set_price( $data['price'] );
                    $p->set_menu_order( $data['menu_order'] );
                    $p->save();
                }
            }
        }

        if ( $product_id ) {
            // Set metadata
            if ( ! empty( $data['meta'] ) ) {
                foreach ( $data['meta'] as $mk => $mv ) {
                    update_post_meta( $product_id, $mk, $mv );
                }
            }
            // Attach image if missing
            if ( ! has_post_thumbnail( $product_id ) && ! empty( $data['image'] ) ) {
                bgs_attach_theme_image_to_product( $product_id, $data['image'], $data['title'] );
            }
        }
    }

    update_option( 'bgs_store_data_v1_seeded', 'yes' );
}

// Automatically seed store upon theme activation
add_action( 'after_switch_theme', function() {
    bgs_auto_setup_store_data( false );
} );

// Check and seed on admin_init if not yet seeded, and handle manual sync button
add_action( 'admin_init', function() {
    if ( get_option( 'bgs_store_data_v1_seeded' ) !== 'yes' ) {
        bgs_auto_setup_store_data( false );
    }

    // Manual sync action triggered by admin
    if ( isset( $_GET['bgs_sync_store'] ) && current_user_can( 'manage_options' ) ) {
        check_admin_referer( 'bgs_sync_nonce' );
        bgs_auto_setup_store_data( true );
        wp_safe_redirect( add_query_arg( [ 'bgs_synced' => '1' ], admin_url( 'themes.php' ) ) );
        exit;
    }
} );

// Prominent Admin Notice with One-Click Sync Button
add_action( 'admin_notices', function() {
    if ( ! current_user_can( 'manage_options' ) ) return;
    $sync_url = wp_nonce_url( admin_url( 'themes.php?bgs_sync_store=1' ), 'bgs_sync_nonce' );

    if ( isset( $_GET['bgs_synced'] ) ) {
        echo '<div class="notice notice-success is-dismissible" style="border-left:4px solid #10b981;padding:12px 16px;margin:15px 0;">';
        echo '<p style="font-weight:700;font-size:15px;color:#10b981;margin:0 0 4px;">✅ Bodyguard Shop: ৫টি প্রোডাক্ট ও সমস্ত সেটিংস সফলভাবে আপডেট ও সিঙ্ক হয়েছে!</p>';
        echo '<p style="margin:0;color:#333;">লাইভ সাইটে নতুন ডিজাইন দেখতে ব্রাউজারে <strong>Ctrl + F5</strong> চাপুন এবং কোনো ক্যাশ প্লাগইন (যেমন LiteSpeed Cache) থাকলে <strong>"Purge All"</strong> করুন।</p>';
        echo '</div>';
        return;
    }

    echo '<div class="notice notice-info" style="border-left:4px solid #C9A96E;background:#14141d;color:#ffffff;padding:14px 18px;margin:15px 0;border-radius:6px;box-shadow:0 4px 15px rgba(0,0,0,0.25);">';
    echo '<div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:14px;">';
    echo '<div>';
    echo '<strong style="color:#C9A96E;font-size:16px;display:block;margin-bottom:3px;">🛡️ Bodyguard Shop Theme</strong>';
    echo '<span style="font-size:13.5px;color:#d1d1db;">লাইভ সাইটে সব প্রোডাক্ট (Cut Proof, Combo, Pepper Spray, Baseball Bat, Stun Gun) তৈরি বা সেটিংস রিলোড করতে:</span>';
    echo '</div>';
    echo '<a href="' . esc_url( $sync_url ) . '" class="button button-primary" style="background:#C9A96E;border-color:#b89352;color:#000000;font-weight:800;padding:6px 20px;font-size:14px;border-radius:24px;text-decoration:none;box-shadow:0 4px 12px rgba(201,169,110,0.4);">⚡ এক ক্লিকে প্রোডাক্ট ও সেটিংস সিঙ্ক করুন (Sync Store)</a>';
    echo '</div>';
    echo '</div>';
} );

