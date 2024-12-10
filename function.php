<?php
function real_estate_theme_setup() {
    // Register menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'real-estate-theme'),
        'footer' => __('Footer Menu', 'real-estate-theme'),
    ]);

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'real_estate_theme_setup');

function real_estate_theme_scripts() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'real_estate_theme_scripts');
