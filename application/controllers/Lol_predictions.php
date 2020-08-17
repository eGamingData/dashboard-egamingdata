<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Predictions extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'eGamingaData AI';
		$this->page_data['page']->menu = 'predictions';

	}

	public function index()
	{		
		$this->page_data['predictions'] = $this->predictions_model->get();
		$this->load->view('predictions/predictions', $this->page_data);
	}

	public function get_lec_predictions()
	{
		$league = 'lec';
		$this->page_data['page']->title = strtoupper($league) . ' Predicions'; // Header title
		$this->page_data['page']->pagetitle = 'League European Championship'; //Page main title
		$this->page_data['page']->subpagetitle = 'Teams Data'; //Page main end title
		$this->page_data['page']->menu = 'leagueoflegends'; //Menu level 
		$this->page_data['page']->submenu = 'lol-teams'; //Submenu level

		$this->page_data['league_info'] = $this->lol_general_model->getLeagueInfo($league);//Get league info, like name, image, datapoints...

		$this->page_data['teams_data'] = $this->lol_teams_model->getTeamsDataByLeague($league); //Get teams data by @param league

		$this->page_data['last_update'] = $this->lol_teams_model->getLastUpdatedByLeague($league); //Get the last update date by @param league
		$this->load->view('predictions/lec/lec_predictions.php', $this->page_data);
	}

	public function get_lcs_predictions()
	{

	}
	

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */