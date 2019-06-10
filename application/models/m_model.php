<?php
class m_model extends CI_model
{
	function tambah_berita($judul_berita, $isi_berita, $tanggal, $kategori){
	$hasil= $this->db->query("INSERT INTO content(judul_berita, isi_berita, tgl_berita, id_kategori) VALUES('$judul_berita', '$isi_berita', '$tanggal', '$kategori')");
	return $hasil;
	}

	function tampil_data_berita(){
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
}
?>