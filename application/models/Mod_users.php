<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mod_users extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function get_profile($user_id) {
        
    }
    
    function auth_user($email, $password) {
        $this->db->where('email_address', $email);
        $this->db->where('password', $password);
        $this->db->where('is_enabled', 1);
        $this->db->where('is_deleted', 0);

        // Checking login credential for admin
        $user = $this->db->get('user_login_accounts')->row_array();

        if (isset($user)) {
            $this->session->set_userdata('login_id', $user['user_id']);
            $this->session->set_userdata('login_email', $user['email_address']);
            $this->session->set_userdata('login_first_name', $user['first_name']);
            $this->session->set_userdata('login_last_name', $user['last_name']);

            $redirect_to = base_url().'index.php/heat_pumps/Heat_pump_home';
            if (isset($this->session->userdata['login_redirect_to'])) {
                $redirect_to = $this->session->userdata['login_redirect_to'];
            }
            return $redirect_to;
            //return 'success';
        }

        return 'invalid';
    }
    
}

?>