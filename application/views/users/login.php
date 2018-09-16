<!DOCTYPE html>
<html lang="en">  
<head>
	  <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
</head>
<body>
<div class="container">
    <!-- validation -->
	<div class="grids">
		<div class="progressbar-heading grids-heading">
			<div class="container">
				<div class="row">
						<div class="col-lg-4"></div>
						<div class="col-lg-4"><img src="http://joshuaberkowitz.us/TVCOM2/CodeIgniter/images/tvcom-web-logo-300.png" width="300" /></div>
						<div class="col-lg-4"></div>
				</div>
			</div>
			<h2>User Login</h2>
		</div>
		
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
						<div class="input-info">
							<h3>Login Form :</h3>
							<?php 
								if(!empty($success_msg)){
									echo '<p class="statusMsg">'.$success_msg.'</p>';
								}elseif(!empty($error_msg)){
									echo '<p class="statusMsg">'.$error_msg.'</p>';
								}
							?>
						</div>
						<div class="form-body form-body-info">
							<form action="" method="post">
								<div class="form-group has-feedback">
									<input type="email" class="form-control inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="">
									<?php echo form_error('email','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
								  <input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
								  <?php echo form_error('password','<span class="help-block">','</span>'); ?>
								</div>
								<div class="form-group">
									<input type="submit" name="loginSubmit" class="btn-primary" value="Submit"/>
								</div>
							</form>
						</div>
						<p class="footInfo">Don't have an account? <a href="<?php echo base_url(); ?>index.php/users/registration">Register here</a></p>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
	</div>
	<!-- //validation -->
</div>
</body>
</html>