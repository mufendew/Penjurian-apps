<?php 
class M_juri extends CI_Model{
	function tampil_data_juri(){
		return $this->db->get('db_juri');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
		return $this->db->get('db_nilai');
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function detail_data($where,$table){		
		return $this->db->get_where($table,$where);
	}	
}