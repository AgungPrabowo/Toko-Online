<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index()
	{
		$this->load->view('admin/view_index');
	}

	function cekLogin()
	{
		// simpan ke variabel
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// load model untuk cek login
		$query	  = $this->Model_login->cekLogin($username,$password);

		// $query akan mengembalikan angka 1 benar dan 0 salah
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				// daftar kan ke session
				$sess = array('username'	=> $row->username,
							  'password'	=> $row->password
							  );
				$this->session->set_userdata($sess);
				redirect('admin/home/beranda');
			}
		}
		else
		{
				$this->session->set_flashdata('info','Username atau Password salah');
				redirect('admin/home');
		}
	}

	function beranda()
	{
		$this->Model_security->getSecurity();
		$query				= $this->session->userdata('username');
		$isi['content']		= 'admin/view_content';
		$isi['judul']		= 'Home';
		$isi['sub_judul']	= '';
		$isi['link']		= '';
		$this->load->view('admin/view_home',$isi);
	}

	function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('admin/view_index');
	}

}

/* End of file index.php */
/* Location: ./application/controllers/admin/index.php */