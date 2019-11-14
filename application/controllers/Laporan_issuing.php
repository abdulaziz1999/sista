<?php
class Laporan_issuing extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('My_model');
        $this->load->library('session');
      
    }

    function index(){
        // $data['status'] = $this->Pengaduan2_model->get_st()->s;

        $start = $this->input->get('s', TRUE);
        $end = $this->input->get('e', TRUE);

        if($start && $end != NULL){

        }else{
            $start = date('Y-m-d h:i:s');
            $end = date('Y-m-d h:i:s');
        }

        $this->template->load('template', 'laporan/laporan');
    }

    function ajax($s, $e){
        $draw 	= intval($this->input->get("draw"));
        $start 	= intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
        
        $sd = new DateTime($s);
        $ed = new DateTime($e);

        $this->db->where('waktu >=',date('Y-m-d h:i:s', $sd->getTimestamp()));
		$this->db->where('waktu <=',date('Y-m-d h:i:s', $ed->getTimestamp()));
		$this->db->where(['isi !=' => NULL]);
        $this->db->order_by('id','desc');
        $get =	$this->db->get('pengaduan2');

        $data = array();
        $no = 1;

        foreach($get->result() as $row){
            $data[] = [
                $no++,
                $row->isi,
                $row->klas,
                $row->klaskhusus,
                $row->nohp,
                $row->waktu,
                $row->status
            ];
        }

        $output = [
            "draw"              => $draw,
            "recordsTotal"      => $get->num_rows(),
            "recordsFiltered"   => $get->num_rows(),
            "data"              => $data
		];
		
		echo json_encode($output);
        exit();
    }
}