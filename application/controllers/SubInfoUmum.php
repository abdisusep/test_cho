<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubInfoUmum extends CI_Controller {

	public function insert()
	{
        $data = [
            'id_info_umum' => $this->input->post('id_infoumum'),
            'nama_sub_informasi_umum' => $this->input->post('sub_info_umum'),
            'tipe' => $this->input->post('tipe'),
            'tabel_select' => $this->input->post('tabel_select'),
            'aktif' => '1',
        ];

		$this->subinfoumum_model->insert_data($data);
		$this->rversi_model->insert_data('a1b15');
        redirect('/page/a1?sub=a1b15');
	}

	public function update()
	{
		$id = $this->input->post('id_sub_info_umum');
        $data = [
            'nama_sub_informasi_umum' => $this->input->post('sub_info_umum'),
            'tipe' => $this->input->post('tipe'),
            'tabel_select' => $this->input->post('tabel_select'),
            'aktif' => $this->input->post('aktif'),
        ];
		$this->subinfoumum_model->update_data($id, $data);
        $this->session->set_flashdata('alert','Successfull'); 
		$this->rversi_model->insert_data('a1b15');
        redirect('/page/a1?sub=a1b15');
	}

}
