<?php

class About extends CI_Controller {

	public function __construct() {

		parent:: __construct();
	}

	public function index() {
		$this->load->view('about/inc/header_view');
		$this->load->view('about/about_view');
		$this->load->view('about/inc/footer_view');

	}

}