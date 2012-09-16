<?php

class Blog extends DataMapper {

	var $table = 'blogs';
	
	var $has_one = array('user');
	
	function __construct($id = NULL)
    {
        parent::__construct($id);
    }
	
}