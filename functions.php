<?php
/**
 * DevOps Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DevOps_Theme
 */

if ( ! function_exists( 'devopstheme_setup' ) ) :
    function devopstheme_setup() {
        add_theme_support( 'title-tag' );

        register_nav_menus(
            array(
                'primary' => esc_html__( 'Primary Menu', 'devopstheme' ),
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'devopstheme_setup' );

function devopstheme_scripts() {
    wp_enqueue_style( 'devopstheme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'devopstheme-main-style', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
    wp_enqueue_script( 'lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true );
    wp_enqueue_script( 'devopstheme-main-js', get_template_directory_uri() . '/assets/js/main.js', array('lucide-icons'), '1.0', true );
    wp_add_inline_script( 'lucide-icons', 'lucide.createIcons();' );
}
add_action( 'wp_enqueue_scripts', 'devopstheme_scripts' );
