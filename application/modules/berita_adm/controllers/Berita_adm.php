<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita_adm extends CI_Controller
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
        $data['title']		= "User";
        $data['berita']       = $this->db->get('tb_berita')->result();
        $this->template->load('template_back/template','berita_adm',$data);
    }

    function dataEdit(){
        $id = $this->input->post('id');
        $berita = $this->db->get_where('tb_berita',['id_berita' => $id])->row();
        ?>
        <div class="card">
                <div class="card-body">
                  <form method="POST" action="<?= base_url('berita_adm/update/'.$id)?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">NIM</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="jd_berita" value="<?= $berita->jd_berita?>" placeholder="Judul Berita" type="text">
                              </div>
                            </div>
                          </div> 
                          <div class="col-md-12">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Isi Berita</label>
                              <div class="input-group input-group-merge">
                                <textarea class="form-control" name="isi_berita" value="<?= $berita->isi_berita?>" cols="30" rows="6"><?= $berita->isi_berita?></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Status</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <select name="status" class="form-control">
                                  <option disabled> --- Pilih Status --- </option>
                                  <?php  if($berita->status == 'no'):?>
                                    <option value="no" selected>No Publish</option>
                                    <option value="publish">Publish</option>
                                  <?php elseif($berita->status == 'Ditolak'):?>
                                    <option value="no">No Publish</option>
                                    <option value="publish" selected>Publish</option>
                                  <?php else:?>
                                    <option value="no">No Publish</option>
                                    <option value="publish">Publish</option>
                                  <?php endif;?>
                                </select>
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
            'jd_berita' => $this->input->post('jd_berita'),
            'isi_berita'=> nl2br($this->input->post('isi_berita')),
            'status'    => $this->input->post('status'),
        ];
        $this->db->insert('tb_berita',$data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
        $data = [
            'jd_berita' => $this->input->post('jd_berita'),
            'isi_berita'=> nl2br($this->input->post('isi_berita')),
            'status'    => $this->input->post('status'),
        ];

        $this->db->update('tb_berita',$data,['id_berita' => $id]);
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->delete('tb_berita',['id_berita' => $id]);
        redirect($_SERVER['HTTP_REFERER']);
    }


}

