<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_kuisioner extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_kuisioner_model');
        $this->load->library('form_validation');
        $this->load->model('My_model');
        $this->load->library('session');

        if ($this->session->userdata('level')!="admin") {
            redirect('login');
        }
    }

    public function index()
    {
        $tb_kuisioner = $this->Tb_kuisioner_model->get_all();

        $data = array(
            'tb_kuisioner_data' => $tb_kuisioner
        );

        $this->template->load('template','kuisioner/tb_kuisioner_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_kuisioner_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kuisioner' => $row->id_kuisioner,
		'kuisioner' => $row->kuisioner,
	    );
            $this->template->load('template','kuisioner/tb_kuisioner_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kuisioner'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_kuisioner/create_action'),
	    'id_kuisioner' => set_value('id_kuisioner'),
	    'kuisioner' => set_value('kuisioner'),
	);
        $this->template->load('template','kuisioner/tb_kuisioner_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kuisioner' => $this->input->post('kuisioner',TRUE),
	    );

            $this->Tb_kuisioner_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_kuisioner'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_kuisioner_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_kuisioner/update_action'),
		'id_kuisioner' => set_value('id_kuisioner', $row->id_kuisioner),
		'kuisioner' => set_value('kuisioner', $row->kuisioner),
	    );
            $this->template->load('template','kuisioner/tb_kuisioner_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kuisioner'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kuisioner', TRUE));
        } else {
            $data = array(
		'kuisioner' => $this->input->post('kuisioner',TRUE),
	    );

            $this->Tb_kuisioner_model->update($this->input->post('id_kuisioner', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_kuisioner'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_kuisioner_model->get_by_id($id);

        if ($row) {
            $this->Tb_kuisioner_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_kuisioner'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kuisioner'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kuisioner', 'kuisioner', 'trim|required');

	$this->form_validation->set_rules('id_kuisioner', 'id_kuisioner', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tb_kuisioner.php */
/* Location: ./application/controllers/Tb_kuisioner.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-04-18 07:53:09 */
/* http://harviacode.com */