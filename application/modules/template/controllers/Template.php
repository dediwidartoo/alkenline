<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Template extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function admin_template($data='')
	{
		$this->load->view('template/admin_template_v', $data);	
	}
}
