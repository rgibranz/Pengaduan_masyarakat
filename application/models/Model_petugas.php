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

	
}

/* End of file Model_masyarakat.php */
/* Location: ./application/models/Model_masyarakat.php */