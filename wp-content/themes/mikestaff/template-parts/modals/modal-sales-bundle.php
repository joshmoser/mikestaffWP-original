<?php
/**
 * Template for Sale Page Template bundle modal
 */
?>

<div class="modal sales-modal fade" id="sales-modal" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="Bundle Your Service Together">
	<meta itemprop="description" content="Bundling your wedding services can save time and money.">
	<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/img/sales-modal-header-2.jpg">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header text-right">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				
				<div class="modal-body-wrapper">
					<?php the_field('modal_bundle_content_field'); ?>
					<!--
					<img class="aligncenter size-large wp-image-14856" src="http://mikestaffweddings.com/wp-content/uploads/sales-modal-header-2-1024x262.jpg" alt="sales-modal-header-2" width="1024" height="262" />
					<h2 class="tk-ff-market-web">Bundle Your Service Together</h2>
					<ul>
					 	<li>DJ + Photo = $200 off</li>
					 	<li>DJ + Video = $200 off</li>
					 	<li>Photo + Video = $200 off</li>
					 	<li>DJ + Photo + Video = $500 off</li>
					 	<li>Uplighting only $595 when bundled with any other service.</li>
					</ul>-->
				</div>
			</div>
			<div class="modal-footer text-center">
				<a id="sales-email-button" href="#" class="book-now">Book My Appointment</a>
			</div>
		</div>
	</div>
</div>