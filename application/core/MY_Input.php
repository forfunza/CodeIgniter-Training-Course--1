<?php

class MY_Input extends CI_Input {
	
	/**
	 * Is GET 
	 * 
	 * @access public
	 * @param  string $compare (default: null)
	 * @return bool
	 */
	public function is_get($compare=null)
	{
		if (!is_null($compare))
		{
			return isset($_GET[$compare]);
		}	
		return (isset($_GET) && count($_GET) > 0);
	}
	
	/**
	 * Is POST 
	 * 
	 * @access public
	 * @param  string $compare (default: null)
	 * @return bool
	 */
	public function is_post($compare=null)
	{
		if (!is_null($compare))
		{
			return isset($_POST[$compare]);
		}	
		return (isset($_POST) && count($_POST) > 0);
	}
	
}