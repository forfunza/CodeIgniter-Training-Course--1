<?php

class MY_Router extends CI_Router {
	
	public function _validate_request($segments)
	{
		// Does the requested controller exist in the root folder?
		/*if (!file_exists(APPPATH.'controllers/'.$segments[0].'.php'))
		{
			$user = array_shift($segments);
			array_push($segments, $user);
		}*/	
		return parent::_validate_request($segments);
	}
	
}