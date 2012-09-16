<?php

require_once 'TemplateBase.php';

class CI_Template extends TemplateBase {

	public $theme = null;
	
	public function __construct()
	{
		parent::CI_Template();
	}
	
	public function set_theme($theme)
	{
		$this->theme = $theme;
		return $this;
	}
	
	private function has_theme()
	{
		return is_null($this->theme);
	}
	
}