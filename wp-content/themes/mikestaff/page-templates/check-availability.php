<?php
/**
 * Template Name: Check Availability
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article <?php post_class(); ?> itemscope itemtype="http://schema.org/WebPage">
				<meta itemprop="name" content="<?php the_title(); ?>">
				<meta itemprop="url" content="<?php the_permalink(); ?>">
				<meta itemprop="image" content="<?php echo the_post_thumbnail_url(); ?>">
				<meta itemprop="description" content="<?php the_excerpt(); ?>">

				<section>
					<div id="ca-header" style="width: 100%; height: 318px; background-image: url('<?php echo get_template_directory_uri(); ?>/img/ca-header-before.jpg'); background-size: cover; background-position: center center;"></div>
					<img id="ca-after" style="display: none;" src="<?php echo get_template_directory_uri(); ?>/img/ca-header-after.jpg" alt="">
				</section>
							
				<?php get_template_part('template-parts/check-availability-page-form'); ?>
			</article>
		</main>
	</div>
<?php
get_footer();