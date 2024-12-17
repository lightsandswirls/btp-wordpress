<?php
/**
 * Functions for the BTP Wordpress Demo theme
 */


define( 'THEME_DIR_SRV', get_template_directory() ); // Server path to the theme directory
define( 'THEME_DIR_URI', get_template_directory_uri() ); // URL path to the theme directory


/**
 * Load Include Files
 */
function load_includes( $include_file = '' ) {
	require_once THEME_DIR_SRV . '/includes/' . $include_file;
}
load_includes( 'class-wp-bootstrap-navwalker.php' ); // WP Bootstrap Navwalker
load_includes( 'custom-functions.php' ); // Custom Functions
load_includes( 'custom-sidebars.php' ); // Register custom sidebar areas
load_includes( 'acf.php' ); // Advanced Custom Fields
load_includes( 'wordpress-cleanup.php' ); // WordPress Cleanup


/**
 * Theme Scripts and Styles
 */
function enqueue_scripts_styles() {

    // Register new jQuery (only if we absolutely need it)
    // wp_register_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);
    // wp_enqueue_script('jquery');

    // Add Compiled CSS
    wp_enqueue_style('theme-styles', THEME_DIR_URI . '/dist/css/main.min.css', array(), '1.0.0');
    
    // Add Compiled JS (minified) (no jQuery)
    wp_enqueue_script('theme-scripts', THEME_DIR_URI . '/dist/js/main.min.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts_styles');


/**
 * Register Default Menus
 */
function register_theme_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'btp-wordpress'),
        'footer-menu' => __('Footer Menu', 'btp-wordpress'), 
        'mobile-menu' => __('Mobile Menu', 'btp-wordpress')
    ));
}
add_action('init', 'register_theme_menus');


/**
 * Add post thumbnails support
 */
add_theme_support( 'post-thumbnails' );


/**
 * Register Custom Image Sizes
 */
function custom_image_sizes()
 {
    add_image_size( 'btp-hero-image', 1535, 730, true );
    add_image_size( 'btp-hero-image-mobile', 768, 432, true );
    add_image_size( 'btp-featured-img', 613, 431, true );
 }
 add_action('after_setup_theme', 'custom_image_sizes');


/**
 * Add excerpt support to pages
 */
add_post_type_support( 'page', 'excerpt' );


/**
 * Enable dynamic <title></title> tag for use with Yoast SEO
 */
add_theme_support( 'title-tag' );