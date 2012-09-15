<?php

class MY_Input extends CI_Input {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function is_get()
	{
		return (isset($_GET) && count($_GET));
	}
	
	public function is_post()
	{
		return (isset($_POST) && count($_POST));
	}
	
}