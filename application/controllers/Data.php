<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
	
	public function index()
	{
		$data['iu'] = $this->infoumum_model->get_data();
		$this->load->view('page/data', $data);
	}

	public function insert()
	{
		var_dump($this->input->post());
	}

}
