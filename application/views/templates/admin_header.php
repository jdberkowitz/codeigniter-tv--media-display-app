<!doctype html>
<html>
<html>
        <head>
                <title>TVCOM</title>
				  <meta name="viewport" content="width=device-width, initial-scale=1">
				  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

					<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
					<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />

					<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>	
					<style>.container{width:1500px;}</style>			
        </head>
        <body>
			
			<div class="container">
			
				<div class="row">

					<div class="col-lg-4"><img src="http://joshuaberkowitz.us/TVCOM2/CodeIgniter/images/tvcom-web-logo-300.png" width="300" /></div>
					<div class="col-lg-8"></div>

				</div>
			
				<div class="row">
				
					<div class="col-lg-12" style="margin-top: 25px;">
					
					
					
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#">TVCOM ADMIN</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li ><a href="<?php echo base_url(); ?>index.php/admin/index">Home</a></li>

	  				<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Add Item <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="<?php echo base_url(); ?>index.php/admin/Addlocation">Add Locatiopn</a></li>
						<li role="separator" class="divider"></li>						  
						<li><a href="<?php echo base_url(); ?>index.php/admin/addVideo">Add Video</a></li>

					  </ul>
					  <li><a href="<?php echo base_url(); ?>index.php/users/logout" class="logoutBtn">Logout</a></li>	
					</li>
				  </ul>
				  

				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>					
					
					
					
					</div>
				
				</div>				
				
				
			</div>


			