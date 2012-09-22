<?php

class MY_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();		
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
	}
	
	public function getCache($id)
	{
		$ckey = $this->getKeyCache($id);
		return $this->cache->get($ckey);
	}
	
	public function setCache($id, $value, $ttl=300)
	{
		$ckey = $this->getKeyCache($id);
		return $this->cache->save($ckey, $values, $ttl);
	}
	
	public function purgeCache($id)
	{
		$ckey = $this->getKeyCache($id);
		return $this->cache->delete($ckey);
		
		
	}
	
	public function getKeyCache($id)
	{
		return static::$table.'_'.$id;
	}
	
}