<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

		<?php
   					$args = array( 'post_type' => 'post', 'order' => 'ASC' );
  					 $product_posts = get_posts( $args ); // returns an array of posts
		?>
		<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   					<h1><?php the_title(); ?></h1>
		<?php endforeach; wp_reset_postdata(); ?>

        <section class='hero-image'>
        <img src=<?php echo get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?> alt='tent-logo'>
        <img src=<?php echo get_stylesheet_directory_uri() . '/images/home-hero.jpg'; ?> alt='tent-logo'>
        </section>

        <section class='options-terms'>
        <h2>shop stuff</h2>
        <?php $terms = get_terms( 'product_taxonomy');?>
        </section>
        <div class='items'>
         <?php  foreach ($terms as $term): ?>
         <div class='item'>
         <img class ='all-items' src=<?php echo get_stylesheet_directory_uri() . '/images/product-type-icons/' . $term -> name  . '.svg';?> alt='products'>

         <p><?php echo $term -> description;?></p>
         <a href='#'><p><?php echo $term -> name;?> stuff</p></a></div>
         <?php endforeach; ?>
        
        </div>
        
        
	



<?php get_sidebar(); ?>
<?php get_footer(); ?>


