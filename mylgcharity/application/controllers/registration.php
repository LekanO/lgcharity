<?php

class Registration extends CI_Controller {

	public function __construct() {

		parent:: __construct();
	}

	public function index() {
		$this->load->view('registration/inc/header_view');
		$this->load->view('registration/registration_view');
		$this->load->view('registration/inc/footer_view');

	}

}