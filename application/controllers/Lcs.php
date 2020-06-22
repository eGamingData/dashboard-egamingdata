<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lcs extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'LCS League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'lcs';

	}

	public function index()
	{		

		$this->page_data['lcs'] = $this->lcs_model->get();
		$this->load->view('leagueoflegends/lcs', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */