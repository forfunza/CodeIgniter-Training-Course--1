<?php

class model_blogs extends CI_Model {
	
	public function getAll()
	{
		
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