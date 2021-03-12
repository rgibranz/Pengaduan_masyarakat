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

		$data['page_name']       = 'Halaman Petugas';
		$data['list_pengaduan']  = $this->model_petugas->pengaduan()->result();
		$data['pengaduan']       = $this->model_petugas->pengaduan()->num_rows();
		$data['blm_di_proses']   = $this->model_petugas->blm_di_proses();
		$data['di_proses']       = $this->model_petugas->di_proses();
		$data['selesai']         = $this->model_petugas->selesai();
		
		$this->load->view('petugas/utama', $data);
	}

	public function tulis_tanggapan()
	{
		$data['pengaduan'] = $this->model_petugas->pengaduan()->result();

		$this->load->view('petugas/admin')
	}

}

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */