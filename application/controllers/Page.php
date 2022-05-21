<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect('page/a1');
	}

	public function format_code()
	{
		$kode = $this->input->get('sub');
		$kode = strtoupper($kode);

		if (strlen($kode) == 4) {
			$string = '';
			for ($i=0; $i < strlen($kode); $i++) { 
				$titik = '.';
				$string .= $kode[$i].$titik; 
			}
		}else if(strlen($kode) == 5){
			$string = '';
			for ($i=0; $i < strlen($kode); $i++) { 
				$titik = $i == 3 ? '' : '.';
				$string .= $kode[$i].$titik; 
			}
		} return $string;
	}

	public function a1()
	{
		$sub = $this->input->get('sub') == true ? $this->input->get('sub') : false;
		$data['title'] = $this->db->get_where('menu', ['kode' => $this->uri->segment(2)])->row()->nama_menu;
		$data['menu'] = $this->db->get('menu')->result();
		$data['sub'] = $sub;
		$data['submenu'] = $this->db->get_where('sub_menu', ['id_menu' => $this->uri->segment(2)])->result();
		$data['versi'] = $this->rversi_model->get_data($sub);
		
		$this->load->view('template/top', $data);
		if ($sub) {
			$data['kode'] = $this->format_code();
			$data['title_sub'] = $this->db->get_where('sub_menu', ['kode' => $sub])->row()->nama_sub_menu;

			$data['jk'] = $this->jk_model->get_data();
			$data['ag'] = $this->agama_model->get_data();
			$data['ss'] = $this->ssekarang_model->get_data();
			$data['gd'] = $this->goldar_model->get_data();
			$data['ub'] = $this->ukbaju_model->get_data();
			$data['rp'] = $this->rpenyakit_model->get_data();
			$data['tb'] = $this->tbekerja_model->get_data();
			$data['db'] = $this->dafbagian_model->get_data();
			$data['al'] = $this->aktlain_model->get_data();
			$data['sk'] = $this->skeluarga_model->get_data();
			$data['pot'] = $this->portu_model->get_data();
			$data['jt'] = $this->jumtanggungan_model->get_data();
			$data['sot'] = $this->sortu_model->get_data();
			$data['jp'] = $this->jpekerjaan_model->get_data();
			$data['iu'] = $this->infoumum_model->get_data();


			$this->load->view('submenu/'.$sub, $data);
		}
		$this->load->view('template/bottom');
	}

	public function a2()
	{
		$sub = $this->input->get('sub') == true ? $this->input->get('sub') : false;
		$data['title'] = $this->db->get_where('menu', ['kode' => $this->uri->segment(2)])->row()->nama_menu;
		$data['menu'] = $this->db->get('menu')->result();
		$data['sub'] = $sub;
		$data['submenu'] = $this->db->get_where('sub_menu', ['id_menu' => $this->uri->segment(2)])->result();
		$data['versi'] = $this->rversi_model->get_data($sub);

		$this->load->view('template/top', $data);
		if ($sub) {
			$data['kode'] = $this->format_code();
			$data['title_sub'] = $this->db->get_where('sub_menu', ['kode' => $sub])->row()->nama_sub_menu;

			$data['gp'] = $this->gajipokok_model->get_data();
			$data['gol'] = $this->golongan_model->get_data();
			$data['penj'] = $this->penjualan_model->get_data();
			$this->load->view('submenu/'.$sub, $data);
		}
		$this->load->view('template/bottom');
	}

	public function a3()
	{
		$sub = $this->input->get('sub') == true ? $this->input->get('sub') : false;
		$data['title'] = $this->db->get_where('menu', ['kode' => $this->uri->segment(2)])->row()->nama_menu;
		$data['menu'] = $this->db->get('menu')->result();
		$data['sub'] = $sub;
		$data['submenu'] = $this->db->get_where('sub_menu', ['id_menu' => $this->uri->segment(2)])->result();
		$data['versi'] = $this->rversi_model->get_data($sub);

		$this->load->view('template/top', $data);
		if ($sub) {
			$data['kode'] = $this->format_code();
			$data['title_sub'] = $this->db->get_where('sub_menu', ['kode' => $sub])->row()->nama_sub_menu;

			$this->load->view('submenu/'.$sub, $data);
		}
		$this->load->view('template/bottom');
	}

	public function a4()
	{
		$sub = $this->input->get('sub') == true ? $this->input->get('sub') : false;
		$data['title'] = $this->db->get_where('menu', ['kode' => $this->uri->segment(2)])->row()->nama_menu;
		$data['menu'] = $this->db->get('menu')->result();
		$data['sub'] = $sub;
		$data['submenu'] = $this->db->get_where('sub_menu', ['id_menu' => $this->uri->segment(2)])->result();
		$data['versi'] = $this->rversi_model->get_data($sub);

		$this->load->view('template/top', $data);
		if ($sub) {
			$data['kode'] = $this->format_code();
			$data['title_sub'] = $this->db->get_where('sub_menu', ['kode' => $sub])->row()->nama_sub_menu;

			$this->load->view('submenu/'.$sub, $data);
		}
		$this->load->view('template/bottom');
	}

	public function a5()
	{
		$sub = $this->input->get('sub') == true ? $this->input->get('sub') : false;
		$data['title'] = $this->db->get_where('menu', ['kode' => $this->uri->segment(2)])->row()->nama_menu;
		$data['menu'] = $this->db->get('menu')->result();
		$data['sub'] = $sub;
		$data['submenu'] = $this->db->get_where('sub_menu', ['id_menu' => $this->uri->segment(2)])->result();
		$data['versi'] = $this->rversi_model->get_data($sub);

		$this->load->view('template/top', $data);
		if ($sub) {
			$data['kode'] = $this->format_code();
			$data['title_sub'] = $this->db->get_where('sub_menu', ['kode' => $sub])->row()->nama_sub_menu;

			$this->load->view('submenu/'.$sub, $data);
		}
		$this->load->view('template/bottom');
	}

	public function a6()
	{
		$sub = $this->input->get('sub') == true ? $this->input->get('sub') : false;
		$data['title'] = $this->db->get_where('menu', ['kode' => $this->uri->segment(2)])->row()->nama_menu;
		$data['menu'] = $this->db->get('menu')->result();
		$data['sub'] = $sub;
		$data['submenu'] = $this->db->get_where('sub_menu', ['id_menu' => $this->uri->segment(2)])->result();
		$data['versi'] = $this->rversi_model->get_data($sub);

		$this->load->view('template/top', $data);
		if ($sub) {
			$data['kode'] = $this->format_code();
			$data['title_sub'] = $this->db->get_where('sub_menu', ['kode' => $sub])->row()->nama_sub_menu;

			$this->load->view('submenu/'.$sub, $data);
		}
		$this->load->view('template/bottom');
	}

	public function a7()
	{
		$sub = $this->input->get('sub') == true ? $this->input->get('sub') : false;
		$data['title'] = $this->db->get_where('menu', ['kode' => $this->uri->segment(2)])->row()->nama_menu;
		$data['menu'] = $this->db->get('menu')->result();
		$data['sub'] = $sub;
		$data['submenu'] = $this->db->get_where('sub_menu', ['id_menu' => $this->uri->segment(2)])->result();
		$data['versi'] = $this->rversi_model->get_data($sub);

		$this->load->view('template/top', $data);
		if ($sub) {
			$data['kode'] = $this->format_code();
			$data['title_sub'] = $this->db->get_where('sub_menu', ['kode' => $sub])->row()->nama_sub_menu;

			$data['penj'] = $this->penjualan_model->get_data();
			$data['adm_umum'] = $this->admumum_model->get_data();
			$this->load->view('submenu/'.$sub, $data);
		}
		$this->load->view('template/bottom');
	}

	public function a8()
	{
		$sub = $this->input->get('sub') == true ? $this->input->get('sub') : false;
		$data['title'] = $this->db->get_where('menu', ['kode' => $this->uri->segment(2)])->row()->nama_menu;
		$data['menu'] = $this->db->get('menu')->result();
		$data['sub'] = $sub;
		$data['submenu'] = $this->db->get_where('sub_menu', ['id_menu' => $this->uri->segment(2)])->result();
		$data['versi'] = $this->rversi_model->get_data($sub);

		$this->load->view('template/top', $data);
		if ($sub) {
			$data['kode'] = $this->format_code();
			$data['title_sub'] = $this->db->get_where('sub_menu', ['kode' => $sub])->row()->nama_sub_menu;

			$data['sd'] = $this->sifatdasar_model->get_data();
			$data['kpr'] = $this->kepribadian_model->get_data();
			$data['kpn'] = $this->kepintaran_model->get_data();
			$this->load->view('submenu/'.$sub, $data);
		}
		$this->load->view('template/bottom');
	}

}
