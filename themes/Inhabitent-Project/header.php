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

	<?php wp_head(); ?>
	</head>

	<nav class='nav-container'>
		<img src='../../images/logos/inhabitent-logo-tent.svg' alt='tent-logo'>
		
		<ul>
			<a class='journal.php'><li>journal</li></a>
			<a class='page-about.php'><li>about</li></a>
			<a class='find-us.php'><li>find us</li></a>
		</ul>



	</nav>




		

			<div id="content" class="site-content">
