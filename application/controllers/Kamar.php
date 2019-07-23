<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ruangan_model');
		$this->load->model('kamar_model');
	}

	public function index()
	{
		$ids = $this->session->ruangan;

		$ruangan = !empty($ids) ? $this->ruangan_model->get($ids[0]) : ['nama_ruangan' => ''];

		$this->load->view('layouts/header');
		$this->load->view('main/kamar', ['ruangan' => $ruangan['nama_ruangan']]);
		$this->load->view('layouts/footer');
	}

	public function tambah()
	{
		$nm_kat_kamar = $this->input->post('nm_kat_kamar');
		$ids = $this->session->ruangan;
		$data = [];

		for ($i=0; $i < count($nm_kat_kamar); $i++) { 
			array_push($data, [
				'nm_kat_kamar' => $nm_kat_kamar[$i],
				'id_ruangan' => $ids[0]
			]);
		}

		$query = $this->kamar_model->tambah($data);

		if ($query > 0 && count($this->session->ruangan) > 0) {
			array_shift($ids);
			$this->session->unset_userdata('ruangan');
			$ids ? $this->session->set_userdata('ruangan', $ids) : null;
		}

		if (empty($this->session->ruangan)) {
			return redirect(base_url('ruangan/semua'), 'refresh');
		}

		return redirect(base_url('kamar'), 'refresh');
	}

}

/* End of file Kamar.php */
/* Location: ./application/controllers/Kamar.php */