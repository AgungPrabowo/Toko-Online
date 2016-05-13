<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function index()
	{
		
	}

	function checkout()
	{
		$id_user = $this->session->userdata('id');
		if(isset($id_user))
		{
			$query					= $this->Model_user->getUser($id_user);
			$data['id_user']		= $id_user;
			$data['berat']			= $this->cart->total_items();
			$data['nama_depan']		= $query->nama_depan;
			$data['nama_belakang']	= $query->nama_belakang;
			$data['alamat']			= $query->alamat;
			$data['no_telp']		= $query->no_telp;
			$data['kode_pos']		= $query->kode_pos;
			$data['kota1']			= $query->id_regencies;
			$data['provinsi1']		= $query->id_provinces;
			$data['provinsi'] 		= $this->db->get('provinces');
			$data['kota']	 		= $this->db->get('regencies');
			$data['status']			= 'Tertunda';
			$data['link']			= '<h1>Alamat Pengiriman Anda</h1>';
		}
		else
		{
			$data['id_user']		= '';
			$data['berat']			= $this->cart->total_items();
			$data['nama_depan']		= '';
			$data['nama_belakang']	= '';
			$data['alamat']			= '';
			$data['no_telp']		= '';
			$data['kode_pos']		= '';
			$data['provinsi'] 		= $this->db->get('provinces');
			$data['kota']	 		= $this->db->get('regencies');
			$data['kota1']			= '';
			$data['provinsi1']		= '';
			$data['status']			= 'Tertunda';
			$data['link']			= '<h1>Alamat Pengiriman Anda</h1>';
		}

		$this->load->view('user/view_checkout', $data);
	}

	function ambil_kota()
	{
		$curl = curl_init();
		 
		curl_setopt_array($curl, array(
		 CURLOPT_URL => "http://rajaongkir.com/api/starter/city",
		 CURLOPT_RETURNTRANSFER => true,
		 CURLOPT_ENCODING => "",
		 CURLOPT_MAXREDIRS => 10,
		 CURLOPT_TIMEOUT => 30,
		 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		 CURLOPT_CUSTOMREQUEST => "GET",
		 CURLOPT_HTTPHEADER => array(
		 "key: 2f50e6a7c051609f97d7bf9174188064"
		 ),
		));
		 
		$response = curl_exec($curl);
		$err = curl_error($curl);
		 
		curl_close($curl);
		 
		if ($err) {
		 echo "cURL Error #:" . $err;
		} else {
		 
		 $k = json_decode($response, true);
		 echo json_encode($k['rajaongkir']['results']);
		 
		}
	}

	function result_ongkir($origin,$destination,$courier,$key='cek_ongkir',$weight)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		 CURLOPT_URL => "http://rajaongkir.com/api/starter/cost",
		 CURLOPT_RETURNTRANSFER => true,
		 CURLOPT_ENCODING => "",
		 CURLOPT_MAXREDIRS => 10,
		 CURLOPT_TIMEOUT => 30,
		 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		 CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=$courier",
		 CURLOPT_HTTPHEADER => array(
		 "key: 2f50e6a7c051609f97d7bf9174188064"
		 ),
		));
		 
		$response = curl_exec($curl);
		$err = curl_error($curl);
		 
		curl_close($curl);
		 
		if ($err) {
		 echo "cURL Error #:" . $err;
		} else {
		 
		 $hasil['data'] 	= json_decode($response, true);
		 $hasil['weight']	= $weight/1000;
		}

		if($key == 'cek_ongkir')
		{
			$this->load->view('user/view_hasilOngkir',$hasil);	
		}
		else
		{
			$this->load->view('user/view_resultOngkir',$hasil);
		}
	}

	public function simpan_pesanan()
	{
		$total_harga = 0;

		//menggabungkan layanan dan biaya kirim
		//dan dipecah
		$layananDanBiaya		= $this->input->post('layanan');
		$pecah					= explode(',',$layananDanBiaya);
		$data['id_user']		= $this->input->post('id_user');
		$data['nama_depan']		= $this->input->post('nama-depan');
		$data['nama_belakang']	= $this->input->post('nama-belakang');
		$data['alamat']			= $this->input->post('alamat');
		$data['kode_pos']		= $this->input->post('kode-pos');
		$data['id_province']	= $this->input->post('id_provinces');
		$data['id_regencies']	= $this->input->post('id_regencies');
		$data['telp']			= $this->input->post('telp');	
		$data['note-kirim']		= $this->input->post('note-kirim');
		$data['note-transfer']	= $this->input->post('note-transfer');
		$data['kurir']			= $this->input->post('courier');
		$data['kota_tujuan']	= $this->input->post('destination');
		$data['metode-bayar']	= $this->input->post('metode-bayar');
		$data['status']			= 'TERTUNDA';
		$data['layanan']		= $pecah[0];
		$data['biaya_kirim']	= $pecah[1];
		$data['tgl_beli']		= time()+3600*7;
		$data['id_order']		= rand(0,10000);

		
		foreach($this->cart->contents() as $items)
		{
			//Data Produk
			$data['id_produk']	= $items['name'];
			$data['harga']		= $items['price'];
			$data['qty']		= $items['qty'];
			$total_harga		= $total_harga + $items['subtotal'];
			$data['total']		= $items['subtotal'];

			$this->Model_pesanan->simpan_pesanan($data,$data['id_produk'],$data['qty']);
		}

		// //BELUM SELESAI MOHON DISELESAIKAN (kurang menampilkan produk keseluruhan)

		// //ambil id_admin dan ambil email marketing
		// $id_admin = $this->model_customer->getdata($key);
		// $email 	  = $this->model_order->getdata_email($id_admin->id_admin);

		// //kirim email pesanan ke admin dan marketing
		// $ci = get_instance();
  //       $ci->load->library('email');
  //       $config['protocol'] 	= "smtp";
  //       $config['smtp_host'] 	= "ssl://smtp.gmail.com";
  //       $config['smtp_port'] 	= "465";
  //       $config['smtp_user'] 	= "toptrackerstore79@gmail.com";
  //       $config['smtp_pass'] 	= "Bukitbarisan79";
  //       $config['charset'] 		= "utf-8";
  //       $config['mailtype'] 	= "html";
  //       $config['newline'] 		= "\r\n";
        
        
  //       $ci->email->initialize($config);
        
 	// 	//BELUM SELESAI
  //   	$this->email->clear();
  //       $this->email->from($config['smtp_user'], 'Top Tracker Store');
  //       $this->email->to($email->email);
  //       $this->email->subject('Pesanan Baru');
  //   	$this->email->message("<h2>Pesanan Baru</h2>
  //  						<br><br>Nama Toko&nbsp:&nbsp;".strtoupper($query->nama_toko).
		// 	 			"<br>Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;".generate_tanggal(gmdate('d/m/Y-H:i',$data['tgl_beli'])));
  //       if ($this->email->send() == FALSE) {
  //           show_error($this->email->print_debugger());
  //       } 

		$this->cart->destroy();
		redirect(site_url());

	}


}

/* End of file User.php */
/* Location: ./application/controllers/User.php */