<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{
	
        
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Log_model');
        // $this->load->library('form_validation');
		// $this->load->model('Pengaduan2_model');	
		
		
    }

    function cekLogin(){
        $u = $this->input->post('email');
        $p = $this->input->post('password');

        $cek = $this->cek_login($u,$p);
        if ($cek){
            foreach ($cek as $row) {
                $this->session->set_userdata('id_user',$row->id_user);
				$this->session->set_userdata('nama',$row->nama);
				$this->session->set_userdata('email',$row->email);
                $this->session->set_userdata('level',$row->level);
                
            }
            if ($this->session->userdata('level') == "admin") {
                redirect('dashboard');
            }elseif ($this->session->userdata('level') == "mahasiswa") {
                redirect('home');
            }elseif ($this->session->userdata('level') == "dosen") {
                redirect('jadwal');
            }
        } else{
            //untuk menendcode kata
            redirect('login?e='.base64_encode('Username dan Password Tidak Sesuai, Coba Lagi'));
        } 
		
    }

    function cek_login($u,$p){
        $pwd = md5($p);
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('email',$u);
        $this->db->where('password',$pwd);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows()==1) {
        	return $query->result();
        }else{
        	return false;
        }
        
    }

    public function index()
    {
		$data['title']		= "Login SISTA";
        $this->template->load('template_front/template_login','login',$data);
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }


}

