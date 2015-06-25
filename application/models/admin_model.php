<?php
class Admin_model extends CI_Model {

	private $table_unit = "unit";
	private $table_staff = "staff";

	function __construct() {
		parent::__construct();
	
	}

    // --- UNIT MANAGEMENT --- //
	function add_unit(){
		$unit = array(	
                'unit_name'=>$this->input->post('unit_name'),
                );
        $this->db->insert($this->table_unit,$unit);
	}

	function get_all_units() {
		return $this->db->get($this->table_unit)->result();
	}

	function delete_unit($id) {
        $this->db->where('id',$id);
        $this->db->delete($this->table_unit);
    }

    function get_unit($id) {
    	$this->db->where('id', $id);
    	return $this->db->get($this->table_unit)->row();
    }

    function edit_unit($id){
    	$this->db->where('id', $this->input->post('id'));
		$updated_unit = array(	
                'unit_name'=>$this->input->post('unit_name'),
                );
        $this->db->update($this->table_unit,$updated_unit);
    }

    // --- STAFF MANAGEMENT --- //
    function add_staff(){
    	$staff = array(	
                'email'=>$this->input->post('email'),
                'password'=>md5($this->input->post('password')),
                'role'=>$this->input->post('role'),
                'staff_name'=>$this->input->post('staff_name'),
                'staff_alias'=>$this->input->post('staff_alias'),
                'staff_initial'=>$this->input->post('staff_initial'),
                'unit_id'=>$this->input->post('unit')
                );
        $this->db->insert($this->table_staff,$staff);
    }

    function get_staff($id){
        $this->db->where('id', $id);
        return $this->db->get($this->table_staff)->row();
    }

    function delete_staff($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table_staff);
    }


    function edit_staff($id){
        $this->db->where('id', $this->input->post('id'));
        $updated_staff = array( 
                'email'=>$this->input->post('email'),
                'password'=>md5($this->input->post('password')),
                'role'=>$this->input->post('role'),
                'staff_name'=>$this->input->post('staff_name'),
                'staff_alias'=>$this->input->post('staff_alias'),
                'staff_initial'=>$this->input->post('staff_initial'),
                'unit_id'=>$this->input->post('unit')
                );
        $this->db->update($this->table_staff,$updated_staff);
    }
}