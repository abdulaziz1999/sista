<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{
	
        
    function __construct()
    {
        parent::__construct();
		
    }

    function cekLogin(){
        $u = $this->input->post('email');
        $p = $this->input->post('password');

        $cekstatus = $this->db->get_where('tb_user',['email' => $u])->row()->status;
        if($cekstatus == 'Y'){
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
                }
            } else{
                $this->session->set_flashdata('gagallogin','tes');
                redirect($_SERVER['HTTP_REFERER']);
            } 
        }else{
            $this->session->set_flashdata('blmactive','tes');
            redirect($_SERVER['HTTP_REFERER']);
        }
        
		
    }

    function cek_login($u,$p){
        $pwd = md5($p);
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('email',$u);
        $this->db->where('password',$pwd);
        $this->db->where('status','Y');
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

