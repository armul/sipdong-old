<?php
class Tatausaha extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		session_start();
		if (!isset($_SESSION['auth'])) {
			header('location: /masuk');
		} else {
			$_SESSION['menu_active'] = 'tatausaha';
			$_SESSION['submenu'] = array(
				'Surat Masuk' => '/tatausaha/suratmasuk',
				'Surat Keluar' => '/tatausaha/suratkeluar'
			);
			$_SESSION['submenu_active'] = '';
			$_SESSION['title'] = 'Tata Usaha';
			$this->load->model('sipdong_model');
			$this->load->model('tatausaha_model');
		}
	}
	public function index()
	{
		$this->suratmasuk();
		//$this->load->view('templates/footer');
	}
	public function suratmasuk($th = false, $no = false)
	{
		$_SESSION['submenu_active'] = '/tatausaha/suratmasuk';
		if (isset($_POST['tu_sm_simpan'])) {
			unset($_POST['tu_sm_simpan']);
			foreach ($_POST as $field => $value) {
				if ($field == 'tu_sm_tgsrt') {
					$data[$field] = $this->sipdong_model->toYmd($value);
				} else {
					$data[$field] = $value;
				}
			}
			$data['tu_sm_es4'] = $_SESSION['es4'];
			$data['tu_sm_th'] = date('Y');
			$this->db->insert('sip_tu_sm', $data);
		}
		$this->load->view('templates/header');
		if (!$th && !$no) {
			// baru
			$this->load->view('tatausaha/sm_baru');
		} elseif (!$no) {
			// agenda
			$data['sm'] = $this->tatausaha_model->sm_lihat($th);
			$data['th'] = $th;
			$this->load->view('tatausaha/sm_daftar', $data);
		} else {
			// rinci
			$data['sm'] = $this->tatausaha_model->sm_lihat($th, $no);
			$data['th'] = $th;
			$data['no'] = $no;
			$this->load->view('tatausaha/sm_rinci', $data);
		}
		$this->load->view('templates/footer');
	}
	public function suratkeluar($buku = false, $tahun = false)
	{
		$_SESSION['submenu_active'] = '/tatausaha/suratkeluar';
		$this->load->view('templates/header');
		if ($buku && $tahun) {
			$data['suratkeluar'] = $this->tatausaha_model->sk_daftar($buku, $tahun);
			$this->load->view('tatausaha/sk', $data);
		} else {
			$this->load->view('tatausaha/konsep');
		}
		$this->load->view('templates/footer');
	}
}