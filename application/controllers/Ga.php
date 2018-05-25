<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ga extends CI_Controller {
	public function index(){
		$this->template->load('halsantri/template_santri','halsantri/gallery1');

	}
}