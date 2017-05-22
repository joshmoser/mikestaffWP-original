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

if( get_field('location') ) {
    if( get_field('location') === "michigan" ) {
        $home = "/detroit-weddings/";
        $menu = 'michigan-menu';
        $phone = "877.689.0777";
    } elseif( get_field('location') === "chicago" ) {
        $home = "/chicago-weddings/";
        $menu = 'chicago-menu';
        $phone = "773.570.7707";
    } else {
        $home = null;
        $menu = 'primary';
        $phone = "Detroit or Chicago";
    }
} else {
    $home = null;
    $menu = 'primary';
    $phone = "Detroit or Chicago";
}

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
<?php 
    if ( get_field( 'header_scripts') ) : 
        the_field( 'header_scripts' ); 
    endif; 
?>
</head>

<body <?php body_class('fixed'); ?>>
<?php do_action('after_body'); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mikestaff' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2">
            <div class="site-branding">
                <a href="<?php echo home_url( $home ); ?>" rel="home">
                    <img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-blue-md.png" alt="Mike Staff Productions logo" />
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-md-push-8 col-lg-2 col-lg-push-8">
            <p class="header-phone"><a href="tel:+1-877-689-0777"><span class="glyphicon glyphicon-earphone"></span> <span class="header-number"><?php echo $phone; ?></span></a></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-md-pull-2 col-lg-7 col-lg-pull-2">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                    <?php
                        wp_nav_menu( array(
                            'menu'              => $menu,
                            'theme_location'    => $menu,
                            'depth'             => 3,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                    		'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>
            </nav>
        </div>
    </div><!-- / .row -->
</div><!-- / .container-fluid -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
