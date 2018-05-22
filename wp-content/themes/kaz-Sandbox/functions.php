<?php
//enqueue CSS & Script
function kaz_styles() {
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/kaz-custom.css', array(), '1.0.0' , 'all' );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/kaz_custom.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'kaz_styles' );


//add theme features
function new_theme_features(){
    add_theme_support( 'menus' );
    
}
add_action("after_setup_theme", 'new_theme_features');

//register a menu
function new_menu() {
    register_nav_menu( 'primary', 'Primary Nav' );
    register_nav_menu('secondary', 'Secondary Nav');
    register_nav_menu('footer-menu', 'Footer Nav');
}
add_action( "init", "new_menu");