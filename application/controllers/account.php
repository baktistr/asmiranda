<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public $test;
    
    function __construct() {
        parent::__construct();
        $this->load->model('account_model');
        $this->load->helper(
            array('url', 'form')
		);
    }

    public function index() {
        redirect ('home');
    }

    // --- LOGIN --- //
    public function login() {

       
        $result = $this->account_model->login();
        if ($result) {

            // create the session data
            $session_array = array();
            foreach ($result as $row) {

                $session_array = array(
                    'id' => $row->id,
                    'role' => $row->role,
                    'email' => $row->email);

            // set session
                $this->session->set_userdata('logged_in', $session_array);
            }

            // remember me function
            if ($this->input->post('remember')==TRUE) {
               $this->session->sess_expiration = 0;
            }

            redirect('/dashboard');
        }
        else
            redirect('/home');
    }

    // --- LOGOUT --- //
    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('home');
    }
}