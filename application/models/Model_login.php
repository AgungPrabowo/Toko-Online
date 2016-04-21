<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function cekLogin($username,$password)
	{
		// generate password ke md5
		$pwd 	= md5($password);
		// cek login
		$query 	= $this->db->where('username',$username)
						   ->where('password',$pwd)
						   ->get('admin');
		return $query;		
	}

}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */