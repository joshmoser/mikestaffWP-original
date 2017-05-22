<?php
/**
 * Template Name: Sales Page Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mike_Staff_Productions
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <article <?php post_class(); ?> itemscope itemtype="http://schema.org/WebPage">
                <meta itemprop="name" content="<?php the_title(); ?>">
                <meta itemprop="url" content="<?php the_permalink(); ?>">
                <meta itemprop="image" content="<?php echo the_post_thumbnail_url(); ?>">
                <meta itemprop="description" content="<?php the_excerpt(); ?>">

				<?php 
					get_template_part('template-parts/components/component', 'sales-hero');
					while ( have_rows('packages') ) : the_row();
						get_template_part('template-parts/components/component', 'sales-packages');
					endwhile;
				?>

            </article>
            <?php // get_template_part('template-parts/modals/modal','sales-bundle'); ?>
			<?php // get_template_part('template-parts/modals/modal','sales-email'); ?>
        </main>
    </div>
<?php
get_footer();