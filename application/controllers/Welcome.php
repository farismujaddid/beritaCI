<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('dashboard');
	}
	public function tambah_berita()
	{
		$this->load->view('dashboard');
	}
	public function inputdata()
	{
		$judul_berita = $this->input->post('judul');
		$isi_berita = $this->input->post('isi');
		$tanggal = $this->input->post('tgl');
		$kategori = $this->input->post('kategori');

		$this->m_model->tambah_berita($judul_berita, $isi_berita, $tanggal, $kategori);

	}
	public function tampil_berita()
	{
		$data['user'] = $this->m_model->tampil_data_berita()->result();
		$this->load->view('tampil',$data);
	}

	public function hapus_berita($id)
	{
		$where= array('id_berita' => $id);
		$this->m_model->hapus_data_berita($where,'content');
		redirect('index.php/welcome/tampil_berita');
	}
	public function pindah_berita($id)
	{
		$where= array('id_berita' => $id);
		$data['user'] = $this->m_model->edit_data_berita($where,'content')->result();
		$this->load->view('edit',$data);
	}
	public function edit_data()
	{
		$id = $this->input->post('id');
		$judul_berita = $this->input->post('judul');
		$isi_berita = $this->input->post('isi');
		$tanggal = $this->input->post('tgl');
		$kategori = $this->input->post('kategori');

		$data=array(
		'judul_berita'=>$judul_berita,
		'isi_berita'=>$isi_berita,
		'tgl_berita'=>$tanggal,
		'id_kategori' => $kategori
		);
		$where=array('id_berita' => $id);
		$this->m_model->edit_berita($where,$data,'content');
		redirect('index.php/welcome/tampil_berita');
	}
}
