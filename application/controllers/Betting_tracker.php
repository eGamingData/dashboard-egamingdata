<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Betting_tracker extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Betting Tracker';
		$this->page_data['page']->menu = 'betting_tracker';

	}


	public function index()
	{
		$this->load->view('betting_tracker', $this->page_data);

	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */

