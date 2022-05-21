<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UkuranBaju extends CI_Controller {

	public function index()
	{
        $data = $this->ukbaju_model->get_data();
        echo json_encode($data);
	}

}
