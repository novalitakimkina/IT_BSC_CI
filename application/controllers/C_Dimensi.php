<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dimensi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Dimensi');
	}

	public function index()
	{
		$data['dimensi'] = $this->M_Dimensi->getdimensi();
		$this->load->view('lihatdimensi', $data);

	}

	public function tambahdimensi()
	{
		$this->load->view('tambahdimensi');
	}

	public function hapusdimensi()
	{

		$id = $this->input->get('id');
		$this->M_Dimensi->hapusdimensi($id);
		exit("<script>window.alert('Dimensi berhasil dihapus');window.history.back();</script>");
		redirect('dimensi');

	}

	public function updatedimensi()
	{
		$id = $this->input->get('id');
		$data['dimensi'] = $this->M_Dimensi->getdimensisingle($id);
		$this->load->view('editdimensi', $data);

	}

	public function update_dimensi_worker()
	{
		$id = $this->input->post('id');
		$data = [
		'dimensi' => $this->input->post('dimensi'),
		'bobot' => $this->input->post('bobot') 
		];

	$this->M_Dimensi->updatedimensi($id, $data);
	redirect('dimensi');	
	}
}
