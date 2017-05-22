<?php
/**
 * Template for displaying date picker
 */
?>
<div class="service-modal-form">
	<p id="service-loading-modal" class="hidden text-center">Checking the database.... <img src="<?php echo get_template_directory_uri(); ?>/img/service-spinner-blue.gif"></p>
	<form id="service-check-date-form-modal" class="form-inline">
		<h3><i>Check Availability for your Wedding</i></h3>
		<p>Due to the immense popularity of Mike Staff Productions, our schedule fills up quickly.  See if we’re available for your Big Day …</p>
		<div class="text-center">
			<div class="form-group">
				<label><i>When is your wedding?</i></label>
				<input type="text" id="checkdate-modal" class="form-control datepicker" required>
			</div>
			<button type="submit" class="btn btn-primary">Check My Date</button>
		</div>
	</form>
</div>
