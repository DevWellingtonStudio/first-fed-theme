<?php
/**
 * Customizer
 *
 * @package      First Fed Theme
 * @since        1.0
 * @link         https://github.com/DevWellingtonStudio/first-fed-theme
 * @author       Wellington Studio
 * @copyright    Copyright (c) 2017, Rotsen Mark Acob
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

add_action( 'customize_register', function( $wp_customize ) {

	// Add Default Settings
	$wp_customize->add_setting( 'firstfed-for-genesis', array(
		'capability' => 'edit_theme_options',
		'type' => 'theme_mod'
	) );

	// Add Bootstrap Panel
	$wp_customize->add_panel( 'bootstrap', array(
		'title' => __( '1st Fed for Genesis', 'firstfed-for-genesis' ),
		'priority' => 100
	) );

	// Add Navigation Section
	$wp_customize->add_section( 'navigation', array(
		'title' => __( 'Navigation Settings', 'firstfed-for-genesis' ),
		'priority' => 10,
		'panel' => 'bootstrap'
	) );

	//* Add Navigation Controls
	$wp_customize->add_setting( 'navposition', array(
		'default' => ''
	) );

	$wp_customize->add_control( 'navposition', array(
		'type' => 'select',
		'priority' => 10,
		'label' => __( 'Navigation Position', 'firstfed-for-genesis' ),
		'section' => 'navigation',
		'choices' => array(
			'' => __( 'Default', 'firstfed-for-genesis' ),
			'sticky-top' => __( 'Sticky Top', 'firstfed-for-genesis' ),
			'fixed-top' => __( 'Fixed Top', 'firstfed-for-genesis' ),
			'fixed-bottom' => __( 'Fixed Bottom', 'firstfed-for-genesis' ),
		)
	) );

	$wp_customize->add_setting( 'navcontainer', array(
		'default' => 'lg'
	) );

	// Navigation Container
	$wp_customize->add_control( 'navcontainer', array(
		'type' => 'select',
		'priority' => 20,
		'label' => __( 'Navigation Container', 'firstfed-for-genesis' ),
		'section' => 'navigation',
		'choices' => array(
			'sm' => __( 'Small', 'firstfed-for-genesis' ),
			'md' => __( 'Medium', 'firstfed-for-genesis' ),
			'lg' => __( 'Large', 'firstfed-for-genesis' ),
			'xl' => __( 'Extra Large', 'firstfed-for-genesis' )
		)
	) );

	// Navigation Color
	$wp_customize->add_setting( 'navcolor', array(
		'default' => 'dark'
	) );

	$wp_customize->add_control( 'navcolor', array(
		'type' => 'select',
		'priority' => 30,
		'label' => __( 'Navigation Background', 'firstfed-for-genesis' ),
		'section' => 'navigation',
		'choices' => array(
			'light' => __( 'Light', 'firstfed-for-genesis' ),
			'dark' => __( 'Dark', 'firstfed-for-genesis' ),
			'primary' => __( 'Primary', 'firstfed-for-genesis' )
		)
	) );

	// Navigation Extras
	$wp_customize->add_setting( 'navextra', array(
		'default' => 'search'
	) );

	$wp_customize->add_control( 'navextra', array(
		'type' => 'select',
		'priority' => 40,
		'label' => __( 'Navigation Extras', 'firstfed-for-genesis' ),
		'section' => 'navigation',
		'choices' => array(
			'' => __( 'None', 'firstfed-for-genesis' ),
			'date' => __( 'Date', 'firstfed-for-genesis' ),
			'search' => __( 'Search Form', 'firstfed-for-genesis' ),
			'widget' => __( 'Widget Area', 'firstfed-for-genesis' )
		)
	) );

	// Container Layout
	$wp_customize->add_section( 'container-layout', array(
		'title' => __( 'Container Layout', 'firstfed-for-genesis' ),
		'priority' => 40,
		'panel' => 'bootstrap'
	) );

	$wp_customize->add_setting( 'container', array(
		'default' => 'boxed',
	) );

	$wp_customize->add_control( 'container', array(
		'type' => 'select',
		'priority' => 30,
		'label' => __( 'Container Settings', 'firstfed-for-genesis' ),
		'section' => 'container-layout',
		'choices' => array(
			'fluid' => __( 'Fluid Layout', 'firstfed-for-genesis' ),
			'boxed' => __( 'Boxed Layout', 'firstfed-for-genesis' )
		)
	) );

	// Footer Section
	$wp_customize->add_section( 'footer', array(
		'title' => __( 'Footer Section', 'firstfed-for-genesis' ),
		'priority' => 40,
		'panel' => 'bootstrap'
	) );

	$wp_customize->add_setting( 'footerwidgetbg', array(
		'default' => 'dark'
	) );

	$wp_customize->add_control( 'footerwidgetbg', array(
		'type' => 'select',
		'priority' => 30,
		'label' => __( 'Footer Widget Background', 'firstfed-for-genesis' ),
		'section' => 'footer',
		'choices' => array(
			'light' => __( 'Light', 'firstfed-for-genesis' ),
			'dark' => __( 'Dark', 'firstfed-for-genesis' ),
			'primary' => __( 'Primary', 'firstfed-for-genesis' )
		)
	) );

	$wp_customize->add_setting( 'footerbg', array(
		'default' => 'dark'
	) );

	$wp_customize->add_control( 'footerbg', array(
		'type' => 'select',
		'priority' => 30,
		'label' => __( 'Footer Background', 'firstfed-for-genesis' ),
		'section' => 'footer',
		'choices' => array(
			'light' => __( 'Light', 'firstfed-for-genesis' ),
			'dark' => __( 'Dark', 'firstfed-for-genesis' ),
			'primary' => __( 'Primary', 'firstfed-for-genesis' )
		)
	) );
} );
