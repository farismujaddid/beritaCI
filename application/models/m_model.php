<?php
class m_model extends CI_model
{
	public function tambah_berita($arrayData){
		$this->db->insert('content',$arrayData);
		return $this->db->affected_rows();
	}

	function tampil_data_berita(){
		$this->db->order_by('tgl_berita', 'desc');
		return $this->db->get('content');
	}
	function hapus_data_berita($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_berita($where,$table){
		return $this->db->get_where($table,$where);
	}
	function edit_berita($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function getlist_berita(){
		$this->db->select('*');
		$this->db->from('content');
		$this->db->order_by('tgl_berita', 'desc');
		return $this->db->get()->result();
	}
	public function getdetail_berita($id){
		$this->db->select('*');
		$this->db->from('content');
		$this->db->where('id_berita', $id);
		return $this->db->get()->result();
	}
	public function getcari_berita($kata_kunci){
		$this->db->select('*');
		$this->db->from('content');
		$this->db->like('judul_berita', $kata_kunci);
		return $this->db->get()->result();
	}
	public function proses_login($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('user');
	}
}
?>