<?php echo validation_errors();?>
	<form action="" method="post">
		name <input type="text" name="name" value="<?php echo set_value('name')?>" />
		<?php echo form_error('name','<span>','</span>')?>
		<br>
		password <input type="password" name="password" /><br>
		email <input type="text" name="email" value="<?php echo set_value('email')?>" />
		<?php echo form_error('email')?>
		<br>
		<input type="submit" value="submit" />
	</form>