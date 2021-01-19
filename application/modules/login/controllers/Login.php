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

    // function cekLogin(){
    //     $u = $this->input->post('username');
    //     $p = $this->input->post('password');

    //     $cek = $this->Login_model->cek_login($u,$p);
    //     if ($cek){
    //         foreach ($cek as $row) {
    //             $this->session->set_userdata('id_pengguna',$row->id_pengguna);
	// 			$this->session->set_userdata('username',$row->username);
	// 			$this->session->set_userdata('nama',$row->nama);
	// 			$this->session->set_userdata('email',$row->email);
	// 			$this->session->set_userdata('ttl',$row->ttl);
    //             $this->session->set_userdata('level',$row->level);
                
    //         }
    //         if ($this->session->userdata('level') == "admin") {
    //             redirect('admin');
    //         }elseif ($this->session->userdata('level') == "cs") {
    //             redirect('cs');
    //         }elseif ($this->session->userdata('level') == "staff_humas") {
    //             redirect('sh');
    //         }
    //     } else{
    //         //untuk menendcode kata
    //         redirect('login?e='.base64_encode('Username dan Password Tidak Sesuai, Coba Lagi'));
    //     } 
		
    // }

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

