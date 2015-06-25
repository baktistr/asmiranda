<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('dashboard_model');
        $this->load->helper(
        array('url', 'form')
		);
    }

    public function index() {

        $this->dashboard_model->get_all_staffs();
     //    $data['staffs'] = $this->dashboard_model->get_all_staffs();
     //    $session_data = $this->session->userdata('logged_in');
    	// $this->load->view('template/header', $session_data);
     //    $this->load->view('v_dashboard', $data);
     //    $this->load->view('template/footer');
        

    
        // $this->datatables->select('
        // staff.id,email,role,staff_name,staff_initial,unit_name
        //     ');
        // $this->datatables->from('staff');
        // $this->datatables->join('unit','unit.id = staff.unit_id', 'left'); // need mysql NEED JOIN in case refer to delete unit

        // echo $this->datatables->generate();
    }

    public function ajax_staff() {
        $this->dashboard_model->get_all_staffs();
    }
}