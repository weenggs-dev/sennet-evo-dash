<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_home extends MY_Controller {

    public function index() {
        $this->load->view('view_login');
    }
    
    function submit_login() {
        //Recieving post input of email, password from ajax request
        $email      = $this->input->post('username');
        $password   = $this->input->post('password');
        
        //Validating login
        $login_status = 'invalid';
        $login_status = $this->mod_users->auth_user($email, $password);

        //Replying ajax request with validation response
        echo json_encode($login_status);
    }
    
    

}
