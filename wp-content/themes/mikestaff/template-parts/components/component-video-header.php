<?php
/**
 * Template for displaying video header
 */

$image = get_sub_field('page_header_graphic');
?>
<section class="video-header" itemscope itemtype="http://schema.org/WebPageElement">
<meta itemprop="name" content="Mike Staff Productions Wedding Services Video">
<meta itemprop="description" content="Video or Image page header">
<meta itemprop="image" content="<?php echo $image['url']; ?>">
    <h1 class="screen-reader-text"><?php the_title(); ?></h1>

    <?php 
    	if( wp_is_mobile() ) {
    		$mobile_image = get_sub_field('mobile_header_image');
    		_e( '<div class="mobile-wrapper text-center" style="background-image: url(' . $mobile_image['sizes']['three-column'] . ');">' );

        	_e('<img style="max-height: 90%;" itemprop="thumbnailUrl" src="' . $image['url'] . '" alt="' . $image['url'] . '">');

        	_e('</div>');

		} else { ?>

        <?php if( get_sub_field('video_header_choice') === 'detroit-home' ) : ?>
            <div class="service-video-wrapper" itemscope itemtype="http://schema.org/VideoObject">
                <img itemprop="thumbnailUrl" src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
                <video id="masthead-video" autoplay loop muted>
                    <span class="screen-reader-text" itemprop="name"><?php the_sub_field('video_title'); ?></span> 
                    <span class="screen-reader-text" itemprop="description"><?php the_sub_field('video_description'); ?></span>
                    <span class="screen-reader-text" itemprop="uploadDate"><?php the_date(); ?></span> 
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/Detroit_Header_Main_Page.mp4" type="video/mp4">
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/Detroit_Header_Main_Page.ogg" type="video/ogg">
                </video>
            </div>
        <?php endif; ?>

        <?php if( get_sub_field('video_header_choice') === 'chicago-home' ) : ?>
            <div class="service-video-wrapper" itemscope itemtype="http://schema.org/VideoObject">
                <img itemprop="thumbnailUrl" src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
                <video id="masthead-video" autoplay loop muted>
                    <span class="screen-reader-text" itemprop="name"><?php the_sub_field('video_title'); ?></span> 
                    <span class="screen-reader-text" itemprop="description"><?php the_sub_field('video_description'); ?></span>
                    <span class="screen-reader-text" itemprop="uploadDate"><?php the_date(); ?></span> 
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/Chicago_Header_Main_Page.mp4" type="video/mp4">
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/Chicago_Header_Main_Page.ogg" type="video/ogg">
                </video>
            </div>
        <?php endif; ?>



        <?php if( get_sub_field('video_header_choice') === 'detroit-dj' ) : ?>
            <div class="service-video-wrapper" itemscope itemtype="http://schema.org/VideoObject">
                <img itemprop="thumbnailUrl" src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
                <video id="masthead-video" autoplay loop muted>
                    <span class="screen-reader-text" itemprop="name"><?php the_sub_field('video_title'); ?></span> 
                    <span class="screen-reader-text" itemprop="description"><?php the_sub_field('video_description'); ?></span> 
                    <span class="screen-reader-text" itemprop="uploadDate"><?php the_date(); ?></span>
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/DJ_Header_2.mp4" type="video/mp4">
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/DJ_Header_2.ogg" type="video/ogg">
                </video>
            </div>
        <?php endif; ?>

        <?php if( get_sub_field('video_header_choice') === 'chicago-videography' ) : ?>
            <div class="service-video-wrapper" itemscope itemtype="http://schema.org/VideoObject">
                <img itemprop="thumbnailUrl" src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
                <video id="masthead-video" autoplay loop muted>
                    <span class="screen-reader-text" itemprop="name"><?php the_sub_field('video_title'); ?></span> 
                    <span class="screen-reader-text" itemprop="description"><?php the_sub_field('video_description'); ?></span> 
                    <span class="screen-reader-text" itemprop="uploadDate"><?php the_date(); ?></span>
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/Chicago_Videography_Header.mp4" type="video/mp4">
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/Chicago_Videography_Header.ogg" type="video/ogg">
                </video>
            </div>
        <?php endif; ?>

        <?php if( get_sub_field('video_header_choice') === 'detroit-videography' ) : ?>
            <div class="service-video-wrapper" itemscope itemtype="http://schema.org/VideoObject">
                <img itemprop="thumbnailUrl" src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
                <video id="masthead-video" autoplay loop muted>
                    <span class="screen-reader-text" itemprop="name"><?php the_sub_field('video_title'); ?></span> 
                    <span class="screen-reader-text" itemprop="description"><?php the_sub_field('video_description'); ?></span> 
                    <span class="screen-reader-text" itemprop="uploadDate"><?php the_date(); ?></span>
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/Detroit_Header_Videography.mp4" type="video/mp4">
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/Detroit_Header_Videography.ogg" type="video/ogg">
                </video>
            </div>
        <?php endif; ?>

        <?php if( get_sub_field('video_header_choice') === 'chicago-photography' ) : ?>
            <div class="service-video-wrapper" itemscope itemtype="http://schema.org/VideoObject">
                <img itemprop="thumbnailUrl" src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
                <video id="masthead-video" autoplay loop muted>
                    <span class="screen-reader-text" itemprop="name"><?php the_sub_field('video_title'); ?></span> 
                    <span class="screen-reader-text" itemprop="description"><?php the_sub_field('video_description'); ?></span> 
                    <span class="screen-reader-text" itemprop="uploadDate"><?php the_date(); ?></span>
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/Chicago_Photography_Header.mp4" type="video/mp4">
                    <source itemprop="contentUrl" src="<?php echo get_template_directory_uri(); ?>/videos/Chicago_Photography_Header.ogg" type="video/ogg">
                </video>
            </div>
        <?php endif; ?>

    <?php } ?>
</section>