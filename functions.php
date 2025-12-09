<?php
// Enqueue styles & scripts, register menus, theme supports, and create demo content on theme activation.
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
    wp_enqueue_style('nuvira-main', get_stylesheet_uri(), array(), '1.1.0');
    // Lucide icons
    wp_enqueue_script('lucide', 'https://cdn.jsdelivr.net/npm/lucide@0.258.0/dist/lucide.min.js', array(), null, true);
    // Theme JS
    wp_enqueue_script('nuvira-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.1.0', true);
    wp_add_inline_script('lucide', 'document.addEventListener("DOMContentLoaded", function(){ if (window.lucide) lucide.replace(); });');
}
add_action('wp_enqueue_scripts', 'nuvira_dark_enqueue');

/**
 * Create example pages, menu and sample posts on theme activation (if they don't exist).
 */
function nuvira_dark_create_demo_content() {
    // Only run when theme is activated
    // Create pages: About Me, Portfolio, Contact, Blog, Home (Front Page uses front-page.php)
    $pages = array(
        'About Me' => array(
            'post_title'   => 'About Me',
            'post_content' => '<h2>Hello — I\'m a DevOps engineer</h2><p>Sample About Me content with highlights, neon badges and quick links. Replace this text with your own bio.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ),
        'Portfolio' => array(
            'post_title'   => 'Portfolio',
            'post_content' => '<p>Portfolio overview. Replace with your case studies.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ),
        'Contact' => array(
            'post_title'   => 'Contact',
            'post_content' => '<p>Contact form placeholder. Use Contact template for a styled form.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ),
        'Blog' => array(
            'post_title'   => 'Blog',
            'post_content' => '<p>Blog index. Sample posts are created below.</p>',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ),
    );

    $page_ids = array();
    foreach ($pages as $slug => $page_args) {
        // Check if a page with that title exists
        $existing = get_page_by_title($page_args['post_title']);
        if (!$existing) {
            $id = wp_insert_post($page_args);
            if (!is_wp_error($id)) {
                $page_ids[$slug] = $id;
            }
        } else {
            $page_ids[$slug] = $existing->ID;
        }
    }

    // Create a primary menu and add items (Home, Portfolio, Contact Me, Blog, About Me)
    $menu_name = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);

        // Home (link to home)
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Home'),
            'menu-item-url' => home_url('/'),
            'menu-item-status' => 'publish'
        ));

        // Portfolio page
        if (!empty($page_ids['Portfolio'])) {
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => __('Portfolio'),
                'menu-item-object-id' => $page_ids['Portfolio'],
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish'
            ));
        }

        // Contact page
        if (!empty($page_ids['Contact'])) {
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => __('Contact Me'),
                'menu-item-object-id' => $page_ids['Contact'],
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish'
            ));
        }

        // Blog page
        if (!empty($page_ids['Blog'])) {
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => __('Blog'),
                'menu-item-object-id' => $page_ids['Blog'],
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish'
            ));
        }

        // About page
        if (!empty($page_ids['About Me'])) {
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => __('About Me'),
                'menu-item-object-id' => $page_ids['About Me'],
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish'
            ));
        }

        // Assign menu to theme location 'primary'
        $locations = get_theme_mod('nav_menu_locations');
        if (!is_array($locations)) $locations = array();
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }

    // Create sample posts if none exist
    $existing_posts = get_posts(array('numberposts' => 1));
    if (empty($existing_posts)) {
        $sample_posts = array(
            array(
                'post_title' => 'Making CI/CD faster with pipelines',
                'post_content' => '<p>Short post describing pipeline improvements, caching and parallel jobs.</p>',
                'post_status' => 'publish',
                'post_author' => get_current_user_id() ?: 1,
            ),
            array(
                'post_title' => 'Observability: Metrics, Traces and Logs',
                'post_content' => '<p>Intro to observability practices and instrumentation.</p>',
                'post_status' => 'publish',
                'post_author' => get_current_user_id() ?: 1,
            ),
            array(
                'post_title' => 'Infrastructure as Code: safe deployments',
                'post_content' => '<p>Sample writeup about IaC patterns and state management.</p>',
                'post_status' => 'publish',
                'post_author' => get_current_user_id() ?: 1,
            ),
        );
        foreach ($sample_posts as $p) {
            wp_insert_post($p);
        }
    }
}
add_action('after_switch_theme', 'nuvira_dark_create_demo_content');
?>
