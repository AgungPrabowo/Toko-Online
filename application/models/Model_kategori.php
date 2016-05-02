<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	 function getData($key)	
	{
		$this->db->where('id_kategori', $key);
		$hasil = $this->db->get('kategori');
		return $hasil;
	}

	 function getUpdate($key,$data)
	{
		$this->db->where('id_kategori', $key)
				 ->update('kategori', $data);
	}

	 function getInsert($data)
	{
		$this->db->insert('kategori', $data);
	}

	 function getDelete($key)
	{
		$this->db->where('id_kategori', $key)
				 ->delete('kategori');
	}


}

/* End of file model_kategori.php */
/* Location: ./application/models/model_kategori.php */