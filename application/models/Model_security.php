<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_security extends CI_Model {

	function getSecurity()
	{
		$username = $this->session->userdata('username');
		if(empty($username))
		{
			$this->session->sess_destroy();
			redirect(site_url('/admin/home'));
		}
	}

}

/* End of file model_security.php */
/* Location: ./application/models/model_security.php */