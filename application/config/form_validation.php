<?php

// define rules
$config['blogs/add'] = array(
	// input title
	array(
		'field' => 'title', // input name="title"
		'label' => 'Title', 
		//'rules' => 'required|min_length[3]|callback__username_check'
		'rules' => 'required'
	),
	// textarea body
	array(
		'field' => 'body', // textarea name="body"
		'label' => 'Body', 
		'rules' => 'required'
	)				
);