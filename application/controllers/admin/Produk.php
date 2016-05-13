<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function index()
	{
		$this->Model_security->getSecurity();
		$isi['content']		= 'admin/produk/view_produk';
		$isi['judul']		= 'Produk';
		$isi['sub_judul']	= '';
		$isi['link']		= '';
		$isi['data']		= $this->db->get('produk');
		$this->load->view('admin/view_home',$isi);
	}

	function tambah()
	{
		$this->Model_security->getSecurity();
		$isi['content']			= 'admin/produk/view_tambahProduk';
		$isi['judul']			= 'Produk';
		$isi['sub_judul']		= 'Tambah Produk';
		$isi['link']			= base_url().'index.php/admin/produk';
		$isi['data']			= $this->db->get('kategori');
		$isi['tipe']			= 'tambah';
		$this->load->view('admin/view_home',$isi);
	}

	function edit()
	{
		$this->Model_security->getSecurity();
		$isi['content']			= 'admin/produk/view_editProduk';
		$isi['judul']			= 'Produk';
		$isi['sub_judul']		= 'Edit Produk';
		$isi['link']			= base_url().'index.php/admin/produk';
		$isi['data']			= $this->db->get('produk');
		$isi['tipe']			= 'edit';

		$key = $this->uri->segment(4);
		$this->db->where('id_produk', $key);
		$query = $this->db->get('produk');
		foreach($query->result() as $row)
		{
			$isi['id_produk']		= $row->id_produk;
			$isi['kategori']		= $row->id_kategori;
			$isi['judul_produk']	= $row->judul;
			$isi['data']			= $this->db->get('kategori');
			$isi['harga']			= $row->harga;
			$isi['stok']			= $row->stok;
			$isi['isi']				= $row->isi;
			$isi['gambar']			= $row->gambar;
		}
		$this->load->view('admin/view_home',$isi);

	}
	
	function simpan()
	{
		$tipe 		= $this->input->post('tipe');
		$id_produk  = $this->input->post('id_produk');
		$array		= array();
		$count 		= count($_FILES['userfile']['size']);
		
		if($tipe == "tambah")
		{
	        foreach($_FILES as $key=>$value)
			for($i=0; $i<=$count-1; $i++)
			{
				$_FILES['userfile']['name']		=$value['name'][$i];
		        $_FILES['userfile']['type']    	= $value['type'][$i];
		        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$i];
		        $_FILES['userfile']['error']    = $value['error'][$i];
		        $_FILES['userfile']['size']    	= $value['size'][$i];  
				$config['upload_path'] 			= './assets/images/produk/';
				$config['allowed_types']		= 'gif|jpg|png|jpeg';
				$config['encrypt_name']			= TRUE;
				$config['remove_spaces']		= TRUE;	
				$config['max_size']     		= '3000';
				$config['max_width']  			= '3000';
				$config['max_height']  			= '3000';
					 
				$this->load->library('upload', $config);			 
				$this->upload->do_upload();
				$data	 	= $this->upload->data();
				$array[] 	= $data['file_name'];
				 
				/* PATH */
				$source     = "./asset/images/produk/".$data['file_name'] ;
					
				// Permission Configuration
				chmod($source, 0777);
			}
			
				$pecah					= implode(',', $array);
				$in_data['gambar'] 		= $pecah;
				$in_data['judul'] 		= $this->input->post("judul_produk");
				$in_data['id_kategori'] = $this->input->post("kategori");
				$in_data['harga']		= $this->input->post("harga");
				$in_data['stok']		= $this->input->post("stok");
				$in_data['isi'] 		= $this->input->post("isi");
				$in_data['tanggal'] 	= time()+3600*7;
				$this->load->model('model_produk');
				$this->model_produk->getinsert($in_data);
				$this->session->set_flashdata('info','Produk Berhasil ditambahkan');
				
				unlink($source);
						
				redirect("admin/produk");
							
		}
		// belum selesai edit
		elseif($tipe == "edit")
		{
			if(empty($_FILES['userfile']['name']))
			{
				$data['judul']		= $this->input->post('judul_produk');
				$data['id_kategori']= $this->input->post('kategori');
				$data['harga']		= $this->input->post('harga');
				$data['stok']		= $this->input->post('stok');
				$data['isi']		= $this->input->post('isi');
				$this->load->model('model_produk');
				$this->model_produk->getupdate($id_produk,$data);
				$this->session->set_flashdata('info','Produk Berhasil diupdatet');
				redirect('admin/produk');
			}
			else
			{
		        foreach($_FILES as $key=>$value)
				for($i=0; $i<=$count-1; $i++)
				{
					$_FILES['userfile']['name']		=$value['name'][$i];
			        $_FILES['userfile']['type']    	= $value['type'][$i];
			        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$i];
			        $_FILES['userfile']['error']    = $value['error'][$i];
			        $_FILES['userfile']['size']    	= $value['size'][$i];  
					$config['upload_path'] 			= './assets/images/produk/';
					$config['allowed_types']		= 'gif|jpg|png|jpeg';
					$config['encrypt_name']			= TRUE;
					$config['remove_spaces']		= TRUE;	
					$config['max_size']     		= '3000';
					$config['max_width']  			= '3000';
					$config['max_height']  			= '3000';
						 
					$this->load->library('upload', $config);			 
					$this->upload->do_upload();
					$data	 	= $this->upload->data();
					$array[] 	= $data['file_name'];
					 
				}

					$pecah					= implode(',', $array);
					$in_data['gambar'] 		= $pecah;
					$in_data['judul']		= $this->input->post('judul_produk');
					$in_data['id_kategori']	= $this->input->post('kategori');
					$in_data['harga']		= $this->input->post('harga');
					$in_data['stok']		= $this->input->post('stok');
					$in_data['isi']			= $this->input->post('isi');

					$this->load->model('model_produk');
					$this->model_produk->getupdate($id_produk,$in_data);
					$this->session->set_flashdata('info','Produk Berhasil diupdate');

					redirect('admin/produk');
			}

		}
	}
	

	function hapus($id_produk)
	{
		$this->Model_security->getSecurity();

		$this->Model_produk->getdelete($id_produk);
		$this->session->set_flashdata('info','Produk Berhasil dihapus');
		redirect('admin/produk');
	}
}


/* End of file produk.php */
/* Location: ./application/controllers/admin/produk.php */