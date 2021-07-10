<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita extends CI_Controller
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
        $data['title']		= "Berita Seminar TA";
        $data['berita']       = $this->db->get_where('tb_berita',['status' => 'publish'])->result();
        $this->template->load('template_front/template','berita',$data);
    }
    
    function dataEdit(){
        $id = $this->input->post('id');
        $berita = $this->db->get_where('tb_berita',['id_berita' => $id])->row();
        ?>
        <div class="card">
            <div class="card-header">
              <h2><?= $berita->jd_berita?></h2>
            </div>
                <div class="card-body">

                  <?= $berita->isi_berita?>
                </div>
             </div>
        <?php
    }


}

