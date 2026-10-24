<?php
/**
 * 404 Error Page Template
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main class="sob-section container" style="text-align: center; padding: 100px 20px; min-height: 60vh;">
  <h1 style="font-size: 80px; font-weight: 800; color: var(--sob-primary); margin: 0 0 10px; line-height: 1;">404</h1>
  <h2 style="font-size: 24px; font-weight: 700; color: var(--sob-dark); margin-bottom: 12px;">পেইজটি খুঁজে পাওয়া যায়নি</h2>
  <p style="color: var(--sob-gray); max-width: 480px; margin: 0 auto 28px; font-size: 15px;">দুঃখিত, আপনি যে পেইজটি খুঁজছেন তা মুছে ফেলা হয়েছে অথবা লিংকটি পরিবর্তন করা হয়েছে।</p>
  <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>" style="padding: 12px 32px;">
    হোমপেজে ফিরে যান →
  </a>
</main>

<?php get_footer(); ?>
