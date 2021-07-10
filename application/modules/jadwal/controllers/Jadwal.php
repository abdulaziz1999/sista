<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal extends CI_Controller
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
        $data['title']		= "Jadwal Seminar TA";
        $this->db->join('tb_seminar sm','sm.id_seminar = s.seminar_id');
        $data['daftar_seminar'] = $this->db->get('tb_daftar_seminar s')->result();
        $this->template->load('template_front/template','jadwal',$data);
	}

    function detail($id){
        $data['title']		     = "Detail Seminar Tugas Akhir";
                                  $this->db->join('tb_prodi p','p.id_prodi = s.prodi_id');
        $data['peserta']        = $this->db->get_where('tb_peserta_seminar s',['id_seminar' => $id])->result();
        $data['prodi']          = $this->db->get('tb_prodi')->result();
        $this->template->load('template_front/template','detailJadwal',$data);
        
      }
    
    function daftar($id){
        if($this->session->userdata('level') != "mahasiswa"){
            $this->session->set_flashdata('logindulu','tes');
            redirect('login');
        }
        $data['title']		     = "Daftar Peserta Seminar Tugas Akhir";
                                  $this->db->join('tb_prodi p','p.id_prodi = s.prodi_id');
        $data['peserta']        = $this->db->get_where('tb_peserta_seminar s',['id_seminar' => $id])->result();
        $data['prodi']          = $this->db->get('tb_prodi')->result();
        $this->template->load('template_front/template','daftar',$data);
        
      }
}

