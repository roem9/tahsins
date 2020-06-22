<?php
class Login_model extends CI_MODEL{
	function cekLogin($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function cek_login(){
        $username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);

		$this->db->from("admin");
		$this->db->where("username", $username);
		$this->db->where("password", $password);
		return $this->db->get()->row_array();
	}
}