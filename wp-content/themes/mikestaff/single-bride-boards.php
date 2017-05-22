<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mike_Staff_Productions
 */

get_header('bride-boards'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="container">
			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title('<h1 class="entry-title">','</h1>'); ?>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
					<div class="row">
						<div class="col-xs-12 col-md-2">
							<?php echo do_shortcode( '[brideboard_navigation]' );?>
						</div>
						<div class="col-xs-12 col-md-10">
							<?php
								if( get_field('embed_gallery') ) :
									the_field('embed_gallery');
								endif;
							?>
						</div>
					</div>
				</div>
				<footer class="entry-footer">
					<?php mikestaff_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</article>
				<?php endwhile; ?>
		</section>
		<?php get_template_part('template-parts/components/component','heart-to-serve'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
