<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mike_Staff_Productions
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_post_thumbnail( 'three-column' );
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php mikestaff_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'mikestaff' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mikestaff' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-center">
	        	<?php $image = get_field( 'author_image', 'user_' . get_the_author_meta( 'ID' )); ?>
	        	<img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo $image['alt']; ?>">
	        </div>

	        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
	        	<p><?php the_author_meta( 'description', get_the_author_meta( 'ID' )); ?></p>
	        </div>
		</div>
		<?php mikestaff_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
