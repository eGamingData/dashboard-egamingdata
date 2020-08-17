<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leagueoflegends extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'League of Legends';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'home';

	}

	//Home page for League of Legends section.
	public function index()
	{		
		$this->page_data['page']->title = 'General League of Legends Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'lol-general';
		$this->load->view('leagueoflegends/leagueoflegends', $this->page_data);
	}

	//Function to load Players page under League of Legends section.
	public function teams()
	{
		$this->page_data['page']->title = 'Teams League of Legends Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'teams';
		$this->page_data['lec'] = $this->lec_model->get();
		$this->load->view('leagueoflegends/lec', $this->page_data);
	}	

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */