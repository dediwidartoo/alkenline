<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_login extends CI_Model
{
	function cek_validation($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('users');
	}
}