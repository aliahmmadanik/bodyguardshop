<?php
/**
 * Login / Register Form — SaleOnBeauty Custom Template
 */
defined('ABSPATH') || exit;

if (is_user_logged_in()) {
    return;
}
?>

<style>
/* ===== LOGIN / REGISTER PAGE ===== */
.sob-auth-wrap {
  padding: 80px 0 120px;
  min-height: 80vh;
  display: flex;
  align-items: center;
}

.sob-auth-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px;
  max-width: 900px;
  margin: 0 auto;
  width: 100%;
}

/* ── Card base ── */
.sob-auth-card {
  background: var(--dark-card);
  border: 1px solid var(--dark-border);
  border-radius: var(--radius-lg);
  padding: 40px 36px;
  position: relative;
  overflow: hidden;
}

.sob-auth-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--gold), var(--gold-dark));
}

.sob-auth-card-title {
  font-family: var(--font-heading);
  font-size: 1.4rem;
  color: var(--text-primary);
  margin-bottom: 6px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.sob-auth-card-sub {
  font-size: 0.85rem;
  color: var(--text-muted);
  margin-bottom: 28px;
}

/* ── Form fields ── */
.sob-auth-card .form-row {
  margin-bottom: 18px;
}

.sob-auth-card label {
  display: block;
  font-size: 0.82rem;
  font-weight: 600;
  color: var(--text-secondary);
  margin-bottom: 7px;
  letter-spacing: 0.3px;
}

.sob-auth-card label .required {
  color: #e74c3c;
  margin-left: 2px;
}

.sob-auth-card input[type="text"],
.sob-auth-card input[type="email"],
.sob-auth-card input[type="password"] {
  width: 100%;
  padding: 13px 16px;
  background: var(--dark-surface);
  border: 1px solid var(--dark-border);
  border-radius: var(--radius);
  color: var(--text-primary);
  font-family: var(--font-body);
  font-size: 0.92rem;
  outline: none;
  transition: border-color 0.25s, box-shadow 0.25s;
  box-sizing: border-box;
}

.sob-auth-card input[type="text"]:focus,
.sob-auth-card input[type="email"]:focus,
.sob-auth-card input[type="password"]:focus {
  border-color: rgba(201,169,110,0.5);
  box-shadow: 0 0 0 3px rgba(201,169,110,0.08);
}

/* ── Buttons ── */
.sob-auth-card .button,
.sob-auth-card .woocommerce-Button {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  width: 100%;
  padding: 14px 24px;
  background: linear-gradient(135deg, var(--gold), var(--gold-dark));
  color: var(--dark-bg) !important;
  font-weight: 700;
  font-size: 0.95rem;
  border-radius: var(--radius);
  border: none;
  cursor: pointer;
  transition: opacity 0.2s, box-shadow 0.3s, transform 0.2s;
  font-family: var(--font-body);
  margin-top: 8px;
  letter-spacing: 0.3px;
}

.sob-auth-card .button:hover {
  opacity: 0.92;
  box-shadow: 0 8px 24px rgba(201,169,110,0.35);
  transform: translateY(-1px);
}

/* ── Lost password ── */
.sob-auth-card .lost_password {
  text-align: center;
  margin-top: 16px;
}

.sob-auth-card .lost_password a {
  font-size: 0.82rem;
  color: var(--text-muted);
  transition: color 0.2s;
}

.sob-auth-card .lost_password a:hover { color: var(--gold); }

/* ── Remember me ── */
.sob-auth-card .form-row-wide .woocommerce-form__label-for-checkbox {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.85rem;
  color: var(--text-secondary);
  cursor: pointer;
}

.sob-auth-card input[type="checkbox"] {
  width: 16px; height: 16px;
  accent-color: var(--gold);
}

/* ── Notices ── */
.woocommerce-error,
.woocommerce-message,
.woocommerce-info {
  padding: 14px 18px;
  border-radius: var(--radius);
  font-size: 0.88rem;
  margin-bottom: 20px;
  list-style: none;
}

.woocommerce-error {
  background: rgba(231,76,60,0.08);
  border: 1px solid rgba(231,76,60,0.25);
  border-left: 3px solid #e74c3c;
  color: #e87465;
}

.woocommerce-message {
  background: rgba(109,204,138,0.08);
  border: 1px solid rgba(109,204,138,0.2);
  border-left: 3px solid #6dcc8a;
  color: #6dcc8a;
}

/* ── Divider ── */
.sob-auth-divider {
  display: flex;
  align-items: center;
  gap: 12px;
  margin: 20px 0;
  color: var(--text-muted);
  font-size: 0.78rem;
}

.sob-auth-divider::before,
.sob-auth-divider::after {
  content: '';
  flex: 1;
  height: 1px;
  background: var(--dark-border);
}

/* ── Benefits (right side teaser) ── */
.sob-auth-benefits {
  display: flex;
  flex-direction: column;
  gap: 16px;
  margin-top: 24px;
}

.sob-benefit-item {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 14px;
  background: rgba(201,169,110,0.05);
  border: 1px solid rgba(201,169,110,0.1);
  border-radius: var(--radius);
}

.sob-benefit-icon {
  font-size: 1.3rem;
  flex-shrink: 0;
}

.sob-benefit-text h5 {
  font-size: 0.88rem;
  color: var(--gold);
  margin-bottom: 2px;
}

.sob-benefit-text p {
  font-size: 0.78rem;
  color: var(--text-muted);
}

/* ── Privacy policy text ── */
.woocommerce-privacy-policy-text {
  font-size: 0.78rem;
  color: var(--text-muted);
  line-height: 1.5;
  margin-top: 12px;
}

.woocommerce-privacy-policy-text a { color: var(--gold); }

@media (max-width: 768px) {
  .sob-auth-grid { grid-template-columns: 1fr; }
  .sob-auth-card { padding: 28px 20px; }
}
</style>

<main id="main-content" style="padding-top: 72px;">
<div class="container sob-auth-wrap">
  <div style="width:100%">

    <?php woocommerce_output_all_notices(); ?>

    <!-- Page Title -->
    <div style="text-align:center; margin-bottom:48px;">
      <span class="gold-badge">Account</span>
      <h1 style="font-family:var(--font-heading); font-size:clamp(1.8rem,3vw,2.4rem); margin-top:10px; background:linear-gradient(135deg,var(--gold-light),var(--gold)); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;">
        আপনার Account এ স্বাগতম
      </h1>
      <p style="color:var(--text-muted); font-size:0.95rem; margin-top:6px;">Login করুন অথবা নতুন Account তৈরি করুন</p>
    </div>

    <div class="sob-auth-grid">

      <!-- ══ LOGIN CARD ══ -->
      <div class="sob-auth-card" id="sob-login-card">
        <h2 class="sob-auth-card-title">🔐 Login করুন</h2>
        <p class="sob-auth-card-sub">আপনার account এ login করুন</p>

        <form class="woocommerce-form woocommerce-form-login login" method="post" id="sob-login-form">
          <?php do_action('woocommerce_login_form_start'); ?>

          <div class="form-row form-row-wide">
            <label for="username">📧 Email বা Username <span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
              name="username" id="username" autocomplete="username"
              placeholder="আপনার email দিন"
              value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>">
          </div>

          <div class="form-row form-row-wide">
            <label for="password">🔑 Password <span class="required">*</span></label>
            <input type="password" class="woocommerce-Input woocommerce-Input--text input-text"
              name="password" id="password" autocomplete="current-password"
              placeholder="আপনার password দিন">
          </div>

          <?php do_action('woocommerce_login_form'); ?>

          <div class="form-row form-row-wide">
            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
              <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">
              <span>আমাকে মনে রাখুন</span>
            </label>
          </div>

          <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
          <input type="hidden" name="redirect" value="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>">

          <div class="form-row">
            <button type="submit" class="woocommerce-Button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>">
              🚀 Login করুন
            </button>
          </div>

          <div class="lost_password">
            <a href="<?php echo esc_url(wp_lostpassword_url()); ?>">Password ভুলে গেছেন?</a>
          </div>

          <?php do_action('woocommerce_login_form_end'); ?>
        </form>
      </div>

      <!-- ══ REGISTER CARD ══ -->
      <div class="sob-auth-card" id="sob-register-card">
        <?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
          <h2 class="sob-auth-card-title">✨ নতুন Account</h2>
          <p class="sob-auth-card-sub">আজই register করুন এবং সুবিধা পান</p>

          <!-- Benefits -->
          <div class="sob-auth-benefits">
            <div class="sob-benefit-item">
              <div class="sob-benefit-icon">📦</div>
              <div class="sob-benefit-text">
                <h5>Order Track করুন</h5>
                <p>আপনার সব order এর status সহজেই দেখুন</p>
              </div>
            </div>
            <div class="sob-benefit-item">
              <div class="sob-benefit-icon">⚡</div>
              <div class="sob-benefit-text">
                <h5>দ্রুত Checkout</h5>
                <p>Saved address দিয়ে faster checkout করুন</p>
              </div>
            </div>
            <div class="sob-benefit-item">
              <div class="sob-benefit-icon">🎁</div>
              <div class="sob-benefit-text">
                <h5>Exclusive Offers</h5>
                <p>Members এর জন্য special discount পান</p>
              </div>
            </div>
          </div>

          <div class="sob-auth-divider">অথবা register করুন</div>

          <form method="post" class="woocommerce-form woocommerce-form-register register" id="sob-register-form">
            <?php do_action('woocommerce_register_form_start'); ?>

            <?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>
              <div class="form-row form-row-wide">
                <label for="reg_username">👤 Username <span class="required">*</span></label>
                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                  name="username" id="reg_username" autocomplete="username"
                  placeholder="আপনার username দিন"
                  value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>">
              </div>
            <?php endif; ?>

            <div class="form-row form-row-wide">
              <label for="reg_email">📧 Email <span class="required">*</span></label>
              <input type="email" class="woocommerce-Input woocommerce-Input--text input-text"
                name="email" id="reg_email" autocomplete="email"
                placeholder="আপনার email দিন"
                value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>">
            </div>

            <?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>
              <div class="form-row form-row-wide">
                <label for="reg_password">🔑 Password <span class="required">*</span></label>
                <input type="password" class="woocommerce-Input woocommerce-Input--text input-text"
                  name="password" id="reg_password" autocomplete="new-password"
                  placeholder="একটি strong password দিন">
              </div>
            <?php else : ?>
              <p style="font-size:0.82rem; color:var(--text-muted); margin-bottom:14px;">
                🔐 আপনার email এ automatically password পাঠানো হবে।
              </p>
            <?php endif; ?>

            <?php do_action('woocommerce_register_form'); ?>

            <?php wc_get_template('global/form-fields/input-hidden.php', ['field_key' => 'woocommerce-register-nonce', 'field_value' => wp_create_nonce('woocommerce-register')]); ?>
            <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>

            <?php do_action('woocommerce_register_form_tag'); ?>

            <div class="form-row">
              <button type="submit" class="woocommerce-Button button woocommerce-form-register__submit"
                name="register" value="<?php esc_attr_e('Register', 'woocommerce'); ?>">
                ✨ Register করুন
              </button>
            </div>

            <?php wc_privacy_policy_text('registration'); ?>
            <?php do_action('woocommerce_register_form_end'); ?>
          </form>

        <?php else : ?>
          <!-- Registration disabled -->
          <h2 class="sob-auth-card-title">ℹ️ Registration</h2>
          <p style="color:var(--text-muted); font-size:0.9rem; line-height:1.7;">
            নতুন account তৈরি করতে আমাদের সাথে যোগাযোগ করুন।
          </p>
          <div class="sob-auth-benefits" style="margin-top:28px;">
            <div class="sob-benefit-item">
              <div class="sob-benefit-icon">📦</div>
              <div class="sob-benefit-text"><h5>Order Tracking</h5><p>সহজেই track করুন</p></div>
            </div>
            <div class="sob-benefit-item">
              <div class="sob-benefit-icon">🎁</div>
              <div class="sob-benefit-text"><h5>Special Offers</h5><p>Members এর জন্য</p></div>
            </div>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</div>
</main>
