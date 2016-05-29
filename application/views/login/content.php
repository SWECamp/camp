<section class="choose-theme section-padding color-white"  id="about">
        <div class="container">
        
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>เข้าสู่ระบบ</h3>
                                    <p>กรุณาใส่อีเมล์และรหัสผ่านเข้าสู่ระบบ</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="<?php echo site_url('camp/submit'); ?>" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="username" placeholder="exemple@mail.com" class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password" placeholder="xxxxxxx" class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn">เข้าสู่ระบบ !</button>
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