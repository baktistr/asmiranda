<?php
class Account_model extends CI_Model {

	private $table_staff = "staff";
	
	function __construct() {
		parent::__construct();
	}

	function login() {
		$this->db->where("email",$this->input->post('email'));
		$this->db->where("password",md5($this->input->post('password')));		

                $query = $this->db->get($this->table_staff);
                if ($query->num_rows() == 1) { return $query->result(); }
                else { return false; }
	}
        
    function get_userdata($id){
    	$this->db->where('id', $id);
        return $this->db->get($this->table_staff)->row();
    }    
}