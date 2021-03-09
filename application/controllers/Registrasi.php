<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_register');
    }

	public function index()
	{
		$this->load->view('registrasi');
	}

	public function register()
	{
		$nik      = $this->input->post('nik');
		$nama     = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$telp     = $this->input->post('telp');

		$data_registrasi = array(
			'nik' => $nik,
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'telp' => $telp,
			'status' => 'nonAktif'
		);

		$this->model_register->registrasi($data_registrasi);

		echo '<script>alert("akun anda sudah terdaftar, silahkan hubungi admin untuk di aktifkan")</script>';
		redirect('login','refresh');
	}

}

/* End of file Registrasi.php */
/* Location: ./application/controllers/Registrasi.php */