<section class="choose-theme section-padding color-white"  id="about">
        <div class="container">
        
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login to our site</h3>
                                    <p>Enter your username and password to log on:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="<?php echo site_url('camp/submit'); ?>" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn">Sign in!</button>
                                </form>
                            </div>
                        </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>template/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>template/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>template/assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>template/assets/js/scripts.js"></script>
    </section>