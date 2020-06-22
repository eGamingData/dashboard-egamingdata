<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dota extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Dota Data';
		$this->page_data['page']->menu = 'dota';
	}

	public function index()
	{
		$this->load->view('dota/dota', $this->page_data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */