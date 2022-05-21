<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RPenyakit extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_riwayat_penyakit' => $this->input->post('nama_riwayat_penyakit'),
        ];
		$this->rpenyakit_model->insert_data($data);
        $this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a1b6');
        redirect('/page/a1?sub=a1b6');
	}

    public function update()
    {
        $id = $this->input->post('id_riwayat_penyakit');
        $data = [
            'nama_riwayat_penyakit' => $this->input->post('nama_riwayat_penyakit'),
        ];
		$this->rpenyakit_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b6');
        redirect('/page/a1?sub=a1b6');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->rpenyakit_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b6');
        redirect('/page/a1?sub=a1b6');
    }

}
