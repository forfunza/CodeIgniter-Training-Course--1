<?php

class Blogs extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Index 
	 *
	 * Front-End
	 * List blog entries on front-end
	 * 
	 * @access public
	 * @return string HTML
	 */
	public function index()
	{
		//echo $this->input->is_post();
	}
	
	/**
	 * View 
	 *
	 * Front-End
	 * Look up blog entry specific id
	 * 
	 * @access public
	 * @param  integer $id
	 * @return string HTML
	 */
	public function view($id)
	{
		
	}
	
}