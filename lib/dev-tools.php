<?php

if ( ! defined( 'ABSPATH' ) ) exit( 'Cheatin&#8217; uh?' ); // Exit if accessed directly

/**
 * Easily see the number of database queries made to load your page in your footer.
 *
 * See: http://wp-snippets.com/show-number-of-queries-and-page-load-time/
 *
 * @since 2.0.0
 */

add_action( 'wp_footer', 'gat_query_stats' );
	function gat_query_stats() {
		echo get_num_queries() . ' queries in ' . timer_stop(1) . ' seconds.';
	}

/**
 * Easily take your site down for maintenance, giving a 503 message for all non-admins.
 *
 * See: http://wpdaily.co/top-10-snippets/
 */

// add_action( 'get_header', 'gat_maintenance_mode' );
function gat_maintenance_mode() {

	if( !(is_user_logged_in() && current_user_can( 'manage_options' ) ) ) {
		wp_die( 'Down for maintenance, please come back soon.', 'Down for maintenance, please come back soon.', array('response' => '503'));
	}

}


/**
* Redirect user after login
*
* See: http://wp-snippets.com/redirect-user-after-login/
*/

// add_action('admin_init','redirect_user_on_role');

	function redirect_user_on_role() { 
		//retrieve current user info global $current_user; get_currentuserinfo(); 
		//If login user role is Subscriber if ($current_user->user_level == 0)
		{
			wp_redirect( home_url() ); exit;
		}
			//If login user role is Contributor
			else if ($current_user->user_level > 1)
			{
				wp_redirect( home_url() ); exit;
			}
			//If login user role is Editor
			else if ($current_user->user_level >8)
			{
				wp_redirect( home_url() ); exit;
			}
			// For other rolse
			else
			{
			$redirect_to = 'http://google.com/';
				return $redirect_to;
			}
	}

/**
 * Remove Wordpress Version
 */

// add_filter('the_generator', 'gat_remove_version');
	function gat_remove_version() {
		return '';
	}



/**
 * Clear all transients with one click
 */

add_action( 'admin_bar_menu', 'gat_clear_transients_node', 99 );
	function gat_clear_transients_node( $wp_admin_bar ) {
		if( !is_admin() || !current_user_can('manage_options') )
			return;

		global $wpdb;

		if( isset($_GET['clear-transients']) && 1 == $_GET['clear-transients'] ) {
			$wpdb->query( "DELETE FROM `$wpdb->options` WHERE `option_name` LIKE ('_transient_%') OR `option_name` LIKE ('_transient_timeout_%')" );
		}

		$count = $wpdb->query( "SELECT `option_name` FROM `$wpdb->options` WHERE `option_name` LIKE ('_transient_%')" );

		$args = array(
			'id' => 'clear-transients',
			'title' => 'Clear Transients (' . $count . ')',
			'parent' => 'site-name',
			'href' => '?clear-transients=1'
		);

		$wp_admin_bar->add_node( $args );

	}