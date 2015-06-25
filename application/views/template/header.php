<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Asmiranda</title>

	    <!-- Bootstrap -->
	    <link href="/lib/css/bootstrap.min.css" rel="stylesheet">
	    <link href="/lib/css/datepicker3.css" rel="stylesheet">
	    <link href="/lib/css/bootstrap-theme.min.css" rel="stylesheet">
	    <link href="/lib/css/font-awesome.min.css" rel="stylesheet">
		<link href="/lib/css/jquery.fileupload.css" rel="stylesheet">
		<link href="/lib/css/jquery.fileupload-ui.css" rel="stylesheet">

		<!-- Main Style -->
		<link href="/lib/css/main.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
  	</head>
  	<body>

  		<!--- NAVBAR -->
 	<div class="header">
		<div class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
	            <div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					   	<span class="sr-only">Toggle navigation</span>
				     	<span class="icon-bar"></span>
				       	<span class="icon-bar"></span>
				       	<span class="icon-bar"></span>
				    </button>
	            </div>
	                            
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
	                   	<li><a href="/home"><i class="glyphicon glyphicon-home"></i> Home</a></li>
	                   	<?php if($this->session->userdata('logged_in')) { ?>
	                   	<li><a href="/dashboard"><i class="glyphicon glyphicon-list"></i> Dashboard</a></li>
	                   	<?php } ?>
					</ul>
					<?php if($this->session->userdata('logged_in')) { ?>
					<ul class="nav navbar-nav navbar-right">
					    <li class="dropdown">
					       	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						    <i class="glyphicon glyphicon-user"></i> <?php echo $email; ?> <span class="caret"></span>
						    </a>
						    <ul class="dropdown-menu">
						       	<li><a href="<?php echo site_url('account/logout'); ?>">Logout</a></li>
						    </ul>
						</li>			    	
					</ul>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
		   