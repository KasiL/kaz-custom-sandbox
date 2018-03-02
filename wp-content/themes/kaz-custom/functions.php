<?php
/*
    ===========================
    Include scripts
    ===========================
 */
function awesome_script_enqueue() {
    // CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), "3.3.4", 'all');
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/awesome.css' , array(), "1.0.0", 'all' );
    // JS
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/awesome.js', array(), "1.0.0", true );
}
add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

/*
    ===========================
    Activate Menus
    ===========================
 */
function awesome_theme_menu() {
    add_theme_support( 'menus');

    register_nav_menu( 'primary', 'primary Header navigation' );
    register_nav_menu( 'secondary', 'footer Navigation');
}
add_action( 'after_setup_theme', 'awesome_theme_menu' );

/*
    ===========================
    Theme Support Functions
    ===========================
 */
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside', 'image', 'video') );

/*
    ===========================
    Sidebar Functions
    ===========================
 */

function awesome_widget_setup() {
    register_sidebar( 
        array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar-1',
            'class'         => 'custom',
            'description'   => 'Standard Sidebar',
            'before_widget' =>  '<aside id="%1$s" class="widget %2$s"',
            'after_widget'  =>  '</aside>',
            'before_title'  =>  '<h1 class="widget-title">',
            'after_title'   =>  '</h1>'
        )
    );
    register_sidebar( 
        array(
            'name'          => 'Sidebar Numba 2',
            'id'            => 'sidebar-2',
            'class'         => 'custom',
            'description'   => 'Second Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s"',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>'
        )
    );
}
 add_action( 'widgets_init', 'awesome_widget_setup');