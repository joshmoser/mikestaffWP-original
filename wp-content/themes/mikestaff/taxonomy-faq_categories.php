<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mike_Staff_Productions
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="container">

				<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php _e('') . single_term_title(); ?> FAQ</h1>
						<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
					</header><!-- .page-header -->

					<div class="row">

					<?php while ( have_posts() ) : the_post(); 
						$term = wp_get_post_terms($post->ID,'faq_categories', array('fields' => 'names'));
						$classname = str_replace(' ','-',$term[0]);
						$classname = strtolower($classname);
					?>

						<div class="col-xs-12 col-sm-4">

							<div class="video-board-category">
								<article id="post-<?php the_ID(); ?>" class="video-category-<?php echo $classname; ?>">
									<a href="<?php the_permalink(); ?>">
										<div class="video-title">
											<h3><?php the_title(); ?></h3>
										</div>
										<!--<div class="video-category-title">
											<h4>DJ Services</h4>
										</div>-->
									</a>
									
								</article><!-- #post-## -->
								
							</div>

						</div>

					<?php endwhile; ?>

					</div><!-- /.row -->
				<?php endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
