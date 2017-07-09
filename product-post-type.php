<?php
/*
Plugin Name: Product Post Type
Plugin URI:  https://github.com/sieon/theme-post-type
Description: creat product post type.
Version:     0.0.1
Author:      sieon
Author URI:  https://qingzhuti.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: lean
Domain Path: /languages
*/

// Register Custom Post Type
function lean_products_post_type() {

	$labels = array(
		'name'                  => _x( '产品', 'Post Type General Name', 'lean' ),
		'singular_name'         => _x( '产品', 'Post Type Singular Name', 'lean' ),
		'menu_name'             => __( '产品', 'lean' ),
		'name_admin_bar'        => __( '产品', 'lean' ),
		'archives'              => __( 'Item Archives', 'lean' ),
		'attributes'            => __( 'Item Attributes', 'lean' ),
		'parent_item_colon'     => __( 'Parent Item:', 'lean' ),
		'all_items'             => __( '所有产品', 'lean' ),
		'add_new_item'          => __( 'Add New Item', 'lean' ),
		'add_new'               => __( '添加产品', 'lean' ),
		'new_item'              => __( 'New Item', 'lean' ),
		'edit_item'             => __( 'Edit Item', 'lean' ),
		'update_item'           => __( 'Update Item', 'lean' ),
		'view_item'             => __( 'View Item', 'lean' ),
		'view_items'            => __( 'View Items', 'lean' ),
		'search_items'          => __( 'Search Item', 'lean' ),
		'not_found'             => __( 'Not found', 'lean' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lean' ),
		'featured_image'        => __( '特色图像', 'lean' ),
		'set_featured_image'    => __( '设置特色图像', 'lean' ),
		'remove_featured_image' => __( '移除特色图像', 'lean' ),
		'use_featured_image'    => __( 'Use as 特色图像', 'lean' ),
		'insert_into_item'      => __( 'Insert into item', 'lean' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'lean' ),
		'items_list'            => __( 'Items list', 'lean' ),
		'items_list_navigation' => __( 'Items list navigation', 'lean' ),
		'filter_items_list'     => __( 'Filter items list', 'lean' ),
	);
	$args = array(
		'label'                 => __( '产品', 'lean' ),
		'description'           => __( '产品描述。', 'lean' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'products', $args );
}
add_action( 'init', 'lean_products_post_type', 0 );
