<?php
/**
 * Template for displaying dj opportunity form
 */
?>

<section class="employment-form" itemscope itemtype="http://schema.org/WebPageElement">
        <meta itemprop="name" content="Wedding DJ Opportunity Form">
        <meta itemprop="description" content="Form with questions to prequalify wedding dj job">
        <div class="container">
        	<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
				<h3>Inquiry Form</h3>
				<p>YES! I’m Interested … Please fill out the form and we will contact you within a few days. Thank you for your interest.</p>

            	<div class="row">
            	    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
            	        <h4 id="about">About You <span class="glyphicon glyphicon-share-alt hidden-xs"></span></h4>
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
            	        <h4 id="about">Professional Details <span class="glyphicon glyphicon-share-alt hidden-xs"></span></h4>
            	    </div>
            	    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
            	    	<div class="row">
            	    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">How many years have you been a professional wedding dj?</label>
									<input type="text" class="form-control" name="how_many_years_have_you_been_a_professional_dj_" required>
								</div>
            	    		</div>
            	    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
 								<div class="form-group">
									<label for="" class="">How many wedding receptions have you dj'd in the past 12 months?</label>
									<input type="text" class="form-control" name="how_many_wedding_receptions_have_you_dj_d_in_the_past_12_months_" required>
								</div>               			
            	    		</div>
            	    	</div>
            	    	<div class="row">
            	    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">How many weddings would you like to dj in a year?</label>
									<input type="text" class="form-control" name="how_many_weddings_would_you_like_to_dj_in_a_year_" required>
								</div>                			
            	    		</div>
            	    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
 								<div class="form-group">
									<label for="" class="">How many Saturdays per month are you available (May - October)?</label>
									<select name="how_many_saturdays_per_month_are_you_available_during_the_busy_wedding_season_" class="form-control">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>               		
            	    		</div>
            	    	</div>
            	    	<div class="row">
            	    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
 								<div class="form-group">
									<label for="" class="">Desired Nightly Wage</label>
									<input type="text" class="form-control" name="desired_nightly_wage" required>
								</div>               			
            	    		</div>
            	    	</div>
            	    </div>
            	</div>

            	<div class="row">
            	    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
            	        <h4 id="about">More Information <span class="glyphicon glyphicon-share-alt hidden-xs"></span></h4>
            	    </div>
            	    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
            	    	<div class="row">
            	    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
 								<div class="form-group">
									<label for="" class="">Briefly describe what makes you a great Wedding DJ:</label>
									<textarea name="briefly_describe_what_makes_you_great_wedding_dj" class="form-control"></textarea>
								</div>               			
            	    		</div>
            	    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">What is the most important thing to you when you DJ a wedding?</label>
									<textarea name="what_is_the_most_important_thing_to_you_when_you_dj_a_wedding" class="form-control"></textarea>
								</div>                			
            	    		</div>
            	    	</div>
            	    	<div class="row">
            	    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">Equipment Comments</label>
									<textarea name="equipment_comments" class="form-control"></textarea>
								</div>                			
            	    		</div>
            	    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
									<label for="" class="">Please include any additional comments or questions you may have.</label>
									<textarea name="please_briefly_include_any_additional_comments_or_questions_you_may_have" class="form-control"></textarea>
								</div>                			
            	    		</div>
            	    	</div>
            	    </div>
            	</div>
            	<div class="row">
            		<div class="col-xs-12 text-right">
            			<input type="hidden" name="form_name" value="dj_opportunity">
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