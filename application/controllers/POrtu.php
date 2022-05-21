<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class POrtu extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_penghasilan_ortu' => $this->input->post('nama_penghasilan_ortu'),
        ];
		$this->portu_model->insert_data($data);
		$this->rversi_model->insert_data('a1b11');
        redirect('/page/a1?sub=a1b11');
	}

    public function update()
    {
        $id = $this->input->post('id_penghasilan_ortu');
        $data = [
            'nama_penghasilan_ortu' => $this->input->post('nama_penghasilan_ortu'),
        ];
		$this->portu_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Update successfull'); 
		$this->rversi_model->insert_data('a1b11');
        redirect('/page/a1?sub=a1b11');
    }

    public function delete($id, $delete)
    {
        $data = [
            'deleted' => $delete,
        ];
		$this->portu_model->delete_data($id, $data);
        $this->session->set_flashdata('alert','Delete successfull'); 
		$this->rversi_model->insert_data('a1b11');
        redirect('/page/a1?sub=a1b11');
    }

}
