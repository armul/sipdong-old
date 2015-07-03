<?php
class Pegawai extends CI_Controller {
	public function __construct() {
		parent::__construct();
		session_start();
		if (!isset($_SESSION['auth'])) {
			header('location: /masuk');
		} else {
			$_SESSION['menu_active'] = 'pegawai';
			$_SESSION['submenu'] = array();
			$_SESSION['submenu_active'] = '';
			$_SESSION['title'] = 'Pegawai';
			$this->load->model('sipdong_model');
			$this->load->model('pegawai_model');
		}
	}
	public function index() {
	}
	public function kpp($kode = '331') {
		$data['pegawai'] = $this->pegawai_model->cari_pegawai($kode);
		$data['kantor'] = $this->pegawai_model->cari_kantor($kode);
		$this->load->view('templates/header');
		$this->load->view('pegawai', $data);
		$this->load->view('templates/footer');
	}
}
?>