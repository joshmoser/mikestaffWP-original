<?php
/**
 * Template Name: Help Desk Basic Page Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Mike_Staff_Productions
 */

get_header('help-desk'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <section>

        	<?php if(get_field('hero_image') ) : ?>
                
                <?php get_template_part('template-parts/components/components','basic-hero'); ?>
        		    
        	<?php endif; ?>

        </section>

        <section>
        	<div class="container">

                <div class="row">

                    <div class="col-xs-12">

                        <?php while (have_posts()) : the_post(); ?>
                        
                            <!-- article -->
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            	<?php the_title('<h1 class="entry-title">','</h1>'); ?>
                            
                               <?php the_content(); ?>

                                <?php edit_post_link(); ?>

                            </article>
                            <!-- /article -->
                        
                        <?php endwhile; ?>

                    </div>

                </div><!-- End Row -->
           
           </div><!-- End Container -->

        </section>

        <section class="help-desk-form-wrapper">
        	<div class="container">
        		<div class="col-xs-12 col-sm-12 col-md-6 text-center">
        			<a href="tel:1-248-689-0777"><img class="help-desk-cta hidden-md hidden-lg" src="<?php echo get_template_directory_uri(); ?>/img/help-desk/form-cta-mobile-2.png" alt="" /></a>
        			<a href="tel:1-248-689-0777"><img class="help-desk-cta hidden-xs hidden-sm" src="<?php echo get_template_directory_uri(); ?>/img/help-desk/form-cta-2.png" alt="" /></a>
        		</div>
        		<div class="col-xs-12  col-md-6">
        			<?php get_template_part('template-parts/help-desk/help-desk-form'); ?>
        		</div>
        	</div>
        </section>
        <?php get_template_part('template-parts/components/component','heart-to-serve'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
