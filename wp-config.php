<?php
/**
 * The base configuration for WordPress - Bodyguard Shop
 */

// ** Database settings ** //
define( 'DB_NAME', 'bodyguardshop' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// ** Authentication unique keys and salts ** //
define( 'AUTH_KEY',         'b0dYGuaRd_sH0p_!#92847291048_kEy_a' );
define( 'SECURE_AUTH_KEY',  'b0dYGuaRd_sH0p_!#92847291048_kEy_b' );
define( 'LOGGED_IN_KEY',    'b0dYGuaRd_sH0p_!#92847291048_kEy_c' );
define( 'NONCE_KEY',        'b0dYGuaRd_sH0p_!#92847291048_kEy_d' );
define( 'AUTH_SALT',        'b0dYGuaRd_sH0p_!#92847291048_sAlT_a' );
define( 'SECURE_AUTH_SALT', 'b0dYGuaRd_sH0p_!#92847291048_sAlT_b' );
define( 'LOGGED_IN_SALT',   'b0dYGuaRd_sH0p_!#92847291048_sAlT_c' );
define( 'NONCE_SALT',       'b0dYGuaRd_sH0p_!#92847291048_sAlT_d' );

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
