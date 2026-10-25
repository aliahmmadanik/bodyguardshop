<?php
/**
 * Stun Gun / Shock Gun product has been discontinued per Item 17.
 * Permanently redirecting to #all-products.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

wp_safe_redirect( home_url( '/#all-products' ), 301 );
exit;
