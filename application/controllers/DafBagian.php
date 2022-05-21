<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DafBagian extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_daftar_bagian' => $this->input->post('nama_daftar_bagian'),
        ];
		$this->dafbagian_model->insert_data($data);
		$this->rversi_model->insert_data('a1b8');
        redirect('/page/a1?sub=a1b8');
	}

    public function update()
    {
        $id = $this->input->post('id_daftar_bagian');
        $data = [
            'nama_daftar_bagian' => $this->input->post('nama_daftar_bagian'),
        ];
		$this->dafbagian_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b8');
        redirect('/page/a1?sub=a1b8');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->dafbagian_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b8');
        redirect('/page/a1?sub=a1b8');
    }

}
