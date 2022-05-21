<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	public function index()
	{
        $data = $this->rpenyakit_model->get_data();
        echo json_encode($data);
	}

}
