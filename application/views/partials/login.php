<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ujian Login</title>
  <base href="<?php echo site_url();?>" />
  <link rel="stylesheet" href="lib/css/bootstrap.min.css" />
  <link rel="stylesheet" href="lib/css/custom.css" />
</head>
<body class="login-bg">
  <div class="wrapper">
    <form class="form-signin" method="post" action="login/do_login">
      <h2 class="form-signin-heading tengah">Login Form</h2>
      <?php echo tampil_pesan(); ?>
      <input type="text" class="form-control input-sm" name="username" placeholder="Username" required="" autofocus="" />
      <br>
      <input type="password" class="form-control input-sm" name="password" placeholder="Password" required=""/>
      <br>
      <button class="btn btn-sm btn-primary btn-block" type="submit">Login</button>
    </form>
  </div>
  <script type="text/javascript" src="lib/js/jquery.min.js"></script>
  <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(500, function(){
      $(this).remove();
    });
  }, 2000);
  </script>
</body>
</html>
