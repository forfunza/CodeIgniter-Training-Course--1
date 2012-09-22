<?php

/**
 * isLoggednIn function.
 * 
 * @access public
 * @return void
 */
function isLoggedIn()
{
	$CI =& get_instance();
	$CI->load->model('auth/model_auth', 'auth');	
	$userdata = $CI->auth->user();
	
	if (empty($userdata)) {
		return false;
	}
	
	if (!isset($userdata['uid']) || (int)$userdata['uid'] == 0) {
		return false;
	}
	return true;
}

function authUserInfo()
{
	$CI =& get_instance();
	$CI->load->model('auth/model_auth', 'auth');	
	$userdata = $CI->auth->user();
	
	if (!empty($userdata))
	{
		$uid = $userdata['uid'];
		return userInfo($uid);
	}
	return false;
}

function userInfo($uid)
{
	$CI =& get_instance();
	$CI->load->model('users/user');
	
	$user = new User();
	$user->where('id', $uid);
	
	return $user->get();
}
