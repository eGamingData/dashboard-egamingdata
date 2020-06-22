<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leagueoflegends extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Permissions Management';
		$this->page_data['page']->menu = 'leagueoflegends';

	}

	public function index()
	{		
		ifPermissions('permissions_list');

		$this->page_data['lec'] = $this->leagueoflegends_model->get();
		$this->load->view('leagueoflegends/leagueoflegends', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */