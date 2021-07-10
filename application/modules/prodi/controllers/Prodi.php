<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Prodi extends CI_Controller
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
        $data['title']		= "Prodi";
        $data['prodi']       = $this->db->get('tb_prodi')->result();
        $this->template->load('template_back/template','prodi',$data);
    }

    function dataEdit(){
        $id = $this->input->post('id');
        $prodi = $this->db->get_where('tb_prodi',['id_prodi' => $id])->row();
        ?>
        <div class="card">
                <div class="card-body">
                  <form method="POST" action="<?= base_url('prodi/update/'.$id)?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Nama Prodi</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="nama_prodi" value="<?= $prodi->nama_prodi?>" placeholder="Nama Prodi" type="text">
                              </div>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                </div>
             </div>
        <?php
    }

    function create(){
        $data = [
            'nama_prodi'          => $this->input->post('nama_prodi'),
        ];

        $this->db->insert('tb_prodi',$data);
        $this->session->set_flashdata('sukses','sukses');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
        $data = [
            'nama_prodi'          => $this->input->post('nama_prodi'),
        ];

        $this->db->update('tb_prodi',$data,['id_prodi' => $id]);
        $this->session->set_flashdata('update','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->delete('tb_prodi',['id_prodi' => $id]);
        $this->session->set_flashdata('hapus','hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }


}

