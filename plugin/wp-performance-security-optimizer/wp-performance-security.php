<?php
/**
 * Plugin Name: WP Performance & Security Optimizer
 * Plugin URI: https://github.com/nikhil-18-ctrl
 * Description: Improves WordPress performance and security using best practices.
 * Version: 1.0.0
 * Author: Nikhil Geedi
 * License: GPL v2 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Remove WordPress version info
remove_action( 'wp_head', 'wp_generator' );

// Disable XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );

// Remove query strings from static files
function wp_ps_remove_query_strings( $src ) {
    if ( strpos( $src, '?' ) ) {
        return strtok( $src, '?' );
    }
    return $src;
}
add_filter( 'script_loader_src', 'wp_ps_remove_query_strings', 15 );
add_filter( 'style_loader_src', 'wp_ps_remove_query_strings', 15 );

// Add security headers
function wp_ps_add_security_headers() {
    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'X-XSS-Protection: 1; mode=block' );
}
add_action( 'send_headers', 'wp_ps_add_security_headers' );

add_action('send_headers', function () {

    header("X-Frame-Options: SAMEORIGIN");
    header("X-Content-Type-Options: nosniff");
    header("X-XSS-Protection: 1; mode=block");
    header("Referrer-Policy: strict-origin-when-cross-origin");
    header("Permissions-Policy: geolocation=(), microphone=(), camera=()");

    header("Content-Security-Policy: default-src 'self'; 
        script-src 'self' 'unsafe-inline' 'unsafe-eval'; 
        style-src 'self' 'unsafe-inline'; 
        img-src 'self' data:; 
        font-src 'self' data:; 
        frame-ancestors 'self'; 
        base-uri 'self'; 
        form-action 'self';"
    );

});

