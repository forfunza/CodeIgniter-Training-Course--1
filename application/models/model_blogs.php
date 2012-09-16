<?php

class model_blogs extends CI_Model {
	
	/**
	 * Get all records with filter
	 * 
	 * @access public
	 * @param  array $filters
	 * @param  int $page (default: 1)
	 * @param  int $limit (default: 20)
	 * @param  array $orders (default: array())
	 * @return object
	 */
	public function getAll(array $filters=array(), $page=1, $limit=20, array $orders=array())
	{
		$this->db->select()->from('blogs')->limit($limit);
		
		/*if (isset($filters['user_id'])) 
		{
			$userId = $filters['user_id'];
			$this
				->db
				->join('users', 'blogs.user_id=users.id')
				->where('blogs.user_id', $userId);
		}*/
		
		if (isset($filters['search'])) 
		{
			//where title like '%[keyword]%' or body like '%[keyword%'
			
			
			$search = $filters['search'];
			$this->db->like('title', $search);
			$this->db->or_like('body', $search);
		}
		
		$query = $this->db->get();
		return $query->result();
	}	
	
	public function getRecord($id)
	{
		
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