<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarBagian extends CI_Controller {

	public function index()
	{
        $data = $this->dafbagian_model->get_data();
        echo json_encode($data);
	}

}
