<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SOrtu extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_status_ortu' => $this->input->post('nama_status_ortu'),
        ];
		$this->sortu_model->insert_data($data);
		$this->rversi_model->insert_data('a1b13');
        redirect('/page/a1?sub=a1b13');
	}

    public function update()
    {
        $id = $this->input->post('id_status_ortu');
        $data = [
            'nama_status_ortu' => $this->input->post('nama_status_ortu'),
        ];
		$this->sortu_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b13');
        redirect('/page/a1?sub=a1b13');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->sortu_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b13');
        redirect('/page/a1?sub=a1b13');
    }

}
