<?php

class User extends DataMapper {

	var $table = 'users';

	var $has_many = array('blog');
	
	function __construct($id = NULL)
    {
        parent::__construct($id);
    }
	
}