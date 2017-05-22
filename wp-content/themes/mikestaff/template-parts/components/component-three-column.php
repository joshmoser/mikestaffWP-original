<section class="three-column" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="<?php the_sub_field('title'); ?>">
	<meta itemprop="description" content="Three Columns Of Mike Staff Productions Content">
	<div class="container">
		<h2><?php the_sub_field('title'); ?></h2>
	</div>
	<div class="three-column-wrapper">
    	<div class="container">
			<div class="row">
		       	<?php while( have_rows('columns') ) : the_row(); ?>
		        	<div class="col-xs-12 col-sm-4 column">
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