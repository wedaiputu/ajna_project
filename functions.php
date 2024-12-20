<?php

function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js(){
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, false);
    wp_enqueue_script('bootstrapjs');
}

function enqueue_poppins_font() {
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', false);
}

add_action('wp_enqueue_scripts', 'load_js', 'enqueue_poppins_font');

add_theme_support('menus');

add_theme_support('widgets');

add_theme_support( 'post-thumbnails' );

register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
);
function enqueue_slider_assets() {
    wp_enqueue_style('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_script('slick-slider', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);

    // Inline script to initialize the slider
    wp_add_inline_script('slick-slider', "
        jQuery(document).ready(function($) {
            $('.slider-container').slick({
                dots: true,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 3000,
            });
        });
    ");
}
add_action('wp_enqueue_scripts', 'enqueue_slider_assets');


/** 
 * register custom post type
 */
include_once( get_template_directory() . '/includes/cpt.php' );