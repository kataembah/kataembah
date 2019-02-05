<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_slide extends CI_model {


// Tampil Data Register Baru

    public function tampil()
	{
			$data = "SELECT * from slide where `status` = '2' ";
	       return $this->db->query($data);

	}   
        public function utama()
    {
            $data = "SELECT * from slide where `status` = '1' ";
           return $this->db->query($data);

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */