<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Awesome Theme' );
define( 'CHILD_THEME_URL', 'https://github.com/CarlosLanto/Genesis-Awesome-Theme' );
define( 'CHILD_THEME_VERSION', '0.2' );

/////	Load Necesary Files For Genesis Awesome Theme /////

//	Load GAT Function
include_once( get_stylesheet_directory() . '/lib/gat-functions.php');

//* Load Developers Tools
include_once( get_stylesheet_directory() . '/lib/dev-tools.php'); // DON'T USE ON LIVE SITE

//* Load Scritps (FontAwesome, PrettyPhoto, Bootstrap)
include_once( get_stylesheet_directory() . '/lib/scripts.php');

//* Load Genesis Snnipets
include_once( get_stylesheet_directory() . '/lib/functions/snippets.php');

//* Laod Shortcodes
include_once( get_stylesheet_directory() . '/lib/functions/shortcodes.php');

// Hooks after-entry widget area to single posts
add_action( 'genesis_entry_footer', 'gat_after_post'  ); 
function gat_after_post() {

    if ( ! is_singular( 'post' ) )
    	return;

    genesis_widget_area( 'after-entry', array(
		'before' => '<div class="after-entry widget-area"><div class="wrap">',
		'after'  => '</div></div>',
    ) );

}

// Register widget areas
genesis_register_sidebar( array(
	'id'          => 'home-top',
	'name'        => __( 'Home - Top', 'gat' ),
	'description' => __( 'This is the top section of the homepage.', 'gat' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-middle-left',
	'name'        => __( 'Home - Middle Left', 'gat' ),
	'description' => __( 'This is the middle left section of the homepage.', 'gat' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-middle-right',
	'name'        => __( 'Home - Middle Right', 'gat' ),
	'description' => __( 'This is the middle right section of the homepage.', 'gat' ),
) );genesis_register_sidebar( array(
	'id'          => 'home-middle-third-left',
	'name'        => __( 'Home - Middle Third Left', 'gat' ),
	'description' => __( 'This is the middle third left section of the homepage.', 'gat' ),
) );genesis_register_sidebar( array(
	'id'          => 'home-middle-third-middle',
	'name'        => __( 'Home - Middle Third Middle', 'gat' ),
	'description' => __( 'This is the middle third middle section of the homepage.', 'gat' ),
) );genesis_register_sidebar( array(
	'id'          => 'home-middle-third-right',
	'name'        => __( 'Home - Middle Third Right', 'gat' ),
	'description' => __( 'This is the middle third right section of the homepage.', 'gat' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-bottom',
	'name'        => __( 'Home - Bottom', 'gat' ),
	'description' => __( 'This is the bottom section of the homepage.', 'gat' ),
) );genesis_register_sidebar( array(
	'id'          => 'home-bottom-half-left',
	'name'        => __( 'Home - Bottom Half Left', 'gat' ),
	'description' => __( 'This is the bottom section of the homepage.', 'gat' ),
) );genesis_register_sidebar( array(
	'id'          => 'home-bottom-half-right',
	'name'        => __( 'Home - Bottom Half Right', 'gat' ),
	'description' => __( 'This is the bottom section of the homepage.', 'gat' ),
) );
genesis_register_sidebar( array(
	'id'          => 'after-entry',
	'name'        => __( 'After Entry', 'gat' ),
	'description' => __( 'This is the after entry section.', 'gat' ),
) );
