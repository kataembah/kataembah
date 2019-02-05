<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class produk extends CI_Controller {

	public function index()
	{
		$this->model_scurity->getscurity();
		$isi['page'] = 'produk';
		$isi['label'] = 'Produk';
		$isi['datakks']	= $this->db->get('produk');
		$this->load->model('userAdmin');
		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 
		
		$user = $this->session->userdata('username');
		$this->load->view('backend/main',$isi);
	}
	public function ubah()
	{
		$this->model_scurity->getscurity();
		$user = $this->session->userdata('username');
		
//		
		$nmfile = $user.time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './asset/images/portfolio/';
		$config['file_name'] = $nmfile; //nama yang terupload nantinya
		$config['allowed_types'] = 'gif|jpg|png|docx|zip|rar';
		$config['max_size']	= '10000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
				
		$this->load->library('upload', $config);
// 

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			// $this->load->view('upload_form', $error);
		}
		else
		{
	
			$data = array('upload_data' => $this->upload->data());
			$gbr = $this->upload->data();
		
			// $this->load->view('upload_success', $data);
		}

			

			if(isset($_POST ['register'])) {
			$this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
			error_reporting(0);
			//jika validasi ok
			if ($this->form_validation->run()== true) {
				echo "<script> alert('Sukses'); </script>";
				$key =$_POST['id_registrasi'] ;
			// FORM OK
			$data = array(
				
				'nama_produk' =>$_POST['nama_produk'] ,
				'harga' =>$_POST['harga'] ,
				'jenis_produk' =>$_POST['jenis_produk'] ,
				'deskripsi' =>$_POST['deskripsi'] ,
				 'img' => $gbr['file_name'],

				 );
				
				$this->db->where('id_produk',$key);	
				$this->db->update('produk',$data);

				$this->session->set_flashdata("SUCCESS","Akun ada berhasil di buat");
				redirect("admin/produk","refresh");
			}
		}
		echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
				redirect("admin/produk","refresh");
}


	public function simpan()
	{
		$this->model_scurity->getscurity();
		$user = $this->session->userdata('username');
		
//		
		$nmfile = $user.time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './asset/images/portfolio/';
		$config['file_name'] = $nmfile; //nama yang terupload nantinya
		$config['allowed_types'] = 'gif|jpg|png|docx|zip|rar';
		$config['max_size']	= '10000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
				
		$this->load->library('upload', $config);
// 

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			// $this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$gbr = $this->upload->data();
			// $this->load->view('upload_success', $data);
		}
if(isset($_POST ['register'])) {
			$this->form_validation->set_rules('nama', 'nama', 'required');
error_reporting(0);
			//jika validasi ok
			if ($this->form_validation->run()== true) {
				echo "<script> alert('Sukses'); </script>";

			// FORM OK
			$data = array(
				'id_produk' =>time() ,
				'nama_produk' =>$_POST['nama'] ,
				'harga' =>$_POST['harga'] ,
				'deskripsi' =>$_POST['deskripsi'] ,
				'jenis_produk' =>$_POST['jenis_produk'] ,
				 'img' => $gbr['file_name'],

				 );
				$this->db->insert('produk',$data);
				$this->session->set_flashdata("SUCCESS","Akun ada berhasil di buat");
				redirect("Admin/produk","refresh");
			}
		}
		echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
				redirect("Admin/produk","refresh");
}

	public function hapus()
	{	
$level = $this->session->userdata('level');
		
		if($level== 'Admin'){			
		$this->model_scurity->getscurity();
		$key = $this->uri->segment(4);

		$this->db->where('id_produk',$key);		
		$this->db->delete('produk');
		$query = $this->db->get('produk');
		echo "<script> alert('Sukses'); </script>";
		redirect("Admin/produk","refresh");


		}else{

		// echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
			redirect("admin/produk","refresh");
		}	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */