<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Heat_pump_home extends MY_Controller {
    
    function __construct() {
        parent::__construct();
        if (isset($this->session->userdata['login_id']) && $this->session->userdata['login_id'] > 0) {
            // check asses to controllers and views for user login here
        } else {
            // this user is not logged in, if they stray into wrong area then send them to the login page
            header('Location: ' . base_url() . 'index.php/login/Login_home');
        }
    }

    public function index() {
        $this->load->view('theme_packet/header');
        $this->load->view('heatpump_home');
        $this->load->view('theme_packet/footer');
    }
    
    public function ajax_get_pump_status() {
    	$user_id = 1;
    	echo json_encode($this->mod_dashboard_pump_status->get_pump_status($user_id));
    }

}
