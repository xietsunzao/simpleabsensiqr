<?php
  class Dashboard extends CI_Controller{

      public function __construct(){
      	parent::__construct();
          $this->load->library('user_agent');
      		if (!$this->ion_auth->logged_in()){
      			redirect('auth');
      		  }
      		$this->load->model('Dashboard_model', 'dashboard');
      		$this->user = $this->ion_auth->user()->row();
      	}


        public function index(){
          $user = $this->user;
          $data = array (
          'user' => $user,
          'users' 	=> $this->ion_auth->user()->row(),
          );


          $this->template->load('template','dashboard',$data);

        }



}

















 ?>
