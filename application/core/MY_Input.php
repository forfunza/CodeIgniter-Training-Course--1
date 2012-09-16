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
		return ((isset($_GET) && count($_GET))) && (isset($_GET[$compare]));
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
		return ((isset($_POST) && count($_POST))) && (isset($_POST[$compare]));
	}
	
}