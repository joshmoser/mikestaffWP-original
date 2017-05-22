<?php
/**
 * Template Name: Help Desk Child Page Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mike_Staff_Productions
 */

get_header('help-desk'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="help-desk-welcome-wrapper">
			<div class="hd-welcome-inner-wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="text-center text-uppercase"><?php the_title(); ?> <span>HELP DESK</span></h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 col-sm-offset-2 col-md-offset-2 col-lg-offset-3">
							<div class="embed-responsive embed-responsive-16by9 video-wrapper">
								<?php the_field('video_embed'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		/*
		*
		* NOTE: This section contains variable page content
		* that is within the help desk folder.
		*
		* This content is page specific and will be loaded
		* based on page id
		*
		*/
		if ( is_page( 13737 ) ) {
			get_template_part('template-parts/help-desk/content','dj');
		}
		if ( is_page( 13741 ) ) {
			get_template_part('template-parts/help-desk/content','photography');
		}
		if ( is_page( 13758 ) ) {
			get_template_part('template-parts/help-desk/content','videography');
		}
		// Add Design
		?>
		<?php if (get_field('subtitle_2')) { ?>
		<section class="help-desk-content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2><?php the_field('subtitle_2'); ?></h2>
						<?php the_field('content_area_2'); ?>
					</div>
				</div>
			</div>
		</section>
		<?php } ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-5 col-lg-offset-1">
						<?php $faqurl = $_SERVER['REQUEST_URI']; $faqurl .= 'faq/'; ?>
						<a href="<?php echo $faqurl; ?>"><img class="hd-faq-link-graphic" src="<?php echo get_template_directory_uri(); ?>/img/help-desk/hd-faq-link-2.png" alt="" /></a>
					</div>
				</div>
			</div>
		</section>
		<section class="help-desk-form-wrapper">
			<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-6 text-center">
					<img class="help-desk-cta hidden-md hidden-lg" src="<?php echo get_template_directory_uri(); ?>/img/help-desk/form-cta-mobile-2.png" alt="" />
					<img class="help-desk-cta hidden-xs hidden-sm" src="<?php echo get_template_directory_uri(); ?>/img/help-desk/form-cta-2.png" alt="" />
				</div>
				<div class="col-xs-12 col-md-6">
					<?php get_template_part('template-parts/help-desk/help-desk-form'); ?>
				</div>
			</div>
		</section>
		<?php get_template_part('template-parts/components/component','heart-to-serve'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
