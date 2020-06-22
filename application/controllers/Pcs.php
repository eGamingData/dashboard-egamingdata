<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pcs extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'PCS League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'pcs';

	}

	public function index()
	{		

		$this->page_data['pcs'] = $this->pcs_model->get();
		$this->load->view('leagueoflegends/pcs', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */