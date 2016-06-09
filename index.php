


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NDR Printing - Home</title>
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
    <header id="myCarousel" class="carousel slide">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('https://scontent.xx.fbcdn.net/v/t1.0-9/12802698_978970932157594_1260642942308290777_n.jpg?oh=26d81e71d5aa013548e8f9374d56610e&oe=57AE5CB5');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>


        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>


    <div class="container">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to NDR Printing
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://scontent.xx.fbcdn.net/v/t1.0-0/s480x480/13094197_1014142265307127_5592672927464267180_n.jpg?oh=179854b49a95705dea1143bf46c96c3e&oe=57E29AFF" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item-2.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://scontent.xx.fbcdn.net/v/t1.0-9/12994316_1011593915561962_1532806155202271534_n.jpg?oh=2e5b9e8e31a240ff0130c9eba486f0fd&oe=57AA8344" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://scontent.xx.fbcdn.net/v/t1.0-9/12985608_1010422399012447_8477654581752037443_n.jpg?oh=3a4803e7d7203f64db50fccffb053dc6&oe=57AC376C" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://scontent.xx.fbcdn.net/v/t1.0-9/12963455_1008288275892526_9103245796632874041_n.jpg?oh=006f2c8a7019c606cb95e6289b274bdc&oe=57A8AADD" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://scontent.xx.fbcdn.net/v/t1.0-9/13000256_1008288152559205_5987229834467143236_n.jpg?oh=7af17d6f64b8f4b9121f0441bfa58040&oe=57A52401" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://scontent.xx.fbcdn.net/v/t1.0-9/13043325_1008288202559200_5104612745969075807_n.jpg?oh=953b6169f3a2818978481a3555a0288e&oe=57DED715" alt="">
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">NDR Printing Features</h2>
            </div>
            <div class="col-md-6">
                <p>NDR Printing includes:</p>
                <ul>
                    <li><strong>T-Shirts</strong>
                    </li>
                    <li>Sports Bottles</li>
                    <li>Eco Bags</li>
                    <li>Fordable Fans</li>
                    <li>Umbrellas</li>
                    <li>Ballpens</li>
                    <li>Laces</li>
                </ul>
                <p>NAME IT, WE'LL PRINT IT.<br>We print in all kinds of items, because when we print it, we mean it.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="https://scontent.xx.fbcdn.net/v/t1.0-9/13043231_1010937082294312_757606812808344067_n.jpg?oh=804a156c66e1e66a5b5941f3b9d7574f&oe=57DC4AE9" alt="">
            </div>
        </div>


        <hr>


        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
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

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
