<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<h1 class='journal-title-1'>FIND US</h1>
<div class='fin-container'>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<?php get_template_part( 'template-parts/content', 'page' ); ?>
		
		<?php endwhile; // End of the loop. ?>
		
	</main><!-- #main -->
</div>









</div>
<?php get_footer(); ?>
