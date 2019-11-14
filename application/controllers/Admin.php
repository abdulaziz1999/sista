<?php
class Admin extends CI_Controller{

	function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('My_model');
        $this->load->library('session');
        
    }

	function index(){
		
		$this->template->load('template','v_admin');
	}
}
?>