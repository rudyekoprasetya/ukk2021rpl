<?php

class Pengaduan extends CI_Controller {

	function __construct() {
		parent:: __construct();
		//load Model
		$this->load->model('Model_pengaduan');
	}

	function index() {
		//ambil data
		$data['konten']=$this->Model_pengaduan->getData();
		//tampilkan view data_pengaduan
		$this->load->view('data_pengaduan',$data);
	}

	//tambah data
	function tambah() {
		//untuk dropdown nik
		$data['nik']=$this->Model_pengaduan->getMasyarakat();
		//tampilkan view tambah data
		$this->load->view('tambah_pengaduan',$data);
	}

	// untuk simpan data pengaduan
	function simpan() {
		//ambil data dari form
		$tgl_pengaduan=$this->input->post('tgl_pengaduan');
		$nik=$this->input->post('nik');
		$isi_laporan=$this->input->post('isi_laporan');
		$foto=$this->input->post('foto');
		$status=$this->input->post('status');
		//masukan data dalam array
		$data=array(
			'tgl_pengaduan'=>$tgl_pengaduan,
			'nik'=>$nik,
			'isi_laporan'=>$isi_laporan,
			'foto'=>$foto,
			'status'=>$status
		);
		//panggil fungsi simpan data
		$this->Model_pengaduan->simpanData($data);
		//jika berhasil kembali ke tabel pengaduan
		redirect('pengaduan');

	}

	// fungsi edit data
	function edit() {
		//ambil data url paramater id pengaduan
		$id_pengaduan=$this->uri->segment(3);
		//ambil data dropdown nik
		$data['nik']=$this->Model_pengaduan->getMasyarakat();
		//panggil fungsi cari data 
		$data['konten']=$this->Model_pengaduan->cariData($id_pengaduan);
		
		//tampilkan form edit
		$this->load->view('edit_pengaduan',$data);
	}

	//fungsi ubah data
	function ubah() {
		//ambil data dari form
		$id_pengaduan=$this->input->post('id_pengaduan');
		$tgl_pengaduan=$this->input->post('tgl_pengaduan');
		$nik=$this->input->post('nik');
		$isi_laporan=$this->input->post('isi_laporan');
		$foto=$this->input->post('foto');
		$status=$this->input->post('status');

		//masukan semua data ke array kecuali id
		$data=array(
			'tgl_pengaduan'=>$tgl_pengaduan,
			'nik'=>$nik,
			'isi_laporan'=>$isi_laporan,
			'foto'=>$foto,
			'status'=>$status
		);

		//panggil fungsi ubahData
		$this->Model_pengaduan->ubahData($data,$id_pengaduan);
		//jika berhasil kembali ke tabel pengaduan
		redirect('pengaduan');
	}


	//fungsi hapus data
	function hapus() {
		//ambil id_pengaduan dari url
		$id_pengaduan=$this->uri->segment(3);

		//panggil fungsi hapus data sesuai id pengaduan
		$this->Model_pengaduan->hapusData($id_pengaduan);
		//jika berhasil kembali ke tabel pengaduan
		redirect('pengaduan');
	}



















}