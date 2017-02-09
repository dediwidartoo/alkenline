<?php 

class Mdl_edit extends CI_Model
{
	
	function edit_alumni($where,$table)
	{
		return $this->db->get_where($table, $where);
	}
}