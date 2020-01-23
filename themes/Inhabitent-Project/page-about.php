<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<section class='about-hero'>
    <h1 class ='about-title'>about</h1>
</section>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php endwhile; // End of the loop. ?>
        


	




<?php get_footer(); ?>


