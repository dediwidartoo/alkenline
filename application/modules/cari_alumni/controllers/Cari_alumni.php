<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Cari_alumni extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if(!$this->session->userdata('username')){
            redirect('login');
        }
	}

	function index()
	{
		$data['menu']			= 'Cari Alumni';
		$data['title']			= 'Pencarian Alumni SMP Negeri 1 Welahan';
		$data['icon']			= 'fa fa-search';
		$data['content_view']	= 'cari_alumni/cari_alumni_v';
		$this->template->admin_template($data);
	}
}