<?php 

/**
 * Script Register and Enqueue
 */

/*
Scripts
---------------------------------------------------------------------------------------------------- */

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );
}

//* Enqueue Custom Css, Js and Font Awesome
add_action('wp_enqueue_scripts', 'gat_custom_scripts' );
function gat_custom_scripts(){
		//* CSS's
	wp_enqueue_style( 'gat-font-awesome', get_bloginfo( 'stylesheet_directory' ) . '/lib/css/font-awesome.min.css', array(), '4.1.0' );
	wp_enqueue_style( 'bootstrap', get_bloginfo( 'stylesheet_directory' ). '/lib/css/bootstrap.css');
	//wp_enqueue_style( 'bootstrap-theme', get_bloginfo( 'stylesheet_directory' ). '/lib/css/bootstrap-theme.min.css' );
		//* JS's
	wp_enqueue_script( 'bootstrap-js', get_bloginfo( 'stylesheet_directory'). '/lib/js/bootstrap.min.js');
	wp_enqueue_script( 'jquery-2.1.1', get_bloginfo( 'stylesheet_directory'). '/lib/js/jquery-2.1.1.min.js');
}