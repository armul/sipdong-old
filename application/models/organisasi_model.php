<?php
class Organisasi_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
		setlocale(LC_TIME, "id_ID");
	}
	public function cari_organisasi()
	{
		$this->db->select('org_ktr, org_nama, org_alamat, org_kota, org_kdpos, org_kdtelp, org_notelp, org_nofaks');
		$this->db->from('sip_org');
		$this->db->like('org_nama', 'KPP');
		$this->db->order_by('org_ktr');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>