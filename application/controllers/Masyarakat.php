<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_masyarakat');

		if ($this->session->userdata('level') != 'masyarakat') {
			echo '<script>alert("Silahkan Login Untuk Mengakses Halaman ini")</script>';
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$pengguna = $this->session->userdata('nik');

		$data['page_name']       = 'Halaman Masyarakat';              

		$data['list_pengaduan']  = $this->model_masyarakat->tanggapan($pengguna)->result();
		$data['pengaduan']       = $this->model_masyarakat->tanggapan($pengguna)->num_rows();
		$data['blm_di_proses']   = $this->model_masyarakat->blm_di_proses($pengguna);
		$data['di_proses']       = $this->model_masyarakat->di_proses($pengguna);
		$data['selesai']         = $this->model_masyarakat->selesai($pengguna);

		$this->load->view('masyarakat/utama',$data);
	}

}

/* End of file Masyarakat.php */
/* Location: ./application/controllers/Masyarakat.php */