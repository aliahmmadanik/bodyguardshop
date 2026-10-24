<?php
/**
 * Header Template — Glowria (glowria.com.bd) Exact Style
 * Theme: SaleOnBeauty
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="theme-color" content="#0A0A0A">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
// Pre-fetch categories for drawer (used later)
$sob_cats = get_terms([
    'taxonomy'   => 'product_cat',
    'hide_empty' => false,
    'parent'     => 0,
    'number'     => 15,
]);
?>

<!-- ===== GLOWRIA-STYLE HEADER WRAPPER ===== -->
<div class="whb-header">

  <!-- ===== ROW 1: TOP BAR (Purple) ===== -->
  <div class="whb-row whb-top-bar">
    <div class="container whb-container">

      <!-- Left: Phone text -->
      <div class="whb-col whb-left-side">
        <div class="wd-header-text">
          For Order Call or WhatsApp at this number:&nbsp;
          <a href="https://wa.me/<?php echo esc_attr( get_option('bgs_whatsapp', '8801409710012') ); ?>" target="_blank" rel="noopener"><?php echo esc_html( get_option('bgs_phone', '01409710012') ); ?></a>
        </div>
      </div>

      <!-- Right: Social Icons -->
      <div class="whb-col whb-right-side">
        <div class="wd-social-icons topbar-socials">
          <!-- Facebook -->
          <a class="wd-social-icon" href="<?php echo esc_url( get_option('bgs_facebook', 'https://www.facebook.com/share/1EJkyvjkhP/') ); ?>" target="_blank" rel="noopener" aria-label="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <!-- YouTube -->
          <a class="wd-social-icon" href="<?php echo esc_url( get_option('bgs_youtube', 'https://youtube.com/@bodygardshop?si=136tfZviJHAAZU05') ); ?>" target="_blank" rel="noopener" aria-label="YouTube">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          </a>
        </div>
      </div>

    </div>
  </div><!-- /.whb-top-bar -->

  <!-- ===== ROW 2: MAIN HEADER (White, Sticky) ===== -->
  <div class="whb-row whb-general-header" id="sob-header">
    <div class="container whb-container">

      <!-- LEFT: Hamburger & Logo -->
      <div class="whb-col whb-left-side">
        <!-- Mobile: Hamburger -->
        <button class="whb-mobile-nav-btn" id="sob-mobile-menu-btn" aria-label="Open Menu">
          <span></span><span></span><span></span>
        </button>

        <div class="header-logo">
          <?php if ( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sob-text-logo" rel="home">
              <span class="logo-sale" style="color:var(--gold,#C9A96E);font-weight:800;">Bodyguard</span> <span class="logo-beauty" style="color:#fff;font-weight:700;">Shop</span>
            </a>
          <?php endif; ?>
        </div>
      </div>

      <!-- CENTER: Navigation (Desktop only) -->
      <div class="whb-col whb-center whb-desktop-only">
        <nav class="whb-nav-desktop" id="sob-nav">
          <?php
          if ( has_nav_menu( 'primary' ) ) {
              wp_nav_menu([
                  'theme_location' => 'primary',
                  'container'      => false,
                  'menu_class'     => 'wd-nav-main',
                  'fallback_cb'    => 'sob_fallback_menu',
              ]);
          } else {
              sob_fallback_menu();
          }
          ?>
        </nav>
      </div>

      <!-- RIGHT: Tools -->
      <div class="whb-col whb-right-side">
        <div class="whb-tools">

          <!-- Login / Register (Desktop only) -->
          <div class="wd-header-my-account whb-desktop-only">
            <a href="<?php echo function_exists('wc_get_page_id') ? esc_url( get_permalink( wc_get_page_id('myaccount') ) ) : '#'; ?>" class="wd-tools-link">
              <span class="wd-login-text">LOGIN / REGISTER</span>
            </a>
          </div>

          <!-- Search Icon (Desktop only) -->
          <div class="wd-header-search whb-desktop-only">
            <button class="wd-tools-icon wd-search-trigger" id="sob-search-trigger" aria-label="Search">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </button>
            <!-- Search Popup -->
            <div class="wd-search-popup" id="sob-search-popup">
              <form role="search" method="get" class="sob-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
                <input type="text" class="sob-search-input" id="sob-search-input" name="s" placeholder="Search for products..." value="<?php echo get_search_query(); ?>">
                <input type="hidden" name="post_type" value="product">
                <button type="submit" class="sob-search-submit" aria-label="Search">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </button>
              </form>
              <div class="sob-search-dropdown" id="sob-search-dropdown"></div>
            </div>
          </div>

          <!-- Wishlist -->
          <div class="wd-header-wishlist">
            <a href="<?php echo home_url('/wishlist/'); ?>" class="wd-tools-icon" title="Wishlist">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              <span class="wd-tools-count" id="sob-wishlist-count">0</span>
            </a>
          </div>

          <!-- Cart -->
          <div class="wd-header-cart">
            <a href="<?php echo function_exists('wc_get_cart_url') ? esc_url( wc_get_cart_url() ) : home_url('/cart/'); ?>" class="wd-tools-icon wd-cart-link" id="sob-cart-trigger">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
              <span class="wd-tools-count cart-count" id="cart-count"><?php echo function_exists('sob_cart_count') ? sob_cart_count() : 0; ?></span>
              <span class="wd-cart-subtotal whb-desktop-only"><?php echo function_exists('sob_cart_total') ? sob_cart_total() : '৳0.00'; ?></span>
            </a>
          </div>

        </div>
      </div>

    </div><!-- /.whb-container -->

    <!-- ===== ROW 2: MOBILE DEDICATED SEARCH BAR (Full Width, Mobile Only) ===== -->
    <div class="whb-mobile-search-row">
      <div class="container whb-mobile-search-container">
        <div class="sob-search-wrapper sob-mobile-search-wrapper">
          <form role="search" method="get" class="sob-mobile-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
            <div class="sob-mobile-search-inner">
              <input type="text" class="sob-mobile-search-input sob-search-input" name="s" placeholder="Search for products..." value="<?php echo get_search_query(); ?>">
              <input type="hidden" name="post_type" value="product">
              <button type="submit" class="sob-mobile-search-btn" aria-label="Search">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
              </button>
            </div>
          </form>
          <div class="sob-search-dropdown sob-mobile-search-dropdown"></div>
        </div>
      </div>
    </div><!-- /.whb-mobile-search-row -->
  </div><!-- /.whb-general-header -->

</div><!-- /.whb-header -->

<!-- ===== MOBILE OFFCANVAS DRAWER ===== -->
<div class="sob-drawer-overlay" id="sob-drawer-overlay"></div>
<div class="sob-mobile-drawer" id="sob-mobile-drawer">
  <div class="drawer-header">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="drawer-logo">
      <span class="logo-sale" style="color:var(--gold,#C9A96E);font-weight:800;">Bodyguard</span> <span class="logo-beauty" style="color:#fff;font-weight:700;">Shop</span>
    </a>
    <button class="drawer-close-btn" id="sob-drawer-close" aria-label="Close">✕</button>
  </div>

  <div class="drawer-nav">
    <?php
    wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'wd-nav-mobile',
        'fallback_cb'    => 'sob_fallback_menu',
    ]);
    ?>
  </div>

  <div class="drawer-account">
    <a href="<?php echo function_exists('wc_get_page_id') ? esc_url( get_permalink( wc_get_page_id('myaccount') ) ) : '#'; ?>" class="drawer-account-btn">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      My Account / Login
    </a>
  </div>

  <div class="drawer-footer">
    <p>অর্ডার সংক্রান্ত তথ্যের জন্য কল করুন:</p>
    <a href="tel:<?php echo esc_attr( get_option('bgs_phone', '01409710012') ); ?>" class="drawer-phone">📞 <?php echo esc_html( get_option('bgs_phone', '01409710012') ); ?></a>
  </div>
</div>

<?php
// ===== Inline JS: Toggle search popup + mobile drawer + AJAX live search =====
?>
<script>
(function(){
  // Mobile drawer
  var menuBtn = document.getElementById('sob-mobile-menu-btn');
  var overlay = document.getElementById('sob-drawer-overlay');
  var drawer  = document.getElementById('sob-mobile-drawer');
  var closeBtn= document.getElementById('sob-drawer-close');
  function openDrawer(){drawer.classList.add('open');overlay.classList.add('open');document.body.classList.add('drawer-open');}
  function closeDrawer(){drawer.classList.remove('open');overlay.classList.remove('open');document.body.classList.remove('drawer-open');}
  if(menuBtn) menuBtn.addEventListener('click', openDrawer);
  if(closeBtn) closeBtn.addEventListener('click', closeDrawer);
  if(overlay)  overlay.addEventListener('click', closeDrawer);

  // Desktop search popup toggle
  var trigger = document.getElementById('sob-search-trigger');
  var popup   = document.getElementById('sob-search-popup');
  var input   = document.getElementById('sob-search-input');
  if(trigger && popup){
    trigger.addEventListener('click', function(e){
      e.stopPropagation();
      popup.classList.toggle('open');
      if(popup.classList.contains('open') && input) input.focus();
    });
    document.addEventListener('click', function(e){
      if(popup && !popup.contains(e.target) && e.target !== trigger){
        popup.classList.remove('open');
      }
    });
  }

  // AJAX live search
  var liveInput = document.getElementById('sob-search-input');
  var dropdown  = document.getElementById('sob-search-dropdown');
  var timer;
  if(liveInput && dropdown){
    liveInput.addEventListener('input', function(){
      clearTimeout(timer);
      var q = this.value.trim();
      if(q.length < 2){ dropdown.innerHTML=''; dropdown.style.display='none'; return; }
      timer = setTimeout(function(){
        var fd = new FormData();
        fd.append('action','sob_ajax_live_search');
        fd.append('q', q);
        fd.append('nonce', (typeof sob_ajax !== 'undefined') ? sob_ajax.nonce : '');
        fetch((typeof sob_ajax !== 'undefined') ? sob_ajax.url : '/wp-admin/admin-ajax.php', {method:'POST', body:fd})
          .then(function(r){return r.json();})
          .then(function(data){
            if(data && data.html){ dropdown.innerHTML=data.html; dropdown.style.display='block'; }
            else { dropdown.innerHTML=''; dropdown.style.display='none'; }
          }).catch(function(){ dropdown.style.display='none'; });
      }, 280);
    });
    document.addEventListener('click', function(e){
      if(!liveInput.contains(e.target) && !dropdown.contains(e.target)){
        dropdown.style.display='none';
      }
    });
  }
})();
</script>
