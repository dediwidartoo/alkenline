<?php 

class Mdl_input_alumni extends CI_MOdel
{
	
	function input_alumni($data,$table)
	{
		$this->db->insert($table,$data);
	}
}