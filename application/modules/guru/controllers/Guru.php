<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends MX_Controller{
  function  __construct()
  {
      Modules::run('login/cek_login');
      parent::__construct();
      $this->load->model('M_guru');
      $this->load->library('form_validation');
      $this->load->helper('form');
  }
  public function index()
  {
    $data['title'] = 'Guru Sekolah';
    $data['guru'] = $this->M_guru->guru();
    $this->template->load('MasterLayout','guru',$data);
  }
  function tambah_guru_proses()
  {
    $data['id_guru'] = $this->input->post('id_guru');
    $data['id_sekolah'] = $this->input->post('id_sekolah');
    $data['nama_guru'] = $this->input->post('nama_guru');
    $data['status'] = $this->input->post('status');
    $data['sertifikasi'] = $this->input->post('sertifikasi');
    $data['pend_terahir'] = $this->input->post('pend_terahir');
    $this->M_guru->tambah_guru($data);
    $this->session->set_flashdata("msg","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Berhasil Menyimpan Data!
							</div>");
    redirect('Guru');
  }
  function hapus_guru($id_guru = 0)
  {
    $this->M_guru->hapus_guru($id_guru);
    $this->session->set_flashdata("msg1","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Fasilitas');
  }
}
