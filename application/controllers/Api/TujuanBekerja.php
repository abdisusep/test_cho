<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TujuanBekerja extends CI_Controller {

	public function index()
	{
        $data = $this->tbekerja_model->get_data();
        echo json_encode($data);
	}

}
