<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	
        
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('level') != "admin"){
          redirect('login');
        }		
		
		
    }

    public function index(){
        $data['title']		= "Mahasiswa";
        $this->db->join('tb_prodi','tb_prodi.id_prodi = tb_mahasiswa.prodi_id');
        $data['mahasiswa']= $this->db->get('tb_mahasiswa')->result();
        $data['prodi']    = $this->db->get('tb_prodi')->result();
        $this->template->load('template_back/template','mahasiswa',$data);
    }

    function dataEdit(){
        $id         = $this->input->post('id');
        $mahasiswa  = $this->db->get_where('tb_mahasiswa',['id_mhs' => $id])->row();
        $prodi      = $this->db->get('tb_prodi')->result();
        ?>
        <div class="card">
                <div class="card-body">
                  <form method="POST" action="<?= base_url('mahasiswa/update/'.$id)?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">NIM</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="nim" value="<?= $mahasiswa->nim?>" placeholder="NIM" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Nama Mahasiwa</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="nama_mhs" value="<?= $mahasiswa->nama_mhs?>" placeholder="Nama Mahasiswa" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Tempat Lahir</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="tmp_lahir" value="<?= $mahasiswa->tmp_lahir?>" placeholder="Tempat Lahir" type="text">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Tanggal Lahir</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="tgl_lahir" value="<?= $mahasiswa->tgl_lahir?>" placeholder="Tanggal Lahir" type="date">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Jenis Kelamin</label>
                              <div class="input-group input-group-merge">
                                <select name="jk" class="form-control">
                                  <option disabled selected> --- Pilih Jenis Kelamin --- </option>
                                  <?php if($mahasiswa->jk == 'L'):?>
                                    <option value="L" selected>Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                  <?php elseif($mahasiswa->jk == 'P'):?>
                                    <option value="L">Laki-laki</option>
                                    <option value="P" selected>Perempuan</option>
                                  <?php else:?>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                  <?php endif;?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Agama</label>
                              <div class="input-group input-group-merge">
                                <select name="agama" class="form-control">
                                  <option disabled selected> --- Pilih Agama --- </option>
                                  <?php if($mahasiswa->agama == 'islam'):?>
                                    <option value="islam" selected>Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                  <?php elseif($mahasiswa->agama == 'kristen'):?>
                                    <option value="islam">Islam</option>
                                    <option value="kristen" selected>Kristen</option>
                                    <option value="katolik">Katolik</option>
                                  <?php elseif($mahasiswa->agama == 'katolik'):?>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katolik" selected>Katolik</option>
                                  <?php else:?>
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                  <?php endif;?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Alamat</label>
                              <div class="input-group input-group-merge">
                                <textarea class="form-control" name="alamat" value="<?= $mahasiswa->alamat?>" placeholder="Alamat Lengkap" id="" cols="30" rows="6"><?= $mahasiswa->alamat?></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Prodi</label>
                              <div class="input-group input-group-merge">
                                <select name="prodi_id" class="form-control">
                                  <option disabled selected> --- Pilih Prodi --- </option>
                                  <?php foreach($prodi as $row):?>
                                    <option <?= $mahasiswa->prodi_id == $row->id_prodi ? 'selected' : ''?> value="<?=$row->id_prodi?>"><?= $row->nama_prodi?></option>
                                  <?php endforeach;?>
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
            'nama_mhs'  => $this->input->post('nama_mhs'),
            'nim'       => $this->input->post('nim'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk'        => $this->input->post('jk'),
            'agama'     => $this->input->post('agama'),
            'alamat'    => $this->input->post('alamat'),
            'prodi_id'  => $this->input->post('prodi_id'),
        ];

        $this->db->insert('tb_mahasiswa',$data);
        $this->session->set_flashdata('sukses','sukses');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
        $data = [
            'nama_mhs'  => $this->input->post('nama_mhs'),
            'nim'       => $this->input->post('nim'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk'        => $this->input->post('jk'),
            'agama'     => $this->input->post('agama'),
            'alamat'    => $this->input->post('alamat'),
            'prodi_id'  => $this->input->post('prodi_id'),
        ];

        $this->db->update('tb_mahasiswa',$data,['id_mhs' => $id]);
        $this->session->set_flashdata('update','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->delete('tb_mahasiswa',['id_mhs' => $id]);
        $this->db->delete('tb_user',['user_id' => $id]);
        $this->session->set_flashdata('hapus','hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }


}

