<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisKelamin extends CI_Controller {

	public function index()
	{
        $data = $this->jk_model->get_data();
        echo json_encode($data);
	}
    
}
