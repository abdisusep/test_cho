<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdmUmum extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_administrasi_umum' => $this->input->post('nama_administrasi_umum'),
        ];
		$this->admumum_model->insert_data($data);
        $this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a7b2');
        redirect('/page/a7?sub=a7b2');
	}

    public function update()
    {
        $id = $this->input->post('id_administrasi_umum');
        $data = [
            'nama_administrasi_umum' => $this->input->post('nama_administrasi_umum'),
        ];
		$this->admumum_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a7b2');
        redirect('/page/a7?sub=a7b2');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->admumum_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a7b2');
        redirect('/page/a7?sub=a7b2');
    }

}
