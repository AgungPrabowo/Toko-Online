<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pesanan extends CI_Model {

	public function getdata_email($key)
	{
		$query = $this->db->where('no',$key)
						  ->get('admin');
		return $query->row();
	}

	public function simpan_pesanan($data,$id_produk,$qty)
	{
		//tambah pesanan
		$this->db->insert('pesanan', $data);

		//ambil stok produk
		$this->db->select('stok')
		         ->from('produk')
				 ->where('id_produk',$id_produk);

		$stok = $this->db->get();

		//pengurangan stok						  
		$hasil['stok'] = $stok->row()->stok - $qty;

		//update stok produk
		$this->db->where('id_produk',$id_produk)
				 ->update('produk',$hasil);
	}

	public function getDataPesanan($id_order)
	{
		$query = $this->db->where('id_order',$id_order)
						  ->get('pesanan');
		return $query;
	}

}

/* End of file model_order.php */
/* Location: ./application/models/model_order.php */