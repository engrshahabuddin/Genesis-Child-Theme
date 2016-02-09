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
		//
	}
	// Add call to action area if "Call to Action" widget area is active.
	if ( $home_sidebars['call_to_action'] ) {
		//
	}

}

genesis();
