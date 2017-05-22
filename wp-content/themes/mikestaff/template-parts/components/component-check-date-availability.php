<?php
/**
 * Template for displaying the Check Wedding Date Availibility Component
 */
?>
<section class="check-date-availability" itemscope itemtype="http://schema.org/WebPageElement">
    <meta itemprop="name" content="Check Your Wedding Date">
    <meta itemprop="description" content="Datepicker for checking wedding dates Mike Staff Productions is available">
	<div class="container text-center">
		<p id="service-loading" class="hidden">Checking the database.... <img src="<?php echo get_template_directory_uri(); ?>/img/service-spinner-blue.gif"></p>
		<form id="check-date-form" class="form-inline">
			<div class="form-group">
				<label><i>Check Availability for Your Wedding &gt;</i></label>
				<input type="text" id="checkdate" class="form-control datepicker" required>
			</div>
			<button type="submit" class="btn btn-primary">Check My Date</button>
		</form>
	</div>
</section>