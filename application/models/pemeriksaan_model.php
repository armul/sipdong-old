<?php
class Pemeriksaan_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('xml');
		date_default_timezone_set('Asia/Jakarta');
		setlocale(LC_TIME, "id_ID");
	}
	public function label_lhp($buku)
	{
		$query = $this->db->query("SELECT
				concat('LAP-', lpad(rik_lhp_no, 5, '0'), '/WPJ.27/KP.0105', CASE rik_lhp_buku WHEN 'R' THEN '/RIK.SIS/' ELSE '/' END, date_format(rik_lhp_tgl, '%Y')) NoLHP,
				concat(date_format(rik_lhp_tgl, '%e'), ' ', (SELECT upper(bln_nama) FROM sip_kms_bln WHERE bln_ak = date_format(rik_lhp_tgl, '%m')), ' ', date_format(rik_lhp_tgl, '%Y')) TglLHP,
				rik_nama NamaWP,
				concat(substring(rik_npwp, 1, 2), '.', substring(rik_npwp, 3, 3), '.', substring(rik_npwp, 6, 3), '.', substring(rik_npwp, 9, 1), '-', substring(rik_npwp, 10, 3), '.', substring(rik_npwp, 13, 3)) NPWP,
				concat(
					(SELECT bln_nm FROM sip_kms_bln WHERE bln_ak = (substring(rik_ms1, 1, 2))),
					IF (rik_ms1 <> rik_ms2, concat(' - ', (SELECT bln_nm FROM sip_kms_bln WHERE bln_ak = (substring(rik_ms2, 1, 2)))), ''),
					' / 20',
					substring(rik_ms1, 3, 2)
				) MasaTahun,
				(SELECT rik_deskripsi FROM sip_kms_rik_kode WHERE rik_kode = sip_rik.rik_kode) Pemeriksaan
			FROM sip_rik
			WHERE date_format(rik_lhp_tgl, '%Y') = '2015' AND rik_lhp_buku = '" . $buku . "'
			ORDER BY rik_lhp_no;");
		$result = $query->result_array();
		$xml = '<?xml version="1.0" encoding="utf-8"?>';
		$xml .= "\n<LabelLHP>";
		for ($i = 0; $i<= count($result)-1; $i++) {
			if ($i % 2 == 0) {
				$xml .= "\n\t<Halaman>";
				$xml .= "\n\t\t<Label1>";
				foreach ($result[$i] as $key => $value) {
					$xml .= "\n\t\t\t<$key>$value</$key>";
				}
				$xml .= "\n\t\t</Label1>";
				if (isset($result[$i+1]))	 {
					$xml .= "\n\t\t<Label2>";
					foreach ($result[$i+1] as $key => $value) {
						$xml .= "\n\t\t\t<$key>$value</$key>";
					}
					$xml .= "\n\t\t</Label2>";
				}
				$xml .= "\n\t</Halaman>";
			}
		}
		$xml .= "\n</LabelLHP>";
		return $xml;
	}
	public function cetak_sp2($buku, $tahun, $no = false)
	{
		$query = $this->db->query("SELECT
				concat('PRIN-', lpad(rik_sp2_no, 5, '0'), '/WPJ.27/KP.0105', CASE rik_sp2_buku WHEN 'R' THEN '/RIK.SIS/' ELSE '/' END, date_format(rik_sp2_tgl, '%Y')) NoSP2,
				concat(case when substring(rik_kode, 2, 1) = '0' then 'PANG-' else 'PEMB-' end, lpad(rik_sp2_no, 5, '0'), '/WPJ.27/KP.0105', CASE rik_sp2_buku WHEN 'R' THEN '/RIK.SIS/' ELSE '/' END, date_format(rik_sp2_tgl, '%Y')) NoPbPg,
				concat(date_format(rik_sp2_tgl, '%e'), ' ', (SELECT bln_nama FROM sip_kms_bln WHERE bln_ak = date_format(rik_sp2_tgl, '%m')), ' ', date_format(rik_sp2_tgl, '%Y')) TglSP2,
				rik_nama NamaWP,
				substring(rik_npwp, 1, 1) NPWP0,
				substring(rik_npwp, 2, 1) NPWP1,
				substring(rik_npwp, 3, 1) NPWP2,
				substring(rik_npwp, 4, 1) NPWP3,
				substring(rik_npwp, 5, 1) NPWP4,
				substring(rik_npwp, 6, 1) NPWP5,
				substring(rik_npwp, 7, 1) NPWP6,
				substring(rik_npwp, 8, 1) NPWP7,
				substring(rik_npwp, 9, 1) NPWP8,
				substring(rik_npwp, 10, 1) NPWP9,
				substring(rik_npwp, 11, 1) NPWPa,
				substring(rik_npwp, 12, 1) NPWPb,
				substring(rik_npwp, 13, 1) NPWPc,
				substring(rik_npwp, 14, 1) NPWPd,
				substring(rik_npwp, 15, 1) NPWPe,
				rik_almt Alamat,
				rik_kota Kota,
				substring(rik_ms1, 1, 1) Masa0,
				substring(rik_ms1, 2, 1) Masa1,
				substring(rik_ms1, 3, 1) Masa2,
				substring(rik_ms1, 4, 1) Masa3,
				substring(rik_ms2, 1, 1) Masa4,
				substring(rik_ms2, 2, 1) Masa5,
				substring(rik_ms2, 3, 1) Masa6,
				substring(rik_ms2, 4, 1) Masa7,
				substring(rik_kode, 1, 1) Kode0,
				substring(rik_kode, 2, 1) Kode1,
				substring(rik_kode, 3, 1) Kode2,
				substring(rik_kode, 4, 1) Kode3,
				case when substring(rik_kode, 1, 1) = '5' then 'Tujuan lain dalam rangka melaksanakan ketentuan peraturan perundang-undangan perpajakan' else 'Menguji kepatuhan pemenuhan kewajiban perpajakan' end Tujuan,
				case when substring(rik_kode, 2, 1) = '0' then 'Panggilan dalam Rangka Pemeriksaan' else 'Pemberitahuan Pemeriksaan Lapangan' end Hal,
				(SELECT rik_deskripsi FROM sip_kms_rik_kode WHERE rik_kode = sip_rik.rik_kode) Pemeriksaan,
				concat(tcase((SELECT peg_nama FROM sip_peg WHERE peg_ip = rik_tim_spv)), ' / ', (SELECT peg_nip FROM sip_peg WHERE peg_ip = rik_tim_spv)) SpvNama,
				concat((SELECT peg_pgk FROM sip_peg WHERE peg_ip = rik_tim_spv), ' / ', (SELECT peg_gol FROM sip_peg WHERE peg_ip = rik_tim_spv)) SpvPangkat,
				concat(tcase((SELECT peg_nama FROM sip_peg WHERE peg_ip = rik_tim_ket)), ' / ', (SELECT peg_nip FROM sip_peg WHERE peg_ip = rik_tim_ket)) KetNama,
				concat((SELECT peg_pgk FROM sip_peg WHERE peg_ip = rik_tim_ket), ' / ', (SELECT peg_gol FROM sip_peg WHERE peg_ip = rik_tim_ket)) KetPangkat,
				concat(tcase((SELECT peg_nama FROM sip_peg WHERE peg_ip = rik_tim_ag1)), ' / ', (SELECT peg_nip FROM sip_peg WHERE peg_ip = rik_tim_ag1)) Ag1Nama,
				concat((SELECT peg_pgk FROM sip_peg WHERE peg_ip = rik_tim_ag1), ' / ', (SELECT peg_gol FROM sip_peg WHERE peg_ip = rik_tim_ag1)) Ag1Pangkat,
				concat(tcase((SELECT peg_nama FROM sip_peg WHERE peg_ip = rik_tim_ag2)), ' / ', (SELECT peg_nip FROM sip_peg WHERE peg_ip = rik_tim_ag2)) Ag2Nama,
				concat((SELECT peg_pgk FROM sip_peg WHERE peg_ip = rik_tim_ag2), ' / ', (SELECT peg_gol FROM sip_peg WHERE peg_ip = rik_tim_ag2)) Ag2Pangkat,
				concat(tcase((SELECT peg_nama FROM sip_peg WHERE peg_ip = rik_tim_ag3)), ' / ', (SELECT peg_nip FROM sip_peg WHERE peg_ip = rik_tim_ag3)) Ag3Nama,
				concat((SELECT peg_pgk FROM sip_peg WHERE peg_ip = rik_tim_ag3), ' / ', (SELECT peg_gol FROM sip_peg WHERE peg_ip = rik_tim_ag3)) Ag3Pangkat
			FROM sip_rik
			WHERE date_format(rik_sp2_tgl, '%Y') = '" . $tahun . "' AND rik_sp2_buku = '" . $buku . "'" . ($no ? ' AND rik_sp2_no = ' . $no : '') . "
			ORDER BY rik_sp2_no;");
		$result = $query->result_array();
		$xml = '<?xml version="1.0" encoding="utf-8"?>';
		$xml .= "\n<SP2>";
		for ($i = 0; $i<= count($result)-1; $i++) {
				$xml .= "\n\t<PRIN>";
				foreach ($result[$i] as $key => $value) {
					$xml .= "\n\t\t<$key>" . xml_convert($value) . "</$key>";
				}
				$xml .= "\n\t</PRIN>";
		}
		$xml .= "\n</SP2>";
		return $xml;
	}
	public function dafnom_simpan()
	{
		foreach ($_POST['check'] as $i) {
			$data = array(
				'rik_usl_no' => $_POST['rik_usl_no'],
				'rik_usl_tgl' => $_POST['rik_usl_tgl']
			);
			$this->db->where('rik_npwp', $_POST['rik_npwp'][$i]);
			$this->db->where('rik_kode', $_POST['rik_kode'][$i]);
			$this->db->where('rik_ms1', $_POST['rik_ms1'][$i]);
			$this->db->where('rik_ms2', $_POST['rik_ms2'][$i]);
			$this->db->update('sip_rik', $data);
		};

	}
	public function ikhtisarSP2()
	{
		$query = $this->db->query("SELECT
			date_format(rik_sp2_tgl, '%Y') tahun,
			sum(if(rik_lhp_no IS NOT NULL, 1, 0)) selesai,
			sum(if(rik_lhp_no IS NULL, 1, 0)) belum,
			count(*) jumlah
		FROM sipdong.sip_rik
		WHERE  rik_sp2_buku <> 'P' AND rik_sp2_no IS NOT NULL AND rik_sbatal_no IS NULL AND rik_salih_no IS NULL
		GROUP BY tahun
		ORDER BY tahun DESC;");
		/*$this->db->select("date_format(rik_sp2_tgl, '%Y') tahun, sum(if(rik_lhp_no IS NOT NULL, 1, 0)) selesai, sum(if(rik_lhp_no IS NULL, 1, 0)) belum, count(*) jumlah'");
		$this->db->from('sip_rik');
		$this->db->where('rik_sp2_no IS NOT NULL');
		$this->db->where('rik_sbatal_no IS NULL');
		$this->db->where('rik_salih_no IS NULL');
		$this->db->group_by('tahun');
		$this->db->order_by('tahun', 'DESC');
		$query = $this->db->get();*/
		return $query->result_array();
	}
	public function restitusi()
	{
		$this->db->select('rik_nama, rik_npwp, rik_ms1, rik_ms2, rik_kode, rik_jtp_tgl, rik_prognosa, rik_lp2_no');
		$this->db->from('sip_rik');
		$this->db->where('rik_prognosa < 0');
		$this->db->where('rik_lhp_no IS NULL');
		$this->db->where('rik_sbatal_no IS NULL');
		$this->db->order_by('rik_jtp_tgl');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function persediaan()
	{
		$this->db->select('rik_nama, rik_npwp, rik_ms1, rik_ms2, rik_kode, rik_jtp_tgl, rik_prognosa');
		$this->db->from('sip_rik');
		$this->db->where('rik_usl_no IS NULL');
		$this->db->where('rik_ins_no IS NULL');
		$this->db->where('rik_sbatal_no IS NULL');
		$this->db->where('rik_prognosa < 0');
		$this->db->order_by('rik_jtp_tgl');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function maksND()
	{
		$this->db->select('max(tu_sk_nosrt) maksND');
		$this->db->from('sip_tu_sk');
		$this->db->where('tu_sk_es4', $_SESSION['es4']);
		$this->db->where('tu_sk_buku', 'ND');
		$this->db->where('date_format(tu_sk_tgsrt, \'%Y\') = ' . date('Y'));
		$query = $this->db->get();
		return $query->row();
	}
	public function bebanSP2()
	{
		$query = $this->db->query("SELECT
				if(sp2p_tim_spv, sp2p_tim_spv, rik_tim_spv) supervisor,
				sum(if(substring(rik_kode, 1, 1) = '2' AND substring(rik_kode, 3, 1) = '8' AND rik_prognosa = 0, 1, 0)) ppnkomp,
				sum(if(substring(rik_kode, 1, 1) = '2' AND substring(rik_kode, 3, 1) = '8' AND rik_prognosa < 0, 1, 0)) ppnrest,
				sum(if(substring(rik_kode, 1, 1) = '4' AND substring(rik_kode, 3, 1) = '8', 1, 0)) pphsin,
				sum(if(substring(rik_kode, 1, 1) = '1' AND substring(rik_kode, 3, 1) = '8', 1, 0)) pphall,
				sum(if(substring(rik_kode, 3, 1) IN ('1', '2', '3', '4', '5'), 1, 0)) hapus,
				sum(if(substring(rik_kode, 2, 1) IN ('4', '9') and substring(rik_kode, 1, 1) NOT IN ('5', '6'), 1, 0)) khusus,
				sum(if(substring(rik_kode, 1, 1) = '5', 1, 0)) tlain,
				sum(if(substring(rik_kode, 1, 1) = '6', 1, 0)) lokasi,
				count(*) jumlah
			FROM sip_rik LEFT JOIN sip_rik_sp2p
			ON sip_rik.rik_sp2_buku = sp2_buku AND sip_rik.rik_sp2_no = sp2_no AND sip_rik.rik_sp2_tgl = sp2_tgl
			WHERE rik_sp2_tgl >= '2013-07-01'
			GROUP BY supervisor
			HAVING supervisor IN ('060089048', '060094698', '060104312')");
		return $query->result_array();
	}
	public function rekamND()
	{
		$query = $this->db->query("SELECT rik_lp2_no, rik_nama, rik_npwp, rik_ms1, rik_ms2, rik_kode, rik_sp2_buku, rik_tim_spv
			FROM sip_rik
			WHERE rik_nd_no IS NULL
				AND rik_sp2_no IS NULL
				AND rik_ins_no IS NOT NULL
				AND rik_sbatal_no IS NULL
			ORDER BY substring(rik_kode, 1, 1), substring(rik_kode, 2, 1), rik_npwp, substring(rik_ms1, 3, 2), substring(rik_ms1, 1, 2);");
		return $query->result_array();
	}
	public function cetakND()
	{
		$query = $this->db->query("SELECT
	rik_nama NamaWP, 
	concat(substring(rik_npwp, 1, 2), '.', substring(rik_npwp, 3, 3), '.', substring(rik_npwp, 6, 3), '.', substring(rik_npwp, 9, 1), '-', substring(rik_npwp, 10, 3), '.', substring(rik_npwp, 13, 3)) NPWP,
	concat(rik_almt, ', ', rik_kota) Alamat,
	concat((SELECT bln_nm FROM sip_kms_bln WHERE bln_ak = (substring(rik_ms1, 1, 2))),
		IF (rik_ms1 <> rik_ms2, concat(' - ', (SELECT bln_nm FROM sip_kms_bln WHERE bln_ak = (substring(rik_ms2, 1, 2)))), ''),
		' / 20', substring(rik_ms1, 3, 2)) MasaTahun,
	rik_kode Kode
FROM
	sip_rik
WHERE
	rik_nd_no IS NULL
	AND rik_sp2_no IS NULL
	AND rik_ins_no IS NOT NULL
	AND rik_sbatal_no IS NULL
ORDER BY
	substring(rik_kode, 1, 1), substring(rik_kode, 2, 1), rik_npwp, substring(rik_ms1, 3, 2), substring(rik_ms1, 1, 2);");
		$result = $query->result_array();
		$xml = '<?xml version="1.0" encoding="utf-8"?>';
		$xml .= "\n<NDAP>";
		for ($i = 0; $i<= count($result)-1; $i++) {
				$xml .= "\n\t<ND>";
				foreach ($result[$i] as $key => $value) {
					$xml .= "\n\t\t<$key>" . xml_convert($value) . "</$key>";
				}
				$xml .= "\n\t</ND>";
		}
		$xml .= "\n</NDAP>";
		return $xml;
	}
	public function simpanND()
	{
		$nds = array();
		for ($i = 0; $i <= count($_POST['rik_nd_no']) - 1; $i++) {
			if ($_POST['rik_tim_spv'][$i] <> '') {
				switch ($_POST['rik_tim_spv'][$i]) {
					case '060094698':
						$klp = 'I';
						break;
					case '060104312':
						$klp = 'II';
						break;
					case '060089048':
						$klp = 'III';
						break;
					default:
						$klp = '';
						break;
				}
				/*$data = array(
					'tu_sk_es4' => $_SESSION['es4'],
					'tu_sk_buku' => 'ND',
					'tu_sk_th' => date('Y'),
					'tu_sk_nosrt' => $_POST['rik_nd_no'][$i],
					'tu_sk_npwp' => $_POST['rik_npwp'][$i],
					'tu_sk_mspj' => substr($_POST['rik_ms1'][$i], 0, 2) . substr($_POST['rik_ms2'][$i], 0, 2),
					'tu_sk_thpj' => '20' . substr($_POST['rik_ms2'][$i], 2, 2),
					'tu_sk_tujuan' => 'Supervisor Kelompok ' . $klp,
					'tu_sk_hal' => 'Penyusunan Rencana Pemeriksaan',
					'tu_sk_pengonsep' => $_SESSION['ip']
				);
				$this->db->insert('sip_tu_sk', $data);*/
				// UPDATE MASTERFILE PEMERIKSAAN
				$data = array(
					'rik_nd_no' => $_POST['rik_nd_no'][$i],
					'rik_nd_tgl' => $this->pemeriksaan_model->toYmd($_POST['rik_nd_tgl'][$i]),
					'rik_tim_spv' => $_POST['rik_tim_spv'][$i]
				);
				$this->db->where('rik_npwp', $_POST['rik_npwp'][$i]);
				$this->db->where('rik_ms1', $_POST['rik_ms1'][$i]);
				$this->db->where('rik_ms2', $_POST['rik_ms2'][$i]);
				$this->db->where('rik_kode', $_POST['rik_kode'][$i]);
				$this->db->update('sip_rik', $data);
			}
		}
		return $nds;
	}
	public function riksus()
	{
		$this->db->select('rik_lp2_no, rik_nama, rik_npwp, rik_ms1, rik_ms2, rik_kode, substring(rik_ms2, 3, 2) rik_th, substring(rik_ms2, 1, 2) rik_ms', false);
		$this->db->from('sip_rik');
		$this->db->where('rik_lhp_no IS NOT NULL');
		$this->db->where('substring(rik_kode, 1, 1) <> "6"');
		$this->db->where('substring(rik_kode, 2, 1) IN ("4", "9")');
		$this->db->where('substring(rik_ms1, 3, 2) IN ("09", "10", "11", "12")');
		$this->db->order_by('rik_kode, rik_npwp, rik_th, rik_ms');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function rekamSP2($supervisor)
	{
		$this->db->select('rik_lp2_no, rik_nama, rik_npwp, rik_ms1, rik_ms2, rik_kode, rik_sp2_buku, substring(rik_ms2, 3, 2) rik_th, substring(rik_ms2, 1, 2) rik_ms', false);
		$this->db->from('sip_rik');
		$this->db->where('rik_lp2_no IS NOT NULL');
		$this->db->where('rik_sp2_no IS NULL');
		$this->db->where('rik_sbatal_no IS NULL');
		if ($supervisor) {
			$this->db->where('rik_tim_spv', $supervisor);
		}
		$this->db->order_by('rik_npwp, rik_th, rik_ms');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function simpanSP2()
	{
		// BENERIN!
		for ($i = 0; $i <= count($_POST['lp2_no']) - 1; $i++) {
			if ($_POST['lp2_no'][$i] <> '') {
				$data = array(
					'rik_lp2_no' => str_replace('.', '', $_POST['lp2_no'][$i]),
					'rik_lp2_tgl' => (substr($_POST['lp2_tgl'][$i], 6, 4) . '-' . substr($_POST['lp2_tgl'][$i], 3, 2) . '-' . substr($_POST['lp2_tgl'][$i], 0, 2))
				);
				$this->db->where('rik_npwp', $_POST['npwp'][$i]);
				$this->db->where('rik_ms1', $_POST['ms1'][$i]);
				$this->db->where('rik_ms2', $_POST['ms2'][$i]);
				$this->db->where('rik_kode', $_POST['kode'][$i]);
				$this->db->update('sip_rik', $data);
			}
		}
	}
	public function sptlb_simpan()
	{
		$xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
		$xml .= "\n\t<SPTLB>";
		$xml .= "\n\t<NamaWP>" . $_POST["nama"] . "</NamaWP>";
		$xml .= "\n\t<NPWP>" . $this->pemeriksaan_model->formatNPWP($_POST["npwp"]) . "</NPWP>";
		$xml .= "\n\t<MsPjk>" . $this->pemeriksaan_model->formatMs($_POST["m1pj"].$_POST["m2pj"]) . " " . $_POST["thpj"] . "</MsPjk>";
		$xml .= "\n\t<NamaKAP>" . $_POST["kap"] . "</NamaKAP>";
		$xml .= "\n\t<JnsSPT>" . ($_POST["spt"] == '2' ? 'SPT Masa PPN' : 'SPT Tahunan PPh') . ' ' . ($_POST["pemb"] == 0 ? '(Normal)' : '(Pemb. ke-'. $_POST["pemb"] .')') . "</JnsSPT>";
		$xml .= "\n\t<NilaiSPT>" . $_POST["nama"] . "</NilaiSPT>";
		$xml .= "\n\t<TglLPAD>" . $_POST["nama"] . "</TglLPAD>";
		$xml .= "\n\t<PengecekanA>";
		$xml .= "\n\t\t<Isian1>" . $_POST["a1"] . "</Isian1>";
		$xml .= "\n\t\t<Isian2>" . $_POST["a2"] . "</Isian2>";
		$xml .= "\n\t\t<Isian3>" . $_POST["a3"] . "</Isian3>";
		$xml .= "\n\t\t<Isian4 SPTnormal=\"yes\">" . (array_key_exists("a4", $_POST) ? $_POST["a4"] : '') . "</Isian4>";
		$xml .= "\n\t\t<Kesimpulan>3</Kesimpulan>";
		$xml .= "\n\t</PengecekanA>";
		$xml .= "\n\t<PengecekanB>";
		$xml .= "\n\t\t<Isian1>" . $_POST["b1"] . "</Isian1>";
		$xml .= "\n\t\t<Isian2>" . $_POST["b2"] . "</Isian2>";
		$xml .= "\n\t\t<Isian3>" . $_POST["b3"] . "</Isian3>";
		$xml .= "\n\t\t<Kesimpulan>1</Kesimpulan>";
		$xml .= "\n\t</PengecekanB>";
		$xml .= "\n\t<PengecekanC>";
		$xml .= "\n\t\t<Isian1 namaAkP=\"-\" regAkP=\"-\">" . $_POST["c1"] . "</Isian1>";
		$xml .= "\n\t\t<Isian2>" . (array_key_exists("c2", $_POST) ? $_POST["c2"] : '') . "</Isian2>";
		$xml .= "\n\t\t<Isian3 namaAkP=\"-\" regAkP=\"-\">" . $_POST["c3"] . "</Isian3>";
		$xml .= "\n\t\t<Isian4>" . (array_key_exists("c4", $_POST) ? $_POST["c4"] : '') . "</Isian4>";
		$xml .= "\n\t\t<Isian5 namaAkP=\"-\" regAkP=\"-\">" . $_POST["c5"] . "</Isian5>";
		$xml .= "\n\t\t<Isian6>" . (array_key_exists("c6", $_POST) ? $_POST["c6"] : '') . "</Isian6>";
		$xml .= "\n\t\t<Isian7>" . $_POST["c7"] . "</Isian7>";
		$xml .= "\n\t\t<Isian8>" . $_POST["c8"] . "</Isian8>";
		$xml .= "\n\t\t<Kesimpulan>2</Kesimpulan>";
		$xml .= "\n\t</PengecekanC>";
		$xml .= "\n\t<TglPengecekan>" . date('j F Y') . "</TglPengecekan>";
		$xml .= "\n\t<NamaPetugas>" . $this->pemeriksaan_model->formatNama($_SESSION["nama"]) . "</NamaPetugas>";
		$xml .= "\n\t<NIPPetugas>" . $_SESSION["nip"] . "</NIPPetugas>";
		$xml .= "\n\t</SPTLB>";
		$this->sipdong_model->cetak($xml, 'LbrPengecekanSPTLB', 'LbrCekSPTLB');
	}
	public function lp2m_lihat()
	{
		$this->db->select('rik_npwp, rik_ms1, rik_ms2, rik_kode, rik_nama');
		$this->db->from('sip_rik');
		$this->db->where('rik_lp2_no is null');
		$this->db->where('rik_sp2_buku', 'r');
		// $this->db->limit(100);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lp2m_simpan()
	{
		for ($i = 0; $i <= count($_POST['lp2_no']) - 1; $i++) {
			if ($_POST['lp2_no'][$i] <> '') {
				$data = array(
					'rik_lp2_no' => str_replace('.', '', $_POST['lp2_no'][$i]),
					'rik_lp2_tgl' => (substr($_POST['lp2_tgl'][$i], 6, 4) . '-' . substr($_POST['lp2_tgl'][$i], 3, 2) . '-' . substr($_POST['lp2_tgl'][$i], 0, 2))
				);
				$this->db->where('rik_npwp', $_POST['npwp'][$i]);
				$this->db->where('rik_ms1', $_POST['ms1'][$i]);
				$this->db->where('rik_ms2', $_POST['ms2'][$i]);
				$this->db->where('rik_kode', $_POST['kode'][$i]);
				$this->db->update('sip_rik', $data);
			}
		}
	}
	public function jtpm_lihat()
	{
		$this->db->select('rik_npwp, rik_nama, rik_ms1, rik_ms2, rik_kode, rik_sp2_tgl');
		$this->db->from('sip_rik');
		$this->db->where('rik_jtp_tgl IS NULL');
		$this->db->where('rik_ms1 <> rik_ms2');
		$this->db->where("rik_sp2_buku <> 'P'");
		$this->db->where('rik_sp2_no IS NOT NULL');
		$this->db->order_by('rik_kode');
		$this->db->order_by('rik_ms1');
		$this->db->limit(100);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function jtpm_simpan()
	{
		for ($i = 0; $i <= count($_POST['jtp_tgl']) - 1; $i++) {
			if ($_POST['jtp_tgl'][$i] <> '') {
				$data = array(
					'rik_prognosa' => (-1 * str_replace(',', '', $_POST['prognosa'][$i])),
					'rik_jtp_tgl' => ((substr($_POST['jtp_tgl'][$i], 6, 4)+1) . '-' . substr($_POST['jtp_tgl'][$i], 3, 2) . '-' . substr($_POST['jtp_tgl'][$i], 0, 2))
				);
				$this->db->where('rik_npwp', $_POST['npwp'][$i]);
				$this->db->where('rik_ms1', $_POST['ms1'][$i]);
				$this->db->where('rik_ms2', $_POST['ms2'][$i]);
				$this->db->where('rik_kode', $_POST['kode'][$i]);
				$this->db->update('sip_rik', $data);
			}
		}
	}
	public function cari_lhp($buku, $tahun)
	{
		$this->db->select('rik_lhp_no, rik_lhp_tgl, rik_npwp, rik_nama, rik_kode, rik_ms1, rik_ms2, rik_lp2_no');
		$this->db->from('sip_rik');
		$this->db->where('rik_lhp_no is not null');
		$this->db->where('rik_lhp_buku', substr($buku, 0, 1));
		$this->db->where("date_format(rik_lhp_tgl, '%Y') = '" . $tahun . "'");
		$this->db->order_by('rik_lhp_tgl, rik_lhp_no');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function cari_sphp($buku, $tahun)
	{
		$this->db->select('rik_sphp_no, rik_sphp_tgl, rik_npwp, rik_nama, rik_kode, rik_ms1, rik_ms2, rik_lp2_no');
		$this->db->from('sip_rik');
		$this->db->where('rik_sphp_no is not null');
		$this->db->where('rik_sphp_buku', substr($buku, 0, 1));
		$this->db->where("date_format(rik_sphp_tgl, '%Y') = '" . $tahun . "'");
		$this->db->order_by('rik_sphp_tgl, rik_sphp_no');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function cari_sp2($buku, $tahun)
	{
		$query = $this->db->query("
			SELECT rik_sp2_no, rik_sp2_tgl, rik_npwp, rik_nama, rik_kode, rik_ms1, rik_ms2, rik_lp2_no,
				(select peg_nama from sip_peg where peg_ip = rik_tim_spv) rik_tim_spv,
				(select peg_nama from sip_peg where peg_ip = rik_tim_ket) rik_tim_ket,
				(select peg_nama from sip_peg where peg_ip = rik_tim_ag1) rik_tim_ag1,
				CASE WHEN rik_sbatal_no IS NOT NULL THEN 'info text-muted' WHEN rik_lhp_no IS NOT NULL THEN 'success' WHEN curdate() >= rik_jtp_tgl THEN 'danger' WHEN datediff(curdate(), rik_jtp_tgl) > 30 THEN 'warning' ELSE 'info' END rik_status
			FROM sip_rik
			WHERE rik_sp2_no IS NOT NULL
				AND rik_sp2_buku = '". substr($buku, 0, 1) ."'
				AND date_format(rik_sp2_tgl, '%Y') = '$tahun'
			ORDER BY rik_sp2_tgl, rik_sp2_no
		");
		return $query->result_array();
	}
	public function lp2_lihat($lp2_no)
	{
		$this->db->select('*');
		$this->db->from('sip_rik');
		$this->db->where('rik_lp2_no', $lp2_no);
		$query = $this->db->get();
		return $query->row();
	}
	public function usulan_daftar() {
		$this->db->select('rik_usl_no, rik_usl_tgl, count(*) jumlah');
		$this->db->from('sip_rik');
		$this->db->where('rik_usl_no IS NOT NULL');
		$this->db->group_by('rik_usl_no');
		$this->db->order_by('rik_usl_tgl, rik_usl_no');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function usulan_rinci($usl_no) {
		$this->db->select('rik_npwp, rik_nama, rik_kode, rik_ms1, rik_ms2, rik_usl_no, rik_usl_tgl, rik_lp2_no');
		$this->db->from('sip_rik');
		$this->db->where('replace(rik_usl_no, "/", "") = "'. $usl_no . '"');
		$this->db->order_by('rik_kode, rik_npwp');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function sp2p_lihat($sp2_buku, $sp2_no, $sp2_tgl) {
		$this->db->select('sp2p_buku, sp2p_no, sp2p_tgl, sp2p_tim_spv, sp2p_tim_ket, sp2p_tim_ag1, sp2p_tim_ag2, sp2p_tim_ag3');
		$this->db->from('sip_rik_sp2p');
		$this->db->where('sp2_buku', $sp2_buku);
		$this->db->where('sp2_no', $sp2_no);
		$this->db->where('sp2_tgl', $sp2_tgl);
		$this->db->order_by('sp2p_tgl');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function skp_lihat($lhp_buku, $lhp_no, $lhp_tgl) {
		$this->db->select('skp_no, skp_tgl, skp_nilai, skp_ms1, skp_ms2');
		$this->db->from('sip_rik_skp');
		$this->db->where('lhp_buku', $lhp_buku);
		$this->db->where('lhp_no', $lhp_no);
		$this->db->where('lhp_tgl', $lhp_tgl);
		$this->db->order_by('skp_ms1');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lp2_simpan($lp2_no)
	{
		if (isset($_POST['tim_spv']) && $_POST['tim_spv']) $data['rik_tim_spv'] = $_POST['tim_spv'];
		if (isset($_POST['tim_ket']) && $_POST['tim_ket']) $data['rik_tim_ket'] = $_POST['tim_ket'];
		if (isset($_POST['tim_ag1']) && $_POST['tim_ag1']) $data['rik_tim_ag1'] = $_POST['tim_ag1'];
		if (isset($_POST['tim_ag2']) && $_POST['tim_ag2']) $data['rik_tim_ag2'] = $_POST['tim_ag2'];
		if (isset($_POST['tim_ag3']) && $_POST['tim_ag3']) $data['rik_tim_ag3'] = $_POST['tim_ag3'];
		if (isset($_POST['sp2_no']) && $_POST['sp2_no']) $data['rik_sp2_no'] = $_POST['sp2_no'];
		if (isset($_POST['sp2_tgl']) && $_POST['sp2_tgl']) $data['rik_sp2_tgl'] = substr($_POST['sp2_tgl'], 6, 4) . '-' . substr($_POST['sp2_tgl'], 3, 2) . '-' . substr($_POST['sp2_tgl'], 0, 2);
		if (isset($_POST['sphp_no']) && $_POST['sphp_no']) $data['rik_sphp_no'] = $_POST['sphp_no'];
		if (isset($_POST['sphp_tgl']) && $_POST['sphp_tgl']) $data['rik_sphp_tgl'] = substr($_POST['sphp_tgl'], 6, 4) . '-' . substr($_POST['sphp_tgl'], 3, 2) . '-' . substr($_POST['sphp_tgl'], 0, 2);
		if (isset($_POST['lhp_no']) && $_POST['lhp_no']) $data['rik_lhp_no'] = $_POST['lhp_no'];
		if (isset($_POST['lhp_tgl']) && $_POST['lhp_tgl']) $data['rik_lhp_tgl'] = substr($_POST['lhp_tgl'], 6, 4) . '-' . substr($_POST['lhp_tgl'], 3, 2) . '-' . substr($_POST['lhp_tgl'], 0, 2);
		if (isset($data)) {
			$this->db->where('rik_lp2_no', $lp2_no);
			$this->db->update('sip_rik', $data);
		}
	}
	public function lihat_nd($nd_no)
	{
		$query = $this->db->query("
			SELECT rik_nd_no no, unix_timestamp(rik_nd_tgl) tgl, rik_tim_spv spv, rik_npwp npwp, rik_nama nama, rik_almt alamat, rik_kode kode, left(rik_ms1, 2) ms1, left(rik_ms2, 2) ms2, right(rik_ms1, 2) th
			FROM sip_rik
			WHERE rik_nd_no = $nd_no AND date_format(rik_nd_tgl, '%Y') = " . date('Y') . "
			ORDER BY rik_nd_tgl DESC
		");
		return $query->row();
	}
	public function dafnom_otomatis()
	{
		$this->db->select('tu_sm_noagd, tu_sm_th, tu_sm_nosrt, tu_sm_tgsrt, tu_sm_hal, tu_sm_npwp, tu_sm_mspj, tu_sm_thpj');
		$this->db->from('sip_tu_sm');
		$this->db->where('tu_sm_es4', '05');
		$this->db->where('tu_sm_hal like "SPT %"');
		$this->db->where('tu_sm_proses is null');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function sp2_statistik($buku, $tahun)
	{
		$query = $this->db->query("SELECT sum(if(rik_lhp_no is null, 0, 1)) selesai,
				sum(if(rik_lhp_no is null, 1, 0)) tunggakan,
				count(*) jumlah
			FROM sip_rik
			WHERE rik_sbatal_no IS NULL AND rik_sp2_buku = '" . substr($buku, 0, 1) . "' AND date_format(rik_sp2_tgl, '%Y') = $tahun");
		return $query->row();
	}
	public function cari_tunggakan($nip = false) {
		$query = "SELECT
	rik_npwp, rik_kode, rik_ms1, rik_ms2, rik_nama, rik_lp2_no,
	(SELECT peg_nama FROM sip_peg WHERE peg_ip = IFNULL((SELECT DISTINCT sp2p_tim_spv FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_spv)) rik_tim_spv,
	IFNULL((SELECT DISTINCT sp2p_tim_spv FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_spv) rik_tim_s,
	(SELECT peg_nama FROM sip_peg WHERE peg_ip = IFNULL((SELECT DISTINCT sp2p_tim_ket FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_ket)) rik_tim_ket,
	IFNULL((SELECT DISTINCT sp2p_tim_ket FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_ket) rik_tim_k,
	(SELECT peg_nama FROM sip_peg WHERE peg_ip = IFNULL((SELECT DISTINCT sp2p_tim_ag1 FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_ag1)) rik_tim_ag1,
	IFNULL((SELECT DISTINCT sp2p_tim_ag1 FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_ag1) rik_tim_a1,
	IFNULL((SELECT DISTINCT sp2p_tim_ag1 FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_ag1) rik_tim_a2,
	IFNULL((SELECT DISTINCT sp2p_tim_ag1 FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_ag1) rik_tim_a3
FROM
	sip_rik
WHERE
	rik_sp2_tgl > '2012-01-01' AND
	rik_lhp_buku IN ('R', 'M') AND
	rik_lhp_no IS NULL AND
	rik_sbatal_no IS NULL";
		if ($nip) {
			$query .= "
HAVING
	(rik_tim_s = '" . $nip . "' OR rik_tim_k = '" . $nip . "' OR rik_tim_a1 = '" . $nip . "' OR rik_tim_a2 = '" . $nip . "' OR rik_tim_a3 = '" . $nip . "')";
		}
		$query .= "
ORDER BY
	rik_sp2_tgl";
		$query = $this->db->query($query);
		return $query->result_array();
	}
	public function cari_penyelesaian($nip = false) {
		$query = "SELECT
	rik_npwp, rik_kode, rik_ms1, rik_ms2, rik_nama, rik_lp2_no,
	concat(rik_sp2_no, '/', rik_sp2_buku, '/', date_format(rik_sp2_tgl, '%Y')) rik_sp2_no, rik_sp2_tgl,
	concat(rik_sphp_no, '/', rik_sphp_buku, '/', date_format(rik_sphp_tgl, '%Y')) rik_sphp_no, rik_sphp_tgl,
	concat(rik_lhp_no, '/', rik_lhp_buku, '/', date_format(rik_lhp_tgl, '%Y')) rik_lhp_no, rik_lhp_tgl,
	IFNULL((SELECT DISTINCT sp2p_tim_spv FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_spv) rik_tim_s,
	IFNULL((SELECT DISTINCT sp2p_tim_ket FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_ket) rik_tim_k,
	IFNULL((SELECT DISTINCT sp2p_tim_ag1 FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_ag1) rik_tim_a1,
	IFNULL((SELECT DISTINCT sp2p_tim_ag1 FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_ag1) rik_tim_a2,
	IFNULL((SELECT DISTINCT sp2p_tim_ag1 FROM sip_rik_sp2p WHERE sp2_buku = rik_sp2_buku AND sp2_no = rik_sp2_no AND sp2_tgl = rik_sp2_tgl ORDER BY sp2p_tgl DESC), rik_tim_ag1) rik_tim_a3
FROM
	sip_rik
WHERE
	rik_sp2_tgl > '2012-01-01' AND
	rik_lhp_buku IN ('R', 'M') AND
	rik_lhp_no IS NOT NULL AND
	rik_sbatal_no IS NULL";
		if ($nip) {
			$query .= "
HAVING
	(rik_tim_s = '" . $nip . "' OR rik_tim_k = '" . $nip . "' OR rik_tim_a1 = '" . $nip . "' OR rik_tim_a2 = '" . $nip . "' OR rik_tim_a3 = '" . $nip . "')";
		}
		$query .= "
ORDER BY
	rik_lhp_tgl, rik_lhp_buku, rik_lhp_no;";
		$query = $this->db->query($query);
		return $query->result_array();
	}
	public function cari_riwayat($npwp)
	{
		$npwp = $this->db->escape_str($npwp);
		$query = $this->db->query("SELECT rik_npwp npwp,
			rik_nama nama,
			rik_kode kode,
			concat('20', substr(rik_ms1, 3, 2)) tahun,
			max(case substr(rik_ms1, 1, 2) when '01' then rik_sp2_buku end) AS '01SPBK',
			max(case substr(rik_ms1, 1, 2) when '01' then rik_sp2_no end) AS '01SPNO',
			max(case substr(rik_ms1, 1, 2) when '01' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '01SPTG',
			max(case substr(rik_ms1, 1, 2) when '01' then rik_sphp_buku end) AS '01PHBK',
			max(case substr(rik_ms1, 1, 2) when '01' then rik_sphp_no end) AS '01PHNO',
			max(case substr(rik_ms1, 1, 2) when '01' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '01PHTG',
			max(case substr(rik_ms1, 1, 2) when '01' then rik_lhp_buku end) AS '01LPBK',
			max(case substr(rik_ms1, 1, 2) when '01' then rik_lhp_no end) AS '01LPNO',
			max(case substr(rik_ms1, 1, 2) when '01' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '01LPTG',
			max(case substr(rik_ms1, 1, 2) when '01' then rik_lp2_no end) AS '01LP2NO',
			max(case substr(rik_ms1, 1, 2) when '02' then rik_sp2_buku end) AS '02SPBK',
			max(case substr(rik_ms1, 1, 2) when '02' then rik_sp2_no end) AS '02SPNO',
			max(case substr(rik_ms1, 1, 2) when '02' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '02SPTG',
			max(case substr(rik_ms1, 1, 2) when '02' then rik_sphp_buku end) AS '02PHBK',
			max(case substr(rik_ms1, 1, 2) when '02' then rik_sphp_no end) AS '02PHNO',
			max(case substr(rik_ms1, 1, 2) when '02' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '02PHTG',
			max(case substr(rik_ms1, 1, 2) when '02' then rik_lhp_buku end) AS '02LPBK',
			max(case substr(rik_ms1, 1, 2) when '02' then rik_lhp_no end) AS '02LPNO',
			max(case substr(rik_ms1, 1, 2) when '02' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '02LPTG',
			max(case substr(rik_ms1, 1, 2) when '02' then rik_lp2_no end) AS '02LP2NO',
			max(case substr(rik_ms1, 1, 2) when '03' then rik_sp2_buku end) AS '03SPBK',
			max(case substr(rik_ms1, 1, 2) when '03' then rik_sp2_no end) AS '03SPNO',
			max(case substr(rik_ms1, 1, 2) when '03' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '03SPTG',
			max(case substr(rik_ms1, 1, 2) when '03' then rik_sphp_buku end) AS '03PHBK',
			max(case substr(rik_ms1, 1, 2) when '03' then rik_sphp_no end) AS '03PHNO',
			max(case substr(rik_ms1, 1, 2) when '03' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '03PHTG',
			max(case substr(rik_ms1, 1, 2) when '03' then rik_lhp_buku end) AS '03LPBK',
			max(case substr(rik_ms1, 1, 2) when '03' then rik_lhp_no end) AS '03LPNO',
			max(case substr(rik_ms1, 1, 2) when '03' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '03LPTG',
			max(case substr(rik_ms1, 1, 2) when '03' then rik_lp2_no end) AS '03LP2NO',
			max(case substr(rik_ms1, 1, 2) when '04' then rik_sp2_buku end) AS '04SPBK',
			max(case substr(rik_ms1, 1, 2) when '04' then rik_sp2_no end) AS '04SPNO',
			max(case substr(rik_ms1, 1, 2) when '04' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '04SPTG',
			max(case substr(rik_ms1, 1, 2) when '04' then rik_sphp_buku end) AS '04PHBK',
			max(case substr(rik_ms1, 1, 2) when '04' then rik_sphp_no end) AS '04PHNO',
			max(case substr(rik_ms1, 1, 2) when '04' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '04PHTG',
			max(case substr(rik_ms1, 1, 2) when '04' then rik_lhp_buku end) AS '04LPBK',
			max(case substr(rik_ms1, 1, 2) when '04' then rik_lhp_no end) AS '04LPNO',
			max(case substr(rik_ms1, 1, 2) when '04' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '04LPTG',
			max(case substr(rik_ms1, 1, 2) when '04' then rik_lp2_no end) AS '04LP2NO',
			max(case substr(rik_ms1, 1, 2) when '05' then rik_sp2_buku end) AS '05SPBK',
			max(case substr(rik_ms1, 1, 2) when '05' then rik_sp2_no end) AS '05SPNO',
			max(case substr(rik_ms1, 1, 2) when '05' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '05SPTG',
			max(case substr(rik_ms1, 1, 2) when '05' then rik_sphp_buku end) AS '05PHBK',
			max(case substr(rik_ms1, 1, 2) when '05' then rik_sphp_no end) AS '05PHNO',
			max(case substr(rik_ms1, 1, 2) when '05' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '05PHTG',
			max(case substr(rik_ms1, 1, 2) when '05' then rik_lhp_buku end) AS '05LPBK',
			max(case substr(rik_ms1, 1, 2) when '05' then rik_lhp_no end) AS '05LPNO',
			max(case substr(rik_ms1, 1, 2) when '05' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '05LPTG',
			max(case substr(rik_ms1, 1, 2) when '05' then rik_lp2_no end) AS '05LP2NO',
			max(case substr(rik_ms1, 1, 2) when '06' then rik_sp2_buku end) AS '06SPBK',
			max(case substr(rik_ms1, 1, 2) when '06' then rik_sp2_no end) AS '06SPNO',
			max(case substr(rik_ms1, 1, 2) when '06' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '06SPTG',
			max(case substr(rik_ms1, 1, 2) when '06' then rik_sphp_buku end) AS '06PHBK',
			max(case substr(rik_ms1, 1, 2) when '06' then rik_sphp_no end) AS '06PHNO',
			max(case substr(rik_ms1, 1, 2) when '06' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '06PHTG',
			max(case substr(rik_ms1, 1, 2) when '06' then rik_lhp_buku end) AS '06LPBK',
			max(case substr(rik_ms1, 1, 2) when '06' then rik_lhp_no end) AS '06LPNO',
			max(case substr(rik_ms1, 1, 2) when '06' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '06LPTG',
			max(case substr(rik_ms1, 1, 2) when '06' then rik_lp2_no end) AS '06LP2NO',
			max(case substr(rik_ms1, 1, 2) when '07' then rik_sp2_buku end) AS '07SPBK',
			max(case substr(rik_ms1, 1, 2) when '07' then rik_sp2_no end) AS '07SPNO',
			max(case substr(rik_ms1, 1, 2) when '07' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '07SPTG',
			max(case substr(rik_ms1, 1, 2) when '07' then rik_sphp_buku end) AS '07PHBK',
			max(case substr(rik_ms1, 1, 2) when '07' then rik_sphp_no end) AS '07PHNO',
			max(case substr(rik_ms1, 1, 2) when '07' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '07PHTG',
			max(case substr(rik_ms1, 1, 2) when '07' then rik_lhp_buku end) AS '07LPBK',
			max(case substr(rik_ms1, 1, 2) when '07' then rik_lhp_no end) AS '07LPNO',
			max(case substr(rik_ms1, 1, 2) when '07' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '07LPTG',
			max(case substr(rik_ms1, 1, 2) when '07' then rik_lp2_no end) AS '07LP2NO',
			max(case substr(rik_ms1, 1, 2) when '08' then rik_sp2_buku end) AS '08SPBK',
			max(case substr(rik_ms1, 1, 2) when '08' then rik_sp2_no end) AS '08SPNO',
			max(case substr(rik_ms1, 1, 2) when '08' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '08SPTG',
			max(case substr(rik_ms1, 1, 2) when '08' then rik_sphp_buku end) AS '08PHBK',
			max(case substr(rik_ms1, 1, 2) when '08' then rik_sphp_no end) AS '08PHNO',
			max(case substr(rik_ms1, 1, 2) when '08' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '08PHTG',
			max(case substr(rik_ms1, 1, 2) when '08' then rik_lhp_buku end) AS '08LPBK',
			max(case substr(rik_ms1, 1, 2) when '08' then rik_lhp_no end) AS '08LPNO',
			max(case substr(rik_ms1, 1, 2) when '08' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '08LPTG',
			max(case substr(rik_ms1, 1, 2) when '08' then rik_lp2_no end) AS '08LP2NO',
			max(case substr(rik_ms1, 1, 2) when '09' then rik_sp2_buku end) AS '09SPBK',
			max(case substr(rik_ms1, 1, 2) when '09' then rik_sp2_no end) AS '09SPNO',
			max(case substr(rik_ms1, 1, 2) when '09' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '09SPTG',
			max(case substr(rik_ms1, 1, 2) when '09' then rik_sphp_buku end) AS '09PHBK',
			max(case substr(rik_ms1, 1, 2) when '09' then rik_sphp_no end) AS '09PHNO',
			max(case substr(rik_ms1, 1, 2) when '09' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '09PHTG',
			max(case substr(rik_ms1, 1, 2) when '09' then rik_lhp_buku end) AS '09LPBK',
			max(case substr(rik_ms1, 1, 2) when '09' then rik_lhp_no end) AS '09LPNO',
			max(case substr(rik_ms1, 1, 2) when '09' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '09LPTG',
			max(case substr(rik_ms1, 1, 2) when '09' then rik_lp2_no end) AS '09LP2NO',
			max(case substr(rik_ms1, 1, 2) when '10' then rik_sp2_buku end) AS '10SPBK',
			max(case substr(rik_ms1, 1, 2) when '10' then rik_sp2_no end) AS '10SPNO',
			max(case substr(rik_ms1, 1, 2) when '10' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '10SPTG',
			max(case substr(rik_ms1, 1, 2) when '10' then rik_sphp_buku end) AS '10PHBK',
			max(case substr(rik_ms1, 1, 2) when '10' then rik_sphp_no end) AS '10PHNO',
			max(case substr(rik_ms1, 1, 2) when '10' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '10PHTG',
			max(case substr(rik_ms1, 1, 2) when '10' then rik_lhp_buku end) AS '10LPBK',
			max(case substr(rik_ms1, 1, 2) when '10' then rik_lhp_no end) AS '10LPNO',
			max(case substr(rik_ms1, 1, 2) when '10' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '10LPTG',
			max(case substr(rik_ms1, 1, 2) when '10' then rik_lp2_no end) AS '10LP2NO',
			max(case substr(rik_ms1, 1, 2) when '11' then rik_sp2_buku end) AS '11SPBK',
			max(case substr(rik_ms1, 1, 2) when '11' then rik_sp2_no end) AS '11SPNO',
			max(case substr(rik_ms1, 1, 2) when '11' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '11SPTG',
			max(case substr(rik_ms1, 1, 2) when '11' then rik_sphp_buku end) AS '11PHBK',
			max(case substr(rik_ms1, 1, 2) when '11' then rik_sphp_no end) AS '11PHNO',
			max(case substr(rik_ms1, 1, 2) when '11' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '11PHTG',
			max(case substr(rik_ms1, 1, 2) when '11' then rik_lhp_buku end) AS '11LPBK',
			max(case substr(rik_ms1, 1, 2) when '11' then rik_lhp_no end) AS '11LPNO',
			max(case substr(rik_ms1, 1, 2) when '11' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '11LPTG',
			max(case substr(rik_ms1, 1, 2) when '11' then rik_lp2_no end) AS '11LP2NO',
			max(case substr(rik_ms1, 1, 2) when '12' then rik_sp2_buku end) AS '12SPBK',
			max(case substr(rik_ms1, 1, 2) when '12' then rik_sp2_no end) AS '12SPNO',
			max(case substr(rik_ms1, 1, 2) when '12' then date_format(rik_sp2_tgl, '%d-%m-%Y') end) AS '12SPTG',
			max(case substr(rik_ms1, 1, 2) when '12' then rik_sphp_buku end) AS '12PHBK',
			max(case substr(rik_ms1, 1, 2) when '12' then rik_sphp_no end) AS '12PHNO',
			max(case substr(rik_ms1, 1, 2) when '12' then date_format(rik_sphp_tgl, '%d-%m-%Y') end) AS '12PHTG',
			max(case substr(rik_ms1, 1, 2) when '12' then rik_lhp_buku end) AS '12LPBK',
			max(case substr(rik_ms1, 1, 2) when '12' then rik_lhp_no end) AS '12LPNO',
			max(case substr(rik_ms1, 1, 2) when '12' then date_format(rik_lhp_tgl, '%d-%m-%Y') end) AS '12LPTG',
			max(case substr(rik_ms1, 1, 2) when '12' then rik_lp2_no end) AS '12LP2NO'
		FROM sip_rik
		WHERE rik_npwp = $npwp
		GROUP BY kode, tahun
		ORDER BY kode, tahun;");
		return $query->result_array();
	}
	public function skp_daftar($lhp_buku, $lhp_thn) {
		$query = $this->db->query("SELECT
			rik_lhp_buku,
			rik_lhp_tgl,
			rik_lhp_no,
			rik_nama,
			rik_npwp,
			rik_kode,
			rik_lp2_no,
			sum(CASE WHEN substring(skp_no, 7, 1) = '1' THEN skp_nilai ELSE 0 END) stp_nil,
			sum(CASE WHEN substring(skp_no, 7, 1) = '1' THEN 1 ELSE 0 END) stp_jml,
			sum(CASE WHEN substring(skp_no, 7, 1) = '2' THEN skp_nilai ELSE 0 END) skpkb_nil,
			sum(CASE WHEN substring(skp_no, 7, 1) = '2' THEN 1 ELSE 0 END) skpkb_jml,
			sum(CASE WHEN substring(skp_no, 7, 1) = '3' THEN skp_nilai ELSE 0 END) skpkbt_nil,
			sum(CASE WHEN substring(skp_no, 7, 1) = '3' THEN 1 ELSE 0 END) skpkbt_jml,
			sum(CASE WHEN substring(skp_no, 7, 1) = '4' THEN skp_nilai ELSE 0 END) skplb_nil,
			sum(CASE WHEN substring(skp_no, 7, 1) = '4' THEN 1 ELSE 0 END) skplb_jml,
			sum(CASE WHEN substring(skp_no, 7, 1) = '5' THEN skp_nilai ELSE 0 END) skpn_nil,
			sum(CASE WHEN substring(skp_no, 7, 1) = '5' THEN 1 ELSE 0 END) skpn_jml
		FROM
			sip_rik LEFT JOIN sip_rik_skp
			ON
				rik_lhp_buku = lhp_buku AND rik_lhp_tgl = lhp_tgl AND rik_lhp_no = lhp_no
		WHERE
			date_format(rik_lhp_tgl, '%Y') = '". $lhp_thn ."' AND rik_lhp_buku = '". $lhp_buku ."'
		GROUP BY
			rik_lhp_buku, rik_lhp_tgl, rik_lhp_no
		ORDER BY
			rik_lhp_buku, rik_lhp_tgl, rik_lhp_no;");
		return $query->result_array();
	}
	public function formatNPWP($npwp)
	{
		if (strlen($npwp) != 15) {
			return $npwp;
		}
		return substr($npwp, 0, 2) . '.' . substr($npwp, 2, 3) . '.' . substr($npwp, 5, 3) . '.' . substr($npwp, 8, 1) . '-' . substr($npwp, 9, 3) . '.' . substr($npwp, 12, 3);
	}
	public function formatNP2($np2)
	{
		if (strlen($np2) == 19) {
			return substr($np2, 0, 3) . '.' . substr($np2, 3, 3) . '.' . substr($np2, 6, 4) . '.' . substr($np2, 10, 4) . '.' . substr($np2, 14, 5);
		} elseif (strlen($np2) == 15) {
			return substr($np2, 0, 3) . '.' . substr($np2, 3, 4) . '.' . substr($np2, 7, 4) . '.' . substr($np2, 11, 4);
		} else {
			return $np2;
		}
	}
	public function formatTanggal($tanggalMySQL)
	{
		// $bl = array('-01-', '-02-', '-03-', '-04-', '-05-', '-06-', '-07-', '-08-', '-09-', '-10-', '-11-', '-12-');
		// $bulan = array(' Januari ', ' Februari ', ' Maret ', ' April ', ' Mei ', ' Juni ', ' Juli ', ' Agustus ', ' September ', ' Oktober ', ' November ', ' Desember ');
		// return str_replace($bl, $bulan, strftime('%#d-%m-%Y', strtotime($tanggalMySQL)));
		return strftime('%d/%m/%Y', strtotime($tanggalMySQL));
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
	public function formatMs($m1m2)
	{
		$bulan = array(
			'01' => 'Jan',
			'02' => 'Feb',
			'03' => 'Mar',
			'04' => 'Apr',
			'05' => 'Mei',
			'06' => 'Jun',
			'07' => 'Jul',
			'08' => 'Ags',
			'09' => 'Sep',
			'10' => 'Okt',
			'11' => 'Nov',
			'12' => 'Des'
		);
		if (strlen($m1m2) != 4) {
			return $m1m2;
		} elseif (substr($m1m2, 0, 2) == substr($m1m2, 2, 2)) {
			return $bulan[substr($m1m2, 0, 2)];
		} else {
			return $bulan[substr($m1m2, 0, 2)] . ' - ' . $bulan[substr($m1m2, 2, 2)];
		}
	}
	public function formatNama($nama) {
		/*$nama = explode(' ', $nama);
		if(count($nama) > 2) {
			for ($i=2; $i<=count($nama)-1 ; $i++) { 
				$nama[$i] = substr($nama[$i], 0, 1) . '.';
			}
		}
		return ucwords(strtolower(implode(' ', $nama)));*/
		return ucwords(strtolower($nama));
	}
	public function toYmd($dmy) {
		return substr($dmy, 6, 4) . '-' . substr($dmy, 3, 2) . '-' . substr($dmy, 0, 2);
	}
	public function namaPegawai($ip) {
		$query = $this->db->query("SELECT peg_nama FROM sip_peg WHERE peg_ip = " . $ip . ";");
		$nama = $query->row();
		if (!$nama) {
			return $ip;
		}
		return $this->formatNama($nama->peg_nama);
	}
	public function nipPegawai($ip) {
		$query = $this->db->query("SELECT peg_nip FROM sip_peg WHERE peg_ip = " . $ip . ";");
		$nip = $query->row();
		if (!$nip) {
			return $ip;
		}
		return $nip->peg_nip;
	}
	public function jenisPemeriksaan($kode) {
		$query = $this->db->query("SELECT rik_deskripsi FROM sip_kms_rik_kode WHERE rik_kode = " . $kode .";");
		$jenis = $query->row();
		if (!$jenis) {
			return "";
		} else {
			return $jenis->rik_deskripsi;
		}
	}
	/*
select
	concat('LAP-', lpad(lhp_no, 5, '0'), '/WPJ.27/KP.0105', case lhp_buku when 'R' then '/RIK.SIS/' else '/' end, date_format(lhp_tgl, '%Y')) lhp_no,
	(select rik_kode from sip_rik where rik_lhp_buku = lhp_buku and rik_lhp_no = lhp_no and rik_lhp_tgl = lhp_tgl) rik_kode,
	(select rik_ms1 from sip_rik where rik_lhp_buku = lhp_buku and rik_lhp_no = lhp_no and rik_lhp_tgl = lhp_tgl) skp_ms1,
	(select rik_ms2 from sip_rik where rik_lhp_buku = lhp_buku and rik_lhp_no = lhp_no and rik_lhp_tgl = lhp_tgl) skp_ms2,
	sum(if(substring(skp_no, 7, 1) = '1', skp_nilai, 0)) stp_total, sum(if(substring(skp_no, 7, 1) = '1', 1, 0)) stp_jml,
	sum(if(substring(skp_no, 7, 1) = '2', skp_nilai, 0)) skpkb_total, sum(if(substring(skp_no, 7, 1) = '2', 1, 0)) skpkb_jml,
	sum(if(substring(skp_no, 7, 1) = '3', skp_nilai, 0)) skpkbt_total, sum(if(substring(skp_no, 7, 1) = '3', 1, 0)) skpkbt_jml,
	sum(if(substring(skp_no, 7, 1) = '4', skp_nilai, 0)) skplb_total, sum(if(substring(skp_no, 7, 1) = '4', 1, 0)) skplb_jml,
	sum(if(substring(skp_no, 7, 1) = '5', skp_nilai, 0)) skpn_total, sum(if(substring(skp_no, 7, 1) = '5', 1, 0)) skpn_jml
from
	sip_rik_skp
where
	skp_npwp = '016573396331000'
group by
	lhp_buku, lhp_tgl, lhp_no
order by
	rik_kode, substring(skp_ms1, 3, 2), substring(skp_ms1, 1, 2);
	*/
}
?>