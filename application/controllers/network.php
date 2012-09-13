<?php

class Network extends CI_Controller {	
	
	public function index()
	{
		$this->db->select('*')
			->from('users')
			->join('profiles', 'profiles.user_id=users.id');
			
		
		$records = $this->db->get();
		echo '<pre>'.print_r($records->result(), true).'</pre>';

	}
	
}