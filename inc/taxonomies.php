<?php
// Register Custom Taxonomy
function lean_theme_category() {

	$labels = array(
		'name'                       => _x( '目录', 'Taxonomy General Name', 'lean' ),
		'singular_name'              => _x( '主题目录', 'Taxonomy Singular Name', 'lean' ),
		'menu_name'                  => __( '主题目录', 'lean' ),
		'all_items'                  => __( '所有主题', 'lean' ),
		'parent_item'                => __( 'Parent Item', 'lean' ),
		'parent_item_colon'          => __( 'Parent Item:', 'lean' ),
		'new_item_name'              => __( '主题名称', 'lean' ),
		'add_new_item'               => __( '添加主题', 'lean' ),
		'edit_item'                  => __( '编辑', 'lean' ),
		'update_item'                => __( '更新', 'lean' ),
		'view_item'                  => __( '查看', 'lean' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'lean' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'lean' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'lean' ),
		'popular_items'              => __( 'Popular Items', 'lean' ),
		'search_items'               => __( '搜索主题', 'lean' ),
		'not_found'                  => __( '什么也没油', 'lean' ),
		'no_terms'                   => __( 'No items', 'lean' ),
		'items_list'                 => __( 'Items list', 'lean' ),
		'items_list_navigation'      => __( 'Items list navigation', 'lean' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'theme-category', array( 'themes' ), $args );

}
add_action( 'init', 'lean_theme_category', 0 );
