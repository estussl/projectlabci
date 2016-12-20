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

    <title>Selamat Datang di Website Sekolah Startup</title>

    <!-- Date Picker -->
    <script src="<?php echo base_url();?>/assets/js/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url();?>/assets/js/moment.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/transition.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/collapse.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap-datetimepicker.js"></script>
    <link href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap-datetimepicker.css" rel="stylesheet">

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
    <style>
      body
      {
         padding-top:90px;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/carousel.css" rel="stylesheet">
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
              <a class="navbar-brand" href="<?php echo base_url();?>">Sekolah Startup</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li>
                <?php echo anchor('guru', 'Daftar Guru');?>
                <li>
                <?php echo anchor('nilsis', 'Daftar Nilai');?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="http://localhost/websekolah/index.php/guru">Trainer</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="Login">New One</a></li>
                    <li><a href="Login/keluar">Else</a></li>
                    </ul>

                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                   <li><a href="<?php echo base_url()?>Login">Login</a></li>
                   </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <div class="container">
      <div class="row">
         <div class="col-md-12">
            <center>
            <h1>Form Pendaftaran</h1>
            </center>
         </div>
      </div>
   </div>

    <br/>
    <!-- Form Pendaftaran -->
    <div class="container">
      <div class="row">
         <div class="col-md-12">
         <form class="form-horizontal" method="POST" action="<?php echo base_url();?>Daftar_Siswa/proses_pendaftaran">
            <div class="form-group">
               <label for="namaLengkap" class="col-md-2 control-label">Nama Lengkap</label>
                  <div class="col-md-5">
                     <input type="text" name="nama_lengkap" class="form-control" id="namaLengkap" placeholder="Nama Lengkap">
                  </div>
            </div>

            <!-- Alamat -->
            <div class="form-group">
               <label for="alamat" class="col-md-2 control-label">Alamat</label>
                  <div class="col-md-5">
                     <textarea name="alamat" class="form-control" rows="2" id="alamat" placeholder="Alamat"></textarea>
                  </div>
            </div>

            <div class="form-group">
               <label for="tempatLahir" class="col-md-2 control-label">Tempat Lahir</label>
                  <div class="col-md-5">
                     <input type="text" name="tempat_lahir" class="form-control" id="tempatLahir" placeholder="Tempat Lahir">
                  </div>
            </div>

            <!-- Tanggal Lahir -->
            <div class="form-group">
               <label for="tanggalLahir" class="col-md-2 control-label">Tanggal Lahir</label>
               <div class="col-md-5">
                  <div class="input-group date" id="tanggal_lahir">
                     <input type="text" name="tanggal_lahir" class="form-control"/>
                     <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
                  <script type="text/javascript">
                     $(function () {
                        $('#tanggal_lahir').datetimepicker(
                           {
                              format: 'DD/MM/YYYY'
                           }
                        );
                     });
                  </script>
               </div>
            </div>

            <!-- Jenis Kelamin -->
            <div class="form-group">
              <label for="jenisKelamin" class="col-md-2 control-label">Jenis Kelamin</label>
                <div class="col-md-5">
                  <div class="radio-inline">
                    <label>
                      <input type="radio" name="jenis_kelamin" id="jenis_kelamin_L" value="L">
                      Laki-Laki
                    </label>
                  </div>

                  <div class="radio-inline">
                    <label>
                      <input type="radio" name="jenis_kelamin" id="jenis_kelamin_P" value="P">
                      Perempuan
                    </label>
                  </div>
                </div>
            </div>

            <!-- Email -->
            <div class="form-group">
              <label for="email" class="col-md-2 control-label">Email</label>
              <div class="col-md-5">
                <input type="email" name="email" class="form-control" id="email" placeholder="email">
              </div>
            </div>

            <div class="form-group">
               <div class="col-md-offset-2 col-md-10">
                  <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
               </div>
            </div>
      </form>
      </div>
   </div>
</div>


      <!-- FOOTER -->
   <div class="container">
      <div class="row">
         <div class="col-md-12">
         <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
         </footer>
      </div>
      </div>
   </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url();?>/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>/assets/dist/js/bootstrap.min.js"></script> -->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url();?>/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>/assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>
</html>
