<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lol_players extends MY_Controller {


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

	//Function to load LEC Players on lec_players.php
	public function get_lec_players()
	{
		$league = 'lec';
		$this->page_data['page']->title = strtoupper($league) . ' Players Data'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Players Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-players'; //Submenu level
		$this->page_data['page']->subsubmenu = 'players-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['players_data'] = $this->lol_players_model->getPlayersDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_players_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/players/lec_players', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Players on lec_players.php
	public function get_lcs_players()
	{
		$league = 'lcs';
		$this->page_data['page']->title = strtoupper($league) . ' Players Data'; // Header title
		$this->page_data['page']->pagetitle = 'League Championship Series'; //Page main title
		$this->page_data['page']->subpagetitle = 'Players Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-players'; //Submenu level
		$this->page_data['page']->subsubmenu = 'players-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['players_data'] = $this->lol_players_model->getPlayersDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_players_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/players/lcs_players', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Players on lec_players.php
	public function get_lck_players()
	{
		$league = 'lck';
		$this->page_data['page']->title = strtoupper($league) . ' Players Data'; // Header title
		$this->page_data['page']->pagetitle = 'League Championship Korea'; //Page main title
		$this->page_data['page']->subpagetitle = 'Players Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-players'; //Submenu level
		$this->page_data['page']->subsubmenu = 'players-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['players_data'] = $this->lol_players_model->getPlayersDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_players_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/players/lck_players', $this->page_data); //Load all previos filled data to view.
	}


	//Function to load LEC Players on lec_players.php
	public function get_lpl_players()
	{
		$league = 'lpl';
		$this->page_data['page']->title = strtoupper($league) . ' Players Data'; // Header title
		$this->page_data['page']->pagetitle = 'League Of Legends Pro League'; //Page main title
		$this->page_data['page']->subpagetitle = 'Players Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-players'; //Submenu level
		$this->page_data['page']->subsubmenu = 'players-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['players_data'] = $this->lol_players_model->getPlayersDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_players_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/players/lpl_players', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Players on lec_players.php
	public function get_lcsa_players()
	{
		$league = 'lcsa';
		$this->page_data['page']->title = strtoupper($league) . ' Players Data'; // Header title
		$this->page_data['page']->pagetitle = 'League Championship Series Academy'; //Page main title
		$this->page_data['page']->subpagetitle = 'Players Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-players'; //Submenu level
		$this->page_data['page']->subsubmenu = 'players-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['players_data'] = $this->lol_players_model->getPlayersDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_players_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/players/lcs_players', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Players on lec_players.php
	public function get_cblol_players()
	{
		$league = 'cblol';
		$this->page_data['page']->title = strtoupper($league) . ' Players Data'; // Header title
		$this->page_data['page']->pagetitle = 'Campeonato Brasileño de League of Legends'; //Page main title
		$this->page_data['page']->subpagetitle = 'Players Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-players'; //Submenu level
		$this->page_data['page']->subsubmenu = 'players-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['players_data'] = $this->lol_players_model->getPlayersDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_players_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/players/cblol_players', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Players on lec_players.php
	public function get_ck_players()
	{
		$league = 'ck';
		$this->page_data['page']->title = strtoupper($league) . ' Players Data'; // Header title
		$this->page_data['page']->pagetitle = 'Challenger Korea'; //Page main title
		$this->page_data['page']->subpagetitle = 'Players Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-players'; //Submenu level
		$this->page_data['page']->subsubmenu = 'players-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['players_data'] = $this->lol_players_model->getPlayersDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_players_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/players/ck_players', $this->page_data); //Load all previos filled data to view.
	}

	//Function to load LEC Players on lec_players.php
	public function get_pcs_players()
	{
		$league = 'pcs';
		$this->page_data['page']->title = strtoupper($league) . ' Players Data'; // Header title
		$this->page_data['page']->pagetitle = 'Pacific Championship Series'; //Page main title
		$this->page_data['page']->subpagetitle = 'Players Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-players'; //Submenu level
		$this->page_data['page']->subsubmenu = 'players-' . $league;//3rd menu level (subsubmenu)

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['players_data'] = $this->lol_players_model->getPlayersDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_players_model->getLastUpdatedByLeague($league); //Get the last update date by @param league

		$this->load->view('leagueoflegends/players/pcs_players', $this->page_data); //Load all previos filled data to view.
	}
}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */