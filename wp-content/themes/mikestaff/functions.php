<?php
/**
 * Mike Staff Productions functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mike_Staff_Productions
 */

if ( ! function_exists( 'mikestaff_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mikestaff_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Mike Staff Productions, use a find and replace
	 * to change 'mikestaff' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mikestaff', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('three-column',768,432, true);
	add_image_size( 'three-column-small', 364, 205, true);
    add_image_size('location-thumb',405,269, true); 
    add_image_size('lg-blog-thumb',1920,540, true); //New Blog Size

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'       => esc_html__( 'Primary', 'mikestaff' ),
		'help-desk'     => esc_html__( 'Help Desk', 'mikestaff' ),
		'bride-boards'  => esc_html__( 'Bride Boards', 'mikestaff' ),
		'michigan-menu' => esc_html__( 'Michigan Menu', 'mikestaff' ),
		'chicago-menu'  => esc_html__( 'Chicago Menu', 'mikestaff' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
endif;
add_action( 'after_setup_theme', 'mikestaff_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mikestaff_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mikestaff_content_width', 750 );
}
add_action( 'after_setup_theme', 'mikestaff_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mikestaff_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'mikestaff' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mikestaff' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mikestaff_widgets_init' );


function msp_widget_init() {
    register_widget( 'msp_widget' );
}
class msp_widget extends WP_Widget
{
 
    public function __construct()
    {
        $widget_details = array(
            'classname' => 'msp_widget',
            'description' => 'Custom widget for displaying recent posts with a thumbnail'
        );
 
        parent::__construct( 'msp_widget', 'Recents Posts with Thumbnails', $widget_details );
 
    }

 
    public function widget( $args, $instance ) { ?>
    <section class="widget">
    	<h2 class="widget-title">Recent Posts</h2>
    	<?php 
    		$args = array( 
	    			'posts_per_page' => 5, 
	    			'post_type' => 'post'
	    			//'offset'=> 1, 
	    			//'category' => 1 
    			);
    		$recent_posts = new WP_Query($args); 
    		//var_dump($recent_posts);
    		if( $recent_posts ) {
    			echo __( '<ul class="recent-posts">', 'mikestaff' );
    			while( $recent_posts->have_posts() ) : $recent_posts->the_post();
    			?>
    			<li class="row">
    				<article class="rss">
	    				<div class="col-xs-8 col-sm-7 col-md-8 col-lg-8">
	    					<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
	    					<p>posted <?php the_date(); ?> <?php the_time(); ?></p>    					
	    				</div>
	    				<div class="col-xs-4 col-sm-5 col-md-4 col-lg-4">
	    					<?php the_post_thumbnail('location-thumb'); // create new thumbnail size ?>
	    				</div>    					
    				</article>
				</li>
    			<?php endwhile;
    			wp_reset_postdata();
    			echo __( '</ul>', 'mikestaff' );
    		} else {
    			echo "<p>Sorry. No posts to show.</p>";
    		}
    	?>
    </section>
    <?php }
 
}
add_action( 'widgets_init', 'msp_widget_init' );

/**
 * Enqueue scripts and styles.
 */
function mikestaff_scripts() {

	wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.css');

	wp_enqueue_style( 'mikestaff-style', get_stylesheet_uri() );

	if ( is_post_type_archive( 'bride-boards' ) || get_post_type() === "bride-boards" ) {
		wp_enqueue_style( 'brideboardcss', get_template_directory_uri() . '/css/brideboards.css' );
	}

	if ( is_post_type_archive( 'video-faq' ) || get_post_type() === "video-faq" ) {
		wp_enqueue_style( 'videofaqcss', get_template_directory_uri() . '/css/videofaq.css' );
	}

	$templates = [
		'page-templates/help-desk-blank.php',
		'page-templates/help-desk-child.php',
		'page-templates/help-desk-faq.php',
		'page-templates/help-desk.php'
	];
	if ( is_page_template( $templates ) ) {
		wp_enqueue_style( 'helpdeskcss', get_template_directory_uri() . '/css/helpdesk.css' );
	}

	if ( is_front_page() ) {
		wp_enqueue_style( 'frontpage', get_template_directory_uri() . '/css/frontpage.css' );
	}

	if( is_page_template( 'page-templates/sales-template.php' ) ) {
		wp_enqueue_style( 'sales', get_template_directory_uri() . '/css/sales.css' );
	}
	
	wp_enqueue_style('bootstrap-datepicker-css', get_template_directory_uri() . '/inc/bootstrap-datepicker/css/bootstrap-datepicker3.css' );

	wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '2.8.3', false );

	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true );

    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.7', true );

    wp_enqueue_script( 'bootstrap-datepicker-js', get_template_directory_uri() . '/inc/bootstrap-datepicker/js/bootstrap-datepicker.js', array('jquery'), '1.5.1', true );

    wp_enqueue_script( 'buttonclick', get_template_directory_uri() .'/js/button-click.js', array('jquery'), null, true );
    wp_localize_script( 'buttonclick', 'buttonclickajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

    wp_enqueue_script( 'mikestaff-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true );

    wp_enqueue_script( 'mikestaff-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mikestaff-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mikestaff_scripts', 1 );

/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

// WP Bootstrap NavWalker Saved as WP Bootstrap Nav Walker in Snippets
require_once('inc/wp_bootstrap_navwalker.php');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load form handler file.
 */
require get_template_directory() . '/inc/form-handlers.php';

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

/**
 * Add Google Analytics to header
 */
add_action('wp_head','mikestaff_google_analytics');
function mikestaff_google_analytics() {
	the_field('header_scripts', 'option');
}

/**
 * Load conversion codes file.
 */
include get_template_directory() . '/inc/conversion-codes.php';

/**
 * Hide Admin Bar
 */
add_filter('show_admin_bar', '__return_false');

/**
 * remove header margin
 * Thanks Chris Coyer of CSS Tricks
 */
add_action('get_header', 'my_filter_head');
function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

/**
 * Create New edit button
 */
add_action( 'wp_footer', 'mikestaff_edit_button');
function mikestaff_edit_button() {
	return edit_post_link(
			__('<span class="glyphicon glyphicon-cog"></span> Edit Page')
		);
}

/** CHANGE FEATURED IMAGE META BOX CONTENT **/
add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
function add_featured_image_instruction( $content ) {
     $content .= '<p><i>The featured image should be 1920x540 pixels</i></p>';
     return $content;
}
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

        $title = single_cat_title( '', false );

    } elseif ( is_tag() ) {

        $title = single_tag_title( '', false );

    } elseif ( is_author() ) {

        $title = '<span class="vcard">' . get_the_author() . '</span>' ;

    }

    return $title;

});

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {

    $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
    $next     = get_adjacent_post( false, '', false );
    $css      = '';

    if ( is_attachment() && 'attachment' == $previous->post_type ) {
        return;
    }

    if ( $previous  ) {
        $prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
        
        if( ! $prevthumb ) {
        	$prevthumb = array();
        	$prevthumb[0] = get_template_directory_uri() . '/img/BlogHeader_collage_2.png';
        }


        $css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
    }

    if ( $next ) {
        $nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
        
        if( ! $nextthumb ) {
        	$nextthumb = array();
        	$nextthumb[0] = get_template_directory_uri() . '/img/BlogHeader_collage_2.png';
        }

        $css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
    }

    wp_add_inline_style( 'mikestaff-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Add SVG Support
 * @param [type] $upload_mimes [description]
 */
function add_svg_to_upload_mimes( $upload_mimes ) {
	$upload_mimes['svg'] = 'image/svg+xml';
	$upload_mimes['svgz'] = 'image/svg+xml';
	return $upload_mimes;
}
add_filter( 'upload_mimes', 'add_svg_to_upload_mimes', 10, 1 );

add_action( 'pre_get_posts', function ( $query ) 
{
    if (    !is_admin() 
         && $query->is_main_query() 
         && $query->is_tax() 
    ) {
        $query->set( 'posts_per_page', '100'   );
    }
});