<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubGolongan extends CI_Controller {

	public function insert()
	{
        $data = [
            'id_golongan' => $this->input->post('id_golongan'),
            'nama_sub_golongan' => $this->input->post('nama_sub_golongan'),
            'jumlah' => $this->input->post('jumlah'),
        ];
		$this->subgolongan_model->insert_data($data);
        $this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a2b2');
        redirect('/page/a2?sub=a2b2');
	}

    public function update()
    {
        $id = $this->input->post('id_sub_golongan');
        $data = [
            'nama_sub_golongan' => $this->input->post('nama_sub_golongan'),
            'jumlah' => $this->input->post('jumlah'),
        ];
		$this->subgolongan_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a2b2');
        redirect('/page/a2?sub=a2b2');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->subgolongan_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a2b2');
        redirect('/page/a2?sub=a2b2');
    }

}
