<?php
class Penghargaan_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
		setlocale(LC_TIME, "id_ID");
	}
	public function lihat_nilai($pegawai, $penilai)
	{
		$this->db->select('*');
		$this->db->from('sip_pkp');
		$this->db->where('pegawai', $pegawai);
		$this->db->where('penilai', $penilai);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function simpan_nilai($pegawai, $penilai, $nilai)
	{
		foreach ($nilai as $key => $value) {
			$data['n' . ($key - 1)] = $value;
		}
		//return $data;
		$this->db->where('pegawai', $pegawai);
		$this->db->where('penilai', $penilai);
		$this->db->update('sip_pkp', $data);
	}
	public function lihat_nama($ip)
	{
		$this->db->select('peg_nama nama');
		$this->db->from('sip_peg');
		$this->db->where('peg_ip', $ip);
		$query = $this->db->get();
		return $query->row();
	}
	public function pilih_pegawai($pegawai = false)
	{
		$query = $this->db->query('SELECT DISTINCT pegawai ip, (SELECT peg_nama FROM sip_peg WHERE peg_ip = pegawai) nama FROM sip_pkp');
		$pegawai = $query->result_array();
		foreach ($pegawai as &$peg) {
			$query = $this->db->query("SELECT penilai ip,
(SELECT peg_nama FROM sip_peg WHERE peg_ip = penilai) nama,
status status
FROM sip_pkp
WHERE pegawai = " . $peg['ip'] . "
ORDER BY status DESC;");
			$penilai = $query->result_array();
			foreach ($penilai as $pen) {
				$peg['pen'][] = $pen;
			}
		}
		return $pegawai;
	}
	public function rekapitulasi()
	{
		$query = $this->db->query("SELECT pegawai, sum(case when status = 'atasan' then n1+n2+n3+n4+n5+n6+n7+n8+n9+n10+n11+n12+n13+n14+n15+n16+n17+n18+n19+n20+n21+n22+n23+n24+n25+n26+n27+n28+n29+n30+n31+n32 end) atasan, sum(case when status = 'rekan' then n1+n2+n3+n4+n5+n6+n7+n8+n9+n10+n11+n12+n13+n14+n15+n16+n17+n18+n19+n20+n21+n22+n23+n24+n25+n26+n27+n28+n29+n30+n31+n32 end) rekan FROM sipdong.sip_pkp GROUP BY pegawai");
		return $query->result_array();
	}
}