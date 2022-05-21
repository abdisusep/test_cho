<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepintaran extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_kepintaran' => $this->input->post('nama_kepintaran'),
        ];
		$this->kepintaran_model->insert_data($data);
		$this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a8b3');
        redirect('/page/a8?sub=a8b3');
	}

	public function update()
    {
        $id = $this->input->post('id_kepintaran');
        $data = [
            'nama_kepintaran' => $this->input->post('nama_kepintaran'),
        ];
		$this->kepintaran_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a8b3');
        redirect('/page/a8?sub=a8b3');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->kepintaran_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a8b3');
        redirect('/page/a8?sub=a8b3');
    }

}
