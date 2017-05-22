<?php
/**
 * The template for displaying archive pages.
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
                    <?php
                        the_archive_title('<h1>','</h1>');

                        if( get_the_archive_description() ):
                            the_archive_description('<h2>','</h2>');
                        endif;
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
