<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('account_model');
        $this->load->library('session');
        $this->load->helper(
            array('url', 'form')
		);
    }

    public function index() {
        $session_data = $this->session->userdata('logged_in');
    	$this->load->view('template/header', $session_data);
        $this->load->view('v_home');
        $this->load->view('template/footer');
    }
}