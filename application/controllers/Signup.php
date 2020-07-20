<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public $data;

	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set( setting('timezone') );

		if( !empty($this->db->username) && !empty($this->db->hostname) && !empty($this->db->database) ){ }else{
			die('Database is not configured');
		}

		if(is_logged()){
			redirect('dashboard','refresh');
		}

		$this->data = [
			'assets' => assets_url(),
			'body_classes'	=> setting('login_theme') == '1' ? 'login-page login-background' : 'login-page-side login-background'
		];

	}
	
		public function index()
	{
	   
		$this->load->view('account/signup', $this->data, FALSE);
	}


  public function signup_data(){
      
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[5]');
         $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[2]');
          $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
         
          $this->form_validation->set_rules('password', 'Password', 'required');
          $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
          
          if($this->input->post('username') != $original_value) {
          $is_unique =  '|is_unique[users.username]';
           } else {
           $is_unique =  '';
           }

            $this->form_validation->set_rules('username', 'User Name', 'required|trim|xss_clean'.$is_unique);
          
        if ($this->form_validation->run() == FALSE)
        {
            $this->index();
            return;
        }else{
                

              $trial_expiry = $date = date('Y-m-d H:i:s', strtotime('+3 days'));
              $data = array(
             'name'=>$_POST['fname'].' '.$_POST['lname'],
              'email'=>$_POST['email'],
               'username'=>$_POST['username'],
                'password'=>hash( "sha256", $_POST['password']),
                'role'=>5,
                'trial_expiry'=>$trial_expiry
             );

              

      $res=$this->db->insert('users',$data);
      
       $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
Sign up process completed successfully.
</div>');
         redirect('/signup');
        }
  }


	
	
}
	?>