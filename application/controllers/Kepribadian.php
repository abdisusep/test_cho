<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepribadian extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_kepribadian' => $this->input->post('nama_kepribadian'),
        ];
		$this->kepribadian_model->insert_data($data);
		$this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a8b2');
        redirect('/page/a8?sub=a8b2');
	}

	public function update()
    {
        $id = $this->input->post('id_kepribadian');
        $data = [
            'nama_kepribadian' => $this->input->post('nama_kepribadian'),
        ];
		$this->kepribadian_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a8b2');
        redirect('/page/a8?sub=a8b2');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->kepribadian_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a8b2');
        redirect('/page/a8?sub=a8b2');
    }

}
