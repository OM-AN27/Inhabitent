<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


        <section class='hero-image'>
                <img src=<?php echo get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?> alt='tent-logo'>
        </section>

        <section class='shop-title-container'>
             <h2 class='content-title'>shop stuff</h2>
            <?php $terms = get_terms( 'product_taxonomy');?>
        </section>

        <ul class='items'>
            <?php  foreach ($terms as $term): ?>
             <li>
                 <div class= 'all-items-container'>
             <img class ='item-images' src=<?php echo get_stylesheet_directory_uri() . '/images/product-type-icons/' . $term -> name  . '.svg'; ?> alt='products'>
            <p class='item-description'><?php echo $term -> description;?></p>
            <a href='#'><div class='item-name-button'><p><?php echo $term -> name;?> stuff</p></div></a>
            </div>
            </li>

            <?php endforeach; ?>
            </ul>

   <section class='inhabitent-jounal-container'>
       <h3 class='inhabitent-journal-title'>inhabitent journal</h3>
   </section>

<div class='journal-posts'>
   <ul>
						<?php
							$args = array( 'post_type' => 'post', 'order' => 'ASC', 'numberposts' => 3 );
							$posts = get_posts( $args ); // returns an array of posts
						?>

						<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

							<li>
								<div class="thumbnail-wrapper">
									<img width="640" height="438" src="<?php the_post_thumbnail_url(); ?>" class="entry-image" sizes="(max-width: 640px) 100vw, 640px">
								</div>
								<div class="post-info-wrapper">
									<span class="date-info-comment"><span class="posted-on"><?php the_date() ?></span> / <?php comments_number() ?></span>
									<h3 class="entry-title"><a href="https://tent.academy.red/van-camping-photo-contest/" rel="bookmark"><?php the_title(); ?></a></h3>
								</div>
								<a class="read-button" href="<?php the_permalink() ?>">Read Entry</a>
							</li>

						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
				</div>

    
	
<?php get_footer(); ?>


