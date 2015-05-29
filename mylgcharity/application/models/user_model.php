<?php

class User_Model extends CI_Model{
	


public function get_table( $user_id = null) 
	{
		if ($user_id === null ) {

			$query = $this->db->get('users');
		}
		elseif (is_array($user_id)) {
			$query = $this->db->get_where('users', $user_id);
		}
		else {
			$query = $this->db->get_where('users', ['user_id' => $user_id]);
		}
		return $query->result_array();
	
	}	

	public function insert_table($data) {

			$query = $this->db->insert('users', $data);

			return $this->db->insert_id();
	}

	public function update_table() {

	}

	public function delete_table() {

	}


}