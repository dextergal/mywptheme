<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/css/bootstrap-icons.css' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
    wp_enqueue_style( 'templatemo-first-portfolio-style', get_template_directory_uri() . '/css/templatemo-first-portfolio-style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_scripts() {
    // Enqueue jQuery from the WordPress core
    wp_enqueue_script( 'jquery' );

    // Enqueue other JavaScript files
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'), null, true );
    wp_enqueue_script( 'click-scroll', get_template_directory_uri() . '/js/click-scroll.js', array('jquery'), null, true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'magnific-popup-options', get_template_directory_uri() . '/js/magnific-popup-options.js', array('jquery'), null, true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );
