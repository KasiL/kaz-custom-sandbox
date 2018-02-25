<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// add top-level administrative menu
function myplugin_add_toplevel_menu() {
	
	/* 
		add_menu_page(
			string   $page_title, 
			string   $menu_title, 
			string   $capability, This should always be manage_options
			string   $menu_slug,  use teh name of the plugin
			callable $function = '', 
			string   $icon_url = '', 
			int      $position = null //higher the number the lower it will appear in the menu, keep as 'null'
		)
	*/
	
	add_menu_page(
		'Kaz Test Plugin Settings',
		'MyPlugin',
		'manage_options',
		'myplugin',
		'myplugin_display_settings_page',
		'dashicons-admin-generic',
		null
	);
	
}
add_action( 'admin_menu', 'myplugin_add_toplevel_menu' );


add_action( 'admin_init' , 'myplugin_register_settings');

//validate plugin settings
function myplugin_validate_options($input) {
    return $input;
}