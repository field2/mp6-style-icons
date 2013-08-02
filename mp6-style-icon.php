<?php
/*
Plugin Name: MP6 Style Icon
Plugin URI: http://bendunkle.com/vector-icon
Description: This is a bogus plugin to figure out a recommendation for plugin authors who want to include their own personalized icons that will match the mp6 style
Version: 1.0
Author: Ben Dunkle
Author URI: http://bendunkle.com
License: GPL2
*/

add_action( 'admin_menu', 'mp6_icon_add_menu_item' );
function mp6_icon_add_menu_item() {
	add_menu_page(
		'custom menu title',
		'MP6 Icon',
		'manage_options',
		'mp6-style-icon',
		create_function( null, null ),
		'none',
		6
	);
}

add_action( 'admin_head', 'mp6_icon_styles' );
function mp6_icon_styles() { ?>
	<style type="text/css">
		#toplevel_page_mp6-style-icon .wp-menu-image {
			background-image: url('/wp-content/plugins/mp6-style-icon/pages_grey.svg');
			background-repeat: no-repeat;
			background-position: 7px 5px;
		}
		#toplevel_page_mp6-style-icon .current .wp-menu-image,
		#toplevel_page_mp6-style-icon .current:hover .wp-menu-image {
			background-image: url('/wp-content/plugins/mp6-style-icon/pages_white.svg');
		}
		#toplevel_page_mp6-style-icon a:hover .wp-menu-image {
			background-image: url('/wp-content/plugins/mp6-style-icon/pages_blue.svg');
		}
	</style><?php
}
