<?php
function sukses($message = '')
{
  $CI =& get_instance();
  return $CI->session->set_flashdata('pesan', "<div class='alert alert-success'>
  <button type='button' class='close' data-dismiss='alert'>x</button>
  <center><strong>Success ! </strong>
  $message.</center>
  </div>");
}

function gagal($message = '')
{
  $CI =& get_instance();
  return $CI->session->set_flashdata('pesan',"<div class='alert alert-danger'>
  <button type='button' class='close' data-dismiss='alert'>x</button>
  <center><strong>Error ! </strong>
  $message.</center>
  </div>");
}

function tampil_pesan(){
  $CI =& get_instance();
  return $CI->session->flashdata('pesan');
}
