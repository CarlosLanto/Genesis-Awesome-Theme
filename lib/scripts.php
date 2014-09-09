<?php 
/**
 * Script Register and Enqueue
 */

if ( ! defined( 'ABSPATH' ) ) exit( 'Cheatin&#8217; uh?' ); // Exit if accessed directly

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
	wp_enqueue_style( 'gat-font-awesome', get_bloginfo( 'stylesheet_directory' ) . '/lib/css/font-awesome.min.css', array(), '4.2.0' );
	wp_enqueue_style( 'animate', get_bloginfo( 'stylesheet_directory' ). '/lib/css/animate.min.css');
	wp_enqueue_style( 'bootstrap', get_bloginfo( 'stylesheet_directory' ). '/lib/css/bootstrap.css');
	//wp_enqueue_style( 'bootstrap-theme', get_bloginfo( 'stylesheet_directory' ). '/lib/css/bootstrap-theme.min.css' );
		//* JS's
	wp_enqueue_script( 'jquery-2.1.1', get_bloginfo( 'stylesheet_directory') . '/lib/js/jquery-2.1.1.min.js');
	wp_enqueue_script( 'bootstrap-js', get_bloginfo( 'stylesheet_directory') . '/lib/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'wow', get_bloginfo( 'stylesheet_directory') . '/lib/js/wow.min.js', array(), '', true );
}

//* Enqueue script in Footer to activate WOW.js
add_action('wp_enqueue_scripts', 'sb_init_wow_in__footer');
function sb_init_wow_in__footer() {
	add_action( 'print_footer_scripts', 'wow_init' );
}
 
//* Add JavaScript before </body>
function wow_init() { ?>
	<script>
		new WOW().init();
	</script>
<?php }
