<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agama extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_agama' => $this->input->post('nama_agama'),
        ];
		$this->agama_model->insert_data($data);
        $this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a1b2');
        redirect('/page/a1?sub=a1b2');
	}

    public function update()
    {
        $id = $this->input->post('id_agama');
        $data = [
            'nama_agama' => $this->input->post('nama_agama'),
        ];
		$this->agama_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b2');
        redirect('/page/a1?sub=a1b2');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->agama_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b2');
        redirect('/page/a1?sub=a1b2');
    }

}
