<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi_model extends CI_Model {

	private $table = 'tb_user';

	public function login(array $credentials)
	{
		$result = $this->db->get_where($this->table, ['username' => $credentials['username']])->result();

		if (!empty($result) && password_verify($credentials['password'], $result[0]->password)) {
			return true;
		}

		return false;
	}

}

/* End of file autentikasi.php */
/* Location: ./application/models/autentikasi.php */