<?php

/**
 * 2016 masthead template
 */
$hero = get_field('header_image');
$image = get_field('page_header_graphic');

?>
<section class="masthead sales-masthead" itemscope itemtype="http://schema.org/WebPageElement" style="background-image: url('<?php echo $hero['url']; ?>');">
    <meta itemprop="name" content="Mike Staff Productions Wedding Sales Header">
    <meta itemprop="description" content="Main masthead for sales templates">
    <meta itemprop="image" content="<?php echo $hero['url']; ?>">
    <h1 class="screen-reader-text"><?php the_title(); ?></h1>
    <div class="container text-center">
        <img itemprop="thumbnailUrl" src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
        <!--<p><a class="book-now" href="#sales-modal" data-toggle="modal">Book My Appointment</a></p>-->
    </div>
    <div class="sales-caption-wrapper">
        <div class="container">
            <?php if ( get_field('header_title') ): ?>
                <h2 class="tk-ff-market-web"><?php the_field('header_title'); ?></h2>
            <?php 
                endif; 
                if ( get_field('header_content') ): 
                    the_field('header_content'); 
                 endif; 
            ?>

            <div class="row">
                <?php 
                    /**
                     * Count Rows in repeater to determine class 
                     * Count of 3 is col-sm-4
                     * Count of 4 is col-sm-3
                     */
                    $count = count( get_field('packages') ); 
                    if( $count === 3 ) {
                        $class = 4;
                    } elseif( $count === 4 ) {
                        $class = 3;
                    }
                    while ( have_rows('packages') ) : the_row(); ?>
                    <div class="col-xs-12 col-ms-6 col-sm-<?php echo $class; ?> text-center">
                        <a href="#<?php the_sub_field('package_id'); ?>"><?php the_sub_field('package_title'); ?></a>
                    </div>  
                <?php endwhile; ?>
            </div>

        </div>
    </div>
</section>