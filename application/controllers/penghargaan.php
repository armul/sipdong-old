<?php
class Penghargaan extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('penghargaan_model');
		$_SESSION['submenu'] = array(
			'Rekapitulasi' => '/penghargaan/rekapitulasi',
			'Penilaian' => '/penghargaan/penilaian'
		);
		$_SESSION['title'] = 'Penghargaan Kinerja Pegawai';
	}
	public function index()
	{
		$this->load->view('templates/header-pkp');
		$this->load->view('pkp/default');
		$this->load->view('templates/footer');
	}
	public function rekapitulasi()
	{
		$data['rekapitulasi'] = $this->penghargaan_model->rekapitulasi();
		$this->load->view('templates/header-pkp');
		$this->load->view('pkp/rekap', $data);
		$this->load->view('templates/footer');
	}
	public function penilaian($pegawai = false, $penilai = false)
	{
		if (!$pegawai || !$penilai) {
			if (!isset($_POST['pegawai']) || !isset($_POST['penilai'])) {
			// daftar pegawai
				$data['pegawai'] = $this->penghargaan_model->pilih_pegawai();
				$this->load->view('templates/header-pkp');
				$this->load->view('pkp/daftar', $data);
				$this->load->view('templates/footer');
			} else {
				header('location: /penghargaan/penilaian/' . $this->input->post('pegawai') . '/' . $this->input->post('penilai'));
			}
		} else {
			if (!isset($_POST['nilai'])) {
				// penilaian
				$data['peg_ip'] = $pegawai;
				$data['pen_ip'] = $penilai;
				$data['peg_nama'] = $this->penghargaan_model->lihat_nama($pegawai)->nama;
				$data['pen_nama'] = $this->penghargaan_model->lihat_nama($penilai)->nama;
				$this->load->view('templates/header-pkp');
				$this->load->view('pkp/nilai', $data);
				$this->load->view('templates/footer');
			} else {
				$this->penghargaan_model->simpan_nilai($pegawai, $penilai, $this->input->post('n'));
				$data['message'] = 'Nilai berhasil disimpan.';
				$data['pegawai'] = $this->penghargaan_model->pilih_pegawai();
				$this->load->view('templates/header-pkp');
				$this->load->view('pkp/daftar', $data);
				$this->load->view('templates/footer');
			}
		}
	}
}