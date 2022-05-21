<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SKeluarga extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_status_keluarga' => $this->input->post('nama_status_keluarga'),
        ];
		$this->skeluarga_model->insert_data($data);
		$this->rversi_model->insert_data('a1b10');
        redirect('/page/a1?sub=a1b10');
	}

    public function update()
    {
        $id = $this->input->post('id_status_keluarga');
        $data = [
            'nama_status_keluarga' => $this->input->post('nama_status_keluarga'),
        ];
		$this->skeluarga_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b10');
        redirect('/page/a1?sub=a1b10');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->skeluarga_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b10');
        redirect('/page/a1?sub=a1b10');
    }

}
