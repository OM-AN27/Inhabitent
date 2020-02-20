<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class='sidebar'>
<div class='journal-grid-container'>
	<div id="primary" class="journal-content-area">
		<main id="main" class="journal-site-main" role="main">

		
		<?php while ( have_posts() ) : the_post(); ?>
		<header class="journal-entry-header">
					
					<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	



	<?php get_sidebar(); ?>
</div>	
<?php get_footer(); ?>


