<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_model extends CI_Model {

	public function tambah(array $data)
	{
		$query = $this->db->insert_batch('tb_ruangan', $data);

		$count = count($data);
		$first_id = $this->db->insert_id();
		$last_id = $first_id + ($count-1);
		$ids = [];

		for ($i=$first_id; $i < $last_id+1; $i++) { 
			array_push($ids, $i);
		}

		return $ids;
	}

	public function get($id)
	{
		return $this->db->get_where('tb_ruangan', ['id_ruangan' => $id])->row_array();
	}

	public function all()
	{
		return $this->db->get('tb_ruangan')->result_array();
	}

}

/* End of file Ruangan_model.php */
/* Location: ./application/models/Ruangan_model.php */