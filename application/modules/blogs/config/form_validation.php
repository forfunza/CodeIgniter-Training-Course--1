<?php

/**
 * Form input blogs add
 * URL: /blogs/add
 */ 
$config['blogs/admin/add'] = array(
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

/**
 * Form input blogs edit
 * Inherit: blogs/add
 * URL: /blogs/edit
 */ 
$config['blogs/admin/edit'] = array_merge($config['blogs/admin/add'], array(
	array(
		'field' => 'title', 
		'label' => 'Title', 
		'rules' => ''
	),
	array(
		'field' => 'accept',
		'label' => 'Accept',
		'rules' => 'required'
	)	
));