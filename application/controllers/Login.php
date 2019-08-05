<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
     * Codeigniter Bootstrap Alert Library test in controller
     *
     * Author: Agwu Chibueze Dennis
     * Site URL: https://www.chivins.com
     * License: GNU v3.
     */

	class Login extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			
			$this->load->library('alert');
		}
	
		public function index()
		{
			if (!$this->chivins_users->isLogin()) {
				// Set the alert error message if the user is not logged in
				$this->alert->set('You are not logged in. Login to access this page', 'error', 'login_msg');
			}
			else{
				$this->alert->set('Welcome you have successfully logged in to your account', 'success', 'login_msg');
			}
		}
	
	}
