<!DOCTYPE html>
<html>
	<head>
		<title>Codeigniter Bootstrap Alert log Message</title>
	</head>
	<body>
		<?php echo $this->alert->get('login_msg'); ?>

		<form method="post">
			<div class="form-group">
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-sm btn-primary">
			</div>
		</form>
	</body>
</html>
