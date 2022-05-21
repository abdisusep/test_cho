<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatusOrtu extends CI_Controller {

	public function index()
	{
        $data = $this->sortu_model->get_data();
        echo json_encode($data);
	}
    
}
