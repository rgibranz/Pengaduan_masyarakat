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

	public function lihat_pengaduan($id_pengaduan)
	{	
		$data['page_name'] = 'Tulis Pengaduan';
		$data['pengaduan'] = $this->model_petugas->get_pengaduan($id_pengaduan)->result();

		$data['tanggapan'] = $this->model_petugas->get_tanggapan($id_pengaduan)->result();

		$this->load->view('petugas/tulis_tanggapan',$data);
	}

	public function save_tanggapan()
	{
		$id  = $this->input->post('id');
		$isi = $this->input->post('isi');

		$data = array(
			'id_pengaduan'  => $id,
			'tgl_tanggapan' => date("Y-m-d"),
			'tanggapan'     => $isi,
			'id_petugas'    => $this->session->userdata('id')
		);

		$this->model_petugas->save_tanggapan($data);

		redirect('petugas/lihat_pengaduan/'.$id);
	} 

	public function proses_pengaduan($id)
	{
		$this->model_petugas->proses_pengaduan($id);

		redirect('petugas','refresh');
	}

	public function selesai_pengaduan($id)
	{
		$this->model_petugas->selesai_pengaduan($id);

		redirect('petugas','refresh');
	}
}

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */