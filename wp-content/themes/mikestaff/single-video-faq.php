<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mike_Staff_Productions
 */
$args = array('fields' => 'names');
$terms = wp_get_post_terms($post->ID,'faq_categories',$args);
$cat_list = implode(', ',$terms);
$GLOBALS['tax'] = $cat_list;

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="container">

				<?php while ( have_posts() ) : the_post(); ?>
		
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1 class="entry-title text-capitalize text-center"><?php the_title(); ?></h1>
						<div class="embed-responsive embed-responsive-16by9" style="border: solid 3px #000;">
							<?php the_field('faq_video_embed'); ?>
						</div>
						<br />
						<?php the_content(); ?>
					</article>
		
				<?php endwhile; // End of the loop. ?>

			</section>

			<section>
				<?php get_template_part('template-parts/components/component','form-check-availability'); ?>				
			</section>

			<section class="container more-faq-videos">
				<div class="row">
					<div class="col-xs-12">
						<h2>Other <?php echo rtrim($terms[0],'Services'); ?> FAQ's</h2>
					</div>
				</div>
				<div class="row">
					<?php 
						$args = array(
							'post_type' => 'video-faq',
							'faq_categories' => $cat_list,
							'showposts' => 100,
							'no_rows_found' => true
						);
		
						$video_list = NEW WP_Query($args);

						$counter = 0; // used to seperate rows
						while( $video_list->have_posts() ) : $video_list->the_post();
						$counter++; // increment counter
					?>
		
					<div class="col-xs-12 col-sm-6">
						<h4><a href="<?php the_permalink(); ?>"><span class="glyphicon glyphicon-film"></span> <?php the_title(); ?></a></h4>
					</div>
					<?php if ( $counter % 2 == 0 ): // after every two start a new row ?>
						</div><div class="row">
					<?php endif; ?>
					<?php endwhile; wp_reset_postdata(); ?>
					
				</div>
			</section>
			<?php get_template_part('template-parts/components/component','heart-to-serve'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
