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
	public function lec_players()
	{
		//Page info
		$this->page_data['page']->title = 'LEC Players Data'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Players Data'; //Page main end title
		//Menu info
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-players'; //Submenu level
		$this->page_data['page']->subsubmenu = 'players-lec';//3rd menu level (subsubmenu)
		//Data model
		$this->page_data['lec'] = $this->lec_model->get(); //Get data from model

		$this->load->view('leagueoflegends/teams/lec_teams', $this->page_data); //Load all previos filled data to view.
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */