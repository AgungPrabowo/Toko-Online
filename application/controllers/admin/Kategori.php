<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function index()
	{
		$this->Model_security->getSecurity();
		$isi['content']		= 'admin/kategori/view_kategori';
		$isi['judul']		= 'Kategori';
		$isi['sub_judul']	= '';
		$isi['link']		= '';
		$isi['data']		= $this->db->get('kategori');
		$this->load->view('admin/view_home', $isi);
	}

	function tambah()
	{
		$this->Model_security->getSecurity();
		$isi['content']		= 'admin/kategori/view_tambahKategori';
		$isi['judul']		= 'Kategori';
		$isi['sub_judul']	= 'Tambah Kategori';
		$isi['link']		= base_url();'admin/kategori';
		$isi['data']		= $this->db->get('kategori');
		$isi['id_kategori']	= '';
		$isi['kategori']	= '';
		$isi['tipe']		= 'tambah';
		$this->load->view('admin/view_home', $isi);
	}

	function edit()
	{
		$this->Model_security->getSecurity();
		$isi['content']		= 'admin/kategori/view_editKategori';
		$isi['judul']		= 'Kategori';
		$isi['tipe']		= 'edit';
		$isi['sub_judul']	= 'Edit Kategori';
		$isi['link']		= base_url();'admin/kategori';

		$key   = $this->uri->segment(4);
		$query = $this->Model_kategori->getData($key);
		foreach ($query->result() as $row) 
		{
			$isi['id_kategori']		= $row->id_kategori;
			$isi['kategori']		= $row->kategori;
		}

		$this->load->view('admin/view_home', $isi);
	}

	function simpan()
	{
		$this->Model_security->getSecurity();
		$key				 = $this->input->post('id_kategori');
		$tipe				 = $this->input->post('tipe');
		$data['id_kategori'] = $this->input->post('id_kategori');
		$data['kategori']	 = $this->input->post('kategori');

		if($tipe == "tambah")
		{
			$this->form_validation->set_rules('kategori','Kategori','required');
			if($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('info','Kategori tidak boleh kosong');
				redirect('admin/kategori/tambah');
			}
			else
			{
				$this->Model_kategori->getInsert($data);
				$this->session->set_flashdata('info','Kategori Berhasil ditambahkan');
				redirect('admin/kategori');
			}
		}
		elseif($tipe == "edit")
		{
			$this->form_validation->set_rules('kategori','Kategori','required');
			if($this->form_validation->run() == FALSE)
			{
				$this->session->set_fashdata('info','Kategori tidak boleh kosong');
				redirect('admin/kategori/edit');
			}
			else
			{
				$this->Model_kategori->getUpdate($key,$data);
				$this->session->set_flashdata('info','Kategori berhasil diupdate');
				redirect('admin/kategori');
			}
		}
	}

	function hapus()
	{
		$this->Model_security->getSecurity();

		$key = $this->uri->segment(4);
		$this->Model_kategori->getDelete($key);
		$this->session->set_flashdata('info','Produk Berhasil dihapus');
		redirect('admin/produk');
	}

}

/* End of file kategori.php */
/* Location: ./application/controllers/admin/kategori.php */