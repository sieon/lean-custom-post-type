<?php
// Register Slide Post Type
function lean_slide_post_type() {

	$labels = array(
		'name'                  => _x( '幻灯片', 'Post Type General Name', 'lean' ),
		'singular_name'         => _x( '幻灯片', 'Post Type Singular Name', 'lean' ),
		'menu_name'             => __( '幻灯片', 'lean' ),
		'name_admin_bar'        => __( '幻灯片', 'lean' ),
		'archives'              => __( '幻灯片', 'lean' ),
		'attributes'            => __( 'Item Attributes', 'lean' ),
		'parent_item_colon'     => __( '父条目:', 'lean' ),
		'all_items'             => __( '所有幻灯片', 'lean' ),
		'add_new_item'          => __( '添加新幻灯', 'lean' ),
		'add_new'               => __( '添加幻灯片', 'lean' ),
		'new_item'              => __( '新建', 'lean' ),
		'edit_item'             => __( '编辑', 'lean' ),
		'update_item'           => __( '更新', 'lean' ),
		'view_item'             => __( '查看此幻灯片', 'lean' ),
		'view_items'            => __( '查看幻灯片', 'lean' ),
		'search_items'          => __( '搜索', 'lean' ),
		'not_found'             => __( '没有找到', 'lean' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'lean' ),
		'featured_image'        => __( '特色图像', 'lean' ),
		'set_featured_image'    => __( '设置特色图像', 'lean' ),
		'remove_featured_image' => __( '移除特色图像', 'lean' ),
		'use_featured_image'    => __( '用作特色图像', 'lean' ),
		'insert_into_item'      => __( '插入条目', 'lean' ),
		'uploaded_to_this_item' => __( '更新条目', 'lean' ),
		'items_list'            => __( '条目列表', 'lean' ),
		'items_list_navigation' => __( '条目列表导航', 'lean' ),
		'filter_items_list'     => __( '筛选条目', 'lean' ),
	);
	$args = array(
		'label'                 => __( '幻灯片', 'lean' ),
		'description'           => __( '漂亮的幻灯片。', 'lean' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'page-attributes', ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-slides',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false, //是否在外观》菜单中显示
		'can_export'            => true, //是否支持导出
		'has_archive'           => false, //是否有归档
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => false, //是否重写url
		'capability_type'       => 'page',
	);
	register_post_type( 'slide', $args );
}
add_action( 'init', 'lean_slide_post_type', 0 );
