<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas extends CI_Model{

  function fasilitas()
  {
    $id_sekolah = $this->session->userdata('id_sekolah');
    $query = $this->db->query("SELECT *
      FROM tb_fasilitas
      JOIN tb_fasilitas_ref ON tb_fasilitas.id_ref = tb_fasilitas_ref.id_ref
      WHERE tb_fasilitas.id_sekolah = '$id_sekolah'
      ORDER BY tb_fasilitas_ref.id_ref");

    return $query->result();
  }
  function tambah_fasilitas($data)
  {
    $this->db->insert('tb_fasilitas',$data);
  }
  function get_fasilitas($id_fasilitas = 0)
	{
		return $this->db->get_where('tb_fasilitas', array('id_fasilitas' => $id_fasilitas))->row();
	}
  function hapus_fasilitas($id_fasilitas = 0)
  {
    $fasilitas = $this->get_fasilitas($id_fasilitas);
    $this->db->delete('tb_fasilitas', array('id_fasilitas' => $id_fasilitas));
  }
}
