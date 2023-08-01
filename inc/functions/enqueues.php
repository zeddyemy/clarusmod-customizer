<?php

// preload Boxicons
function style_preload_filter($html, $handle) {
	if ($handle === 'preload-box-icons') :
		return str_replace("rel='stylesheet'",
			"rel='preload' ", $html);
	endif;
	
	return $html;
	
}
add_filter('style_loader_tag', 'style_preload_filter', 10, 2);

function clarusmod_styles_scripts() {

    // Box Icons.
    wp_enqueue_style('preload-box-icons', get_template_directory_uri() . '/assets/library/boxicons/css/boxicons.min.css'); //preload css
    wp_enqueue_style('box-icons', get_template_directory_uri() . '/assets/library/boxicons/css/boxicons.min.css');


    // Main stylesheet
	wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css');
}
add_action( 'wp_enqueue_scripts', 'clarusmod_styles_scripts' );