<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Predictions extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'eGamingaData AI';
		$this->page_data['page']->menu = 'predictions';

	}

	public function index()
	{		

		$this->page_data['predictions'] = $this->predictions_model->get();
		$this->load->view('predictions/predictions', $this->page_data);
	}


	

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */