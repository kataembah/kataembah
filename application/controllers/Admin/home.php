<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$this->model_scurity->getscurity();
		$isi['page'] = 'index';
		$isi['label'] = 'Beranda';
	
		$isi['verifikasi'] = $this->userAdmin->getPesan()->num_rows();
		$isi['pengemasan'] = $this->userAdmin->getPesan1()->num_rows();
		$isi['Pengiriman'] = $this->userAdmin->getPesan2()->num_rows();
		$isi['produk'] = $this->db->get('produk')->num_rows();
		$isi['pelanggan'] = $this->userAdmin->pelanggan()->num_rows(); 

		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 

		$user = $this->session->userdata('username');

		$this->load->model('model_slide');
		$isi['slide']	=$this->model_slide->tampil(); 
		$isi['utama']	=$this->model_slide->utama(); 

		$this->load->view('backend/main',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('authentication/auth/login');
	}
	public function update ()
 {
	$this->model_scurity->getscurity();
		$key = $this->session->userdata('kode');
		$data['username']	= $this->input->post('username');
		$data['Nama']	= $this->input->post('Nama');
		$data['Email']	= $this->input->post('Email');
		$data['Nohp']	= $this->input->post('Nohp');
		$data['password']	= md5($this->input->post('password'));
		$data['sandi']	= $this->input->post('password');
		
		
		$this->load->model('Model_users');
		$this->db->where('id',$key);
		$query	= $this->db->get('users');
		 
		if($query->num_rows()>0)
		{
			$this->Model_users->getupdate($key,$data);
			echo "<script> alert('Sukses , Harap Login Kembali'); </script>";
			$this->session->sess_destroy();
			redirect("auth/login","refresh");
	
		}
		else
		{
			$this->Model_users->getinsert($data);
			echo "<script> alert('Sukses'); </script>";
			$this->session->sess_destroy();
			redirect("auth/login","refresh");
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */