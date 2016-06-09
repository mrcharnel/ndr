<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NDR Printing - About</title>
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

    <div class="container">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About

                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="https://scontent.xx.fbcdn.net/v/t1.0-9/12802698_978970932157594_1260642942308290777_n.jpg?oh=26d81e71d5aa013548e8f9374d56610e&oe=57AE5CB5" alt="">
            </div>
            <div class="col-md-6">
                <h2>About NDR Printing</h2>

                <?php
                include ("dbconnection.php");
                $view="select * from tbledit";
                $result=mysql_query($view);
                $bilang=mysql_num_rows($result);
                while ($record=mysql_fetch_array($result))



                {
                $a=$record['id'];
                $b=$record['text'];

                print"<p class='editable_textarea' id='paragraph_1'>$b</p>";


                }
                ?>



              </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>Sir Noel<br>
                            <small>Owner</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>

                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>

                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>

                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>

                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                    <div class="caption">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>

                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Customers</h2>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="https://yt3.ggpht.com/-2djsejYggtA/AAAAAAAAAAI/AAAAAAAAAAA/FK84TFH-vw0/s900-c-k-no/photo.jpg" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
        </div>


        <hr>


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
