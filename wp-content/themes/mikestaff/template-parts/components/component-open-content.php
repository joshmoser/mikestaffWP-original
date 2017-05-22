<?php
/**
 * Template for displaying open content componant
 */
?>
<section class="container open-content" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="Mike Staff Productions Content">
	<meta itemprop="description" content="<?php echo wp_trim_words( get_sub_field( 'open_content' ), 20 ); ?>">
	<?php the_sub_field('open_content'); ?>
</section>