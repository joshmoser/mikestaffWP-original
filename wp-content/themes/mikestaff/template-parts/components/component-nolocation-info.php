	<div class="container">

		<div class="row">
			
			<div class="col-xs-12 col-sm-4 other-services">
				<div id="otherServices">
					<h4>Services</h4>
					<p><a href="<?php echo home_url('/detroit-weddings/'); ?>">Detroit Weddings</a></p>
					<p><a href="<?php echo home_url('/chicago-weddings/'); ?>">Chicago Weddings</a></p>
			    </div>
			</div>
			
			<div class="col-xs-12 col-sm-4 socialMedia">
				<h4>Social</h4>
				<ul>
               		<?php while ( have_rows('social_media', 'option') ) : the_row(); 
               			$image = get_sub_field('icon');
               		?>
               		<li><a href="<?php the_sub_field('url'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" target="_blank"></a></li>
               		<?php endwhile; ?>
				</ul>
				
				<div class="clearfix"></div>
				
				<h4>More Information</h4>
				
				<p><a href="<?php echo home_url('/privacy-policy/'); ?>">Privacy Policy</a></p>
				<p><a href="<?php echo home_url('/sitemap/'); ?>">Site Map</a></p>

	        </div>
		    
			<div class="col-xs-12 col-sm-4 locations">
				
				<div id="locations">
					<h4>Locations</h4>
					<address class="address" itemscope itemtype="http://schema.org/LocalBusiness">
					   <strong><a href="https://plus.google.com/+Mikestaff/about/" target="_blank"><span itemprop="name">Mike Staff Productions - Michigan</span></strong>
					   	<meta itemprop="description" content="<?php echo bloginfo( 'description' ); ?>">
					   	<meta itemprop="logo" content="<?php echo get_template_directory_uri(); ?>/img/logo-blue-md.png">
					   	<meta itemprop="openingHours" content="Mo,Tu,We,Th,Fr 8:00-18:30">
					   	<meta itemprop="url" content="<?php echo home_url(); ?>">
					   <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					     <span itemprop="streetAddress">1934 Livernois Road</span><br />
					     <span itemprop="addressLocality">Troy</span>,
					     <span itemprop="addressRegion">Michigan</span>
					     <span itemprop="postalCode">48083</span>
					   </div></a>
					   <p class="phone"><a href="tel:877-689-0777">Michigan: <span itemprop="telephone">877-689-0777</span></a></p>
					</address>

					<address class="address" itemscope itemtype="http://schema.org/LocalBusiness">
					   <strong><a href="https://plus.google.com/113372443654458541966/about/" target="_blank"><span itemprop="name">Mike Staff Productions - Chicago</span></strong>
					   	<meta itemprop="description" content="<?php echo bloginfo( 'description' ); ?>">
					   	<meta itemprop="logo" content="<?php echo get_template_directory_uri(); ?>/img/logo-blue-md.png">
					   	<meta itemprop="openingHours" content="Mo,Tu,We,Th,Fr 8:00-18:30">
					   	<meta itemprop="url" content="<?php echo home_url(); ?>">
					   <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
					     <span itemprop="streetAddress">3 S. Prospect Ave Suite 5A</span><br />
					     <span itemprop="addressLocality">Park Ridge</span>,
					     <span itemprop="addressRegion">Illinois</span>
					     <span itemprop="postalCode">60068</span>
					   </div></a>
					   <p><a href="tel:773-570-7707">Chicago: <span itemprop="telephone">773-570-7707</span></a></p>
					</address>
				</div>
				
				<p><a href="<?php echo home_url('/contact/'); ?>">Contact Us</a></p>

			</div>

		</div>
		
	</div><!-- End Container -->