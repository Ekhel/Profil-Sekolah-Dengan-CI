<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sekolah extends CI_Model{

  function detail_sekolah($id_sekolah)
  {
    $query = $this->db->query("SELECT  *
      FROM tb_sekolah
      LEFT JOIN tb_distrik ON tb_sekolah.id_distrik = tb_distrik.id_distrik
      LEFT JOIN tb_kampung ON tb_sekolah.id_kampung = tb_kampung.id_kampung
      WHERE tb_sekolah.id_sekolah = $id_sekolah");

    return $query->result();
  }
  function sarpras($id_sekolah)
  {
    $query = $this->db->query("SELECT *
      FROM tb_fasilitas
      LEFT JOIN tb_fasilitas_ref ON tb_fasilitas.id_ref = tb_fasilitas_ref.id_ref
      WHERE tb_fasilitas.id_sekolah = '$id_sekolah'
      ORDER BY tb_fasilitas_ref.id_ref");

    return $query->result();
  }
  function guru($id_sekolah)
  {
    $query = $this->db->query("SELECT * FROM tb_guru WHERE id_sekolah = '$id_sekolah'");
    return $query->result();
  }
}
