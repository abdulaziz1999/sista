<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed'); 

class Seminar extends CI_Controller
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
        $data['title']		= "Log Whatsapp Center";
        $data['dosen']          = $this->db->get('tb_dosen')->result();
        $data['seminar']        = $this->db->get('tb_seminar')->result();
        $data['prodi']          = $this->db->get('tb_prodi')->result();
        $this->template->load('template_front/template','seminar',$data);
	}


}

