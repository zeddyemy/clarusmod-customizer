<?php

/**
 * The template for displaying the footer
 *
 * @author Emmanuel Zeddy 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Clarusmod
 */



?>
<footer class="footer col-12">
    <div class="footer-b flex flexCenter">
        <p> <?php echo clarusmod_copyright() ?> </p>
        <?php echo author_url('https://zeddyemy.github.io', 'Zeddy Emmanuel'); 
        ?>
    </div>
</footer>



<?php wp_footer(); ?>

</body>

</html>