<?php
/**
 * Clean up WordPress header
 */
function btp_cleanup_head() {
    // Remove WP emoji
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Remove WP version
    remove_action('wp_head', 'wp_generator');

    // Remove wlwmanifest link
    remove_action('wp_head', 'wlwmanifest_link');

    // Remove RSD link
    remove_action('wp_head', 'rsd_link');

    // Remove REST API link
    remove_action('wp_head', 'rest_output_link_wp_head');

    // Remove shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head');

    // Remove feed links
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);

    // Remove oEmbed links
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');

    // Remove pingback header
    remove_action('wp_head', 'pingback_link');
}
add_action('init', 'btp_cleanup_head');

/**
 * Dequeue & Deregister jQuery (if not needed)
 */
function btp_dequeue_jquery() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_deregister_script('jquery-migrate');
        wp_dequeue_script('jquery');
        wp_dequeue_script('jquery-migrate');
    }
}
add_action('wp_enqueue_scripts', 'btp_dequeue_jquery');

/**
 * Remove Gutenberg block library CSS (if not needed`)
 */
function btp_remove_block_library_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style( 'wp-block-library-theme' );
}
add_action('wp_enqueue_scripts', 'btp_remove_block_library_css');

/**
 * Disable self pingbacks
 */
function btp_disable_self_pingbacks(&$links) {
    foreach ($links as $l => $link)
        if (0 === strpos($link, get_option('home')))
            unset($links[$l]);
}
add_action('pre_ping', 'btp_disable_self_pingbacks');

/**
 * Remove unnecessary DNS prefetch
 */
function btp_remove_dns_prefetch() {
    remove_action('wp_head', 'wp_resource_hints', 2);
}
add_action('init', 'btp_remove_dns_prefetch');

/**
 * Disable XML-RPC completely
 */
// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Disable X-Pingback header
add_filter('wp_headers', function($headers) {
    unset($headers['X-Pingback']);
    return $headers;
});

// Return error for all XML-RPC requests
add_filter('xmlrpc_methods', function($methods) {
    return array();
});

/**
 * Remove WordPress version from CSS and JS
 */
function btp_remove_wp_version_strings($src) {
    global $wp_version;
    parse_str(parse_url($src, PHP_URL_QUERY), $query);
    if (!empty($query['ver']) && $query['ver'] === $wp_version) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('script_loader_src', 'btp_remove_wp_version_strings');
add_filter('style_loader_src', 'btp_remove_wp_version_strings');