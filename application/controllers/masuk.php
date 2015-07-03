<?php
class Masuk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}
	public function index()
	{
		session_start();
		if (!isset($_SESSION['auth'])) {
			// belum login
			if (!isset($_POST['username']) || !isset($_POST['password'])) {
				// belum isi form login, tampilkan
				$data['css'][] = 'login';
				$data['cover'] = true;
				$this->load->view('templates/header', $data);
				$this->load->view('login');
				$this->load->view('templates/footer');
			} else {
				// sudah isi form login, proses
				$login = $this->auth_model->login($_POST['username'], $_POST['password']);
				if ($login === false) {
					$data['message'] = array('type' => 'danger', 'content' => 'Data pengguna Anda tidak sah.');
					$data['css'][] = 'login';
					$data['cover'] = true;
					$this->load->view('templates/header', $data);
					$this->load->view('login');
					$this->load->view('templates/footer');
				} else {
					foreach ($login as $key => $value) {
						$_SESSION[str_replace('peg_', '', $key)] = $key == 'peg_auth' ? explode(',', $value) : $value;
					}
					foreach ($_SESSION['auth'] as $auth) {
						$_SESSION['menu'][] = array('icon' => $this->auth_model->icon[$auth], 'description' => $this->auth_model->proper($auth), 'link' => str_replace('-', '', $auth));
					}
					if ($_SESSION['ref']) {
						header("location: " . $_SESSION['ref']);
					} else {
						header("location: beranda");
					}
				}
			}
		} else {
			// sudah login, tampilkan beranda
			header("location: beranda");
		}
	}
}