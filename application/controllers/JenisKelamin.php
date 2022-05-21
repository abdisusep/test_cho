<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisKelamin extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_jenis_kelamin' => $this->input->post('nama_jenis_kelamin'),
        ];

		$this->jk_model->insert_data($data);
        $this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a1b1');
        redirect('/page/a1?sub=a1b1');
	}

    public function update()
    {
        $id = $this->input->post('id_jenis_kelamin');
        $data = [
            'nama_jenis_kelamin' => $this->input->post('nama_jenis_kelamin'),
        ];
		$this->jk_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b1');
        redirect('/page/a1?sub=a1b1');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->jk_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b1');
        redirect('/page/a1?sub=a1b1');
    }

}
