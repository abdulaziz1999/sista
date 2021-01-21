<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
        
    function __construct()
    {
        parent::__construct();
		if($this->session->userdata('level') != "admin"){
            redirect('login');
        }
    }

    public function index()
    {
        $data['title']		= "Dashboard SISTA";
        $data['mahasiswa']  = $this->db->get_where('tb_mahasiswa')->num_rows();
        $data['dosen']      = $this->db->get_where('tb_dosen')->num_rows();
        $data['seminar']    = $this->db->get_where('tb_daftar_seminar')->num_rows();
        $data['peserta']    = $this->db->get_where('tb_peserta_seminar')->num_rows();
        $this->template->load('template_back/template','dashboard',$data);
	}


}

