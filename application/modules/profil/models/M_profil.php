<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model{

  function get_profil()
  {
    $id_sekolah = $this->session->userdata('id_sekolah');
    $query = $this->db->query("SELECT *
      FROM tb_sekolah
      LEFT JOIN tb_distrik ON tb_sekolah.id_distrik = tb_distrik.id_distrik
      LEFT JOIN tb_kampung ON tb_sekolah.id_kampung = tb_kampung.id_kampung
      WHERE tb_sekolah.id_sekolah = '$id_sekolah'");
    return $query->result();
  }
  function edit_profil($where,$table)
  {
    return $this->db->get_where($table,$where);
  }
  function update_profil($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function update_lokasi($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }
}
