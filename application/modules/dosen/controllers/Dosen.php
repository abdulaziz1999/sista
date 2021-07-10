<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dosen extends CI_Controller
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
        $data['title']		= "Dosen";
        $data['dosen']      = $this->db->get('tb_dosen')->result();
        $this->template->load('template_back/template','dosen',$data);
    }

    function dataEdit(){
        $id = $this->input->post('id');
        $dosen = $this->db->get_where('tb_dosen',['id_dosen' => $id])->row();
        ?>
        <div class="card">
                <div class="card-body">
                  <form method="POST" action="<?= base_url('dosen/update/'.$id)?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Nama Dosen</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="nama_dosen" value="<?= $dosen->nama_dosen?>" placeholder="Nama Dosen" type="text">
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
            'nama_dosen'          => $this->input->post('nama_dosen'),
        ];

        $this->db->insert('tb_dosen',$data);
        $this->session->set_flashdata('sukses','sukses');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
        $data = [
            'nama_dosen'          => $this->input->post('nama_dosen'),
        ];

        $this->db->update('tb_dosen',$data,['id_dosen' => $id]);
        $this->session->set_flashdata('update','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->delete('tb_dosen',['id_dosen' => $id]);
        $this->session->set_flashdata('hapus','hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }


}

