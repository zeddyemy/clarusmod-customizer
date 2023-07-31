<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @author Emmanuel Zeddy 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Clarusmod
 */


get_header(); ?>

<section style="min-height: 100vh; display:flex; justify-content:center; align-items:center; color:antiquewhite; background-color:black">
    <h1>CLARUSMOD</h1>
</section>

<?php get_footer(); ?>