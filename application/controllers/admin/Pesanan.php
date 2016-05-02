<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

	function index()
	{
		$this->Model_security->getSecurity();
		$isi['content']			= 'admin/pesanan/view_pesanan';
		$isi['judul']			= 'Pesanan';
		$isi['sub_judul']		= '';
		$isi['link']			= '';

			//untuk pengambilan harga dan qty dalam group/kelompok id_order
			$isi['data_tertunda1']	= $this->db->query("SELECT GROUP_CONCAT(total SEPARATOR ',') as total, GROUP_CONCAT(qty SEPARATOR ',') as qty 
														FROM pesanan WHERE status = 'Tertunda' GROUP BY (id_order)");
			$isi['data_terkirim1']	= $this->db->query("SELECT GROUP_CONCAT(total SEPARATOR ',') as total, GROUP_CONCAT(qty SEPARATOR ',') as qty 
														FROM pesanan WHERE status = 'Terkirim' GROUP BY (id_order)");

			//untuk pengambilan data dalam group/kelompok id_order
			$isi['data_tertunda']	= $this->db->where('status','Tertunda')
											   ->group_by('id_order')
									   	       ->get('pesanan');
			$isi['data_terkirim']	= $this->db->where('status','Terkirim')
											   ->group_by('id_order')
										       ->get('pesanan');

		$this->load->view('admin/view_home',$isi);
	}

    function detail_pesanan($id_order)
    {
		$this->Model_security->getSecurity();
		$data_pesanan					= $this->Model_pesanan->getDataPesanan($id_order);
		$data['order']					= $data_pesanan;
		$data['provinsi']				= $this->Model_wilayah->getdata_prov_row($data_pesanan->row()->id_province);
		$data['kota']					= $this->Model_wilayah->getdata_kota_row($data_pesanan->row()->id_regencies);
        $this->load->view('admin/pesanan/view_detailPesanan',$data);
    }

}

/* End of file pesanan.php */
/* Location: ./application/controllers/admin/pesanan.php */