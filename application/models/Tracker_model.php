<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracker_model extends MY_Model {

	public $table = 'bet_tracker';

	public function __construct()
	{
		parent::__construct();
	}
	
	
	public function tracker_insert($table,$data){
	    $this->db->insert($table,$data);
	}
	
	public function tracker_select(){
	 $result=   $this -> db
    -> select('*')
    ->where('user_id',$_SESSION['logged']['id'])
    -> get('bet_tracker')
    -> result();
    return $result;
	}
	
	
	public function delete_tracker($id){
	     $this->db->where('id', $id);
        $this->db->delete('bet_tracker');
	}
	
	public function update($data,$id){
	    $this->db->where('id', $id);
        $this->db->update('bet_tracker', $data);
	}

	public function getTotalBets()
	{	
		return $this->db->query('SELECT * FROM bet_tracker where user_id ="'. $_SESSION['logged']['id'] .'"' )->num_rows();
		
	}

	public function getBetsWonByUser()
	{
		return $this->db->query('SELECT * FROM bet_tracker where outcome != "0" and user_id ="'. $_SESSION['logged']['id'] .'"' )->num_rows();
	}

	public function getBetsLostByUser()
	{
		return $this->db->query('SELECT * FROM bet_tracker where outcome = "0" and user_id ="'. $_SESSION['logged']['id'] .'"' )->num_rows();
	}

	public function getAvgBetProfit()
	{
		$this->db->select_avg('outcome')->where('user_id',$_SESSION['logged']['id']);		
		$query = $this->db->get('bet_tracker');

		$result = $query->row();	

		return round($result->outcome, 2);
	}

	public function getWinPercentage()
	{
		$won_bets = $this->getBetsWonByUser();
		$total_bets = $this->getTotalBets();

		if ($total_bets > 0){
			$win_percentage = ($won_bets / $total_bets)*100;
		} else {
			$win_percentage = 0;
		}


		return  round($win_percentage, 2);
	}

	public function getTotalProfitByUser()
	{
		$this->db->select_sum('outcome')->where('user_id',$_SESSION['logged']['id']);		
		$query = $this->db->get('bet_tracker');

		$result = $query->row();

		$outcome = $result->outcome;

		$this->db->select_sum('stake')->where('user_id',$_SESSION['logged']['id']);		
		$query = $this->db->get('bet_tracker');

		$result = $query->row();

		$stake = $result->stake;

		$total_profit = $outcome - $stake;

		return round($total_profit, 2);

	}


	public function getTrackerInfoByUserId()
	{
		return $this->db->get_where('bet_tracker', array('user_id'=> $_SESSION['logged']['id']))->result();
	}
}

/* End of file Leagueoflegends_model.php */
/* Location: ./application/models/Leagueoflegends_model.php */