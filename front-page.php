<?php

/**
 * Front page template
 *
 * @package      ThemeName
 * @author       DevsIT Limited
 * @link         http://www.devsit.com/
 * @copyright    Copyright (c) 2016, DevsIT Limited
 * @license      GPL-2.0+
 */

add_action( 'genesis_meta', 'themeName_home_page_setup' );
/**
 * Set up the homepage layout by conditionally loading sections when widgets
 * are active.
 *
 * @since 1.0.0
 */
function themeName_home_page_setup() {

	$home_sidebars = array(
		'home_welcome' 	   => is_active_sidebar( 'home-welcome' ),
		'call_to_action'   => is_active_sidebar( 'call-to-action' ),
	);

	// Return early if no sidebars are active.
	if ( ! in_array( true, $home_sidebars ) ) {
		return;
	}

	// Add home welcome area if "Home Welcome" widget area is active.
	if ( $home_sidebars['home_welcome'] ) {
		add_action( 'genesis_after_header', 'themeName_add_home_welcome' );
	}

	// Add call to action area if "Call to Action" widget area is active.
	if ( $home_sidebars['call_to_action'] ) {
		add_action( 'genesis_after_header', 'themeName_add_call_to_action' );
	}

}

/**
 * Display content for the "Home Welcome" section.
 *
 * @since 1.0.0
 */
function themeName_add_home_welcome() {

	genesis_widget_area( 'home-welcome',
		array(
			'before' => '<div class="home-welcome"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

/**
 * Display content for the "Call to Action" section.
 *
 * @since 1.0.0
 */
function themeName_add_call_to_action() {

	genesis_widget_area( 'call-to-action',
		array(
			'before' => '<div class="call-to-action"><div class="wrap">',
			'after' => '</div></div>',
		)
	);
}

genesis();
