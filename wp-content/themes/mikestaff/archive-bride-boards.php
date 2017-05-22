<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mike_Staff_Productions
 */

get_header('bride-boards'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="container">

				<?php
				if ( have_posts() ) : ?>
		
					<header class="page-header">
						<h1>Love The Options For Your Wedding</h1>
						<p>Michigan bride’s wedding dresses? The most delicious wedding cake? Beautiful Detroit bride’s wedding shoes? Our Bride Boards have you covered! Hundreds and hundreds of amazing 		Michigan wedding photographs to help inspire your big day. Click through the categories below, pin your favorites to Pinterest, share on Facebook, or even email to a friend. Our Mike 		Staff Productions wedding photographers have gathered the best of the best to help make your wedding amazing.</p>
					</header><!-- .page-header -->
					<div class="row">
					<?php while ( have_posts() ) : the_post();?>
						<div class="col-xs-12 col-ms-6 col-sm-6 col-md-4 bridal-board-category">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('blog-thumb'); ?>
								<div class="board-title">
									<h3><?php the_title(); ?></h3>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
		
					</div><!-- /.row -->
		
				<?php endif; ?>
			</section>
			<?php get_template_part('template-parts/components/component','heart-to-serve'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
