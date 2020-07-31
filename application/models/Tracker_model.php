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

}

/* End of file Leagueoflegends_model.php */
/* Location: ./application/models/Leagueoflegends_model.php */