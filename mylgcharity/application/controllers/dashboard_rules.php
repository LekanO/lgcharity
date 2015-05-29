<?php

class Dashboard_rules extends CI_Controller{

	public function __construct() {

		parent:: __construct();

		$user_id = $this->session->userdata('user_id');

		if(!$user_id) {
			$this->logout();
		}

	}

	public function index() {

		$this->load->view('dashboard_rules/inc/header_view');
		$this->load->view('dashboard_rules/rules_view');
		$this->load->view('dashboard_rules/inc/footer_view');
	}

	public function logout() {

		$this->session->sess_destroy();
		redirect('/');
	}


}