<?php

class Login extends CI_Controller {

	function __construct() {
		parent:: __construct();
		//load Model Login
		$this->load->model('Model_login');
	}

	function index() {
		//load view login
		$this->load->view('login');
	}

	function cek() {
		//ambil data dari form login
		$username=$this->input->post('username');
		//enkripsi password
		$password=md5($this->input->post('password'));
		//cek dalam Model Login
		$cekdata=$this->Model_login->cek_login($username,$password);
		if($cekdata==TRUE) {
			//masukan data session
			$data=array('username'=>$username, 'logged_in'=>TRUE);
			//save data session di server
			$this->session->set_userdata($data);
			//jika berhasil login ke controller pengaduan
			redirect('pengaduan');
		} else {
			//jika gagal kembali ke login
			redirect('login','refresh');
		}
	}

	//membuat function logout 
	function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		//kembali ke login
		redirect('login','refresh');
	}
}