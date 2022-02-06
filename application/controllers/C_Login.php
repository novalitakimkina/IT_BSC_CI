<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {
	
	public function __construct(){
		$parent::__construct();
		$this->load->model('M_Login');
	}

	public function index(){
		$this->load->view('index');
	}

	public function login()
	{
		$username = $this->input->post['username'];
		$password = $this->input->post['password'];
		$data['username']=$username;
		$data['password']=$password;
		$data['pengguna']=$this->M_Login->getpengguna($username,$password);

		$this->load->view('login', $data);
	}

	public function logout()
	{
		$this->load->view('logout');
	}
}