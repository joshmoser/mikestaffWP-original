<?php
/**
 * Mike Staff Productions form handlers for Hubspot Forms
 */

function mikestaff_process_dj_opportunities($data) {
//var_dump( $_POST );
/**
 *  
  $_POST[ 'firstname' ]
  $_POST[ 'lastname' ]
  $_POST[ 'email' ]
  $_POST[ 'phone' ]
  $_POST[ 'how_many_years_have_you_been_a_professional_dj_' ]
  $_POST[ 'how_many_wedding_receptions_have_you_dj_d_in_the_past_12_months_' ]
  $_POST[ 'how_many_weddings_would_you_like_to_dj_in_a_year_' ]
  $_POST[ 'how_many_saturdays_per_month_are_you_available_during_the_busy_wedding_season_' ]
  $_POST[ 'desired_nightly_wage' ]
  $_POST[ 'briefly_describe_what_makes_you_great_wedding_dj' ]
  $_POST[ 'what_is_the_most_important_thing_to_you_when_you_dj_a_wedding' ]
  $_POST[ 'equipment_comments' ]
  $_POST[ 'please_briefly_include_any_additional_comments_or_questions_you_may_have' ]
 */
  	if ( ! wp_verify_nonce( $_POST['ca_submission_nonce_field'], 'ca_submission' ) ) die( 'Failed security check' );

   //Process a new form submission in HubSpot in order to create a new Contact.
	$hubspotutk      = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
	$ip_addr         = $_SERVER['REMOTE_ADDR']; //IP address too.
	$url             = $_POST['url'];
	$title           = $_POST['page_name'];
	$hs_context      = array(
	    'hutk' => $hubspotutk,
	    'ipAddress' => $ip_addr,
	    'pageUrl' => $url,
	    'pageName' => $title
	);
	$hs_context_json = json_encode($hs_context);
	
	//Need to populate these variable with values from the form.
	$str_post = "firstname=" . urlencode($_POST['firstname']) 
	    . "&lastname=" . urlencode($_POST['lastname']) 
	    . "&email=" . urlencode($_POST['email']) 
	    . "&phone=" . urlencode($_POST['phone'])
	    . "&how_many_years_have_you_been_a_professional_dj_=" . urlencode($_POST[ 'how_many_years_have_you_been_a_professional_dj_' ])
  		. "&how_many_wedding_receptions_have_you_dj_d_in_the_past_12_months_=" . urlencode($_POST[ 'how_many_wedding_receptions_have_you_dj_d_in_the_past_12_months_' ])
  		. "&how_many_weddings_would_you_like_to_dj_in_a_year_=" . urlencode($_POST[ 'how_many_weddings_would_you_like_to_dj_in_a_year_' ])
  		. "&how_many_saturdays_per_month_are_you_available_during_the_busy_wedding_season_=" . urlencode($_POST[ 'how_many_saturdays_per_month_are_you_available_during_the_busy_wedding_season_' ])
  		. "&desired_nightly_wage=" . urlencode($_POST[ 'desired_nightly_wage' ])
  		. "&briefly_describe_what_makes_you_great_wedding_dj=" . urlencode($_POST[ 'briefly_describe_what_makes_you_great_wedding_dj' ])
  		. "&what_is_the_most_important_thing_to_you_when_you_dj_a_wedding=" . urlencode($_POST[ 'what_is_the_most_important_thing_to_you_when_you_dj_a_wedding' ])
  		. "&equipment_comments=" . urlencode($_POST[ 'equipment_comments' ])
  		. "&please_briefly_include_any_additional_comments_or_questions_you_may_have=" . urlencode($_POST[ 'please_briefly_include_any_additional_comments_or_questions_you_may_have' ])
	    . "&hs_context=" . urlencode($hs_context_json); //Leave this one be
	
	if ( $_POST['location'] === "michigan" ) {
		// michigan endpoint
		$endpoint = 'https://forms.hubspot.com/uploads/form/v2/463974/0cbd2537-f749-46dc-ae0b-f871dc585fd2';
	} elseif ( $_POST['location'] === "chicago" ) {
		// chicago endpoint
		$endpoint = 'https://forms.hubspot.com/uploads/form/v2/463974/58611866-a25e-4ab1-8db2-03234e3e2856';
	}	
	
	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
	@curl_setopt($ch, CURLOPT_URL, $endpoint);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'Content-Type: application/x-www-form-urlencoded'
	));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response    = @curl_exec($ch); //Log the response from HubSpot as needed.
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
	@curl_close($ch);


	if ( $status_code == 204 || $status_code == 302 ) {
		if ( $_POST['location'] === "michigan" ) {
			wp_redirect( home_url("/detroit-weddings/about-us/opportunities/thank-you/") );
			exit;			
		} elseif( $_POST['location'] === "chicago") {
			wp_redirect( home_url("/chicago-weddings/about-us/opportunities/thank-you/") );
			exit;
		}
	} else {
		echo $status_code . " " . $response;	
	}

}

function mikestaff_process_photography_opportunities($data) {

/*
  'firstname'
  'lastname'
  'email'
  'phone'
  'how_many_years_have_you_been_a_professional_wedding_photographer_'
  'how_many_weddings_have_you_photographed_in_your_career_'
  'how_many_weddings_have_you_photographed_in_the_past_12_months_'
  'how_many_weddings_would_you_like_to_photograph_in_a_year_'
  'how_many_saturdays_per_month_are_you_available_during_the_busy_wedding_season'
  'desired_nightly_wage'
  'briefly_describe_what_makes_you_a_great_wedding_photographer'
  'what_is_the_most_important_thing_to_you_when_you_photograph_a_wedding_'
  'what_type_of_camera_do_you_shoot_with_'
  'equipment_comments'
  'a_link_to_samples_of_your_wedding_work_is_appreciated_'
  'please_briefly_include_any_additional_comments_or_questions_you_may_have_'
  'form_name'
  'location'
  'url'
  'page_name'
 */

  	if ( ! wp_verify_nonce( $_POST['ca_submission_nonce_field'], 'ca_submission' ) ) die( 'Failed security check' );

   //Process a new form submission in HubSpot in order to create a new Contact.
	$hubspotutk      = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
	$ip_addr         = $_SERVER['REMOTE_ADDR']; //IP address too.
	$url             = $_POST['url'];
	$title           = $_POST['page_name'];
	$hs_context      = array(
	    'hutk' => $hubspotutk,
	    'ipAddress' => $ip_addr,
	    'pageUrl' => $url,
	    'pageName' => $title
	);
	$hs_context_json = json_encode($hs_context);
	
	//Need to populate these variable with values from the form.
	$str_post = "firstname=" . urlencode($_POST['firstname']) 
	    . "&lastname=" . urlencode($_POST['lastname']) 
	    . "&email=" . urlencode($_POST['email']) 
	    . "&phone=" . urlencode($_POST['phone']) 
  		. "&how_many_years_have_you_been_a_professional_wedding_photographer_="  . urlencode($_POST['how_many_years_have_you_been_a_professional_wedding_photographer_'])
  		. "&how_many_weddings_have_you_photographed_in_your_career_="  . urlencode($_POST['how_many_weddings_have_you_photographed_in_your_career_'])
  		. "&how_many_weddings_have_you_photographed_in_the_past_12_months_="  . urlencode($_POST['how_many_weddings_have_you_photographed_in_the_past_12_months_'])
  		. "&how_many_weddings_would_you_like_to_photograph_in_a_year_="  . urlencode($_POST['how_many_weddings_would_you_like_to_photograph_in_a_year_'])
  		. "&how_many_saturdays_per_month_are_you_available_during_the_busy_wedding_season="  . urlencode($_POST['how_many_saturdays_per_month_are_you_available_during_the_busy_wedding_season'])
  		. "&desired_nightly_wage="  . urlencode($_POST['desired_nightly_wage'])
  		. "&briefly_describe_what_makes_you_a_great_wedding_photographer="  . urlencode($_POST['briefly_describe_what_makes_you_a_great_wedding_photographer'])
  		. "&what_is_the_most_important_thing_to_you_when_you_photograph_a_wedding_="  . urlencode($_POST['what_is_the_most_important_thing_to_you_when_you_photograph_a_wedding_'])
  		. "&what_type_of_camera_do_you_shoot_with_="  . urlencode($_POST['what_type_of_camera_do_you_shoot_with_'])
  		. "&equipment_comments="  . urlencode($_POST['equipment_comments'])
  		. "&a_link_to_samples_of_your_wedding_work_is_appreciated_="  . urlencode($_POST['a_link_to_samples_of_your_wedding_work_is_appreciated_'])
  		. "&please_briefly_include_any_additional_comments_or_questions_you_may_have_="  . urlencode($_POST['please_briefly_include_any_additional_comments_or_questions_you_may_have_'])
	    . "&hs_context=" . urlencode($hs_context_json); //Leave this one be
	
	if ( $_POST['location'] === "michigan" ) {
		// michigan endpoint
		$endpoint = 'https://forms.hubspot.com/uploads/form/v2/463974/896d407c-ddfe-4989-8484-df5f5ea47a94';
	} elseif ( $_POST['location'] === "chicago" ) {
		// chicago endpoint
		$endpoint = 'https://forms.hubspot.com/uploads/form/v2/463974/1e3927ad-dcc3-4fb2-9283-4b87409347da';
	}	
	
	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
	@curl_setopt($ch, CURLOPT_URL, $endpoint);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'Content-Type: application/x-www-form-urlencoded'
	));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response    = @curl_exec($ch); //Log the response from HubSpot as needed.
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
	@curl_close($ch);

	if ( $status_code == 204 || $status_code == 302 ) {
		if ( $_POST['location'] === "michigan" ) {
			wp_redirect( home_url("/detroit-weddings/about-us/opportunities/thank-you/") );
			exit;			
		} elseif( $_POST['location'] === "chicago") {
			wp_redirect( home_url("/chicago-weddings/about-us/opportunities/thank-you/") );
			exit;
		}
	} else {
		echo $status_code . " " . $response;	
	}

}

function mikestaff_process_videography_opportunities($data) {
/*
  'firstname'
  'lastname'
  'email'
  'phone'
  'video_experience'
  'how_many_weddings_are_you_available_to_shoot_during_the_year_'
  'how_many_saturdays_per_month_are_you_available_during_the_busy_wedding_season'
  'please_briefly_include_any_additional_comments_or_questions_you_may_have_'
  'form_name'
  'location'
  'url'
  'page_name'
 */	
  	if ( ! wp_verify_nonce( $_POST['ca_submission_nonce_field'], 'ca_submission' ) ) die( 'Failed security check' );

   //Process a new form submission in HubSpot in order to create a new Contact.
	$hubspotutk      = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
	$ip_addr         = $_SERVER['REMOTE_ADDR']; //IP address too.
	$url             = $_POST['url'];
	$title           = $_POST['page_name'];
	$hs_context      = array(
	    'hutk' => $hubspotutk,
	    'ipAddress' => $ip_addr,
	    'pageUrl' => $url,
	    'pageName' => $title
	);
	$hs_context_json = json_encode($hs_context);
	
	//Need to populate these variable with values from the form.
	$str_post = "firstname=" . urlencode($_POST['firstname']) 
	    . "&lastname=" . urlencode($_POST['lastname']) 
	    . "&email=" . urlencode($_POST['email']) 
	    . "&phone=" . urlencode($_POST['phone'])
  		. "&video_experience="  . urlencode($_POST['video_experience'])
  		. "&how_many_weddings_are_you_available_to_shoot_during_the_year_="  . urlencode($_POST['how_many_weddings_are_you_available_to_shoot_during_the_year_'])
  		. "&how_many_saturdays_per_month_are_you_available_during_the_busy_wedding_season="  . urlencode($_POST['how_many_saturdays_per_month_are_you_available_during_the_busy_wedding_season'])
  		. "&please_briefly_include_any_additional_comments_or_questions_you_may_have_="  . urlencode($_POST['please_briefly_include_any_additional_comments_or_questions_you_may_have_'] )
	    . "&hs_context=" . urlencode($hs_context_json); //Leave this one be
	
	if ( $_POST['location'] === "michigan" ) {
		// michigan endpoint
		$endpoint = 'https://forms.hubspot.com/uploads/form/v2/463974/ba9bdf1c-34a2-4e43-a393-ac7ebaa64a9d';
	} elseif ( $_POST['location'] === "chicago" ) {
		// chicago endpoint
		$endpoint = 'https://forms.hubspot.com/uploads/form/v2/463974/82e9d705-90dd-4191-b536-e07f603cd029';
	}	
	
	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
	@curl_setopt($ch, CURLOPT_URL, $endpoint);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'Content-Type: application/x-www-form-urlencoded'
	));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response    = @curl_exec($ch); //Log the response from HubSpot as needed.
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
	@curl_close($ch);

	if ( $status_code == 204 || $status_code == 302 ) {
		if ( $_POST['location'] === "michigan" ) {
			wp_redirect( home_url("/detroit-weddings/about-us/opportunities/thank-you/") );
			exit;			
		} elseif( $_POST['location'] === "chicago") {
			wp_redirect( home_url("/chicago-weddings/about-us/opportunities/thank-you/") );
			exit;
		}
	} else {
		echo $status_code . " " . $response;	
	}

}

function mikestaff_process_check_availability( $data ) {
/**
  'firstname'
  'lastname'
  'email'
  'phone'
  'interestedDJ'
  'interestedPhoto'
  'interestedVideo'
  'interestedUplighting'
 * 'existing_customer'
 * 'other'
  'wedding_date'
  'reception_venue'
  'message'
  'location'
  'url'
  'form_name'
 */
 
  	if ( ! wp_verify_nonce( $_POST['ca_submission_nonce_field'], 'ca_submission' ) ) die( 'Failed security check' );

   //Process a new form submission in HubSpot in order to create a new Contact.
	$hubspotutk      = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
	$ip_addr         = $_SERVER['REMOTE_ADDR']; //IP address too.
	$url             = $_POST['url'];
	$title           = $_POST['page_name'];
	$hs_context      = array(
	    'hutk' => $hubspotutk,
	    'ipAddress' => $ip_addr,
	    'pageUrl' => $url,
	    'pageName' => $title
	);
	$hs_context_json = json_encode($hs_context);

	$services = "";
	if(isset($_POST['interestedDJ'])) {
		$services .= $_POST['interestedDJ'] . ";";
	}
	if(isset($_POST['interestedPhoto'])) {
		$services .= $_POST['interestedPhoto'] . ";";
	}
	if(isset($_POST['interestedVideo'])) {
		$services .= $_POST['interestedVideo'] . ";";
	}
	if(isset($_POST['interestedUplighting'])) {
		$services .= $_POST['interestedUplighting'] . ";";
	}
	if(isset($_POST['existing_customer'])) {
		$services .= $_POST['existing_customer'] . ";";
	}
	if(isset($_POST['other'])) {
		$services .= $_POST['other'];
	}



	$services_interested = rtrim($services,";");
	
	//Need to populate these variable with values from the form.
	$str_post = "firstname=" . urlencode($_POST['firstname']) 
	    . "&lastname=" . urlencode($_POST['lastname']) 
	    . "&email=" . urlencode($_POST['email']) 
	    . "&phone=" . urlencode($_POST['phone']) 
	    . "&services_interested=" . urlencode($services_interested)
  		. "&wedding_date=" .  urlencode($_POST['wedding_date'])
  		. "&reception_venue=" .  urlencode($_POST['reception_venue'])
  		. "&message=" .  urlencode($_POST['message'])
	    . "&page_source=" . urlencode($_POST['url'])
	    . "&wedding_location=" . urlencode( $_POST['location'])
	    . "&hs_context=" . urlencode($hs_context_json); //Leave this one be
	
	if ( $_POST['location'] === "michigan" || $_POST['location'] === "nolocation" ) {
		// michigan endpoint
		$endpoint = 'https://forms.hubspot.com/uploads/form/v2/463974/8baea1cc-b8ca-4c0d-9822-0f084ffb92cb';
	} elseif ( $_POST['location'] === "chicago" ) {
		// chicago endpoint
		$endpoint = 'https://forms.hubspot.com/uploads/form/v2/463974/9bedef70-8c3a-4f59-bcd9-9b434fc8db7e';
	}	
	
	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
	@curl_setopt($ch, CURLOPT_URL, $endpoint);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'Content-Type: application/x-www-form-urlencoded'
	));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	@curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$response    = @curl_exec($ch); //Log the response from HubSpot as needed.
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
	@curl_close($ch);

	if ( $status_code === 204 || $status_code === 302 ) {
		if ( $_POST['location'] === "michigan" ) {
			wp_redirect( home_url("/detroit-weddings/contact/thank-you/") );
			exit;			
		} elseif( $_POST['location'] === "chicago") {
			wp_redirect( home_url("/chicago-weddings/contact/thank-you/") );
			exit;
		} else {
			wp_redirect( home_url("/contact/thank-you/") );
			exit;			
		}
	} else {
		echo $status_code . " " . $response;	
	}
		
}

function mikestaff_process_sales_form( $data ) {
	/**
	 * name_bride_boards
	 * wedding_date_picker
	 * please_tell_us_the_easiest_way_to_connect_with_you
	 * contact_choice_selection
	 * url
	 * page_name
	 */
	
	if ( ! wp_verify_nonce( $_POST['ca_submission_nonce_field'], 'ca_submission' ) ) die( 'Failed security check' );

   //Process a new form submission in HubSpot in order to create a new Contact.
	$hubspotutk      = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
	$ip_addr         = $_SERVER['REMOTE_ADDR']; //IP address too.
	$url             = $_POST['url'];
	$title           = $_POST['page_name'];
	$hs_context      = array(
	    'hutk' => $hubspotutk,
	    'ipAddress' => $ip_addr,
	    'pageUrl' => $url,
	    'pageName' => $title
	);
	$hs_context_json = json_encode($hs_context);
	
	//Need to populate these variable with values from the form.
	$str_post = "name_bride_boards=" . urlencode( $_POST['name_bride_boards'] )
				. "&wedding_date_picker=" . urlencode( $_POST['wedding_date_picker'] )
	 			. "&please_tell_us_the_easiest_way_to_connect_with_you=" . urlencode( $_POST['please_tell_us_the_easiest_way_to_connect_with_you'] )
	 			. "&contact_choice_selection=" . urlencode( $_POST['contact_choice_selection'] )
	    		. "&hs_context=" . urlencode($hs_context_json); //Leave this one be
	
	if ( $_POST['location'] === "michigan" ) {
		// michigan endpoint
		$endpoint = 'https://forms.hubspot.com/uploads/form/v2/463974/efa98c7e-58d0-4180-8bfc-2aaba0fd3245';
	} elseif ( $_POST['location'] === "chicago" ) {
		// chicago endpoint
		$endpoint = 'https://forms.hubspot.com/uploads/form/v2/463974/52eb2281-2a75-4ae6-864b-e3b77d2e7c1d';
	}	
	
	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
	@curl_setopt($ch, CURLOPT_URL, $endpoint);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'Content-Type: application/x-www-form-urlencoded'
	));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response    = @curl_exec($ch); //Log the response from HubSpot as needed.
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
	@curl_close($ch);
	echo $status_code . " " . $response;
}

function mikestaff_form_handlers() {
	if( isset( $_POST['form_name'] ) ) :
		
		switch ( $_POST['form_name'] ) {
			case 'dj_opportunity':
				mikestaff_process_dj_opportunities( $_POST );
				break;
	
			case 'photography_opportunity':
				mikestaff_process_photography_opportunities( $_POST );
				break;
	
			case 'videography_opportunity':
				mikestaff_process_videography_opportunities( $_POST );
				break;

			case 'check_availability':
				mikestaff_process_check_availability( $_POST );
				break;

			case 'sales-form':
				mikestaff_process_sales_form( $_POST );
				break;
		}
		
	endif;	
}
add_action('init', 'mikestaff_form_handlers', 1);
