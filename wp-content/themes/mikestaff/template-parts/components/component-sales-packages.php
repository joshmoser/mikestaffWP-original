<?php
/**
 * Template for displaying repeatable packages on sales pages
 */
$image = get_sub_field('background_image');
?>
<section id="<?php the_sub_field('package_id'); ?>" class="sales-packages-wrapper" style="background-image: url('<?php echo $image['url']; ?>');" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="<?php the_sub_field('package_title'); ?>">
	<meta itemprop="description" content="<?php echo wp_trim_words( get_sub_field('package_overview'), 20 ); ?>">
	<meta itemprop="image" content="<?php echo $image['url']; ?>">

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
	   			<h2 class="tk-ff-market-web"><?php the_sub_field('package_title'); ?></h2>
       			<?php the_sub_field('package_overview'); ?>
       		</div>
       	</div>
    </div>

    <div class="container">
    	<div class="row vertical-align">
			<?php 
                    /**
                     * Count Rows in repeater to determine class 
                     * Count of 3 is col-sm-4
                     * Count of 3 is col-sm-4
                     */
                    $count = count( get_sub_field('package_columns') ); 
                    if( $count === 1 ) {
                        $class = 'col-sm-4 col-sm-offset-4';
                    } elseif( $count === 2 ) {
                        $class = 'col-sm-4 col-sm-offset-2';
                    } elseif ( $count === 3 ) {
						$class = 'col-sm-4';
                    }
				while ( have_rows('package_columns') ) : the_row(); ?>
    				<div class="col-xs-12 <?php echo $class; ?>">
    					<div class="sales-column-inner">
    						<?php the_sub_field('column_content'); ?>
    						<!--<p class="text-center"><a class="book-now" href="#sales-modal" data-toggle="modal">Book My Appointment</a></p>-->
    					</div>
    				</div>						
			<?php endwhile; ?>
		</div>
    </div>

</section>