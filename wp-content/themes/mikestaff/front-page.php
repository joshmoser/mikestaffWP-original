<?php 
/**
 * template for displaying the new 2016 home page
 */
get_header('front-page');
?>

<section class="home-header">
   <div class="home-main text-center">
      <img class="home-logo" src="<?php echo get_template_directory_uri(); ?>/img/front-page/home-logo.png" alt="">
      <h1 class="text-center ">We’re Mike Staff Productions. A four service wedding company: DJ, Photography, HD Videography and Uplighting.</h1>
      <p class="home-direction text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/front-page/home-location.png" alt="Where is your wedding located?"></p>
   </div>
</section>
<section class="home-tagline">
   <div class="container">
      <h2 class="text-center">In order to serve you <strong><em>BEST</em></strong>, we have offices located in Detroit, Chicago & Northern Michigan.</h2>
   </div>
</section>
<section class="wedding-navigation">
   <div class="home-column michigan">
      <div class="content">
         <img src="<?php echo get_template_directory_uri(); ?>/img/front-page/home-mi-weddings.png" alt="">
         <p>Serving Metro Detroit &amp; ALL of Michigan</p>
         <p><a href="<?php echo home_url( '/detroit-weddings/' ); ?>">Click Here</a></p>
      </div>
   </div>
   <div class="home-column chicago">
      <div class="content">
         <img src="<?php echo get_template_directory_uri(); ?>/img/front-page/home-chi-weddings.png" alt="">
         <p>Serving Downtown &amp; ALL of Chicagoland</p>
         <p><a href="<?php echo home_url( '/chicago-weddings/' ); ?>">Click Here</a></p>
      </div>
   </div>
</section>


<?php get_footer('front-page'); ?>