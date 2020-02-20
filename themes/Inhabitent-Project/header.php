<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Open+Sans:300,400&display=swap" rel="stylesheet"> 
		<?php wp_head(); ?>
	</head>

	<nav class='nav-container <?php if(is_front_page() || is_page('about')) {

	 echo 'nav-color';};?>'>

		<div class='nav-image'>
		<a href='http://localhost/wordpress/home'><img class='tent-logo' src=<?php if(is_front_page() || is_page('about')) { echo get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-tent-white.svg' ;} else {echo get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-tent.svg';}; ?> alt='tent-logo'></a>
</div>
<div class='nav-list'>
		<ul>
			<a href='http://localhost/wordpress/product_type/'><li>shop</li></a>
			<a href='http://localhost/wordpress/journal/'><li>journal</li></a>
			<a href='http://localhost/wordpress/about/'><li>about</li></a>
			<a href='http://localhost/wordpress/fin-us/'><li>find us</li></a>
			<!-- <i class="fa fa-search"></i> -->
			<?php get_search_form(); ?>
		</ul>
</div>
	</nav>





		

			<div id="content" class="site-content">
