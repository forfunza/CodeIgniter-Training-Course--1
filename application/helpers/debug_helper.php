<?php

/**
 * Alert to debug object or arary
 * 
 * @access public
 * @param  mixed $object
 * @return string
 */
function alert($object, $die=false)
{
	echo '<pre>'.print_r($object, true).'</pre>';	
	if ($die === true) exit(0);
}