<?php

/**
 * Scripts
 *
 * @package      First Fed Theme
 * @since        1.0
 * @link         https://github.com/DevWellingtonStudio/first-fed-theme
 * @author       Wellington Studio
 * @copyright    Copyright (c) 2020, Wellington Studio
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

// Theme Scripts & Stylesheet
add_action( 'wp_enqueue_scripts', 'bfg_theme_scripts' );
function bfg_theme_scripts() {
	$version = wp_get_theme()->Version;
	if ( ! is_admin() ) {
		// Disable the superfish script
		wp_deregister_script( 'superfish' );
		wp_deregister_script( 'superfish-args' );

		// Register Popper JS and enqueue it
		wp_register_script( 'app-popper-js', BFG_THEME_JS . 'popper.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-popper-js' );

		// Register Bootstrap JS and enqueue it
		wp_register_script( 'app-bootstrap-js', BFG_THEME_JS . 'bootstrap.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-bootstrap-js' );

		// Register theme JS and enqueue it
		wp_register_script( 'app-js', BFG_THEME_JS . 'app.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-js' );


		wp_register_script('font-awesome', 'https://kit.fontawesome.com/76342ff491.js', array(), true );
		wp_enqueue_script('font-awesome');

		// Deregister jQuery and use Bootstrap supplied version
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', BFG_THEME_JS . 'jquery.slim.min.js', array(), $version, true );
		wp_enqueue_script( 'jquery' );

		wp_register_script( 'parallax-min-js', BFG_THEME_JS . 'parallax.min.js', array(), $version, true );
		wp_enqueue_script( 'parallax-min-js' );

		wp_register_script( 'custom-js', BFG_THEME_JS . 'custom.js', array(), $version, true );
		wp_enqueue_script( 'custom-js' );

		// Parallax JS
		wp_register_script( 'parallax-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'parallax-jquery' );

	}
}

// Editor Styles
add_action( 'init', 'bfg_custom_editor_css' );
function bfg_custom_editor_css() {
	add_editor_style( get_stylesheet_uri() );
}

// Loads JS for Custom Meta Fields Image Upload
	add_action( 'admin_enqueue_scripts', 'bgrid_image_enqueue' );
	function bgrid_image_enqueue() {
		// Registers and enqueues the required javascript for image management within wp dashboard.
		wp_register_script( 'meta-box-image', BFG_THEME_JS  . 'meta.js', array( 'jquery' ) );
		wp_localize_script( 'meta-box-image', 'meta_image',
			array(
				'title' => __( 'Choose or Upload an Image', 'firstfed-for-genesis' ),
				'button' => __( 'Use this image', 'firstfed-for-genesis' ),
			)
		);
		wp_enqueue_script( 'meta-box-image' );



		// Register Bootstrap JS and enqueue it
		wp_register_script( 'app-bootstrap-js', BFG_THEME_JS . 'bootstrap.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'app-bootstrap-js' );

		wp_register_style('admin-bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '',  'all');
		wp_enqueue_style('admin-bootstrap');


	}



