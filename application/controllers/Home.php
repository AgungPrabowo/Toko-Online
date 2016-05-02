<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index()
	{
		$data['header']	= 'user/view_header';
		$data['footer']	= 'user/view_footer';
		$data['menu']	= 'user/view_menu';
		$data['produk']	= $this->Model_produk->dataproduk();

		$this->load->view('user/view_index', $data);
	}

	function keranjang()
	{
		$data['header']		= 'user/view_header';
		$data['footer']		= 'user/view_footer';
		$data['menu']		= 'user/view_menu';
		$data['id_user']	= $this->session->userdata('id');

		$this->load->view('user/view_keranjangBelanja', $data);
	}

	function daftar()
	{
		$data['provinsi'] 		= $this->db->get('provinces');

		$this->load->view('user/view_registrasiUser', $data);
	}

	function getKota($key)
	{
		$city	= $this->Model_wilayah->getdata_kota($key);

		echo "<option value='0'>---Pilih Kota---</option>";
		foreach($city->result() as $kota):
			echo "<option value=".$kota->id.">".$kota->name."</option>";
		endforeach;

	}

	function simpan_registrasiUser()
	{
		$re_pass						= md5($this->input->post('re-pass'));
		$data['email']					= $this->input->post('email');
		$data['pass']					= md5($this->input->post('pass'));
		$data['username']				= $this->input->post('username');
		$data['no_telp'] 				= $this->input->post('no_telp');
		$data['nama_user']				= $this->input->post('nama_user');
		$data['id_provinces'] 			= $this->input->post('provinsi');
		$data['id_regencies']			= $this->input->post('kota');
		$data['alamat'] 				= $this->input->post('alamat');
		$data['aktif']					= 'NO';
		$data['tgl_daftar']				= time()+3600*7;

		// memeriksa username (sudah terpakai atau belum)
		$query = $this->db->get('user');
		foreach($query->result() as $row)
		{
			if($row->username == $data['username'])
			{
				$this->session->set_flashdata('info','Username sudah terpakai');
				redirect(site_url('/home/daftar'));
			}
		}

		// cek password sama atau tidak
		if($re_pass != $data['pass'])			
		{
			// cek password baru sama atau tidak
			$this->session->set_flashdata('info','Password tidak sama');
				redirect(site_url('/home/daftar'));
		}
		// jika email diisi maka kirim pesan verifikasi email kepada user/customer
		// jika email tidak diisi pendaftaran selesai tanpa kirim email verifikasi
		else
		{
			$this->Model_user->getInsert($data);

			// kirim email ke user/customer
			$ci = get_instance();
	        $ci->load->library('email');
			$enkripsi 	 			= md5($data['tgl_daftar']);
	        $config['protocol'] 	= "smtp";
	        $config['smtp_host'] 	= "ssl://smtp.gmail.com";
	        $config['smtp_port'] 	= "465";
	        $config['smtp_user'] 	= "toptrackerstore79@gmail.com";
	        $config['smtp_pass'] 	= "Bukitbarisan79";
	        $config['charset'] 		= "utf-8";
	        $config['mailtype'] 	= "html";
	        $config['newline'] 		= "\r\n";
	        
	        
	        $ci->email->initialize($config);
	 
	        $ci->email->from($config['smtp_user'], 'Admin Top Tracker Store');
	        $ci->email->to($data['email']);
	        $ci->email->subject('Verifikasi Akun Top Tracker Store');
	        $ci->email->message("terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>
	       						<a href=".site_url('/home/verifikasi/'.$enkripsi).">".site_url('/home/verifikasi/'.$enkripsi));
	        if ($this->email->send()) {
	            echo "Silahkan cek email Anda untuk melakukan verifikasi Akun Top Tracker Store<br>
	            	  Kembali ke halaman <a href=".site_url().">utama</a>";
	        } else {
	            show_error($this->email->print_debugger());
	        }
		}
	}

	function verifikasi($key)
	{
		$this->Model_user->verifikasi($key);
		echo "Email Anda telah Aktif<br><br><a href='".site_url()."'>Kembali ke halaman utama</a>";
	}

	function cek_login()
	{
		$user 	= $this->input->post('username');
		$pass	= md5($this->input->post('pass'));

		$this->Model_user->cek_login($user,$pass);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}



}

/* End of file index.php */
/* Location: ./application/controllers/index.php */