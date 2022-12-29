<?php

/**
 *  Wellore Theme functions and definitions
 * 
 */

add_action('wp_enqueue_scripts', function () {
    // подключение styles
    wp_enqueue_style('main', get_stylesheet_uri(), array(), '7.0');
    wp_enqueue_style('font', get_template_directory_uri() . '/assets/fonts/Lato/stylesheet.css', array(), '7.0');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/libs/animate/animate.min.css', array(), '7.0');
    wp_enqueue_style('primary', get_template_directory_uri() . '/assets/styles/style.css', array(), '7.0');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/styles/responsive.css', array(), '7.0');


    // отключение стандартного jquery
    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');

    // подключение scripts
    // wp_register_script('jquery-3.6.0', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
    wp_register_script('jquery-3.6.0', get_template_directory_uri() . '/assets/scripts/jquery-3.6.0.min.js', '3.6.0', true);
    wp_enqueue_script('jquery-3.6.0');
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/libs/wow/wow.min.js', array('jquery-3.6.0'), '1.2.2', true);
    wp_enqueue_script('primary', get_template_directory_uri() . '/assets/scripts/script.js', array('jquery-3.6.0'), '7.0', true);
});



add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
