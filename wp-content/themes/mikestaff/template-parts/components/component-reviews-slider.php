<?php
/**
 * Template For displaying reviews slider
 */
?>
<section class="service-review-slider" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="Mike Staff Productions Reviews">
	<meta itemprop="description" content="The latest reviews of Mike Staff Productions services.">	
	<div class="container">
		<h2>Check Out Our Latest <span class="tk-ff-market-web">Reviews</span></h2>
	</div>

<div id="carousel-id" class="carousel slide" data-ride="carousel">

	<div class="carousel-inner">
	<?php 
		$counter = 0;
		while( have_rows('service_reviews') ) : the_row(); 
		$counter++; 
		$image = get_sub_field('review_background_image');
	?>
		<div class="item <?php echo ( $counter === 1 ) ? 'active': null; ?> ">
			<img class="review-slider-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			<div class="container">
				<div class="review-slider-caption" itemscope itemtype="http://schema.org/Review">
					<p class="review-author"><img class="service-review-stars" src="<?php echo get_template_directory_uri(); ?>/img/service-review-stars.png"> - <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php the_sub_field('review_author'); ?></span></span></p>
						<p class="review-content"><?php the_sub_field('review_content'); ?></p>
						<ul class="review-links">
							<li id="review-read-more"><a class="service-btn" href="<?php the_sub_field('read_more_button_url'); ?>" target="_blank">Read More Reviews</a></li>	
							<?php 
								while( have_rows('review_logo_images') ) : the_row(); 
								$image = get_sub_field('review_image');
							?>
								<li>
									<a href="<?php the_sub_field('review_url'); ?>" target="_blank">
										<img class="review-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" height="130" width="130">
									</a>
								</li>
							<?php endwhile; ?>
						</ul>
					<!-- Extra hidden microdata -->
					<div style="display: none;">
						<div itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing">
							<span itemprop="name"><?php the_sub_field('review_title'); ?></span>
						</div> 
						<meta itemprop="datePublished" content="<?php the_sub_field('review_date'); ?>">  
						<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
							<meta itemprop="worstRating" content="1"/><span itemprop="ratingValue"><?php the_sub_field('review_rating'); ?></span>/<span itemprop="bestRating">5</span> stars 
						</div>
						<span itemprop="description"><?php the_sub_field('description_of_reviewed_product'); ?></span>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; ?>

	</div>
	<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
</section>