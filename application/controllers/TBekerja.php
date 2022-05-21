<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TBekerja extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_tujuan_bekerja' => $this->input->post('nama_tujuan_bekerja'),
        ];
		$this->tbekerja_model->insert_data($data);
		$this->rversi_model->insert_data('a1b7');
        redirect('/page/a1?sub=a1b7');
	}

    public function update()
    {
        $id = $this->input->post('id_tujuan_bekerja');
        $data = [
            'nama_tujuan_bekerja' => $this->input->post('nama_tujuan_bekerja'),
        ];
		$this->tbekerja_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b7');
        redirect('/page/a1?sub=a1b7');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->tbekerja_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b7');
        redirect('/page/a1?sub=a1b7');
    }

}
