<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_masyarakat extends CI_Model {

	function tanggapan($pengguna)
	{
		$where = array('nik' => $pengguna);
		return $this->db->get_where('pengaduan',$where);
		
	}

	function blm_di_proses($pengguna)
	{
		$where = array(
			'nik'    => $pengguna,
			'status' => '0'
		);
		return $this->db->get_where('pengaduan',$where)->num_rows();
	}

	function di_proses($pengguna)
	{
		$where = array(
			'nik'    => $pengguna,
			'status' => 'proses'
		);
		return $this->db->get_where('pengaduan',$where)->num_rows();
	}

	function selesai($pengguna)
	{
		$where = array(
			'nik'    => $pengguna,
			'status' => 'selesai'
		);
		return $this->db->get_where('pengaduan',$where)->num_rows();
	}	

	function save_pengaduan	($data)
	{
		$this->db->insert('pengaduan',$data);
	}

	function get_file($id)
	{
		return $this->db->where('id_pengaduan',$id)->get('pengaduan')->row();
	}

	function hapus_pengaduan($where)
	{
		$this->db->delete('pengaduan', $where);
	}

}

/* End of file Model_masyarakat.php */
/* Location: ./application/models/Model_masyarakat.php */