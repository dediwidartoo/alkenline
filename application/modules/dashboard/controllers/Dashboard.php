<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
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
		if ($this->session->userdata('username') != '')
		{
			$data['menu'] = 'Home';
			$data['title'] = 'Dashboard';
			$data['content_view'] = 'dashboard/dashboard_v';
			$this->template->admin_template($data);
		} else
		{
			// false
			redirect(base_url().'login');
		}
	}
}