<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mike_Staff_Productions
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class('help-desk'); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mikestaff' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 text-center">
					<a href="<?php echo home_url('/help-desk/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/help-desk-logo.png" alt="Mike Staff Productions Help Desk Logo"></a>
				</div>
				<div class="col-xs-12 col-sm-4 text-center">
					
					<a href="<?php echo home_url(); ?>" rel="home"><img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Mike Staff Productions Logo"></a>
					
				</div>
				
				<div class="col-xs-12 col-sm-4 text-center">
					<img class="trust-our-reputation-graphic hidden-xs" src="<?php echo get_template_directory_uri(); ?>/img/love-your-wedding.png" alt="Mike Staff Love your wedding">
				</div>
			</div><!-- End Row -->
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger"></span> <?php esc_html_e( ' Menu', 'mikestaff' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'help-desk', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
