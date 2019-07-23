<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->redirect_if_is_login();
	}

	public function redirect_if_is_login()
	{
		if ($this->uri->segment(2) !== 'login' && !$this->input->post() && !$this->is_login()) {
			return redirect(base_url('autentikasi/login'), 'refresh');
		}

		if ($this->uri->segment(2) === 'login' && !$this->input->post() && $this->is_login()) {
			return redirect(base_url(), 'refresh');
		}

		return;
	}

	public function is_login()
	{
		if (null !== $this->session->username) {
			return true;
		}

		return false;
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */