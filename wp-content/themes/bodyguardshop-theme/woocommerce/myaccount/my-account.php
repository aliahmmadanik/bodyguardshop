<?php
/**
 * My Account Page — SaleOnBeauty Custom Template
 */
defined('ABSPATH') || exit;
?>

<style>
/* ===== MY ACCOUNT PAGE ===== */
.sob-account-wrap {
  padding: 60px 0 100px;
  min-height: 70vh;
}

.sob-account-grid {
  display: grid;
  grid-template-columns: 260px 1fr;
  gap: 32px;
  align-items: start;
}

/* ── Sidebar ── */
.sob-account-sidebar {
  position: sticky;
  top: 100px;
}

.sob-account-user-card {
  background: var(--dark-card);
  border: 1px solid var(--dark-border);
  border-radius: var(--radius-lg);
  padding: 28px 24px;
  text-align: center;
  margin-bottom: 16px;
}

.sob-user-avatar {
  width: 72px; height: 72px;
  background: linear-gradient(135deg, rgba(201,169,110,0.2), rgba(201,169,110,0.05));
  border: 2px solid rgba(201,169,110,0.3);
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
  font-size: 2rem;
  margin: 0 auto 14px;
}

.sob-user-name {
  font-family: var(--font-heading);
  font-size: 1.05rem;
  color: var(--text-primary);
  margin-bottom: 4px;
}

.sob-user-label {
  font-size: 0.78rem;
  color: var(--gold);
  letter-spacing: 1px;
  text-transform: uppercase;
}

/* ── Nav Menu ── */
.sob-account-nav {
  background: var(--dark-card);
  border: 1px solid var(--dark-border);
  border-radius: var(--radius-lg);
  overflow: hidden;
}

.woocommerce-MyAccount-navigation ul {
  list-style: none;
  margin: 0; padding: 0;
}

.woocommerce-MyAccount-navigation ul li {
  border-bottom: 1px solid var(--dark-border);
}

.woocommerce-MyAccount-navigation ul li:last-child {
  border-bottom: none;
}

.woocommerce-MyAccount-navigation ul li a {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 14px 20px;
  color: var(--text-secondary);
  font-size: 0.9rem;
  font-weight: 500;
  transition: all 0.2s;
  text-decoration: none;
}

.woocommerce-MyAccount-navigation ul li a:hover,
.woocommerce-MyAccount-navigation ul li.is-active a {
  color: var(--gold);
  background: rgba(201,169,110,0.07);
  padding-left: 26px;
}

.woocommerce-MyAccount-navigation ul li.is-active a {
  border-left: 3px solid var(--gold);
}

/* ── Content Area ── */
.sob-account-content {
  background: var(--dark-card);
  border: 1px solid var(--dark-border);
  border-radius: var(--radius-lg);
  padding: 36px;
}

/* Headings inside content */
.sob-account-content h2,
.sob-account-content h3 {
  font-family: var(--font-heading);
  color: var(--text-primary);
  margin-bottom: 20px;
  padding-bottom: 12px;
  border-bottom: 1px solid var(--dark-border);
}

/* Tables */
.sob-account-content table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 24px;
}

.sob-account-content table th {
  text-align: left;
  padding: 12px 16px;
  font-size: 0.8rem;
  font-weight: 600;
  color: var(--gold);
  letter-spacing: 0.5px;
  text-transform: uppercase;
  background: rgba(201,169,110,0.05);
  border-bottom: 1px solid var(--dark-border);
}

.sob-account-content table td {
  padding: 14px 16px;
  font-size: 0.9rem;
  color: var(--text-secondary);
  border-bottom: 1px solid rgba(255,255,255,0.04);
}

.sob-account-content table tr:hover td {
  background: rgba(255,255,255,0.02);
}

/* Buttons */
.sob-account-content .button,
.sob-account-content .woocommerce-Button {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 10px 22px;
  background: linear-gradient(135deg, var(--gold), var(--gold-dark));
  color: var(--dark-bg) !important;
  font-weight: 700;
  font-size: 0.88rem;
  border-radius: var(--radius);
  border: none;
  cursor: pointer;
  transition: opacity 0.2s, box-shadow 0.3s;
  font-family: var(--font-body);
  text-decoration: none;
}

.sob-account-content .button:hover {
  opacity: 0.9;
  box-shadow: 0 6px 20px rgba(201,169,110,0.35);
}

/* Forms */
.sob-account-content label {
  display: block;
  font-size: 0.82rem;
  font-weight: 600;
  color: var(--text-secondary);
  margin-bottom: 6px;
  margin-top: 16px;
}

.sob-account-content input[type="text"],
.sob-account-content input[type="email"],
.sob-account-content input[type="password"],
.sob-account-content input[type="tel"] {
  width: 100%;
  padding: 12px 14px;
  background: var(--dark-surface);
  border: 1px solid var(--dark-border);
  border-radius: var(--radius);
  color: var(--text-primary);
  font-family: var(--font-body);
  font-size: 0.9rem;
  outline: none;
  transition: border-color 0.2s;
  box-sizing: border-box;
}

.sob-account-content input[type="text"]:focus,
.sob-account-content input[type="email"]:focus,
.sob-account-content input[type="password"]:focus {
  border-color: rgba(201,169,110,0.4);
}

/* Notices */
.woocommerce-message,
.woocommerce-info {
  padding: 14px 18px;
  background: rgba(109,204,138,0.08);
  border: 1px solid rgba(109,204,138,0.2);
  border-left: 3px solid #6dcc8a;
  border-radius: var(--radius);
  color: #6dcc8a;
  font-size: 0.9rem;
  margin-bottom: 20px;
}

/* ── Privacy policy text ── */
.woocommerce-privacy-policy-text {
  font-size: 0.78rem;
  color: var(--text-muted);
  line-height: 1.5;
  margin-top: 12px;
}

.woocommerce-privacy-policy-text a { color: var(--gold); }

/* ── Fieldset (Password change section) ── */
.sob-account-content fieldset {
  border: none;
  margin: 28px 0 0;
  padding: 0;
}

.sob-account-content fieldset legend {
  display: block;
  width: 100%;
  font-family: var(--font-heading);
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--gold);
  padding: 14px 0 12px;
  margin-bottom: 16px;
  border-top: 1px solid var(--dark-border);
  letter-spacing: 0.3px;
}

.sob-account-content fieldset .form-row {
  margin-bottom: 18px;
}

.sob-account-content fieldset label {
  display: block;
  font-size: 0.82rem;
  font-weight: 600;
  color: var(--text-secondary);
  margin-bottom: 7px;
}

.sob-account-content fieldset input[type="password"] {
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

.sob-account-content fieldset input[type="password"]:focus {
  border-color: rgba(201,169,110,0.5);
  box-shadow: 0 0 0 3px rgba(201,169,110,0.08);
}

/* Password strength meter */
.woocommerce-password-strength {
  font-size: 0.78rem;
  padding: 6px 10px;
  border-radius: 6px;
  margin-top: 6px;
  font-weight: 600;
}

.woocommerce-password-hint {
  font-size: 0.76rem;
  color: var(--text-muted);
  margin-top: 4px;
  display: block;
}

/* ── Address section ── */
.woocommerce-Addresses {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.woocommerce-Address {
  background: var(--dark-surface);
  border: 1px solid var(--dark-border);
  border-radius: var(--radius-lg);
  padding: 24px;
  transition: border-color 0.3s;
}

.woocommerce-Address:hover {
  border-color: rgba(201,169,110,0.25);
}

.woocommerce-Address-title {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 14px;
  padding-bottom: 12px;
  border-bottom: 1px solid var(--dark-border);
}

.woocommerce-Address-title h3 {
  font-family: var(--font-heading);
  font-size: 1rem;
  color: var(--gold);
  margin: 0;
  border: none;
  padding: 0;
}

.woocommerce-Address-title a {
  font-size: 0.78rem;
  padding: 5px 14px;
  background: rgba(201,169,110,0.1);
  border: 1px solid rgba(201,169,110,0.25);
  border-radius: 50px;
  color: var(--gold) !important;
  text-decoration: none !important;
  transition: all 0.2s;
  white-space: nowrap;
}

.woocommerce-Address-title a:hover {
  background: rgba(201,169,110,0.2);
  border-color: var(--gold);
}

.woocommerce-Address address {
  font-style: normal;
  font-size: 0.88rem;
  color: var(--text-secondary);
  line-height: 1.7;
}

/* Empty address state */
.sob-account-content p.woocommerce-address-not-set {
  font-size: 0.85rem;
  color: var(--text-muted);
  font-style: italic;
  margin: 0;
}

@media (max-width: 600px) {
  .woocommerce-Addresses { grid-template-columns: 1fr; }
}

.woocommerce-MyAccount-content p {
  color: var(--text-secondary);
  line-height: 1.7;
  font-size: 0.95rem;
}

.woocommerce-MyAccount-content a {
  color: var(--gold);
  text-decoration: underline;
}

/* Responsive */
@media (max-width: 768px) {
  .sob-account-grid { grid-template-columns: 1fr; }
  .sob-account-sidebar { position: static; }
  .sob-account-content { padding: 24px 18px; }
}
</style>

<main id="main-content" style="padding-top: 72px;">
<div class="container sob-account-wrap">

  <?php woocommerce_output_all_notices(); ?>

  <div class="sob-account-grid">

    <!-- Sidebar -->
    <aside class="sob-account-sidebar">
      <!-- User Card -->
      <div class="sob-account-user-card">
        <div class="sob-user-avatar">👤</div>
        <?php $current_user = wp_get_current_user(); ?>
        <div class="sob-user-name"><?php echo esc_html($current_user->display_name ?: 'Guest'); ?></div>
        <div class="sob-user-label">✦ SaleOnBeauty Member</div>
      </div>

      <!-- Nav -->
      <div class="sob-account-nav">
        <?php do_action('woocommerce_account_navigation'); ?>
      </div>
    </aside>

    <!-- Content -->
    <div class="sob-account-content">
      <?php do_action('woocommerce_account_content'); ?>
    </div>

  </div>
</div>
</main>
