<?php
class Dosen extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('My_model');
		$this->load->library('session');
		

		if ($this->session->userdata('level')!="dosen") {
			redirect('login');
		}
 
	}

	function index(){
		$this->template->load('haldosen/template_dosen','haldosen/dashboard2');
	}
}
?>