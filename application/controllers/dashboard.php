<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function error(){
		$this->load->view('resource/404');
	}
	public function index()
	{
		$this->load->model('model_slide');
		$a['slide']	=$this->model_slide->tampil(); 
		$a['utama']	=$this->model_slide->utama(); 
		$a['page'] = 'content/main';
		$this->load->model('model_slide');
		$a['slide']	=$this->model_slide->tampil(); 
		$a['utama']	=$this->model_slide->utama(); 
		$this->load->view('index',$a);
	}

	public function daftar()
	{
		$a['produk'] = $this->cart->contents();
		$a['page'] = 'content/daftar';
		$this->load->view('index',$a);
	}

	public function keranjang()
	{
		$a['produk'] = $this->cart->contents();
		$a['page'] = 'content/cart';
		$this->load->view('index',$a);
	}

	public function search()
	{
		$cari = $a['cari'] = ($this->input->post('cari')==NULL) ? redirect('dashboard','refresh') : $this->input->post('cari');
		$a['produk'] = $this->userAdmin->search($cari)->result();
		$a['hasil'] = $this->userAdmin->search($cari)->num_rows();
		$a['page'] = 'content/search';
		$this->load->view('index',$a);	
	}
	
	// product
	public function lokal()
	{
		$model1 = $this->userAdmin->lokal();

		$config['total_rows'] = $model1->num_rows();
		$config['base_url'] = base_url().'dashboard/lokal/index/';
		$config['per_page'] = 9;

		//config bootstrap
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="disable active"><a href="#">';
		$config['cur_tag_close'] = '</a></i>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$a['halaman'] = $this->pagination->create_links();
		$offset=$this->uri->segment(4);

		$a['jenis'] = 'Aglaonema Lokal';
		$a['page'] = 'content/produk';
		$a['lokal'] = $model1->num_rows();
		$a['import'] = $this->userAdmin->import()->num_rows();
		$a['baru'] = $this->userAdmin->baru()->result();

		$a['getProduk'] = $this->userAdmin->produkLokal($config['per_page'],$offset)->result();

		$this->load->view('index',$a);
	}

	public function import()
	{
		$model1 = $this->userAdmin->import();
		$a['baru'] = $this->userAdmin->baru()->result();

		$config['total_rows'] = $model1->num_rows();
		$config['base_url'] = base_url().'dashboard/import/index/';
		$config['per_page'] = 9;

		//config bootstrap
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="disable active"><a href="#">';
		$config['cur_tag_close'] = '</a></i>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$a['halaman'] = $this->pagination->create_links();
		$offset=$this->uri->segment(4);

		$a['jenis'] = 'Aglaonema Lokal';
		$a['page'] = 'content/produk';
		$a['lokal'] = $this->userAdmin->lokal()->num_rows();
		$a['import'] = $model1->num_rows();

		$a['getProduk'] = $this->userAdmin->produkThailand($config['per_page'],$offset)->result();

		$this->load->view('index',$a);
	}

	public function detail_product()
	{
		$a['produkLokal'] = $this->userAdmin->lokalTerkait()->result();
		$a['produkThailand'] = $this->userAdmin->importTerkait()->result();
		$a['getProduk'] = $this->userAdmin->productDetail()->result();
		$a['page'] = 'content/detail';
		$this->load->view('index',$a);
	}

	// transaksi
	public function info()
	{
		$id = $this->uri->segment(3);
		$a['faktur'] = $this->userAdmin->faktur($id)->result();
		
		$z = $a['faktur'];

		foreach ($z as $get) {
			$idPelanggan =  $get->id_pelanggan;
			$idPesanan =  $get->id_pesanan;
		}

		if ($z != null) {
			$a['produk'] = $this->userAdmin->getPesanan($idPesanan)->result();
			$a['pelanggan'] = $this->userAdmin->getPelanggan($idPelanggan)->result();
		}
		else{
			$a['produk'] = '';
			$a['pelanggan'] = '';
		}


		$a['page'] = 'content/bayar';
		$this->load->view('index',$a);

	}
	public function pembayaran()
	{
		$a['faktur'] = $this->input->post('faktur');
		$a['tgl'] = $this->input->post('tgl');
		$a['total'] = $this->input->post('total');
		$a['rekening'] = $this->userAdmin->rekening()->result();
		$a['page'] = 'content/berhasil';
		$this->load->view('index',$a);
	}
	public function lacak()
	{
		$a['page'] = 'content/cek';
		$this->load->view('index',$a);

	}

	public function konfirmasi()
	{
		$a['page'] = 'content/konfirm';
		$this->load->view('index',$a);

	}


}
