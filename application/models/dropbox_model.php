<?php
class Dropbox_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function db_insert()
	{
		echo "DB insert";
	}
	public function db_select($db_id = FALSE)
	{
		if ($db_id === FALSE) {
			$query = $this->db->get('sip_db');
		} else {
			$db_search = explode('-', $db_id);
			$query = $this->db->get_where('sip_db', array('db_kdun' => $db_search[1], 'db_nott' => ltrim($db_search[2], '0')));
		}
		return $query->result_array();
		// echo "DB select";
	}
	public function db_update()
	{
		echo "DB update";
	}
	public function db_delete()
	{
		echo "DB delete";
	}
	public function peg_select($peg_ip)
	{
		$query = $this->db->get_where('sip_peg', array('peg_ip' => $peg_ip));
		return $query->result_array();
	}
}