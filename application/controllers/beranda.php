<?php
class Beranda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		session_start();
		if (!isset($_SESSION['auth'])) {
			header('location: /masuk');
		} else {
			$_SESSION['menu_active'] = '';
			$_SESSION['submenu_active'] = '';
			$this->load->model('sipdong_model');
		}
	}
	public function index()
	{
		$data['title'] = 'Beranda';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/footer');
	}
}