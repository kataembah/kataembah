<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class Model_users extends CI_Model {

  //mengambil tabel users
  public $table = 'users';

  public function inset($vale)
  {
    $this->db->insert('users',$vale);
  }

    public function getupdate($key,$data)
    {
        $this->db->where('id',$key);
        $this->db->update('users',$data);
    }
    public function getinset($data)
    {
      $this->db->insert('users',$data);

    }

  public function cekAkun($username, $password)
  {
    error_reporting(0);
    $this->db->where('username', $username);
    $query = $this->db->get($this->table)->row();

    $has = $query->status_keadaan;
    
    if (!$has != 0 | !$query) return 1;

    $hash = $query->password;
    if (md5($password) != $hash) return 3;
      return $query;
    }

      public function cek($username)
  {
    $data = "SELECT username from users where username = '$username' ";
    
  return $this->db->query($data);

  }
  }