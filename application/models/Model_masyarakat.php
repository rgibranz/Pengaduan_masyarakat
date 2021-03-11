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

	function get_pengaduan($where)
	{
		return $this->db->get_where('pengaduan',$where)->result();	
	}

	function update_pengaduan($where,$data)
	{
		$this->db->where($where);
		$this->db->update('pengaduan',$data);
	}
}

/* End of file Model_masyarakat.php */
/* Location: ./application/models/Model_masyarakat.php */