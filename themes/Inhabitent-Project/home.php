<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class='grid-container'>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		<?php while ( have_posts() ) : the_post(); ?>
		<header class="journal-entry-header">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'large' ); ?>
                            <?php endif; ?>

					
					<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	



	<?php get_sidebar(); ?>
</div>	
<?php get_footer(); ?>


