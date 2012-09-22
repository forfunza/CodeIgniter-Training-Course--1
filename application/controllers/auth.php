<?php

class Auth extends CI_Controller {
	
	public function login()
	{
		$this->template->set_template('frontend');
		
		$view = array();
		
		if ($this->input->is_post())
		{
			$this->load->library('form_validation');
			
			$rules = array(
				array('field' => 'email', 'label' => 'Email', 'rules' => 'required'),
				array('field' => 'password', 'label' => 'Password', 'rules' => ''),
				array('field' => 'remember', 'label' => 'Remember Me', 'rules' => '')
			);
			$this->form_validation->set_rules($rules);
			
			if ($this->form_validation->run() === true)
			{	
				$email    = $this->input->post('email', true);
				$password = $this->input->post('password', true);
				
				$this->load->model('model_auth', 'auth');
				
				//alert( $auth, true );
				
				$uid = $this->auth->attemp($email, $password);
				
				if ($uid > 0)
				{
					$this->auth->login($uid);
					redirect('/auth/check#logged_in');
				}
				else
				{
					$view['errors'] = '<p>Invalid Login!!!!</p>';
				}
			}
			else
			{
				$errors = validation_errors();
				$view['errors'] = $errors;
			}				
		}
		
		
		$this->template->write_view('content', 'auth/login', $view);
		$this->template->render();
	}
	
	public function check()
	{
		$this->load->model('model_auth', 'auth');
		
		$userdata = $this->auth->user();
		alert ($userdata );
	}
	
}