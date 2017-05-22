<?php
/**
 * Template for displaying latest posts
 */
?>
<section class="latest-posts" itemscope itemtype="http://schema.org/WebPageElement">
        <meta itemprop="name" content="Here Comes The Blog">
        <meta itemprop="description" content="Our Latest Blog Posts, follow at blog.mikestaff.com/blog.">
    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12">

                <h2>Here Comes the <span class="tk-ff-market-web">Blog</span></h2>
                
            </div>

            <?php 
                $args = array( 'posts_per_page' => 3 );
                $recent_posts = NEW WP_Query($args);
                while( $recent_posts->have_posts() ) : $recent_posts->the_post();
            ?>
                    <article class="recent-post col-xs-12 col-sm-4">
                        <header class="entry-header">
                            <div class="text-center">   
                                <?php the_post_thumbnail( 'three-column' ); ?>
                            </div>
                                
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </header>
        
                        <div class="description entry-content">
                            <?php $excerpt = get_the_excerpt(); ?>
                            <p><?php echo $excerpt; ?></p> 
                            <p><a href="<?php the_permalink(); ?>">Read More</a></p>
                        </div>
                    </article>

                <?php endwhile; wp_reset_postdata(); ?>

        </div><!-- end row -->

    </div><!-- container-fluid -->

</section>