<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_petugas');

		if ($this->session->userdata('level') != 'petugas') {
			echo '<script>alert("Silahkan Login Untuk Mengakses Halaman ini")</script>';
			redirect('login','refresh');
		}
	}

	public function index()
	{
		
	}

}

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */