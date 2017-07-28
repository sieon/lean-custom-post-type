<?php
/*
Plugin Name: Theme Post Type
Plugin URI:  https://github.com/sieon/themes-post-type
Description: creat themes post type.
Version:     0.0.2
Author:      sieon
Author URI:  https://qingzhuti.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: lean
Domain Path: /languages
*/

define("PLUGIN_DIR", plugin_dir_path( __FILE__ ) );

// Register Custom Post Type

require_once( PLUGIN_DIR . 'inc/theme-post-type.php' );
//require_once( PLUGIN_DIR . 'inc/taxonomies.php' );
