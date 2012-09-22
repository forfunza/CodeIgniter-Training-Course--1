<?php

class model_blogs extends CI_Model {

	private $_validations = array();
	
	
	public function __construct()
	{
		$this->_validations = array(
			'add' => ''
		);
		parent::__construct();
	}
	
	public function getRule($group)
	{
		return $this->_validations[$group];
	}
	
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
			$search = $filters['search'];
			if (strlen($search) > 0)
			{
				$this->db->like('title', $search);
				$this->db->or_like('body', $search);
			}
		}
		
		$query = $this->db->get();
		return $query->result();
	}	
	
	/**
	 * Get a record 
	 * 
	 * @access public
	 * @param  integer $id
	 * @return object
	 */
	public function getRecord($id)
	{
		if (empty($id)) return false;
		
		$this->db->where('id', $id);
		$query = $this->db->get('blogs');
		
		return $query->row();		
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
		if (empty($id)) return false;
		
		$this->db->where('id', $id);
		$this->db->set('updated_at', 'NOW()', false);
		if ($this->db->update('blogs', $data))
		{
			return $id;
		}
		return false;
	}
	
	public function delete($id)
	{
		if (empty($id)) return false;
		
		$this->db->delete('blogs', array('id' => $id));
		return true;
	}
	
}