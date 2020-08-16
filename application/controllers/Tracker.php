<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracker extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Betting tracker';
		$this->page_data['page']->menu = 'tracker';
            $this->load->model("tracker_model");

	}


	public function index()
	{
	     if(!empty($_POST)){
	        $arr=array(
	            'date'=>$_POST['date'],
	            'event'=>$_POST['event'],
	            'bet_type'=>$_POST['bet_type'],
	            'selection'=>$_POST['selection'],
	            'stake'=>$_POST['stack'],
	            'odds'=>$_POST['odds'],
	            'outcome'=>$_POST['out_come'],
	            'outcome_icon'=>"fa fa-icon",
	            'user_id'=>$_SESSION['logged']['id'],
	            );
	          $this->tracker_model->tracker_insert('bet_tracker',$arr);
	          redirect('tracker');
	         
	     }else{
	    
			$this->page_data['result'] = $this->tracker_model->tracker_select();

			$this->page_data['total_bets'] = $this->tracker_model->getTotalBets();//Gets total amount of bets for the user.
			$this->page_data['total_profit'] = $this->tracker_model->getTotalProfitByUser();//Gets total profit made by the user.
			$this->page_data['bets_won'] = $this->tracker_model->getBetsWonByUser();//Gets total bets won by user.
			$this->page_data['bets_lost'] = $this->tracker_model->getBetsLostByUser();//Gets total bets Lost by user.
			$this->page_data['win_perc'] = $this->tracker_model->getWinPercentage();//Gets win percentage by user.
			$this->page_data['avg_bet_profit'] = $this->tracker_model->getAvgBetProfit();//Gets Average bet profit .




		
	
		$this->load->view('tracker/tracker', $this->page_data);
	}
	}
	
	public function tracker_delete(){
	   
	    $this->tracker_model->delete_tracker($_POST['id_val']);
	    redirect('tracker');
	}
	
		public function update(){
		   
	    $arr=array(
	    		'date'=>$_POST['date'],
	            'event'=>$_POST['event'],
	            'bet_type'=>$_POST['bet_type'],
	            'selection'=>$_POST['selection'],
	            'stake'=>$_POST['stack'],
	            'odds'=>$_POST['odds'],
	            'outcome'=>$_POST['out_come'],
	            );
	            
	             $this->tracker_model->update($arr,$_POST['id']);
	             redirect('tracker');
    	}

	

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */