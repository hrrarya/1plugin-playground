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
function pp_register_menu_page(){
	add_menu_page(
		__( '1Plugin PlayGround', '1plugin-playground' ),
		__('1Plugin Playground', '1plugin-playground'),
		'manage_options',
		'plugin_playground',
		'plugin_playground_menu_page',
		'dashicons-editor-strikethrough',
		6
	);
}
add_action( 'admin_menu', 'pp_register_menu_page' );
add_action( 'admin_init', 'register_classes');

/**
 * Display a custom menu page
 */
function plugin_playground_menu_page(){
    $betterlinks = new \PP\Plugins\BetterLinks();
    printf('
        <h1>Plugin Playground</h1>
        <hr><br><br>
        %1$s
        %2$s',
        $betterlinks->get_string(),
        $betterlinks->your_work_here(),
    );


}

function register_classes() {
  if( is_admin() ){
    new \PP\Assets;
  }
}