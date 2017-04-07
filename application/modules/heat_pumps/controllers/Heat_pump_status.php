<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Heat_pump_status extends MY_Controller {

    public function index() {
        echo 'You should not be here';
    }

    public function set_pump_status() {
        $user_id = $this->input->post('user_id');
        $modbus_id = $this->input->post('modbus_id');
        $status_value = $this->input->post('status_value');
        $set_temp = $this->input->post('set_temp');
        $input_temp = $this->input->post('input_temp');

        $data = array(
            'indicator_status' => $status_value,
            'set_temperature' => $set_temp,
            'input_temperature' => $input_temp
        );

        $this->db->update('dashboard_pump_status', $data, array('userID'=>$user_id, 'pump_modbus_id'=>$modbus_id));
        
        return 'ok';
    }

}
