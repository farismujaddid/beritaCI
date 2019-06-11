<?php

class Json extends CI_Controller
{
	public function index(){
		$berita = $this->m_model->getlist_berita();
		$data['data'] = array();
		$response= array();
		if(sizeof($berita)>0){
			foreach ($berita as $content) {
				$response['id']=$content->id_berita;
				$response['judul']=$content->judul_berita;
				$response['isi_berita']=$content->isi_berita;
				$response['gambar']=$content->gambar;
				$response['tanggal_berita']=date_format(date_create($content->tgl_berita), "d/m/y H:i");
				$response['kategori']=$content->id_kategori;
				array_push($data['data'], $response);
			}
			echo json_encode($data);
		}else{
			echo json_encode($data);
		}
	}
	public function detail_berita($id=null){
		$berita = $this->m_model->getdetail_berita($id);
		$data['data'] = array();
		$response= array();
		if(sizeof($berita)>0){
			foreach ($berita as $key => $content) {
				$response['id']=$content->id_berita;
				$response['judul']=$content->judul_berita;
				$response['isi_berita']=$content->isi_berita;
				$response['gambar']=$content->gambar;
				$response['tanggal_berita']=date_format(date_create($content->tgl_berita), "d/m/y H:i");
				$response['kategori']=$content->id_kategori;
				array_push($data['data'], $response);
			}
			echo json_encode($data);
		}else{
			echo json_encode($data);
		}
	}
	public function cari_berita(){
		$berita = $this->m_model->getcari_berita($this->input->get('judul'));
		$data['data'] = array();
		$response= array();
		if(sizeof($berita)>0){
			foreach ($berita as $key => $content) {
				$response['id']=$content->id_berita;
				$response['judul']=$content->judul_berita;
				$response['isi_berita']=$content->isi_berita;
				$response['gambar']=$content->gambar;
				$response['tanggal_berita']=date_format(date_create($content->tgl_berita), "d/m/y H:i");
				$response['kategori']=$content->id_kategori;
				array_push($data['data'], $response);
			}
			echo json_encode($data);
		}else{
			echo json_encode($data);
		}
	}
	}