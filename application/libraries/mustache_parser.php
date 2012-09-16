<?php

require_once 'Mustache/Mustache.php';

class Mustache_parser extends Mustache {

	public function parse($template, $data=array(), $return=false)
	{
		$CI =& get_instance();
		$template = $CI->load->view($template, $data, TRUE);
		
		return $this->_parse($template, $data, $return);
	}
	
	public function parse_string($template, $data=array(), $return=false)
	{
		return $this->_parse($template, $data, $return);
	}
	
	private function _parse($template, $data=array(), $return=false)
	{
		if ($template == '')
		{
			return FALSE;
		}

		$template = parent::render($template, $data);

		if ($return == FALSE)
		{
			$CI =& get_instance();
			$CI->output->append_output($template);
		}

		return $template;
	}
	
}