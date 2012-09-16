<html>
	<head>
		<title>Blogs Add</title>
		<meta http-equiv="Content-Type" content="text/html;charset=<?php echo config_item('charset'); ?>" />		
	</head>
	<body>
		
		
		<?php echo form_open('', null, array('confirm' => 1)); ?>
		<p>Please confirm to delete</p>
		<p><?php echo form_submit('confirm', 'Confirm'); ?></p>
		<?php echo form_close(); ?>
		
		
	</body>
</html>