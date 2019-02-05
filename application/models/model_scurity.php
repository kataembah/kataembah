<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_scurity extends CI_model {

	public function getscurity()
	{
		$username=$this->session->userdata('username');
		if(empty($username))
		{
			$this->session->sess_destroy();
			redirect('auth/login');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */