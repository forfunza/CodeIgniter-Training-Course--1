<?php

class model_users extends MY_Model {

	private $_objectCache = array();

	public static $table = 'users';
	
	public function __construct()
	{
		parent::__construct();		
		$this->_objectCache['userInfo'] = array();
	}
	
	public function getAll()
	{
		
	}
	
	public function getRecord($id)
	{
		if (array_key_exists($id, $this->_objectCache['userInfo'])) {
			echo 'Object Cache';
			return $this->_objectCache['userInfo'][$id];
		}
	
		if (!$data = parent::getCache($id))
		{
			echo 'Use Database';
			$user = $this->db->from(static::$table)->where('id', $id);
			$data = $user->get()->row();
			parent::setCache($id, $data);
		}

		$this->_objectCache['userInfo'][$id] = $data;
		
		return $data;
	}
	
	public function insert($data)
	{
		
	}
	
	public function update($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->set('updated_at', 'NOW()', false);
		if ($this->db->update('users', $data))
		{
			parent::purgeCache($id);
			return $id;
		}
		return false;
	}
	
	public function delete($id)
	{
		if (empty($id)) return false;
		
		$this->db->delete('users', array('id' => $id));
		parent::purgeCache($id);
		return true;
	}
	
}