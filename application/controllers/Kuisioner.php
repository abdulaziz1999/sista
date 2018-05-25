<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisioner extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Tb_pertanyaan_model');
        $this->load->library('form_validation');
	}

	public function index(){
		$tb_pertanyaan = $this->Tb_pertanyaan_model->get_all();
        $data = array(
            'tb_pertanyaan_data' => $tb_pertanyaan
        );
		$this->template->load('halsantri/template_santri','halsantri/form',$data);

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
        $this->template->load('halsantri/template_santri','halsantri/form', $data);
    }
}
