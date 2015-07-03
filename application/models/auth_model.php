<?php
class Auth_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
	public function login($username, $password)
	{
		$query = $this->db->get_where('sip_peg', array('peg_ip' => $username, 'peg_ks' => md5($password)));
		if ($query->num_rows() == 1) {
			$user = $query->result_array();
			return $user[0];
		} else {
			return false;
		}
	}
	public function logout()
	{
		if (isset($_SESSION['auth'])) {
			foreach ($_SESSION as $sessvar) {
				unset($sessvar);
			}
		}
		session_destroy();
		header('location: /');
	}
	public function proper($link)
	{
		return ucwords(str_replace('-', ' ', $link));
	}
	public $icon = array(
		'tata-usaha' => 'envelope',
		'pemeriksaan' => 'list-alt',
		'dropbox' => 'list'
	);
}