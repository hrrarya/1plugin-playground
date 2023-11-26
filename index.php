<?php
/*
Plugin Name:  1Plugin Playground
Plugin URI:   
Description:  Features playground 
Version:      1.0
Author:       hrrarya
Author URI:   
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  1plugin-playground
Domain Path:  /languages
*/

if( !defined('ABSPATH') ) exit('You are not allowed here');

if( file_exists(dirname(__FILE__) . '/vendor/autoload.php') ) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page(){
	add_menu_page( 
		__( 'Custom Menu Title', 'textdomain' ),
		'Plugin Playground',
		'manage_options',
		'plugin_playground',
		'plugin_playground_menu_page',
		'dashicons-editor-strikethrough',
		6
	); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );

/**
 * Display a custom menu page
 */
function plugin_playground_menu_page(){
    $betterlinks = new \PP\Plugins\BetterLinks();
    printf('
        <h1>Plugin Playground</h1>
        <hr><br><br>
        %1$s',
        $betterlinks->get_string()
    );
}

// if( is_admin() ) {
//     new \PP\Plugins\BetterLinks();
// }