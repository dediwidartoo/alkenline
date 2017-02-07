<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Daftar_alumni extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mdl_daftar_alumni');
		$this->load->library('session');
		if(!$this->session->userdata('username')){
            redirect('login');
        }
	}

	function index()
	{
		$data['menu']			= 'Daftar Alumni';
		$data['title']			= 'Alumni SMP Negeri 1 Welahan';
		$data['icon']			= 'fa fa-list';
		$data['konten']			= $this->Mdl_daftar_alumni->daftar_alumni();
		$data['content_view']	= 'daftar_alumni/daftar_alumni_v';
		$this->template->admin_template($data);
	}
}