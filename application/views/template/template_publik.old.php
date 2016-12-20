<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>/assets/favicon.ico">

    <title>Website Sekolah Startup</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>/assets/bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/carousel.css" rel="stylesheet">
    <style>
      body
      {
         position:relative;
      }

      .baris
      {
         padding-top: 90px;
      }

      footer
      {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        background-color: #efefef;
      }
    </style>

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php
                  if(isset($username))
                  {
                     if($jenis_user == 1)
                     {
                        echo base_url() . "Siswa";
                     }
                     else if($jenis_user == 2)
                     {
                        echo base_url() . "Guru";
                     }
                  }

              ?>">Sekolah Startup</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                 <?php
                     if(isset($username))
                     {
                        if($jenis_user == 1) // Kalau siswa yang login
                        {
                           echo "<li>";
                           echo anchor(base_url() . 'Siswa/lihat_nilai', 'Nilai');
                        }
                        else if($jenis_user == 2)
                        {
                           echo "<li>";
                           echo anchor(base_url() . 'Guru', 'Kelola Nilai');
                        }
                     }
               ?>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Trainer</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One moreee</a></li>
                  </ul>
                </li> -->
              </ul>
              <ul class="nav navbar-nav navbar-right">
                   <!-- <li><a href="login/keluar">Logout</a></li> -->
                   <?php
                        if(isset($username))
                        {
                           echo "<li><a href='" . base_url() . "Login/keluar'>Log out</a></li>";
                        }
                        else
                        {
                           echo "<li><a href='" . base_url() . "Login'>Log in</a></li>";
                        }
                    ?>
                   </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

<!-- Carousel
    ================================================== -->

<!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->



      <!-- Three columns of text below the carousel -->
      <?php echo $contents;?>





      <!-- START THE FEATURETTES -->





      <!-- /END THE FEATURETTES -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url();?>/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>/assets/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url();?>/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
