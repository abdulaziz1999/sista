<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita extends CI_Controller
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
		$data['title']		= "Berita";
        $this->template->load('template_front/template','berita',$data);
	}


}

