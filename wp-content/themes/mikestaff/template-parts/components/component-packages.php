<?php
/**
 * Template for displaying packages
 */
?>
<section class="service-packages" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="<?php the_title(); ?> - Wedding Packages">
    <meta itemprop="description" content="<?php echo strip_tags( get_sub_field( 'service_package_content', false, false ) ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-7">
				<?php the_sub_field( 'package_content' ); ?>
			</div>
			<div class="col-xs-12 col-md-5 text-center">
				<?php $image = get_sub_field('package_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>
		</div>
	</div>
</section>