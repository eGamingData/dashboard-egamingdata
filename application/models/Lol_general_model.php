<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lol_general_model extends MY_Model {


	public function __construct()
	{
		parent::__construct();
	}

	function getLeagueInfo($league)
	{
		return $this->db->get_where('lol_leagues', array('league'=> $league))->row();	
	}

	public function getLeagueLongName($league)
	{
		return $this->db->select('league_name')->where('league', $league)->get('lol_leagues')->row();
	}

}

/* End of file Roles_model.php */
/* Location: ./application/models/Roles_model.php */