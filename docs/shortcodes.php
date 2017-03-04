<?php

/*
* Plugin Name: KEYAF Custom Shortcode
* Version: 1.0
* Author: J Grady Woodruff IV
* Author URI: http://gradywoodruff.com
*/

function shortcode_day() {
	return date_i18n("l");
}
add_shortcode('day', 'shortcode_day');

function shortcode_recent() {
	$recent_posts = wp_get_recent_posts(array('numberposts' => 1, 'post_status' => 'publish'));
	foreach( $recent_posts as $recent ){
		return '&nbsp;<a href="' . get_permalink($recent["ID"]) . '" class="link link--title">' .   $recent["post_title"].'</a>&nbsp;';
	}
}
add_shortcode('recent', 'shortcode_recent');

function shortcode_a() {
	return '&nbsp;<a href="' . get_permalink($recent["ID"]) . '" class="link link--title">' .   $recent["post_title"].'</a>&nbsp;';
}
add_shortcode('a', 'shortcode_a');

function shortcode_facebook() {

	return '<a href="http://facebook.com" target="_blank">Facebook</a>';
	
}
add_shortcode('facebook', 'shortcode_facebook');

?>
