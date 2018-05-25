<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class M_kuis extends CI_model{
   public function __construct() {
        parent::__construct();
  }

  public function tampil(){
  	$this->db->select('*');
	$this->db->from('tb_pertanyaan');
	$this->db->join('tb_pertanyaan','id_pertanyaan = id_jpertanyaan = id_kuisioner');
	$data = $this->db->get();
	return $data->result();  	
  }




}