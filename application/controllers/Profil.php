<?php
class Profil extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('My_model');
		$this->load->model('Admin_model');
		$this->load->library('session');
		

		if ($this->session->userdata('level')!="admin") {
			redirect('login');
		}
 
	}

	function index(){
		$admin = $this->Admin_model->get_all();
        $data = array(
            'admin_data' => $admin
        );
		$this->template->load('template','v_profil',$data);
	}
}
