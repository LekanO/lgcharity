<?php

class Disclaimer extends CI_Controller {

	public function __construct() {

		parent:: __construct();
	}

	public function index() {
		$this->load->view('disclaimer/inc/header_view');
		$this->load->view('disclaimer/disclaimer_view');
		$this->load->view('disclaimer/inc/footer_view');

	}

}