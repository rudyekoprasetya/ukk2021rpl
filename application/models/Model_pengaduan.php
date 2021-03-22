<?php

class Model_pengaduan extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	function getData() {
		//ambil semua data dari tabel pengaduan 
		//SELECT * FROM pengaduan
		$data=$this->db->get('pengaduan');
		return $data;
	}

	function getMasyarakat() {
		//ambil semua data dari tabel masyarakat
		$data=$this->db->get('masyarakat');
		return $data;
	}

	//untuk simpan data
	function simpanData($data) {
		$this->db->insert('pengaduan',$data);
	}


	//untuk cari data yang akan diedit
	function cariData($id_pengaduan) {
		//SELECT * FROM pengaduan WHERE id_pengaduan = '$id_pengaduan'
		$data=$this->db->get_where('pengaduan',array('id_pengaduan'=>$id_pengaduan));
		return $data;
	}

	//untuk update data
	function ubahData($data,$id_pengaduan) {
		//UPDATE pengaduan SET ... WHERE id_pengaduan=$id_pengaduan
		$this->db->where('id_pengaduan',$id_pengaduan);
		$this->db->update('pengaduan',$data);
	}

	//untuk hapus data
	function hapusData($id_pengaduan) {
		//DELETE FROM pengaduan WHERE id_pengaduan=$id_pengaduan
		$this->db->where('id_pengaduan',$id_pengaduan);
		$this->db->delete('pengaduan');
	}




}