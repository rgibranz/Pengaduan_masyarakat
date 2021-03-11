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

	public function petugas()
	{
		$data['page_name'] = 'List Petugas';

		$data['petugas']   = $this->model_admin->petugas()->result();

		$this->load->view('administrator/petugas',$data);
	}

	public function tambah_petugas()
	{
		$data['page_name'] = 'Tambah Data Petugas';

		$this->load->view('administrator/tambah_petugas',$data);
	}

	public function save_petugas()
	{
		$nama_petugas = $this->input->post('nama');
        $username     = $this->input->post('username');
        $password     = $this->input->post('password');
        $telp         = $this->input->post('telp');
        $level        = $this->input->post('level');

        $data = array(
        	
            "nama_petugas" => $nama_petugas,
            "username"     => $username,
            "password"     => $password,
            "telp"         => $telp,
            "level"        => $level
        );

        $this->model_admin->save_petugas($data);

        redirect(site_url('admin/petugas'));	
	}

	function hapus_petugas($id)
    {
        $where = array('id_petugas' => $id);

        $this->model_admin->hapus_petugas($where);

        redirect('admin/petugas','refresh');
    }
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */