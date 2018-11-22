<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// custom login for theme
function my_custom_login_logo() {
	echo 
	'<style type="text/css">                                                                   
		body.login div#login h1 a { 
			background-image:url('.get_stylesheet_directory_uri().'../inhabitent_assets/images/logos/inhabitent-logo-text-dark.svg) !important; 
			height: 65px;
			width: 320px;
			background-size: 320px 65px !important;
			padding-bottom: 30px !important; 
		}                            
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

add_filter( 'getarchives_where', function ( $where )
{
    $where = str_replace( "post_type = 'post'", "post_type IN ( 'journal' )", $where );
    return $where;
});