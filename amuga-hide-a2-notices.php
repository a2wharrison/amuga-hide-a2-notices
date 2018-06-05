<?php
/*---------------------------------------------------------------------------
Plugin Name: Amuga - Hide A2 Notices
Plugin URI: https://github.com/asheborocreative/amuga-hide-a2-notices
Description: This plugin hides the "Your login page is now here:" and "Editing of plugin and theme files" notices from A2 Optimized
Version: 0.1
Author: Amuga Themes
Author URI: https://amugathemes.com
License: GPL3
Text Domain: amuga-hide-a2-notices
---------------------------------------------------------------------------*/


if( !function_exists( 'a2_notice_removal_css' ) ){
	function a2_notice_removal_css() {
		echo '<style>#bookmark-login,#editing-locked{display:none;}</style>';
	}
	add_action( 'admin_head', 'a2_notice_removal_css' );
}
