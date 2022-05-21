<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
        $data = $this->user_model->get_data();
        echo json_encode($data);
	}

	public function edit($id)
	{
		$data['user'] = $this->user_model->get_data_id($id)[0];
		$this->load->view('page/edit_user', $data);
	}

}
