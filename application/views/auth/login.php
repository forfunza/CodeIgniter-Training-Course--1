<div class="page-header">
	<h1>Login</h1>
</div>
<!-- <h2>Default styles</h2> -->
<?php echo form_open('auth/login', array('class'=>'form-horizontal')); ?>
	<fieldset>
		<legend>Do login</legend>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Email</label>
			<div class="controls">
				<input type="text" name="email" id="inputEmail" placeholder="Email">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
				<input type="password" name="password" id="inputPassword" placeholder="Password">
			</div>
		</div>		
		<div class="control-group">
			<div class="controls">
				<label class="checkbox">
					<input type="checkbox"> Remember me
				</label>
				<button type="submit" class="btn">Sign up</button>
			</div>
		</div>
	</fieldset>
<?php echo form_close(); ?>
