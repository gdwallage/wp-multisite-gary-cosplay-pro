<?php
/**
 * Gary Wallage Cosplay Pro - Child Theme Functions
 * Inherits all parent capabilities from gary-wedding-pro
 */

add_action( 'wp_enqueue_scripts', function() {
    // Enqueue Parent stylesheet
    wp_enqueue_style( 'gary-wedding-pro-parent', get_template_directory_uri() . '/style.css', array(), GARY_THEME_VERSION );
    // Enqueue Child stylesheet
    wp_enqueue_style( 'gary-cosplay-pro-child', get_stylesheet_uri(), array( 'gary-wedding-pro-parent' ), wp_get_theme()->get( 'Version' ) );
}, 20 );

/**
 * Customizer default overrides for Cosplay brand palette
 */
add_filter( 'theme_mod_primary_color', function( $val ) {
    return $val ?: '#5B2C6F';
} );

add_filter( 'theme_mod_accent_color', function( $val ) {
    return $val ?: '#9B59B6';
} );
