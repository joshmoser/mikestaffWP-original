<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mike_Staff_Productions
 */

if( has_post_thumbnail()) {
	$url= get_the_post_thumbnail_url();
} else {
	$url = get_template_directory_uri() . '/img/BlogHeader_collage_2.png';
}

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="blog-hero" itemscope itemtype="http://schema.org/WebPageElement" style="background-image: url('<?php echo esc_url( $url, 'mikestaffproductions'); ?>');">
                <meta itemprop="image" content="<?php echo $image['url']; ?>">
                <div class="title-wrapper">
                    <?php the_title('<h1>','</h1>'); ?>
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
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_post_navigation();

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
