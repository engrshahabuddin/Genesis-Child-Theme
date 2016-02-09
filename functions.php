<?php

/**
 * Theme customizations
 *
 * @package      ThemeName
 * @author       DevsIT Limited
 * @link         http://www.devsit.com/
 * @copyright    Copyright (c) 2016, DevsIT Limited
 * @license      GPL-2.0+
 */

// Load child theme textdomain.
load_child_theme_textdomain( 'textdomain' );

add_action( 'genesis_setup', 'themeName_setup',15 );
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
   
   // Add HTML5 markup structure.
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );
	
   // Add viewport meta tag for mobile browsers.
    add_theme_support( 'genesis-responsive-viewport' );
	
   // Add theme support for accessibility.
    add_theme_support( 'genesis-accessibility', array(
	'404-page',
	'drop-down-menu',
	'headings',
	'rems',
	'search-form',
	'skip-links',
      ) );

     // Add theme support for footer widgets.
      add_theme_support( 'genesis-footer-widgets', 3 );
      

	// Unregister layouts that use secondary sidebar.
	genesis_unregister_layout( 'content-sidebar-sidebar' );
	genesis_unregister_layout( 'sidebar-content-sidebar' );
	genesis_unregister_layout( 'sidebar-sidebar-content' );

	// Unregister secondary sidebar.
	unregister_sidebar( 'sidebar-alt' );
	
}
