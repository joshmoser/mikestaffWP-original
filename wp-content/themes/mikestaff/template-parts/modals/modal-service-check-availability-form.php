<div id="service-check-date-form-full" class="hidden">

        <?php
        
            global $errors;
        
            if ($errors) {
        
                echo '<div id="error" class="error">' . implode('<br />',$errors) . '</div>';
        
            }
        
        ?>
        
        <h3><i>Looks like it was meant to be...</i></h3>
        <p>You may no longer be available, but we are!  However, we book fast and dates are limited. </p>
            <p>Please fill out the form below for more information or to arrange a fun, free, no-hassle consultation. </p>
        
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" id="check-availability" class="check-availability-form">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                    <h4 id="about">About You:</h4>
                </div>
            
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
            
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="first" class="screen-reader-text">First Name*</label>
                                <input type="text" class="form-control" id="first" name="first" value="<?php if(isset($_POST['first'])) : echo $_POST['first']; endif; ?>" placeholder="First Name*"        required>
                            </div>              
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">    
                                <label for="last" class="screen-reader-text">Last Name*</label>
                                <input type="text" class="form-control" id="last" name="last" value="<?php if(isset($_POST['last'])) : echo $_POST['last']; endif; ?>" placeholder="Last Name*"         required>
                            </div>              
                        </div>
                    </div><!-- /.row -->
            
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="email" class="screen-reader-text">E-Mail*</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php if(isset($_POST['email'])) : echo $_POST['email']; endif; ?>" placeholder="E-Mail*"        required>
                            </div>              
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="phone" class="screen-reader-text">Phone*</label>
                                <input type="text"class="form-control"  id="phone" name="phone" value="<?php if(isset($_POST['phone'])) : echo $_POST['phone']; endif; ?>" placeholder="Phone*"         required>
                            </div>              
                        </div>
                    </div><!-- / .row -->
            
                </div><!-- /.col -->
            
            </div><!-- / .row -->
            
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                    <h4 id="help">How We Can Help:</h4>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <label class="radio"><input type="checkbox" id="interestedDJ" name="interestedDJ" value="DJ Services">DJ Services</label>
                    <label class="radio"><input type="checkbox" id="interestedPhoto" name="interestedPhoto" value="Photography Services">Photography Services</label>
                    <label class="radio"><input type="checkbox" id="interestedVideo" name="interestedVideo" value="Videography Services">Videography Services</label>
                    <label class="radio"><input type="checkbox" id="interestedUplighting" name="interestedUplighting" value="Uplighting Services">Uplighting Services</label>       
                </div>
            </div><!-- / .row -->
            
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                    <h4 id="more">A Few More things:</h4>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="weddingdate" class="screen-reader-text">Wedding Date</label>
                                <input class="form-control datepicker" type="text" id="weddingdate-modal" name="weddingdate" placeholder="Wedding Date*" required>  
                            </div> 
                            <div class="form-group">
                                <label for="venue" class="screen-reader-text">Reception Venue</label>
                                <input type="text" class="form-control" id="venue" name="venue" placeholder="Reception Venue">
                            </div>         
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="message" class="screen-reader-text">Message</label>
                                <textarea rows="9" name="message" class="form-control" id="message" placeholder="Message"></textarea>
                            </div>              
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <p><a href="<?php echo home_url('/privacy-policy/'); ?>">Privacy Policy</a></p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <?php
                    
                                // figuring out the URL to include as a hidden value
                                // will pass as a GET parameter to the thank you page on /check-availability.php
                                // Ben Steinbuhler 9/30/14
                    
                                $url = $_SERVER['REQUEST_URI'];
                    
                            ?>
                            <input type="hidden" id="form-color" name="form-color" value="">
                            <input type="hidden" value="<?php the_permalink(); ?>" name="url">
                            <input type="hidden" name="page_name" value="<?php the_title(); ?>">
                            <input type="hidden" name="location" value="<?php the_field('location'); ?>">
                            <input type="hidden" name="form_name" value="check_availability">
                            <?php wp_nonce_field( 'ca_submission', 'ca_submission_nonce_field' ); ?>
                            <button type="submit" class="btn btn-primary">Submit</button>                    
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>