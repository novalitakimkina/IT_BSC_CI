<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Jawaban');
		$this->load->model('M_Dimensi');
		$this->load->model('M_Kuesioner');

	}

	public function index()
	{
		$data[jwbdmn1]=$this->M_Jawaban->getjawabandimensi(1);
		$data[jwbdmn2]=$this->M_Jawaban->getjawabandimensi(2);
		$data[jwbdmn3]=$this->M_Jawaban->getjawabandimensi(3);
		$data[jwbdmn4]=$this->M_Jawaban->getjawabandimensi(4);
		$data[bbtdmn1]=$this->M_Dimensi->getbobotdimensi(1);
		$data[bbtdmn2]=$this->M_Dimensi->getbobotdimensi(2);
		$data[bbtdmn3]=$this->M_Dimensi->getbobotdimensi(3);
		$data[bbtdmn4]=$this->M_Dimensi->getbobotdimensi(4);

		$this-load->view('template', $data);

	}

	public function kuisioner()
	{
		$data['kuesioner']=$this->M_Kuesioner->getkuisioner();
		$this-load->view('kuesioner', $data);
	}

}
