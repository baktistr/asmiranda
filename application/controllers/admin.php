<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct(); 

        $this->load->model('dashboard_model');
        $this->load->model('admin_model');
        $this->load->helper(
        array('url', 'form')
	    );

        // session checker
        if(!$this->session->userdata('logged_in') || $this->session->userdata('logged_in')['role'] !== 'admin') redirect ('home');

    }
	public function index() {
    	
    }

    // --- STAFF MANAGEMENT --- //
    public function add_staff() {
        $data['units'] = $this->admin_model->get_all_units();
        $session_data = $this->session->userdata('logged_in');

    // $this->load->library('form_validation');

        $this->load->view('template/header', $session_data);
        $this->load->view('admin/add_staff', $data);
        $this->load->view('template/footer');
    }

    public function process_add_staff() {
        $this->admin_model->add_staff();
        redirect('dashboard');
    }

    public function delete_staff($id){
        $this->admin_model->delete_staff($id);
        redirect('dashboard');
    }

    public function edit_staff($id){
        $data['staff'] = $this->admin_model->get_staff($id);
        $data['units'] = $this->admin_model->get_all_units();
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('/template/header',$session_data);
        $this->load->view('/admin/edit_staff',$data);
        $this->load->view('/template/footer');
    }

    public function process_edit_staff(){
        $this->admin_model->edit_staff();
        redirect('dashboard');
    }

    // --- UNIT MANAGEMENT --- //
    public function unit_list() {
        $data['units'] = $this->admin_model->get_all_units();
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('template/header', $session_data);
        $this->load->view('admin/unit_list', $data);
        $this->load->view('template/footer');
    }

    public function add_unit() {
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('template/header', $session_data);
        $this->load->view('admin/add_unit');
        $this->load->view('template/footer');

    }

    public function process_add_unit() {
        $this->admin_model->add_unit();
        redirect('admin/unit_list');
    }

    public function delete_unit($id) {
        $this->admin_model->delete_unit($id);
        redirect('admin/unit_list');
    }

    public function edit_unit($id) {
        $data['unit'] = $this->admin_model->get_unit($id);
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('/template/header',$session_data);
        $this->load->view('/admin/edit_unit',$data);
        $this->load->view('/template/footer');
    }

    public function process_edit_unit() {
        $this->admin_model->edit_unit();
        redirect('admin/unit_list');
    }
}