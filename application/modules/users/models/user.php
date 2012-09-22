<?php

class User extends DataMapper {

	var $table = 'users';
	
	/*var $created_field = 'created_at';
	var $updated_field = 'updated_at';
	var $local_time = FALSE;
	var $unix_timestamp = FALSE;*/

	var $has_many = array('blog');
	
	function __construct($id = NULL)
    {
        parent::__construct($id);
    }
	
}