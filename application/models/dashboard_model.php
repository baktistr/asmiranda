<?php
class Dashboard_model extends CI_Model {

	private $table_staff = "staff";
	private $table_unit  = "unit";

	function __construct() {
		parent::__construct();
	}

	function get_all_staffs()  {
		// $this->db->select('
		// staff.id,email,role,staff_name,staff_initial,unit_name
		// 	');
		// $this->db->from($this->table_staff);
		// $this->db->join($this->table_unit,'unit.id = staff.unit_id', 'left'); // need mysql NEED JOIN in case refer to delete unit

		// return $this->db->get()->result();

		$this->datatables->select('
        staff.id,email,role,staff_name,staff_initial,unit_name
            ');
        $this->datatables->from($this->table_staff);
        $this->datatables->join($this->table_unit,'unit.id = staff.unit_id', 'left'); // need mysql NEED JOIN in case refer to delete unit

        echo $this->datatables->generate();
	}
}