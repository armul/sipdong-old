<?php
class Tatausaha_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
		setlocale(LC_TIME, "id_ID");
	}
	public function sk_daftar($buku, $tahun)
	{
		$where = array('tu_sk_buku' => $buku, 'tu_sk_th' => $tahun);
		$this->db->order_by("tu_sk_nosrt", "asc"); 
		$query = $this->db->get_where('sip_tu_sk', $where);
		return $query->result_array();
	}
	public function sm_lihat($th, $no = false)
	{
		$where = array(
			'tu_sm_es4' => $_SESSION['es4'],
			'tu_sm_th' => $th
		);
		if ($no) {
			$where['tu_sm_noagd'] = $no;
		}
		/*if ($clue !== false) {
			if (preg_match('/^\d{1,5}$/', $clue)) {
				$where['tu_sm_noagd'] = $clue;
			} elseif (preg_match('/\d{15}/', $clue)) {
				$where['tu_sm_npwp'] = $clue;
			} elseif (preg_match('/\d{9}/', $clue)) {
				$where['tu_sm_pemroses'] = $clue;
			} elseif (preg_match('/[A-Za-z ]+/', $clue)) {
				$where['tu_sm_pengirim'] = urldecode($clue);
			}
		}*/
		$this->db->group_by('tu_sm_noagd');
		$this->db->order_by('tu_sm_noagd');
		$query = $this->db->get_where('sip_tu_sm', $where);
		return $query->result_array();
	}
	public function formatNPWP($npwp)
	{
		if (strlen($npwp) != 15)
		{
			return $npwp;
		}
		return substr($npwp, 0, 2) . '.' . substr($npwp, 2, 3) . '.' . substr($npwp, 5, 3) . '.' . substr($npwp, 8, 1) . '-' . substr($npwp, 9, 3) . '.' . substr($npwp, 12, 3);
	}
	public function formatTanggal($tanggalMySQL)
	{
		$bl = array('-01-', '-02-', '-03-', '-04-', '-05-', '-06-', '-07-', '-08-', '-09-', '-10-', '-11-', '-12-');
		$bulan = array(' Januari ', ' Februari ', ' Maret ', ' April ', ' Mei ', ' Juni ', ' Juli ', ' Agustus ', ' September ', ' Oktober ', ' November ', ' Desember ');
		return str_replace($bl, $bulan, strftime('%#d-%m-%Y', strtotime($tanggalMySQL)));
	}
	public function formatMasa($m1m2)
	{
		$bulan = array(
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember'
		);
		if (strlen($m1m2) != 4) {
			return $m1m2;
		} elseif (substr($m1m2, 0, 2) == substr($m1m2, 2, 2)) {
			return $bulan[substr($m1m2, 0, 2)];
		} else {
			return $bulan[substr($m1m2, 0, 2)] . ' - ' . $bulan[substr($m1m2, 2, 2)];
		}
	}
	public $namaseksi = array(
			'01' => 'Subbagian Umum',
			'02' => 'Seksi Pengolahan Data dan Informasi',
			'03' => 'Seksi Pelayanan',
			'04' => 'Seksi Penagihan',
			'05' => 'Seksi Pemeriksaan dan Kepatuhan Internal',
			'06' => 'Seksi Ekstensifikasi Perpajakan',
			'07' => 'Seksi Pengawasan dan Konsultasi I',
			'08' => 'Seksi Pengawasan dan Konsultasi II',
			'09' => 'Seksi Pengawasan dan Konsultasi III',
			'10' => 'Seksi Pengawasan dan Konsultasi IV',
			'00' => 'Kelompok Jabatan Fungsional'
	);
}