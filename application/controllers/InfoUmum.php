<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoUmum extends CI_Controller {

	public function insert()
	{
        $data = [
            'nama_informasi_umum' => $this->input->post('info_umum'),
            'aktif' => '1',
        ];
		$this->infoumum_model->insert_data($data);
        $this->session->set_flashdata('alert','Successfull'); 
		$this->rversi_model->insert_data('a1b15');
        redirect('/page/a1?sub=a1b15');
	}

    // public function update()
    // {
    //     $id = $this->input->post('id_jk');
    //     $data = [
    //         'nama_jk' => $this->input->post('nama_jk'),
    //         'aktif' => '1',
    //     ];
	// 	$this->infoumum_model->update_data($id, $data);
    //     $this->session->set_flashdata('alert','Successfull'); 
	// 	$this->rversi_model->insert_data('a1b1');
    //     redirect('/page/a1?sub=a1b1');
    // }

}
