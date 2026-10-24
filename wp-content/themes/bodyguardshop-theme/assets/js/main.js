/**
 * SaleOnBeauty Main Theme JS
 * Glowria-Style Features: Live Search, Category Dropdown, Mobile Offcanvas Drawer,
 * Cache-Proof Cart Sync, Direct Checkout Quantity Recalculation
 */

jQuery(document).ready(function($) {
  'use strict';

  var ajaxUrl = (typeof saleonbeauty !== 'undefined' && saleonbeauty.ajax_url) ? saleonbeauty.ajax_url : '/wp-admin/admin-ajax.php';

  /* ==========================================================================
     1. LIVE SEARCH WITH DEBOUNCE (GLOWRIA STYLE)
     ========================================================================== */
  var searchTimeout = null;
  var searchInputs = $('#sob-search-input, .sob-search-input');
  var searchDropdown = $('#sob-search-dropdown, .sob-search-dropdown');

  searchInputs.on('input', function() {
    var query = $(this).val().trim();
    var currentInput = $(this);
    var targetDropdown = currentInput.closest('.sob-search-box, .sob-search-form, .sob-search-wrapper').find('.sob-search-dropdown');
    if (!targetDropdown.length) {
      targetDropdown = searchDropdown;
    }

    clearTimeout(searchTimeout);

    if (query.length < 2) {
      targetDropdown.hide().removeClass('active').empty();
      return;
    }

    searchTimeout = setTimeout(function() {
      $.ajax({
        url: ajaxUrl,
        type: 'GET',
        data: {
          action: 'sob_ajax_live_search',
          term: query
        },
        beforeSend: function() {
          targetDropdown.html('<div class="sob-search-empty" style="padding:16px;text-align:center;color:#999;">খোঁজা হচ্ছে...</div>').show().addClass('active');
        },
        success: function(response) {
          if (response && response.success && response.data) {
            if (Array.isArray(response.data)) {
              if (response.data.length === 0) {
                targetDropdown.html('<div class="sob-search-empty" style="padding:16px;text-align:center;color:#999;">কোনো প্রোডাক্ট পাওয়া যায়নি।</div>').show().addClass('active');
              } else {
                var html = '';
                response.data.forEach(function(item) {
                  html += '<a href="' + item.permalink + '" class="sob-search-result-item">' +
                    '<img src="' + item.image + '" alt="' + item.title + '" class="sob-search-result-thumb">' +
                    '<div class="sob-search-result-info">' +
                      '<div class="sob-search-result-title">' + item.title + '</div>' +
                      '<div class="sob-search-result-price">' + item.price + '</div>' +
                    '</div>' +
                  '</a>';
                });
                targetDropdown.html(html).show().addClass('active');
              }
            } else if (typeof response.data === 'string') {
              targetDropdown.html(response.data).show().addClass('active');
            }
          } else {
            targetDropdown.html('<div class="sob-search-empty" style="padding:16px;text-align:center;color:#999;">কোনো প্রোডাক্ট পাওয়া যায়নি।</div>').show().addClass('active');
          }
        },
        error: function() {
          targetDropdown.hide().removeClass('active');
        }
      });
    }, 280);
  });

  // Close live search on click outside
  $(document).on('click', function(e) {
    if (!$(e.target).closest('.sob-search-box, .sob-search-wrapper, .sob-search-dropdown, .sob-mobile-search').length) {
      searchDropdown.hide().removeClass('active');
    }
  });


  /* ==========================================================================
     2. ALL CATEGORIES DROPDOWN TOGGLE
     ========================================================================== */
  var catToggle = $('#sob-cat-toggle, .sob-cat-toggle');
  var catDropdown = $('#sob-cat-dropdown, .sob-cat-dropdown');

  catToggle.on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    catDropdown.toggleClass('active');
  });

  $(document).on('click', function(e) {
    if (!$(e.target).closest('.sob-cat-menu-wrapper, .sob-cat-wrapper').length) {
      catDropdown.removeClass('active');
    }
  });


  /* ==========================================================================
     3. MOBILE OFFCANVAS DRAWER & TABS
     ========================================================================== */
  var mobileMenuBtn = $('#sob-mobile-menu-btn, .sob-mobile-menu-btn, .sob-mobile-btn');
  var drawer = $('#sob-mobile-drawer, .sob-mobile-drawer');
  var drawerOverlay = $('#sob-drawer-overlay, .sob-mobile-drawer-overlay');
  var drawerClose = $('#sob-drawer-close, .drawer-close-btn');

  function openDrawer() {
    drawer.addClass('active');
    drawerOverlay.addClass('active');
    $('body').css('overflow', 'hidden');
  }

  function closeDrawer() {
    drawer.removeClass('active');
    drawerOverlay.removeClass('active');
    $('body').css('overflow', '');
  }

  mobileMenuBtn.on('click', function(e) {
    e.preventDefault();
    openDrawer();
  });

  drawerClose.on('click', function(e) {
    e.preventDefault();
    closeDrawer();
  });

  drawerOverlay.on('click', function() {
    closeDrawer();
  });

  // Drawer Tabs: Menu vs Categories
  $('.drawer-tab').on('click', function(e) {
    e.preventDefault();
    var targetTab = $(this).data('tab');

    $('.drawer-tab').removeClass('active');
    $(this).addClass('active');

    if (targetTab === 'categories') {
      $('#drawer-menu-pane').removeClass('active').hide();
      $('#drawer-cats-pane').addClass('active').show();
    } else {
      $('#drawer-cats-pane').removeClass('active').hide();
      $('#drawer-menu-pane').addClass('active').show();
    }
  });


  /* ==========================================================================
     4. CACHE-PROOF REAL-TIME CART COUNT SYNC
     ========================================================================== */
  window.sobSyncCartCount = function() {
    $.get(ajaxUrl, { action: 'sob_get_cart_count' }, function(response) {
      if (response && response.success && response.data) {
        var count = response.data.count || 0;
        var total = response.data.total || '';
        
        $('.cart-count, #cart-count, .sob-badge-count').text(count);
        if (total && $('.cart-total-text').length) {
          $('.cart-total-text').text(total);
        }
      }
    });
  };

  // Run on initial page load
  sobSyncCartCount();

  // Listen for WooCommerce cart updates
  $(document.body).on('added_to_cart removed_from_cart updated_wc_div updated_cart_totals updated_checkout wc_fragments_refreshed wc_fragments_loaded', function() {
    sobSyncCartCount();
  });


  /* ==========================================================================
     5. CHECKOUT QUANTITY CONTROLS (+ / -) & AJAX RECALCULATION
     ========================================================================== */
  var isCartUpdating = false;

  $(document).on('click', '.sob-qty-minus, .sob-qty-plus', function(e) {
    e.preventDefault();
    e.stopPropagation();
    if (isCartUpdating) return;

    var btn = $(this);
    var key = btn.attr('data-key') || btn.data('key');
    var isPlus = btn.hasClass('sob-qty-plus');
    var container = btn.closest('.sob-checkout-item-actions');
    var qtySpan = container.find('.sob-qty-val');
    var currentQty = parseInt(qtySpan.text(), 10) || 1;
    var newQty = isPlus ? (currentQty + 1) : (currentQty - 1);

    if (newQty < 1) return;

    qtySpan.text(newQty);
    updateCheckoutCart(key, newQty);
  });

  $(document).on('click', '.sob-checkout-remove', function(e) {
    e.preventDefault();
    e.stopPropagation();
    if (isCartUpdating) return;

    var key = $(this).attr('data-key') || $(this).data('key');
    updateCheckoutCart(key, 0);
  });

  function updateCheckoutCart(cartKey, newQty) {
    if (!cartKey) return;
    isCartUpdating = true;

    $('.woocommerce-checkout-review-order-table, form.checkout, #order_review').css('opacity', '0.4');

    $.ajax({
      type: 'POST',
      url: ajaxUrl,
      data: {
        action: 'sob_update_checkout_cart',
        cart_key: cartKey,
        new_qty: newQty
      },
      success: function() {
        $(document.body).trigger('update_checkout');
      },
      error: function(err) {
        console.error('Cart update error:', err);
        $(document.body).trigger('update_checkout');
      },
      complete: function() {
        isCartUpdating = false;
        $('.woocommerce-checkout-review-order-table, form.checkout, #order_review').css('opacity', '1');
      }
    });
  }


  /* ==========================================================================
     6. SMOOTH SCROLL FOR ANCHOR LINKS
     ========================================================================== */
  $('a[href^="#"]').on('click', function(e) {
    var target = $(this.getAttribute('href'));
    if (target.length) {
      e.preventDefault();
      $('html, body').stop().animate({
        scrollTop: target.offset().top - 80
      }, 500);
      closeDrawer();
    }
  });

});
