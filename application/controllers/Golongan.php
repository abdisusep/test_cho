<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Golongan extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_golongan' => $this->input->post('nama_golongan'),
        ];
		$this->golongan_model->insert_data($data);
		$this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a2b2');
        redirect('/page/a2?sub=a2b2');
	}

	public function update()
    {
        $id = $this->input->post('id_golongan');
        $data = [
            'nama_golongan' => $this->input->post('nama_golongan'),
        ];
		$this->golongan_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a2b2');
        redirect('/page/a2?sub=a2b2');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->golongan_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a2b2');
        redirect('/page/a2?sub=a2b2');
    }

}
