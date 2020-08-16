<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lol_champions extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'League of Legends';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'home';

	}

	//Home page for Teams section.
	public function index()
	{		
		$this->page_data['lcs'] = $this->lcs_model->get();
		$this->load->view('leagueoflegends/leagueoflSegends', $this->page_data);
	}

	//Function to load LEC Champions on lec_players.php
	public function get_lec_champions()
	{
		$league = 'lec';
		$this->page_data['page']->title = strtoupper($league) . ' Champions Data'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Champions Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-champions'; //Submenu level
		$this->page_data['page']->subsubmenu = 'champions-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['champions_data'] = $this->lol_champions_model->getChampionsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_champions_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/champions/lec_champions', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Champions on lec_players.php
	public function get_lck_champions()
	{
		$league = 'lck';
		$this->page_data['page']->title = strtoupper($league) . ' Champions Data'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Champions Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-champions'; //Submenu level
		$this->page_data['page']->subsubmenu = 'champions-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['champions_data'] = $this->lol_champions_model->getChampionsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_champions_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/champions/lck_champions', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Champions on lec_players.php
	public function get_lcs_champions()
	{
		$league = 'lcs';
		$this->page_data['page']->title = strtoupper($league) . ' Champions Data'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Champions Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-champions'; //Submenu level
		$this->page_data['page']->subsubmenu = 'champions-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['champions_data'] = $this->lol_champions_model->getChampionsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_champions_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/champions/lcs_champions', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Champions on lec_players.php
	public function get_lcsa_champions()
	{
		$league = 'lcsa';
		$this->page_data['page']->title = strtoupper($league) . ' Champions Data'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Champions Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-champions'; //Submenu level
		$this->page_data['page']->subsubmenu = 'champions-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['champions_data'] = $this->lol_champions_model->getChampionsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_champions_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/champions/lcsa_champions', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Champions on lec_players.php
	public function get_pcs_champions()
	{
		$league = 'pcs';
		$this->page_data['page']->title = strtoupper($league) . ' Champions Data'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Champions Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-champions'; //Submenu level
		$this->page_data['page']->subsubmenu = 'champions-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['champions_data'] = $this->lol_champions_model->getChampionsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_champions_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/champions/pcs_champions', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Champions on lec_players.php
	public function get_cblol_champions()
	{
		$league = 'cblol';
		$this->page_data['page']->title = strtoupper($league) . ' Champions Data'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Champions Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-champions'; //Submenu level
		$this->page_data['page']->subsubmenu = 'champions-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['champions_data'] = $this->lol_champions_model->getChampionsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_champions_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/champions/cblol_champions', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Champions on lec_players.php
	public function get_lpl_champions()
	{
		$league = 'lpl';
		$this->page_data['page']->title = strtoupper($league) . ' Champions Data'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Champions Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-champions'; //Submenu level
		$this->page_data['page']->subsubmenu = 'champions-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['champions_data'] = $this->lol_champions_model->getChampionsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_champions_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/champions/lpl_champions', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Champions on lec_players.php
	public function get_ck_champions()
	{
		$league = 'ck';
		$this->page_data['page']->title = strtoupper($league) . ' Champions Data'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Champions Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-champions'; //Submenu level
		$this->page_data['page']->subsubmenu = 'champions-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['champions_data'] = $this->lol_champions_model->getChampionsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_champions_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/champions/ck_champions', $this->page_data); //Load all previos filled data to view.
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */