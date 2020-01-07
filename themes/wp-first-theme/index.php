<!DOCTYPE html>
<html>
   <head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
      <title>My WordPress Site - Just another WordPress blog.</title>
      <link rel="stylesheet" href="style.css" />
   </head>
   <body>
   <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
      <p class="description"><?php bloginfo( 'description' ); ?></p>

      <!-- Maybe we could loop some posts here too? -->
      <?php if ( have_posts() ) : ?>
   <?php while ( have_posts() ) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
   <?php endwhile; ?>
   <?php the_posts_navigation(); ?>
<?php else : ?>
   <h2>Nothing found!</h2>
<?php endif; ?>
   </body>
</html>
