<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mike_Staff_Productions
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
			if( get_field( 'location' ) === 'michigan' ) {
				get_template_part( 'template-parts/components/component', 'michigan-info' ); 
			} elseif( get_field( 'location' ) === 'chicago' ) {
				get_template_part( 'template-parts/components/component', 'chicago-info' ); 
			} else {
				get_template_part( 'template-parts/components/component', 'nolocation-info' );
			}
		?>
		<div class="copyright">&copy; Mike Staff Productions, Inc. 1994-<?php echo date('Y'); ?>. All Right Reserved.</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php if( is_single() ) : ?>
	<script async defer data-pin-hover="true" data-pin-tall="true" data-pin-lang="en" data-pin-save="true" src="//assets.pinterest.com/js/pinit.js"></script>
<?php endif; ?>
<?php 
    if ( get_field( 'footer_scripts') ) : 
        the_field( 'footer_scripts' ); 
    endif; 
?>
</body>
</html>
