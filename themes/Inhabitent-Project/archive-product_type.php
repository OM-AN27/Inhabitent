
<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */



get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="products-site-main" role="main">

		<?php $wpb_all_query = new WP_Query(array('post_type'=>'product_type', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

		<?php if ( $wpb_all_query->have_posts() ) : ?>

			<header class="page-header">
				 <?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="product-description">', '</div>' );
					
				?> 
				<h1 class='shop-page-title' style='text-align: center; font-family: "Open Sans" , arial;'>SHOP STUFF</h1>
				<hr>
			</header><!-- .page-header -->

         
			<?php /* Start the Loop */ ?>
			<div class="products-container">
				<div class="product-grid">
		<ul style='padding: 0; margin: 0;'>
						<li>
						<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

						<?php
							get_template_part( 'template-parts/content' );
						?>

						<?php endwhile; ?>
						</li>
				</div>
			</div>

							<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</ul>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>