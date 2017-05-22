<?php
/**
 * Template for displaying share the love videos
 */
$image = get_sub_field('background_image');
?>
<!-- VIDEO GALLERY -->
<section class="share-the-love-video" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="<?php the_sub_field('title'); ?>">
	<meta itemprop="description" content="<?php the_sub_field('title'); ?> - Mike Staff Productions Video">
	<meta itemprop="image" content="<?php echo $image['url']; ?>">
    <a href="<?php echo esc_url( get_sub_field( 'video_share_code' ) ); ?>" class="fancybox-vimeo" >
    	<div class="video-image-wrapper">
    		<img style="width: 100%;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    		<span class="glyphicon glyphicon-play-circle large-play-button sr-only"></span>
    	</div>
		<div class="content">
	        <div class="caption-wrapper">
	            <h3><?php the_sub_field('title'); ?></h3><br />
	            <h4>Click Here To View &nbsp;<span class="glyphicon glyphicon-play-circle"></span></h4>
	        </div>
	    </div>
    </a>
</section>