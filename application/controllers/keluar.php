<?php
class Keluar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}
	public function index()
	{
		session_start();
		$this->auth_model->logout();
	}
}