<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ruangan_model');
	}

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('main/ruangan.php');
		$this->load->view('layouts/footer');
	}

	public function semua()
	{
		$semua_ruangan = $this->ruangan_model->all();

		$this->load->view('layouts/header');
		$this->load->view('main/semua_ruangan.php', ['semua_ruangan' => $semua_ruangan]);
		$this->load->view('layouts/footer');
	}

	public function tambah()
	{
		// var_dump($this->input->post('nama_ruangan'));
		$nama_ruangan = $this->input->post('nama_ruangan');
		$nama_file = $this->input->post('nama_file');
		$data = [];

		for ($i=0; $i < count($nama_ruangan); $i++) { 
			array_push($data, [
				'nama_ruangan' => $nama_ruangan[$i],
				'nama_file' => $nama_file[$i]
			]);
		}

		$query = $this->ruangan_model->tambah($data);

		if (!empty($query)) {
			$this->session->set_userdata('ruangan', $query);
			return redirect(base_url('kamar'), 'refresh');
		}
	}

}

/* End of file Ruangan.php */
/* Location: ./application/controllers/Ruangan.php */