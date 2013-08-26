<?php
/*
Plugin Name: PMPro Levels as DIV Layout
Plugin URI: http://www.paidmembershipspro.com/wp/pmpro-divb-levels/
Description: Display your Membership Levels Page in a DIV Layout for Paid Memberships Pro
Version: .1
Author: Stranger Studios
Author URI: http://www.strangerstudios.com
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

