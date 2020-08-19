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
		
		$this->page_data['page']->title = ' League of Legends Data'; // Header title
		$this->page_data['page']->pagetitle = 'League of Legends'; //Page main title
		$this->page_data['page']->subpagetitle = 'Champions Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'lol-general';
		$this->page_data['leagues_info'] = $this->lol_general_model->getLeagueInfo('lec');
		$this->load->view('leagueoflegends/leagueoflegends', $this->page_data);
	}



}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */