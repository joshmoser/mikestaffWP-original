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
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-6">
            <div class="socialMedia">
               <ul>
               		<?php while ( have_rows('social_media', 'option') ) : the_row(); 
               			$image = get_sub_field('icon');
               		?>
               		<li><a href="<?php the_sub_field('url'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" target="_blank"></a></li>
               		<?php endwhile; ?>
               </ul>
            </div>
         </div>
         <div class="col-xs-12 col-sm-6">
            <p class="home-copyright">// copyright Mike Staff Productions <?php echo date('Y'); ?></p>
         </div>
      </div>
   </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
