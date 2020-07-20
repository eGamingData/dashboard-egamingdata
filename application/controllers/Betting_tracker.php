<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Betting_tracker extends MY_Controller {

	public function index()
	{
		$this->load->view('Betting_tracker', $this->page_data);
		$this->page_data['page']->menu = 'betting_tracker';

	

	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */