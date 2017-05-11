<?php
/**
 * Largo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Largo
 */

if ( ! function_exists( 'innlabs_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function innlabs_setup() {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'global' => esc_html__( 'Global', 'largo' ),
	) );

}
endif;
add_action( 'after_setup_theme', 'innlabs_setup' );

/**
 * Enqueue scripts and styles.
 */
function innlabs_scripts() {
	wp_enqueue_style( 'innlabs-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');
	wp_register_script('jquery', "https" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-3.2.1.min.js", false, null);
	wp_enqueue_script('jquery');

	if ( is_front_page() && is_home() ) {
		wp_enqueue_script( 'labs-home', get_stylesheet_directory_uri() . '/js/labs-home.js', array(), '20151215', true );
	}

	wp_enqueue_script( 'innlabs-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array( 'jquery' ), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'innlabs_scripts' );

function labs_addexcerpt() {
add_meta_box('postexcerpt', __('Excerpt'), 'post_excerpt_meta_box', 'page', 'normal', 'core');
}
add_action( 'admin_menu', 'labs_addexcerpt' );
