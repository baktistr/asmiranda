<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documents extends CI_Controller {
	
	function __construct() {
        parent::__construct(); 

        $this->load->model('dashboard_model');
        $this->load->model('admin_model');
        $this->load->model('document_model');
        $this->load->helper(
        array('url', 'form')
	    );

		// session checker
		if((!$this->session->userdata('logged_in') ) || !(($this->session->userdata('logged_in')['role'] === 'admin') || ($this->session->userdata('logged_in')['role'] === 'agendaris'))) redirect('home');	
	        
    }
	public function index() {
    	
    }

    public function add_document() {
    	$data['doc_classes'] =  $this->document_model->get_all_doc_class();
    	$session_data = $this->session->userdata('logged_in');

    	$this->load->view('template/header', $session_data);
        $this->load->view('documents/add_document', $data);
        $this->load->view('template/footer');
    }

    public function type_doc_list() {
        $data['doc_classes'] =  $this->document_model->get_all_doc_class();
        $session_data = $this->session->userdata('logged_in');

        $this->load->view('template/header', $session_data);
        $this->load->view('documents/type_doc_list', $data);
        $this->load->view('template/footer');
    }

    public function add_doc_class() {
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('template/header', $session_data);
        $this->load->view('documents/add_doc_class');
        $this->load->view('template/footer');
    }

    public function process_add_doc_class() {
        $this->document_model->add_doc_class();
        redirect('documents/type_doc_list');
    }

    public function edit_doc_class($id) {
        $data['doc_class'] = $this->document_model->get_doc_class($id);
        $session_data = $this->session->userdata('logged_in');
        $this->load->view('/template/header',$session_data);
        $this->load->view('/documents/edit_doc_class',$data);
        $this->load->view('/template/footer');
    }

    public function process_edit_doc_class($id) {
        $this->document_model->edit_doc_class($id);
        redirect('documents/type_doc_list');
    }

    public function delete_doc_class($id) {
        $this->document_model->delete_doc_class($id);
        redirect('documents/type_doc_list');
    }
}