<?php

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();

		if($this->session->userdata('status')!="login"){
			redirect('tlogin');
		}
				
		
	}
}