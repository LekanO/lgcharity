<?php 

class Api extends CI_Controller{

	public function __construct(){

		parent::__construct();
	}

	public function random_location(){
		
		$this->db->order_by('location', 'RANDOM');
		date('Y/M/D');
		$this->db->limit(1);
		$query = $this->db->get('users');
		
		print_r($query->result_array());
		
		$this->output->set_content_type('application json');
	
		$this->output->set_output(json_encode($query));

	}


	public function date(){

			$this->db->order_by('location', 'RANDOM');
			$this->db->limit(1);
			$this->date('d');
			$query = $this->db->get('users');
		
			print_r($query->result_array());
		
			$this->output->set_content_type('application json');
	
			$this->output->set_output(json_encode($query));
			
	}
}