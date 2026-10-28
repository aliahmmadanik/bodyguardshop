<?php

/**

 * Header Template

 * Bodyguard Shop — Dark Luxury Self-Defense Theme

 */

if ( ! defined( 'ABSPATH' ) ) exit;

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <meta name="theme-color" content="#0A0A0A">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon/favicon-32.png' ); ?>">
  <link rel="icon" type="image/png" sizes="64x64" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon/favicon-64.png' ); ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon/site-icon-192.png' ); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon/apple-touch-icon.png' ); ?>">
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon/favicon.ico' ); ?>">

  <?php wp_head(); ?>

<style>
/* ==========================================================================
   BODYGUARD SHOP: 100% DARK LUXURY HEADER (JUSTIFY-BETWEEN ON ALL DEVICES)
   ========================================================================== */
.whb-top-bar {
  display: none !important;
}

.whb-general-header {
  background: #0B0B10 !important;
  border-bottom: 1px solid rgba(201, 169, 110, 0.25) !important;
  box-shadow: 0 4px 25px rgba(0, 0, 0, 0.75) !important;
  position: sticky !important;
  top: 0 !important;
  z-index: 9999 !important;
  width: 100% !important;
}

.whb-general-header .whb-container {
  display: flex !important;
  flex-direction: row !important;
  align-items: center !important;
  justify-content: space-between !important;
  width: 100% !important;
  max-width: 1380px !important;
  margin: 0 auto !important;
  padding: 0 24px !important;
  min-height: 70px !important;
}

/* Left: Brand Logo */
.whb-general-header .whb-left-side {
  display: flex !important;
  align-items: center !important;
  flex: 0 0 auto !important;
}

.sob-text-logo {
  display: inline-flex !important;
  align-items: center !important;
  gap: 6px !important;
  text-decoration: none !important;
  white-space: nowrap !important;
}

.bgs-logo-icon {
  font-size: 1.35rem !important;
  line-height: 1 !important;
  display: inline-flex !important;
  align-items: center !important;
}
.bgs-logo-img-icon {
  width: 34px !important;
  height: 34px !important;
  object-fit: contain !important;
  border-radius: 6px !important;
  display: block !important;
}

.sob-text-logo .logo-sale,
.sob-text-logo .logo-beauty {
  font-size: 1.45rem !important;
  line-height: 1 !important;
}

/* Right: Desktop Menu / Mobile Trigger */
.whb-general-header .whb-right-nav {
  display: flex !important;
  align-items: center !important;
  justify-content: flex-end !important;
  margin-left: auto !important;
  flex: 0 0 auto !important;
}

/* Desktop Navigation */
.whb-general-header .whb-nav-desktop {
  display: flex !important;
  align-items: center !important;
}

.wd-nav-main {
  display: flex !important;
  flex-direction: row !important;
  align-items: center !important;
  gap: 28px !important;
  list-style: none !important;
  margin: 0 !important;
  padding: 0 !important;
}

.wd-nav-main > li {
  margin: 0 !important;
  padding: 0 !important;
}

.wd-nav-main > li > a {
  color: #FFFFFF !important;
  font-size: 15px !important;
  font-weight: 600 !important;
  letter-spacing: 0.3px !important;
  text-transform: capitalize !important;
  text-decoration: none !important;
  padding: 8px 0 !important;
  white-space: nowrap !important;
  position: relative !important;
  transition: color 0.25s ease !important;
}

.wd-nav-main > li > a:hover {
  color: var(--bgs-gold, #C9A96E) !important;
}

/* Mobile Hamburger Button (Hidden on Desktop, Shown on Mobile) */
.bgs-mobile-menu-btn {
  display: none !important;
  align-items: center !important;
  justify-content: center !important;
  width: 42px !important;
  height: 42px !important;
  background: rgba(201, 169, 110, 0.1) !important;
  border: 1px solid rgba(201, 169, 110, 0.35) !important;
  border-radius: 8px !important;
  cursor: pointer !important;
  padding: 0 !important;
  transition: all 0.2s ease !important;
}

.bgs-mobile-menu-btn:hover,
.bgs-mobile-menu-btn:active {
  background: rgba(201, 169, 110, 0.22) !important;
  border-color: var(--bgs-gold, #C9A96E) !important;
}

.bgs-mobile-menu-btn svg {
  width: 22px !important;
  height: 22px !important;
  stroke: #C9A96E !important;
  display: block !important;
}

/* Responsive Breakpoint: Tablet & Mobile (<= 1024px) */
@media (max-width: 1024px) {
  .whb-general-header .whb-container {
    min-height: 60px !important;
    padding: 0 16px !important;
  }
  /* STRICTLY HIDE DESKTOP MENU ON MOBILE */
  .whb-general-header .whb-nav-desktop,
  #sob-nav,
  .wd-nav-main {
    display: none !important;
  }
  /* SHOW CLEAN HAMBURGER BUTTON ON RIGHT */
  .bgs-mobile-menu-btn {
    display: inline-flex !important;
  }
  .sob-text-logo .logo-sale,
  .sob-text-logo .logo-beauty {
    font-size: 1.25rem !important;
  }
  .bgs-logo-icon {
    font-size: 1.2rem !important;
  }
}

/* ==========================================================================

   OFFCANVAS DRAWER: 100% DARK LUXURY (NO PURPLE, NO WHITE BACKGROUND)

   ========================================================================== */

.sob-mobile-drawer {

  position: fixed !important;

  top: 0 !important;

  left: -320px !important;

  width: 300px !important;

  height: 100% !important;

  background: #0B0B10 !important; /* DEEP MATTE DARK */

  border-right: 1px solid rgba(201, 169, 110, 0.25) !important;

  z-index: 999999 !important;

  box-shadow: 10px 0 35px rgba(0, 0, 0, 0.8) !important;

  transition: left 0.35s cubic-bezier(0.2, 0.8, 0.2, 1) !important;

  display: flex !important;

  flex-direction: column !important;

  justify-content: space-between !important;

  overflow-y: auto !important;

}

.sob-mobile-drawer.open {

  left: 0 !important;

}

.sob-drawer-overlay {

  position: fixed !important;

  top: 0 !important;

  left: 0 !important;

  right: 0 !important;

  bottom: 0 !important;

  background: rgba(0, 0, 0, 0.75) !important;

  backdrop-filter: blur(4px) !important;

  z-index: 999998 !important;

  opacity: 0 !important;

  visibility: hidden !important;

  transition: opacity 0.3s ease !important;

}

.sob-drawer-overlay.open {

  opacity: 1 !important;

  visibility: visible !important;

}

/* Drawer Header (Luxury Black & Gold, Zero Purple) */

.sob-mobile-drawer .drawer-header {

  background: #111118 !important;

  border-bottom: 1px solid rgba(201, 169, 110, 0.25) !important;

  padding: 18px 20px !important;

  display: flex !important;

  align-items: center !important;

  justify-content: space-between !important;

}

.bgs-drawer-brand {

  font-size: 1.25rem !important;

  font-weight: 800 !important;

  color: #FFFFFF !important;

  letter-spacing: -0.3px !important;

}

.bgs-drawer-shield {

  font-size: 1.25rem !important;

  margin-right: 6px !important;

}

.bgs-gold-txt {

  color: var(--bgs-gold, #C9A96E) !important;

}

.drawer-close-btn {

  background: rgba(255, 255, 255, 0.08) !important;

  border: 1px solid rgba(201, 169, 110, 0.3) !important;

  color: #FFFFFF !important;

  width: 32px !important;

  height: 32px !important;

  border-radius: 50% !important;

  display: flex !important;

  align-items: center !important;

  justify-content: center !important;

  font-size: 15px !important;

  cursor: pointer !important;

  transition: all 0.2s ease !important;

}

.drawer-close-btn:hover {

  background: var(--bgs-gold, #C9A96E) !important;

  color: #0B0B10 !important;

  border-color: var(--bgs-gold, #C9A96E) !important;

}

/* Drawer Menu List (Clean Luxury Typography, No Cheap Emojis) */

.drawer-nav {

  flex: 1 !important;

  padding: 10px 0 !important;

}

.bgs-drawer-menu-list {

  list-style: none !important;

  margin: 0 !important;

  padding: 0 !important;

}

.bgs-drawer-menu-list li {

  border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;

}

.bgs-drawer-menu-list li a {

  display: flex !important;

  align-items: center !important;

  justify-content: space-between !important;

  padding: 15px 22px !important;

  color: #E5E7EB !important;

  font-size: 1.02rem !important;

  font-weight: 600 !important;

  text-decoration: none !important;

  transition: all 0.25s ease !important;

}

.bgs-drawer-menu-list li a:hover {

  color: var(--bgs-gold, #C9A96E) !important;

  background: rgba(201, 169, 110, 0.08) !important;

  padding-left: 26px !important;

}

.bgs-link-arrow {

  color: #6B7280 !important;

  font-size: 1.3rem !important;

  font-weight: 300 !important;

  transition: transform 0.2s ease, color 0.2s ease !important;

}

.bgs-drawer-menu-list li a:hover .bgs-link-arrow {

  color: var(--bgs-gold, #C9A96E) !important;

  transform: translateX(3px) !important;

}

/* Drawer Footer */

.drawer-footer {

  padding: 18px 20px 24px !important;

  background: #111118 !important;

  border-top: 1px solid rgba(201, 169, 110, 0.2) !important;

}

.drawer-contact-card {

  display: flex !important;

  flex-direction: column !important;

  gap: 10px !important;

}

.drawer-contact-label {

  color: #9CA3AF !important;

  font-size: 0.8rem !important;

  font-weight: 600 !important;

  letter-spacing: 0.4px !important;

  text-transform: uppercase !important;

}

.drawer-contact-actions {

  display: flex !important;

  flex-direction: column !important;

  gap: 8px !important;

}

.drawer-action-wa {

  display: flex !important;

  align-items: center !important;

  justify-content: center !important;

  gap: 8px !important;

  background: rgba(37, 211, 102, 0.12) !important;

  border: 1px solid rgba(37, 211, 102, 0.45) !important;

  color: #FFFFFF !important;

  padding: 10px 16px !important;

  border-radius: 8px !important;

  text-decoration: none !important;

  font-size: 0.92rem !important;

  font-weight: 700 !important;

  transition: all 0.25s ease !important;

}

.drawer-action-wa:hover {

  background: #25D366 !important;

  color: #FFFFFF !important;

}

.drawer-action-call {

  display: flex !important;

  align-items: center !important;

  justify-content: center !important;

  gap: 8px !important;

  background: rgba(201, 169, 110, 0.12) !important;

  border: 1px solid rgba(201, 169, 110, 0.45) !important;

  color: #FFFFFF !important;

  padding: 10px 16px !important;

  border-radius: 8px !important;

  text-decoration: none !important;

  font-size: 0.92rem !important;

  font-weight: 700 !important;

  transition: all 0.25s ease !important;

}

.drawer-action-call:hover {

  background: var(--bgs-gold, #C9A96E) !important;

  color: #0B0B10 !important;

}

/* Mobile Nav Bar Right-Side Sizing */

@media (max-width: 768px) {

  .bgs-header-actions {

    gap: 6px !important;

    flex-wrap: nowrap !important;

  }

  .bgs-header-wa-btn {

    padding: 6px 10px !important;

  }

  .bgs-header-wa-btn .bgs-btn-text {

    font-size: 0.78rem !important;

  }

  .bgs-header-call-btn {

    padding: 6px 10px !important;

  }

  .bgs-header-call-btn .bgs-btn-text {

    font-size: 0.78rem !important;

  }

}

@media (max-width: 420px) {

  .whb-general-header .whb-container {

    padding: 0 10px !important;

  }

  .bgs-header-actions {

    gap: 5px !important;

  }

  .bgs-header-call-btn {

    padding: 6px 9px !important;

  }

  .bgs-header-wa-btn {

    padding: 6px 9px !important;

  }

  .bgs-header-call-btn .bgs-btn-text {

    font-size: 0.74rem !important;

  }

  .bgs-header-wa-btn .bgs-btn-text {

    font-size: 0.74rem !important;

  }

}

</style>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<!-- ===== HEADER WRAPPER ===== -->
<div class="whb-header">

  <!-- ===== MAIN HEADER (Dark Luxury, Sticky, Justify-Between) ===== -->
  <div class="whb-row whb-general-header" id="sob-header">
    <div class="container whb-container">

      <!-- LEFT: Brand Name / Logo -->
      <div class="whb-col whb-left-side">
        <div class="header-logo">
          <?php if ( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sob-text-logo" rel="home">
              <span class="bgs-logo-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon/bgs-shield-icon.png' ); ?>" alt="Bodygard Shop" class="bgs-logo-img-icon"></span>
              <span class="logo-sale" style="color:var(--gold,#C9A96E);font-weight:800;letter-spacing:-0.5px;">Bodygard</span>
              <span class="logo-beauty" style="color:#ffffff;font-weight:700;">Shop</span>
            </a>
          <?php endif; ?>
        </div>
      </div>

      <!-- RIGHT: Desktop Menu & Mobile Hamburger Trigger -->
      <div class="whb-col whb-right-nav">
        <!-- Desktop Navigation -->
        <nav class="whb-nav-desktop" id="sob-nav">
          <ul class="wd-nav-main">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">Shop</a></li>
            <li><a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Review</a></li>
            <li><a href="<?php echo esc_url( function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart/') ); ?>">Cart</a></li>
            <li><a href="<?php echo esc_url( home_url( '/track-order/' ) ); ?>">Track Order</a></li>
            <li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">Order</a></li>
            <li><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Refund Policy</a></li>
          </ul>
        </nav>

        <!-- Mobile Hamburger Menu Button (Clean SVG, Right-Aligned on Mobile) -->
        <button type="button" class="bgs-mobile-menu-btn" id="sob-mobile-menu-btn" aria-label="Open Menu">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#C9A96E" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>
      </div>

    </div><!-- /.whb-container -->
  </div><!-- /.whb-general-header -->

</div><!-- /.whb-header -->

<!-- ===== LUXURY OFFCANVAS DRAWER ===== -->

<div class="sob-drawer-overlay" id="sob-drawer-overlay"></div>

<div class="sob-mobile-drawer" id="sob-mobile-drawer">

  <!-- Drawer Header (100% Dark Luxury, No Purple) -->

  <div class="drawer-header">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="drawer-logo" rel="home" style="display:inline-flex;align-items:center;gap:8px;text-decoration:none;">

      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon/bgs-shield-icon.png' ); ?>" alt="Bodygard Shop" style="width:30px;height:30px;object-fit:contain;border-radius:6px;">

      <span class="bgs-drawer-brand">Bodygard <span class="bgs-gold-txt">Shop</span></span>

    </a>

    <button class="drawer-close-btn" id="sob-drawer-close" aria-label="Close Menu">✕</button>

  </div>

  <!-- Drawer Navigation Links (Item 1: Shop, Home, Review, Cart, Track, Order, Refund Policy) -->

  <div class="drawer-nav">

    <ul class="bgs-drawer-menu-list">

      <li>

        <a href="<?php echo esc_url( home_url('/') ); ?>">

          <span class="bgs-link-title">Home</span>

          <span class="bgs-link-arrow">&rsaquo;</span>

        </a>

      </li>

      <li>

        <a href="<?php echo esc_url( home_url('/shop/') ); ?>">

          <span class="bgs-link-title">Shop</span>

          <span class="bgs-link-arrow">&rsaquo;</span>

        </a>

      </li>

      <li>

        <a href="<?php echo esc_url( home_url('/reviews/') ); ?>">

          <span class="bgs-link-title">Review</span>

          <span class="bgs-link-arrow">&rsaquo;</span>

        </a>

      </li>

      <li>

        <a href="<?php echo esc_url( function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart/') ); ?>">

          <span class="bgs-link-title">Cart</span>

          <span class="bgs-link-arrow">&rsaquo;</span>

        </a>

      </li>

      <li>

        <a href="<?php echo esc_url( home_url('/track-order/') ); ?>">

          <span class="bgs-link-title">Track Order</span>

          <span class="bgs-link-arrow">&rsaquo;</span>

        </a>

      </li>

      <li>

        <a href="<?php echo esc_url( home_url('/shop/') ); ?>">

          <span class="bgs-link-title">Order</span>

          <span class="bgs-link-arrow">&rsaquo;</span>

        </a>

      </li>

      <li>

        <a href="<?php echo esc_url( home_url('/terms-conditions/') ); ?>">

          <span class="bgs-link-title">Refund Policy</span>

          <span class="bgs-link-arrow">&rsaquo;</span>

        </a>

      </li>

    </ul>

  </div>

  <!-- Drawer Footer (Dark Luxury Contact Box) -->

  <div class="drawer-footer">

    <div class="drawer-contact-card">

      <span class="drawer-contact-label">24/7 কাস্টমার সাপোর্ট ও হেল্পলাইন:</span>

      <div class="drawer-contact-actions">

        <a href="https://wa.me/<?php echo esc_attr( get_option('bgs_whatsapp', '8801409710012') ); ?>" target="_blank" rel="noopener" class="drawer-action-wa">

          <svg width="18" height="18" viewBox="0 0 24 24" fill="#25D366"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>

          <span>WhatsApp Chat</span>

        </a>

        <a href="tel:<?php echo esc_attr( get_option('bgs_phone', '01409710012') ); ?>" class="drawer-action-call">

          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#C9A96E" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>

          <span><?php echo esc_html( get_option('bgs_phone', '01409710012') ); ?></span>

        </a>

      </div>

    </div>

  </div>

</div>

<script>

(function(){

  var menuBtn = document.getElementById('sob-mobile-menu-btn');

  var overlay = document.getElementById('sob-drawer-overlay');

  var drawer  = document.getElementById('sob-mobile-drawer');

  var closeBtn= document.getElementById('sob-drawer-close');

  function openDrawer(){ if(drawer){ drawer.classList.add('open'); overlay.classList.add('open'); document.body.classList.add('drawer-open'); } }

  function closeDrawer(){ if(drawer){ drawer.classList.remove('open'); overlay.classList.remove('open'); document.body.classList.remove('drawer-open'); } }

  if(menuBtn) menuBtn.addEventListener('click', openDrawer);

  if(closeBtn) closeBtn.addEventListener('click', closeDrawer);

  if(overlay)  overlay.addEventListener('click', closeDrawer);

  // Close drawer when any anchor in drawer is clicked

  var drawerLinks = document.querySelectorAll('.bgs-drawer-menu-list a');

  drawerLinks.forEach(function(link){

    link.addEventListener('click', closeDrawer);

  });

})();

</script>

