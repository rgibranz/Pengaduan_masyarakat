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

	public function tulis_pengaduan()
	{
		$data['page_name'] = 'Tulis Pengaduan';

		$this->load->view('masyarakat/tulis_pengaduan', $data);
	}

	public function upload()
	{
		$config['upload_path']          = './assets/upload/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = uniqid(); 
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$config['encrypt_name']			= false;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('image'))
		{
			print_r($this->upload->display_errors());
		}
		else
		{
			return $this->upload->data("file_name");
		}
	}

	public function save_pengaduan()
	{
		

		$isi  = $this->input->post('isi');		
		$foto = $this->upload();

		$data = array(
			'tgl_pengaduan' => date("Y-m-d"),
			'nik'           => $this->session->userdata('nik'),
			'isi_laporan'   => $isi,
			'foto'          => $foto,
			'status'        => '0'
		);

		$this->model_masyarakat->save_pengaduan($data);

		redirect('masyarakat','refresh');
		
	}



}

/* End of file Masyarakat.php */
/* Location: ./application/controllers/Masyarakat.php */