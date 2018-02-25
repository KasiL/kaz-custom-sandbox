<?php
/*
Plugin Name: Kaz Test Plugin
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Just a test plugin
Version: 0.1.0
Author: Casey Lisak
Author URI: http://caseylisak.com
Text Domain: Casey test plugin
Domain Path: /languages

Kaz Test Plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Kaz Test Plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Kaz Test Plugin. If not, see {URI to Plugin License}.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if (is_admin()) {
    require_once plugin_dir_path( __FILE__ ) . '/admin/admin-menu.php';
    require_once plugin_dir_path( __FILE__ ) . '/admin/admin-settings.php';
    require_once plugin_dir_path( __FILE__ ) . '/admin/settings-register.php';
    require_once plugin_dir_path( __FILE__ ) . '/admin/settings-callbacks.php';
    
}

// default plugin options
function myplugin_options_default() {

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}
