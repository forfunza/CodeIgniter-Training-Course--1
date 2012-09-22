<?php

class MY_Controller extends MX_Controller {
	
	 public function __construct()
	 {	 
		 $control = $this->uri->segment(2);
		 
		 if (strcasecmp($control, 'admin') == 0)
		 {
			 // logic check login
			 if (!isLoggedIn()) {
				 //show_error('Sorry, You need to login before manage.');
				 redirect('auth/login#access-denied');
			 }
		 }
	 
		 parent::__construct();
	 }
	
}