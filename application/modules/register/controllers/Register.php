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
    
    function create(){
        $data = [
            'nama_mhs'  => $this->input->post('nama_mhs'),
            'nim'       => $this->input->post('nim'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk'        => $this->input->post('jk'),
            'agama'     => $this->input->post('agama'),
            'alamat'    => $this->input->post('alamat'),
            'prodi_id'  => $this->input->post('prodi_id'),
        ];

        $this->db->insert('tb_mahasiswa',$data);
        $id = $this->db->insert_id();
        $data = [
            'nama'          => $this->input->post('nama'),
            'email'         => $this->input->post('email'),
            'level'         => 'mahasiswa',
            'password'      => md5($this->input->post('password')),
            'user_id'       => $id
        ];

        $this->db->insert('tb_user',$data);
        redirect($_SERVER['HTTP_REFERER']);
    }


}

