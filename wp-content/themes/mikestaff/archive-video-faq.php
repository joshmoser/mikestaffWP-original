<?php 

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<!-- section -->
	<section class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1><?php _e( 'You Have Questions, We Have Answers.', 'mikestaffproductions' ); ?></h1>
				<p>Welcome to our FAQ Videos. It’s ALWAYS okay to ask questions. You probably have a few, so we have compiled the ones
					we get asked most frequently and had our team of experts answer them. Click on the individual questions below for
					the answer, or sort out the questions by service. As always, if you have a specific question pertaining to your wedding
					services, please call <a href="tel:248-689-0777">(248) 689-0777</a> or email <a href="mailto:greatservice@mikestaff.com">greatservice@mikestaff.com</a>.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- search 
					<form class="search-form form-inline faq-search" method="get" action="<?php echo home_url(); ?>" role="search">
						<div class="form-group">
							<input class="search-input form-control" type="search" name="s" placeholder="<?php _e( 'Search FAQ Videos.', 'gtbusinessdesign' ); ?>">
							<input type="hidden" name="post_type" value="video-faq" />
							<button class="search-submit btn btn-primary" type="submit" role="button"><?php _e( 'Search', 'mikestaffproductions' ); ?></button>
						</div>
					</form>
					 /search -->
				</div>
				</div><!-- End Row -->
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<?php
							/**************************************
							*
											* 		Dj Services Column Query
							*
								**************************************/
						
							$args = array(
								'post_type' => 'video-faq',
								'faq_categories' => 'dj-services',
								'showposts' => 100,
								'no_rows_found' => true
							);
						
							$faq_loop = NEW WP_Query($args);
						
							if ( $faq_loop->have_posts() ) :
								echo '<a class="faq-archive-link" href="' . home_url('/faq-categories/dj-services/') . '">DJ FAQ VIDEOS</a>';
							while ( $faq_loop->have_posts() ) : $faq_loop->the_post();
							$term = wp_get_post_terms($post->ID,'faq_categories', array('fields' => 'names'));
							$classname = str_replace(' ','-',$term[0]);
							$classname = strtolower($classname);
						
						?>
						
						<div class="video-board-category">
							<article id="post-<?php the_ID(); ?>" class="video-category-<?php echo $classname; ?>">
								<a href="<?php the_permalink(); ?>">
									<div class="video-title">
										<h3><?php the_title(); ?></h3>
									</div>
									<div class="video-category-title">
										<h4><span class="tk-ff-market-web">DJ Services</span></h4>
									</div>
								</a>
								
								</article><!-- #post-## -->
								
							</div>
							
							<?php endwhile; endif; wp_reset_postdata(); ?>
							</div><!-- / End DJ Services Column -->
							
							<div class="col-xs-12 col-sm-4">
								<?php
									/**************************************
									*
													* 		Photography Services Column Query
									*
										**************************************/
								
									$args = array(
										'post_type' => 'video-faq',
										'faq_categories' => 'photography-services',
										'showposts' => 100,
										'no_rows_found' => true
									);
								
									$faq_loop = NEW WP_Query($args);
								
									if ( $faq_loop->have_posts() ) :
										echo '<a class="faq-archive-link" href="' . home_url('/faq-categories/photography-services/') . '">Photography FAQ VIDEOS</a>';
									while ( $faq_loop->have_posts() ) : $faq_loop->the_post();
									$term = wp_get_post_terms($post->ID,'faq_categories', array('fields' => 'names'));
									$classname = str_replace(' ','-',$term[0]);
									$classname = strtolower($classname);
								
								?>
								
								<div class="video-board-category">
									<article id="post-<?php the_ID(); ?>" class="video-category-<?php echo $classname; ?>">
										<a href="<?php the_permalink(); ?>">
											<div class="video-title">
												<h3><?php the_title(); ?></h3>
											</div>
											<div class="video-category-title">
												<h4><span class="tk-ff-market-web">Photography</span></h4>
											</div>
										</a>
									</article><!-- #post-## -->
								</div>
									
									<?php endwhile; endif; wp_reset_postdata(); ?>
									<?php
										/**************************************
										*
														* 		Album Services Column Query
										*
											**************************************/
									
										$args = array(
											'post_type' => 'video-faq',
											'faq_categories' => 'album-design-services',
											'showposts' => 100,
											'no_rows_found' => true
										);
									
										$faq_loop = NEW WP_Query($args);
									
										if ( $faq_loop->have_posts() ) :
											//echo '<a class="faq-archive-link" href="' . home_url('/faq-categories/photography-services/') . '">ALBUM DESIGN FAQ VIDEOS</a>';
										while ( $faq_loop->have_posts() ) : $faq_loop->the_post();
										$term = wp_get_post_terms($post->ID,'faq_categories', array('fields' => 'names'));
										$classname = str_replace(' ','-',$term[0]);
										$classname = strtolower($classname);
									
									?>
									
									<div class="video-board-category">
										<article id="post-<?php the_ID(); ?>" class="video-category-<?php echo $classname; ?>">
											<a href="<?php the_permalink(); ?>">
												<div class="video-title">
													<h3><?php the_title(); ?></h3>
												</div>
												<div class="video-category-title">
													<h4><span class="tk-ff-market-web">Album Design</span></h4>
												</div>
											</a>
											
											</article><!-- #post-## -->
											
										</div>
										
										<?php endwhile; endif; wp_reset_postdata(); ?>
										</div><!-- / End Photo Services Column -->
										
										<div class="col-xs-12 col-sm-4">
											
											<?php
												/**************************************
												*
																* 		Dj Services Column Query
												*
													**************************************/
											
												$args = array(
													'post_type' => 'video-faq',
													'faq_categories' => 'Videography-services',
													'showposts' => 100,
													'no_rows_found' => true
												);
											
												$faq_loop = NEW WP_Query($args);
											
												if ( $faq_loop->have_posts() ) :
													echo '<a class="faq-archive-link" href="' . home_url('/faq-categories/videography-services/') . '">Videography FAQ VIDEOS</a>';
												while ( $faq_loop->have_posts() ) : $faq_loop->the_post();
												$term = wp_get_post_terms($post->ID,'faq_categories', array('fields' => 'names'));
												$classname = str_replace(' ','-',$term[0]);
												$classname = strtolower($classname);
											
											?>
											
											<div class="video-board-category">
												<article id="post-<?php the_ID(); ?>" class="video-category-<?php echo $classname; ?>">
													<a href="<?php the_permalink(); ?>">
														<div class="video-title">
															<h3><?php the_title(); ?></h3>
														</div>
														<div class="video-category-title">
															<h4><span class="tk-ff-market-web">Videography</span></h4>
														</div>
													</a>
													
													</article><!-- #post-## -->
													
												</div>
												
												<?php endwhile; endif; wp_reset_postdata(); ?>
												</div><!-- / End Video Services Column -->
												</div><!-- Row -->
											</section>
											<!-- /section -->
												<?php get_template_part('template-parts/components/component','heart-to-serve'); ?>
											</main>
										</div>


<?php get_footer(); ?>
