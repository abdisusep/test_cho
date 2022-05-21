<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UkBaju extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_ukuran_baju' => $this->input->post('nama_ukuran_baju'),
        ];
		$this->ukbaju_model->insert_data($data);
		$this->rversi_model->insert_data('a1b5');
        redirect('/page/a1?sub=a1b5');
	}

    public function update()
    {
        $id = $this->input->post('id_ukuran_baju');
        $data = [
            'nama_ukuran_baju' => $this->input->post('nama_ukuran_baju'),
        ];
		$this->ukbaju_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b5');
        redirect('/page/a1?sub=a1b5');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->ukbaju_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b5');
        redirect('/page/a1?sub=a1b5');
    }


}
