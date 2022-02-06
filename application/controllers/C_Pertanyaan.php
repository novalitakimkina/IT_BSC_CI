<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Pertanyaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Pertanyaan');
		$this->load->model('M_Dimensi');
	}

	public function index()
	{
		$data['pertanyaan'] = $this->M_Pertanyaan->getpertanyaan();
		$this->load->view('lihatpertanyaan', $data);

	}

	public function tambahpertanyaan()
	{
		$data['dimensi'] = $this->M_Dimensi->getdimensi();
		$this->load->view('tambahpertanyaan', $data);
	}

	public function hapuspertanyaan()
	{

		$id = $this->input->get('id');
		$this->M_Pertanyaan->hapuspertanyaan($id);
		exit("<script>window.alert('Pertanyaan berhasil dihapus');window.history.back();</script>");
		redirect('pertanyaan');
	}

	public function updatepertanyaan()
	{
		$id = $this->input->get('id');
		$data['pertanyaan'] = $this->M_Pertanyaan->getdimensisingle($id);
		$this->load->view('editpertanyaan', $data);

	}

	public function update_pertanyaan_worker()
	{
		$id = $this->input->post('id');
		$data = [
		'pertanyaan' => $this->input->post('pertanyaan'),
		'id_dimensi' => $this->input->post('iddimensi'),
		'variabel' => htmlspecialchars($this->input->post('variabel')),
		'pila' => htmlspecialchars($this->input->post('pila')),
		'pilb' => htmlspecialchars($this->input->post('pilb')),
		'pilc' => htmlspecialchars($this->input->post('pilc')),
		'pild' => htmlspecialchars($this->input->post('pild')),
		'pile' => htmlspecialchars($this->input->post('pile')), 
		];

	$this->M_Pertanyaan->updatepertanyaan($id, $data);
	redirect('pertanyaan');	
	}
}
