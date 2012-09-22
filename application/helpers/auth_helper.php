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
	$CI->load->model('model_auth', 'auth');	
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
}

function userInfo($uid)
{
}
