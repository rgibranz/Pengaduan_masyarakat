<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	function get_admin($where)
    {
        return $this->db->get_where('petugas',$where);
    }
    
    function get_masyarakat($where)
    {
        return $this->db->get_where('masyarakat',$where);
    }

}

/* End of file Model_login.php */
/* Location: ./application/models/Model_login.php */