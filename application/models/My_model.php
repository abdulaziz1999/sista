<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class My_model extends CI_Model{

    function cek_login($u,$p){
        $pwd = md5($p);
        $this->db->select('username,password,nama,level');
        $this->db->from('admin');
        $this->db->where('username',$u);
        $this->db->where('password',$pwd);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows()==1) {
        	return $query->result();
        }else{
        	return false;
        }
        
    }

}
