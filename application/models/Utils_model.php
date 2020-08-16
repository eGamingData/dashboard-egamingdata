<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utils_model extends MY_Model {



	public function __construct()
	{
		parent::__construct();
	}


	public function getDbImage()
	{
		return $this->db->get('images')->result();	
	}
}

/* End of file Leagueoflegends_model.php */
/* Location: ./application/models/Leagueoflegends_model.php */