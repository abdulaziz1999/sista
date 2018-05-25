<?php
class Login extends CI_Controller{

function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('My_model');
        $this->load->library('session');
        
    }

    function index(){
        $this->load->view('login');
    }

    function cek_login(){
        $u = $this->input->post('username');
        $p = $this->input->post('password');

        $cek = $this->My_model->cek_login($u,$p);
        if ($cek){
            foreach ($cek as $row) {
                $this->session->set_userdata('username',$row->username);
                $this->session->set_userdata('level',$row->level);
                $this->session->set_userdata('nama',$row->nama);
            }

            if ($this->session->userdata('level') == "admin") {
                redirect('dashboard');
            }elseif ($this->session->userdata('level') == "mahasantri") {
                redirect('mahasantri');
            }
            elseif ($this->session->userdata('level') == "dosen") {
                redirect('dosen');
            }else{$this->session->flashdata('usernam dan password tidak sesuai');
                redirect('login');
                // $data['pesan']="username dan password tdk sesuai";
                // $this->load->view('v_login',$data);
            }
         }  
    }

 function logout(){
  $this->session->sess_destroy();
  redirect('login');
 }

}


// $username = $this->input->post('username');
//   $password = $this->input->post('password');
//   $where = array(
//    'username' => $username,
//    'password' => md5($password),
//    );
//   $cek = $this->data_login->cek_login('admin',$where)->num_rows();
//   if($cek > 0){

//    $data_session = array(
//     'username' => $username,
//     'password' => $password,
//     'nama' => $nama,
//     'status' => 'login'
//     );

//    $this->session->set_userdata($data_session);

//    redirect(base_url('index.php/admin'));

//   }else{
//    echo "<script type='text/javascript'>
//                alert ('Maaf Username Dan Password Anda Salah !');
//                document.write ('<center><h1> Harap Masukan Username Dan Password Dengan Benar !</h1></center><center><h1> www.kioscoding.com</h1></center>');
//       </script>";
//   }
//  }