<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_login extends CI_Model {

	// public function getlogin($u, $p)
	// {
	// 	// $pwd = sha1($p);
	// 	$this->db->where('username',$u);
	// 	$this->db->where('password',SHA1($p));
	// 	$query = $this->db->get('user');
	// 	if($query->num_rows()>0)
	// 	{
	// 		foreach ($query->result() as $row) {
	// 			$sess['username'] = $row->username;
	// 			$this->session->set_userdata($sess);
	// 			echo "<script>alert('Selamat datang ".$sess['username']."')</script>";
	// 			redirect(base_url(),'refresh');
	// 		}
	// 	}
	// 	else
	// 	{
	// 		// $this->session->set_flashdata('info','maaf coba lagi');
	// 		echo "<script>alert('Username atau Password yang anda masukan salah')</script>";
	// 		redirect('auth','refresh');
	// 	}
	// }
	// public function getloginAdmin($u, $p)
	// {
	// 	$this->db->where('username',$u);
	// 	$this->db->where('password',SHA1($p));
	// 	$query = $this->db->get('user');
	// 	if($query->num_rows()>0)
	// 	{
	// 		foreach ($query->result() as $row) {
	// 			$sess['username'] = $row->username;
	// 			$sess['email'] = $row->email;
	// 			$this->session->set_userdata($sess);
	// 			echo "<script>alert('Selamat datang ".$sess['username']."')</script>";
	// 			redirect('administrator','refresh');
	// 		}
	// 	}
	// 	else
	// 	{
	// 		echo "<script>alert('Username atau Password yang anda masukan salah')</script>";
	// 		redirect('auth/administrator','refresh');
	// 	}
	// }
}
