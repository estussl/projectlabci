<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $title;?></title>

      <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/style.css">
      <script type="text/javascript" src="<?php echo base_url();?>/assets/bootstrap/js/index.js"></script>

</head>

<body>
  <body>
  <br><br><br><br><br><br><br>
<div class="container">
  <section id="content">
     <?php echo $title;?>
    <form action="<?php echo base_url('login/masuk');?>" method="post">
      <h1>Login Form</h1>
      <div>
        <input type="text" name="username" class="form-control input-sm" id="username" required>
      </div>
      <div>
        <input type="password" name="password" class="form-control input-sm" id="password" required>
      </div>
      <div>
        <input type="submit" value="Login" />



      </div>
      <?php
        if($this->session->flashdata('pesan') <> ''){
        ?>
          <div class="alert alert-dismissible alert-danger">
            <?php echo $this->session->flashdata('pesan');?>
          </div>
        <?php
        }
        ?>

</form><!-- form -->
    <div class="button">
      <label><h3><u>Sekolah Startup Indonesia</u><h3></label>
    </div><!-- button -->
  </section><!-- content -->
</div><!-- container -->
</body>

</body>




</body>
</html>
