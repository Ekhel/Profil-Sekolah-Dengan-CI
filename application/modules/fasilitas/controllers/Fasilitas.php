<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends MX_Controller{
  function  __construct()
  {
      Modules::run('login/cek_login');
      parent::__construct();
      $this->load->model('M_fasilitas');
      $this->load->library('form_validation');
      $this->load->helper('form');
  }
  public function index()
  {
    $data['title'] = 'Profile dan Data Sekolah';
    $data['fasilitas'] = $this->M_fasilitas->fasilitas();
    $data['ref'] = $this->db->query("SELECT * FROM tb_fasilitas_ref")->result();
    $this->template->load('MasterLayout','fasilitas',$data);
  }
  function tambah_fasilitas_proses()
  {
    $data['id_fasilitas'] = $this->input->post('id_fasilitas');
    $data['id_sekolah'] = $this->input->post('id_sekolah');
    $data['jenis'] = $this->input->post('jenis');
    $data['id_ref'] = $this->input->post('id_ref');
    $data['jumlah'] = $this->input->post('jumlah');
    $data['satuan'] = $this->input->post('satuan');
    $this->M_fasilitas->tambah_fasilitas($data);
    $this->session->set_flashdata("tambah","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Berhasil Menyimpan Data!
							</div>");
    redirect('Fasilitas');
  }
  function hapus_fasilitas($id_fasilitas = 0)
  {
    $this->M_fasilitas->hapus_fasilitas($id_fasilitas);
    $this->session->set_flashdata("hapus","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Item sudah di Hapus!
							</div>");
    redirect('Fasilitas');
  }
  function edit_fasilitas_proses()
  {
    $id_fasilitas = $this->input->post('id_fasilitas');
    $id_sekolah = $this->input->post('id_sekolah');
    $jenis = $this->input->post('jenis');
    $id_ref = $this->input->post('id_ref');
    $jumlah = $this->input->post('jumlah');
    $satuan = $this->input->post('satuan');

    $data = array(
      'id_fasilitas' => $id_fasilitas,
      'id_sekolah' => $id_sekolah,
      'jenis' => $jenis,
      'id_ref' => $id_ref,
      'jumlah' => $jumlah,
      'satuan' => $satuan,
    );
    $where = array(
      'id_fasilitas' => $id_fasilitas
    );
    $this->M_fasilitas->update_fasilitas($where,$data,'tb_fasilitas');
    $this->session->set_flashdata("update","
              <div class='alert alert-success fade in'>
                  <a href='#' class='close' data-dismiss='alert'>&times;</a>
                  <strong>Success !</strong> Data telah di Ubah!
              </div>");
    redirect('Fasilitas');
  }
}
