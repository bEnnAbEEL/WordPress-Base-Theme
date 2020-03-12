<?php
/**
 * Functions for custom Gutenberg blocks
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Sample Theme
 * @since 1.0.0
 *
 */

/**
 * Register custom Gutenberg blocks category
 *
 */
function acf_block_categories($categories, $post) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' 	=> 'sample-blocks',
				'title' =>  __( 'Sample Theme Blocks', 'theme_textdomain' ),
				'icon'  => 'admin-generic',
			),
		)
	);
}
add_filter('block_categories', 'acf_block_categories', 10, 2);


/**
 * Register custom Gutenberg blocks
 *
 */
add_action('acf/init', 'theme_acf_init');
function theme_acf_init() {

	if( function_exists('acf_register_block') ) {

		// register call to action block
		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=>  __( 'CTA Block', 'theme_textdomain' ),
			'description'		=>  __( 'A custom call to action block', 'theme_textdomain' ),
			'render_callback'	=> 'acf_block_render_callback',
			'category'			=> 'sample-blocks',
			'icon'				=> 'welcome-widgets-menus',
			'mode'				=> 'edit',
			'keywords'			=> array( 'cta', 'cta' ),
		));

		// register notification block
		acf_register_block(array(
			'name'				=> 'notification',
			'title'				=>  __( 'Notification Block', 'theme_textdomain' ),
			'description'		=>  __( 'A custom notification block', 'theme_textdomain' ),
			'render_callback'	=> 'acf_block_render_callback',
			'category'			=> 'sample-blocks',
			'icon'				=> 'welcome-view-site',
			'mode'				=> 'edit',
			'keywords'			=> array( 'notification', 'notification' ),
		));

		// register testimonial block
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=>  __( 'Testimonial Block', 'theme_textdomain' ),
			'description'		=>  __( 'A custom testimonial block', 'theme_textdomain' ),
			'render_callback'	=> 'acf_block_render_callback',
			'category'			=> 'sample-blocks',
			'icon'				=> 'tagcloud',
			'mode'				=> 'edit',
			'keywords'			=> array( 'testimonial', 'testimonial' ),
		));

	}
}

/**
 * Reder custom Gutenberg blocks
 *
 */
function acf_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the blocks folder
	if( file_exists( get_theme_file_path("/blocks/block-{$slug}.php") ) ) {
		include( get_theme_file_path("/blocks/block-{$slug}.php") );
	}
}
