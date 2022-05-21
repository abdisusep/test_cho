<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	
	public function index()
	{
		$data['iu'] = $this->infoumum_model->get_data();
		$this->load->view('page/form', $data);
	}

	public function insert()
	{
		$foto_diri = $_FILES["foto_diri"]["name"];
		$foto_ktp  = $_FILES["foto_ktp"]["name"];
		$foto_kk   = $_FILES["foto_kk"]["name"];
    	$temp_foto_diri = $_FILES["foto_diri"]["tmp_name"];  
    	$temp_foto_ktp  = $_FILES["foto_ktp"]["tmp_name"];  
    	$temp_foto_kk   = $_FILES["foto_kk"]["tmp_name"];  

		if ($foto_diri!='' && $foto_ktp!='' && $foto_kk!='') {

			$valid_extensions = array('jpeg', 'jpg', 'png');
			$ext1 = strtolower(pathinfo($foto_diri, PATHINFO_EXTENSION));
			$ext2 = strtolower(pathinfo($foto_ktp, PATHINFO_EXTENSION));
			$ext3 = strtolower(pathinfo($foto_kk, PATHINFO_EXTENSION));

			$rand = rand(00000, 99999);
			$fname1 = "FOTO_".date('Ymds').$rand.'.'.$ext1;
			$fname2 = "KTP_".date('Ymds').$rand.'.'.$ext2;
			$fname3 = "KK_".date('Ymds').$rand.'.'.$ext3;

			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'nama_panggilan' => $this->input->post('nama_panggilan'),
				'jk' => $this->input->post('jenis_kelamin'),
				'tmp_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tanggal_lahir'),
				'alamat_ktp' => $this->input->post('alamat_ktp'),
				'provinsi1' => $this->input->post('getProv1'),
				'kota1' => $this->input->post('kota1'),
				'alamat_saat_ini' => $this->input->post('alamat_saat_ini'),
				'provinsi2' => $this->input->post('getProv2'),
				'kota2' => $this->input->post('kota2'),
				'no_hp' => $this->input->post('no_hp'),
				'nik' => $this->input->post('nik'),
				'agama' => 	$this->input->post('agama'),
				'status_sekarang' => $this->input->post('status_sekarang'),
				'goldar' => $this->input->post('goldar'),
				'tinggi_badan' => $this->input->post('tinggi_badan'),
				'berat_badan' => $this->input->post('berat_badan'),
				'ukuran_baju' => $this->input->post('ukuran_baju'),
				'riwayat_penyakit' => $this->input->post('riwayat_penyakit'),
				'instagram' => $this->input->post('instagram'),
				'facebook' => $this->input->post('facebook'),
				'twitter' => $this->input->post('twitter'),
				'pendidikan' => $this->input->post('pendidikan'),
				'tujuan_bekerja' => $this->input->post('tujuan_bekerja'),
				'pernah_bekerja' => $this->input->post('pernah_bekerja'),
				'tgl_panggil' => $this->input->post('tgl_panggil'),
				'daftar_bagian' => $this->input->post('daftar_bagian'),
				'aktivitas_lain' => $this->input->post('aktivitas_lain'),
				'no_keluarga' => $this->input->post('no_keluarga'),
				'alamat_ortu' => $this->input->post('alamat_ortu'),
				'provinsi3' => $this->input->post('getProv3'),
				'kota3' => $this->input->post('kota3'),
				'status_ortu' => $this->input->post('status_ortu'),
				'penghasilan_ortu' => $this->input->post('penghasilan_ortu'),
				'jum_tanggungan' => $this->input->post('jum_tanggungan'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'status_ayah' => $this->input->post('status_ayah'),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'status_ibu' => $this->input->post('status_ibu'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				'pekerjaan1' => $this->input->post('pekerjaan1'),
				'pekerjaan2' => $this->input->post('pekerjaan2'),
				'pekerjaan3' => $this->input->post('pekerjaan3'),
				'foto_diri' => $fname1,
				'foto_ktp' => $fname2,
				'foto_kk' => $fname3,
			];
	
			$error = 0;
			foreach ($data as $key => $value) {
				if ($value == '') {
					$error++;
				}
			}

			if ($error == 0) {
				if(in_array($ext1, $valid_extensions) && in_array($ext2, $valid_extensions) && in_array($ext3, $valid_extensions)) {
					$upload_foto_diri = move_uploaded_file($temp_foto_diri, "assets/img/".$fname1);
					$upload_foto_ktp  = move_uploaded_file($temp_foto_ktp, "assets/img/".$fname2);
					$upload_foto_kk   = move_uploaded_file($temp_foto_kk,  "assets/img/".$fname3);
					if($upload_foto_diri && $upload_foto_ktp && $upload_foto_kk) {
						$this->user_model->insert_data($data);
						$result = [
							'success' => true,
							'message' => 'Berhasil simpan!',
						];
					}else{
						$result = [
							'success' => false,
							'error' => $error,
							'message' => $data,
						];
					}
				}else{
					$result = [
						'success' => false,
						'message' => 'Hanya boleh upload gambar extension jpeg, jpg, png!',
					];
				}
			}

		}

		echo json_encode($result);
	}

	public function update($id)
	{
		$data = [
			'nama_lengkap' => $this->input->post('nama_lengkap'),
			'nama_panggilan' => $this->input->post('nama_panggilan'),
			'jk' => $this->input->post('jenis_kelamin'),
			'tmp_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tanggal_lahir'),
			'alamat_ktp' => $this->input->post('alamat_ktp'),
			'provinsi1' => $this->input->post('getProv1')=='' ? $this->user_model->get_data_id($id)[0]->provinsi1 : $this->input->post('getProv1'),
			'kota1' => $this->input->post('kota1')=='' ? $this->user_model->get_data_id($id)[0]->kota1 : $this->input->post('kota1'),
			'alamat_saat_ini' => $this->input->post('alamat_saat_ini'),
			'provinsi2' => $this->input->post('getProv2')=='' ? $this->user_model->get_data_id($id)[0]->provinsi2 : $this->input->post('getProv2'),
			'kota2' => $this->input->post('kota2')=='' ? $this->user_model->get_data_id($id)[0]->kota2 : $this->input->post('kota2'),
			'no_hp' => $this->input->post('no_hp'),
			'nik' => $this->input->post('nik'),
			'agama' => 	$this->input->post('agama'),
			'status_sekarang' => $this->input->post('status_sekarang'),
			'goldar' => $this->input->post('goldar'),
			'tinggi_badan' => $this->input->post('tinggi_badan'),
			'berat_badan' => $this->input->post('berat_badan'),
			'ukuran_baju' => $this->input->post('ukuran_baju'),
			'riwayat_penyakit' => $this->input->post('riwayat_penyakit'),
			'instagram' => $this->input->post('instagram'),
			'facebook' => $this->input->post('facebook'),
			'twitter' => $this->input->post('twitter'),
			'pendidikan' => $this->input->post('pendidikan'),
			'tujuan_bekerja' => $this->input->post('tujuan_bekerja'),
			'pernah_bekerja' => $this->input->post('pernah_bekerja'),
			'tgl_panggil' => $this->input->post('tgl_panggil'),
			'daftar_bagian' => $this->input->post('daftar_bagian'),
			'aktivitas_lain' => $this->input->post('aktivitas_lain'),
			'no_keluarga' => $this->input->post('no_keluarga'),
			'alamat_ortu' => $this->input->post('alamat_ortu'),
			'provinsi3' => $this->input->post('getProv3')=='' ? $this->user_model->get_data_id($id)[0]->provinsi3 : $this->input->post('getProv3'),
			'kota3' => $this->input->post('kota3')=='' ? $this->user_model->get_data_id($id)[0]->kota3 : $this->input->post('kota3'),
			'status_ortu' => $this->input->post('status_ortu'),
			'penghasilan_ortu' => $this->input->post('penghasilan_ortu'),
			'jum_tanggungan' => $this->input->post('jum_tanggungan'),
			'nama_ayah' => $this->input->post('nama_ayah'),
			'status_ayah' => $this->input->post('status_ayah'),
			'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
			'nama_ibu' => $this->input->post('nama_ibu'),
			'status_ibu' => $this->input->post('status_ibu'),
			'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
			'pekerjaan1' => $this->input->post('pekerjaan1'),
			'pekerjaan2' => $this->input->post('pekerjaan2'),
			'pekerjaan3' => $this->input->post('pekerjaan3'),
		];

		$error = 0;
		foreach ($data as $key => $value) {
			if ($value == '') {
				$error++;
			}
		}

		if ($error == 0) {

			$foto_diri = $_FILES["foto_diri"]["name"];
			$foto_ktp  = $_FILES["foto_ktp"]["name"];
			$foto_kk   = $_FILES["foto_kk"]["name"];
			$temp_foto_diri = $_FILES["foto_diri"]["tmp_name"];  
			$temp_foto_ktp  = $_FILES["foto_ktp"]["tmp_name"];  
			$temp_foto_kk   = $_FILES["foto_kk"]["tmp_name"];  

			$valid_extensions = array('jpeg', 'jpg', 'png');
			$ext1 = strtolower(pathinfo($foto_diri, PATHINFO_EXTENSION));
			$ext2 = strtolower(pathinfo($foto_ktp, PATHINFO_EXTENSION));
			$ext3 = strtolower(pathinfo($foto_kk, PATHINFO_EXTENSION));

			$rand = rand(00000, 99999);
			$fname1 = "FOTO_".date('Ymds').$rand.'.'.$ext1;
			$fname2 = "KTP_".date('Ymds').$rand.'.'.$ext2;
			$fname3 = "KK_".date('Ymds').$rand.'.'.$ext3;

			if ($foto_diri!='') {
				$upload_foto_diri = move_uploaded_file($temp_foto_diri, "assets/img/".$fname1);
				unlink('assets/img/'.$this->user_model->get_data_id($id)[0]->foto_diri);
				$this->user_model->update_data($id, ['foto_diri' => $fname1]);
			}

			if ($foto_ktp!='') {
				$upload_foto_ktp  = move_uploaded_file($temp_foto_ktp, "assets/img/".$fname2);
				unlink('assets/img/'.$this->user_model->get_data_id($id)[0]->foto_ktp);
				$this->user_model->update_data($id, ['foto_ktp' => $fname2]);
			}
			
			if ($foto_kk!='') {
				$upload_foto_kk   = move_uploaded_file($temp_foto_kk,  "assets/img/".$fname3);
				unlink('assets/img/'.$this->user_model->get_data_id($id)[0]->foto_kk);
				$this->user_model->update_data($id, ['foto_kk' => $fname3]);
			}

			$this->user_model->update_data($id, $data);
			$result = [
				'success' => true,
				'message' => 'Berhasil update'
			];
		}

		echo json_encode($result);
	}

}
