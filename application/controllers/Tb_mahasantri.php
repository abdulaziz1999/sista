<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_mahasantri extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_mahasantri_model');
        $this->load->library('form_validation');
        $this->load->model('My_model');
        $this->load->library('session');

        if ($this->session->userdata('level')!="admin") {
            redirect('login');
        }
        
    }

    public function index()
    {
        $tb_mahasantri = $this->Tb_mahasantri_model->get_all();

        $data = array(
            'tb_mahasantri_data' => $tb_mahasantri
        );

        $this->template->load('template','mahasantri/tb_mahasantri_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_mahasantri_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_mahasantri' => $row->id_mahasantri,
		'nama' => $row->nama,
		'nim' => $row->nim,
		'kelas' => $row->kelas,
		'agama' => $row->agama,
		'tmp_lahir' => $row->tmp_lahir,
		'tgl_lahir' => $row->tgl_lahir,
		'alamat' => $row->alamat,
		'email' => $row->email,
		'nohp' => $row->nohp,
	    );
            $this->template->load('template','mahasantri/tb_mahasantri_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_mahasantri'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_mahasantri/create_action'),
	    'id_mahasantri' => set_value('id_mahasantri'),
	    'nama' => set_value('nama'),
	    'nim' => set_value('nim'),
	    'kelas' => set_value('kelas'),
	    'agama' => set_value('agama'),
	    'tmp_lahir' => set_value('tmp_lahir'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'alamat' => set_value('alamat'),
	    'email' => set_value('email'),
	    'nohp' => set_value('nohp'),
	);
        $this->template->load('template','mahasantri/tb_mahasantri_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'nim' => $this->input->post('nim',TRUE),
		'kelas' => $this->input->post('kelas',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'email' => $this->input->post('email',TRUE),
		'nohp' => $this->input->post('nohp',TRUE),
	    );

            $this->Tb_mahasantri_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_mahasantri'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_mahasantri_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_mahasantri/update_action'),
		'id_mahasantri' => set_value('id_mahasantri', $row->id_mahasantri),
		'nama' => set_value('nama', $row->nama),
		'nim' => set_value('nim', $row->nim),
		'kelas' => set_value('kelas', $row->kelas),
		'agama' => set_value('agama', $row->agama),
		'tmp_lahir' => set_value('tmp_lahir', $row->tmp_lahir),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'alamat' => set_value('alamat', $row->alamat),
		'email' => set_value('email', $row->email),
		'nohp' => set_value('nohp', $row->nohp),
	    );
            $this->template->load('template','mahasantri/tb_mahasantri_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_mahasantri'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_mahasantri', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'nim' => $this->input->post('nim',TRUE),
		'kelas' => $this->input->post('kelas',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'tmp_lahir' => $this->input->post('tmp_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'email' => $this->input->post('email',TRUE),
		'nohp' => $this->input->post('nohp',TRUE),
	    );

            $this->Tb_mahasantri_model->update($this->input->post('id_mahasantri', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_mahasantri'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_mahasantri_model->get_by_id($id);

        if ($row) {
            $this->Tb_mahasantri_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_mahasantri'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_mahasantri'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('nim', 'nim', 'trim|required');
	$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('tmp_lahir', 'tmp lahir', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('nohp', 'nohp', 'trim|required');

	$this->form_validation->set_rules('id_mahasantri', 'id_mahasantri', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tb_mahasantri.doc");

        $data = array(
            'tb_mahasantri_data' => $this->Tb_mahasantri_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('mahasantri/tb_mahasantri_doc',$data);
    }

}

/* End of file Tb_mahasantri.php */
/* Location: ./application/controllers/Tb_mahasantri.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-18 07:27:05 */
/* http://harviacode.com */