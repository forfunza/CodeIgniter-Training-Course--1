<?php

class Labs extends CI_Controller {
	
	public function index()
	{
		
	}	
	
	public function template()
	{
		$view = array();
		

		$this->template->set_template('frontend');
	
		//$this->template->set_template('frontend');
		$this->template->write('title', 'Custom my title OKKKKK', true);
		
		$this->template->write_view('content', 'labs/template', $view);
		
		$this->template->render();
	}
	
	public function parser()
	{
		$this->load->library('parser');
		
		$data = array(
			'name'    => 'All',
			'content' => 'Email Template'
		);
		
		$tpl = '
			<p>dear, {name}</p>
			<p>{content}</p>
			<p>Thank you</p>
		';
		
		$this->parser->parse_string($tpl, $data);
		
		
		//$this->parser->parse('labs/parser', $data);
	}
	
	public function mustache()
	{
		$view = array(
			'name' => 'Tee'
		);
		
		$this->template->set_template('frontend');
		$this->template->set_parser('mustache_parser');
		
		$this->template->parse_view('content', 'labs/mustache', $view);
		$this->template->render();
	}
	
}