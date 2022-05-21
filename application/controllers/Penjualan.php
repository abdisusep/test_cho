<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_penjualan' => $this->input->post('nama_penjualan'),
        ];
		$this->penjualan_model->insert_data($data);
        $this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a7b1');
        redirect('/page/a7?sub=a7b1');
	}

	public function update()
    {
        $id = $this->input->post('id_penjualan');
        $data = [
            'nama_penjualan' => $this->input->post('nama_penjualan'),
        ];
		$this->penjualan_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a7b1');
        redirect('/page/a7?sub=a7b1');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->penjualan_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a7b1');
        redirect('/page/a7?sub=a7b1');
    }

}
