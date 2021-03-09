<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');

		if ($this->session->userdata('level') != 'admin') {
			echo '<script>alert("Silahkan Login Untuk Mengakses Halaman ini")</script>';
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$data['page_name']       = 'Halaman Admin';

		$data['petugas']         = $this->model_admin->petugas()->num_rows();
		$data['jumlah_admin']    = $this->model_admin->jumlah_admin();
		$data['jumlah_petugas']  = $this->model_admin->jumlah_petugas();

		$data['masyarakat']      = $this->model_admin->masyarakat()->num_rows();
		$data['jumlah_aktif']    = $this->model_admin->jumlah_aktif();
		$data['jumlah_nonaktif'] = $this->model_admin->jumlah_nonaktif();

		$this->load->view('administrator/admin',$data);	
	}


}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */