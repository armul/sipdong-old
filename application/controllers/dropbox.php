<?php
class Dropbox extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		session_start();
		if (!isset($_SESSION['auth'])) {
			header('location: /masuk');
		} else {
			$_SESSION['menu_active'] = 'dropbox';
			$_SESSION['submenu'] = array(
				'/dropbox/rekamTT' => 'Rekam TT',
				'/dropbox/cetakBA' => 'Cetak BA'
			);
			$_SESSION['submenu_active'] = '';
			$data['title'] = 'Dropbox';
			$this->load->model('dropbox_model');
		}
	}
	public function index()
	{
		$_SESSION['submenu_active'] = 'dropbox/rekamTT';
		$this->load->view('templates/header');
		$this->load->view('dropbox/index');
		$this->load->view('templates/footer');
	}
	public function rekamTT()
	{
		$data['title'] = 'Dropbox / Rekam TT';
		$this->load->view('templates/header', $data);
		$this->load->view('dropbox/form');
		$this->load->view('templates/footer');
		// $this->dropbox_model->db_insert();
	}
	public function cetakBA($db_id = FALSE)
	{
		$data['user'] = $_SESSION;
		$data['dropbox'] = $this->dropbox_model->db_select($db_id);
		$this->load->view('templates/header', $data);
		if ($db_id === FALSE) {
			$this->load->view('dropbox/view', $data);
		} else {
			$data['petugas'] = $this->dropbox_model->peg_select($data['dropbox'][0]['db_ptgs']);
			$this->load->view('dropbox/tt', $data);
		}
		$this->load->view('templates/footer');
		// $this->dropbox_model->db_select();
	}
	public function ubah()
	{
		$this->load->view('templates/header');
		$this->load->view('dropbox/edit');
		$this->load->view('templates/footer');
		// $this->dropbox_model->db_update();
	}
	public function hapus()
	{
		$this->load->view('templates/header');
		$this->load->view('dropbox/delete');
		$this->load->view('templates/footer');
		// $this->dropbox_model->db_delete();
	}
}