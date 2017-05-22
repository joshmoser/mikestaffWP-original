<div class="help-desk-form contact-page-form">

<?php
    global $form_msg;
    if ($form_msg) {
        echo '<div id="error" class="alert alert-info text-center" role="alert">' . implode('<br />',$form_msg) . '</div>';
    }
?>

	<form action="" method="POST">

		<h2 id="availability-form-title" class="h1">CONTACT US.</h2>
		
		<div class="form-group">
			<input type="text" class="form-control" name="hd-name" placeholder="Your Name" required>
		</div>

		<div class="form-group">
			<input type="email" class="form-control" name="hd-email" placeholder="Your Email" required>
		</div>

		<div class="form-group">
			<input type="tel" class="form-control" name="hd-phone" placeholder="Your Phone" required>
		</div>

    <?php

        // first build the month dropdown
        $months = array('January','February','March','April','May','June','July','August','September','October','November','December');
        $monthSelect = '<select id="dateMonth" name="dateMonth">';

        // iterate through the months to build the options
        $i=0;
        foreach($months as $month) {
            
            // need the actual value of the option to be a two digit number, not the name of the month
            if ($i++ < 9) {
                $monthValue = '0'.$i;
            }
            else {
                $monthValue = $i;
            }
            $monthSelect .= '<option value="'.$monthValue.'">'.$month.'</option>';
        }
        $monthSelect .= '</select>';

        // now build the day dropdown
        $daySelect = '<select id="dateDay" name="dateDay">';
        for($i=1;$i<=31;$i++) {

            // need the actual value of the option to be a two digit number, not just the integer
            if ($i < 10) {
                $dayValue = '0'.$i;
            }
            else {
                $dayValue = $i;
            }
            $daySelect .= '<option value="'.$dayValue.'">'.$i.'</option>';
        }
        $daySelect .= '</select>';

        // now build the year dropdown
        $startYear = date("Y");

        // this is the variable that determines how many years in advance you go
        $yearsInAdvance = 5;

        $yearSelect = '<select id="dateYear" name="dateYear">';
        for($i=0;$i<$yearsInAdvance;$i++) {
            $yearSelect .= '<option value="'.($startYear+$i).'">'.($startYear+$i).'</option>';
        }
        $yearSelect .= '</select>';

        // output the dropdowns
        echo '<div class="form-group">'.$monthSelect.$daySelect.$yearSelect. '</div>';
     

    ?>

		<div class="form-group">
			<input type="text" class="form-control" name="hd-services" placeholder="Services Booked">
		</div>

		<div class="form-group">
			<select class="form-control" name="hd-location" required>
				<option disabled selected>Select Your Location</option>
				<option value="michigan">Michigan / Detroit</option>
				<option value="chicago">Chicagoland</option>
			</select>
		</div>

        <input style="display: none;" id="spambot" type="text" class="form-control" name="hd-spambot"> 

		<div class="form-group">
			<textarea class="form-control" name="hd-message" placeholder="Your Message" required></textarea>
		</div>
	
		<div class="form-group">
			<input type="submit" name="hd-submit" class="btn submit btn-large" value="Submit">
		</div>
	
	</form>

</div>