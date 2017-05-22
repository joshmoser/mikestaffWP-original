<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
                    <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mikestaff' ); ?></h1>
                    <p>Check out some options below.</p>
                </div>
            </section>

			<?php get_template_part( 'template-parts/components/component', 'recent-posts' ); ?>
			<?php get_template_part( 'template-parts/components/component', 'additional-services' ); ?>
			<?php get_template_part( 'template-parts/components/component', 'blog-form-check-availability' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
