<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Edit extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mdl_edit');
		$this->load->library('session');
		if(!$this->session->userdata('username')){
            redirect('login');
        }
	}

	function index()
	{
		redirect('dashboard','refresh');
	}

	function alumni($id_alumni)
	{
		$data['menu']			= 'Edit Alumni';
		$data['title']			= 'Edit data alumni';
		$data['icon']			= 'fa fa-calendar';
		$where 					= array('id_alumni' => $id_alumni );
		$data['update']			= $this->Mdl_edit->edit_alumni($where,'daftar_alumni')->result();
		$data['content_view']	= 'edit/edit_v';
		$this->template->admin_template($data);
	}
}