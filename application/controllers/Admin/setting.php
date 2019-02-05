<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setting extends CI_Controller {

	public function index()
	{
		$this->model_scurity->getscurity();
		$isi['page'] = 'setting';
		$isi['label'] = 'Setting';
		$this->load->model('userAdmin');

		$isi['verifikasi'] = $this->userAdmin->getPesan()->num_rows();
		$isi['pengemasan'] = $this->userAdmin->getPesan1()->num_rows();
		$isi['Pengiriman'] = $this->userAdmin->getPesan2()->num_rows();

		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 
		
		$isi['datakks']	=$this->userAdmin->bukti(); 
		$this->load->view('backend/main',$isi);
	}
	public function rekening()
	{
		$this->model_scurity->getscurity();
		$isi['page'] = 'rekening';
		$isi['label'] = 'Rekening';
		$this->load->model('userAdmin');

		$isi['verifikasi'] = $this->userAdmin->getPesan()->num_rows();
		$isi['pengemasan'] = $this->userAdmin->rekening()->num_rows();
		

		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 
		
		$isi['datakks']	=$this->userAdmin->rekening(); 
		$this->load->view('backend/main',$isi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */