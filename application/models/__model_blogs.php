<?php

class model_blogs extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();	
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
	}
	
	public function getAll()
	{
		/*$this->db->select()
			->from('blogs')
			->where('body', 'Something');
			
	
		$query = $this->db->get();
		
		
		print_r($query->result_array());*/
		
		//echo $this->db->last_query();
	}	
	
	public function getRecord($id)
	{
		$ckey = 'blogs_'.$id;
		
		if (!$entry = $this->cache->get($ckey))
		{		
			echo 'still alive';
			$this->db->where('id', $id);
			$query =$this->db->get('blogs');
			
			$entry = $query->row();
			$this->cache->save($ckey, $entry, 60);
		}
		
		//print_r($this->cache->cache_info());
		
		//$this->cache->delete($ckey);
		return $entry;
	}
	
	public function insert($data)
	{
		$this->db->set('created_at', 'NOW()', false);
		if ($this->db->insert('blogs', $data))
		{
			return $this->db->insert_id();
		}
		return false;
	}
	
	public function update($data, $id)
	{
		$this->db->set('updtaed_at', 'NOW()', false);
	}
	
	public function delete($id)
	{
		
	}
	
}