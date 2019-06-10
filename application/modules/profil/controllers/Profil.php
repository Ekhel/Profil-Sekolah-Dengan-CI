<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MX_Controller{
  function  __construct()
  {
      Modules::run('login/cek_login');
      parent::__construct();
      $this->load->model('M_profil');
      $this->load->helper('form');
  }
  public function index()
  {
    $data['title'] = 'Profile dan Data Sekolah';
    $data['profil'] = $this->M_profil->get_profil();
    $this->template->load('MasterLayout','profil',$data);
  }
  function get_kampung($id_distrik)
  {
    $result = $this->db->where("id_distrik",$id_distrik)->get("tb_kampung")->result();
    echo json_encode($result);
  }
  function edit_profil($id_sekolah)
  {
    $data['title'] = 'Edit Profil Sekolah';
    $where = array('id_sekolah' => $id_sekolah);
    $data['profil'] = $this->M_profil->edit_profil($where,'tb_sekolah')->result();
    $data['distrik'] = $this->db->query("SELECT * FROM tb_distrik")->result();

    $this->template->load('MasterLayout','edit_profil',$data);
  }
  function edit_profil_proses()
  {
    $id_sekolah = $this->input->post('id_sekolah');
    $nama_sekolah = $this->input->post('nama_sekolah');
    $jenjang = $this->input->post('jenjang');
    $kepsek = $this->input->post('kepsek');
    //$latitude = $this->input->post('latitude');
    //$longitude = $this->input->post('longitude');
    $id_distrik = $this->input->post('id_distrik');
    $id_kampung = $this->input->post('id_kampung');
    $luas_tanah = $this->input->post('luas_tanah');
    $nss = $this->input->post('nss');
    $status_kepemilikan = $this->input->post('status_kepemilikan');
    $sk_pendirian = $this->input->post('sk_pendirian');
    $tanggal_sk = $this->input->post('tanggal_sk');
    $akreditasi = $this->input->post('akreditasi');
    $alamat = $this->input->post('alamat');
    $telp = $this->input->post('telp');
    $fax = $this->input->post('fax');
    $email = $this->input->post('email');
    $web = $this->input->post('web');
    $data = array(
      'id_sekolah' => $id_sekolah,
      'nama_sekolah' => $nama_sekolah,
      'jenjang' => $jenjang,
      'kepsek' => $kepsek,
      //'latitude' => $latitude,
      //'longitude' => $longitude,
      'id_distrik' => $id_distrik,
      'id_kampung' => $id_kampung,
      'luas_tanah' => $luas_tanah,
      'nss' => $nss,
      'status_kepemilikan' => $status_kepemilikan,
      'sk_pendirian' => $sk_pendirian,
      'tanggal_sk' => $tanggal_sk,
      'akreditasi' => $akreditasi,
      'alamat' => $alamat,
      'telp' => $telp,
      'fax' => $fax,
      'email' => $email,
      'web' => $web,
    );

    $where = array(
      'id_sekolah' => $id_sekolah
    );
    $this->M_profil->update_profil($where,$data,'tb_sekolah');
    $this->session->set_flashdata("update","
              <div class='alert alert-success fade in'>
                  <a href='#' class='close' data-dismiss='alert'>&times;</a>
                  <strong>Success !</strong> Data telah di Ubah!
              </div>");
    redirect('Profil');
  }
  public function edit_lokasi($id_sekolah)
  {
    $data['title'] = 'Edit Lokasi koordinat Sekolah';
    $where = array('id_sekolah' => $id_sekolah);
    $data['profil'] = $this->M_profil->edit_profil($where,'tb_sekolah')->result();

    $this->load->library('googlemaps');
    $config['map_div_id'] = "map-add";
		$config['map_height'] = "250px";
		$config['center'] = '-2.5588092, 140.4749569';
		$config['zoom'] = '12';
		$config['map_height'] = '300px;';
    $config['kmlLayerURL'] = 'http://filemanager.bappeda.jayapurakab.go.id/repository/PENLAP/SEKOLAH/ADMIN_KAMPUNG.kml';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '-2.5588092, 140.4749569';
		$marker['draggable'] = true;
		$marker['ondragend'] = 'setMapToForm(event.latLng.lat(), event.latLng.lng());';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();

    $this->template->load('MasterLayout','edit_lokasi',$data);
  }
  function edit_lokasi_proses()
  {
    $id_sekolah = $this->input->post('id_sekolah');
    $nama_sekolah = $this->input->post('nama_sekolah');
    $latitude = $this->input->post('latitude');
    $longitude = $this->input->post('longitude');

    $data = array(
      'id_sekolah' => $id_sekolah,
      'nama_sekolah' => $nama_sekolah,
      'latitude' => $latitude,
      'longitude' => $longitude,
    );
    $where = array(
      'id_sekolah' => $id_sekolah
    );

    $this->M_profil->update_lokasi($where, $data,'tb_sekolah');
    $this->session->set_flashdata("lokasi_update","
          <div class='alert alert-success fade in'>
            <a href='#' class='close' data-dismiss='alert'>&times;</a>
            <strong>Success !</strong> Data telah di Ubah!
          </div>");
    redirect('Profil');
  }
}
