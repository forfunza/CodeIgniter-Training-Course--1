<div class="page-header">
	<h1>Register</h1>
</div>
<!-- <h2>Default styles</h2> -->
<?php echo form_open('users/register', array('class'=>'form-horizontal')); ?>
	<fieldset>
		<legend>Please input to register</legend>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Email</label>
			<div class="controls">
				<input type="text" name="email" id="inputEmail" placeholder="john@domain.com">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
				<input type="password" name="password" id="inputPassword">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Re-Password</label>
			<div class="controls">
				<input type="password" name="repassword" id="inputPassword">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn">Sign up</button>
			</div>
		</div>
	</fieldset>
<?php echo form_close(); ?>
