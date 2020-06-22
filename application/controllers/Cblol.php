<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cblol extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'CBLOL League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'cblol';

	}

	public function index()
	{		

		$this->page_data['cblol'] = $this->cblol_model->get();
		$this->load->view('leagueoflegends/cblol', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */