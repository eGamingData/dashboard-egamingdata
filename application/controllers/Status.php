<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Data Status';
		$this->page_data['page']->menu = 'status';

	}

	public function index()
	{		

		$this->page_data['status'] = $this->status_model->get();
		$this->load->view('status', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */