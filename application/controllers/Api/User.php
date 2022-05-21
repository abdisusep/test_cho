<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
        $data = $this->user_model->get_data();
        echo json_encode($data);
	}

	public function edit()
	{
		echo "a";
	}

}
