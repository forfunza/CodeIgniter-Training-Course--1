<?php

class MY_Form_validation extends CI_Form_validation {

	public function username_check($str)
	{
		if ($str != 'jQuryTips') {
			//$this->set_message('username_check', 'The %s must be jQueryTips');
			return false;
		}
		return true;
	}
	
}