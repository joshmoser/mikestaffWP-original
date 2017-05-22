<?php
/**
 * Locations Component Template
 */
?>

<section class="container" itemscope itemtype="http://schema.org/WebPageElement">
    <meta itemprop="name" content="Mike Staff Production Locations">
    <meta itemprop="description" content="Find the location nearest you to book wedding dj, wedding photography and wedding videography services">
    <?php while( have_rows('add_location') ) : the_row(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('location'); ?>>

            <div class="row">

                <div class="col-xs-12 col-sm-5 col-lg-5">
        
                    <?php if( get_sub_field('location_image') ) : 
                        $image = get_sub_field( 'location_image');
                    ?>
                                        
                        <img class="location-thumbnail" src="<?php echo $image['sizes']['location-thumb'];?>" alt="<?php echo $image['alt']; ?>" />
                    
                    <?php endif; ?>

                </div>

                <div class="col-xs-12 col-sm-7 col-lg-7">
                    
                    <?php if( get_sub_field('location_title') ) : ?>
                                        
                        <h2 class="location-title"><?php the_sub_field('location_title'); ?></h2>
                    
                    <?php endif; ?>
                    
                    <?php if( get_sub_field('location_content') ) : ?>
                                        
                        <p><?php the_sub_field('location_content'); ?></p>
                    
                    <?php endif; ?>

                </div><!-- End Column -->

            </div><!-- End Row -->
        
        </article>

    <?php endwhile; ?>

</section>