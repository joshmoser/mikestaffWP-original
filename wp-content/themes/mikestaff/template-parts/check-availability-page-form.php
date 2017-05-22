<section id="service-check-availability" class="check-availability-form" itemscope itemtype="http://schema.org/WebPageElement">
        <meta itemprop="name" content="Check Wedding Availability Form">
        <meta itemprop="description" content="<?php the_field('check_availability_form_title'); ?>">
    <div class="container">
        <div class="checkavail-before">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <h1 class="tk-ff-market-web"><span class="glyphicon glyphicon-calendar"></span> Check Availability for Your Wedding</h1>
                    <p>Due to the immense popularity of Mike Staff Productions among engaged couples, our schedule fills up quickly.</p>
                    <h3><em>How can we help?</em></h3>
                    <label class="radio"><input type="checkbox" id="interestedDJ-before" value="Yes">DJ Services</label>
                    <label class="radio"><input type="checkbox" id="interestedPhoto-before" value="Yes">Photography      Services</label>
                    <label class="radio"><input type="checkbox" id="interestedVideo-before" value="Yes">Videography      Services</label>
                    <label class="radio"><input type="checkbox" id="interestedUplighting-before" value="Yes">       Uplighting Services</label>
                    <br class="clear" />
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="input-group">
                                <label for="weddingdate" class="h3" style="margin-top: 0; font-weight: normal;"><em>When is your wedding?</em></label>
                                <input class="datepicker form-control" type="text" id="weddingdate-before" placeholder="Wedding Date">
                                <div class="input-group-addon"><span style="font-size: 2.5em;" class="glyphicon glyphicon-calendar"></span></div>
                            </div>
                            <button id="check-button" class="btn btn-primary">Check Availability</button>                             
                        </div>

                    </div>                   
                </div>
            </div>
        </div>

        <div class="checkavail-after">
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                    <h1 class="tk-ff-market-web">Looks Like It Was Meant To Be!</h1>
                    <p>You may no longer be available, but we are! We book up fast and dates are limited.</p>
                    <p>Please fill out the form below for more information or to arrange a fun, free, no-hassle consultation.</p>
                </div>
            </div>
        </div>

        <div id="checking-animation">
            <p class="text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ajax-loader.gif" width="24" /> Checking database for availability...</p>
        </div>
        
        <form class="checkavail-after" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" id="check-availability">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                    <h4 id="about">About You <span class="glyphicon glyphicon-share-alt"></span></h4>
                </div>
            
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
            
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="first" class="screen-reader-text">First Name*</label>
                                <input type="text" class="form-control" id="first" name="firstname" value="<?php if(isset($_POST['first'])) : echo $_POST['first']; endif; ?>" placeholder="First Name*"        required>
                            </div>              
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">    
                                <label for="last" class="screen-reader-text">Last Name*</label>
                                <input type="text" class="form-control" id="last" name="lastname" value="<?php if(isset($_POST['last'])) : echo $_POST['last']; endif; ?>" placeholder="Last Name*"         required>
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
                    <h4 id="help">How We Can Help <span class="glyphicon glyphicon-share-alt"></span></h4>
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
                            <p><a href="<?php echo home_url('/privacy-policy/'); ?>">Privacy Policy</a></p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
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
    </div><!-- / .container -->
</section>