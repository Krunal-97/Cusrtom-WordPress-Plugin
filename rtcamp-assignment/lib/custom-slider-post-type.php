<?php 
/**
 * rtCamp Assignment Custom Post Slider
 *
 * User can add Custom Posts in Slider by this Custom Post Slider 
 *
 * @package rtCamp_Assignment
 */
function slider_post_type() {

	$labels = array(
		'name'                  => _x( 'Slider', 'Post Type General Name', 'slider' ),
		'singular_name'         => _x( 'Slide', 'Post Type Singular Name', 'slider' ),
		'menu_name'             => __( 'Post Slider', 'slider' ),
		'name_admin_bar'        => __( 'Post Slider', 'slider' ),
		'archives'              => __( 'Post Slider Archives', 'slider' ),
		'attributes'            => __( 'Post Slider Attributes', 'slider' ),
		'parent_item_colon'     => __( 'Parent Post Slide:', 'slider' ),
		'all_items'             => __( 'All Post Slider', 'slider' ),
		'add_new_item'          => __( 'Add New Post Slide', 'slider' ),
		'add_new'               => __( 'Add Post Slide', 'slider' ),
		'new_item'              => __( 'New Post Slide', 'slider' ),
		'edit_item'             => __( 'Edit Post Slide', 'slider' ),
		'update_item'           => __( 'Update Post Slide', 'slider' ),
		'view_item'             => __( 'View Post Slide', 'slider' ),
		'view_items'            => __( 'View Post Slider', 'slider' ),
		'search_items'          => __( 'Search Post Slide', 'slider' ),
		'not_found'             => __( 'Not found', 'slider' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'slider' ),
		'featured_image'        => __( 'Featured Image', 'slider' ),
		'set_featured_image'    => __( 'Set featured image', 'slider' ),
		'remove_featured_image' => __( 'Remove featured image', 'slider' ),
		'use_featured_image'    => __( 'Use as featured image', 'slider' ),
		'insert_into_item'      => __( 'Insert into Post Slider', 'slider' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Post Slider', 'slider' ),
		'items_list'            => __( 'Post Slider list', 'slider' ),
		'items_list_navigation' => __( 'Post Slider list navigation', 'slider' ),
		'filter_items_list'     => __( 'Filter Post Slider list', 'slider' ),
	);
	$args = array(
		'label'                 => __( 'Slide', 'slider' ),
		'description'           => __( 'Custom Post Slider', 'slider' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail',  'comments',  'trackbacks',  'revisions','  								custom-fields',  'page-attributes',  'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'slider', $args );

}
add_action( 'init', 'slider_post_type', 0 );