<?php
class Pemeriksaan extends CI_Controller {
	public function __construct() {
		parent::__construct();
		session_start();
		if (!isset($_SESSION['auth'])) {
			$_SESSION['ref'] = $_SERVER['REQUEST_URI'];
			header('location: /masuk');
		} else {
			$_SESSION['menu_active'] = 'pemeriksaan';
			if ($_SESSION['es4'] == '05') {
				$_SESSION['submenu'] = array(
					'Pengecekan SPTLB' => '/pemeriksaan/sptlb',
					'Agenda SP2' => '/pemeriksaan/sp2',
					'Agenda SPHP' => '/pemeriksaan/sphp',
					'Agenda LHP' => '/pemeriksaan/lhp',
					'Agenda SKP' => '/pemeriksaan/skp',
					'Pengawasan Restitusi' => '/pemeriksaan/restitusi',
					'Persediaan Pemeriksaan' => '/pemeriksaan/persediaan',
					'Tunggakan Pemeriksaan' => '/pemeriksaan/tunggakan'
				);
				$_SESSION['submenu_active'] = '';
			}
			if ($_SESSION['esl'] == 'F') {
				$_SESSION['submenu'] = array(
					'Tunggakan Pemeriksaan' => '/pemeriksaan/tunggakan/' . $_SESSION['ip'],
					'Penyelesaian Pemeriksaan' => '/pemeriksaan/penyelesaian/' . $_SESSION['ip']
				);
				$_SESSION['submenu_active'] = '';
			}
			$_SESSION['title'] = 'Pemeriksaan';
			$this->load->model('sipdong_model');
			$this->load->model('pemeriksaan_model');
		}
	}
	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
	}
	public function sptlb() {
		$_SESSION['submenu_active'] = '/pemeriksaan/sptlb';
		$this->load->view('templates/header');
		if (isset($_POST['simpan'])) {
			$data['sptlb'] = $this->pemeriksaan_model->sptlb_simpan();
			$this->load->view('pemeriksaan/sptlb', $data);
		} else {
			$this->load->view('pemeriksaan/sptlb');
		}
		$this->load->view('templates/footer');
	}
	public function khusus() {
		$data['riksus'] = $this->pemeriksaan_model->riksus();
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/khusus', $data);
		$this->load->view('templates/footer');
	}
	public function labelLHP($buku = 'R') {
		$xml = $this->pemeriksaan_model->label_lhp($buku);
		$this->sipdong_model->cetak($xml, 'LabelLHP', 'LHP');
	}
	public function lp2m() {
		if (isset($_POST['simpan'])) {
			$this->pemeriksaan_model->lp2m_simpan();
		}
		$data['lp2m'] = $this->pemeriksaan_model->lp2m_lihat();
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/lp2_massal', $data);
		$this->load->view('templates/footer');
	}
	public function jtpm() {
		if (isset($_POST['simpan'])) {
			$this->pemeriksaan_model->jtpm_simpan();
		}
		$data['jtpm'] = $this->pemeriksaan_model->jtpm_lihat();
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/jtp_massal', $data);
		$this->load->view('templates/footer');
	}
	public function rekamSP2($supervisor = false) {
		if (isset($_POST['simpan'])) {
			$this->pemeriksaan_model->simpanSP2();
		}
		$data['calonSP2'] = $this->pemeriksaan_model->rekamSP2($supervisor);
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/rekamSP22', $data);
		$this->load->view('templates/footer');
	}
	public function rekamND($fungsi = false) {
		if ($fungsi == 'cetak') {
			$xml = $this->pemeriksaan_model->cetakND();
			$this->sipdong_model->cetak($xml, 'NDAP1', 'NDAuditPlan');
		}
		if (isset($_POST['simpan'])) {
			$this->pemeriksaan_model->simpanND();
		}
		$data['maksND'] = $this->pemeriksaan_model->maksND()->maksND;
		$data['bebanSP2'] = $this->pemeriksaan_model->bebanSP2();
		$data['calonND'] = $this->pemeriksaan_model->rekamND();
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/rekamND', $data);
		$this->load->view('templates/footer');
	}
	public function lhp($buku = 'riksis', $tahun = false) {
		$_SESSION['title'] .= ' / LHP';
		$_SESSION['submenu_active'] = '/pemeriksaan/lhp';
		$data['buku'] = ucfirst($buku);
		$data['tahun'] = $tahun ? $tahun : date('Y');
		$data['lhp'] = $this->pemeriksaan_model->cari_lhp($buku, $data['tahun']);
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/lhp', $data);
		$this->load->view('templates/footer');
	}
	public function sphp($buku = 'riksis', $tahun = false) {
		$_SESSION['title'] .= ' / SPHP';
		$_SESSION['submenu_active'] = '/pemeriksaan/sphp';
		$data['buku'] = ucfirst($buku);
		$data['tahun'] = $tahun ? $tahun : date('Y');
		$data['sphp'] = $this->pemeriksaan_model->cari_sphp($buku, $data['tahun']);
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/sphp', $data);
		$this->load->view('templates/footer');
	}
	public function sp2($buku = 'riksis', $tahun = false, $no = false) {
		$_SESSION['title'] .= ' / SP2';
		$_SESSION['submenu_active'] = '/pemeriksaan/sp2';
		$data['css'] = array('morris');
		$data['js'] = array('morris.min', 'raphael-min');
		$data['tailscript'] = "new Morris.Bar({
element: 'sp2terbit',
data: [
	{ bulan: 'Jan', jumlah: 17 },
	{ bulan: 'Feb', jumlah: 20 },
	{ bulan: 'Mar', jumlah: 30 },
	{ bulan: 'Apr', jumlah: 40 },
	{ bulan: 'Mei', jumlah: 4 },
	{ bulan: 'Jun', jumlah: 19 },
	{ bulan: 'Jul', jumlah: 4 },
	{ bulan: 'Ags', jumlah: 25 },
	{ bulan: 'Sep', jumlah: 25 },
	{ bulan: 'Okt', jumlah: 12 },
	{ bulan: 'Nov', jumlah: 29 },
	{ bulan: 'Des', jumlah: 4 }
],
xkey: 'bulan',
ykeys: ['jumlah'],
labels: ['SP2 Terbit'],
hideHover: 'always',
barColors: ['#1abc9c']
});";
		if (!$no) {
			$this->load->view('templates/header', $data);
			/*if (!$buku) {
				$data['ikhtisar'] = $this->pemeriksaan_model->ikhtisarSP2();
				$this->load->view('pemeriksaan/ikhtisarSP2', $data);
			} else {*/
				$data['buku'] = ucfirst($buku);
				$data['tahun'] = $tahun ? $tahun : date('Y');
				$data['sp2'] = $this->pemeriksaan_model->cari_sp2($buku, $data['tahun']);
				//$data['stat'] = $this->pemeriksaan_model->sp2_statistik($data['buku'], $data['tahun']);
				$this->load->view('pemeriksaan/sp2', $data);
			//}
			$this->load->view('templates/footer');
		} else {
			$no = $no == 'cetak' ? false : $no;
			$xml = $this->pemeriksaan_model->cetak_sp2(substr(ucfirst($buku), 0, 1), $tahun ? $tahun : date('Y'), $no);
			$this->sipdong_model->cetak($xml, 'SP2', 'PRIN-' . ($no ? str_pad($no, 5, '0', STR_PAD_LEFT) : 'Massal') . 'WPJ.27KP.0105' . substr(ucfirst($buku), 0, 1) . $tahun);
		}
	}
	public function skp($buku = 'riksis', $tahun = false) {
		$_SESSION['title'] .= ' / SKP';
		$_SESSION['submenu_active'] = '/pemeriksaan/skp';
		$data['buku'] = ucfirst($buku);
		$data['tahun'] = $tahun ? $tahun : date('Y');
		$data['skp'] = $this->pemeriksaan_model->skp_daftar(substr($data['buku'], 0, 1), $data['tahun']);
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/skp', $data);
		$this->load->view('templates/footer');
	}
	public function riwayat($npwp = false) {
		if (isset($_POST['npwp'])) {
			$npwp = str_replace(array(' ', '.', '-'), array('', '', ''), $_POST['npwp']);
			header('location: /pemeriksaan/riwayat/' . $npwp);
		}
		$_SESSION['title'] .= ' / Riwayat Pemeriksaan';
		$data['riwayat'] = $this->pemeriksaan_model->cari_riwayat($npwp);
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/riwayat', $data);
		$this->load->view('templates/footer');
	}
	public function notadinas($nd_no = false) {
		$this->load->view('templates/header');
		if ($nd_no) {
			$data['nd'] = $this->pemeriksaan_model->lihat_nd($nd_no);
			$this->load->view('pemeriksaan/buatnd', $data);
		} else {
			$this->load->view('pemeriksaan/buatnd');
		}
		$this->load->view('templates/footer');
	}
	public function lp2($lp2_no) {
		if (isset($_POST['simpan'])) {
			$this->pemeriksaan_model->lp2_simpan($lp2_no);
		}
		$data['pemeriksaan'] = $this->pemeriksaan_model->lp2_lihat($lp2_no);
		$data['sp2p'] = $this->pemeriksaan_model->sp2p_lihat($data['pemeriksaan']->rik_sp2_buku, $data['pemeriksaan']->rik_sp2_no, $data['pemeriksaan']->rik_sp2_tgl);
		$data['skp'] = $this->pemeriksaan_model->skp_lihat($data['pemeriksaan']->rik_lhp_buku, $data['pemeriksaan']->rik_lhp_no, $data['pemeriksaan']->rik_lhp_tgl);
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/lp2', $data);
		$this->load->view('templates/footer');
	}
	public function dafnom() {
		$data['dafnom'] = $this->pemeriksaan_model->dafnom_otomatis();
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/dafnom', $data);
		$this->load->view('templates/footer');
	}
	public function usulan($usl_no = false) {
		$this->load->view('templates/header');
		if (!$usl_no) {
			$data['usulan'] = $this->pemeriksaan_model->usulan_daftar();
			$this->load->view('pemeriksaan/usulan', $data);
		} else {
			$data['usulan'] = $this->pemeriksaan_model->usulan_rinci($usl_no);
			$this->load->view('pemeriksaan/usulanrinci', $data);
		}
		$this->load->view('templates/footer');
	}
	public function tunggakan($nip = false) {
		$_SESSION['submenu_active'] = '/pemeriksaan/tunggakan';
		if ($nip) {
			$data['tunggakan'] = $this->pemeriksaan_model->cari_tunggakan($nip);
		} else {
			$data['tunggakan'] = $this->pemeriksaan_model->cari_tunggakan();
		}
		$data['nip'] = $nip;
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/tunggakan', $data);
		$this->load->view('templates/footer');
	}
	public function penyelesaian($nip = false) {
		$_SESSION['submenu_active'] = '/pemeriksaan/penyelesaian';
		if ($nip) {
			$data['penyelesaian'] = $this->pemeriksaan_model->cari_penyelesaian($nip);
		} else {
			$data['penyelesaian'] = $this->pemeriksaan_model->cari_penyelesaian();
		}
		$data['nip'] = $nip;
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/penyelesaian', $data);
		$this->load->view('templates/footer');
	}
	public function restitusi() {
		$_SESSION['submenu_active'] = '/pemeriksaan/restitusi';
		$data['restitusi'] = $this->pemeriksaan_model->restitusi();
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/restitusi', $data);
		$this->load->view('templates/footer');
	}
	public function persediaan() {
		if (isset($_POST['simpan'])) {
			//$this->pemeriksaan_model->dafnom_simpan();
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
		}
		$_SESSION['submenu_active'] = '/pemeriksaan/persediaan';
		$data['persediaan'] = $this->pemeriksaan_model->persediaan();
		$this->load->view('templates/header');
		$this->load->view('pemeriksaan/persediaan', $data);
		$this->load->view('templates/footer');
	}
}
?>