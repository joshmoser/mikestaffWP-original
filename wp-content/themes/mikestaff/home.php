<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mike_Staff_Productions
 */

$image = get_field('blog_hero_image','options');

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="blog-hero" itemscope itemtype="http://schema.org/WebPageElement" style="background-image: url('<?php echo $image['sizes']['lg-blog-thumb']; ?>');">
				<meta itemprop="image" content="<?php echo $image['url']; ?>">
				<div class="title-wrapper">
					<h1><?php the_field('blog_title','options'); ?></h1>
					<h2><?php the_field('blog_subtitle','options'); ?></h2>
				</div>
			</section>

			<section class="container-fluid">
				<div class="row">
					<?php 
						$args = array( 
		    				'posts_per_page' => 3, 
		    				'post_type' => 'post'
	    				);
	    				$recent_posts = new WP_Query($args); 
	    				while( $recent_posts->have_posts() ) : $recent_posts->the_post();
	    			?>
		    			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="padding: 30px 15px 0 15px;">
		    				<a href="<?php the_permalink(); ?>" class="post-grid-wrap">
			    				<?php the_post_thumbnail('three-column'); ?>
			    				<div class="post-caption">
			    					<?php the_title('<h3>','</h3>'); ?>
			    					<p>posted <?php the_date(); ?> <?php the_time(); ?></p>
			    				</div>
		    				</a>
		    			</div>
	    			<?
	    				endwhile;
	    				wp_reset_postdata();
	    			?>
    			</div>
			</section>

			<section class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
						<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'blog' );

							endwhile;

							$args = array('mid_size' => 1 );
							the_posts_pagination( $args );

						?>						
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<?php get_sidebar(); ?>
					</div>
				</div>

			</section>
			<?php get_template_part( 'template-parts/components/component', 'blog-form-check-availability' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
