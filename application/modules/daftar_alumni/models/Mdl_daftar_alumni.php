<?php

class Mdl_daftar_alumni extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function daftar_alumni()
	{
		$this->db->select('*');
		$this->db->from('daftar_alumni');
		$this->db->order_by('nama_alumni', 'asc');
		$query=$this->db->get();

		$result = $query->result_array();
		return $result;
	}
}