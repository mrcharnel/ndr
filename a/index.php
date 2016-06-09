<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NDR - Registration</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">

<script type="text/javascript" src="script.js"></script>

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">

					<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.html">NDR Printing</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
									<li>
											<a href="about.html">About</a>
									</li>
									<li>
											<a href="services.html">Services</a>
									</li>
									<li>
											<a href="contact.html">Contact</a>
									</li>
									<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
											<ul class="dropdown-menu">
													<li>
															<a href="portfolio-1-col.html">1 Column Portfolio</a>
													</li>
													<li>
															<a href="portfolio-2-col.html">2 Column Portfolio</a>
													</li>
													<li>
															<a href="portfolio-3-col.html">3 Column Portfolio</a>
													</li>
													<li>
															<a href="portfolio-4-col.html">4 Column Portfolio</a>
													</li>
													<li>
															<a href="portfolio-item.html">Single Portfolio Item</a>
													</li>
											</ul>
									</li>

									
					</div>

			</div>

	</nav>




<div class="signin-form">

	<div class="container">


       <form class="form-signin" method="post" id="register-form">

        <h2 class="form-signin-heading">Sign Up</h2><hr />

        <div id="error">
        <!-- error will be showen here ! -->
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
        </div>

        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
        </div>
     	<hr />

        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
			</button>
        </div>

      </form>

    </div>

</div>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
