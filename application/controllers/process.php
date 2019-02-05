<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class process extends CI_Controller {

	
	function sendMail(){
		$name       = $this->input->post('name'); 
		$from       = $this->input->post('email'); 
		$subject    = $this->input->post('subject'); 
		$message    = $this->input->post('message'); 
		$to   		= 'dikaoji84@gmail.com';//replace with your email

		$this->load->library('email');
		$this->email->to($to);
		$this->email->from($form,$name);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}

	// masuk keranjang
	function delAll(){
		$this->cart->destroy();
		redirect('dashboard/keranjang');
	}
	public function ubah (){
			if(isset($_POST ['register'])) {
			$this->form_validation->set_rules('status', 'status', 'required');
			error_reporting(0);
			//jika validasi ok
			if ($this->form_validation->run()== true) {
				echo "<script> alert('Sukses'); </script>";
				$key =$this->uri->segment(3);
				$res =  $_POST['resi'];

			$resi = array(
					'id_resi' => time(),
					'id_faktur' => $key,
					'nomor_resi' => $_POST['resi'] ,
					'tanggal' => date('d-m-y'),

			);	
			// FORM OK
			$data = array(
				
				'status' =>$_POST['status'] ,
				
				 );
				
				$this->db->where('id_faktur',$key);	
				$this->db->update('faktur',$data);
				if($res == null){
					"<script> alert('Maaf); </script>";
				}else{
					$this->db->insert('resi',$resi);
				}
				$this->session->set_flashdata("SUCCESS","Akun ada berhasil di buat");
				redirect("admin/Pesanan","refresh");
			}
		}
		echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
				redirect("admin/Pesanan","refresh");
	}
	public function addrek (){
			if(isset($_POST ['register'])) {
			$this->form_validation->set_rules('atas_nama', 'atas_nama', 'required');
			error_reporting(0);
			//jika validasi ok
			if ($this->form_validation->run()== true) {
				echo "<script> alert('Sukses'); </script>";
				$key =$this->uri->segment(3);
				$res =  $_POST['resi'];

			$rekening = array(
					'id_rekening' => time(),
					'atas_nama' => $_POST['atas_nama'] ,
					'nomor_rekening' => $_POST['nomor_rekening'] ,
					'nama_bank' => $_POST['nama_bank'] ,

			);	
				$this->db->insert('rekening',$rekening);
				$this->session->set_flashdata("SUCCESS","Akun ada berhasil di buat");
				redirect("admin/setting/rekening","refresh");
			}
		}
		echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
				redirect("admin/setting/rekening","refresh");
	}
		public function hapusrek()
	{	
		$level = $this->session->userdata('level');
		
		if($level== 'Admin'){			
		$this->model_scurity->getscurity();
		$key = $this->uri->segment(3);

		$this->db->where('id_rekening',$key);		
		$this->db->delete('rekening');
		$query = $this->db->get('rekening');
		echo "<script> alert('Sukses'); </script>";
		redirect("admin/setting/rekening","refresh");


		}else{

		// echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
			redirect("admin/produk","refresh");
		}	
	}	
	public function editrek()
	{	
		$level = $this->session->userdata('level');
		
		if($level== 'Admin'){			
		$this->model_scurity->getscurity();
		$key = $_POST['id_registrasi'];

		$rekening = array(
					'id_rekening' => time(),
					'atas_nama' => $_POST['deskripsi'] ,
					'nomor_rekening' => $_POST['nama_produk'] ,
					'nama_bank' => $_POST['harga'] ,

			);	


		$this->db->where('id_rekening',$key);		
		$this->db->update('rekening',$rekening);
		$query = $this->db->get('rekening');
		echo "<script> alert('Sukses'); </script>";
		redirect("admin/setting/rekening","refresh");


		}else{

		// echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
			redirect("admin/produk","refresh");
		}	
	}	
	function add(){
		$model = $this->userAdmin->productDetail()->result();
		foreach ($model as $key) {
			$id = $key->id_produk;
			$harga = $key->harga;
			$nama = $key->nama_produk;
			$img = $key->img;

			$data = array(
		        'id'      => $id,
		        'qty'     => 1,
		        'price'   => $harga,
		        'name'    => $nama,
		        'option'  => array('img' =>  $img)

			);

			$create = $this->cart->insert($data);
			if ($create) {
				echo "<script>alert('Berhasil Ditambahkan')</script>";
				if ($key->jenis_produk == "Lokal") {
					redirect('dashboard/lokal','refresh');
				}
				else{
					redirect('dashboard/import','refresh');
				}
			}
			
		}
	}
	function addCart()
	{
		$id = $this->input->post('id');
		$qty = $this->input->post('qty');
		$harga = $this->input->post('harga');
		$nama = $this->input->post('nama');
		$img = $this->input->post('img');

		$data = array(
	        'id'      => $id,
	        'qty'     => $qty,
	        'price'   => $harga,
	        'name'    => $nama,
	        'option'  => array('img' =>  $img)

		);

		$create = $this->cart->insert($data);
		if ($create) {
			echo "<script>alert('Berhasil Ditambahkan')</script>";
			redirect('dashboard/detail_product/'.$id,'refresh');
		}
	}
	public function cheked(){
		echo "<pre>";
		print_r($this->cart->contents());
		echo "</pre>";

		foreach ($this->cart->contents() as $items) {
			echo $items['name'];
		}

		echo "<br>";


		// jumlah jenis barang
		echo count($this->cart->contents());
		echo "<br>";
		//jumlah total barang
		echo $this->cart->total();
		//total semua items
		echo "<br>";
		echo $this->cart->total_items();
    }
	function deleteCart($rowid) 
	{
		$this->cart->update(array('rowid'=>$rowid,'qty'=>0));
		redirect('dashboard/keranjang');
	}
	function updateCart($rowid) 
	{
		$qty = $this->input->post('qty');
		$data = array('rowid'=>$rowid,'qty'=>$qty);
		$this->cart->update($data);
		redirect('dashboard/keranjang');
	}

	public function daftar()
	{
		if($this->input->post('register') != "kirim") {
			redirect('dashboard/error','refresh');
		}
		else{
			$faktur = microtime(true)*10000;
			$idpesan = time();
			$id = $this->input->post('id') ;
			$nama = $this->input->post('nama') ;
			$email = $this->input->post('email') ;
			$jk = $this->input->post('jk') ;
			$telp = $this->input->post('telp') ;
			$date = date("Y-m-d") ;
			$pos = $this->input->post('kodepos') ;
			
			$jalan = $this->input->post('alamat') ;
			$rt = $this->input->post('rt') ;
			$rw = $this->input->post('rw') ;
			$kec = $this->input->post('kec') ;
			$kab = $this->input->post('kab') ;
			$prov = $this->input->post('prov') ;

			$alamat = $jalan . ' RT. ' . $rt . '/'  . $rw . ' ' . $kec . ' ' . $kab . ' '  . $pos . ' ' . $prov ;

			foreach ($this->cart->contents() as $key ) {
				$idProduk = $key['id'];
				$qty = $key['qty'];
				$harga = $key['price'];

				$pesanan = array(
						'id_pesanan' => $idpesan,
						'id_pelanggan' => $id,
						'id_product' => $idProduk,
						'qty' => $qty,
						'harga' => $harga,
						'tgl_pemesanan' => $date
					);
				
				$pesan = $this->db->insert('pesanan',$pesanan);

			}

			$pelanggan = array(
						'id_pelanggan' => $id,
						'nama_pelanggan' => $nama,
						'jenis_kelamin' => $jk,
						'email' => $email,
						'no_hp' => $telp,
						'alamat' => $alamat
					);

			$insert = array(
						'id_faktur' => $faktur,
						'id_pesanan' => $idpesan,
						'id_pelanggan' => $id,
						'status' => 0,
						'total' => $this->cart->total()
					);

			$this->db->insert('faktur',$insert);

			$langganan = $this->db->insert('pelanggan',$pelanggan);

			// echo ($langganan) ? 'masuk' : 'kaga' ;
			$this->cart->destroy();

			redirect('dashboard/info/'.$faktur);

		}
	}

}