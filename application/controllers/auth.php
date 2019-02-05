<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function index()
	{
		// $this->load->view('resource/loginUser');
		 redirect("auth/login","refresh");
	}
	public function administrator(){
		$this->load->view('backend/adminLogin');
	}
	public function cekAkun()
	{

	    //membuat validasi login
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');

	    $query = $this->model_users->cekAkun($username, $password);

	    if ($query === 1) {
	      return "User Tidak Ditemukan!";
	    }
	    else if ($query === 3) {
	      return "Password Salah!";
	    }
	    else {
	      $userData = array(
	        'username' => $query->username,
	        'kode' => $query->id,
	        'level' => $query->level,
	        'Nama' => $query->Nama,
	        'Email' => $query->Email,
	        'sandi' => $query->sandi,
	        'Nohp' => $query->Nohp,
	      );

	      $this->session->set_userdata($userData);
	      return TRUE;
	     }
	}

	public function login()
	{
		if ($this->input->post('submit')) {
			$name = $this->input->post('username');

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$error = $this->cekAkun();
			if ($this->form_validation->run() && $error === TRUE) {
				$data = $this->model_users->cekAkun($this->input->post('username'), $this->input->post('password'));
				if($data->level == 'Admin'){
					echo "<script>alert('Selamat datang ".$name."')</script>";
					redirect('Admin/home','refresh');
				}
				else if($data->level == 'Client'){
					echo "<script>alert('Selamat datang ".$name."')</script>";
					redirect('../index.php','refresh');

				}
			}

			else{
				$data['error'] = $error;
				$this->load->view('resource/loginUser', $data);
			}
		}
		else{
			$this->load->view('resource/loginUser');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		echo "<script>alert('Berhasil Keluar')</script>";
		redirect('auth/login','refresh');
	}
}
