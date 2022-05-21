<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JumTanggungan extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_jumlah_tanggungan' => $this->input->post('nama_jumlah_tanggungan'),
        ];
		$this->jumtanggungan_model->insert_data($data);
		$this->rversi_model->insert_data('a1b12');
        redirect('/page/a1?sub=a1b12');
	}

    public function update()
    {
        $id = $this->input->post('id_jumlah_tanggungan');
        $data = [
            'nama_jumlah_tanggungan' => $this->input->post('nama_jumlah_tanggungan'),
        ];
		$this->jumtanggungan_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b12');
        redirect('/page/a1?sub=a1b12');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->jumtanggungan_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b12');
        redirect('/page/a1?sub=a1b12');
    }

}
