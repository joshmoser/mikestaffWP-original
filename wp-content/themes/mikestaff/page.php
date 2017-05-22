<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mike_Staff_Productions
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <article <?php post_class(); ?> itemscope itemtype="http://schema.org/WebPage">
                <?php the_title('<h1 class="sr-only">', '</h1>'); ?>
                <meta itemprop="name" content="<?php the_title(); ?>">
                <meta itemprop="url" content="<?php the_permalink(); ?>">
                <meta itemprop="image" content="<?php echo the_post_thumbnail_url(); ?>">
                <meta itemprop="description" content="<?php the_excerpt(); ?>">
            
                <?php // loop through the rows of data
                	while ( have_rows('page_components') ) : the_row();
	           
                	    if( get_row_layout() == 'add_locations' ):
            
                	    	get_template_part( 'template-parts/components/component', 'locations' );
            
                	    elseif( get_row_layout() == 'open_content' ): 
	           
                	    	get_template_part( 'template-parts/components/component', 'open-content' );
            
                	    elseif( get_row_layout() == 'single_aligned_column_with_background' ): 
	           
                	    	get_template_part( 'template-parts/components/component', 'service-repeater' );
            
                	    elseif( get_row_layout() == 'additional_services' ): 
	           
                	    	get_template_part( 'template-parts/components/component', 'additional-services' );
            
                	    elseif( get_row_layout() == 'free_guide' ): 
	           
                	    	get_template_part( 'template-parts/components/component', 'free-guide' );
            
                	    elseif( get_row_layout() == 'recent_posts' ): 
	           
                	    	get_template_part( 'template-parts/components/component', 'recent-posts' );
            
                	    elseif( get_row_layout() == 'service_reviews' ): 
	           
                	    	get_template_part( 'template-parts/components/component', 'reviews-slider' );	
            
                	    elseif( get_row_layout() == 'basic_hero_header' ): 
	           
                	    	get_template_part( 'template-parts/components/component', 'basic-hero' );
            
                        elseif( get_row_layout() == 'check_date_availability' ): 
                
                            get_template_part( 'template-parts/components/component', 'check-date-availability' );
                            get_template_part( 'template-parts/modals/modal', 'date-success' );
            
                        elseif( get_row_layout() == 'heart_to_serve' ): 
                
                            get_template_part( 'template-parts/components/component', 'heart-to-serve' );
            
                        elseif( get_row_layout() == 'package' ):
            
                            get_template_part( 'template-parts/components/component', 'packages' );
            
                        elseif( get_row_layout() == 'latest_reviews' ):
                            
                            get_template_part( 'template-parts/components/component', 'latest-reviews' );
            
                        elseif( get_row_layout() == 'share_the_love_video' ):
                            
                            get_template_part( 'template-parts/components/component', 'share-the-love-video' );
            
                        elseif( get_row_layout() == '3_column_link_section' ):
                            
                            get_template_part( 'template-parts/components/component', 'three-column' );

                        elseif( get_row_layout() == '4_column_link_section' ):
                            
                            get_template_part( 'template-parts/components/component', 'four-column' );
            
                        elseif( get_row_layout() == 'video_header' ):
                            
                            get_template_part( 'template-parts/components/component', 'video-header' );
            
                        elseif( get_row_layout() == 'check_availability_button' ):
                            
                            get_template_part( 'template-parts/components/component', 'check-availability-button' );
            
                        elseif( get_row_layout() == 'check_availability_form' ):
                            
                            get_template_part( 'template-parts/components/component', 'form-check-availability' );
            
                        elseif( get_row_layout() == 'dj_employment_form' ):
                            
                            get_template_part( 'template-parts/components/component', 'form-dj-opportunities' );
            
                        elseif( get_row_layout() == 'photography_employment_form' ):
                            
                            get_template_part( 'template-parts/components/component', 'form-photography-opportunities' );
            
                        elseif( get_row_layout() == 'videography_employment_form' ):
                            
                            get_template_part( 'template-parts/components/component', 'form-videography-opportunities' );
            
	                 endif;
	           
                	endwhile; 
                ?>
            </article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
