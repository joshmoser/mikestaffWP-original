<?php 
/**
 * template displaying service repeater fields
 */
$counter = 0;
while( have_rows('repeating_fields') ) : the_row();
$counter++;

$image = get_sub_field( 'section_background_image' );
?>
<?php if( get_sub_field('display_content_right_or_left') === 'left' ) { ?> 
<section class="service-repeater-field" style="background-image: url('<?php echo $image['url']; ?>');" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="<?php the_sub_field( 'section_large_title' ); ?>">
	<meta itemprop="description" content="<?php echo wp_trim_words( get_sub_field( 'section_content_field' ), 20 ); ?>">
	<meta itemprop="image" content="<?php echo $image['url']; ?>">
	<div class="container">
		<h2 class="col-md-offset-1 col-lg-offset-0"><span class="tk-ff-market-web" itemprop="name"><?php the_sub_field( 'section_large_title' ); ?></span></h2>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-0">
				<div itemprop="text">
					<?php the_sub_field( 'section_content_field' ); ?>
				</div>

				<?php if( get_sub_field('would_you_like_to_add_a_video_or_gallery') === "video" ) : ?>
					<p><a class="service-btn fancybox-vimeo" href="<?php the_sub_field('vimeo_video_link'); ?>"><?php the_sub_field('video_button_text'); ?></a></p>
				<?php endif; ?>

				<?php if( get_sub_field('would_you_like_to_add_a_video_or_gallery') === "gallery" ) : ?>
				<?php $gallery = get_sub_field( 'service_gallery' ); ?>
				<p><a class="service-btn fancybox" href="<?php echo $gallery[0]['sizes']['large']; ?>" rel="group-<?php echo $counter; ?>"><?php the_sub_field('gallery_button_text'); ?></a></p>
				<div class="fancybox-hidden">
					<?php
						array_shift($gallery);
						foreach ($gallery as $image) { ?>
							<a href="<?php echo $image['sizes']['large']; ?>" rel="group-<?php echo $counter; ?>" title="<?php echo $image['alt']; ?>"></a>
					<?php } ?>
				</div>
				<?php endif; ?>

				<?php if( get_sub_field('would_you_like_to_add_a_video_or_gallery') === "link" ): ?>
					<p><a class="service-btn" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_title'); ?></a></p>
				<?php endif; ?>

				<?php if( get_sub_field('additional_buttons_select') === 'yes' ) : 
					while( have_rows('additional_buttons') ) : the_row(); ?>
					<p><a class="service-btn" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_title'); ?></a></p>
				<?php endwhile; endif; ?>

			</div>
		</div>
	</div>
</section>

<?php } else { ?>

<section class="service-repeater-field right-align" style="background-image: url('<?php echo $image['url']; ?>');" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="<?php the_sub_field( 'section_large_title' ); ?>">
	<meta itemprop="description" content="<?php echo wp_trim_words( get_sub_field( 'section_content_field' ), 20 ); ?>">
	<meta itemprop="image" content="<?php echo $image['url']; ?>">
	<div class="container service-repeater-right">
		<h2 class="col-md-pull-0"><span class="tk-ff-market-web" itemprop="name"><?php the_sub_field( 'section_large_title' ); ?></span></h2>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-md-offset-5 col-lg-6 col-lg-offset-6">
				<div itemprop="text">
					<?php the_sub_field( 'section_content_field' ); ?>
				</div>

				<?php if( get_sub_field('would_you_like_to_add_a_video_or_gallery') === "video" ): ?>
					<p><a class="service-btn fancybox-vimeo" href="<?php the_sub_field('vimeo_video_link'); ?>"><?php the_sub_field('video_button_text'); ?></a></p>
				<?php endif; ?>

				<?php if( get_sub_field('would_you_like_to_add_a_video_or_gallery') === "gallery" ) : ?>
				<?php $gallery = get_sub_field( 'service_gallery' ); //var_dump( $gallery ); ?>

				<p><a class="service-btn fancybox" href="<?php echo $gallery[0]['sizes']['large']; ?>" rel="group-<?php echo $counter; ?>"><?php the_sub_field('gallery_button_text'); ?></a></p>
				<div class="fancybox-hidden">
					<?php
						array_shift($gallery);
					foreach ($gallery as $image) { ?>
					<a href="<?php echo $image['sizes']['large']; ?>" rel="group-<?php echo $counter; ?>"></a>
					<?php } ?>
				</div>
				<?php endif; ?>

				<?php if( get_sub_field('would_you_like_to_add_a_video_or_gallery') === "link" ): ?>
					<p><a class="service-btn" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_title'); ?></a></p>
				<?php endif; ?>

				<?php if( get_sub_field('additional_buttons_select') === 'yes' ) : 
					while( have_rows('additional_buttons') ) : the_row(); ?>
					<p><a class="service-btn" href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_title'); ?></a></p>
				<?php endwhile; endif; ?>

			</div>
		</div>
	</div>
</section>
<?php } 
endwhile; 
?>