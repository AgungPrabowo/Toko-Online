<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pembeli extends CI_Model {

	function getNamaPembeli($key)	
	{
		$query = $this->db->where('id_pembeli', $key)
						  ->get('pembeli');
		return $query->row();
	}

}

/* End of file Model_pembeli.php */
/* Location: ./application/models/Model_pembeli.php */