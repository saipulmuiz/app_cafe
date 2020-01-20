<?php 
 
class m_login extends CI_Model{	
	private $_table = "user";
	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
}