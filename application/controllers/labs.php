<?php

class Labs extends CI_Controller {
	
	public function index()
	{
		
	}
	
	public function orm()
	{
		$user = new User();
		$u = $user->where('id', 1)->get();
		
		$blogs = $u->blog->get();
		
		foreach ($blogs as $blog)
		{
			echo '<p>'.$blog->title.'</p>';
		}
	}
	
	public function orm2()
	{
		$blog = new Blog();
		$blog->where('id', 9)->get();
		
		$user =  $blog->user->get();
		
		echo $user->username;
	}
	
	public function orm3()
	{
		$blog = new Blog();
		$blog->where('id', 10)->get();
		$blog->user_id = 100;
		$blog->save();
	}
	
	public function template()
	{
		$view = array();
		
		$this->template->set_template('frontend');
		
		
	
		$this->template->set_template('frontend');
		$this->template->write('title', 'Custom my title OKKKKK', true);
		
		$this->template->write_view('content', 'labs/template', $view);
		
		$this->template->render();
	}
	
	public function theme()
	{
		$this->template->set_theme('spring')->set_template('frontend');
		$this->template->write('content', 'Draw Something');
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