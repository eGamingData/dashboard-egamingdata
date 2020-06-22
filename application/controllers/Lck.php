<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lck extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'LCK League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'lck';

	}

	public function index()
	{		

		$this->page_data['lck'] = $this->lck_model->get();
		$this->load->view('leagueoflegends/lck', $this->page_data);

	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */