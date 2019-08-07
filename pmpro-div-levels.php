<?php
/*
Plugin Name: Paid Memberships Pro - Levels as DIV Layout Add On
Plugin URI: https://www.paidmembershipspro.com/add-ons/levels-page-div-layout/
Description: Display your Membership Levels Page in a DIV Layout for Paid Memberships Pro
Version: .3
Author: Paid Memberships Pro
Author URI: https://www.paidmembershipspro.com
*/

//use our levels template
function pmprodiv_pmpro_pages_shortcode_levels($content)
{
	ob_start();
	include(plugin_dir_path(__FILE__) . "templates/levels.php");
	$temp_content = ob_get_contents();
	ob_end_clean();
	return $temp_content;
}
add_filter("pmpro_pages_shortcode_levels", "pmprodiv_pmpro_pages_shortcode_levels");

/*
Function to add links to the plugin row meta
*/
function pmprodiv_plugin_row_meta($links, $file) {
	if(strpos($file, 'pmpro-div-levels.php') !== false)
	{
		$new_links = array(
			'<a href="' . esc_url('https://www.paidmembershipspro.com/add-ons/levels-page-div-layout/')  . '" title="' . esc_attr( __( 'View Documentation', 'pmpro' ) ) . '">' . __( 'Docs', 'pmpro' ) . '</a>',
			'<a href="' . esc_url('http://paidmembershipspro.com/support/') . '" title="' . esc_attr( __( 'Visit Customer Support Forum', 'pmpro' ) ) . '">' . __( 'Support', 'pmpro' ) . '</a>',
		);
		$links = array_merge($links, $new_links);
	}
	return $links;
}
add_filter('plugin_row_meta', 'pmprodiv_plugin_row_meta', 10, 2);
