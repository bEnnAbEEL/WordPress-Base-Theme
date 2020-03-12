<?php
/**
 * Functions for custom post types
 *
 * @link https://developer.wordpress.org/themes/basics/post-types/
 *
 * @package Sample Theme
 * @since 1.0.0
 *
 */

/**
 * Register a custom post type called "burger".
 *
 * @see get_post_type_labels() for label keys.
 */

function register_cpt_burgers() {
	$labels = array(
		'name'						=> _x( 'Burgers', 'Post type general name', 'theme_textdomain' ),
		'singular_name'				=> _x( 'Burger', 'Post type singular name', 'theme_textdomain' ),
		'menu_name'					=> _x( 'Burgers', 'Admin Menu text', 'theme_textdomain' ),
		'name_admin_bar'			=> _x( 'Burger', 'Add New on Toolbar', 'theme_textdomain' ),
		'add_new'					=> __( 'Add New', 'theme_textdomain' ),
		'add_new_item'				=> __( 'Add New Burger', 'theme_textdomain' ),
		'new_item'					=> __( 'New Burger', 'theme_textdomain' ),
		'edit_item'					=> __( 'Edit Burger', 'theme_textdomain' ),
		'view_item'					=> __( 'View Burger', 'theme_textdomain' ),
		'all_items'					=> __( 'All Burgers', 'theme_textdomain' ),
		'search_items'				=> __( 'Search Burgers', 'theme_textdomain' ),
		'parent_item_colon'			=> __( 'Parent Burgers:', 'theme_textdomain' ),
		'not_found'					=> __( 'No burgers found.', 'theme_textdomain' ),
		'not_found_in_trash'		=> __( 'No burgers found in Trash.', 'theme_textdomain' ),
		'featured_image'			=> _x( 'Burger Image', 'Overrides the “Featured Image” phrase.', 'theme_textdomain' ),
		'set_featured_image'		=> _x( 'Set burger image', 'Overrides the “Set featured image” phrase.', 'theme_textdomain' ),
		'remove_featured_image'		=> _x( 'Remove burger image', 'Overrides the “Remove featured image” phrase.', 'theme_textdomain' ),
		'use_featured_image'		=> _x( 'Use as burger image', 'Overrides the “Use as featured image” phrase.', 'theme_textdomain' ),
		'archives'					=> _x( 'Burger archives', 'The post type archive label used in nav menus.', 'theme_textdomain' ),
		'insert_into_item'			=> _x( 'Insert into burger', 'Overrides the “Insert into post” phrase.', 'theme_textdomain' ),
		'uploaded_to_this_item'		=> _x( 'Uploaded to this burger', 'Overrides the “Uploaded to this post” phrase.', 'theme_textdomain' ),
		'filter_items_list'			=> _x( 'Filter burgers list', 'Screen reader text for the filter links.', 'theme_textdomain' ),
		'items_list_navigation'		=> _x( 'Burgers list navigation', 'Screen reader text for the pagination.', 'theme_textdomain' ),
		'items_list'				=> _x( 'Burgers list', 'Screen reader text for the items list.', 'theme_textdomain' ),
	);

	$args = array(
		'labels'					=> $labels,
		'public'					=> true,
		'publicly_queryable'		=> true,
		'show_ui'					=> true,
		'show_in_menu'				=> true,
		'query_var'					=> true,
		'rewrite'					=> array('slug' => 'burgers', 'with_front' => 1),
		'has_archive'				=> false,
		'hierarchical'				=> true,
		'menu_position'				=> null,
		'menu_icon'					=> 'dashicons-smiley',
		'map_meta_cap'				=> true,
		'supports'					=> array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'burgers', $args );
}

add_action( 'init', 'register_cpt_burgers' );




/**
 * Register a custom post type called "testimonial".
 *
 * @see get_post_type_labels() for label keys.
 */

function register_cpt_testimonials() {
	$labels = array(
		'name'						=> _x( 'Testimonials', 'Post type general name', 'theme_textdomain' ),
		'singular_name'				=> _x( 'Testimonial', 'Post type singular name', 'theme_textdomain' ),
		'menu_name'					=> _x( 'Testimonials', 'Admin Menu text', 'theme_textdomain' ),
		'name_admin_bar'			=> _x( 'Testimonial', 'Add New on Toolbar', 'theme_textdomain' ),
		'add_new'					=> __( 'Add New', 'theme_textdomain' ),
		'add_new_item'				=> __( 'Add New Testimonial', 'theme_textdomain' ),
		'new_item'					=> __( 'New Testimonial', 'theme_textdomain' ),
		'edit_item'					=> __( 'Edit Testimonial', 'theme_textdomain' ),
		'view_item'					=> __( 'View Testimonial', 'theme_textdomain' ),
		'all_items'					=> __( 'All Testimonials', 'theme_textdomain' ),
		'search_items'				=> __( 'Search Testimonials', 'theme_textdomain' ),
		'parent_item_colon'			=> __( 'Parent Testimonials:', 'theme_textdomain' ),
		'not_found'					=> __( 'No testimonials found.', 'theme_textdomain' ),
		'not_found_in_trash'		=> __( 'No testimonials found in Trash.', 'theme_textdomain' ),
		'featured_image'			=> _x( 'Testimonial Image', 'Overrides the “Featured Image” phrase.', 'theme_textdomain' ),
		'set_featured_image'		=> _x( 'Set testimonial image', 'Overrides the “Set featured image” phrase.', 'theme_textdomain' ),
		'remove_featured_image'		=> _x( 'Remove testimonial image', 'Overrides the “Remove featured image” phrase.', 'theme_textdomain' ),
		'use_featured_image'		=> _x( 'Use as testimonial image', 'Overrides the “Use as featured image” phrase.', 'theme_textdomain' ),
		'archives'					=> _x( 'Testimonial archives', 'The post type archive label used in nav menus.', 'theme_textdomain' ),
		'insert_into_item'			=> _x( 'Insert into testimonial', 'Overrides the “Insert into post” phrase.', 'theme_textdomain' ),
		'uploaded_to_this_item'		=> _x( 'Uploaded to this testimonial', 'Overrides the “Uploaded to this post” phrase.', 'theme_textdomain' ),
		'filter_items_list'			=> _x( 'Filter testimonials list', 'Screen reader text for the filter links.', 'theme_textdomain' ),
		'items_list_navigation'		=> _x( 'Testimonials list navigation', 'Screen reader text for the pagination.', 'theme_textdomain' ),
		'items_list'				=> _x( 'Testimonials list', 'Screen reader text for the items list.', 'theme_textdomain' ),
	);

	$args = array(
		'labels'					=> $labels,
		'public'					=> true,
		'publicly_queryable'		=> true,
		'show_ui'					=> true,
		'show_in_menu'				=> true,
		'query_var'					=> true,
		'rewrite'					=> array('slug' => 'testimonials', 'with_front' => 1),
		'has_archive'				=> false,
		'hierarchical'				=> true,
		'menu_position'				=> null,
		'menu_icon'					=> 'dashicons-groups',
		'map_meta_cap'				=> true,
		'supports'					=> array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'testimonials', $args );
}

add_action( 'init', 'register_cpt_testimonials' );



/**
 * Register a custom post type called "chef".
 *
 * @see get_post_type_labels() for label keys.
 */

function register_cpt_chefs() {
	$labels = array(
		'name'						=> _x( 'Chefs', 'Post type general name', 'theme_textdomain' ),
		'singular_name'				=> _x( 'Chef', 'Post type singular name', 'theme_textdomain' ),
		'menu_name'					=> _x( 'Chefs', 'Admin Menu text', 'theme_textdomain' ),
		'name_admin_bar'			=> _x( 'Chef', 'Add New on Toolbar', 'theme_textdomain' ),
		'add_new'					=> __( 'Add New', 'theme_textdomain' ),
		'add_new_item'				=> __( 'Add New Chef', 'theme_textdomain' ),
		'new_item'					=> __( 'New Chef', 'theme_textdomain' ),
		'edit_item'					=> __( 'Edit Chef', 'theme_textdomain' ),
		'view_item'					=> __( 'View Chef', 'theme_textdomain' ),
		'all_items'					=> __( 'All Chefs', 'theme_textdomain' ),
		'search_items'				=> __( 'Search Chefs', 'theme_textdomain' ),
		'parent_item_colon'			=> __( 'Parent Chefs:', 'theme_textdomain' ),
		'not_found'					=> __( 'No chefs found.', 'theme_textdomain' ),
		'not_found_in_trash'		=> __( 'No chefs found in Trash.', 'theme_textdomain' ),
		'featured_image'			=> _x( 'Chef Image', 'Overrides the “Featured Image” phrase.', 'theme_textdomain' ),
		'set_featured_image'		=> _x( 'Set chef image', 'Overrides the “Set featured image” phrase.', 'theme_textdomain' ),
		'remove_featured_image'		=> _x( 'Remove chef image', 'Overrides the “Remove featured image” phrase.', 'theme_textdomain' ),
		'use_featured_image'		=> _x( 'Use as chef image', 'Overrides the “Use as featured image” phrase.', 'theme_textdomain' ),
		'archives'					=> _x( 'Chef archives', 'The post type archive label used in nav menus.', 'theme_textdomain' ),
		'insert_into_item'			=> _x( 'Insert into chef', 'Overrides the “Insert into post” phrase.', 'theme_textdomain' ),
		'uploaded_to_this_item'		=> _x( 'Uploaded to this chef', 'Overrides the “Uploaded to this post” phrase.', 'theme_textdomain' ),
		'filter_items_list'			=> _x( 'Filter chefs list', 'Screen reader text for the filter links.', 'theme_textdomain' ),
		'items_list_navigation'		=> _x( 'Chefs list navigation', 'Screen reader text for the pagination.', 'theme_textdomain' ),
		'items_list'				=> _x( 'Chefs list', 'Screen reader text for the items list.', 'theme_textdomain' ),
	);

	$args = array(
		'labels'					=> $labels,
		'public'					=> true,
		'publicly_queryable'		=> true,
		'show_ui'					=> true,
		'show_in_menu'				=> true,
		'query_var'					=> true,
		'rewrite'					=> array('slug' => 'team', 'with_front' => 1),
		'has_archive'				=> false,
		'hierarchical'				=> true,
		'menu_position'				=> null,
		'menu_icon'					=> 'dashicons-businessman',
		'map_meta_cap'				=> true,
		'supports'					=> array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'chefs', $args );
}

add_action( 'init', 'register_cpt_chefs' );