<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['user']       = $this->db->get('tb_user')->result();
        $this->template->load('template_back/template','user',$data);
    }

    function dataEdit(){
        $id = $this->input->post('id');
        $user = $this->db->get_where('tb_user',['id_user' => $id])->row();
        ?>
        <div class="card">
                <div class="card-body">
                  <form method="POST" action="<?= base_url('user/update/'.$id)?>">
                        <!-- Input groups with icon -->
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Nama</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="nama" value="<?= $user->nama?>" placeholder="Nama" type="text" required>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                            <label class="form-control-label" for="exampleDatepicker">Email</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input class="form-control" name="email" value="<?= $user->email?>" placeholder="Email" type="email" required>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Level</label>
                              <div class="input-group input-group-merge">
                                <select name="level" class="form-control">
                                  <option disabled> --- Pilih Level --- </option>
                                  <?php if($user->level == 'mahasiswa'):?>
                                    <option value="mahasiswa" selected>Mahasiswa</option>
                                    <option value="admin">Admin</option>
                                  <?php elseif($user->level == 'admin'):?>
                                    <option value="mahasiswa">Mahasiswa</option>
                                    <option value="admin" selected>Admin</option>
                                  <?php else:?>
                                    <option value="mahasiswa">Mahasiswa</option>
                                    <option value="admin">Admin</option>
                                  <?php endif;?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="form-control-label" for="exampleDatepicker">Status</label>
                              <div class="input-group input-group-merge">
                                <select name="status" class="form-control">
                                  <option disabled> --- Pilih Status --- </option>
                                  <?php if($user->status == 'N'):?>
                                    <option value="N" selected>inactive</option>
                                    <option value="Y">active</option>
                                  <?php elseif($user->status == 'Y'):?>
                                    <option value="N">inactive</option>
                                    <option value="Y" selected>active</option>
                                  <?php else:?>
                                    <option value="N">inactive</option>
                                    <option value="Y">active</option>
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
            'nama'          => $this->input->post('nama'),
            'email'         => $this->input->post('email'),
            'level'         => $this->input->post('level'),
            'status'        => $this->input->post('status'),
            'password'      => md5($this->input->post('password')),
        ];

        $this->db->insert('tb_user',$data);
        $this->session->set_flashdata('sukses','sukses');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
        $data = [
            'nama'          => $this->input->post('nama'),
            'email'         => $this->input->post('email'),
            'level'         => $this->input->post('level'),
            'status'        => $this->input->post('status'),
        ];

        $this->db->update('tb_user',$data,['id_user' => $id]);
        $this->session->set_flashdata('update','update');
        redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $id_mhs = $this->db->get_where('tb_user',['id_user' =>  $id])->row()->user_id;
        if($id_mhs != NULL){
          $this->db->delete('tb_mahasiswa',['id_mhs' => $id_mhs]);
        }
        $this->db->delete('tb_user',['id_user' => $id]);
        $this->session->set_flashdata('hapus','hapus');
        redirect($_SERVER['HTTP_REFERER']);
    }


}

