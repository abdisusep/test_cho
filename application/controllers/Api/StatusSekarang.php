<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatusSekarang extends CI_Controller {

	public function index()
	{
        $data = $this->ssekarang_model->get_data();
        echo json_encode($data);
	}
    
}
