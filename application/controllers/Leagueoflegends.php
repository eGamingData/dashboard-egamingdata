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

		$this->page_data['lcs'] = $this->lcs_model->get();
		$this->load->view('leagueoflegends/leagueoflegends', $this->page_data);
	}

	//Function to load LEC page under League of Legends section.
	public function lec()
	{
		$this->page_data['page']->title = 'LEC League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'lec';
		$this->page_data['lec'] = $this->lec_model->get();
		$this->load->view('leagueoflegends/lec', $this->page_data);
	}

	//Function to load LCK page under League of Legends section.
	public function lck()
	{
		$this->page_data['page']->title = 'LCK League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'lck';
		$this->page_data['lck'] = $this->lec_model->get();
		$this->load->view('leagueoflegends/lck', $this->page_data);
	}

	public function lcs()
	{
		$this->page_data['page']->title = 'LCS League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'lcs';
		$this->page_data['lcs'] = $this->lcs_model->get();
		$this->load->view('leagueoflegends/lcs', $this->page_data);
	}

	public function lpl()
	{
		$this->page_data['page']->title = 'lpl League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'lpl';
		$this->page_data['lpl'] = $this->lpl_model->get();
		$this->load->view('leagueoflegends/lpl', $this->page_data);
	}

	public function cblol()
	{
		$this->page_data['page']->title = 'CBLOL League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'cblol';
		$this->page_data['cblol'] = $this->cblol_model->get();
		$this->load->view('leagueoflegends/cblol', $this->page_data);
	}

	public function ck()
	{
		$this->page_data['page']->title = 'CK League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'ck';
		$this->page_data['ck'] = $this->ck_model->get();
		$this->load->view('leagueoflegends/ck', $this->page_data);
	}

	public function pcs()
	{
		$this->page_data['page']->title = 'PCS League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'pcs';
		$this->page_data['pcs'] = $this->pcs_model->get();
		$this->load->view('leagueoflegends/pcs', $this->page_data);
	}

	public function eum()
	{
		$this->page_data['page']->title = 'EUM League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'eum';
		$this->page_data['eum'] = $this->eum_model->get();
		$this->load->view('leagueoflegends/eum', $this->page_data);
	}

	public function naa()
	{
		$this->page_data['page']->title = 'LCSA League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'naa';
		$this->page_data['naa'] = $this->naa_model->get();
		$this->load->view('leagueoflegends/naa', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */