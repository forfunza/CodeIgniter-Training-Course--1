<?php

class Users extends CI_Controller {	
	
	public function register()
	{
		$this->template->set_template('frontend');
		
		$view = array();
		
		if ($this->input->is_post())
		{
			$this->load->library('form_validation');
			
			$rules = array(
				array(
					'field' => 'email', 
					'label' => 'Email', 
					'rules' => 'required|valid_email'
				),
				array(
					'field' => 'password', 
					'label' => 'Password',
					'rules' => 'required|min_length[4]|max_length[20]'
				),
				array(
					'field' => 'repassword',
					'label' => 'Re-Password',
					'rules' => 'required|matches[password]'
				)
			);
			$this->form_validation->set_rules($rules);
			
			if ($this->from_validation->run() === true)
			{
				
			}
			else
			{
				
			}
		
			/*$user = new User();
			//$user->where('id', 19)->get();
			$user->username = $this->input->post('email', true);
			$user->password = $this->input->post('password', true);
			$user->save();
			exit(0);*/
		}
		
		$this->template->write_view('content', 'users/register');
		
		$this->template->render();
	}
	
	public function test()
	{
		$user = new User();
		$user->where('id', 19)->get();
		
		echo $user->created_at;
	}
	
}