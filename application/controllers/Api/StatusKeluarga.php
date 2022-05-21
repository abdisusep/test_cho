<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatusKeluarga extends CI_Controller {

	public function index()
	{
        $data = $this->skeluarga_model->get_data();
        echo json_encode($data);
	}
    
}
