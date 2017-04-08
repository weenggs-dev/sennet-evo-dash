<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class CronJobs extends MY_Controller {

		function __construct() {
			parent:: __construct();
			// $this->load->model("Cron_jobs");
		}

		function index() {

			// Recieving post data from request
			$data = array();
			$device_id	   = $data['device_id']		= $this->input->post('device_id'); // "123";
			$time_recorded = $data['time_recorded']	= $this->input->post('time_recorded'); // time();
			$kwh_value	   = $data['kwh_value']		= $this->input->post('kwh_value'); // "10";

			// add post data in response array for check
			$response['post_data'] = $data;

			// Save data in database
			$status = $this->db->insert('device_kwh', $data);

			// Get last insert id from database record
			$id = $this->db->insert_id();
			
			// Message for display status based on insert record,
			$message = ($id > 0 ? "Data inserted successfully" : "Failed to save data in database, Please try again");

			// Add status and inser id in response
			$response_data = array("status" => $status, "id" => $id, "message" => $message);
			$response['response_data'] = $response_data;
			
			// Encode response (Convert in JSON) and display 
			echo json_encode($response);
			// die();
		}
	}
?>