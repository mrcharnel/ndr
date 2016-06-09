<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NDR Printing - About</title>
  <link rel="shortcut icon" href="../ndr.png" type="image/x-icon" />
  <link href="../css/modern-business.css" rel="stylesheet">
  <link href="../css/bootstraps.css" rel="stylesheet">
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="../js/bootstraps.js" type="text/javascript"></script>
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
                      <a>Name</a>
                  </li>
          </div>

      </div>

  </nav>



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
                include ("../dbconnection.php");
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
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
