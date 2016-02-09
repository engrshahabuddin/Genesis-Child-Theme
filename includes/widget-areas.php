<?php
/**
 * Register widget areas
 *
 * @package      themeName
 * @author       DevsIT Limited
 * @link         http://www.devsit.com/
 * @copyright    Copyright (c) 2016, DevsIT Limited
 * @license      GPL-2.0+
 */

// Register front page widget areas
genesis_register_sidebar( array(
	'id'            => 'home-welcome',
	'name'          => __( 'Home Welcome', 'themeName' ),
	'description'   => __( 'This is a home widget area that will show on the front page', 'themeName' ),
) );
genesis_register_sidebar( array(
	'id'            => 'call-to-action',
	'name'          => __( 'Call to Action', 'themeName' ),
	'description'   => __( 'This is a call to action widget area that will show on the front page', 'themeName' ),
) );
