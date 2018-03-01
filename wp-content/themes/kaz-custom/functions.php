<?php

function awesome_script_enqueue() {
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . 'css/awesome.css' , array(), "1.0.0", 'all' );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . 'js/awesome.js', array(), "1.0.0", true );
}
add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

function awesome_theme_menu() {
    add_theme_support( 'menus');
    register_nav_menu( 'primary', 'primary Header navigation' );
    register_nav_menu( 'secondary', 'footer Navigation');
}
add_action( 'after_setup_theme', 'awesome_theme_menu' );