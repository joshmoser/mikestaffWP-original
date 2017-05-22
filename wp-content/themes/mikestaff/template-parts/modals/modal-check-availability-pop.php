<div class="modal fade" id="check-modal" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="Wedding date availability">
	<meta itemprop="description" content="Check your wedding date availability.">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<?php get_template_part( 'template-parts/modals/modal', 'check-date-availability' ); ?>
			<?php get_template_part( 'template-parts/modals/modal', 'service-check-availability-form' ); ?>
			</div>
		</div>
	</div>
</div>