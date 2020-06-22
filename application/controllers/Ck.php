<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ck extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'CK LOL League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'ck';

	}

	public function index()
	{		

		$this->page_data['ck'] = $this->ck_model->get();
		$this->load->view('leagueoflegends/ck', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */