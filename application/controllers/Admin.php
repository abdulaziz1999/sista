<?php
class Admin extends CI_Controller{

	function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('My_model');
        $this->load->model('Admin_model','admin');
        $this->load->library('session');
        
        if($this->session->userdata('true') != 'oke'){
            redirect(base_url());
        }
    }

	function index(){

        // $this->output->enable_profiler(true);
        $data = [
            'barang_max' => $this->admin->barang_max(),
            'barang_min' => $this->admin->barang_min()
        ];
		$this->template->load('template','v_admin',$data);
    }
    
}
?>