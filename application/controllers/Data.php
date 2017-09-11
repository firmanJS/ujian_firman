<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('app_model', 'app');
  }

  function index()
  {
    $data['kredit'] = $this->app->get_all('tbl_kredit')->result();
    $this->load->view('partials/header');
    $this->load->view('partials/content-data',$data);
    $this->load->view('partials/footer');
  }

  function add($id=0)
  {
    $data['record'] = $this->app->get_by(array('id'=>$id),'tbl_kredit')->row();
    $this->load->view('partials/header');
    $this->load->view('partials/content-add',$data);
    $this->load->view('partials/footer');
  }

  function save_data($id=0)
  {
    $data = array('name' => $this->input->post('name'),
                  'city' => $this->input->post('city'),
                  'country' => $this->input->post('country'),
                  'jumlah_penghasilan_perbulan' => $this->input->post('jumlah_penghasilan_perbulan'),
                  'email' => $this->input->post('email'));
    if ($this->input->post('id')) {
      $aksi = $this->app->update_data(array('id'=>$this->input->post('id')),$data,'tbl_kredit');
    }else{
      $data['status'] = 0;
      $aksi = $this->app->insert_data('tbl_kredit',$data);
    }
    if ($aksi) {
      sukses('sukses');
      redirect('data');
    }else{
      gagal('error');
      redirect('data');
    }
  }
  function delete_data($id)
  {
    $aksi = $this->app->delete_data(array('id'=>$id),'tbl_kredit');
    if ($aksi) {
      sukses('deleted');
      redirect('data');
    }else{
      gagal('error');
      redirect('data');
    }
  }

  function reject()
  {
    $data['status'] = 0;
    $aksi = $this->app->update_data(array('status'=>2),$data,'tbl_kredit');
    if ($aksi) {
      sukses('sukses reject');
      redirect('data');
    }else{
      gagal('error');
      redirect('data');
    }
  }

  function send_data()
    {
      if ($this->session->userdata('status')=='Customer') {
        $data['status'] = 1;
        $aksi = $this->app->update_data(array('status'=>0),$data,'tbl_kredit');
        if ($aksi) {
          sukses('sukses send');
          redirect('data');
        }else{
          gagal('error');
          redirect('data');
        }
      }elseif ($this->session->userdata('status')=='Pemeriksa1') {
        $data['status'] = 2;
        $aksi = $this->app->update_data(array('status'=>1),$data,'tbl_kredit');
        if ($aksi) {
          sukses('sukses approve');
          redirect('data');
        }else{
          gagal('error');
          redirect('data');
        }
      }elseif ($this->session->userdata('status')=='Pemeriksa2') {
        $data['status'] = 3;
        $aksi = $this->app->update_data(array('status'=>2),$data,'tbl_kredit');
        if ($aksi) {
          sukses('sukses approve');
          redirect('data');
        }else{
          gagal('error');
          redirect('data');
        }
    }
  }

}
