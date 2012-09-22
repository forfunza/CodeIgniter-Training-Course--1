<?php

class Auth extends MY_Controller {

	public function index()
	{
		redirect('auth/login');
	}
	
	public function login()
	{
		//alert( authUserInfo(), true );
		$this->template->set_template('backend');
		
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
					//redirect('/auth/check#logged_in');
					redirect('blogs/admin#logged_in');
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
	
	public function logout()
	{
		$this->load->model('auth/model_auth', 'auth');
		$this->auth->forget();
		redirect('/#exited');
	}
	
	/*public function check()
	{
		$this->load->model('model_auth', 'auth');
		
		$userdata = $this->auth->user();
		alert ($userdata );
	}*/
	
}