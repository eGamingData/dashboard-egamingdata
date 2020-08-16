<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lol_teams extends MY_Controller {


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

	public function read() 
	{
    $object['controller'] = $this; 
    $this->load->view('read', $object);
	}




	//Function to load LEC Teams on lec_teams.php
	public function get_lec_teams()
	{
		$league = 'lec';
		$this->page_data['page']->title = strtoupper($league) . ' Teams Data'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Teams Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-teams'; //Submenu level
		$this->page_data['page']->subsubmenu = 'teams-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['images'] = $this->utils_model->getDbImage();

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['teams_data'] = $this->lol_teams_model->getTeamsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_teams_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/teams/lec_teams', $this->page_data); //Load all previos filled data to view.
	}


	//Function to load LCS Teams on lcs_teams.php
	public function get_lcs_teams()
	{
		$league = 'lcs';
		$this->page_data['page']->title = strtoupper($league) . ' Teams Data'; // Header title
		$this->page_data['page']->pagetitle = 'League Championship Series'; //Page main title
		$this->page_data['page']->subpagetitle = 'Teams Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-teams'; //Submenu level
		$this->page_data['page']->subsubmenu = 'teams-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['teams_data'] = $this->lol_teams_model->getTeamsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_teams_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/teams/lcs_teams', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LCS Teams on lcs_teams.php
	public function get_lck_teams()
	{
		$league = 'lck';
		$this->page_data['page']->title = strtoupper($league) . ' Teams Data'; // Header title
		$this->page_data['page']->pagetitle = 'League Championship Korea'; //Page main title
		$this->page_data['page']->subpagetitle = 'Teams Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-teams'; //Submenu level
		$this->page_data['page']->subsubmenu = 'teams-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['teams_data'] = $this->lol_teams_model->getTeamsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_teams_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/teams/lck_teams', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LPL Teams on lpl_teams.php
	public function get_lpl_teams()
	{
		$league = 'lpl';
		$this->page_data['page']->title = strtoupper($league) . ' Teams Data'; // Header title
		$this->page_data['page']->pagetitle = 'League Of Legends Pro League'; //Page main title
		$this->page_data['page']->subpagetitle = 'Teams Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-teams'; //Submenu level
		$this->page_data['page']->subsubmenu = 'teams-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['teams_data'] = $this->lol_teams_model->getTeamsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_teams_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/teams/lpl_teams', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load CBLOL Teams on cblol_teams.php
	public function get_cblol_teams()
	{
		$league = 'cblol';
		$this->page_data['page']->title = strtoupper($league) . ' Teams Data'; // Header title
		$this->page_data['page']->pagetitle = 'Campeonato Brasileño de League of Legends'; //Page main title
		$this->page_data['page']->subpagetitle = 'Teams Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-teams'; //Submenu level
		$this->page_data['page']->subsubmenu = 'teams-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['teams_data'] = $this->lol_teams_model->getTeamsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_teams_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/teams/cblol_teams', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load CBLOL Teams on cblol_teams.php
	public function get_lcsa_teams()
	{
		$league = 'lcsa';
		$this->page_data['page']->title = strtoupper($league) . ' Teams Data'; // Header title
		$this->page_data['page']->pagetitle = 'League Championship Series Academy'; //Page main title
		$this->page_data['page']->subpagetitle = 'Teams Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-teams'; //Submenu level
		$this->page_data['page']->subsubmenu = 'teams-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['teams_data'] = $this->lol_teams_model->getTeamsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_teams_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/teams/lcsa_teams', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load PCS Teams on pcs_teams.php
	public function get_pcs_teams()
	{
		$league = 'pcs';
		$this->page_data['page']->title = strtoupper($league) . ' Teams Data'; // Header title
		$this->page_data['page']->pagetitle = 'Pacific Championship Series'; //Page main title
		$this->page_data['page']->subpagetitle = 'Teams Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-teams'; //Submenu level
		$this->page_data['page']->subsubmenu = 'teams-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['teams_data'] = $this->lol_teams_model->getTeamsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_teams_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/teams/pcs_teams', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LCS Academy Teams on pcs_teams.php
	public function get_ck_teams()
	{
		$league = 'ck';
		$this->page_data['page']->title = strtoupper($league) . ' Teams Data'; // Header title
		$this->page_data['page']->pagetitle = 'Challenger Korea'; //Page main title
		$this->page_data['page']->subpagetitle = 'Teams Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-teams'; //Submenu level		
		$this->page_data['page']->subsubmenu = 'teams-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['teams_data'] = $this->lol_teams_model->getTeamsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_teams_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/teams/ck_teams', $this->page_data); //Load all previos filled data to view.
	}
}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */