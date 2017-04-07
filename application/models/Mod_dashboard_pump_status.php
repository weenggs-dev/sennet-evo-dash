<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mod_dashboard_pump_status extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function get_pump_status($user_id) {
    	$result = $this->db->get_where('dashboard_pump_status', array( 'userID' => $user_id) )->result_array();
    	return $result;
    }
    
}

?>