<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lol_teams_model extends MY_Model {

	public $table = 'lol_teams_data';

	public function __construct()
	{
		parent::__construct();
	}

	/**
	  * Get teams data by league.
	  * 
	  * @param string $league - League to filter data by
	  *
	  * @return result()
	  */
	function getTeamsDataByLeague($league)
	{
		return $this->db->get_where('lol_teams_data', array('league'=> $league))->result();	
	}


	/**
	  * Get data last update for by league.
	  * 
	  * @param string $league - League to filter data by
	  *
	  * @return result()
	  */
	function getLastUpdatedByLeague($league)
	{
		return $this->db->get_where('lol_teams_data', array('league'=> $league))->row();
	}

}

/* End of file Leagueoflegends_model.php */
/* Location: ./application/models/Leagueoflegends_model.php */