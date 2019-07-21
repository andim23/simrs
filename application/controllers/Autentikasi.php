<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('autentikasi_model');
	}

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('autentikasi/login');
		$this->load->view('layouts/footer');
	}

	public function login()
	{
		if (!$this->input->post()) {
			echo "Method Not Allowed";
		}

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
			return;
		}

		$credentials = [
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		];

		$attempt = $this->autentikasi_model->login($credentials);

		if ($attempt) {
			return redirect('/', 'refresh');
		}

		$this->session->set_flashdata('error', 'Username atau password yang anda masukkan tidak ditemukan.');
		return redirect('/autentikasi', 'refresh');
	}

}

/* End of file Autentikasi.php */
/* Location: ./application/controllers/Autentikasi.php */