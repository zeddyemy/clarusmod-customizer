<?php

/**
 * Clarusmod Basic functions and definitions that adds more functionality to the theme
 *
 * @author Emmanuel Zeddy 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Clarusmod
 */


// Format URL To Make Sure It Has "https://"
function clarusmod_format_url( $url ) {
    // Check if the URL starts with "http://" or "https://"
    if ( ! empty( $url ) && ! preg_match( '/^https?:\/\//i', $url ) ) :
        $url = 'https://' . $url;
    endif;

    return esc_url( $url );
}

// Function For Copyright Date and Site Name in The FOOTER
function clarusmod_copyright() {
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
		SELECT
		YEAR(min(post_date_gmt)) AS firstdate,
		YEAR(max(post_date_gmt)) AS lastdate
		FROM
		$wpdb->posts
		WHERE
		post_status = 'publish'
		");
	$output = '';

	if($copyright_dates) :
		$copyright = "&copy; " . $copyright_dates[0]->firstdate;
		if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) :
			$copyright .= '-' . $copyright_dates[0]->lastdate;
		endif;
		$output = $copyright . " " . get_bloginfo('name') . " | All Rights Reserved.";
	endif;

	return $output;
}

// Function To Display a Link to Theme Author's Page
function author_url($url, $name) {
    $url = clarusmod_format_url($url);

	return '<div class="theme-author-link">' .
		sprintf(
			esc_html__('Designed by: %s', 'clarusmod'),
			'<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer" title="' . esc_attr__($name, 'clarusmod') . '">' . esc_html__($name, 'clarusmod') . '</a>'
		) . '</div>';
}