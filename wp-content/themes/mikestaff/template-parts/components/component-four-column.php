<section class="four-column" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="<?php the_sub_field('title'); ?>">
	<meta itemprop="description" content="Four Columns Of Mike Staff Productions Content">
	<?php if ( get_sub_field('title') ) :  ?>
		<div class="container">
			<h2><?php the_sub_field('title'); ?></h2>
		</div>
	<?php endif; ?>
	<div class="four-column-wrapper">
    	<div class="container">
			<div class="row">
		       	<?php while( have_rows('columns') ) : the_row(); ?>
		        	<div class="col-xs-12 col-ms-6 col-sm-6 col-md-3 column">
		       			<a href="<?php the_sub_field('url'); ?>">
		       				<?php $image = get_sub_field('image'); ?>
		       				<img class="about-img" src="<?php echo $image['sizes']['three-column']; ?>" alt="<?php echo $image['alt']?>" />
		       				<h3><?php the_sub_field('title'); ?></h3>
						</a>
					</div>
				<?php endwhile; ?>
			</div><!-- End Row -->
		</div><!-- End Container -->
	</div>
</section>