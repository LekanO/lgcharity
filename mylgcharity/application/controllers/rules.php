<?php

class Rules extends CI_Controller {

	public function __construct() {

		parent:: __construct();
	}

	public function index() {
		$this->load->view('rules/inc/header_view');
		$this->load->view('rules/rules_view');
		$this->load->view('rules/inc/footer_view');

	}

}