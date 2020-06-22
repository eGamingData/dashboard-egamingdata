<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Naa extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'NA Academy League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'naa';

	}

	public function index()
	{		

		$this->page_data['naa'] = $this->naa_model->get();
		$this->load->view('leagueoflegends/naa', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */