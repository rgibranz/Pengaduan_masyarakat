<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_petugas extends CI_Model {

	function pengaduan()
	{
		return $this->db->get('pengaduan');
	}

	function blm_di_proses()
	{
		
		return $this->db->get_where('pengaduan', array('status' => '0'))->num_rows();
	}

	function di_proses()
	{
		
		return $this->db->get_where('pengaduan', array('status' => 'proses'))->num_rows();
	}

	function selesai()
	{
		
		return $this->db->get_where('pengaduan',  array('status' => 'selesai'))->num_rows();
	}	
	
	function get_pengaduan($id_pengaduan)
	{
		return $this->db->where('id_pengaduan',$id_pengaduan)->get('pengaduan');
	}

	function get_tanggapan($id_pengaduan)
	{
		return $this->db->where('id_pengaduan',$id_pengaduan)->get('tanggapan');
	}

	function save_tanggapan($data)
	{
		$this->db->insert('tanggapan', $data);
	}

	function proses_pengaduan($id)
	{
		$data = array('status' => 'proses');

		$this->db->where('id_pengaduan',$id)->update('pengaduan', $data);
	}

	function selesai_pengaduan($id)
	{
		$data = array('status' => 'selesai');

		$this->db->where('id_pengaduan',$id)->update('pengaduan', $data);
	}
	
}

/* End of file Model_masyarakat.php */
/* Location: ./application/models/Model_masyarakat.php */