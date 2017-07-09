<?php
/*
Plugin Name: Themes Post Type
Plugin URI:  https://github.com/sieon/themes-post-type
Description: creat themes post type.
Version:     0.0.1
Author:      sieon
Author URI:  https://qingzhuti.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: lean
Domain Path: /languages
*/

define("PLUGIN_DIR", plugin_dir_path( __FILE__ ) );

// Register Custom Post Type

require_once( PLUGIN_DIR . 'inc/themes-post-type.php' );
//require_once( PLUGIN_DIR . 'classes/class.cptui_debug_info.php' );
