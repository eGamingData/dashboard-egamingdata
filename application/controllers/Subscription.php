<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscription extends MY_Controller {

	public function index()
	{
		$this->page_data['page']->menu = 'subscription';
		$this->load->view('subscription', $this->page_data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */