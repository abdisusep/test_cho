<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenghasilanOrtu extends CI_Controller {

	public function index()
	{
        $data = $this->portu_model->get_data();
        echo json_encode($data);
	}
    
}
