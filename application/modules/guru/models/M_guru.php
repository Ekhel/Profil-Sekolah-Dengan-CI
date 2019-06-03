<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model{

  function guru()
  {
    $id_sekolah = $this->session->userdata('id_sekolah');
    $query = $this->db->query("SELECT * FROM tb_guru WHERE id_sekolah = '$id_sekolah'");
    return $query->result();
  }
  function tambah_guru($data)
  {
    $this->db->insert('tb_guru',$data);
  }
  function get_guru($id_guru = 0)
	{
		return $this->db->get_where('tb_guru', array('id_guru' => $id_guru))->row();
	}
  function hapus_guru($id_guru = 0)
  {
    $guru = $this->get_guru($id_guru);
    $this->db->delete('tb_guru', array('id_guru' => $id_guru));
  }
}
