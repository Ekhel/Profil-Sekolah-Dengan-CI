<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends MX_Controller{
  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_sekolah');
	}
  public function detail_sekolah($id_sekolah)
  {
    $data['title'] = 'Indetitas Sekolah';
    $data['sekolah'] = $this->M_sekolah->detail_sekolah($this->uri->segment(3));
    $data['fasilitas'] = $this->M_sekolah->sarpras($id_sekolah);
    $data['guru'] = $this->M_sekolah->guru($id_sekolah);
    $this->template->load('MasterLayout','sekolah',$data);
  }
}
