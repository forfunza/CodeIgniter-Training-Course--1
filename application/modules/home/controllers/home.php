<?php

class Home extends MY_Controller {
		
	public function index()
	{
		if (isLoggedIn()) {
			redirect('blogs/admin');
		}
		redirect('auth/login');
	}	
	
}