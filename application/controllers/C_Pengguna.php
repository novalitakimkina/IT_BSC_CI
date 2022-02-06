<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Pengguna extends CI_Controller
{
	public function__construct()
	{
		parent::__construct();
		$this->load->model('M_Pengguna');
	}

	public function index()
	{
		$data['pengguna'] = $this->M_Pengguna->getpengguna();
		$this->load->view('lihatpengguna', $data);
	}

	public function tambahpengguna()
	{
		$this->load->view('tambahpengguna');
	}
}