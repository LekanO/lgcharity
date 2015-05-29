<?php 

class User extends CI_Controller {

	public function __construct() {

		parent:: __construct();
		
		$this->load->model('user_model');
	}



	public function login(){
		
		$this->output->set_content_type('application_json'); 

		$this->form_validation->set_rules('email', 'Email', 'required|min_length[10]|max_length[50]|valid_email|[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');

		if($this->form_validation->run() == false ) {
			$this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
			return false;
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$result = $this->user_model->get_table([
			'email' => $email,
			'password' => $password 
			]);

		if($result){
			$this->output->set_content_type('application_json');
			$this->session->set_userdata(['user_id' => $result[0],['user_id']]);	
			$this->output->set_output(json_encode(['result' => 1]));
		}else{
			$this->output->set_output(json_encode(['result' => 0]));
			return false;
		}
}


	public function registration() {
		
		$this->output->set_content_type('application_json');

		$this->form_validation->set_rules('email', 'Email', 'required|min_length[10]|max_length[50]|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]|matches[passconf]');	
		$this->form_validation->set_rules('state', 'State', 'required|min_length[3]|max_length[15]');
		$this->form_validation->set_rules('localGovernment', 'localGovernment', 'required|min_length[3]|max_length[15]');
		$this->form_validation->set_rules('telephone', 'TelNumber', 'required|min_length[11]|max_length[13]');

		if ($this->form_validation->run() == false ) {
			$this->output->set_output(json_encode(['result' => 0, 'error' => $this->form_validation->error_array()]));
			return false;
		}
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$passconf = $this->input->post('passconf');
		$state = $this->input->post('state');
		$localGovernment = $this->input->post('localGovernment');
		$telephone = $this->input->post('telephone');

		$user_id = $this->user_model->insert_table([
			'email' => $email,
			'password' => $password,
			'state' => $state,
			'localGovernment' => $localGovernment,
			'telNumber' => $telephone
			]);

		if($user_id) {
			$this->output->set_content_type('application_json');
			$this->output->set_output(json_encode(['result' => 1]));
		}else{
			$this->output->set_output(json_encode(['result' => 0]));
			return false;
		}
}

	public function test(){
		

		$table = $this->user_model->get_table(7);

		print_r($table);
	}
	
	public function sending(){

		$this->user_model->insert_table();

	}

	public function usedata(){

		$usedata = $this->session->all_userdata();
		
		print_r($usedata);
	}

	public function inserting() {

		$this->db->insert('users', ['fname' => 'Lekan', 'lname' => 'Owolabi']);

	}

	public function getDatabase() {

		$this->output->set_content_type('application_json');

		$result = $this->user_model->get_table();
		
		$this->output->set_output(json_encode($result));
	}

}