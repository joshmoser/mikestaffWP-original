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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//www.google-analytics.com" rel="dns-prefetch">

<?php wp_head(); ?>
</head>

<body <?php body_class('bride-boards'); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mikestaff' ); ?></a>

<header id="masthead" class="site-header" role="banner">
<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 text-center">
        
                <div class="site-branding">

                    <a href="<?php echo home_url(); ?>" rel="home">

                        <img id="bridal-board-logo" src="<?php echo get_template_directory_uri(); ?>/img/bride-boards/Bride-Board-Art_logo.png" alt="Mike Staff">

                    </a>

                    <a style="clear: both; display: block;" class="hidden-sm hidden-md hidden-lg" href="<?php echo home_url('/contact/'); ?>">

                        <img id="bride-board-contact-img" src="<?php echo get_template_directory_uri(); ?>/img/bride-boards/Bride-Board-Art-Contact-2.png" alt="Mike Staff Contact">

                    </a>

                </div>

            </div>

            <div class="col-xs-12 col-sm-6 text-center">

                <a href="<?php echo home_url('/bride-boards/'); ?>" title="Mike Staff Productions Bride Boards">
        
                    <img class="board-logo" src="<?php echo get_template_directory_uri(); ?>/img/bride-boards/Brideboard-header_det_2_2.png" alt="Mike Staff Bride Boards Header">

                </a>
            
            </div>
        
            <div class="col-xs-12 col-sm-3 text-center hidden-xs">

                <a href="<?php echo home_url('/contact/'); ?>">

                        <img id="bride-board-contact-img" src="<?php echo get_template_directory_uri(); ?>/img/bride-boards/Bride-Board-Art-Contact-2.png" alt="Mike Staff Contact">

                </a>

            </div>

        </div><!-- End Row -->

    </div>

    <?php echo do_shortcode( '[brideboard_navigation]' );?>
</header><!-- #masthead -->

	<div id="content" class="site-content">
