<?php 

/**
 * Genesis most useful snippets.
 *
 * Contains the most popular Genesis snippets used. Just uncomment the lines deleting '//'
 *
 * 	Code Clean is sexy :)
 */

/** Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) exit( 'Cheatin&#8217; uh?' );

/**
 * 		Table of content
 *
 *	01 - Author box
 *	02 - Breadcrumbs
 *	03 - Force Layout
 *	04 - Entry Header
 *	05 - Entry Content
 *	06 - Entry Footer
 *	07 - Comments
 *	08 - Search Form
 *	09 - 
 *	10 -
 *	
 */

/*
		Author Box
---------------------------------------------------------------------------*/

//*** Remove the author box on single posts
// remove_action( 'genesis_after_post', 'genesis_do_author_box_single' );

//*** Display author box on single posts
// add_filter( 'get_the_author_genesis_author_box_single', '__return_true' );

//*** Display author box on archive pages
// add_filter( 'get_the_author_genesis_author_box_archive', '__return_true' );

//*** Customize the author box title
add_filter( 'genesis_author_box_title', 'custom_author_box_title' );
function custom_author_box_title() {
	return '<h4>Awesome history about me</h4>';
}

//*** Modify the size of the Gravatar in the author box 
add_filter( 'genesis_author_box_gravatar_size', 'author_box_gravatar_size' );
function author_box_gravatar_size( $size ) {
	return '90'; // Default is 80
}

/*
	Breadcrumbs
---------------------------------------------------------------------------*/

//*** Reposition the breadcrumbs
// remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
// add_action( 'genesis_after_header', 'genesis_do_breadcrumbs' );

/*
	Force Layout
---------------------------------------------------------------------------*/

//*** Force content-sidebar layout setting
// add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar' );
 
//*** Force sidebar-content layout setting
// add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_content' );
 
//*** Force content-sidebar-sidebar layout setting
// add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_content_sidebar_sidebar' );
 
//*** Force sidebar-sidebar-content layout setting
// add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_sidebar_content' );
 
//*** Force sidebar-content-sidebar layout setting
// add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_content_sidebar' );
 
//*** Force full-width-content layout setting
// add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

/*
	Entry Header
---------------------------------------------------------------------------*/

//*** Customize the entry meta in the entry header (requires HTML5 theme support)
// add_filter( 'genesis_post_info', 'gat_post_info_filter' );
function gat_post_info_filter($post_info) {
	$post_info = '[post_date] por [post_author_posts_link] [post_comments] [post_edit]';
	return $post_info;
}

//*** Remove the entry header markup (requires HTML5 theme support)
// remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
// remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

//*** Remove the entry meta in the entry header (requires HTML5 theme support)
// remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

//*** Remove the entry title (requires HTML5 theme support)
// remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

//*** Remove the post format image (requires HTML5 theme support)
// remove_action( 'genesis_entry_header', 'genesis_do_post_format_image', 4 );

/*
	Entry Content
---------------------------------------------------------------------------*/

//*** Add post navigation (requires HTML5 theme support)
add_action( 'genesis_entry_footer', 'genesis_prev_next_post_nav' );

//*** Remove the post content (requires HTML5 theme support)
// remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

//*** Remove the post image (requires HTML5 theme support)
// remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );

//*** Remove the post navigation (requires HTML5 theme support)
// remove_action( 'genesis_entry_content', 'genesis_do_post_content_nav', 12 );

//*** Remove the post permalink (requires HTML5 theme support)
// remove_action( 'genesis_entry_content', 'genesis_do_post_permalink', 14 );


/*
	Entry Footer
---------------------------------------------------------------------------*/

//*** Customize the entry meta in the entry footer (requires HTML5 theme support)
// add_filter( 'genesis_post_meta', 'gat_post_meta_filter' );
function gat_post_meta_filter($post_meta) {
	$post_meta = '[post_categories] [post_tags]';
	return $post_meta;
}

//*** Remove the entry footer markup (requires HTML5 theme support)
// remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
// remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );

//*** Remove the entry meta in the entry footer (requires HTML5 theme support)
// remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

/*
	Comments
---------------------------------------------------------------------------*/

//*** Modify the comment link text in comments
// add_filter( 'genesis_post_info', 'gat_post_info_filter' );
function gat_comments_count( $post_info ) {
	return '[post_comments zero="Leave a Comment" one="1 Comment" more="% Comments"]';
}

//*** Modify comments title text in comments
add_filter( 'genesis_title_comments', 'gat_genesis_title_comments' );
function gat_genesis_title_comments() {
	$title = '<h3>Awesome Discussion</h3>';
	return $title;
}

//*** Modify trackbacks title in comments
// add_filter( 'genesis_title_pings', 'gat_title_pings' );
function gat_title_pings() {
echo '<h3>Trackbacks</h3>';
}

//*** Modify the speak your mind title in comments
// add_filter( 'comment_form_defaults', 'gat_comment_form_defaults' );
function gat_comment_form_defaults( $defaults ) {
	$defaults['title_reply'] = __( 'Leave a Comment' );
	return $defaults;
}

//*** Modify the author says text in comments
// add_filter( 'comment_author_says_text', 'gat_comment_author_says_text' );
function gat_comment_author_says_text() {
	return 'author says';
}

//*** Modify the size of the Gravatar in comments
// add_filter( 'genesis_comment_list_args', 'gat_comments_gravatar' );
function gat_comments_gravatar( $args ) {
	$args['avatar_size'] = 96;
	return $args;
}

//*** Customize the submit button text in comments
// add_filter( 'comment_form_defaults', 'gat_comment_submit_button' );
function gat_comment_submit_button( $defaults ) {
       $defaults['label_submit'] = __( 'Submit', 'custom' );
       return $defaults;
}

//*** Add a comment policy box in comments
// add_action( 'genesis_after_comments', 'gat_comment_policy' );
function gat_comment_policy() {
	if ( is_single() && !is_user_logged_in() && comments_open() ) {
	?>
	<div class="comment-policy-box">
		<p class="comment-policy"><small><strong>Comment Policy:</strong>Your words are your own, so be nice and helpful if you can. Please, only use your real name and limit the amount of links submitted in your comment.</small></p>
	</div>
	<?php
	}
}

/*
	Search Form
---------------------------------------------------------------------------*/

//*** Customize search form input box text
add_filter( 'genesis_search_text', 'sp_search_text' );
function sp_search_text( $text ) {
	return esc_attr( 'Search my blog...' );
}

//*** Customize search form input button text
add_filter( 'genesis_search_button_text', 'sp_search_button_text' );
function sp_search_button_text( $text ) {
	return esc_attr( 'Go' );
}

//*** Customize search form label
// add_filter( 'genesis_search_form_label', 'sp_search_form_label' );
function sp_search_form_label ( $text ) {
	return esc_attr( 'Custom Label' );
}

