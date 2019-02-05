<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pesanan extends CI_Controller {

	public function index()
	{
		$this->model_scurity->getscurity();
		$isi['page'] = 'Pesanan';
		$isi['label'] = 'pesanan';
		$this->load->model('userAdmin');

		$isi['verifikasi'] = $this->userAdmin->getPesan()->num_rows();
		$isi['pengemasan'] = $this->userAdmin->getPesan1()->num_rows();
		$isi['Pengiriman'] = $this->userAdmin->getPesan2()->num_rows();

		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 

		$isi['datakks']	=$this->userAdmin->getpesan(); 
		$this->load->view('backend/main',$isi);
	}
	public function pengemasan()
	{
		$this->model_scurity->getscurity();
		$isi['page'] = 'pengemasan';
		$isi['label'] = 'Pengemasan';

		$isi['verifikasi'] = $this->userAdmin->getPesan()->num_rows();
		$isi['pengemasan'] = $this->userAdmin->getPesan1()->num_rows();
		$isi['Pengiriman'] = $this->userAdmin->getPesan2()->num_rows();
		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 

		$this->load->model('userAdmin');
		$isi['datakks']	=$this->userAdmin->getpesan1(); 
		$this->load->view('backend/main',$isi);
	}
	public function Pengiriman()
	{
		$this->model_scurity->getscurity();
		$isi['page'] = 'Pengiriman';
		$isi['label'] = 'Pengiriman';

		$isi['verifikasi'] = $this->userAdmin->getPesan()->num_rows();
		$isi['pengemasan'] = $this->userAdmin->getPesan1()->num_rows();
		$isi['Pengiriman'] = $this->userAdmin->getPesan2()->num_rows();
		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 
		$this->load->model('userAdmin');
		$isi['datakks']	=$this->userAdmin->getpesan2(); 
		$this->load->view('backend/main',$isi);
	}
	public function details()
	{
		$id = $this->uri->segment(4);
		$a['faktur'] = $this->userAdmin->faktur($id)->result();
		$a['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$a['pesanan'] = $this->userAdmin->getPesan(); 
		$z = $a['faktur'];

		foreach ($z as $get) {
			$idPelanggan =  $get->id_pelanggan;
			$idPesanan =  $get->id_pesanan;
		}
		
		$a['produk'] = $this->userAdmin->getPesanan($idPesanan)->result();
		$a['pelanggan'] = $this->userAdmin->getPelanggan($idPelanggan)->result();
		$a['label'] = 'pesanan';
		$a['page'] = 'details_pemesanan';
		$this->load->view('backend/main',$a);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */