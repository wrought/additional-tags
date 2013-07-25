<?php
/*
Plugin Name: Additional Tags	
Plugin URI: https://github.com/msenateatplos/additional-tags
Description: A simple filter to add accepted elements to the WordPress Editor, TinyMCE, especially for non-super-admin users in multisite.
Author: josh401, aecnu, msenate
Version: 0.1
*/
 
/*
 * @TODO:
 * Add other handy-dandy additional tags
 */

function fb_change_mce_options($initArray) {
// Comma-separated string of additional tags
$ext = 'pre[id|name|class|style],iframe[align|longdesc|name|width|height|frameborder|scrolling|marginheight|marginwidth|src]';
if ( isset( $initArray['extended_valid_elements'] ) ) {
$initArray['extended_valid_elements'] .= ',' . $ext;
} else {
$initArray['extended_valid_elements'] = $ext;
}
// maybe; set tiny parameter verify_html
//$initArray['verify_html'] = false;
return $initArray;
}
add_filter('tiny_mce_before_init', 'fb_change_mce_options');

?>
