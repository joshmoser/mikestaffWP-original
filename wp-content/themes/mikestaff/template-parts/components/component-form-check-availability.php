<section id="check-availability" class="check-availability-form" itemscope itemtype="http://schema.org/WebPageElement">
        <meta itemprop="name" content="Check Wedding Availability Form">
        <meta itemprop="description" content="<?php the_field('check_availability_form_title'); ?>">
    <div class="container">

        <?php
        
            global $errors;
        
            if ($errors) {
        
                echo '<div id="error" class="error">' . implode('<br />',$errors) . '</div>';
        
            }
        
        ?>
        
        <?php if ( get_sub_field( 'check_availability_form_title' ) ) { ?>
            <h2 class="text-center"><i><?php the_sub_field('check_availability_form_title'); ?></i></h2>
        <?php } else { ?>
            <h2 class="text-center"><i>Do You Want A Remarkable Wedding Experience? Let's Talk.</i></h2>
        <?php } ?>
        
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                    <h4 id="about">About You <span class="glyphicon glyphicon-share-alt"></span></h4>
                </div>
            
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
            
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="first" class="screen-reader-text">First Name*</label>
                                <input type="text" class="form-control" id="first" name="firstname" placeholder="First Name*" required>
                            </div>              
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">    
                                <label for="last" class="screen-reader-text">Last Name*</label>
                                <input type="text" class="form-control" id="last" name="lastname" placeholder="Last Name*" required>
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
                                <input type="text" class="form-control"  id="phone" name="phone" value="<?php if(isset($_POST['phone'])) : echo $_POST['phone']; endif; ?>" placeholder="Phone*"         required>
                            </div>              
                        </div>
                    </div><!-- / .row -->
            
                </div><!-- /.col -->
            
            </div><!-- / .row -->
            
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                    <h4 id="help">How We Can Help <span class="glyphicon glyphicon-share-alt"></span></h4>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <label class="radio"><input type="checkbox" id="interestedDJ" name="interestedDJ" value="DJ Services">DJ Services</label>
                    <label class="radio"><input type="checkbox" id="interestedPhoto" name="interestedPhoto" value="Photography Services">Photography Services</label>
                    <label class="radio"><input type="checkbox" id="interestedVideo" name="interestedVideo" value="Videography Services">Videography Services</label>
                    <label class="radio"><input type="checkbox" id="interestedUplighting" name="interestedUplighting" value="Uplighting Services">Uplighting Services</label>
                    <label class="radio"><input type="checkbox" name="existing_customer" value="existing"> Existing Customer</label>
                    <label class="radio"><input type="checkbox" name="other" value="Other"> Other</label>
                </div>
            </div><!-- / .row -->
            
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                    <h4 id="more">A Few More things <span class="glyphicon glyphicon-share-alt"></span></h4>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="weddingdate" class="screen-reader-text">Wedding Date</label>
                                <input class="form-control datepicker" type="text" id="weddingdate" name="wedding_date" placeholder="Wedding Date*" required>  
                            </div> 
                            <div class="form-group">
                                <label for="venue" class="screen-reader-text">Reception Venue</label>
                                <input type="text" class="form-control" id="venue" name="reception_venue" placeholder="Reception Venue">
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
                            <?php if( get_field('location') === "nolocation"  ) { ?>
                                <select name="location" class="form-control">
                                    <option selected disabled value="nolocation">Choose a Location</option>
                                    <option value="michigan">Detroit</option>
                                    <option value="chicago">Chicagoland</option>
                                </select>
                            <?php } else { ?>
                                <input type="hidden" value="<?php echo get_field('location'); ?>" name="location">
                            <?php } ?>
                            <p><a href="<?php echo home_url('/privacy-policy/'); ?>">Privacy Policy</a></p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <input type="hidden" value="<?php the_permalink(); ?>" name="url">
                            <input type="hidden" name="page_name" value="<?php the_title(); ?>">
                            <input type="hidden" name="form_name" value="check_availability">
                            <?php wp_nonce_field( 'ca_submission', 'ca_submission_nonce_field' ); ?>
                            <button type="submit" class="btn btn-primary">Submit</button>                    
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div><!-- / .container -->
</section>