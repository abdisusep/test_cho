<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agama extends CI_Controller {

	public function index()
	{
        $data = $this->agama_model->get_data();
        echo json_encode($data);
	}

}
