<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AktivitasLain extends CI_Controller {

	public function index()
	{
        $data = $this->aktlain_model->get_data();
        echo json_encode($data);
	}

}
