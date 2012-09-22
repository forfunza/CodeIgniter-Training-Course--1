<?php

class MY_Model extends CI_Model {

	protected static $cache_driver = 'file';

	public function __construct()
	{
		parent::__construct();		
		//$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
		$this->load->driver('cache', array('adapter' => static::$cache_driver));
	}
	
	public function getCache($id)
	{
		$ckey = $this->getKeyCache($id);
		return $this->cache->get($ckey);
	}
	
	public function setCache($id, $value, $ttl=300)
	{
		$ckey = $this->getKeyCache($id);
		return $this->cache->save($ckey, $value, $ttl);
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