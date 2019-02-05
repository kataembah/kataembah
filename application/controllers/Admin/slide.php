<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slide extends CI_Controller {

	public function index()
	{
		$this->model_scurity->getscurity();
		$isi['page'] = 'slide';
		$isi['label'] = 'slide';
		$this->load->model('model_slide');
		$isi['datakks']	=$this->model_slide->tampil(); 

		$this->load->model('userAdmin');
		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 

		$user = $this->session->userdata('username');
		$this->load->view('backend/main',$isi);
	}
		public function utama()
	{
		$this->model_scurity->getscurity();
		$isi['page'] = 'slide_utama';
		$isi['label'] = 'Slide Utama';
		$this->load->model('model_slide');

		$this->load->model('userAdmin');
		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 
		
		$isi['datakks']	=$this->model_slide->utama(); 

		$user = $this->session->userdata('username');
		$this->load->view('backend/main',$isi);
	}

	public function ubah()
	{
		$this->model_scurity->getscurity();
		$user = $this->session->userdata('username');
		$this->load->model('userAdmin');
		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 
//		
		$nmfile = $user.time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './asset/images/slide/';
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
				
				'nama' =>$_POST['nama_produk'] ,
				'deskripsi' =>$_POST['deskripsi'] ,
				 'img' => $gbr['file_name'],

				 );
				
				$this->db->where('id',$key);	
				$this->db->update('slide',$data);

				$this->session->set_flashdata("SUCCESS","Akun ada berhasil di buat");
				redirect("admin/slide","refresh");
			}
		}
		echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
				redirect("admin/slide","refresh");
}
public function ubah1()
	{
		$this->model_scurity->getscurity();
		$user = $this->session->userdata('username');
		$this->load->model('userAdmin');
		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 
//		
		$nmfile = $user.time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './asset/images/slide/';
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
				
				'nama' =>$_POST['nama_produk'] ,
				'deskripsi' =>$_POST['deskripsi'] ,
				 'img' => $gbr['file_name'],

				 );
				
				$this->db->where('id',$key);	
				$this->db->update('slide',$data);

				$this->session->set_flashdata("SUCCESS","Akun ada berhasil di buat");
				redirect("admin/slide/utama","refresh");
			}
		}
		echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
				redirect("admin/slide/utama","refresh");
}

	public function simpan()
	{
		$this->model_scurity->getscurity();
		$user = $this->session->userdata('username');
		
//		
		$nmfile = $user.time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './asset/images/slide/';
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
				'id' =>time() ,
				'nama' =>$_POST['nama'] ,
				'deskripsi' =>$_POST['deskripsi'] ,
				 'img' => $gbr['file_name'],
				 'status' => '2',

				 );
				$this->db->insert('slide',$data);
				$this->session->set_flashdata("SUCCESS","Akun ada berhasil di buat");
				redirect("Admin/slide","refresh");
			}
		}
		echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
				redirect("Admin/slide","refresh");
}
public function simpan_utama()
	{
		$this->model_scurity->getscurity();
		$user = $this->session->userdata('username');
		
//		
		$nmfile = $user.time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './asset/images/slide/';
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
				'id' =>time() ,
				'nama' =>$_POST['nama'] ,
				'deskripsi' =>$_POST['deskripsi'] ,
				 'img' => $gbr['file_name'],
				 'status' => '1',

				 );
				$this->db->insert('slide',$data);
				$this->session->set_flashdata("SUCCESS","Akun ada berhasil di buat");
				redirect("Admin/slide/utama","refresh");
			}
		}
		echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
				redirect("Admin/slide/utama","refresh");
}

	public function hapus()
	{	
$level = $this->session->userdata('level');
		
		if($level== 'Admin'){			
		$this->model_scurity->getscurity();
		$key = $this->uri->segment(4);

		$this->db->where('id',$key);		
		$this->db->delete('slide');
		$query = $this->db->get('slide');
		echo "<script> alert('Sukses'); </script>";
		redirect("Admin/slide","refresh");


		}else{

		// echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
			redirect("admin/slide","refresh");
		}	
	}
	public function hapus_utama()
	{	
		$level = $this->session->userdata('level');
		
		if($level== 'Admin'){			
		$this->model_scurity->getscurity();
		$key = $this->uri->segment(4);

		$this->db->where('id',$key);		
		$this->db->delete('slide');
		$query = $this->db->get('slide');
		echo "<script> alert('Sukses'); </script>";
		redirect("Admin/slide/utama","refresh");


		}else{

		// echo "<script> alert('Maaf , Data tidak Kami Temukan'); </script>";
			redirect("Admin/slide/utama","refresh");
		}	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */