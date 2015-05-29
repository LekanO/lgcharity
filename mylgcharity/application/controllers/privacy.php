<?php

class Privacy extends CI_Controller {

	public function __construct() {

		parent:: __construct();
	}

	public function index() {
		$this->load->view('privacy/inc/header_view');
		$this->load->view('privacy/privacy_view');
		$this->load->view('privacy/inc/footer_view');

	}

}