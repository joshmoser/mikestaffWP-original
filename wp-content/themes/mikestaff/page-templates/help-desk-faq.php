<?php
/**
 * Template Name: Help Desk FAQ Page Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mike_Staff_Productions
 */

get_header('help-desk'); 

if (is_page(13760)) {
    $cat = 'videography-services';
    $title = 'Videography';
}

if (is_page(13754)) {
    $cat = 'photography-services';
    $title = 'Photography';

    $album_cat = 'album-design-services';
    $album_title = 'Album Design';
}

if (is_page(13739)) {
    $cat = 'dj-services';
    $title = 'DJ';
}

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="container">
			<div class="row">
				<div class="col-xs-12 col-md-7">
					
					<h1><?php echo $title; ?> FAQ's</h1>
					<div class="panel-group" id="accordion">
						<?php if ( is_page(13739) || is_page(13608) ) { // if is dj or video help desk faq ?>
						<?php   
							$count = 0;
							$args = array(
								'post_type' => 'video-faq',
								'faq_categories' => $cat,
								'showposts' => 100,
								'no_rows_found' => TRUE
							);
							
							$hdfaqloop = NEW WP_Query($args);
							
							while( $hdfaqloop->have_posts() ) : $hdfaqloop->the_post();
							$count++;
						?>
						
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading-<?php echo $count; ?>">
								<h4 class="panel-title">
								<a class="toggle-panel" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $count; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $count; ?>">
									<span class="glyphicon glyphicon-chevron-down"></span> <?php the_title(); ?>
								</a>
								</h4>
							</div>
							<div id="collapse-<?php echo $count; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $count; ?>">
								<div class="panel-body">
									<?php the_content(); ?>
									<?php
									$iframe_string = get_field('faq_video_embed');
									preg_match('/src="([^"]+)"/', $iframe_string, $match);
									$url = $match[1];
									$needle = array('player.','video/');
									$url = str_replace($needle,'', $url);
									//echo $url;
									?>
									<a href="<?php echo esc_url($url); ?>" class="fancybox-vimeo btn btn-primary">Watch Video</a>
								</div>
							</div>
						</div>
						
						
						<?php endwhile; wp_reset_postdata(); ?>
						<?php } else { // if is help desk photo faq?>
						<?php   
							$count = 0;
							$args = array(
								'post_type' => 'video-faq',
								'faq_categories' => $cat,
								'showposts' => 100,
								'no_rows_found' => TRUE
							);
							
							$hdfaqloop = NEW WP_Query($args);
							
							while( $hdfaqloop->have_posts() ) : $hdfaqloop->the_post();
							$count++;
						?>
						
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading-<?php echo $count; ?>">
								<h4 class="panel-title">
								<a class="toggle-panel" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $count; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $count; ?>">
									<span class="glyphicon glyphicon-chevron-down"></span> <?php the_title(); ?>
								</a>
								</h4>
							</div>
							<div id="collapse-<?php echo $count; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $count; ?>">
								<div class="panel-body">
									<?php the_content(); ?>
									<?php
									$iframe_string = get_field('faq_video_embed');
									preg_match('/src="([^"]+)"/', $iframe_string, $match);
									$url = $match[1];
									$needle = array('player.','video/');
									$url = str_replace($needle,'', $url);
									//echo $url;
									?>
									<a href="<?php echo esc_url($url); ?>" class="fancybox-vimeo btn btn-primary">Watch Video</a>
								</div>
							</div>
						</div>
						
						
						<?php endwhile; wp_reset_postdata(); ?>
						<?php
							echo "<h2>" . $album_title . " FAQ's</h2>";
							$args = array(
								'post_type' => 'video-faq',
								'faq_categories' => $album_cat,
								'showposts' => 100,
								'no_rows_found' => TRUE
							);
							
							$hdfaqloop = NEW WP_Query($args);
							
							while( $hdfaqloop->have_posts() ) : $hdfaqloop->the_post();
							$count++;
						?>
						
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading-<?php echo $count; ?>">
								<h4 class="panel-title">
								<a class="toggle-panel" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $count; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $count; ?>">
									<span class="glyphicon glyphicon-chevron-down"></span> <?php the_title(); ?>
								</a>
								</h4>
							</div>
							<div id="collapse-<?php echo $count; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $count; ?>">
								<div class="panel-body">
									<?php the_content(); ?>
									<?php
									$iframe_string = get_field('faq_video_embed');
									preg_match('/src="([^"]+)"/', $iframe_string, $match);
									$url = $match[1];
									$needle = array('player.','video/');
									$url = str_replace($needle,'', $url);
									//echo $url;
									?>
									<a href="<?php echo esc_url($url); ?>" class="fancybox-vimeo btn btn-primary">Watch Video</a>
								</div>
							</div>
						</div>
						
						
						<?php endwhile; wp_reset_postdata(); ?>
						<?php } ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<p class="text-center" style="margin-top: 30px;">
					<img class="" src="<?php echo get_template_directory_uri(); ?>/img/help-desk/form-cta-mobile-2.png" alt="" /></p>
					<?php get_template_part('template-parts/help-desk/help-desk-form'); ?>
					<h3>Other FAQ's</h3>
					<ul>
						<li><h4><a href="<?php echo home_url(); ?>/help-desk/wedding-dj/faq/">DJ Services</a></h4></li>
						<li><h4><a href="<?php echo home_url(); ?>/help-desk/wedding-photography/faq/">Photography Services</a></h4></li>
						
						<li><h4><a href="<?php echo home_url(); ?>/help-desk/wedding-videography/faq/">Videography Services</a></h4></li>
					</ul>
					
				</div>
				
			</div>
			
		</section>
		<?php get_template_part('template-parts/components/component','heart-to-serve'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
