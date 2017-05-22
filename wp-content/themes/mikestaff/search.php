<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Mike_Staff_Productions
 */
$image = get_field('blog_hero_image','options');
get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="blog-hero" itemscope itemtype="http://schema.org/WebPageElement" style="background-image: url('<?php echo $image['sizes']['lg-blog-thumb']; ?>');">
                <meta itemprop="image" content="<?php echo $image['url']; ?>">
                <div class="title-wrapper">
                    <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'mikestaff' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
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
                            get_template_part( 'template-parts/content', 'search' );

                        endwhile;

                        the_posts_navigation();

                        ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>

            </section>

		</main><!-- #main -->
	</section><!-- #primary -->

    <?php get_template_part( 'template-parts/components/component', 'blog-form-check-availability' ); ?>
    
<?php
get_footer();
