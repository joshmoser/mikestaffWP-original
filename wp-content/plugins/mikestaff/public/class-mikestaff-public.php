<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.code-local.com
 * @since      1.0.0
 *
 * @package    Mikestaff
 * @subpackage Mikestaff/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mikestaff
 * @subpackage Mikestaff/public
 * @author     Eric Wistrand <wistranderic@gmail.com>
 */
class Mikestaff_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mikestaff_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mikestaff_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mikestaff-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mikestaff_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mikestaff_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mikestaff-public.js', array( 'jquery' ), $this->version, true );

	}

	public function mikestaff_register_bride_boards() {
	
		$labels = array(
			'name'                => __( 'Bride Boards', 'mikestaff' ),
			'singular_name'       => __( 'Bride Board', 'mikestaff' ),
			'add_new'             => _x( 'Add New Bride Board', 'mikestaff', 'mikestaff' ),
			'add_new_item'        => __( 'Add New Bride Board', 'mikestaff' ),
			'edit_item'           => __( 'Edit Bride Board', 'mikestaff' ),
			'new_item'            => __( 'New Bride Board', 'mikestaff' ),
			'view_item'           => __( 'View Bride Board', 'mikestaff' ),
			'search_items'        => __( 'Search Bride Boards', 'mikestaff' ),
			'not_found'           => __( 'No Bride Boards found', 'mikestaff' ),
			'not_found_in_trash'  => __( 'No Bride Boards found in Trash', 'mikestaff' ),
			'parent_item_colon'   => __( 'Parent Bride Board:', 'mikestaff' ),
			'menu_name'           => __( 'Bride Boards', 'mikestaff' ),
		);
	
		$args = array(
			'labels'                   => $labels,
			'hierarchical'        => true,
			'description'         => 'Mike Staff Bride Boards',
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 7,
			'menu_icon'           => null,
			'show_in_nav_menus'   => false,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => array('with_front' => false,'slug' => 'bride-boards'),
			'capability_type'     => 'post',
			'supports'            => array(
				'title', 'editor', 'author', 'thumbnail',
				'excerpt','custom-fields', 'page-attributes'
				)
		);
	
		register_post_type( 'bride-boards', $args );
	}

	public function mikestaff_bride_board_categories() {

		$labels = array(
			'name'					=> _x( 'Bride Board Categories', 'Taxonomy Bride Board Categories', 'mikestaff' ),
			'singular_name'			=> _x( 'Bride Board Category', 'Taxonomy Bride Board Category', 'mikestaff' ),
			'search_items'			=> __( 'Search Bride Board Categories', 'mikestaff' ),
			'popular_items'			=> __( 'Popular Bride Board Categories', 'mikestaff' ),
			'all_items'				=> __( 'All Bride Board Categories', 'mikestaff' ),
			'parent_item'			=> __( 'Parent Bride Board Category', 'mikestaff' ),
			'parent_item_colon'		=> __( 'Parent Bride Board Category', 'mikestaff' ),
			'edit_item'				=> __( 'Edit Bride Board Category', 'mikestaff' ),
			'update_item'			=> __( 'Update Bride Board Category', 'mikestaff' ),
			'add_new_item'			=> __( 'Add New Bride Board Category', 'mikestaff' ),
			'new_item_name'			=> __( 'New Bride Board Category Name', 'mikestaff' ),
			'add_or_remove_items'	=> __( 'Add or remove Bride Board Categories', 'mikestaff' ),
			'choose_from_most_used'	=> __( 'Choose from most used mikestaff', 'mikestaff' ),
			'menu_name'				=> __( 'Bride Board Categories', 'mikestaff' ),
		);

		$args = array(
			'labels'            => $labels,
			'public'            => true,
			'show_in_nav_menus' => false,
			'show_admin_column' => false,
			'hierarchical'      => true,
			'show_tagcloud'     => true,
			'show_ui'           => true,
			'query_var'         => true,
			'rewrite'           => array('with_front' => false,'slug' => 'bride-board-categories'),
			'query_var'         => true,
			'capabilities'      => array('post'),
		);

		register_taxonomy( 'bride-board-categories', array( 'bride-boards' ), $args );
	}

	public function mikestaff_video_faq() {

		$labels = array(
			'name'                => __( 'FAQ Videos', 'mikestaff' ),
			'singular_name'       => __( 'FAQ Video', 'mikestaff' ),
			'add_new'             => _x( 'Add New FAQ Video', 'mikestaff', 'mikestaff' ),
			'add_new_item'        => __( 'Add New FAQ Video', 'mikestaff' ),
			'edit_item'           => __( 'Edit FAQ Video', 'mikestaff' ),
			'new_item'            => __( 'New FAQ Video', 'mikestaff' ),
			'view_item'           => __( 'View FAQ Video', 'mikestaff' ),
			'search_items'        => __( 'Search FAQ Video Categories', 'mikestaff' ),
			'not_found'           => __( 'No FAQ Videos found', 'mikestaff' ),
			'not_found_in_trash'  => __( 'No FAQ Videos found in Trash', 'mikestaff' ),
			'parent_item_colon'   => __( 'Parent FAQ Video:', 'mikestaff' ),
			'menu_name'           => __( 'FAQ Videos', 'mikestaff' ),
		);

		$args = array(
			'labels'                   => $labels,
			'hierarchical'        => true,
			'description'         => 'description',
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 6,
			'menu_icon'           => 'dashicons-video-alt2',
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => array('with_front' => false,'slug' => 'faq-videos'),
			'capability_type'     => 'post',
			'supports'            => array(
				'title', 'editor', 'author', 'thumbnail',
				'excerpt', 'page-attributes','custom-fields'
				)
		);

		register_post_type( 'video-faq', $args );
		//add_post_meta( get_the_ID(),'views','0',true);
	}

	public function mikestaff_faq_categories() {

		$labels = array(
			'name'					=> _x( 'FAQ Video Categories', 'Taxonomy FAQ Video Categories', 'mikestaff' ),
			'singular_name'			=> _x( 'FAQ Video Categories', 'Taxonomy FAQ Video Categories', 'mikestaff' ),
			'search_items'			=> __( 'Search FAQ Video Categories', 'mikestaff' ),
			'popular_items'			=> __( 'Popular FAQ Video Categories', 'mikestaff' ),
			'all_items'				=> __( 'All FAQ Video Categories', 'mikestaff' ),
			'parent_item'			=> __( 'Parent FAQ Video Categories', 'mikestaff' ),
			'parent_item_colon'		=> __( 'Parent FAQ Video Categories', 'mikestaff' ),
			'edit_item'				=> __( 'Edit FAQ Video Categories', 'mikestaff' ),
			'update_item'			=> __( 'Update FAQ Video Categories', 'mikestaff' ),
			'add_new_item'			=> __( 'Add New FAQ Video Categories', 'mikestaff' ),
			'new_item_name'			=> __( 'New FAQ Video Categories Name', 'mikestaff' ),
			'add_or_remove_items'	=> __( 'Add or remove FAQ Video Categories', 'mikestaff' ),
			'choose_from_most_used'	=> __( 'Choose from most used FAQ Video Categories', 'mikestaff' ),
			'menu_name'				=> __( 'FAQ Video Categories', 'mikestaff' ),
		);

		$args = array(
			'labels'            => $labels,
			'public'            => true,
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'hierarchical'      => true,
			'show_tagcloud'     => true,
			'show_ui'           => true,
			'query_var'         => true,
			'rewrite'           => array('with_front' => FALSE,'slug' => 'faq-categories'),
			'query_var'         => true,
			'capabilities'      => array(),
		);

		register_taxonomy( 'faq_categories', array( 'video-faq' ), $args );
	}

	public function mikestaff_brideboard_navigation() {

					$args = array(
						'post_type' => 'bride-boards',
						'orderby' =>'menu_order',
						'showposts' => 100,
						'no_rows_found' => true
					);

					$bridal_loop = NEW WP_Query($args);

					$navigation = "";

					if($bridal_loop->have_posts()):
						$navigation = '<nav class="bride-board-navigation">';
						$navigation .= '<h3 id="bride-board-button"><span class="glyphicon glyphicon-menu-hamburger"></span> Other Boards</h3>';
	
						$navigation .= '<ul class="boards-taxonomy-navigation">';
	
						while($bridal_loop->have_posts()) : $bridal_loop->the_post();
	
	
						$navigation .= '<li class="boards-list-item">';
						$navigation .= '<a href="' . get_the_permalink() . '">';
						$navigation .=  get_the_title(); 
						$navigation .= '</a>';
						$navigation .= '</li>';
						
	
						endwhile; 
	
						$navigation .= '</ul>';
						$navigation .= '</nav>';

					endif;

					wp_reset_postdata();

					return $navigation;
	}

	public function mikestaff_display_sitemap() {
		$args = array( 
			'echo' => false,
			'title_li' => '<h2>' . __('Pages') . '</h2>'
		);
		return wp_list_pages( $args );
	}

	public function mikestaff_bride_boards_sitemap() {
		$args = array(
			'echo' => false,
			'title_li' => '<h2>' . __('Bride Boards') . '</h2>',
			'post_type' => 'bride-boards'
		);
		return wp_list_pages( $args );
	}

	public function mikestaff_faq_sitemap() {
		$args = array(
			'echo' => false,
			'title_li' => '<h2>' . __('FAQ Videos') . '</h2>',
			'post_type' => 'video-faq'
		);
		return wp_list_pages( $args );		
	}

}
