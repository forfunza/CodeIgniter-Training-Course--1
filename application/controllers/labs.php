<?php

class Labs extends CI_Controller {
	
	public function index()
	{
		
	}	
	
	public function template()
	{
		$view = array();
	
		$this->template->set_template('frontend');
		$this->template->write('title', 'Custom my title OKKKKK', true);
		
		$this->template->write_view('content', 'labs/template', $view);
		
		$this->template->render();
	}
	
}