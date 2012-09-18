<?php

class Users extends CI_Controller {

	
	
	public function register()
	{
		$this->template->set_template('frontend');
		
		if ($this->input->is_post())
		{
			$user = new User();
			//$user->where('id', 19)->get();
			$user->username = 'www'; //$this->input->post('email', true);
			$user->password = $this->input->post('password', true);
			$user->save();
			exit(0);
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