<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	public function index()
	{
        $data = $this->pendidikan_model->get_data();
        echo json_encode($data);
	}

}
