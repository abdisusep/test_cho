<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu extends CI_Controller {

	public function index()
	{
		redirect('page/a1');
	}

	public function a1b1()
	{
		$data['title'] = 'A.1 Input SDM Tahap 1';
		$data['sub'] = isset($_GET['sub']) == true ? $_GET['sub'] : null;
		$this->load->view('template/top', $data);
		$this->load->view('menu/'.$this->uri->segment(2), $data);
		$this->load->view('template/bottom');
	}

	public function a2()
	{
		$data['title'] = 'A.2 Format Dasar Payroll';
		$data['sub'] = isset($_GET['sub']) == true ? $_GET['sub'] : null;
		$this->load->view('template/top', $data);
		$this->load->view('menu/'.$this->uri->segment(2), $data);
		$this->load->view('template/bottom');
	}

	public function a3()
	{
		$data['title'] = 'A.3 Format PTKP';
		$this->load->view('template/top', $data);
		$this->load->view('menu/'.$this->uri->segment(1), $data);
		$this->load->view('template/bottom');
	}

	public function a4()
	{
		$data['title'] = 'A.4 Format BPJS';
		$this->load->view('template/top', $data);
		$this->load->view('menu/'.$this->uri->segment(1), $data);
		$this->load->view('template/bottom');
	}

	public function a5()
	{
		$data['title'] = 'A.5 PPh 21';
		$this->load->view('template/top', $data);
		$this->load->view('menu/'.$this->uri->segment(1), $data);
		$this->load->view('template/bottom');
	}

	public function a6()
	{
		$data['title'] = 'A.6 Ketentuan Jam Kerja';
		$this->load->view('template/top', $data);
		$this->load->view('menu/'.$this->uri->segment(1), $data);
		$this->load->view('template/bottom');
	}

	public function a7()
	{
		$data['title'] = 'A.7 Kategori Posisi';
		$this->load->view('template/top', $data);
		$this->load->view('menu/'.$this->uri->segment(1), $data);
		$this->load->view('template/bottom');
	}

	public function a8()
	{
		$data['title'] = 'A.8 Informasi Khusus';
		$this->load->view('template/top', $data);
		$this->load->view('menu/'.$this->uri->segment(1), $data);
		$this->load->view('template/bottom');
	}

}
