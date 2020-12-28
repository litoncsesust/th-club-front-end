<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package fiftytwo
 * @since fiftytwo 1.0.0
 */

if ( ! function_exists( 'fiftytwo_theme_support' ) ) :
	function fiftytwo_theme_support() {
		load_theme_textdomain( 'fiftytwo', get_template_directory() . '/languages' );
		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		add_theme_support( 'menus' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		add_theme_support( 'editor-styles' );
		add_editor_style( get_stylesheet_directory_uri() . '/dist/assets/css/editor.css' );

		// Add foundation.css as editor style https://codex.wordpress.org/Editor_Style
		// add_editor_style( 'dist/assets/css/' . fiftytwo_asset_path( 'editor.css' ) );
	}

	add_action( 'after_setup_theme', 'fiftytwo_theme_support' );
endif;

function add_categories_to_page() {
	register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'add_categories_to_page' );

function url_last_part() {
	$r = explode('/', $_SERVER['REQUEST_URI']);
	return $r[3];
}

function mail_set_content_type(){
	return "text/html";
}
add_filter( 'wp_mail_content_type','mail_set_content_type' );