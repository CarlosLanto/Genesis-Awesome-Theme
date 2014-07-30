<?php

if ( ! defined( 'ABSPATH' ) ) exit( 'Cheatin&#8217; uh?' ); // Exit if accessed directly

/*
 	Be Clean!!
 	Here you can code Shortcodes o whatever stuff than make more awesome your site.
 */

/*		Shortcodes
----------------------------------------------------*/
/** Add alert box shortcodes */

	function gat_alert_box( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'color' => 'success'
	    ), $atts));
		
	   return '<div class="alert alert-'.$color.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('gat-box', 'gat_alert_box');

/** Add Buttons Shortcode */
	function gat_button( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'url' => '#',
			'target' => 'self',
			'color' => '',
			'size' => ''
	    ), $atts));
		
	 	return '<a class="btn btn-'.$color.' btn-'.$size.'" href="'.$url.'" target="_'.$target.'" type="button">' . do_shortcode($content) . '</a>';	}
add_shortcode('gat-btn', 'gat_button');

/** Add column shortcodes */

	function one_half_first() {
		return '<div class="one-half first"><p>';
	}
	add_shortcode("half first","one_half_first");

	function one_half() {
		return '<div class="one-half"><p>';
	}
	add_shortcode('half','one_half');

	function one_third_first() {
		return '<div class="one-third first"><p>';
	}
	add_shortcode("third first","one_third_first");

	function one_third() {
		return '<div class="one-third"><p>';
		}
	add_shortcode('third','one_third');

	function one_fourth_first() {
		return '<div class="one-fourth first"><p>';
	}
	add_shortcode("fourth first","one_fourth_first");

	function one_fourth() {
		return '<div class="one-fourth"><p>';
	}
	add_shortcode('fourth','one_fourth');

	function one_fifth_first() {
		return '<div class="one-fifth first"><p>';
	}
	add_shortcode("fifth first","one_fifth_first");

	function one_fifth() {
		return '<div class="one-fifth"><p>';
	}
	add_shortcode('fifth','one_fifth');

	function one_sixth_first() {
		return '<div class="one-sixth first"><p>';
	}
	add_shortcode("sixth first","one_sixth_first");

	function one_sixth() {
		return '<div class="one-sixth"><p>';
	}
	add_shortcode('sixth','one_sixth');

	function end_column() {
		return '</p></div>';
	}
	add_shortcode('end', 'end_column');

	function end_column_scal() {
		return '</div><br/>';
	}
	add_shortcode('end-scal','end_column_scal');
