<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lec extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'LEC League Data';
		$this->page_data['page']->menu = 'leagueoflegends';
		$this->page_data['page']->submenu = 'lec';

	}

	public function index()
	{		
		          // get the first row

		$this->page_data['lec'] = $this->lec_model->get();
		$this->load->view('leagueoflegends/lec', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */