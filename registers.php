<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NDR Printing - Registration</title>
  <link rel="shortcut icon" href="ndr.png" type="image/x-icon" />
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/bootstraps.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

                        <!-- LOGIN -->
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

                       <!-- REGISTER -->
  <link href="a/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="a/style.css" rel="stylesheet" type="text/css" media="screen">
  <link href="a/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

  <script type="text/javascript" src="a/script.js"></script>
  <script type="text/javascript" src="a/validation.min.js"></script>
  <script type="text/javascript" src="a/jquery-1.11.3-jquery.min.js"></script>






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
              <a class="navbar-brand" href="index.php">NDR Printing</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="about.php">About</a>
                  </li>
                  <li>
                      <a href="services.php">Services</a>
                  </li>
                  <li>
                      <a href="contact.php">Contact</a>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="portfolio-1-col.php">1 Column Portfolio</a>
                          </li>
                          <li>
                              <a href="portfolio-2-col.php">2 Column Portfolio</a>
                          </li>
                          <li>
                              <a href="portfolio-3-col.php">3 Column Portfolio</a>
                          </li>
                          <li>
                              <a href="portfolio-4-col.php">4 Column Portfolio</a>
                          </li>
                          <li>
                              <a href="portfolio-item.php">Single Portfolio Item</a>
                          </li>
                      </ul>
                  </li>

                  <li>
                      <a href="#" role="button" data-toggle="modal" data-target="#login-modal">Login</a>
                  </li>
          </div>

      </div>

  </nav>

              <!-- LOGIN -->


  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <img class="img-circle" id="img_logo" src="ndr.png">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
      </div>

              <!-- Begin # DIV Form -->
              <div id="div-forms">

                  <!-- Begin # Login Form -->
                  <form method="post" action="verify1.php" class="login">

                  <form id="login-form">
                  <div class="modal-body">
              <div id="div-login-msg">
                              <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                              <span id="text-login-msg">Type your username and password.</span>
                          </div>
              <input id="login_username" name="email" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
              <input id="login_password" name="password" class="form-control" type="password" placeholder="Password" required>
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox"> Remember me
                              </label>
                          </div>
                </div>
              <div class="modal-footer">
                          <div>
                              <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                          </div>
                <div>
                              <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                              <a href=registers.php><button id="login_register_btn" type="button" class="btn btn-link">Register</button></a>
                          </div>
              </div>
                  </form>
                  <!-- End # Login Form -->

                  <!-- Begin | Lost Password Form -->
                  <form id="lost-form" style="display:none;">
                <div class="modal-body">
              <div id="div-lost-msg">
                              <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                              <span id="text-lost-msg">Type your e-mail.</span>
                          </div>
              <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                </div>
              <div class="modal-footer">
                          <div>
                              <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                          </div>
                          <div>
                              <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                              <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                          </div>
              </div>
                  </form>
                  <!-- End | Lost Password Form -->

                  <!-- Begin | Register Form -->
                  <form id="register-form" style="display:none;">
                  <div class="modal-body">
              <div id="div-register-msg">
                              <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                              <span id="text-register-msg">Register an account.</span>
                          </div>
              <input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                          <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                          <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                </div>
              <div class="modal-footer">
                          <div>
                              <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                          </div>
                          <div>
                              <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                              <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                          </div>
              </div>
                  </form>
                  <!-- End | Register Form -->

              </div>
              <!-- End # DIV Form -->



    </div>
  </div>
</div>

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

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
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

<script src="a/bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
