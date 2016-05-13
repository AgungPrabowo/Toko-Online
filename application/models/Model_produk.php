<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_produk extends CI_Model {

	function getProduk($id_kategori)
	{
		$hasil = $this->db->where('id_kategori', $id_kategori)
						  ->get('produk');
		return $hasil;
	}

	function getdata($key)
	{
		$hasil = $this->db->where('id_produk',$key)
						  ->limit(1)
			 		  	  ->get('produk');
		if($hasil->num_rows() > 0)
		{
			return $hasil->row();
		}
		else
		{
			return array();
		}
	}

	function getupdate($key,$data)
	{
		$this->db->where('id_produk',$key)
				 ->update('produk',$data);
	}

	function getinsert($data)
	{
		$this->db->insert('produk',$data);
	}

	function getdelete($key)
	{
		$this->db->where('id_produk',$key)
				 ->delete('produk');
	}

	function tampilkategori($key)
	{
		$this->db->where('id_kategori', $key);
		$query = $this->db->get('kategori');
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$hasil = $row->kategori;
			}
		}
		else
		{
			$hasil = '';
		}
		return $hasil;
	}

	function dataproduk()
	{
		$query = $this->db->order_by('id_produk','DESC')
						  ->get('produk');
		return $query;
	}

	function jumlah_data()
	{
		$query = $this->db->get('produk')
				 		  ->num_rows();
		return $query;
	}

	function ambil_gambar($id_produk)
	{
		$query = $this->db->where('id_produk',$id_produk)
						  ->get('produk');
		return $query->row();
	}

}

/* End of file model_user.php */
/* Location: ./application/models/model_user.php */