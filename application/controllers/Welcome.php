<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct(){
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}
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
		$this->load->view('login');
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
		$config['upload_path'] = './assets/gambar/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 0;
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('gambar')){
			echo $this->upload->display_errors();}
			else{
		$data = array('upload_data' => $this->upload->data());
		$arrayData = array(
			'judul_berita'=> $judul_berita,
			'isi_berita' => $isi_berita,
			'tgl_berita' => $tanggal,
			'id_kategori' => $kategori,
			'gambar' => $data['upload_data']['file_name']);
		$insert = $this->m_model->tambah_berita($arrayData);
		if($insert > 0){
			echo "
			<script type='text/javascript'>
			alert('Berita berhasil disimpan');
			window.location.href='tampil_berita';
			</script>";
		}else{
			echo "<script type='text/javascript'>";
			echo "alert('Berita gagal diunggah')";
			echo "</script>";
		}
			}
			
		

	}
	public function tampil_berita()
	{
		$data['user'] = $this->m_model->tampil_data_berita()->result();
		$this->load->view('tables',$data);
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
	public function tampil_login(){
		$this->load->view('login');
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$validate =$this->m_model->proses_login($username,$password);
		if($validate->num_rows()>0){
			echo "
			<script type='text/javascript'>
			alert('Berhasil login');
			window.location.href='tampil_berita';
			</script>";
		}else{
			echo "
			<script type='text/javascript'>
			alert('Tetot.. gagal login');
			window.location.href='tampil_login';
			</script>";
		}


	}
	public function tampil_depan(){
		$data['user'] = $this->m_model->tampil_data_berita()->result();
		$this->load->view('index_berita', $data);
	}
}
