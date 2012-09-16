<?php

class Blogs extends CI_Controller {

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
	
	/**
	 * Records 
	 *
	 * List entries on back-end
	 * 
	 * @access public
	 * @return string HTML
	 */
	public function records()
	{
		$view = array();
		
		// load model
		$this->load->model('model_blogs', 'blogs');
		
		// get flash data 
		$success = $this->session->flashdata('success');
		
		// logic with model
		$filters     = array(
			'search' => null
		);
		$currentPage = 1;
		$limit       = 30;
		$orders      = array();
				
		$entries = $this->blogs->getAll($filters, $currentPage, $limit, $orders);
		
		/*echo '<pre>'.print_r($entries, true).'</pre>';
		echo '<p>'.$this->db->last_query().'</p>';		
		exit(0);*/
		
		// prepare parameters for view redering
		$view['success'] = $success;
		$view['entries'] = $entries;
		
		// load view
		$this->load->view('blogs/records', $view);
	}
	
	/**
	 * Callback validation
	 * 
	 * @access public
	 * @param  string $str
	 * @return bool
	 */
	/*public function _username_check($str)
	{
		if ($str != 'jQueryTips')
		{
			$this->form_validation->set_message('_username_check', 'Your %s must be jQueryTips');
			return false;
		}
		return true;
	}*/
	
	/**
	 * Add
	 *
	 * Back-End
	 * Add item on back-end
	 * 
	 * @access public
	 * @return string
	 */
	public function add()
	{
		$view = array();	
	
		if ($this->input->is_post())
		{
			// load form validation lib
			$this->load->library('form_validation');
			
			
			// define rules
			/*$rules = array(
				// input title
				array(
					'field' => 'title', // input name="title"
					'label' => 'Title', 
					//'rules' => 'required|min_length[3]|callback__username_check'
					'rules' => 'required|min_length[3]|username_check'
				),
				// textarea body
				array(
					'field' => 'body', // textarea name="body"
					'label' => 'Body', 
					'rules' => 'required'
				)				
			);

			//set rules
			$this->form_validation->set_rules($rules);*/
			
			if ($this->form_validation->run())
			{
				// logic with model
				
				// load model blogs 
				$this->load->model('model_blogs', 'blogs');
				
				// prepare data ton insert
				$data = array(
					'user_id'    => 0,
					'title'      => $this->input->post('title', true),
					'body'       => $this->input->post('body')
				);		
				$blogs_id = $this->blogs->insert($data);
				
				// if valid all processes
				if ($blogs_id !== false)
				{
					// set flash data					
					$message = 'Content has been added.';
					$this->session->set_flashdata('success', $message);
					
					// redirect application to listing
					redirect('blogs/records#added-id-'.$blogs_id);					
				}
				// error something I don't know
				show_error('Error unknown');				
			}
			// validate failed
			else
			{
				$errors = validation_errors();
				$view['errors'] = $errors;
			}			
		}
		
		$this->load->view('blogs/add', $view);
	}
	
	/**
	 * Edit
	 *
	 * Back-End
	 * Edit Item
	 * 
	 * @access public
	 * @param  integer $id
	 * @return string
	 */
	public function edit($id='')
	{
		if (empty($id)) {
			//show_error('Required ID to look up entry!');
			show_404();
		}
				
		// define variables
		$view = array();
		
		// load model
		$this->load->model('model_blogs', 'blogs');
		
		// get a record
		$entry = $this->blogs->getRecord($id);
		
		// prepare data to view
		$view['entry'] = $entry;
		
		// load view
		$this->load->view('blogs/edit', $view);
	}
	
	/**
	 * Delete
	 *
	 * Back-End
	 * Delete an item 
	 * 
	 * @access public
	 * @param  integer $id
	 * @return void
	 */
	public function delete($id)
	{
		
	}
	
}