<?php
/**
 * Theme setup file
 *
 * @package Studio_Science_Boilerplate
 */

if ( ! function_exists( 'studioscienceboilerplate_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function studioscienceboilerplate_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Studio Science Boilerplate, use a find and replace
		 * to change 'studioscienceboilerplate' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'studioscienceboilerplate', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'studioscienceboilerplate' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}
endif;
add_action( 'after_setup_theme', 'studioscienceboilerplate_setup' );


/**
 * Enqueue scripts and styles.
 */
function studioscienceboilerplate_scripts() {
	wp_enqueue_style( 'studioscienceboilerplate-style', get_stylesheet_uri() );

	wp_enqueue_script( 'studioscienceboilerplate-vendors', get_template_directory_uri() . '/js/vendors.min.js', array(), '20180312', true );

	wp_enqueue_script( 'studioscienceboilerplate-main', get_template_directory_uri() . '/js/main.min.js', array(), '20180312', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'studioscienceboilerplate_scripts' );

/**
Require Extended CPTs https://github.com/johnbillion/extended-cpts
 */
require_once 'extended-cpts/extended-cpts.php';

/*
Load Custom Post Types
Extended CPTs https://github.com/johnbillion/extended-cpts/wiki
*/
function load_custom_post_types() {

}
add_action('init', 'load_custom_post_types');

/*
Load Custom Taxonomies
Extended Taxonomies https://github.com/johnbillion/extended-cpts/wiki
*/
function load_custom_taxonomies() {

}
add_action('init', 'load_custom_taxonomies');
