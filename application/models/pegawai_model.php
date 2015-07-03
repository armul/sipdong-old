<?php
class Pegawai_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
		setlocale(LC_TIME, "id_ID");
	}
	public function cari_pegawai($ktr)
	{
		$this->db->select('peg_nama, peg_nip, peg_ip, peg_jab, peg_es2, peg_es3, peg_es4, peg_kjf');
		$this->db->from('sip_peg');
		$this->db->where('peg_ktr', $ktr);
		$this->db->order_by('peg_esl, peg_es4, peg_jab');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function cari_organisasi($es2, $es3, $es4, $kjf)
	{
		$this->db->select('org_nama');
		$this->db->from('sip_org');
		$this->db->where('org_es2', $es2);
		$this->db->where('org_es3', $es3);
		$this->db->where('org_es4', $es4);
		$this->db->where('org_kjf', $kjf);
		$query = $this->db->get();
		return $query->row()->org_nama;
	}
	public function cari_kantor($kode) {
		$this->db->select('org_nama');
		$this->db->from('sip_org');
		$this->db->where('org_ktr', $kode);
		$query = $this->db->get();
		return $query->row()->org_nama;
	}
}
?>