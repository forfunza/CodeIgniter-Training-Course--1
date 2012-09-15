<html>
	<head>
		<title>Blogs Add</title>
		<meta http-equiv="Content-Type" content="text/html;charset=<?php echo config_item('charset'); ?>" />
		
		<style type="text/css">
		.alert { border: solid 1px; padding: 10px; margin-bottom: 20px; }
		.alert.error { border-color: red; }
		</style>
		
	</head>
	<body>
		
		<!-- Output Errors -->
		<?php if (isset($errors)) : ?>
		<div class="alert error"><?php echo $errors; ?></div>
		<?php endif; ?>
		
		<!-- Form Input -->
		<?php echo form_open('blogs/add'); ?>
			<fieldset>
				<legend>Form Blogs Add</legend>
				<p>
					<?php echo form_label('Title', 'title'); ?>
					<?php //echo form_input('title', ''); ?>
					<?php echo form_input(array(
						'name'  => 'title',
						'value' => set_value('title'),
						'id'    => 'title',
						'class' => 'form-text-large'
					)); ?>
				</p>
				<p>
					<?php echo form_label('Body', 'body'); ?>
					<?php echo form_textarea('body', set_value('body')); ?>
				</p>
				<p>
					<?php echo form_submit('submit', 'Submit'); ?>
				</p>
			</fieldset>
		<?php echo form_close(); ?>
		
	</body>
</html>