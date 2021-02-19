<?php
class Model_Admin extends CI_Model
{

	
	function cariview($table,$where){
		return $this->db->get_where($table,$where);
	}
	
	function tampil($table)
	{
		return $this->db->get($table);
	}
	
	function ins($table,$data){
		$this->db->insert($table,$data);
	}
	
	function hps($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function update($table,$data,$where)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	
}