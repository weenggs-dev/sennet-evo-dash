<!DOCTYPE html>
<!-- Template Name: Packet - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title><?php echo $page_meta['page_title']; ?></title>
        <!-- start: META -->
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="<?php echo $page_meta['page_description']; ?>" name="description" />
        <meta content="Chris Goder - Sirius Programming" name="author" />
        <!-- end: META -->
        <!-- start: GOOGLE FONTS -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <!-- end: GOOGLE FONTS -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bower_components/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bower_components/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bower_components/switchery/dist/switchery.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bower_components/ladda/dist/ladda-themeless.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bower_components/slick.js/slick/slick.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/bower_components/slick.js/slick/slick-theme.css">
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- start: Packet CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/packet/assets/css/styles.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/packet/assets/css/plugins.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/packet/assets/css/themes/lyt4-theme-1.css" id="skin_color">
        <!-- end: Packet CSS -->
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
        <script src="<?php echo base_url(); ?>template/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script>
            var base_url = '<?php echo base_url(); ?>';
        </script>
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body class="login">
        <!-- start: LOGIN -->
        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4 col-lg-3 col-lg-offset-5">
                <div class="logo text-center">
                    <img src="<?php echo base_url(); ?>assets/images/evo_logo.png" alt="Sensor Network" class="img-responsive" style="width: 200px" />
                </div>
                <p class="text-center">
                </p>
                <p class="text-center">
                    Please enter your name and password to log in.
                </p>
                <!-- start: LOGIN BOX -->
                <div class="box-login">
                    <form class="form-login" action="">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group form-actions">
                            <input type="password" class="form-control password" id="password" name="password" placeholder="Password">
                        </div>
                        <!--<div class="text-center">
                            <a href="<?php echo base_url(); ?>index.php/directory/Dir_UserAuth/forgot_password"> I forgot my password </a>
                        </div>-->
                        <div class="form-actions">
                            
                            <button id="submit_login" type="submit" class="btn btn-blue btn-block">
                                Login
                            </button>
                            <div class="alert alert-danger" style="display: none">
                                <button data-ct-dismiss="alert" class="close">
                                    ×
                                </button>
                                <strong>Login Error!</strong>
                                Sorry, we where unable to log you in with the details provided, please try again.
                            </div>
                            <!--<div class="checkbox clip-check check-primary">
                                <input type="checkbox" id="remember" value="1">
                                <label for="remember"> Keep me signed in </label>
                            </div>-->
                        </div>
                        <!--<div class="new-account text-center">
                            Don't have an account yet?
                            <a href="<?php echo base_url(); ?>index.php/directory/Dir_UserAuth/registration"> Create an account </a>
                        </div>-->
                    </form>
                    <!-- start: COPYRIGHT -->
                    <div class="copyright">
                        <?php echo date("Y"); ?> &copy; Central Information Systems Pty Ltd all rights reserved.
                    </div>
                    <!-- end: COPYRIGHT -->
                </div>
                <!-- end: LOGIN BOX -->
            </div>
        </div>
        <!-- end: LOGIN -->
        <!-- start: MAIN JAVASCRIPTS -->
        <script src="<?php echo base_url(); ?>template/bower_components/components-modernizr/modernizr.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/js-cookie/src/js.cookie.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/jquery-fullscreen/jquery.fullscreen-min.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/switchery/dist/switchery.min.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/jquery.knobe/dist/jquery.knob.min.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/slick.js/slick/slick.min.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/jquery-numerator/jquery-numerator.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/ladda/dist/spin.min.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/ladda/dist/ladda.min.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/ladda/dist/ladda.jquery.min.js"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="<?php echo base_url(); ?>template/bower_components/ckeditor/ckeditor.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/ckeditor/adapters/jquery.js"></script>
        <script src="<?php echo base_url(); ?>template/bower_components/bb-jquery-validation/dist/jquery.validate.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <!-- start: Packet JAVASCRIPTS -->
        <script src="<?php echo base_url(); ?>template/packet/assets/js/letter-icons.js"></script>
        <script src="<?php echo base_url(); ?>template/packet/assets/js/main.js"></script>
        <!-- end: Packet JAVASCRIPTS -->
        <!-- start: JavaScript Event Handlers for this page -->
        <script src="<?php echo base_url(); ?>template/packet/assets/js/login.js"></script>
        <script>
            jQuery(document).ready(function () {
                Main.init();
                //Login.init();
            });
            $('#submit_login').click(function (e) {
                e.preventDefault();
                
                var username = $('#username').val();
                var password = $('#password').val();
                
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>index.php/login/Login_home/submit_login",
                    data: {
                        username: username,
                        password: password
                    },
                    success: function (data) {
                        var response = JSON.parse(data);
                        console.log(response);
                        if (response == 'invalid') {
                            $('.alert-danger').show();
                        }else{
                            document.location = '<?php echo base_url() ?>index.php/heat_pumps/Heat_pump_home';
                        }
                    }
                });
            });
        </script>
        <!-- end: JavaScript Event Handlers for this page -->
    </body>
</html>