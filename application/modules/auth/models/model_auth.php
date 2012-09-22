<?php

class model_auth extends CI_Model {

	public $auth_session_name = 'authentication';
	
	public static function attemp($email, $password)
	{
		$user = new User();
		$user->where('email', $email)->where('password', $password);		
		return $uid = $user->get()->id;
	} 
	
	public function login($uid, $remember=false)
	{
		$data = array(
			'uid'        => $uid,
			'isLoggedIn' => true
		);
		return $this->session->set_userdata($this->auth_session_name, $data);
	}
	
	public function user()
	{
		return $this->session->userdata($this->auth_session_name);
	}
	
	public function forget()
	{
		$this->session->unset_userdata($this->auth_session_name);
		return true;
	}
	
}
