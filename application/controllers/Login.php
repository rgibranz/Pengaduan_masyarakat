<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_login');
    }

	public function index()
	{ 
        $data['page_name'] = 'Administrator';
		$this->load->view('login',$data);
	}

    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $where = array(
            'username' => $username,
            'password' => $password
        );

        $admin_auth      = $this->model_login->get_admin($where)->num_rows();
        $masyarakat_auth = $this->model_login->get_masyarakat($where)->num_rows();
        
        
        if($admin_auth > 0 ){
            $auth = $this->model_login->get_admin($where)->row_array();
            
            if($auth['level']=='admin')
            {
                $data_session = array(
                    'login'    => TRUE,
                    'id'       => $auth['id_petugas'],
                    'nama'     => $auth['nama_petugas'],
                    'username' => $auth['username'],
                    'password' => $auth['password'],
                    'level'    => $auth['level']
                    
                );

                $this->session->set_userdata($data_session);
                $this->session->set_flashdata('status', 'login');
                redirect(site_url('admin'));

            }
            elseif($auth['level'] == 'petugas')
            {
                $data_session = array(
                    'login'    => TRUE,
                    'id'       => $auth['id_petugas'],
                    'nama'     => $auth['nama_petugas'],
                    'username' => $auth['username'],
                    'password' => $auth['password'],
                    'level'    => $auth['level']
                    
                );

                $this->session->set_userdata($data_session);
                $this->session->set_flashdata('status', 'login');
                redirect(site_url('petugas'));
            }
        }
        elseif($masyarakat_auth > 0)
        {
            $auth = $this->model_login->get_masyarakat($where)->row_array();

            if ($auth['status'] != 'aktif') {
            	echo '<script>alert("akun tidak aktif")</script>';
            	redirect(site_url('login'),'refresh');
            }
            
            $data_session = array(
                'login'    => TRUE,
                'nik'      => $auth['nik'],
                'nama'     => $auth['nama'],
                'username' => $auth['username'],
                'level'    => 'masyarakat'
            );

            $this->session->set_userdata($data_session);
            $this->session->set_flashdata('status', 'login');
            redirect(site_url('masyarakat'));

        }else{
            echo 'salah password';
        }
    }

    public function logout()
    {
        $this->session->set_flashdata('status', 'logout');
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }  
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */