<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model {

	function registrasi($data)
	{
		$this->db->insert('masyarakat',$data);		
	}	

}

/* End of file Model_register.php */
/* Location: ./application/models/Model_register.php */