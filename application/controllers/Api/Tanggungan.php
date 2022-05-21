<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tanggungan extends CI_Controller {

	public function index()
	{
        $data = $this->jumtanggungan_model->get_data();
        echo json_encode($data);
	}
    
}
