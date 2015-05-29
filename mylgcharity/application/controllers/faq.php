<?php

class Faq extends CI_Controller {

	public function __construct() {

		parent:: __construct();
	}

	public function index() {
		$this->load->view('faq/inc/header_view');
		$this->load->view('faq/faq_view');
		$this->load->view('faq/inc/footer_view');

	}

}