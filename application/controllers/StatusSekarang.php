<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatusSekarang extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_status_sekarang' => $this->input->post('nama_status_sekarang'),
        ];
		$this->ssekarang_model->insert_data($data);
		$this->rversi_model->insert_data('a1b3');
        redirect('/page/a1?sub=a1b3');
	}

    public function update()
    {
        $id = $this->input->post('id_status_sekarang');
        $data = [
            'nama_status_sekarang' => $this->input->post('nama_status_sekarang'),
        ];
		$this->ssekarang_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b3');
        redirect('/page/a1?sub=a1b3');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->ssekarang_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b3');
        redirect('/page/a1?sub=a1b3');
    }

}
