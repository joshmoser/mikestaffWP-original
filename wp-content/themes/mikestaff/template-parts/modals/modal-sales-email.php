<?php
/**
 * Template for Sale Page Template bundle modal
 */
?>

<div class="modal sales-modal fade" id="sales-email-modal" itemscope itemtype="http://schema.org/WebPageElement">
	<meta itemprop="name" content="Let's Get Together">
	<meta itemprop="description" content="Please call us at 248-689-0777 to schedule an appointment.  Or we’ll reach out to you right away to schedule a convenient time to meet.">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header text-right">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div class="modal-body-wrapper">
					
					<?php the_field('sales_modal_content'); ?>
					<!--<h2 class="tk-ff-market-web">Let's Get Together</h2>
					<em>Please call us at 248-689-0777 to schedule an appointment. Or we’ll reach out to you right away to schedule a convenient time to meet.</em>-->

					<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">Name*</label>
									<input type="text" name="name_bride_boards" class="form-control" placeholder="Your Name" required>
								</div>								
							</div>

							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">Wedding Date*</label>
									<input type="text" name="wedding_date_picker" class="form-control datepicker" placeholder="Wedding Date" required>
								</div>								
							</div>
						</div><!-- /.row -->
						<div class="row">
							<div class="col-xs-12">
								<p>Please tell us the easiest way to connect with you*</p>
								<div class="radio-inline">
									<label for=""><input type="radio" name="please_tell_us_the_easiest_way_to_connect_with_you" value="phone"> Phone</label>
								</div>
								<div class="radio-inline">
									<label for=""><input type="radio" name="please_tell_us_the_easiest_way_to_connect_with_you" value="email"> Email</label>
								</div>
								<div class="radio-inline">
									<label for=""><input type="radio" name="please_tell_us_the_easiest_way_to_connect_with_you" value="text"> Text</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="form-group">
									<label for="">Contact Choice Selection*</label>
									<input type="text" name="contact_choice_selection" class="form-control" placeholder="Contact Choice" required>
								</div>									
							</div>
						</div>
						<input type="hidden" name="location" value="<?php the_field('location'); ?>">
						<input type="hidden" name="form_name" value="sales-form">
						<input type="hidden" name="page_name" value="<?php the_title(); ?>">
						<input type="hidden" name="url" value="<?php the_permalink(); ?>">
						<button type="submit" class="book-now">Submit</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>