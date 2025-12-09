<?php
// Enqueue styles & scripts, register menus, theme supports.
function nuvira_dark_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'gallery', 'caption'));
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'nuvira-dark'),
    ));
}
add_action('after_setup_theme', 'nuvira_dark_setup');

function nuvira_dark_enqueue() {
    // Main stylesheet is imported via style.css, but enqueue anyway for WP to recognize it.
    wp_enqueue_style('nuvira-main', get_stylesheet_uri(), array(), '1.0.0');
    // Lucide icons (runtime to replace <i data-icon="...">)
    wp_enqueue_script('lucide', 'https://cdn.jsdelivr.net/npm/lucide@0.258.0/dist/lucide.min.js', array(), null, true);
    // Theme JS
    wp_enqueue_script('nuvira-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    // Inline runtime to initialize lucide after load
    wp_add_inline_script('lucide', 'document.addEventListener("DOMContentLoaded", function(){ if (window.lucide) lucide.replace(); });');
}
add_action('wp_enqueue_scripts', 'nuvira_dark_enqueue');
?>
