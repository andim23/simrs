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
		$nama_ruangan = $this->input->post('nama_ruangan');
		// $nama_file = $this->input->post('nama_file');

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = FALSE;
		$config['encrypt_name'] = TRUE;
		
		$this->load->library('upload', $config);

		$files = $_FILES;
		$dataInfo = [];
		$cpt = count($_FILES['nama_file']['name']);

		for ($i=0; $i < $cpt; $i++) { 
			$_FILES['nama_file']['name'] = $files['nama_file']['name'][$i];
	        $_FILES['nama_file']['type'] = $files['nama_file']['type'][$i];
	        $_FILES['nama_file']['tmp_name'] = $files['nama_file']['tmp_name'][$i];
	        $_FILES['nama_file']['error'] = $files['nama_file']['error'][$i];
	        $_FILES['nama_file']['size'] = $files['nama_file']['size'][$i];

	        echo "<pre>"; 
			print_r($_FILES);
			echo "</pre>";

	        if ( ! $this->upload->do_upload('nama_file')) {
	        	print_r($this->upload->display_errors());
	        	echo $i;
	        	return;
	        }
        	$dataInfo[] = $this->upload->data();
		}

		$data = [];

		for ($i=0; $i < count($nama_ruangan); $i++) { 
			array_push($data, [
				'nama_ruangan' => $nama_ruangan[$i],
				'nama_file' => 'uploads/'.$dataInfo[$i]['file_name']
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