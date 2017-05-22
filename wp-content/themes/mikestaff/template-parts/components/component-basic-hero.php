<?php
/**
 *  Template for displaying the basic image header
 */
?>
<section class="hero" itemscope itemtype="http://schema.org/WebPageElement">
    <?php if ( get_sub_field('hero_image') ) : ?>
        <?php $image = get_sub_field('hero_image'); if( !empty($image) ): ?>
            <meta itemprop="image" content="<?php echo $image['url']; ?>">
            <img class="img-featured" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
    <?php endif; ?>
    
    <div class="hero-description">
        <div class="hero-caption-wrapper">
            <?php if(get_sub_field('hero_title') ) : ?>
            <meta itemprop="name" content="<?php the_sub_field('hero_title'); ?>">
                <h2><?php the_sub_field('hero_title'); ?></h2>
            <?php endif; ?>
            
            <br class="clear" />
            
            <?php if(get_sub_field('hero_caption')) : ?>
                <p class="hero-caption"><?php the_sub_field('hero_caption'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>