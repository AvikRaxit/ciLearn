<?php 

	class User extends CI_Controller
	{
		public function index() {
			// $this->load->model('Usermodel'); // auto load to the autoload.php
			$getdata['allusers'] = $this->Usermodel->getUserData();
			// print_r($getdata);
			$this->load->view('users/user_list',$getdata);
		}
		
	}
?>