<?php
class Mahasantri extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('My_model');
		$this->load->library('session');
		

		if ($this->session->userdata('level')!="mahasantri") {
			redirect('login');
		}
  
	}

	function index(){
		$this->template->load('halsantri/template_santri','halsantri/dashboard1');
	}
}
?>