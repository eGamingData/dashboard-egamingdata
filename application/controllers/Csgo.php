<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csgo extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'CS:GO Data';
		$this->page_data['page']->menu = 'csgo';
	}

	public function index()
	{
		$this->load->view('csgo/csgo', $this->page_data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */