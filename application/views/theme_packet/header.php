<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!-- Template Name: Packet - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>Evo Heat - Dashboard</title>
        <!-- start: META -->
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
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
        <script src="<?php echo base_url(); ?>template/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/window_icon.png" />
        <script>
            var base_url = '<?php echo base_url(); ?>';
        </script>
    </head>
    <!-- end: HEAD -->
    <body>
        <div id="app" class="lyt-4">

            <div class="app-content">
                <!-- start: TOP NAVBAR -->
                <header class="navbar navbar-default navbar-static-top">
                    <!-- start: NAVBAR HEADER -->
                    <div class="navbar-header">
                        <button href="javascript:void(0)" class="menu-mobile-toggler btn no-radius pull-left hidden-md hidden-lg" id="horizontal-menu-toggler" data-toggle="collapse" data-target=".horizontal-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/admin/dashboard"> <img src="<?php echo base_url(); ?>assets/images/evo_logo.png" style="height: 50px; margin-left: 10px" alt="Evo Dashboard"/> </a>

                        <!--<button class="btn pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse" data-toggle-class="menu-open">
                            <i class="fa fa-folder closed-icon"></i><i class="fa fa-folder-open open-icon"></i><small><i class="fa fa-caret-down margin-left-5"></i></small>
                        </button>-->
                    </div>
                    <!-- end: NAVBAR HEADER -->
                    <!-- start: NAVBAR COLLAPSE -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-left hidden-sm hidden-xs">
                            
                        </ul>
                        <ul class="nav navbar-right">
                            <!-- start: LANGUAGE SWITCHER -->
                            <li class="dropdown">
                                <a href class="dropdown-toggle" data-toggle="dropdown"> <i class="flag-icon flag-icon-au"></i> English </a>
                                <ul role="menu" class="dropdown-menu dropdown-light fadeInUpShort">
                                    <li>
                                        <a href="#" class="menu-toggler"> English </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end: LANGUAGE SWITCHER -->
                        </ul>
                    </div>
                    <!-- end: NAVBAR COLLAPSE -->
                </header>
                <!-- start: HORIZONTAL MENU -->
                <div class="navbar navbar-default horizontal-menu collapse">
                    <div class="horizontal-menu-wrapper">
                        <div class="horizontal-nav-container">
                            <ul class="nav navbar-nav no-border">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/heat_pumps/Heat_pump_home"> <div class="lettericon" data-text="Heat Pumps" data-size="sm" data-char-count="2" data-color="auto"></div> <span> Heat Pumps </span> </a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> 
                                        <div class="lettericon" data-text="Energy Monitoring" data-size="sm" data-char-count="2" data-color="auto"></div> 
                                        <span> Energy Monitoring </span> 
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo base_url(); ?>index.php/monitoring/Monitoring_home"> <span> Consumption </span> </a>
                                        </li>
                                        <!--<li>
                                            <a href="<?php echo base_url(); ?>index.php/monitoring/Monitoring_home/distribution"> <span> Distribution </span> </a>
                                        </li>-->
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> 
                                        <div class="lettericon" data-text="Accounts" data-size="sm" data-char-count="2" data-color="auto"></div> 
                                        <span> Login Accounts </span> 
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href=""> <span> List Members </span> </a>
                                        </li>
                                        <li>
                                            <a href=""> <span> New Member </span> </a>
                                        </li>
                                        <!--<li>
                                            <a href=""> <span> Monitoring Subscription </span> </a>
                                        </li>-->
                                        <li>
                                            <a href=""> <span> SMS Alerts</span> </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown mega-menu">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> 
                                        <div class="lettericon" data-text="Reports" data-size="sm" data-char-count="2" data-color="auto"></div> 
                                        <span>Reports</span> 
                                        <span class="caret"></span>
                                    </a>
                                </li>
                            </ul>
                            <!--
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle nav-user-wrapper" data-toggle="dropdown"> <img alt="" src="<?php echo base_url(); ?>template/packet/assets/images/default-user-50px.png"> <span>firstname lastname</span> <span class="caret"></span> </a>

                                    <ul class="dropdown-menu pull-right animated fadeInRight">
                                        <li>
                                            <a href="#"> My Profile </a>
                                        </li>
                                        <li>
                                            <a href="#"> Lock Screen </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo base_url() . 'index.php/login/Login_home/logout'; ?>"> Log Out </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            -->
                        </div>
                        <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
                        <div class="close-handle visible-xs-block visible-sm-block menu-toggler" data-toggle="collapse" data-target=".horizontal-menu">
                            <div class="arrow-left"></div>
                            <div class="arrow-right"></div>
                        </div>
                        <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
                    </div>
                </div>
                <!-- end: HORIZONTAL MENU -->
                <!-- end: TOP NAVBAR -->