<?php
/**
 * Theme filters and actions
 *
 * @package Studio_Science_Boilerplate
 */


 /**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

function studioscienceboilerplate_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'studioscienceboilerplate_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function studioscienceboilerplate_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'studioscienceboilerplate_pingback_header' );

/**
 * Add ACF Local json files.
 */ 
function studioscienceboilerplate_acf_json_save_point( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
       
    // return
    return $path;   
}
add_filter('acf/settings/save_json', 'studioscienceboilerplate_acf_json_save_point');