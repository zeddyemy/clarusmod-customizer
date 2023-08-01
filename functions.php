<?php

/**
 * Clarusmod functions and definitions
 *
 * @author Emmanuel Zeddy 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Clarusmod
 */

if (!function_exists('clarusmod_setup')) :
    /*--------------------------------------------------------------------------------
	clarusmod_setup - sets up theme
	- adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
	- registers a translation file
	- registers navigation menus
	---------------------------------------------------------------------------------*/
    
    function clarusmod_setup() {

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // post formats
        add_theme_support('post-formats', array('aside', 'quote'));

        // HTML5
        add_theme_support('html5');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails', array('post', 'page', 'events', 'gallery'));
    }
endif;
add_action('after_setup_theme', 'clarusmod_setup');


// BASIC FUNCTIONS.
require get_template_directory() . '/inc/functions/basic-functions.php';

// Enqueue Styles and Scripts.
require get_template_directory() . '/inc/functions/enqueues.php';

// Load Customizer
include_once get_template_directory() . '/inc/customizer/customizer.php';
