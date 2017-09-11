<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('user_id')==NULL) {
      redirect('login');
    }
  }

  function index()
  {
    $data['js'] = 'lib/js/app.js';
    $this->load->view('partials/header');
    $this->load->view('partials/content');
    $this->load->view('partials/footer',$data);
  }

}
