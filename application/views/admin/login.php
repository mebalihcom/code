<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrator - Login</title>
	<link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/admin/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/admin/css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<div id="infoMessage"><?php echo $message;?></div>
					<?php echo form_open("auth/login");?>
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="identity" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="1" id="remember">Remember Me
								</label>
							</div>
							<button type="submit" name="submit" value="submit" class="btn btn-primary">Login</a></fieldset>
					</form>
					<?php echo form_close();?>
					<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<script src="<?php echo base_url();?>assets/admin/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>
