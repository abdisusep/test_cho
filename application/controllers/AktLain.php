<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AktLain extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_aktivitas_lain' => $this->input->post('nama_aktivitas_lain'),
        ];
		$this->aktlain_model->insert_data($data);
		$this->rversi_model->insert_data('a1b9');
        redirect('/page/a1?sub=a1b9');
	}

    public function update()
    {
        $id = $this->input->post('id_aktivitas_lain');
        $data = [
            'nama_aktivitas_lain' => $this->input->post('nama_aktivitas_lain'),
        ];
		$this->aktlain_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b9');
        redirect('/page/a1?sub=a1b9');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->aktlain_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b9');
        redirect('/page/a1?sub=a1b9');
    }

}
