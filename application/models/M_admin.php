<?php 
class M_admin extends CI_Model{
	function tampil_data(){
		return $this->db->order_by('NILAI_TOTAL', 'DESC')->get('ADMIN_NILAI');
	}
	function get_data_docx($nama)
	{
		return $this->db->where('NAMA_TIM', $nama)->get('DOCX');
	}
}