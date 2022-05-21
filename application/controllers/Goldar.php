<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goldar extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_golongan_darah' => $this->input->post('nama_golongan_darah'),
        ];
		$this->goldar_model->insert_data($data);
        $this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a1b4');
        redirect('/page/a1?sub=a1b4');
	}

    public function update()
    {
        $id = $this->input->post('id_golongan_darah');
        $data = [
            'nama_golongan_darah' => $this->input->post('nama_golongan_darah'),
        ];
		$this->goldar_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b4');
        redirect('/page/a1?sub=a1b4');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->goldar_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b4');
        redirect('/page/a1?sub=a1b4');
    }

}
