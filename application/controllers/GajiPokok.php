<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GajiPokok extends CI_Controller {

	public function insert()
	{
        $data = [
            'kota' => $this->input->post('kota'),
            'idr' => $this->input->post('idr'),
        ];
		$this->gajipokok_model->insert_data($data);
        $this->session->set_flashdata('alert','Insert successfull'); 
		$this->rversi_model->insert_data('a2b1');
        redirect('/page/a2?sub=a2b1');
	}

    public function update()
    {
        $id = $this->input->post('id_gaji_pokok');
        $data = [
            'kota' => $this->input->post('kota'),
            'idr' => $this->input->post('idr'),
        ];
		$this->gajipokok_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a2b1');
        redirect('/page/a2?sub=a2b1');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->gajipokok_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a2b1');
        redirect('/page/a2?sub=a2b1');
    }

}
