<?php
/**
 * Calder theme functions.
 *
 * @package Calder
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup: editor styles so the editor looks like the front end.
 */
function calder_setup() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'calder_setup' );

/**
 * Front-end stylesheet (block styles and a few layout details).
 */
function calder_enqueue_styles() {
	wp_enqueue_style(
		'calder-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'calder_enqueue_styles' );

/**
 * Block styles available in the editor's "Styles" panel.
 */
function calder_register_block_styles() {
	register_block_style( 'core/group', array( 'name' => 'card', 'label' => __( 'Card', 'calder' ) ) );
	register_block_style( 'core/list', array( 'name' => 'checklist', 'label' => __( 'Checklist', 'calder' ) ) );
	register_block_style( 'core/list', array( 'name' => 'steps', 'label' => __( 'Steps', 'calder' ) ) );
	register_block_style( 'core/table', array( 'name' => 'price-list', 'label' => __( 'Price list', 'calder' ) ) );
	register_block_style( 'core/table', array( 'name' => 'hours', 'label' => __( 'Opening hours', 'calder' ) ) );
}
add_action( 'init', 'calder_register_block_styles' );

/**
 * Pattern category so all Calder sections are easy to find.
 */
function calder_register_pattern_category() {
	register_block_pattern_category( 'calder', array( 'label' => __( 'Calder sections', 'calder' ) ) );
}
add_action( 'init', 'calder_register_pattern_category' );
