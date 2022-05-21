<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisPekerjaan extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_jenis_pekerjaan' => $this->input->post('nama_jenis_pekerjaan'),
        ];
		$this->jpekerjaan_model->insert_data($data);
        $this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a1b14');
        redirect('/page/a1?sub=a1b14');
	}

    public function update()
    {
        $id = $this->input->post('id_jenis_pekerjaan');
        $data = [
            'nama_jenis_pekerjaan' => $this->input->post('nama_jenis_pekerjaan'),
        ];
		$this->jpekerjaan_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b14');
        redirect('/page/a1?sub=a1b14');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->jpekerjaan_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b14');
        redirect('/page/a1?sub=a1b14');
    }

}
