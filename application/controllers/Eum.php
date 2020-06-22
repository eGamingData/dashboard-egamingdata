<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eum extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'EU Masters League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'eum';

	}

	public function index()
	{		

		$this->page_data['eum'] = $this->eum_model->get();
		$this->load->view('leagueoflegends/eum', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */