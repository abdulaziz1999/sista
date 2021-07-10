<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile extends CI_Controller
{
	
        
    function __construct()
    {
        parent::__construct();	
		
		
    }

    public function index()
    {
        if($this->session->userdata('level') == "admin"){
          $this->admin();
        }elseif($this->session->userdata('level') == "mahasiswa"){
          $this->user();
        }
    }

    public function user(){
        if($this->session->userdata('level') != "mahasiswa"){
          redirect('login');
        }	
        $data['title']		= "Profile Mahasiswa";
                            $this->db->join('tb_mahasiswa','tb_user.user_id = tb_mahasiswa.id_mhs');
                            $this->db->join('tb_prodi','tb_prodi.id_prodi = tb_mahasiswa.prodi_id');
        $data['user']     = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user') ])->row();
        $data['prodi']      = $this->db->get('tb_prodi')->result();
        $this->template->load('template_front/template','profile_guest',$data);
    }

    public function admin(){
          if($this->session->userdata('level') != "admin"){
            redirect('login');
          }	
          $data['title']		= "Profile admin";
          $data['user']     = $this->db->get_where('tb_user',['id_user' => $this->session->userdata('id_user') ])->row();
          $this->template->load('template_back/template','profile',$data);
    }


    function update($id,$id_mhs=false){
      if($this->session->userdata('level') == "admin"){
        $this->update_admin($id);
      }elseif($this->session->userdata('level') == "mahasiswa"){
        $this->update_user($id,$id_mhs);
      }
    }

    function update_user($id,$id_mhs){
      if($this->session->userdata('level') != "mahasiswa"){
        redirect('login');
      }
          
          $data = [
              'nama'          => $this->input->post('nama'),
              'email'         => $this->input->post('email'),
          ];

          $this->db->update('tb_user',$data,['id_user' => $id]);
          $data1 = [
            'nama_mhs'  => $this->input->post('nama'),
            'nim'       => $this->input->post('nim'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk'        => $this->input->post('jk'),
            'agama'     => $this->input->post('agama'),
            'alamat'    => $this->input->post('alamat'),
            'prodi_id'  => $this->input->post('prodi_id'),
        ];

        $this->db->update('tb_mahasiswa',$data1,['id_mhs' => $id_mhs]);
        $this->session->set_flashdata('updateProfile','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update_admin($id){
      if($this->session->userdata('level') != "admin"){
        redirect('login');
      }	
      $data = [
        'nama'          => $this->input->post('nama'),
        'email'         => $this->input->post('email'),
    ];
    $this->db->update('tb_user',$data,['id_user' => $id]);
    $this->session->set_flashdata('update','update');
    redirect($_SERVER['HTTP_REFERER']);
    }



}

