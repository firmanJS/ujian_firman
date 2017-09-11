<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('app_model', 'app');
  }
  public function index()
  {
    if ($this->session->userdata('user_id')) {
      redirect('home');
    }else {
      $this->load->view('partials/login');
    }
  }

  Public function do_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $cek_uname = $this->app->get_by(array('username'=>$username),'tbl_user')->num_rows();
    if($cek_uname > 0){
      if ($this->app->cek_auth($username, $password)) {
        $user_id = $this->app->dapatkan_id($username);
        $user    = $this->app->dapatkan_pengguna($user_id);
      }
      if (isset($user->id)) {
        $this->session->set_userdata('user_id',$user->id);
        $this->session->set_userdata('status',$user->status);
        redirect('home');
      }else{
        gagal('Invalid Password');
        redirect('login');
      }
    }else{
      gagal('username not registered!');
      redirect('login');
    }
  }

  Public function logout(){
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('status');
    redirect('login');
  }
}
