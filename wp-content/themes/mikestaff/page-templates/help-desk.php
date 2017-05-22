<?php
/**
 * Template Name: Help Desk Page Template
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
								<h1 class="text-center">WELCOME TO THE <span>HELP DESK</span></h1>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 col-sm-offset-2 col-md-offset-2 col-lg-offset-3">
								<div class="embed-responsive embed-responsive-16by9 video-wrapper">
									<iframe src="https://player.vimeo.com/video/129842343" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="help-desk-content-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-12">
									<h2>I’VE BOOKED MIKE STAFF PRODUCTIONS FOR MY WEDDING.  NOW WHAT?</h2>
									<p>We’ve made it easy for us to work together.  Please start by watching the short video above, and then choose your service below.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-4 text-center">
									<a href="<?php echo home_url('/help-desk/wedding-dj/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/help-desk/clinet-hub-dj.png" alt="" /></a>
								</div>
								<div class="col-xs-12 col-sm-4 text-center">
									<a href="<?php echo home_url('/help-desk/wedding-photography/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/help-desk/client-hub-photo.png" alt="" /></a>
								</div>
								<div class="col-xs-12 col-sm-4 text-center">
									<a href="<?php echo home_url('/help-desk/wedding-videography/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/help-desk/client-hub-video.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="help-desk-form-wrapper">
				<div class="container">
					<div class="col-xs-12 col-sm-12 col-md-6 text-center">
						<img class="help-desk-cta hidden-md hidden-lg" src="<?php echo get_template_directory_uri(); ?>/img/help-desk/form-cta-mobile.png" alt="" />
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
