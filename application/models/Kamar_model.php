<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model {

	public function tambah(array $data)
	{
		return $this->db->insert_batch('tb_kamar', $data);
	}

}

/* End of file Kamar_model.php */
/* Location: ./application/models/Kamar_model.php */