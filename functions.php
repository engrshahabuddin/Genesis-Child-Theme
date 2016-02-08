<?php

/**
 * Theme customizations
 *
 * @package      ThemeName
 * @author       CoderTunes
 * @link         http://www.codertunes.com/
 * @copyright    Copyright (c) 2016, CoderTunes
 * @license      GPL-2.0+
 */

// Load child theme textdomain.
load_child_theme_textdomain( 'textdomain' );

add_action( 'genesis_setup', 'themeName_setup' );
/**
 * Theme setup.
 *
 * Attach all of the site-wide functions to the correct hooks and filters. All
 * the functions themselves are defined below this setup function.
 *
 * @since 1.0.0
 */
function themeName_setup() {  
  // Define theme constants.
	define( 'CHILD_THEME_NAME', 'ThemeName' );
	define( 'CHILD_THEME_URL', 'https://github.com/engrshahabuddin/Genesis-Child-Theme' );
	define( 'CHILD_THEME_VERSION', '1.0.0' );
}
