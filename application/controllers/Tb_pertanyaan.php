<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_pertanyaan extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_pertanyaan_model');
        $this->load->library('form_validation');
        $this->load->model('My_model');
        $this->load->library('session');

        if ($this->session->userdata('level')!="admin") {
            redirect('login');
        }
    }

    public function index()
    {
        $tb_pertanyaan = $this->Tb_pertanyaan_model->get_all_query();

        $data = array(
            'tb_pertanyaan_data' => $tb_pertanyaan
        );

        $this->template->load('template','pertanyaan/tb_pertanyaan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_pertanyaan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pertanyaan' => $row->id_pertanyaan,
		'id_jpertanyaan' => $row->id_jpertanyaan,
		'id_kuisioner' => $row->id_kuisioner,
		'pertanyaan' => $row->pertanyaan,
		'pilihan' => $row->pilihan,
	    );
            $this->template->load('template','pertanyaan/tb_pertanyaan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_pertanyaan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_pertanyaan/create_action'),
	    'id_pertanyaan' => set_value('id_pertanyaan'),
	    'id_jpertanyaan' => set_value('id_jpertanyaan'),
	    'id_kuisioner' => set_value('id_kuisioner'),
	    'pertanyaan' => set_value('pertanyaan'),
	    'pilihan' => set_value('pilihan'),
	);
        $this->template->load('template','pertanyaan/tb_pertanyaan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_jpertanyaan' => $this->input->post('id_jpertanyaan',TRUE),
		'id_kuisioner' => $this->input->post('id_kuisioner',TRUE),
		'pertanyaan' => $this->input->post('pertanyaan',TRUE),
		'pilihan' => $this->input->post('pilihan',TRUE),
	    );

            $this->Tb_pertanyaan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_pertanyaan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_pertanyaan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_pertanyaan/update_action'),
		'id_pertanyaan' => set_value('id_pertanyaan', $row->id_pertanyaan),
		'id_jpertanyaan' => set_value('id_jpertanyaan', $row->id_jpertanyaan),
		'id_kuisioner' => set_value('id_kuisioner', $row->id_kuisioner),
		'pertanyaan' => set_value('pertanyaan', $row->pertanyaan),
		'pilihan' => set_value('pilihan', $row->pilihan),
	    );
            $this->template->load('template','pertanyaan/tb_pertanyaan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_pertanyaan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pertanyaan', TRUE));
        } else {
            $data = array(
		'id_jpertanyaan' => $this->input->post('id_jpertanyaan',TRUE),
		'id_kuisioner' => $this->input->post('id_kuisioner',TRUE),
		'pertanyaan' => $this->input->post('pertanyaan',TRUE),
		'pilihan' => $this->input->post('pilihan',TRUE),
	    );

            $this->Tb_pertanyaan_model->update($this->input->post('id_pertanyaan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_pertanyaan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_pertanyaan_model->get_by_id($id);

        if ($row) {
            $this->Tb_pertanyaan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_pertanyaan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_pertanyaan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_jpertanyaan', 'id jpertanyaan', 'trim|required');
	$this->form_validation->set_rules('id_kuisioner', 'id kuisioner', 'trim|required');
	$this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'trim|required');
	$this->form_validation->set_rules('pilihan', 'pilihan', 'trim|required');

	$this->form_validation->set_rules('id_pertanyaan', 'id_pertanyaan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_pertanyaan.php */
/* Location: ./application/controllers/Tb_pertanyaan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-18 08:05:14 */
/* http://harviacode.com */