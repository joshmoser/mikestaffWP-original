<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Mike_Staff_Productions
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mikestaff_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'mikestaff_body_classes' );

/**
 * Change login logo, Background Color and Link
 * @return css script
 */
function my_login_head() {
    echo "
    <style>
        body.login {
            background: #7ac6fb;
        }
        body.login #login h1 a {
        background: transparent url('".get_bloginfo('template_url')."/img/logo.png') center top  no-repeat !important;
        background-size: 245px 97px !important;
        height: 97px;
        width: 245px;
    }
    </style>
    ";
}
add_action("login_head", "my_login_head");

// Replace Login Logo Url
function custom_loginlogo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'custom_loginlogo_url' );

function ms_remove_discourage_on_live() {
    /**
     * Check Server name and store
     * @var [type]
     */
    $server = $_SERVER['SERVER_NAME'];

    /**
     * If 'blog_public' does not equal 1 set to 1
     * This will force public change
     *
     * If server is not 'mikestaff.com' for 'blog_public' to 0
     */
    //if( $server === "mikestaffweddings.com") {
    //    if( get_option( 'blog_public' ) !== 1 ) {
    //        update_option( 'blog_public', 1 );
    //    }
    //} elseif( $server !== "mikestaffweddings.com") {
    //    if( get_option( 'blog_public' ) !== 0 ) {
    //        update_option( 'blog_public', 0 );
    //    }        
    //}
}
add_action('init','ms_remove_discourage_on_live');