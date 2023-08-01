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

<section class="wrapper">
    <h1>CLARUSMOD</h1>
    <?php echo author_url('https://zeddyemy.github.io', 'Zeddy Emmanuel'); ?>
    <p> <?php echo clarusmod_copyright() ?> </p>
</section>

<?php get_footer(); ?>