<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi_model extends CI_Model {

	private $table = 'tb_user';

	public function login(array $credentials)
	{
		$result = $this->db->get_where($this->table, ['username' => $credentials['username']])->row_array();

		if (!empty($result) && password_verify($credentials['password'], $result['password'])) {
			return $result;
		}

		return false;
	}

}

/* End of file autentikasi.php */
/* Location: ./application/models/autentikasi.php */