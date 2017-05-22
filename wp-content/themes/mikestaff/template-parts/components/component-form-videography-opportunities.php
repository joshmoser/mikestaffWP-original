<?php
/**
 * Template for displaying dj opportunity form
 */
?>

<section class="employment-form" itemscope itemtype="http://schema.org/WebPageElement">
        <meta itemprop="name" content="Wedding Videography Opportunity Form">
        <meta itemprop="description" content="Form with questions to prequalify wedding videography job">
        <div class="container">
        	<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
				<h3>Inquiry Form</h3>
				<p>YES! I’m Interested … Please fill out the form and we will contact you within a few days. Thank you for your interest.</p>

            	<div class="row">
            	    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
            	        <h4 id="about">About You <span class="glyphicon glyphicon-share-alt"></span></h4>
            	    </div>
	
            	    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
            	    	<div class="row">
            	    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">First Name</label>
									<input type="text" class="form-control" name="firstname" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">Last Name</label>
									<input type="text" class="form-control" name="lastname" required>
								</div>
							</div>
						</div><!-- /.row -->
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">Email</label>
									<input type="email" class="form-control" name="email" required>
								</div>							
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">Phone</label>
									<input type="text" class="form-control" name="phone" required>
								</div>							
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->

            	<div class="row">
            	    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
            	        <h4 id="about">Professional Details <span class="glyphicon glyphicon-share-alt"></span></h4>
            	    </div>
	
            	    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
            	    	<div class="row">
            	    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">Video Experience</label>
									<textarea name="video_experience" class="form-control"></textarea>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">How many wedding are you available to shoot during the year?</label>
									<input type="text" class="form-control" name="how_many_weddings_are_you_available_to_shoot_during_the_year_" required>
								</div>
							</div>
						</div><!-- /.row -->
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">How many Saturdays per month are you available (May - October)?</label>
									<select name="how_many_saturdays_per_month_are_you_available_during_the_busy_wedding_season" class="form-control">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>							
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">Please briefly include any additional comments or questions you may have.</label>
									<textarea name="please_briefly_include_any_additional_comments_or_questions_you_may_have_" class="form-control"></textarea>
								</div>	
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
				<div class="row">
					<div class="col-xs-12 text-right">
						<input type="hidden" name="form_name" value="videography_opportunity">
            			<input type="hidden" name="location" value="<?php the_field('location'); ?>">
            			<input type="hidden" name="url" value="<?php the_permalink(); ?>">
            			<input type="hidden" name="page_name" value="<?php the_title(); ?>">
            			<?php wp_nonce_field( 'ca_submission', 'ca_submission_nonce_field' ); ?>
            			<button type="submit" class="btn btn-primary">Submit</button> 
            		</div>					
				</div>
			</form>
        </div>
</section>