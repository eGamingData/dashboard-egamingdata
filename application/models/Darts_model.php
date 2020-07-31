<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Darts_model extends MY_Model {

	public $table = 'darts_180s';
	public $table_two = 'darts_win_perc';

	public function __construct()
	{
		parent::__construct();
	}


	function getDartsWinPerc()
	{
		return $this->db->get($this->table_two)->result();
	}

}

/* End of file Leagueoflegends_model.php */
/* Location: ./application/models/Leagueoflegends_model.php */