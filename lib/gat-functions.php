<?php

if ( ! defined( 'ABSPATH' ) ) exit( 'Cheatin&#8217; uh?' ); // Exit if accessed directly

/**
 *		Table of content
 *
 * 	01 - Force HTML5
 * 	02 - Genesis Responsive viewport
 * 	03 - Custom Background
 * 	04 - Custom Header
 * 	05 - Remove Genesis Admin Settings
 * 	06 - Add Images Sizes
 * 	07 - Genesis Post Formats
 *	08 - Shortcodes on Widgets
 * 	09 - Footer Widgets Areas
 * 	10 - Color Scheme Selection
 * 	11 - Genesis Connect for WooCommerce
 * 	12 - Unregister Default Layouts
 * 	13 - Unregister Default Sidebars
 * 	14 - Disable Genesis Widgets
 * 	15 - Disable 'Layout Settings' Meta-box from post/pages
 * 	16 - Disable 'Script' Meta-box from post/pages
 * 	
 */

/**
 * Force HTML5
 *
 * See: http://www.briangardner.com/code/add-html5-markup/
 */
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

/**
 * Adds <meta> tags for mobile responsiveness.
 *
 * See: http://www.briangardner.com/code/add-viewport-meta-tag/
 */
// add_theme_support( 'genesis-responsive-viewport' );

/**
 * Add support for custom backgrounds
 */
// add_theme_support( 'custom-background' );

/**
 * Add support for a custom header
 */
// add_theme_support( 'genesis-custom-header', array( 'width' => 960, 'height' => 100 ) );

/* Remove Genesis Admin Settings
------------------------------------------------------------------------*/

//** Remove Genesis in-post SEO Settings
// remove_action( 'admin_menu', 'genesis_add_inpost_seo_box' );

//** Remove Genesis Layout Settings
//remove_theme_support( 'genesis-inpost-layouts' );

//** Remove Genesis menu link
//remove_theme_support( 'genesis-admin-menu' );

//** Remove Genesis SEO Settings menu link
//remove_theme_support( 'genesis-seo-settings-menu' );

//** Add Image Sizes
//	add_image_size( 'Square', 200, 200, TRUE);
//	add_image_size( 'Featured Top', 760, 200, TRUE );

/**
 * Add Genesis post format support
 */
// add_theme_support( 'post-formats', array(
// 	'aside',
// 	'chat',
// 	'gallery',
// 	'image',
// 	'link',
// 	'quote',
// 	'status',
// 	'video',
// 	'audio'
// ));
// add_theme_support( 'genesis-post-format-images' );

/**
* Shortcodes on Widgets
 */
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Add Genesis footer widget areas
 */
add_theme_support( 'genesis-footer-widgets', 3 );

/**
 * Add Genesis theme color scheme selection theme option
 */
// add_theme_support(
// 	'genesis-style-selector',
// 	array(
// 		'gat-red' => 'Red',
// 		'gat-orange' => 'Orange'
// 	)
// );

/**
 * Declare WooCommerce support, using Genesis Connect for WooCommerce
 *
 * See: http://wordpress.org/plugins/genesis-connect-woocommerce/
 */
// add_theme_support( 'genesis-connect-woocommerce' );

/**
 * Unregister default Genesis layouts
 */
// genesis_unregister_layout( 'content-sidebar' );
// genesis_unregister_layout( 'sidebar-content' );
// genesis_unregister_layout( 'content-sidebar-sidebar' );
// genesis_unregister_layout( 'sidebar-sidebar-content' );
// genesis_unregister_layout( 'sidebar-content-sidebar' );
// genesis_unregister_layout( 'full-width-content' );

/**
 * Unregister default Genesis sidebars
 */
// unregister_sidebar( 'header-right' );
// unregister_sidebar( 'sidebar-alt' );
// unregister_sidebar( 'sidebar' );
// unregister_sidebar( 'home-middle-right' );
// unregister_sidebar( 'home-middle-left' );
// unregister_sidebar( 'home-middle-third-left' );
// unregister_sidebar( 'home-middle-third-middle' );
// unregister_sidebar( 'home-middle-third-right' );
// unregister_sibebar( 'home-bottom' );
// unregister_sidebar( 'home-bottom-half-left' );
// untegister_sidebar( 'home-bottom-half-right' );
// unregister_sidebar( 'after-entry' );

// add_action( 'widgets_init', 'gat_remove_genesis_widgets', 20 );
/**
 * Disable some or all of the default Genesis widgets.
 */
function gat_remove_genesis_widgets() {

	unregister_widget( 'Genesis_Featured_Page' );									// Featured Page
	unregister_widget( 'Genesis_User_Profile_Widget' );								// User Profile
	unregister_widget( 'Genesis_Featured_Post' );									// Featured Posts

}

// add_action( 'init', 'gat_remove_layout_meta_boxes' );
/**
 * Remove the Genesis 'Layout Settings' meta box for posts and/or pages.
 */
function gat_remove_layout_meta_boxes() {

	remove_post_type_support( 'post', 'genesis-layouts' );							// Posts
	remove_post_type_support( 'page', 'genesis-layouts' );							// Pages

}

// add_action( 'init', 'gat_remove_scripts_meta_boxes' );
/**
 * Remove the Genesis 'Scripts' meta box for posts and/or pages.
 */
function gat_remove_scripts_meta_boxes() {

	remove_post_type_support( 'post', 'genesis-scripts' );							// Posts
	remove_post_type_support( 'page', 'genesis-scripts' );							// Pages

}
