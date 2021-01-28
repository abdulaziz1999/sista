<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller
{
	
        
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Log_model');
        // $this->load->library('form_validation');
		// $this->load->model('Pengaduan2_model');	
		
		
    }

    public function index()
    {
		$data['title']		= "Registrasi";
        $this->template->load('template_front/template_login','register',$data);
	}


}

