<?php

function keyaf_resources() {
	
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/styles/styles.css');
	wp_enqueue_style( 'ss-social-regular', get_template_directory_uri() . '/app/assets/webfont/ss-social-regular.css');
	wp_enqueue_style( 'ss-standard', get_template_directory_uri() . '/app/assets/webfont/ss-standard.css');

    include 'shortcodes.php';
	
}

add_action('wp_enqueue_scripts', 'keyaf_resources');

// Theme setup
function keyaf_setup() {

	
	//Pluralize
	function pluralize($count, $singular, $plural = false)
	{
	   if (!$plural) $plural = $singular . 's';

	  return ($count == 1 ? $singular : $plural) ;
	}
	
	// Add featured image support
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'keyaf_setup');