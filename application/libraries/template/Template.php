<?php

require_once 'TemplateBase.php';

class CI_Template extends TemplateBase {

	private $_theme_base_dir = 'themes';

	private $_theme = null;
	
	public function __construct()
	{
		parent::CI_Template();
	}
	
	public function set_theme($theme)
	{
		$this->_theme = $theme;
		return $this;
	}
	
	public function set_template($group)
	{
		parent::set_template($group);		
		$this->add_region('_theme_name', array(
			'content' => array($this->_theme)
		));
	}
	
	public function get_theme()
	{
		return $this->_theme;
	}
	
	public function has_theme()
	{
		return !is_null($this->_theme);
	}
	
	public function initialize($props)
	{		
		$lookup = basename($props['template']);
		
		$template = $this->find_theme_container('layouts', $lookup);
		
		$props['template'] = ($template) ? $template : $props['template'];	

		parent::initialize($props);
	}
	
	public function find_theme_container($container, $file='')
	{
		if (!$this->has_theme()) {
			return false;
		}
		
		$paths['basepath']  = $this->_theme_base_dir;
		$paths['struct']    = $this->_theme;
		$paths['container'] = $container;
		$paths['file']      = $file;
		
		$locate = implode('/', $paths);
		if (file_exists(APPPATH.'views/'.$locate.'.php')) {
			return $locate;
		}		
		return false;
	}	
	
}