<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mdl_login');
		$this->load->library('session');
	}

	function index()
	{
		if ($this->session->userdata('username') != '') {
			redirect('dashboard');
		} else {
			$this->load->view('login_v');
		}
	}

	function validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', 'Username dan Password harus diisi');
			redirect('login');
		} else {
			$username 	= $this->input->post('username');
			$password	= $this->input->post('password');
			$valid 		= $this->Mdl_login->cek_validation($username, md5($password));

			if ($valid->num_rows()>0) {
				foreach ($valid->result() as $session) {
					$data_session['id']			= $session->id_user;
					$data_session['nama']		= $session->nama;
					$data_session['username']	= $session->username;
					$data_session['password']	= $session->password;

					$this->session->set_userdata($data_session);
				}
				redirect('dashboard');
			}else {
				$this->session->set_flashdata('message', 'Username atau Password salah');
				redirect('login');
			}

		}
	}
}