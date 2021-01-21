<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Prodi extends CI_Controller
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
		$data['title']		= "Prodi";
        $this->template->load('template_back/template','prodi',$data);
    }
    
    function create(){
        $data = [
            'nim'           => $this->input->post('nim'),
            'nama'          => $this->input->post('nama'),
            'prodi_id'      => $this->input->post('prodi_id'),
            'tgl_seminar'   => $this->input->post('tgl_seminar'),
            'jam_seminar'   => $this->input->post('jam_seminar'),
            'ruang'         => $this->input->post('ruang'),
            'judul_ta'      => $this->input->post('judul_ta'),
            'seminar_id'    => $this->input->post('seminar_id'),
            'pembimbing'    => $this->input->post('pembimbing'),
            'penguji1'      => $this->input->post('penguji1'),
            'penguji2'      => $this->input->post('penguji2'),
        ];

        $this->db->insert('tb_daftar_seminar',$data);
    }

    function update($id){
        $data = [
            'nim'           => $this->input->post('nim'),
            'nama'          => $this->input->post('nama'),
            'prodi_id'      => $this->input->post('prodi_id'),
            'tgl_seminar'   => $this->input->post('tgl_seminar'),
            'jam_seminar'   => $this->input->post('jam_seminar'),
            'ruang'         => $this->input->post('ruang'),
            'judul_ta'      => $this->input->post('judul_ta'),
            'seminar_id'    => $this->input->post('seminar_id'),
            'pembimbing'    => $this->input->post('pembimbing'),
            'penguji1'      => $this->input->post('penguji1'),
            'penguji2'      => $this->input->post('penguji2'),
        ];

        $this->db->update('tb_daftar_seminar',$data,['id_df_seminar' => $id]);
    }

    function delete($id){
        $this->db->delete('tb_daftar_seminar',$data,['id_df_seminar' => $id]);
    }


}

