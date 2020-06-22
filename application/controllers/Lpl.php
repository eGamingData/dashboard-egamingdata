<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lpl extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'LPL League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'lpl';

	}

	public function index()
	{		

		$this->page_data['lpl'] = $this->lpl_model->get();
		$this->load->view('leagueoflegends/lpl', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */