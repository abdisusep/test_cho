<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SifatDasar extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_sifat_dasar' => $this->input->post('nama_sifat_dasar'),
        ];
		$this->sifatdasar_model->insert_data($data);
		$this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a8b1');
        redirect('/page/a8?sub=a8b1');
	}

	public function update()
    {
        $id = $this->input->post('id_sifat_dasar');
        $data = [
            'nama_sifat_dasar' => $this->input->post('nama_sifat_dasar'),
        ];
		$this->sifatdasar_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a8b1');
        redirect('/page/a8?sub=a8b1');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->sifatdasar_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a8b1');
        redirect('/page/a8?sub=a8b1');
    }

}
