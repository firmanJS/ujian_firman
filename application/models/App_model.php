<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function dapatkan_id($username)
  {
    $this->db->select('id');
    $this->db->from('tbl_user');
    $this->db->where('username', $username);
    return $this->db->get()->row('id');
  }

  function dapatkan_pengguna($user_id)
  {
    $this->db->from('tbl_user');
    $this->db->where('id', $user_id);
    return $this->db->get()->row();
  }

  function verify_password_hash($password, $hash)
  {
    return password_verify($password, $hash);
  }

  function cek_auth($username, $password)
  {
    $this->db->select('password');
    $this->db->from('tbl_user');
    $this->db->where('username', $username);
    $hash = $this->db->get()->row('password');
    return $this->verify_password_hash($password, $hash);
  }

  function get_by($arr,$table){
    $this->db->where($arr);
    return $this->db->get($table);
  }

  function get_all($table)
  {
    return $this->db->get($table);
  }
  function update_data($arr,$data,$table)
  {
    $this->db->where($arr);
    return $this->db->update($table,$data);
  }
  function insert_data($table,$data)
  {
    return $this->db->insert($table,$data);
  }
  function delete_data($arr,$table)
  {
    $this->db->where($arr);
    return $this->db->delete($table);
  }

}
