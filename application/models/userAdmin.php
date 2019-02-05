<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userAdmin extends CI_Model {

	function faktur($id)
	{
		$this->db->where('id_faktur',$id);
		return $this->db->get('faktur');
	}
	public function tampiltabel()
    {
       return $this->db->query("show tables")->result();
    }
 
	function pesan(){
		return $this->db->query("SELECT * FROM pesanan");
	}
	function rekening(){
		return $this->db->query("SELECT * FROM rekening");
	}
	function bukti(){
		return $this->db->query("SELECT * FROM bukti");
	}
	function getPesanan($idPesanan){
		return $this->db->query("
			SELECT pesanan.* , produk.nama_produk From pesanan INNER JOIN produk ON pesanan.id_product = produk.id_produk where pesanan.id_pesanan = '".$idPesanan."'
	");
	}
		function pelanggan(){
		return $this->db->query("SELECT DISTINCT
    `id_pelanggan`
    , `alamat`
    , `email`
    , `jenis_kelamin`
    , `nama_pelanggan`
    , `no_hp`
FROM
    `tanaman`.`pelanggan`;");
	}

		function getpesan(){
		return $this->db->query("
			SELECT DISTINCT
    `pesanan`.`id_pesanan`
    , `pelanggan`.`nama_pelanggan`
    , `pesanan`.`tgl_pemesanan`
    , `faktur`.`status`
    , `faktur`.`id_faktur`
FROM
    `tanaman`.`pelanggan`
    INNER JOIN `tanaman`.`pesanan` 
        ON (`pelanggan`.`id_pelanggan` = `pesanan`.`id_pelanggan`)
    INNER JOIN `tanaman`.`faktur` 
        ON (`faktur`.`id_pelanggan` = `pelanggan`.`id_pelanggan`) AND (`faktur`.`id_pesanan` = `pesanan`.`id_pesanan`) where faktur.status ='0';
		");
	}
	function getpesan1(){
		return $this->db->query("
			SELECT DISTINCT
    `pesanan`.`id_pesanan`
    , `pelanggan`.`nama_pelanggan`
    , `pesanan`.`tgl_pemesanan`
    , `faktur`.`status`
    , `faktur`.`id_faktur`
FROM
    `tanaman`.`pelanggan`
    INNER JOIN `tanaman`.`pesanan` 
        ON (`pelanggan`.`id_pelanggan` = `pesanan`.`id_pelanggan`)
    INNER JOIN `tanaman`.`faktur` 
        ON (`faktur`.`id_pelanggan` = `pelanggan`.`id_pelanggan`) AND (`faktur`.`id_pesanan` = `pesanan`.`id_pesanan`) where faktur.status ='1';
		");
	}
	function getpesan2(){
		return $this->db->query("
			SELECT DISTINCT
    `pesanan`.`id_pesanan`
    , `pelanggan`.`nama_pelanggan`
    , `pesanan`.`tgl_pemesanan`
    , `faktur`.`status`
    , `faktur`.`id_faktur`
FROM
    `tanaman`.`pelanggan`
    INNER JOIN `tanaman`.`pesanan` 
        ON (`pelanggan`.`id_pelanggan` = `pesanan`.`id_pelanggan`)
    INNER JOIN `tanaman`.`faktur` 
        ON (`faktur`.`id_pelanggan` = `pelanggan`.`id_pelanggan`) AND (`faktur`.`id_pesanan` = `pesanan`.`id_pesanan`) where faktur.status ='2';
		");
	}
	
	function getdetails($key){
		return $this->db->query("SELECT
    `pesanan`.`id_pesanan`
    , `pesanan`.`tgl_pemesanan`
    , `produk`.`nama_produk`
    , `pesanan`.`qty`
    , `produk`.`harga`
    , `faktur`.`total`
FROM
    `tanaman`.`produk`
    INNER JOIN `tanaman`.`pesanan` 
        ON (`produk`.`id_produk` = `pesanan`.`id_product`)
    INNER JOIN `tanaman`.`faktur` 
        ON (`pesanan`.`id_pesanan` = `faktur`.`id_pesanan`)
		  	where pesanan.id_pesanan = '$key'");
	}
	function getPelanggan($idPelanggan){
		$this->db->where('id_pelanggan',$idPelanggan);
		return $this->db->get('pelanggan');
	}


	function search($cari){
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->like('nama_produk',$cari);
		return $this->db->get();
	}

	// filter produk
	// new produk
	function baru(){
		$this->db->limit(2);
		$this->db->order_by('id_produk','desc');
		return $this->db->get('produk');
	}
	
	// lokal
	function lokal(){
		$this->db->where('jenis_produk','Lokal');
		return $this->db->get('produk');
	}

	function produkLokal($perpage,$offset){
		$this->db->where('jenis_produk','Lokal');
		return $this->db->get('produk',$perpage,$offset);
	}

	// Thailand
	function import(){
		$this->db->where('jenis_produk','Thailand');
		return $this->db->get('produk');
	}
	function ProdukThailand($perpage,$offset){
		$this->db->where('jenis_produk','Thailand');
		return $this->db->get('produk',$perpage,$offset);
	}

	// detail produk
	function productDetail(){
		$this->db->where('id_produk',$this->uri->segment(3));
		return $this->db->get('produk');
	}
	function lokalTerkait(){
		$id = $this->uri->segment(3);
		$this->db->offset($id);
		$this->db->limit('4');
		$this->db->where('jenis_produk','Lokal');
		return $this->db->get('produk');
	}
	function importTerkait(){
		$this->db->limit('4');
		$this->db->where('jenis_produk','Thailand');
		return $this->db->get('produk');
	}

}
