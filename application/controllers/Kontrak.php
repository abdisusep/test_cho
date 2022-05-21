<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrak extends CI_Controller {
	
	public function user($id)
	{
		$user = $this->user_model->get_data_id($id)[0];
		$data['user'] = $user;
		if ($user->status == 2) {
			$kontrak = $this->kontrak_model->get_data_id($id)[0];
			$data['kontrak'] = $kontrak;
		}
		// if (date('Y-m-d') >= '2022-05-21') {
		// 	echo 'lebih';
		// }else{
		// 	echo 'kurang';
		// }
		$this->load->view('page/kontrak', $data);
	}

	public function insert()
	{
		$id = $this->input->post('id_user');
		$lama_kontrak = $this->input->post('lama_kontrak');
		$ttd1 = $this->input->post('signed1');
		$ttd2 = $this->input->post('signed2');

		if ($ttd1!='' && $ttd2!='') {

			$folderPath = "assets/img/";
			$image_parts1 = explode(";base64,", $ttd1);
			$image_parts2 = explode(";base64,", $ttd2);
			$image_type_aux1 = explode("image/", $image_parts1[0]);
			$image_type_aux2 = explode("image/", $image_parts2[0]);
			$image_type1 = $image_type_aux1[1];
			$image_type2 = $image_type_aux2[1];
			$image_base1 = base64_decode($image_parts1[1]);
			$image_base2 = base64_decode($image_parts2[1]);
			$file1 = 'TTD1_' . uniqid() . '.png';
			$file2 = 'TTD2_' . uniqid() . '.png';
			file_put_contents($folderPath.$file1, $image_base1);
			file_put_contents($folderPath.$file2, $image_base2);

			$mulai_kontrak = date('Y-m-d');
			$tambah_bulan = mktime(0,0,0,date('m')+$lama_kontrak);
			$habis_kontrak = date('Y-m-d', $tambah_bulan);

			$data = [
				'id_user' => $id,
				'mulai_kontrak' => $mulai_kontrak,
				'habis_kontrak' => $habis_kontrak,
				'ttd1' => $file1,
				'ttd2' => $file2,
			];
			$this->kontrak_model->insert_data($data);
			$this->user_model->update_data($id, ['status' => '2']);
			$result = [
				'success' => true,
				'message' => 'Berhasil tanda tangan kontrak!',
			];
		}else{
			$result = [
				'success' => false,
				'message' => 'Belum di tanda tangan!',
			];
		}

		echo json_encode($result);
	}

}
