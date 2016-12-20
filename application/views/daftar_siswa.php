<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sekolah Startup</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets_pub/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets_pub/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets_pub/css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    
<!-- Date Picker -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/moment.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/transition.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/collapse.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap-datetimepicker.js"></script>
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-datetimepicker.css" rel="stylesheet">

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

<body id="page-top">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand " href="<?php echo base_url();?>">Sekolah Startup</a>
            <button class="btn btn-primary btn-toggle hidden-md-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fa fa-bars"></i></button>
            <!-- Clearfix with a utility class added to allow for better navbar responsiveness. -->
            <div class="clearfix hidden-md-up"></div>
            <div class="collapse navbar-toggleable-sm" id="navbarResponsive">
                <ul class="nav navbar-nav float-md-right">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url()?>#services"> <font color="#808080">Services</font></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url()?>#portfolio"><font color="#808080">Portfolio</font></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url()?>#about"><font color="#808080">About</font></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url()?>#team"><font color="#808080">Team</font></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?php echo base_url();?>Login"><font color="#808080">Login</font></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

       
    


    <!--==========PAGE CONTENT===========-->

    
    <div class="container ">
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
    
      <div class="row">
         <div class="col-md-12">
         <form class="form-horizontal" method="POST" action="<?php echo base_url();?>Daftar_Siswa/proses_pendaftaran">
            
            <div class="col-md-2">
            </div>
            <div class="form-group">
               <label for="namaLengkap" class="col-md-2 control-label">Nama Lengkap</label>
                  <div class="col-md-5">
                     <input required="" type="text" name="nama" class="form-control col-md-2" id="namaLengkap" placeholder="Nama Lengkap">
                  </div>
            </div>


            <!-- Alamat -->
            <div class="col-md-2">
            </div>
            <div class="form-group">
               <label for="alamat" class="col-md-2 control-label">Alamat</label>
                  <div class="col-md-5">
                     <textarea required name="alamat" class="form-control" rows="2" id="alamat" placeholder="Alamat"></textarea>
                  </div>
            </div>

            <div class="col-md-2">
            </div>
            <div class="form-group">
               <label for="tempatLahir" class="col-md-2 control-label">Tempat Lahir</label>
                  <div class="col-md-5">
                     <input required type="text" name="tmpt_lahir" class="form-control" id="tempatLahir" placeholder="Tempat Lahir">
                  </div>
            </div>

            <!-- Tanggal Lahir -->
            <div class="col-md-2">
            </div>

            <div class="form-group">
               <label for="tanggalLahir" class="col-md-2 control-label">Tanggal Lahir</label>
               <div class="col-md-5">
                  <div class="input-group date" id="tanggal_lahir">
                     <input required  type="text" name="tgl_lahir" class="form-control"/>
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
            <div class="col-md-2">
            </div>
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
            <div class="col-md-2">
            </div>
            <div class="form-group">
              <label for="email" class="col-md-2 control-label">Email</label>
              <div class="col-md-5">
                <input required type="email" name="email" class="form-control" id="email" placeholder="email">
              </div>
            </div>

             <div class="col-md-6">
            </div>
            <div class="form-group">
              
              <div class="col-md-5">
                <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
              </div>
            </div>

            
      </form>
      </div>
   </div>


    <!--==========PAGE CONTENT ENDS===========-->


    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url();?>assets_pub/img/logos/envato.jpg" class="img-fluid img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url();?>assets_pub/img/logos/designmodo.jpg" class="img-fluid img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url();?>assets_pub/img/logos/themeforest.jpg" class="img-fluid img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo base_url();?>assets_pub/img/logos/creative-market.jpg" class="img-fluid img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Sekolah StartUp 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="<?php echo base_url();?>assets_pub/img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="<?php echo base_url();?>assets_pub/img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="<?php echo base_url();?>assets_pub/img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="<?php echo base_url();?>assets_pub/img/portfolio/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="<?php echo base_url();?>assets_pub/img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="<?php echo base_url();?>assets_pub/img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <!-- <script src="<?php echo base_url();?>/assets_pub/vendor/jquery/jquery.min.js"></script> -->

    <!-- Tether -->
    <script src="<?php echo base_url();?>/assets_pub/vendor/tether/tether.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="<?php echo base_url();?>/assets_pub/vendor/bootstrap/js/bootstrap.min.js"></script> -->

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url();?>/assets_pub/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>/assets_pub/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url();?>/assets_pub/js/agency.min.js"></script>


    <script src="<?php echo base_url();?>/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>/assets/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>
