<?php
/**
 * Bootstrap v3.3.5
 * The most popular front-end framework for developing responsive, mobile first projects on the web.
 *
 * @link http://getbootstrap.com/
 *
 * @package WordPress
 * @subpackage OpenTute+
 */
 
/**
 * opentute_register_style_bootstrap
 */
function opentute_register_style_bootstrap() {
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/inc/bootstrap/bootstrap/css/bootstrap.min.css', array(), '3.3.5', 'all' );
}
add_action( 'wp_enqueue_scripts', 'opentute_register_style_bootstrap' );

/**
 * opentute_register_script_bootstrap
 */
function opentute_register_script_bootstrap() {
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/inc/bootstrap/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.3.5', true );
}
add_action( 'wp_enqueue_scripts', 'opentute_register_script_bootstrap' );
