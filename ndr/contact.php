<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NDR Printing - Contact</title>
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
                <h1 class="page-header">Contact

                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>

        <div class="row">

            <div class="col-md-8">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2295.1722928034305!2d120.98167682995619!3d14.655696921318928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b42becdab799%3A0x770a5c394d910231!2sVictory+Central+Mall!5e0!3m2!1sen!2sph!4v1462865549867" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                3rd level of Victory Central Mall<br>
                Rizal Ave Ext, Caloocan,<br> Metro Manila<br>
                </p>
                <p><i class="fa fa-mobile"></i>
                    <abbr title="Phone">Globe</abbr>: 0915 290 4246</p>
                     <p><i class="fa fa-mobile"></i>
                    <abbr title="Phone">Sun</abbr>: 0925 745 8594</p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">ndrprinting@yahoo.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i>
                    <abbr title="Hours">H</abbr>: Monday - Sunday: 10:00 AM to 8:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/NdrPrintingServices"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
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

    <script src="../js/jquery.js"></script>


    <script src="../js/bootstrap.min.js"></script>


    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

</body>

</html>
