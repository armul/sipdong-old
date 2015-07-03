<?php
class Organisasi extends CI_Controller {
	public function __construct() {
		parent::__construct();
		session_start();
		if (!isset($_SESSION['auth'])) {
			header('location: /masuk');
		} else {
			$_SESSION['menu_active'] = 'organisasi';
			$_SESSION['submenu'] = array(
				'Struktur Organisasi' => '/organisasi/struktur', 
				'Buku Alamat' => '/organisasi/alamat'
			);
			$_SESSION['submenu_active'] = '/organisasi/struktur';
			$_SESSION['title'] = 'Organisasi';
			$this->load->model('sipdong_model');
			$this->load->model('organisasi_model');
		}
	}
	public function index() {
		$this->load->view('templates/header');
		$this->load->view('organisasi');
		$this->load->view('templates/footer');
	}
	public function alamat() {
		$_SESSION['submenu_active'] = '/organisasi/alamat';
		$data['organisasi'] = $this->organisasi_model->cari_organisasi();
		$this->load->view('templates/header');
		$this->load->view('alamat', $data);
		$this->load->view('templates/footer');
	}
}
?>