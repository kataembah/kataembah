<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pelanggan extends CI_Controller {

	public function index()
	{
		$this->model_scurity->getscurity();
		$isi['page'] = 'Pelanggan';
		$isi['label'] = 'pelanggan';
		$this->load->model('userAdmin');

		$isi['verifikasi'] = $this->userAdmin->getPesan()->num_rows();
		$isi['pengemasan'] = $this->userAdmin->getPesan1()->num_rows();
		$isi['Pengiriman'] = $this->userAdmin->getPesan2()->num_rows();

		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 
		
		$isi['datakks']	=$this->userAdmin->pelanggan(); 
		$this->load->view('backend/main',$isi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */