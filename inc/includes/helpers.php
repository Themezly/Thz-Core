<?php
/**
 * @package      Thz Framework
 * @author       Themezly
 * @license      http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 * @websites     http://www.themezly.com | http://www.youjoomla.com | http://www.yjsimplegrid.com
 */
 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access
}

/**
 * Protect email
*/

if ( ! function_exists( 'thz_core_protect_email' ) ) {
	
	function thz_core_protect_email ( $email,$mailto = false ){
		 
		 $mailto = $mailto ? 'mailto:' :'';
		 $link = $mailto.$email;
		 $html = "";
		 for ($i=0; $i<strlen($link); $i++){
			 $html .= "&#" . ord($link[$i]) . ";";
		 }
		 if($html !=''){
			return $html;
		 }	 
	}

}


function thz_core_activation_url(){
	return apply_filters( 'thz_core_activation_url', 'https://members.themezly.com/' );
}

function thz_core_theme_update_url(){
	return apply_filters( 'thz_core_theme_update_url', 'https://updates.themezly.io/themes/creatus/' );
}

function thz_core_plugin_update_url( $params = array() ){
	$url = apply_filters( 'thz_core_plugin_update_url', 'https://updates.themezly.io/plugins/thz_core/' );

	return add_query_arg( $params, $url );
}