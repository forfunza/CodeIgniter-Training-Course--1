<!-- Output Errors -->
<?php if (isset($errors)) : ?>
<div class="alert error"><?php echo $errors; ?></div>
<?php endif; ?>

<!-- Form Input -->
<?php echo form_open('blogs/admin/edit/'.$entry->id); ?>
	<fieldset>
		<legend>Form Blogs Edit</legend>
		<p>
			<?php echo form_label('Title', 'title'); ?>
			<?php echo form_input(array(
				'name'  => 'title',
				'value' => set_value('title', $entry->title),
				'id'    => 'title',
				'class' => 'form-text-large'
			)); ?>
		</p>
		<p>
			<?php echo form_label('Body', 'body'); ?>
			<?php echo form_textarea('body', set_value('body', $entry->body)); ?>
		</p>
		<p>
			<?php echo form_label('Accept', 'accept'); ?>
			<?php echo form_checkbox('accept', '1', set_checkbox('accept', '1', false)); ?>
		</p>
		<p>
			<?php echo form_submit('submit', 'Update'); ?>
		</p>
	</fieldset>
<?php echo form_close(); ?>