<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lcs_predictions extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'eGamingaData AI';
		$this->page_data['page']->menu = 'predictions';
		$this->page_data['page']->submenu = 'lcs-predictions';

	}

	public function index()
	{		

		
		$this->load->view('predictions/lcs/lcs_predictions.php', $this->page_data);
	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */