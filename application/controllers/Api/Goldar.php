<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goldar extends CI_Controller {

	public function index()
	{
        $data = $this->goldar_model->get_data();
        echo json_encode($data);
	}
    
}
