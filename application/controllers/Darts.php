<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Darts extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Darts Data';
		$this->page_data['page']->menu = 'darts';


	}

	public function index()
	{		
		$this->page_data['darts'] = $this->darts_model->get();
		$this->load->view('darts/darts', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */