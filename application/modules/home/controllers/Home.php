<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller{
  public function __construct()
	{
			parent::__construct();
			//$this->load->model('M_home');
	}
  public function index()
  {
    $data['title'] = 'Beranda';
    $this->template->load('MasterLayout','home',$data);
  }
  function getkampung($id_distrik)
  {
    $result = $this->db->where("id_distrik",$id_distrik)->get("tb_kampung")->result();
    echo json_encode($result);
  }
  public function peta_sekolah()
  {
    $data['title'] = 'Peta Sekolah';

    $this->load->library('googlemaps');
    $data['distrik'] = $this->db->query("SELECT * FROM tb_distrik")->result();
    //$config['kmlLayerURL'] = 'http://filemanager.bappeda.jayapurakab.go.id/repository/PENLAP/KML/ADMIN_KAMPUNG_MONITORING.kml';
		$config['center'] = '-2.5588092, 140.4749569';
		$config['zoom'] = '10';
		$config['styles'] = array(
		  	array(
		  		"name"=>"No Businesses",
		  		"definition"=> array(
		   			array(
		   				"featureType"=>"poi",
		   				"elementType" =>
		   				"business",
		   				"stylers"=> array(
		   					array(
		   						"visibility"=>"off"
		   					)
		   				)
		   			)
		  		)
		  	)
		);
    $this->googlemaps->initialize($config);
		foreach($this->data_sekolah() as $key => $value) :
		$marker = array();
		$marker['position'] = "{$value->latitude}, {$value->longitude}";
    $marker['animation'] = 'DROP';
		$marker['infowindow_content'] = '<div class="static-table-list" style="width:400px;">';
		$marker['infowindow_content'] .= '<div class="data-table-area mg-b-40">';
		$marker['infowindow_content'] .= '<table class="table table-bordered">';
		$marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'Sekolah';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong><a class="btn btn-primary btn-sm text-uppercase" title="Lihat Detail Sekolah" href="'.base_url("Sekolah/detail_sekolah/{$value->id_sekolah}").'"target="_blank">'.$value->nama_sekolah.'</strong></a>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
		$marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'NSS';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong>' .$value->nss.'<strong>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
    $marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'Kepsek';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong>' .$value->kepsek.'<strong>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
    $marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'Alamat';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong>' .$value->alamat.'<strong>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
		$marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'telefon';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong>' .$value->telp.'<strong>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
		$marker['infowindow_content'] .= '</table>';
		$marker['infowindow_content'] .= '</div>';
		$marker['infowindow_content'] .= '</div>';
		$marker['icon'] = base_url("assets/img/icon/pin.png");
		$this->googlemaps->add_marker($marker);
		endforeach;

    $this->googlemaps->initialize($config);
		$data['map'] = $this->googlemaps->create_map();
    $this->template->load('MasterLayout','peta-sekolah',$data);
  }
  function data_sekolah()
  {
    $query = $this->db->query("SELECT * FROM tb_sekolah");
    return $query->result();
  }
  public function test_table()
  {
    $data['title'] = 'Test Data Maps ON Table';
    $this->template->load('MasterLayout','datatable',$data);

  }
  
}
