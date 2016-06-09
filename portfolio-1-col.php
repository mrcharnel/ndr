<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NDR Printing - Contact</title>
  <link rel="shortcut icon" href="ndr.png" type="image/x-icon" />
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/bootstraps.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="js/bootstraps.js" type="text/javascript"></script>
                        <!-- LOGIN -->
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">One Column Portfolio
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">One Column Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project One</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Two</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
                <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Three</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
                <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Four</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class="btn btn-primary" href="portfolio-item.html">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project Five</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident ex quisquam hic odio repellendus atque porro distinctio quae id laboriosam facilis dolorum.</p>
                <a class="btn btn-primary" href="#">View Project</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; NDR Printing 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
