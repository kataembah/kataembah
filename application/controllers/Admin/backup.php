<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class backup extends CI_Controller {

	public function index()
	{
		$this->model_scurity->getscurity();
		$isi['page'] = 'backup';
		$isi['label'] = 'Backup & Restore';
		$this->load->model('userAdmin');
		$isi['verifikasi'] = $this->userAdmin->getPesan()->num_rows();
		$isi['pengemasan'] = $this->userAdmin->getPesan1()->num_rows();
		$isi['Pengiriman'] = $this->userAdmin->getPesan2()->num_rows();
		
		$isi['pesan'] = $this->userAdmin->getPesan()->num_rows(); 
		$isi['pesanan'] = $this->userAdmin->getPesan(); 
		
		$isi['tabel'] = $this->userAdmin->tampiltabel(); //AMBIL DATA TABEL-TABEL
		



		$this->load->view('backend/main',$isi);
	}
	    public function restorein()   
    {

        $this->load->helper('file');
        $config['upload_path']="./database";
        $config['allowed_types']="jpg|png|gif|jpeg|bmp|sql|x-sql";
        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if(!$this->upload->do_upload("datafile")){
         $error = array('error' => $this->upload->display_errors());
         echo "GAGAL UPLOAD";
         var_dump($error);
         exit();
        }

        $file = $this->upload->data();  //DIUPLOAD DULU KE DIREKTORI assets/database/
        $fotoupload=$file['file_name'];
                   
        $isi_file = file_get_contents('./database/' . $fotoupload); //PANGGIL FILE YANG TERUPLOAD
        $string_query = rtrim( $isi_file, "\n;" );
        $array_query = explode(";", $string_query);   //JALANKAN QUERY MERESTORE KEDATABASE
        foreach($array_query as $query)
        {
            $this->db->query($query);
        }

        $path_to_file = './database/' . $fotoupload;
        if(unlink($path_to_file)) {   // HAPUS FILE YANG TERUPLOAD
        	echo "<script> alert('Sukses'); </script>";
            redirect('admin/backup','refresh');
        }
        else {
            echo 'errors occured';
        }
    }
	public function backupin()
	{

		$tabel = $this->input->post('tabel');
		if ($tabel === "") {
			echo "<script>alert('Masukan nama table yang ingin di backup');</script>";
		}
		else{
			$this->load->dbutil();
			$prefs = array(    
				'tables'      => array($tabel),
				'format'      => 'zip',            
				'filename'    => $tabel.'-backup.sql'
			);
			$backup =& $this->dbutil->backup($prefs);
			$db_name = 'backup-on-'. $tabel . '-' . date("d-m-Y") .'.zip'; //NAMAFILENYA
			$save = 'pathtobkfolder/'.$db_name;
			$this->load->helper('file');
			write_file($save, $backup);
			$this->load->helper('download');
			force_download($db_name, $backup);
		}

	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */