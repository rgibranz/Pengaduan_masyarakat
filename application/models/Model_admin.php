<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	function petugas()
	{
		return $this->db->get('petugas');
	}

	function jumlah_admin()
	{
		return $this->db->where('level', 'admin')->get('petugas')->num_rows();
	}

	function jumlah_petugas()
	{
		return $this->db->where('level', 'petugas')->get('petugas')->num_rows();
	}

	function masyarakat()
	{
		return $this->db->get('masyarakat');
	}

	function jumlah_aktif()
	{
		return $this->db->where('status', 'aktif')->get('masyarakat')->num_rows();
	}

	function jumlah_nonaktif()
	{
		return $this->db->where('status', 'nonAktif')->get('masyarakat')->num_rows();
	}	

	function save_petugas($data)
	{
		$this->db->insert('petugas',$data);
	}

	function hapus_petugas($where)
	{
		$this->db->delete('petugas', $where);
	}

	function get_petugas_by_id($where)
	{
		return $this->db->get_where('petugas',$where);
	}

	function update_petugas($where,$data)
	{
		$this->db->where($where);
		$this->db->update('petugas',$data);
	}

	function verifikasi_user($where,$data)
	{
		$this->db->where($where);
		$this->db->update('masyarakat',$data);
	}
}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */